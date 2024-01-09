<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Pesanan;
use App\Models\User;
use Carbon\Carbon;
use App\Models\PesananDetail;
use App\Models\validasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


/**
 * Summary of PostController
 */
class PostController extends Controller
{
    public function index(Request $request)
    {


        $posts = Post::latest();

        if(request('search')) {
            $posts->where('title','like', '%' . request('search') . '%')
                ->orWhere('body','like', '%' . request('search') . '%');
          
        }

        return view('posts', [
            "title" => "Produk",
            "active" => 'posts',
            "posts" => $posts->get()
        ]);

        
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "$post->slug",
            "active" => 'produk',
            "post" => $post
        ]);
    }

    public function post(Request $request, $slug)
    {


        $post = Post::where('slug', $slug)->first();
        $tanggal =Carbon::now();

        //cek apakah melebihi stock
        if($request->jumlah_pesan > $post->stock) {
            return redirect('posts/'.$slug);
        }

        // cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        // simpan ke database pesanan
        if(empty($cek_pesanan)) {
            $pesanan = new Pesanan();
            $pesanan->id = 0;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(100, 900);
            $pesanan->save();
        }
        // simpan ke database pesanan detail
        $pesanan_baru = Pesanan::with(['post'])->where('user_id', Auth::user()->id)->where('status', 0)->first();



        //cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('post_id', $post->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail)) {
            $pesanan_detail = new PesananDetail();
            $pesanan_detail->post_id = $post->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $post->price*$request->jumlah_pesan;
            $pesanan_detail->color = $request->color;
            $pesanan_detail->pesan = $request->pesan;
            $pesanan_detail->save();
        } else {    
            $pesanan_detail = PesananDetail::where('post_id', $post->id)->where('pesanan_id', $pesanan_baru->id)->first();

            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            //jika pesan produk dengan item sama kuantitas atau jumlah item akan bertambah di row yang sama
            $harga_pesanan_detail_baru = $post->price*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }


        //jumlah total akhir
        // $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        // $pesanan->jumlah_harga = $pesanan->jumlah_harga+$post->price*$request->jumlah_pesan;
        // $pesanan->update();


        return redirect('cart')->with('success', 'Pemesanan Berhasil !');

    }






    public function validasi(Request $request, $id)
    {
        $cek_image = $request->file('image')=="";
        if(($cek_image)){
            return redirect('history/'.$id)->with('fail','Image Error, Please Resend');
        }
        
        $pesanan = Pesanan::where('id', $id)->first();
        $tanggal = Carbon::now();
        $image = $request->file('image')->store('post-images');
        // cek validasi
        $cek_validasi = validasi::where('pesanan_id',$pesanan->id)->first();
        if(empty($cek_validasi)) {
            $validasi = new validasi();
            $validasi->id = 0;
            $validasi->pesanan_id = $pesanan->id;
            $validasi->image = $image;
            $validasi->tanggal = $tanggal;
            $validasi->save();
        }
        // simpan ke database pesanan detail
        $pesanan = Pesanan::where('id',$id)->where('status', 1)->first();

        $pesanan->status = 3;
        $pesanan->update();


        //redirect to index
        return redirect('history')->with(['success' => 'Data Berhasil Disimpan!']);
    

    }





 // edit

    public function edit($id)
    {
        
        $pesanan_detail = PesananDetail::where('id',$id)->first();

        return view('editCart',[
            'title' => 'editCard',
            "active" => 'editCard',
            'post' => Post::all()
        ], compact( 'pesanan_detail'));
            
    }



    public function update(Request $request, $id)
    {
        
         //cek pesanan detail
        $data = PesananDetail::find($id);
        $data->jumlah = $request->jumlah_pesan;
        $data->color = $request->color;
        $data->pesan = $request->pesan;
        $data->jumlah_harga = $data->post->price*$request->jumlah_pesan;
        $data->update();

        // //jumlah total
        // $pesanan = Pesanan::where('id', $data->pesanan_id)->where('status', 0)->first();
        // // $pesanan->jumlah_harga = 0;
        // $pesanan->jumlah_harga=0;

        return redirect('cart')->with('success', 'Edit keranjang berhasil !');

    }



 










        
        
        // dd($request);
        // //validate form
        // $this->validate($request, [
        //     'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $tanggal =Carbon::now();
        // //upload image
        // $image = $request->file('image');
        // $image-> storeAs('post-images', $image->hashName());
        // $request['pesanan_id'] = Pesanan::where('id')->where('status', 0);

        // //create post
        // validasi::create([
        //     'gambar'     => $image->hashName(),
        //     'tanggal'     => $tanggal
        // ]);

       

        


        // public function destroy($id)
        // {
        //     $pesanan_detail = PesananDetail::where('id', $id)->first();
    
        //     $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        //     $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        //     $pesanan->update();
    
        //     $pesanan_detail->delete();
        //     return redirect('cart')->with('Pesanan di hapus');
        // }
        public function status($id){

            
                $pesanan = Pesanan::where('id',$id)->where('status', 3)->first();

                $pesanan->status = 2;
                $pesanan->update();

                return redirect('dashboard/');  
        }

        public function batalkan($id){

            
                $pesanan = Pesanan::where('id',$id)->where('status', 1)->first();

                $pesanan->status = 5;
                $pesanan->update();

                return redirect('history');
        }



    public function cart()
    {
  
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(!empty($pesanan)) {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            return view('cart', [
                'title' => 'My Cart',
                "active" => 'cart',
                'post' => Post::all()
                
            ], compact('pesanan', 'pesanan_details'));
        }
        return view('cart', [
            'title' => 'My Cart',
            "active" => 'cart',
            'post' => Post::all()
        ]);
    }



    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();
        
        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;

        $pesanan->update();

        $pesanan_detail->delete();
        return redirect('cart')->with('Pesanan di hapus');
    }



    // public function total(Request $request)
    // {
    //     $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
    //     $pesanan_id=$pesanan->id;
    //     $pesanan->jumlah_harga=$request->total;
    //     $pesanan->update();

    //     return redirect('history/'.$pesanan_id);
    // }



    public function konfirmasi(Request $request)
    {

        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat)) {
            return redirect('profile')->with('Harap Lengkapi Identitas');
        }

        if(empty($user->hp)) {
            return redirect('/profile')->with('error', 'Harap Lengkapi Identitas');
        }

        // tambah status
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_id=$pesanan->id;
        $pesanan->status = 1;
        $pesanan->jumlah_harga=$request->total;
        $pesanan->update();

        // kurangi stock barang
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $post = Post::where('id', $pesanan_detail->post_id)->first();
            $post->stock = $post->stock-$pesanan_detail->jumlah;
            $post->update();

        }

        return redirect('history/'.$pesanan_id);
    }


    
        
}

    //     $this->validate($request, [
    //     'image' => 'required',
    //     ]);
    //     $image = $request->image('image');
    //     $tujuan_upload = 'data_file';
    //     $image->move($tujuan_upload,$image->getClientOriginalName());
    // }   


