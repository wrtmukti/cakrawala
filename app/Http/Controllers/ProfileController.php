<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    protected $indexService;
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }




    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('profile.about');
    }

    public function award()
    {
        // Data award
        $award = $this->profileService->award();
        // dd($data);
        return view('profile.award', compact('award'));
    }

    public function collaboration()
    {
        return view('profile.collaboration');
    }


    public function contact()
    {
        return view('profile.contact');
    }
}
