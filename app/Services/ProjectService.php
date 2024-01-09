<?php

namespace App\Services;

class ProjectService
{
    // Get Navbar
    public function detailProject($id)
    {
        $project = $this->datasetProject();

        // Filter array menggunakan array_filter
        $filtered = array_filter($project, function ($item) use ($id) {
            return $item['id'] === $id;
        });
        
        // Mengembalikan hasil filter, atau array kosong jika tidak ditemukan
        return $filtered ? array_values($filtered)[0] : [];
    }

    // Dataset Project
    public function datasetProject()
    {
        $project = array(
            [
                'id' => 'project1',
                'name' => 'Project 1',
                'location' => 'Lokasi 1',
                'description' => 'Deskripsi 1',
                'image' => 'gambar1.jpg',
                'type' => '',
                'price' => '',
                'note' => '',
                'location' => '',
                'facility' => [
                    [
                        'name' => 'Fasilitas 1',
                        'distance' => '1 km',
                        'icon' => 'fas fa-school',
                    ],
                    [
                        'name' => 'Fasilitas 1',
                        'distance' => '2 km',
                        'icon' => 'fas fa-school',
                    ],
                    [
                        'name' => 'Fasilitas 1',
                        'distance' => '3 km',
                        'icon' => 'fas fa-school',
                    ],
                ],
            ],
            [
                'id' => 'project2',
                'name' => 'Project 2',
                'location' => 'Lokasi 2',
                'description' => 'Deskripsi 2',
                'image' => 'gambar2.jpg',
            ],
            [
                'id' => 'project3',
                'name' => 'Project 3',
                'location' => 'Lokasi 3',
                'description' => 'Deskripsi 3',
                'image' => 'gambar3.jpg',
            ],
        );

        return $project;
    }
}
