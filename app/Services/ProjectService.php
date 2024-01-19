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

    // Store Project
    public function storeProject($params)
    {
        try {
            // Inisiasi Model
            $project = new Projects;

            // Data Insert
            $data = [
                'project_name' => $params['project_name'],
                'type' => $params['type'],
                'price' => $params['price'],
                'address' => $params['address'],
                'link_maps' => $params['link_maps'],
                'iframe_maps' => $params['iframe_maps'],
                'project_desc' => $params['project_desc'],
            ];

            // Eloquent Save data
            $project->create($data);

            // Redirect if success
            return redirect()->route('admin-project')->with('success', 'Proyek berhasil disimpan.');
        } catch (\Exception $e) {
            // Redirect if failed
            return redirect()->route('admin-project-create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

   // Update Project
public function updateProject($params)
{
    try {
        // Mengambil instance model berdasarkan id_project
        $project = Projects::find($params['id_project']);

        // Jika data tidak ditemukan
        if (!$project) {
            return redirect()->route('admin-project')->with('error', 'Proyek tidak ditemukan.');
        }

        // Data update
        $data = [
            'project_name' => $params['project_name'],
            'type' => $params['type'],
            'price' => $params['price'],
            'address' => $params['address'],
            'link_maps' => $params['link_maps'],
            'iframe_maps' => $params['iframe_maps'],
            'project_desc' => $params['project_desc'],
        ];

        // Eloquent Update data
        $project->update($data);

        // Redirect if success
        return redirect()->route('admin-project')->with('success', 'Proyek berhasil diperbarui.');
    } catch (\Exception $e) {
        // Redirect if failed
        return redirect()->route('admin-project-edit', ['id' => $params['id_project']])->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

}
