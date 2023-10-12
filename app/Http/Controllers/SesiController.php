<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index ()
    {
        return view('sesi.login');
    }
    function masuk(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib di isi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()) {
                return redirect('/data-artikel');
            }
        } else {
            return redirect('/login')->withErrors('Username dan Password yang di masukkan tidak sesuai')->withInput();
        }
    }
    function register()
    {
        return view('sesi.register');
    }
    function store(Request $request)
    {
        User::insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/login')->with('success', 'Anda berhasil di register');
    }
    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
