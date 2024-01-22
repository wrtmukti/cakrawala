<?php

namespace Database\Seeders;

use App\Models\Award;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
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
                'title' => 'Penghargaan PT. Cakrawala Pratama Manunggal',
                'img_file' => 'award1.jpg'
            ],
            [
                'title' => 'Sertifikat Silver',
                'img_file' => 'sertif_silver.jpg'
            ],
            [
                'title' => 'Sertifikat Gold',
                'img_file' => 'sertif_gold.jpg'
            ]
        );

        foreach ($data as $key => $value) {
            Award::create($value);
        }
    }
}
