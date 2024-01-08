<?php

namespace App\Services;

class IndexService
{
    // Get Navbar
    public function getNavbar()
    {
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
                'dropdown_list' =>
                [
                    [
                        'name' => 'Perumahan 1',
                        'id' => 'perumahan1',
                    ],
                    [
                        'name' => 'Perumahan 2',
                        'id' => 'perumahan2',
                    ],
                    [
                        'name' => 'Perumahan 3',
                        'id' => 'perumahan3',
                    ],
                ],
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
