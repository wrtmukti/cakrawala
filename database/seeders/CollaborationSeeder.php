<?php

namespace Database\Seeders;

use App\Models\Collaboration;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CollaborationSeeder extends Seeder
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
                'title' => 'PPJB Notaris',
                'description' => 'Proses PPJB Bersama Notaris',
                'img_file' => '1.jpg'
            ],
            [
                'title' => 'Survei BPN',
                'description' => 'Survei Bekerjasama Dengan BPN',
                'img_file' => '2.jpg'
            ],
            [
                'title' => 'PDAM Kabupaten Sukoharjo',
                'description' => 'Bekerjasama Dengan PDAM Kabupaten Sukoharjo',
                'img_file' => '3.jpg'
            ],
            [
                'title' => 'Musyawarah Warga',
                'description' => 'Musyawarah Dengan Warga Setempat',
                'img_file' => '4.jpg'
            ],
            [
                'title' => 'Bank BTN',
                'description' => 'Event Dengan Bank BTN',
                'img_file' => '5.jpg'
            ],
            [
                'title' => 'BTN dan TAPERA',
                'description' => 'Event Bersama BTN dan TAPERA',
                'img_file' => '6.jpg'
            ],
            [
                'title' => 'Akad Bank Masal',
                'description' => 'Akad Bank Masal PT. Cakrawala Pratama Manunggal',
                'img_file' => '7.jpg'
            ],
            [
                'title' => 'Kelurahan Setempat',
                'description' => 'Bekerja Sama Dengan Kelurahan Setempat',
                'img_file' => '8.jpg'
            ],
            [
                'title' => 'Doa Bersama',
                'description' => 'Prosesi Doa Bersama Pembukaan Lahan',
                'img_file' => '9.jpg'
            ],
        );

        foreach ($data as $key => $value) {
            Collaboration::create($value);
        }

    }
}
