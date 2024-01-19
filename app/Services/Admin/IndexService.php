<?php

namespace App\Services;
use App\Services\ProfileService;

class IndexService
{
    public function __construct(ProfileService $profileService)
    {
        $this->$profileService = $profileService;
    }

    public function index(){
        $profile = $this->profileService->index();
        return $profile;}

}