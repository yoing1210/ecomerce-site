<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\image;
use App\Models\PostImg;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;
use PhpParser\Parser\Multiple;
use Throwable;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('dashboard.posts.index',[
            'posts' => Post::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * 
     */
    public function store (Request $request)
    {

    

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'price' => 'required',
            'stock' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'body' => 'required'
        ]);
        
        //  $validatedData['image'] = $request->file('image')->store('post-images');
        
        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['user_id'] = 1;

        $new_post = Post::create($validatedData);
    
        
        if($request->has('image')){
            $image = array();
            foreach($request->image as $image){
                $imageName = $validatedData['title'].'-image-'.time().rand(1,10000).'.'.$image->extension();
                $image->move(public_path('post_images'),$imageName);
                image::create([
                    'post_id' =>$new_post->id,
                    'gambar' =>$imageName,

                ]);
        
                        
            }
            
        }
        
        return redirect('/dashboard/posts')->with('success','New Post has been added');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',[
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image',
            'body' => 'required'
        ];


        

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        // if ($request->file('image')){
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        $validatedData['user_id'] = auth()->user()->id;

        Post::where('id',$post->id)->update($validatedData);
                

        return redirect('/dashboard/posts')->with('success','Post has been edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        if($post->image){
            Storage::delete($post->id);
        } 

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success','Post has been deleted');
    }

    public function checkSlug (Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=> $slug]);
    }
}
