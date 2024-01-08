<?php

namespace App\Services;

class PerumahanService
{
    // Get Navbar
    public function detailPerumahan($id)
    {
        $perumahan = $this->datasetPerumahan();

        // Filter array menggunakan array_filter
        $filtered = array_filter($perumahan, function ($item) use ($id) {
            return $item['id'] === $id;
        });
        
        // Mengembalikan hasil filter, atau array kosong jika tidak ditemukan
        return $filtered ? array_values($filtered)[0] : [];
    }

    // Dataset Perumahan
    public function datasetPerumahan()
    {
        $perumahan = array(
            [
                'id' => 'perumahan1',
                'nama' => 'Perumahan 1',
                'lokasi' => 'Lokasi 1',
                'deskripsi' => 'Deskripsi 1',
                'gambar' => 'gambar1.jpg',
                'tipe' => '',
                'harga' => '',
                'catatan' => '',
                'lokasi' => '',
                'fasilitas' => [
                    [
                        'nama' => 'Fasilitas 1',
                        'jarak' => '1 km',
                        'icon' => 'fas fa-school',
                    ],
                    [
                        'nama' => 'Fasilitas 1',
                        'jarak' => '2 km',
                        'icon' => 'fas fa-school',
                    ],
                    [
                        'nama' => 'Fasilitas 1',
                        'jarak' => '3 km',
                        'icon' => 'fas fa-school',
                    ],
                ],
            ],
            [
                'id' => 'perumahan2',
                'nama' => 'Perumahan 2',
                'lokasi' => 'Lokasi 2',
                'deskripsi' => 'Deskripsi 2',
                'gambar' => 'gambar2.jpg',
            ],
            [
                'id' => 'perumahan3',
                'nama' => 'Perumahan 3',
                'lokasi' => 'Lokasi 3',
                'deskripsi' => 'Deskripsi 3',
                'gambar' => 'gambar3.jpg',
            ],
        );

        return $perumahan;
    }
}
