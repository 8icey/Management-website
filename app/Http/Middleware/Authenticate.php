<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('logged_in_user')) {
            return redirect()->route('login')->withErrors([
                'email' => 'Please log in to access this page.',
            ]);
        }

        return $next($request);
    }
}
