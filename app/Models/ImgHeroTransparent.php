<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgHeroTransparent extends Model
{
    use HasFactory;
    protected $table = 'img_hero_transparent';
    protected $primaryKey = 'id_img_hero_transparent';
    protected $fillable = [
        'img_file',
        'title',
        'description',
        'carousel_active'
    ];
}
