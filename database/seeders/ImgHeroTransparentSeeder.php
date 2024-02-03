<?php

namespace Database\Seeders;

use App\Models\ImgHeroTransparent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImgHeroTransparentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'img_file' => 'cru1.png',
                'title' => 'Welcome to',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel libero iaculis, sit amet ultrices dolor eleifend. Vestibulum vitae congue metus. Proin id consectetur mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Integer fringilla quam eu elit scelerisque, nec ultricies elit consectetur.',
                'carousel_active' => 'Y',
            ],
            [
                'img_file' => 'cru2.png',
                'title' => 'Welcome to',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel libero iaculis, sit amet ultrices dolor eleifend. Vestibulum vitae congue metus. Proin id consectetur mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Integer fringilla quam eu elit scelerisque, nec ultricies elit consectetur.',
                'carousel_active' => 'N',
            ],
            [
                'img_file' => 'cru3.png',
                'title' => 'Welcome to',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel libero iaculis, sit amet ultrices dolor eleifend. Vestibulum vitae congue metus. Proin id consectetur mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Integer fringilla quam eu elit scelerisque, nec ultricies elit consectetur.',
                'carousel_active' => 'N',
            ],
            [
                'img_file' => 'cru4.png',
                'title' => 'Welcome to',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel libero iaculis, sit amet ultrices dolor eleifend. Vestibulum vitae congue metus. Proin id consectetur mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Integer fringilla quam eu elit scelerisque, nec ultricies elit consectetur.',
                'carousel_active' => 'N',
            ],
            [
                'img_file' => 'cru5.png',
                'title' => 'Welcome to',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel libero iaculis, sit amet ultrices dolor eleifend. Vestibulum vitae congue metus. Proin id consectetur mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Integer fringilla quam eu elit scelerisque, nec ultricies elit consectetur.',
                'carousel_active' => 'N',
            ],
            [
                'img_file' => 'cru6.png',
                'title' => 'Welcome to',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel libero iaculis, sit amet ultrices dolor eleifend. Vestibulum vitae congue metus. Proin id consectetur mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Integer fringilla quam eu elit scelerisque, nec ultricies elit consectetur.',
                'carousel_active' => 'N',
            ],
            [
                'img_file' => 'cru7.png',
                'title' => 'Welcome to',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar lacus vel libero iaculis, sit amet ultrices dolor eleifend. Vestibulum vitae congue metus. Proin id consectetur mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Integer fringilla quam eu elit scelerisque, nec ultricies elit consectetur.',
                'carousel_active' => 'N',
            ],
        ];

        // Insert to database
        foreach($data as $d){
            ImgHeroTransparent::create($d);
        }

    }
}
