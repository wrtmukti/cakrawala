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
        // dd($projects);
        return view('profile.projects.index', compact('projects'));
    }

    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

    // Detail Project
    public function detail($id)
    {
        $project = $this->projectService->detailProject($id);
        $contact = $this->profileService->contactMe($id);
        return view('profile.projects.detail', compact('project', 'contact', 'id'));
    }

    // Download Brochures
    public function downloadBrochures()
    {
        $brochures = $this->projectService->downloadBrochures();
        return $brochures;
    }
}
