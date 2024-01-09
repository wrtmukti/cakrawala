<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $indexService;


   
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
        return view('profile.award');
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
