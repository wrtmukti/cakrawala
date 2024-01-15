<?php

namespace App\Services;

use App\Services\ProjectService;

class ProfileService
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    // Contact Me
    public function contactMe($id = '')
    {
        $title = "Kontak Kami";
        $description = "Selamat datang di halaman kontak kami, tempat untuk bertanya, berbagi, dan berkolaborasi. Kami siap menerima pesan Anda dan memberikan respon secepat mungkin!";
        $name = "Cakrawala";
        $whatsapp = "62813493769098";
        $telephone = "62813493769098";
        $email = "cakrawalapratamamanunggalresmi@gmail.com";
        $instagram = "";
        $facebook = "";
        $twitter = "";
        $youtube = "";
        $ad = '';
        $brochures = '';
        $contact_me = '';
        if (!empty($id)) {
            $projectName = $this->projectService->detailProject($id);
            $ad = "Hallo " . $name . ", Saya tertarik dengan penawaran yang anda berikan di dalam website, pada rumah " . $projectName['name'] . " dengan type " . $projectName['type'];
            $brochures = "Hallo " . $name . ", penawaran yang anda berikan di dalam website merupakan penawaran yang menarik, dapatkah saya mendapatkan brosur dari rumah " . $projectName['name'] . " dengan type " . $projectName['type'];
            $contact_me = "Hallo " . $name . ", saya tertarik dengan penawaran yang anda berikan di dalam website, pada rumah " . $projectName['name'] . " dengan type " . $projectName['type'] . ". Dapatkah saya mengobrol dengan anda melalui pesan ini ?";
            // --
            $ad = str_replace(' ', '%20', $ad);
            $brochures = str_replace(' ', '%20', $brochures);
            $contact_me = str_replace(' ', '%20', $contact_me);
        }
        $more_info = "Hallo " . $name . ", saya ingin mendapatkan informasi lebih lanjut mengenai rumah yang anda tawarkan di dalam website";
        // Link for anchor href
        $link = 'https://api.whatsapp.com/send?phone=' . $whatsapp . '&text=';
        // Format number for view button
        $whatsapp_formatted = chunk_split($whatsapp, 4, '-');
        $whatsapp_formatted = rtrim($whatsapp_formatted, '-');
        $telephone_formatted = chunk_split($telephone, 4, '-');
        $telephone_formatted = rtrim($telephone_formatted, '-');

        return array(
            'title' => $title,
            'description' => $description,
            'ad' => $link . $ad,
            'brochures' => $link . $brochures,
            'contact_me' => $link . $contact_me,
            'no_whatsapp' => $whatsapp_formatted,
            'more_info' => $link . $more_info,
            'no_telephone' => $telephone_formatted,
            'email' => $email,
            'instagram' => $instagram,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'youtube' => $youtube,
            'alamat' => $this->about()['address'],
            'description' => $this->about()['main_description'],
            'company_name' => $this->about()['company_name'],
        );
    }

    // Award
    public function award()
    {
        $award_picture = array(
            'picture1' => [
                'name' => 'Penghargaan PT. Cakrawala Pratama Manunggal',
                'image' => 'award1.png'
            ],
            'picture2' => [
                'name' => 'Sertifikat Silver',
                'image' => 'sertif_silver.jpg'
            ],
            'picture3' => [
                'name' => 'Sertifikat Gold',
                'image' => 'sertif_gold.jpg'
            ],
        );
        $award_desc = array(
            'desc1' => 'PT. Cakrawala Pratama Manunggal telah mendapatkan sertifikat rating Silver dan Gold dari Bank BTN. Penghargaan tersebut diberikan kepada PT. Cakrawala Pratama Manunggal sebagai perusahaan yang berkontribusi atas penyediaan perumahan yang layak bagi masyarakat Indonesia.',
            'company' => 'PT. CAKRAWALA PRATAMA MANUNGGAL',
            'title' => 'PENGHARGAAN',
        );

        return array(
            'award_picture' => $award_picture,
            'award_desc' => $award_desc,
        );
    }

    // Collaboration
    public function collaboration()
    {
        $description = array(
            'title' => 'KERJA SAMA INSTANSI',
            'desc' => 'PT. Cakrawala Pratama Manunggal juga bekerjasama dengan instansi-instansi setempat agar pembangunan setiap proyek berjalan dengan lancar, aman, dan cepat.',
        );
        $activity = array(
            [
                'name' => 'PPJB Notaris',
                'desc' => 'Proses PPJB Bersama Notaris',
                'image' => 'INSTANSI 1.jpg'
            ],
            [
                'name' => 'Survei BPN',
                'desc' => 'Survei Bekerjasama Dengan BPN',
                'image' => 'INSTANSI 2.jpg'
            ],
            [
                'name' => 'PDAM Kabupaten Sukoharjo',
                'desc' => 'Bekerjasama Dengan PDAM Kabupaten Sukoharjo',
                'image' => 'INSTANSI 3.jpg'
            ],
            [
                'name' => 'Musyawarah Warga',
                'desc' => 'Musyawarah Dengan Warga Setempat',
                'image' => 'INSTANSI 4.jpg'
            ],
            [
                'name' => 'Bank BTN',
                'desc' => 'Event Dengan Bank BTN',
                'image' => 'INSTANSI 5.jpg'
            ],
            [
                'name' => 'BTN dan TAPERA',
                'desc' => 'Event Bersama BTN dan TAPERA',
                'image' => 'INSTANSI 6.jpg'
            ],
            [
                'name' => 'Akad Bank Masal',
                'desc' => 'Akad Bank Masal PT. Cakrawala Pratama Manunggal',
                'image' => 'INSTANSI 7.jpg'
            ],
            [
                'name' => 'Kelurahan Setempat',
                'desc' => 'Bekerja Sama Dengan Kelurahan Setempat',
                'image' => 'INSTANSI 8.jpg'
            ],
            [
                'name' => 'Doa Bersama',
                'desc' => 'Prosesi Doa Bersama Pembukaan Lahan',
                'image' => 'INSTANSI 10.jpg'
            ],
        );
        return array(
            'description' => $description,
            'activity' => $activity,
        );
    }

    // About
    public function about()
    {
        $data = array(
            'title' => 'TENTANG KAMI',
            'company_name' => 'PT. Cakrawala Pratama Manunggal',
            'main_description' => 'Adalah perusahaan yang bergerak dibidang kontraktor & developer. Berdiri pada tanggal 18 Oktober 2022 dan terus berkembang hingga saat ini.',
            'description' => 'PT. Cakrawala Pratama Manunggal adalah perusahaan yang bergerak di bidang properti. Kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat Indonesia dengan menyediakan hunian yang layak dan berkualitas.',
            'address' => 'Jl. Raya Solo - Purwodadi KM 12,5, Kec. Mojolaban, Kab. Sukoharjo, Jawa Tengah',
            'maps_url' => 'https://maps.app.goo.gl/kn9XTGxFvDzYe2DUA',
            'maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63282.313786208775!2d110.77761244860885!3d-7.5592070683129915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16627ad11ab1%3A0xe7fe4e0454bc3095!2sSurakarta%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1705082053182!5m2!1sid!2sid',
        );

        return $data;
    }

}
