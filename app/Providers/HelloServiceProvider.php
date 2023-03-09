<?php

namespace App\Providers;

use App\Http\Validators\HelloValidator;

use Illuminate\Validation\Validator;
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
        // Validator::extend('hello', function ($attribute, $value, $parameters, $validator) {
        //     return $value % 2 === 0;
        // });
    }
}
