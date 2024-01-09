<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Pesanan;
use App\Models\User;
use Carbon\Carbon;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::where('user_id',Auth::user()->id)->where('status','!=',0)->get();

        return view('history', [
            'title' => 'History',
            "active" => 'History',
            'post' => Post::all()
        ],compact('pesanans'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::where('id',$id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id',$pesanan->id)->get();

        return view('historyDetail',[
            'title' => 'History',
            "active" => 'History'
        ],compact('pesanan','pesanan_details'));
    }

}
