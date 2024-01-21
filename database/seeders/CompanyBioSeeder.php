<?php

namespace Database\Seeders;

use App\Models\CompanyBio;
use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyBioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            'company_name' => 'PT. Cakrawala Pratama Manunggal',
            'company_nickname' => 'Cakrawala',
            'address' => 'Jl. Raya Solo - Purwodadi KM 12,5, Mandan, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57554',
            'link_maps' => 'https://maps.app.goo.gl/uCBpEYfiQLPQNNWT8',
            'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63282.313786208775!2d110.77761244860885!3d-7.5592070683129915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16627ad11ab1%3A0xe7fe4e0454bc3095!2sSurakarta%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1705082053182!5m2!1sid!2sid',
            'email' => 'cakrawalapratamamanunggalresmi@gmail.com',
            'phone' => '6281234567890',
            'whatsapp' => '6281234567890',
            'instagram' => '',
            'facebook' => '',
            'twitter' => '',
            'youtube' => 'https://youtu.be/kQaOKLKyYvY',
            'youtube_thumbnail' => 'about2.png',
            'logo' => 'logo_app.png',
        );

        // Insert to database
        CompanyBio::create($data);
    }
}
