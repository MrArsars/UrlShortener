<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function registerIndex()
    {
        return view('auth.register');
    }

    public function loginIndex()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed|string',
        ]);

        $user = User::create($validated);
        Auth::login($user);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'credentials' => 'These credentials are incorrect.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show.login');
    }
}
