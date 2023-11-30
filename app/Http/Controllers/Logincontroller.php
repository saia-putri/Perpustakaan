<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        // if ($user = Auth::user()) {
        //     if ($user->akses == 'Konsumen') {
        //         return redirect()->intended('home');
        //     } else {
        //         return redirect()->intended('dashboard');
        //     }
        // }

        return view('pengunjung.masuk');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $kredensial = $request->only('email', 'password');
        if (auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = auth::user();
            if ($user) {
                return redirect()->intended('dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'pesan' => 'Maaf Email atau Password Anda Salah',
            // 'password' => 'Maaf Email atau Password Anda Salah',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
