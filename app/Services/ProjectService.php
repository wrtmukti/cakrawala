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
        $specification = array(
            [
                'name' => 'Batu Beton',
                'icon' => 'fa fa-industry',
                // 'icon' => 'fa fa-shapes',
            ],
            [
                'name' => 'Beton Bertulang',
                'icon' => 'fa fa-table',
            ],
            [
                'name' => 'Bata Merah',
                'icon' => 'fa fa-cubes',
            ],
            [
                'name' => 'Kayu Jati',
                'icon' => 'fa fa-tree',
            ],
            [
                'name' => 'Baja Ringan',
                'icon' => 'fa fa-crop',
            ],
            [
                'name' => 'Multiprof Berpasir',
                'icon' => 'fa fa-dna',
            ],
            [
                'name' => 'Keramik 40x40',
                'icon' => 'fa fa-layer-group',
            ],
            [
                'name' => 'Air PDAM',
                'icon' => 'fa fa-water',
            ],
            [
                'name' => 'Listrik 1.300 WAT',
                'icon' => 'fa fa-plug',
            ],
            [
                'name' => 'Kerangka Hollow',
                'icon' => 'fa fa-border-none',
            ],
            [
                'name' => 'Gypsum',
                'icon' => 'fa fa-shapes',
            ],
        );

        $project = array(
            [
                'id' => 'cakrawalautamaresidence1',
                'name' => 'Cakrawala Utama Residence 1',
                'image' => [],
                'type' => '30/60',
                'price' => '900',
                'note' => 'Free Kitchen Set Atas',
                'location' => 'Mandan, Sukoharjo, Jawa Tengah',
                'facility' => [
                    [
                        'name' => 'Kamar Tidur',
                        'icon' => 'fa fa-bed',
                        'qty' =>  '2',
                    ],
                    [
                        'name' => 'Kamar Mandi',
                        'icon' => 'fa fa-bath',
                        'qty' =>  '1',
                    ],
                    [
                        'name' => 'Dapur',
                        'icon' => 'fa fa-utensils',
                        'qty' =>  '1',
                    ],
                    [
                        'name' => 'Carport',
                        'icon' => 'fa fa-car',
                        'qty' =>  '',
                    ],
                    [
                        'name' => 'Taman Minimalis',
                        'icon' => 'fa fa-leaf',
                        'qty' =>  '',
                    ],
                ],
                'specification' => $specification,
            ],
            [
                'id' => 'cakrawalautamaresidence2',
                'name' => 'Cakrawala Utama Residence 2',
                'image' => [],
                'type' => '',
                'price' => '',
                'note' => '',
                'location' => '',
                'facility' => [
                    [
                        'name' => '',
                        'icon' => '',
                        'qty' => '',
                    ]
                ],
                'specification' => $specification,
            ],
            [
                'id' => 'cakrawalautamaresidence3',
                'name' => 'Cakrawala Utama Residence 3',
                'image' => [],
                'type' => '',
                'price' => '',
                'note' => '',
                'location' => '',
                'facility' => [
                    [
                        'name' => '',
                        'icon' => '',
                        'qty' => '',
                    ]
                ],
                'specification' => $specification,
            ],
            [
                'id' => 'cakrawalautamaresidence4',
                'name' => 'Cakrawala Utama Residence 4',
                'image' => [],
                'type' => '',
                'price' => '',
                'note' => '',
                'location' => '',
                'facility' => [
                    [
                        'name' => '',
                        'icon' => '',
                        'qty' => '',
                    ]
                ],
                'specification' => $specification,
            ],
            [
                'id' => 'cakrawalautamaresidence5',
                'name' => 'Cakrawala Utama Residence 5',
                'image' => [],
                'type' => '',
                'price' => '',
                'note' => '',
                'location' => '',
                'facility' => [
                    [
                        'name' => '',
                        'icon' => '',
                        'qty' => '',
                    ]
                ],
                'specification' => $specification,
            ],
            [
                'id' => 'cakrawalautamaresidence6',
                'name' => 'Cakrawala Utama Residence 6',
                'image' => [],
                'type' => '',
                'price' => '',
                'note' => '',
                'location' => '',
                'facility' => [
                    [
                        'name' => '',
                        'icon' => '',
                        'qty' => '',
                    ]
                ],
                'specification' => $specification,
            ],
            [
                'id' => 'cakrawalautamaresidence7',
                'name' => 'Cakrawala Utama Residence 7',
                'image' => [],
                'type' => '',
                'price' => '',
                'note' => '',
                'location' => '',
                'facility' => [
                    [
                        'name' => '',
                        'icon' => '',
                        'qty' => '',
                    ]
                ],
                'specification' => $specification,
            ],
        );

        

        return $project;
    }
}
