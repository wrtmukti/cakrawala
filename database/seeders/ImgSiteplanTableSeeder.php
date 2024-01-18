<?php

namespace Database\Seeders;

use App\Models\ImgSiteplan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImgSiteplanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'id_project' => '1',
                'img_file' => 'cru1.jpg',
                'carousel_active' => 'Y',
            ],
            [
                'id_project' => '2',
                'img_file' => 'cru2.jpg',
                'carousel_active' => 'Y',
            ],
            [
                'id_project' => '3',
                'img_file' => 'cru3.jpg',
                'carousel_active' => 'Y',
            ],
            [
                'id_project' => '4',
                'img_file' => 'cru4.jpg',
                'carousel_active' => 'Y',
            ],
            [
                'id_project' => '5',
                'img_file' => 'cru5.jpg',
                'carousel_active' => 'Y',
            ],
            [
                'id_project' => '6',
                'img_file' => 'cru6.jpg',
                'carousel_active' => 'Y',
            ],
            [
                'id_project' => '7',
                'img_file' => 'cru7.jpg',
                'carousel_active' => 'Y',
            ]
        );

        // Insert to database
        foreach($data as $d){
            ImgSiteplan::create($d);
        }
    }
}
