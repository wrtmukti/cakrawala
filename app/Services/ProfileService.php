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

    // Contact Me
    public function contactMe($id = '')
    {
        $name = "Cakrawala";
        $whatsapp = "62813493769098";
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
        // Menggunakan chunk_split untuk membagi string setiap 4 karakter
        $whatsapp_formatted = chunk_split($whatsapp, 4, '-');
        // Menghapus karakter '-' di akhir string jika ada
        $whatsapp_formatted = rtrim($whatsapp_formatted, '-');
        return array(
            'ad' => $link . $ad,
            'brochures' => $link . $brochures,
            'contact_me' => $link . $contact_me,
            'no_whatsapp' => $whatsapp_formatted,
            'more_info' => $link . $more_info,
        );
    }
}
