<?php

namespace App\Services;

use App\Models\Award;
use App\Models\CompanyBio;
use Illuminate\Http\Request;
use App\Models\Collaboration;
use App\Services\ProjectService;
use Faker\Provider\ar_EG\Company;
use Illuminate\Support\Facades\File;

class ProfileService
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }


    // Company Bio
    public function companyBio()
    {
        $data = CompanyBio::first();
        return $data;
    }

    // Company Bio Update
    public function companyBioUpdate($params)
    {
        try {
            // dd($params);
            // Redirect Success
            return redirect()->route('admin-companybio')->with('success', 'Data biografi berhasil diupdate.');
        } catch (\Exception $e) {
            // Redirect Error
            return redirect()->route('admin-companybio')->with('error', 'Terjadi kesalahan update data biografi : ' . $e->getMessage());
        }
    }

    // Contact Me
    public function contactMe($id = '')
    {
        $title = "Kontak Kami";
        $description = "Selamat datang di halaman kontak kami, tempat untuk bertanya, berbagi, dan berkolaborasi. Kami siap menerima pesan Anda dan memberikan respon secepat mungkin!";
        $nickName = $this->companyBio()['company_nickname'] ?? '';
        $whatsapp = $this->companyBio()['whatsapp'] ?? '';
        $telephone = $this->companyBio()['phone'] ?? '';
        $email = $this->companyBio()['email'] ?? '';
        $instagram = $this->companyBio()['instagram'] ?? '';
        $facebook = $this->companyBio()['facebook'] ?? '';
        $twitter = $this->companyBio()['twitter'] ?? '';
        $youtube = $this->companyBio()['youtube'] ?? '';
        $ad = '';
        $brochures = '';
        $contact_me = '';
        $projectName['project_name'] = '';
        $projectName['type'] = '';

        if (!empty($id)) {
            $projectName = $this->projectService->detailProject($id);
            $ad = "Hallo " . $nickName . ", Saya tertarik dengan penawaran yang anda berikan di dalam website, pada rumah " . $projectName['project_name'] . " dengan type " . $projectName['type'];
            $brochures = "Hallo " . $nickName . ", penawaran yang anda berikan di dalam website merupakan penawaran yang menarik, dapatkah saya mendapatkan brosur dari rumah " . $projectName['project_name'] . " dengan type " . $projectName['type'];
            $contact_me = "Hallo " . $nickName . ", saya tertarik dengan penawaran yang anda berikan di dalam website, pada rumah " . $projectName['project_name'] . " dengan type " . $projectName['type'] . ". Dapatkah saya mengobrol dengan anda melalui pesan ini ?";
            // --
            $ad = str_replace(' ', '%20', $ad);
            $brochures = str_replace(' ', '%20', $brochures);
            $contact_me = str_replace(' ', '%20', $contact_me);
        }

        $more_info = "Hallo " . $nickName . ", saya ingin mendapatkan informasi lebih lanjut mengenai rumah yang anda tawarkan di dalam website";
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
            'whatsapp_link' => $link,
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
            'projectName' => $projectName['project_name'],
            'projectType' => $projectName['type'],
        );
    }

    // Award
    public function award()
    {
        $award_picture = Award::all();
        $award_picture_for_index = Award::where('id_award', '<>', 1)->get();
        $award_desc = array(
            'desc1' => 'PT. Cakrawala Pratama Manunggal telah mendapatkan sertifikat rating Silver dan Gold dari Bank BTN. Penghargaan tersebut diberikan kepada PT. Cakrawala Pratama Manunggal sebagai perusahaan yang berkontribusi atas penyediaan perumahan yang layak bagi masyarakat Indonesia.',
            'company' => 'PT. CAKRAWALA PRATAMA MANUNGGAL',
            'title' => 'PENGHARGAAN',
        );

        return array(
            'award_picture' => $award_picture,
            'award_desc' => $award_desc,
            'award_for_index' => $award_picture_for_index,
        );
    }

    // Store Award
    public function storeAward($params)
    {
        try {
            // Define Model
            $award = new Award;

            /* Data insert image */

            // Data Image
            $file = $params->file('img_file');

            // Validation file
            $params->validate([
                'img_file' => 'required|image|mimes:jpeg,png,jpg|max:20048',
            ]);

            // Saving Image to App
            $currentDateTime = now()->format('d-m-Y H:i:s');
            $fileName = "{$params['title']}_{$currentDateTime}.{$file->getClientOriginalExtension()}";
            $directorySave = public_path('image/award/');
            $file->move($directorySave, $fileName);

            /* Saving to Database */

            // Data Insert DB
            $data = [
                'title' => $params['title'],
                'img_file' => $fileName,
            ];

            // Eloquent Save data
            $award->create($data);

            // Redirect if success
            return redirect()->route('admin-award')->with('success', 'Penghargaan berhasil disimpan.');
        } catch (\Exception $e) {
            // Redirect if failed
            return redirect()->route('admin-award-create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // Delete Award
    public function deleteAward($id_award)
    {
        try {
            // Get data award
            $award = Award::find($id_award);

            // Redirect back if not finded data
            if (!$award) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }

            // Delete image file in App
            $directorySave = public_path('image/award/' . $award->img_file);
            File::delete($directorySave);

            // Delete data in Database
            $award->delete();

            // Redirect Success
            return redirect()->route('admin-award')->with('success', 'Data Penghargaan berhasil dihapus.');
        } catch (\Exception $e) {
            // Redirect Error
            return redirect()->route('admin-award')->with('error', 'Terjadi kesalahan delete penghargaan : ' . $e->getMessage());
        }
    }

    // Collaboration
    public function collaboration()
    {
        $description = array(
            'title' => 'KERJA SAMA INSTANSI',
            'desc' => 'PT. Cakrawala Pratama Manunggal juga bekerjasama dengan instansi-instansi setempat agar pembangunan setiap proyek berjalan dengan lancar, aman, dan cepat.',
        );
        $activity = Collaboration::all()->toArray();
        return array(
            'description' => $description,
            'activity' => $activity,
        );
    }

    // Store Collaboration
    public function storeCollaboration($params)
    {
        try {

            // Define Model
            $collaboration = new Collaboration;

            /* Data insert image */

            // Data Image
            $file = $params->file('img_file');

            // Validation file
            $params->validate([
                'img_file' => 'required|image|mimes:jpeg,png,jpg|max:20048',
            ]);

            // Saving Image to App
            $currentDateTime = now()->format('d-m-Y H:i:s');
            $fileName = "{$params['title']}_{$currentDateTime}.{$file->getClientOriginalExtension()}";
            $directorySave = public_path('image/collaboration/');
            $file->move($directorySave, $fileName);

            /* Saving to Database */

            // Data Insert DB
            $data = [
                'title' => $params['title'],
                'description' => $params['description'],
                'img_file' => $fileName,
            ];

            // Eloquent Save data
            $collaboration->create($data);

            // Redirect Success
            return redirect()->route('admin-collaboration')->with('success', 'Data kerja sama berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Redirect Error
            return redirect()->route('admin-collaboration')->with('error', 'Terjadi kesalahan penambahan data kerja sama : ' . $e->getMessage());
        }
    }

    // Delete Collaboration
    public function deleteCollaboration($id_collaboration)
    {
        try {
            // Get data collaboration
            $collaboration = Collaboration::find($id_collaboration);

            // Redirect back if not finded data
            if (!$collaboration) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }

            // Delete image file in App
            $directorySave = public_path('image/collaboration/' . $collaboration->img_file);
            File::delete($directorySave);

            // Delete data in Database
            $collaboration->delete();

            // Redirect Success
            return redirect()->route('admin-collaboration')->with('success', 'Data kerja sama berhasil dihapus.');
        } catch (\Exception $e) {
            // Redirect Error
            return redirect()->route('admin-collaboration')->with('error', 'Terjadi kesalahan delete data kerja sama : ' . $e->getMessage());
        }
    }

    // About
    public function about()
    {
        $data = array(
            'title' => 'TENTANG KAMI',
            'sub_title' => 'PT. CAKRAWALA PRATAMA MANUNGGAL adalah perusahaan yang bergerak dibidang kontraktor & developer.',
            'company_name' => $this->companyBio()['company_name'] ?? '',
            'main_description' => 'Adalah perusahaan yang bergerak dibidang kontraktor & developer. Berdiri pada tanggal 18 Oktober 2022 dan terus berkembang hingga saat ini.',
            'description' => 'PT. Cakrawala Pratama Manunggal adalah perusahaan yang bergerak di bidang properti. Kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat Indonesia dengan menyediakan hunian yang layak dan berkualitas.',
            'description2' => 'PT. Cakrawala Pratama Manunggal adalah perusahaan yang bergerak dibidang kontraktor & developer yang berdiri sejak tahun 2022. Perumahan Cakrawala Utama Residence 1 merupakan project pertama kami dan terus berkembang, hingga saat ini kami sudah mengembangkan lebih dari 500 unit rumah per tahun.',
            'description3' => 'Dengan mengusung konsep perumahan bersubsidi yang berkualitas prima dalam bangunan rumah,lingkungan hunian yang tertata,aman,nyaman,asri dan hijau, bernuansa feel like warm homey sehingga dapat meningkatkan kualitas hidup penghuninya. Dengan dukungan dari pihak perbankan dan instansi terkait, mempertegas komitmen kami untuk terus berkembang dan memberikan hunian terbaik untuk anda.',
            'since' => 'Berdiri pada tanggal 18 Oktober 2022 dan terus berkembang hingga saat ini.',
            'address' => $this->companyBio()['address'] ?? '',
            'maps_url' => $this->companyBio()['link_maps'] ?? '',
            'maps_iframe' => $this->companyBio()['iframe_maps'] ?? '',
            'youtube_url' => $this->companyBio()['youtube'] ?? '',
            'youtube_thumbnail' => $this->companyBio()['youtube_thumbnail'] ?? '',
            'image' => 'about.png',
        );

        return $data;
    }
}
