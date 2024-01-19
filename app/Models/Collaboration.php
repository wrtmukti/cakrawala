<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    use HasFactory;
    protected $table = 'collaboration';
    protected $primaryKey = 'id_collaboration';
}