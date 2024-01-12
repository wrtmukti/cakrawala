<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    
    public function index()
    {
        //
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

    public function detail($id)
    {
        $project = $this->projectService->detailProject($id);
        $contact = $this->projectService->contactMe($id);
        return view('profile.projects.detail', compact('project', 'contact'));
    }
}
