<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Post;
use App\Models\validasi;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    use HasFactory;
    public function __construct()
    {
       
    }

    public function index()
    {
        //get users form Model
        $pesans = Pesanan::latest()->get();
        return view('pesan', compact('pesans'));
    }
    // public function post(Request $request)
    // {   
       
    //     $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
    //     $pesanans = Pesanan::where('pesanan_id',$pesanan->id)->get();
    //     $tanggal = Carbon::now();
      
      
    //     if($request->image){
    //             $imageName = '-image-'.time().rand(1,10000).'.'.$request->image->extension();
    //             $request->image->store('post-image');
    //             validasi::create([
    //                 'pesanan_id' =>$pesanan->id,
    //                 'image' =>$imageName,
    //                 'tanggal' =>$tanggal
    //             ]);
        
                        
    //         }
            
        

    //     // $validatedData ['image'] = $request->file('image')->store('post-image');
    //     // validasi::create([
    //     //     'pesanan_id' => $pesanan->id,
    //     //     'gambar' => $validatedData,
    //     //     'tanggal' => $tanggal
         
    //     // ]);
    //     return redirect('/history')->with('success','New Post has been added');
    // }


}
