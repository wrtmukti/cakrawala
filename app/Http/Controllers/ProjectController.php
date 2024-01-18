<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Services\ProfileService;

class ProjectController extends Controller
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
        return view('profile.projects.index', compact('projects'));
    }

    // Detail Project
    public function detail($id)
    {
        $project = $this->projectService->detailProject($id);
        $contact = $this->profileService->contactMe($id);
        return view('profile.projects.detail', compact('project', 'contact', 'id'));
    }

    // Download Brochures
    public function downloadBrochures($id)
    {
        $brochures = $this->projectService->downloadBrochures($id);
        return $brochures;
    }
}
