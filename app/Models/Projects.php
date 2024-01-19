<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'id_project';
    protected $fillable = [
        'project_name',
        'type',
        'price',
        'address',
        'link_maps',
        'iframe_maps',
        'project_desc',
        'link_maps',
        'iframe_maps',
    ];
    
    // Relation to image in project
    public function imgPosters()
    {
        return $this->hasMany(ImgPoster::class, 'id_project', 'id_project');
    }

    public function imgTypes()
    {
        return $this->hasMany(ImgType::class, 'id_project', 'id_project');
    }

    public function imgSiteplans()
    {
        return $this->hasMany(ImgSiteplan::class, 'id_project', 'id_project');
    }
}


