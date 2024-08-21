<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function auth(LoginRequest $request)
    {
        $user = Auth::attempt($request->validated());

        if ($user) {
            return redirect()->route('backoffice.index');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
