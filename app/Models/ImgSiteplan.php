<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgSiteplan extends Model
{
    use HasFactory;

    protected $table = 'img_siteplan';
    protected $primaryKey = 'id_img_siteplan';
    protected $fillable = [
        'id_project',
        'img_file',
        'carousel_active',
    ];

    // Relation to project master
    public function projects()
    {
        return $this->belongsTo(Projects::class, 'id_project');
    }
}
