<?php

namespace App\Services;

use App\Models\CompanyBio;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Projects;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProjectService
{
    // Get Navbar
    public function detailProject($id)
    {
        $detail = $this->datasetProject()->find($id);
        return $detail;
    }

    public function datasetProject()
    {
        $projects = Projects::with(['imgPosters', 'imgTypes', 'imgSiteplans'])->get();
        return $projects;
    }


    // Download Brochures
    public function downloadBrochures($id)
    {
        $data = $this->detailProject($id);

        $poster = $data->imgPosters ?? [];
        $siteplan = $data->imgSiteplans ?? [];
        $type = $data->imgTypes ?? [];
        $name = CompanyBio::first()['company_name'] ?? '';

        // Load pdf view
        $pdf = Pdf::loadView('profile.projects.brochure', compact('poster', 'siteplan', 'type', 'name'));
        return $pdf->download('Brosur ' . $name . '.pdf');
    }
}
