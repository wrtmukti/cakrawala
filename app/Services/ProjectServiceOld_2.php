<?php

namespace App\Services;
use Barryvdh\DomPDF\Facade\Pdf;

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

        // List Project
        $project = array(
            [
                'id' => 'cakrawalautamaresidence1',
                'name' => 'Cakrawala Utama Residence 1',
                'image_poster' => [
                    ['img' => 'poster/cru1.jpg', 
                    'carousel_active' => 'active'],
                ],
                'image_siteplan' => 'siteplan/cru1.jpg',
                'image_transparent' => 'bg_transparent/cru.png',
                'image_type' => 'type/cru1.jpg',
                'type' => '30/60',
                'price' => '900 ribu',
                'note' => 'Free Kitchen Set Atas',
                'location' => 'Mandan, Sukoharjo, Jawa Tengah',
                'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15815.28426204908!2d110.8259147592588!3d-7.702342562847215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3b9236599a59%3A0x5027a76e356b520!2sMandan%2C%20Kec.%20Sukoharjo%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904465784!5m2!1sid!2sid',
                'maps_url' => 'https://maps.app.goo.gl/uCBpEYfiQLPQNNWT8',
            ],
            [
                'id' => 'cakrawalautamaresidence2',
                'name' => 'Cakrawala Utama Residence 2',
                'image_poster' => [
                    ['img' => 'poster/cru2.jpg', 
                    'carousel_active' => 'active'],
                ],
                'image_siteplan' => 'siteplan/cru2.jpg',
                'image_transparent' => 'bg_transparent/cru.png',
                'image_type' => 'type/cru2.jpg',
                'type' => '30/60',
                'price' => '900 ribu',
                'note' => 'Free Kitchen Set Atas',
                'location' => 'Mandan, Sukoharjo, Jawa Tengah',
                'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15815.28426204908!2d110.8259147592588!3d-7.702342562847215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3b9236599a59%3A0x5027a76e356b520!2sMandan%2C%20Kec.%20Sukoharjo%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904465784!5m2!1sid!2sid',
                'maps_url' => 'https://maps.app.goo.gl/uCBpEYfiQLPQNNWT8',
            ],
            [
                'id' => 'cakrawalautamaresidence3',
                'name' => 'Cakrawala Utama Residence 3',
                'image_poster' => [
                    ['img' => 'poster/cru3.jpg', 
                    'carousel_active' => 'active'],
                ],
                'image_siteplan' => 'siteplan/cru3.jpg',
                'image_transparent' => 'bg_transparent/cru.png',
                'image_type' => 'type/cru3.jpg',
                'type' => '30/60',
                'price' => '1 Juta',
                'note' => 'Free Kanopi Depan',
                'location' => 'Baki, Sukoharjo, Jawa Tengah',
                'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31637.732989191594!2d110.7557454519775!3d-7.605784975918109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15f4a6483b4f%3A0x4027a76e35301d0!2sKec.%20Baki%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704905432989!5m2!1sid!2sid',
                'maps_url' => 'https://maps.app.goo.gl/Uo2piFawd9a6HPJ87',
            ],
            [
                'id' => 'cakrawalautamaresidence4',
                'name' => 'Cakrawala Utama Residence 4',
                'image_poster' => [
                    ['img' => 'poster/cru4.jpg', 
                    'carousel_active' => 'active']
                ],
                'image_siteplan' => 'siteplan/cru4.jpg',
                'image_transparent' => 'bg_transparent/cru4.png',
                'image_type' => 'type/cru4.jpg',
                'type' => '34/60',
                'price' => '1 Juta',
                'note' => 'Free Kanopi Depan',
                'location' => 'Karangturi, Sragen, Jawa Tengah',
                'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6264336838904!2d110.93336387571166!3d-7.395687972816076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a05a658e051d5%3A0x43b12c206d09d70!2sKarangturi%2C%20Padas%2C%20Kec.%20Tanon%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704905473187!5m2!1sid!2sid',
                'maps_url' => 'https://maps.app.goo.gl/8WSLYSYGc28FAKoS8',
            ],
            [
                'id' => 'cakrawalautamaresidence5',
                'name' => 'Cakrawala Utama Residence 5',
                'image_poster' => [
                    ['img' => 'poster/cru5.jpg', 
                    'carousel_active' => 'active']
                ],
                'image_siteplan' => 'siteplan/cru5.jpg',
                'image_transparent' => 'bg_transparent/cru5.png',
                'image_type' => 'type/cru5.jpg',
                'type' => '30/60',
                'price' => '1 Juta',
                'note' => 'Free Kanopi Depan',
                'location' => 'Baki, Sukoharjo, Jawa Tengah',
                'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31637.732989191594!2d110.7557454519775!3d-7.605784975918109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15f4a6483b4f%3A0x4027a76e35301d0!2sKec.%20Baki%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904655552!5m2!1sid!2sid',
                'maps_url' => 'https://maps.app.goo.gl/Uo2piFawd9a6HPJ87',
            ],
            [
                'id' => 'cakrawalautamaresidence6',
                'name' => 'Cakrawala Utama Residence 6',
                'image_poster' => [
                    ['img' => 'poster/cru6.jpg', 
                    'carousel_active' => 'active']
                ],
                'image_siteplan' => 'siteplan/cru6.jpg',
                'image_transparent' => 'bg_transparent/cru6.png',
                'image_type' => 'type/cru6.jpg',
                'type' => '34/60',
                'price' => '1 Juta',
                'note' => 'Free Kanopi Depan',
                'location' => 'Gemolong, Sragen, Jawa Tengah',
                'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31653.09758097945!2d110.81778035180596!3d-7.394487018450467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0ef1ee698de9%3A0x4027a76e352ed90!2sKec.%20Gemolong%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904868850!5m2!1sid!2sid',
                'maps_url' => 'https://maps.app.goo.gl/3qni8Fz18pHPvZjj6',
            ],
            [
                'id' => 'cakrawalautamaresidence7',
                'name' => 'Cakrawala Utama Residence 7',
                'image_poster' => [
                    ['img' => 'poster/cru7.jpg', 
                    'carousel_active' => 'active']
                ],
                'image_siteplan' => 'siteplan/cru7.jpg',
                'image_transparent' => 'bg_transparent/cru7.png',
                'image_type' => 'type/cru7.jpg',
                'type' => '30/60',
                'price' => '1 Juta',
                'note' => 'Free Kanopi Depan',
                'location' => 'Baki, Sukoharjo, Jawa Tengah',
                'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31637.732989191594!2d110.7557454519775!3d-7.605784975918109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15f4a6483b4f%3A0x4027a76e35301d0!2sKec.%20Baki%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1704904655552!5m2!1sid!2sid',
                'maps_url' => 'https://maps.app.goo.gl/Uo2piFawd9a6HPJ87',
            ],
        );

        return $project;
    }

    // Download Brochures
    public function downloadBrochures($id)
    {
        $project = $this->datasetProject();

        // Check id in dataset
        $filtered = array_filter($project, function ($item) use ($id) {
            return $item['id'] === $id;
        });
        // Give 1 row data
        $data = $filtered ? array_values($filtered)[0] : [];

        $poster = $data['image_poster'];
        $siteplan = $data['image_siteplan'];
        $type = $data['image_type'];
        $name = $data['name'];

        // Load pdf view
        $pdf = Pdf::loadView('profile.projects.brochure', compact('poster', 'siteplan', 'type', 'name'));
        return $pdf->download('Brosur '.$name.'.pdf');
    }
}