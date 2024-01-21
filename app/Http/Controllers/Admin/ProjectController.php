<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Services\Admin\CrudProjectService;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Constructor
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    // List project
    public function index()
    {
        $project = $this->projectService->datasetProject();
        return parent::display('admin.project.index', compact('project'));
    }

    // View Project Create
    public function create()
    {
        return parent::display('admin.project.create');
    }

    // Process project create
    public function store(Request $request)
    {
        return $this->projectService->storeProject($request);
    }

    // View Project Edit
    public function edit($id)
    {
        $result = $this->projectService->detailProject($id);
        return parent::display('admin.project.edit', compact('result'));
    }
    
    // Process Project Update
    public function update(Request $request)
    {
        return $this->projectService->updateProject($request);
    }

    // Process Project Delete
    public function delete($id)
    {
        return $this->projectService->deleteProject($id);
    }
    
    // View Image Edit
    public function imageEdit($id, $page)
    {
        $result = $this->projectService->detailProject($id);
        return parent::display('admin.project.img_edit', compact('result', 'page'));
    }

    // Process Image Update
    public function imageUpdate(Request $request)
    {
        return $this->projectService->imageUpdateProject($request);
    }

    // Process Image Delete
    public function imageDelete($id_img, $page)
    {
        return $this->projectService->imageDeleteProject($id_img,$page);
    }
}
