<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NavbarService;
use App\Services\ProfileService;
use Illuminate\Support\Facades\View;


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
        // Untuk membagikan nav bar ke semua view
        $navbarService = app(NavbarService::class);
        $nav_bar = $navbarService->getNavbar();
        View::share('nav_bar', $nav_bar);

        // Contact Me
        $contactService = app(ProfileService::class);
        $contact_me = $contactService->contactMe();
        View::share('contact', $contact_me);
    }
}
