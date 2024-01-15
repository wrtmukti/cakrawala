<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Services\ProjectService;


class ProfileController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
=======
use App\Services\ProfileService;

class ProfileController extends Controller
{
    protected $indexService;
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
>>>>>>> 83d4431367ff9aafeaba81d33af0c351c57a4da5
    }

    public function index()
    {
        
        $projects = $this->projectService->datasetProject();
        // dd($projects);
        return view('index', compact('projects'));
    }

    public function about()
    {
        $about = $this->profileService->about();
        return view('profile.about', compact('about'));
    }

    public function award()
    {
        $award = $this->profileService->award();
        return view('profile.award', compact('award'));
    }

    public function collaboration()
    {
        $collaboration = $this->profileService->collaboration();
        return view('profile.collaboration', compact('collaboration'));
    }


    public function contact()
    {
        return view('profile.contact');
    }
}
