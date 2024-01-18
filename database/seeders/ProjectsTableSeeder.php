<?php

namespace Database\Seeders;

use App\Models\ImgPoster;
use App\Models\ImgSiteplan;
use App\Models\ImgType;
use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectsTableSeeder extends Seeder
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
                'project_name' => 'Cakrawala Utama Residence 1',
                'link_maps' => 'https://maps.app.goo.gl/uCBpEYfiQLPQNNWT8',
                'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15815.28426204908!2d110.8259147592588!3d-7.702342562847215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3b9236599a59%3A0x5027a76e356b520!2sMandan%2C%20Kec.%20Sukoharjo%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904465784!5m2!1sid!2sid',
                'type' => '30/60',
                'price' => '900 ribu',
                'address' => 'Mandan, Sukoharjo, Jawa Tengah',
                'project_desc' => 'Free Kitchen Set Atas',
            ],
            [
                'project_name' => 'Cakrawala Utama Residence 2',
                'link_maps' => 'https://maps.app.goo.gl/uCBpEYfiQLPQNNWT8',
                'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15815.28426204908!2d110.8259147592588!3d-7.702342562847215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3b9236599a59%3A0x5027a76e356b520!2sMandan%2C%20Kec.%20Sukoharjo%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904465784!5m2!1sid!2sid',
                'type' => '30/60',
                'price' => '900 ribu',
                'address' => 'Mandan, Sukoharjo, Jawa Tengah',
                'project_desc' => 'Free Kitchen Set Atas',
            ],
            [
                'project_name' => 'Cakrawala Utama Residence 3',
                'link_maps' => 'https://maps.app.goo.gl/Uo2piFawd9a6HPJ87',
                'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31637.732989191594!2d110.7557454519775!3d-7.605784975918109!2m3!1f0%2F0!3f0%3F3m2%1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15f4a6483b4f%3A0x4027a76e35301d0!2sKec.%20Baki%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704905432989!5m2!1sid!2sid',
                'type' => '30/60',
                'price' => '1 Juta',
                'address' => 'Baki, Sukoharjo, Jawa Tengah',
                'project_desc' => 'Free Kanopi Depan',
            ],
            [
                'project_name' => 'Cakrawala Utama Residence 4',
                'link_maps' => 'https://maps.app.goo.gl/8WSLYSYGc28FAKoS8',
                'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6264336838904!2d110.93336387571166!3d-7.395687972816076!2m3!1f0%2F0!3f0%3F3m2%1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a05a658e051d5%3A0x43b12c206d09d70!2sKarangturi%2C%20Padas%2C%20Kec.%20Tanon%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704905473187!5m2!1sid!2sid',
                'type' => '34/60',
                'price' => '1 Juta',
                'address' => 'Karangturi, Sragen, Jawa Tengah',
                'project_desc' => 'Free Kanopi Depan',
            ],
            [
                'project_name' => 'Cakrawala Utama Residence 5',
                'link_maps' => 'https://maps.app.goo.gl/Uo2piFawd9a6HPJ87',
                'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31637.732989191594!2d110.7557454519775!3d-7.605784975918109!2m3!1f0%2F0!3f0%3F3m2%1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15f4a6483b4f%3A0x4027a76e35301d0!2sKec.%20Baki%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704905432989!5m2!1sid!2sid',
                'type' => '30/60',
                'price' => '1 Juta',
                'address' => 'Baki, Sukoharjo, Jawa Tengah',
                'project_desc' => 'Free Kanopi Depan',
            ],
            [
                'project_name' => 'Cakrawala Utama Residence 6',
                'link_maps' => 'https://maps.app.goo.gl/3qni8Fz18pHPvZjj6',
                'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31653.09758097945!2d110.81778035180596!3d-7.394487018450467!2m3!1f0%2F0!3f0%3F3m2%1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0ef1ee698de9%3A0x4027a76e352ed90!2sKec.%20Gemolong%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904868850!5m2!1sid!2sid',
                'type' => '34/60',
                'price' => '1 Juta',
                'address' => 'Gemolong, Sragen, Jawa Tengah',
                'project_desc' => 'Free Kanopi Depan',
            ],
            [
                'project_name' => 'Cakrawala Utama Residence 7',
                'link_maps' => 'https://maps.app.goo.gl/Uo2piFawd9a6HPJ87',
                'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31637.732989191594!2d110.7557454519775!3d-7.605784975918109!2m3!1f0%2F0!3f0%3F3m2%1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15f4a6483b4f%3A0x4027a76e35301d0!2sKec.%20Baki%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704905432989!5m2!1sid!2sid',
                'type' => '30/60',
                'price' => '1 Juta',
                'address' => 'Baki, Sukoharjo, Jawa Tengah',
                'project_desc' => 'Free Kanopi Depan',
            ],
        );

        // Insert to Database
        foreach ($data as $d) {
            Projects::create($d);
        }
    }
}
