<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgType extends Model
{
    use HasFactory;

    protected $table = 'img_type';
    protected $primaryKey = 'id_img_type';

    // Relation to project master
    public function projects()
    {
        return $this->belongsTo(Projects::class, 'id_project');
    }
}
