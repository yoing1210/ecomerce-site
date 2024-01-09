<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\validasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    public function index()
    {
        $pesanans = Pesanan::all();
        
        return view('dashboard.index', [
            'title' => 'dashboard',
            "active" => 'dashboard'
        ],compact('pesanans'));
    }
    public function detail($id)
    {
        $pesanan = Pesanan::where('id',$id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id',$pesanan->id)->get();

        return view('dashboard.validasiDetail',[
            'title' => 'validasiDetail',
            "active" => 'validasiDetail'
        ],compact('pesanan','pesanan_details'));
    }



    
    
        
        // if ($request->hasfile('image')) {
        //     $imageName = round(microtime(true) * 1000).'-'.str_replace(' ', '-', $request->file('image')->getClientOriginalName());
        //     $request->file('image')->move(public_path('post_images'), $imageName);
        //     validasi::create(
        //         [
        //            'gambar' =>$imageName
        //         ]
        //     );

        // }
      
    // public function detail($id)
    // {
    //     $pesanan = Pesanan::where('id',$id)->first();
    //     $pesanan_details = PesananDetail::where('pesanan_id',$pesanan->id)->get();

    //     return view('dashboard',[
    //         'title' => 'History',
    //         "active" => 'History'
    //     ],compact('pesanan','pesanan_details'));
    // }


    
    // public function validasi (Request $request)
    // {
    //     $validated = $request->validate([      
    //         'image' => 'image',    
    //     ]);
    //     $imageName = '-image-'.time().rand(1,10000).'.'.$validated['image']->extension();
    //     $request['image']->move(public_path('validasi_images') );
    //             validasi::create([
    //                 'image' =>$imageName,
    //             ]);
    //     return redirect('/history')->with('success','New Post has been added');
       
    // }
    
}