<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NavbarService;
use App\Services\ProfileService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;


class AppServiceProvider extends ServiceProvider
{
   
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // CONFIG FOR CSS NGROK
        // if(config('app.env') === 'local') {
        //     URL::forceScheme('https');
        // }
    }
}
