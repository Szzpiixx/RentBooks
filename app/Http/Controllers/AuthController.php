<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function Auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
    

    //buat ngecek klo user udh login atau belum
    if (Auth::attempt($credentials)){
        //buat ngecek status user active atau belum
        if(Auth::user()->status != 'active')
        {
             Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            Session::flash('status','failed');
            Session::flash('message','Your Account is not Active yet. Please contact admin!');
            return redirect('login');
           
        }

        $request->session()->regenerate();

        //cek apakah dia admin
        if(Auth::user()->role_id == 1)
        {
            return redirect('dashboard');
        }

        //cek apakah dia client
        if (Auth::user()->role_id == 2)
        {
            return redirect('profile');
        }
    }

    //kalau gagal login
    Session::flash('status','failed');
    Session::flash('message', 'invalid Login');
    return redirect('login');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function register()
    {
        return view('register');
    }

    public function regis(Request $request)
    {
        //validate data masuk apa engga
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:13',
            'address' => 'required|max:225',
        ]);
        
        $request['password'] = Hash::make($request->newPassword);
        $user = User::create($request->all());

        
            Session::flash('status','success');
            Session::flash('message','Regis Success Please, wait admin to approve');
            return redirect('register');
        

        
    }
}




