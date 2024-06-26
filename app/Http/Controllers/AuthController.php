<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginform()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $password = $request->input('Password');
        $email = $request->input('Email');
        $user = User::where('Email', $email)->first();

        // if ($user && $user->Password === $password) {
            if ($user && Hash::check($password, $user->Password)) {
            
            // session(['user_id' => $user->id]);
            session(['user' => $user]);

            // return redirect()->intended('homepage');
            // return redirect()->route('homepage')->with('user', $user);
            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
