<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('layouts.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function showRegistrationForm()
    {
        return view('layouts.login');
    }

    public function register(Request $request)
    {
        // Xử lý logic đăng kí và tạo người dùng mới
        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // Đăng nhập người dùng mới sau khi đăng kí
        Auth::login($user);

        return redirect()->intended('/');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
