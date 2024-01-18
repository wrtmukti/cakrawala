<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgPoster extends Model
{   
    use HasFactory;

    protected $table = 'img_poster';
    protected $primaryKey = 'id_img_poster';

    // Relation to project master
    public function projects()
    {
        return $this->belongsTo(Projects::class, 'id_project');
    }
}
