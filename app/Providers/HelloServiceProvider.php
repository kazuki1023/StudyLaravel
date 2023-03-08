<?php

namespace App\Providers;

use Illuminate\Support\facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(
            'hello.index', function($view) {
                $view -> with('view_message', 'composer message!');
            }
        );
    }
}
