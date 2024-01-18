<?php

namespace App\Services;
use App\Services\ProjectService;

class NavbarService
{
    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    // Get Navbar
    public function getNavbar()
    {
        $project_dropdown_list = $this->projectService->datasetProject();
        // dd($project_dropdown_list);
        $nav_bar = [
            [
                'name' => 'Beranda',
                'url' => '/',
                'dropdown' => 'false',
            ],
            [
                'name' => 'Tentang Kami',
                'url' => 'about',
                'dropdown' => 'false',
            ],
            [
                'name' => 'Proyek Cakrawala',
                'url' => 'project',
                'route' => 'detail', // route name for dropdown
                'dropdown' => 'true',
                'dropdown_list' => $project_dropdown_list,
            ],
            [
                'name' => 'Penghargaan',
                'url' => 'award',
                'dropdown' => 'false',
            ],
            [
                'name' => 'Kerjasama Instansi',
                'url' => 'collaboration',
                'dropdown' => 'false',
            ],
            [
                'name' => 'Kontak',
                'url' => 'contact',
                'dropdown' => 'false',
            ],
           
        ];

        return $nav_bar;
    }
}
