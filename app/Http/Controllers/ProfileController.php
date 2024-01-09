<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function wa(User $user)
    {
      

        return redirect('https://wa.me/6287780507325?$text=Hallo,%20Saya%20Ingin%20Konsultasi%20interior'); 

    }
    public function index()
    {
        $user = User::where('id',Auth::user()->id)->first();

        return view('profile', [
            'title' => 'My Profile',
            "active" => 'profile'
        ],compact('user'));

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'password' => 'required'
        ]);

        $user = User::where('id',Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->hp = $request->hp;
        $user->alamat = $request->alamat;
        $user->pos = $request->pos;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        $user->update();
        return redirect('/profile')->with('success','Data anda telah di perbaharui');
        
    }
   
}
