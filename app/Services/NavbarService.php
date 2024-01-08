<?php

namespace App\Services;
use App\Services\PerumahanService;

class NavbarService
{
    public function __construct(PerumahanService $perumahanService)
    {
        $this->perumahanService = $perumahanService;
    }

    // Get Navbar
    public function getNavbar()
    {
        $dropdown_list = $this->perumahanService->datasetPerumahan();
        $nav_bar = [
            [
                'name' => 'Home',
                'url' => '/',
                'dropdown' => 'false',
            ],
            [
                'name' => 'Tentang Kami',
                'url' => 'about',
                'dropdown' => 'false',
            ],
            [
                'name' => 'Perumahan',
                'url' => 'perumahan',
                'route' => 'detail', // route name for dropdown
                'dropdown' => 'true',
                'dropdown_list' => $dropdown_list,
            ],
            [
                'name' => 'Testimoni',
                'url' => 'testimoni',
                'dropdown' => 'false',
            ],
            [
                'name' => 'Kontak',
                'url' => 'kontak',
                'dropdown' => 'false',
            ],
        ];

        return $nav_bar;
    }
}
