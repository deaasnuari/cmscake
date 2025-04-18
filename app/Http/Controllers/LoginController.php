<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); // Pastikan file resources/views/login.blade.php ada
    }

    public function submit(Request $request)
    {
        // Cek validasi sederhana
        $credentials = $request->only('email', 'password');

        // Tambahkan logika login di sini
        if ($credentials['email'] === 'admin@demo.com' && $credentials['password'] === 'password') {
            return redirect()->route('dashboard'); // Pastikan route dashboard juga dibuat
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
