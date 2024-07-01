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

       
            if ($user && Hash::check($password, $user->Password)) {
            
           
            session(['user' => $user]);

           
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
