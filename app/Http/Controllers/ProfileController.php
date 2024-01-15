<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;


class ProfileController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        
        $projects = $this->projectService->datasetProject();
        // dd($projects);
        return view('index', compact('projects'));
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
