<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('auth.register');
        }


        $credentials = $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $newUser = User::create($credentials);
        Auth::login($newUser);
        return redirect('post');
    }

    public function login(Request $request): RedirectResponse|View
    {
        if ($request->isMethod('GET')) {
            return view('auth.login');
        }


        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials) ||
            Auth::attempt(['email' => $credentials['username'], 'password' => $credentials['password']])
        ) {
            $request->session()->regenerate();

            return redirect()->intended('post');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
