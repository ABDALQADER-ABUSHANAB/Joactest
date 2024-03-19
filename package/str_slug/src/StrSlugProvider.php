<?php

namespace abedalqader\str_slug;

use Illuminate\Support\ServiceProvider;

class StrSlugProvider extends ServiceProvider
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
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views/','abedalqader\str_slug');
        //$this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

}
