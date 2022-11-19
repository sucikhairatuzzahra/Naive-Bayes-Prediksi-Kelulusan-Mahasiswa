<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('loginregister.login');
        // if (Auth::check()) {
        //     return redirect('beranda');
        // } else {
        //     return view('loginregister.login');
        // }
    }
    public function loginaksi(Request $request)
    {
        $data = ['email' => $request->input('email'), 'password' => $request->input('password')];

        if (Auth::Attempt($data)) {
            return redirect('beranda');
            // return redirect('dashboard');
        } else {
            // Session::flash('Error', 'Email atau Password Salah');
            session()->flash('Error', 'Email atau Password Salah');
            return redirect('/');
        }
    }
    public function logoutaksi()
    {
        Auth::logout();
        return redirect('/');
    }
}
