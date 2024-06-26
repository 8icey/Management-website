<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ViewComposerServiceProvider extends ServiceProvider
{
    // public function boot()
    // {
    //     View::composer('*', function ($view) {
    //         $view->with('user', Auth::user());
    //     });
    // }

    // public function boot()
    // {
        // View::composer('*', function ($view) {
        //     if (session()->has('user_id')) {
        //         $user = User::find(session('user_id'));
        //         $view->with('user', $user);
        //     }
        // });}

    public function register()
    {
        //
    }
}