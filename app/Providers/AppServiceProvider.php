<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer("Admin.*", function($view){
            $view->with("user", Auth::user());
        });

        View::composer("Client.Profile.*", function($view){
            $view->with("user", Auth::user());
        });
    }
}
