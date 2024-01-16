<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Services\ProfileService;


class ProfileController extends Controller
{
    protected $projectService;
    protected $profileService;

    public function __construct(ProjectService $projectService, ProfileService $profileService)
    {
        $this->projectService = $projectService;
        $this->profileService = $profileService;
    }

    public function index()
    {
        
        $projects = $this->projectService->datasetProject();
        $about = $this->profileService->about();
        $collaboration = $this->profileService->collaboration();
        $totalElements = count($collaboration['activity']);
        $remainder = $totalElements % 4;
        $dataEven = [];
        // Check odd or even
        if ($remainder != 0) {
            $dataEven = array_slice($collaboration['activity'], 0, $totalElements - $remainder);
        }
        return view('index', compact('projects', 'about', 'collaboration', 'dataEven'));
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
