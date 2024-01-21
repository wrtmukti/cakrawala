<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProfileService;

class AwardController extends Controller
{

    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index()
    {
        $result = $this->profileService->award();
        return parent::display('admin.award.index', compact('result'));
    }

    public function create()
    {
        return parent::display('admin.award.create');
    }

    public function store(Request $request)
    {
        return $this->profileService->storeAward($request);
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
        return $this->profileService->deleteAward($id);
    }
}
