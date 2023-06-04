<?php

namespace Gouda\Seo;


use Illuminate\Support\ServiceProvider;

class SEOServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');


    }

    public function register()
    {
        //
    }

}