<?php

namespace App\Providers;

use Facade\FlareClient\View;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\Hellovalidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('hello', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}
