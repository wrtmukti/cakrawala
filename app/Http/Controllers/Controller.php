<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Services\NavbarService;
use App\Services\ProfileService;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected function display($view = null, $data = [])
    {
        // cek view is null
        if ($view == null) {
            abort(404);
        }
        // load sidebar
        $nav_bar = self::nav_bar();
        // load contact
        $contact = self::contact();
        //
        if ($data == null) {
            return view($view, compact('nav_bar', 'contact'));
        }
        // assign data
        $data['nav_bar'] = $nav_bar;
        $data['contact'] = $contact;
        // load view
        return view($view, $data);
    }

    protected function nav_bar()
    {
        $navbarService = app(NavbarService::class);
        $nav_bar = $navbarService->getNavbar();
        return $nav_bar;
    }

    protected function contact()
    {
        $contactService = app(ProfileService::class);
        $contact_me = $contactService->contactMe();
        return $contact_me;
    }
}
