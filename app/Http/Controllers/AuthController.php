<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login_form()
    {
        return view('auth.login');
    }

    public function login_store(LoginRequest $request)
    {
        $user = Auth::attempt($request->validated());

        if ($user) {
            return redirect()->route('backoffice.index');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
        }
    }

    public function register_form()
    {
        return view('auth.register');
    }

    public function register_store(RegisterRequest $request)
    {
        $payload = $request->validated();
        try {
            $user = User::create($payload);
            $user->assignRole('user');
            return redirect()->route('home.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function logout_store()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
