<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Controllers\Controller;

class CompanybioController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }
    
    public function index()
    {
        $result = $this->profileService->companyBio();
        return parent::display('admin.company_bio.index', compact('result'));
    }

   
    public function update(Request $request)
    {
        return $this->profileService->companyBioUpdate($request);
    }

}
