<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Services\ProfileService;


class ProfileController extends Controller
{
    protected $projectService;
    protected $profileService;

    public function __construct(ProjectService $projectService, ProfileService $profileService)
    {
        $this->projectService = $projectService;
        $this->profileService = $profileService;
    }

    public function index()
    {
        
        $projects = $this->projectService->datasetProject();
        $about = $this->profileService->about();
        $collaboration = $this->profileService->collaboration();
        $totalElements = count($collaboration['activity']);
        $remainder = $totalElements % 4;
        $dataEven = [];
        // Check odd or even
        if ($remainder != 0) {
            $dataEven = array_slice($collaboration['activity'], 0, $totalElements - $remainder);
        }
        return view('index', compact('projects', 'about', 'collaboration', 'dataEven'));
    }

    public function about()
    {
        $about = $this->profileService->about();
        return view('profile.about', compact('about'));
    }

    public function award()
    {
        $award = $this->profileService->award();
        return view('profile.award', compact('award'));
    }

    public function collaboration()
    {
        $collaboration = $this->profileService->collaboration();
        return view('profile.collaboration', compact('collaboration'));
    }


    public function contact()
    {
        return view('profile.contact');
    }

    public function specialOffer(Request $request)
    {
        // Request from form
        $custName = $request->input('custName');
        $custEmail = $request->input('custEmail');
        $custOffer = $request->input('custOffer');
        $id = $request->input('id');

        // Company Data
        $companyData = $this->profileService->contactMe($id);
        // Format message
        $special_offer = "Hallo " . $companyData['company_name'] . ", saya ingin mendapatkan penawaran khusus dari anda. Dapatkah saya mengobrol dengan anda melalui pesan ini?%0A%0ASaya yang ber:%0A- Nama : " . $custName . "%0A- Email : " . $custEmail . "%0A- Penawaran dari saya : " . $custOffer . "%0A%0ADemikian yang dapat saya sampaikan. Atas perhatian anda saya ucapkan terimakasih banyak.";
        if (!empty($id)) {
            $special_offer = "Hallo " . $companyData['company_name'] . ", saya ingin mendapatkan penawaran khusus dari anda. %0A%0A Pada :  %0A- Rumah :" . $companyData['projectName'] . "%0A- Type " . $companyData['projectType'] . ". %0A%0A Dapatkah saya mengobrol dengan anda melalui pesan ini?%0A%0ASaya yang ber:%0A- Nama : " . $custName . "%0A- Email : " . $custEmail . "%0A- Penawaran dari saya : " . $custOffer . "%0A%0ADemikian yang dapat saya sampaikan. Atas perhatian anda saya ucapkan terimakasih banyak.";
        }

        // Link for anchor href
        $link = $companyData['whatsapp_link'] . $special_offer;
        return redirect($link);
    }
}
