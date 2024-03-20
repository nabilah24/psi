<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|max:20|unique:users',
            'email' => 'required|email',
            'phone' => 'required|string|min:12|max:13',
            'password' => 'required|min:6|max:8',
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin ?? 0,
        ]);

        $user->save();

        return redirect('/login')->with('success', 'Daftar Akun Berhasil!! Selanjutnya Login');
    }

    public function login()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
            [
                'email.required' => 'Email Wajib Diisi',
                'password.required' => 'Password Wajib Diisi',
            ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return match (Auth::user()->role) {
                'admin' => redirect('dashboard'),
                'user' => redirect('home'),
            };
        }

        return redirect()->back()->withErrors('Username Atau Password Yang Dimasukkan Tidak Sesuai')->withInput();

        // if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
        //     if (auth()->user()->is_admin == 1) {
        //         return redirect()->intended('/musik');
        //     } else {
        //         return redirect()->intended('/home');
        //     }
        // }

        // return back()->withErrors('Invalid username or password.');
    }
}
