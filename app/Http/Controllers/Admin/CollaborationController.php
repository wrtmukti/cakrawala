<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Controllers\Controller;

class CollaborationController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }
    
    public function index()
    {
        $result = $this->profileService->collaboration()['activity'];
        return parent::display('admin.collaboration.index', compact('result'));
    }

   
    public function create()
    {
        return parent::display('admin.collaboration.create');
    }

   
    public function store(Request $request)
    {
        return $this->profileService->storeCollaboration($request);
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

   
    public function delete($id)
    {
        return $this->profileService->deleteCollaboration($id);
    }
}
