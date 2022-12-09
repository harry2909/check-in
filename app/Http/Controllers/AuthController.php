<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()
                ->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return back()->withErrors(['loginError' => 'Incorrect email or password!']);

    }

    public function registerPage()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => ['required', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()]
        ]);

        $input = $request->all();
        if (User::where('email', '=', $input['email'])->exists()) {
            return back()->withErrors(['registerError' => 'That email already exists!']);
        }
        $hashPass = Hash::make($input['password']);
        if (!Hash::check($input['password'], $hashPass)) {
            return back()->withErrors(['registerError' => 'Error with hashing password!']);
        }
        $user = User::create(['name' => $input['name'], 'email' => $input['email'], 'password' => $hashPass]);
        Auth::login($user);
        return redirect()
            ->intended('dashboard')
            ->withSuccess('Signed in');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
