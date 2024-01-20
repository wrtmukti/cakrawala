<?php

namespace App\Services;

use App\Models\CompanyBio;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Projects;
use App\Models\ImgPoster;
use App\Models\ImgType;
use App\Models\ImgSiteplan;
use Illuminate\Support\Facades\File;
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
            // Define Model
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
            // Get data project by id_project
            $project = Projects::find($params['id_project']);

            // If data not finded
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
            return redirect()->route('admin-project')->with('success', 'Data proyek berhasil diperbarui.');
        } catch (\Exception $e) {
            // Redirect if failed
            return redirect()->route('admin-project-edit', ['id' => $params['id_project']])->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // Delete Project Data
    public function deleteProject($params)
    {
    }

    // Image Update Project
    public function imageUpdateProject($params)
    {
        try {
            // Get Page For Chose Update Target
            $page = $params['page'];

            // Get data project by id_project
            $project = Projects::find($params['id_project']);

            // Define Model
            $models = [
                'poster' => new ImgPoster,
                'type' => new ImgType,
                'siteplan' => new ImgSiteplan,
            ];
            $model = $models[$page] ?? null;

            // Data Image
            $file = $params->file('img_file');

            // Validation file
            $params->validate([
                'img_file' => 'required|image|mimes:jpeg,png,jpg|max:20048',
            ]);

            // Saving Image to App
            $currentDateTime = now()->format('d-m-Y H:i:s');
            $fileName = "{$project->project_name}_{$currentDateTime}.{$file->getClientOriginalExtension()}";
            $directorySave = public_path('image/project/' . $page);
            $file->move($directorySave, $fileName);

            // Saving to Database
            $model->img_file = $fileName;
            $model->id_project = $params['id_project'];
            $model->carousel_active = $params['carousel_active'] == 'on' ? 'Y' : 'N';
            $model->save();

            // Redirect if success
            return redirect()->route('admin-project-img-edit', ['id' => $params['id_project'], 'page' => $page])->with('success', 'Data image ' . $page . ' berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('admin-project-img-edit', ['id' => $params['id_project'], 'page' => $page])->with('error', 'Terjadi kesalahan simpan image ' . $page . ' : ' . $e->getMessage());
        }
    }


    // Image Delete Project
    public function imageDeleteProject($id_img, $page)
    {
        try {
            // Get Data Image by ID Image and page
            $findData = [
                'poster' => ImgPoster::find($id_img),
                'type' => ImgType::find($id_img),
                'siteplan' => ImgSiteplan::find($id_img),
            ];
            $data = $findData[$page] ?? null;

            // Redirect back if not finded data
            if (!$data) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }

            // Delete File in App Process
            $directorySave = public_path('image/project/' . $page . '/' . $data->img_file);
            File::delete($directorySave);

            // Delete data in database
            $data->delete();

            // Redirect Success
            return redirect()->route('admin-project-img-edit', ['id' => $data->id_project, 'page' => $page])->with('success', 'Data image ' . $page . ' berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin-project-img-edit', ['id' => $data->id_project, 'page' => $page])->with('error', 'Terjadi kesalahan delete image ' . $page . ' : ' . $e->getMessage());
        }
    }
}
