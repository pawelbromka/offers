<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoldmanOfferServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Service\OfferInterface', 'App\Service\GoldmanOfferService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
