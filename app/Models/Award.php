<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;
    protected $table = 'award';
    protected $primaryKey = 'id_award';
    protected $fillable = [
        'title',
        'img_file',
    ];
}
