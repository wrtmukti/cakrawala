<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBio extends Model
{
    use HasFactory;

    protected $table = 'company_bio';
    protected $primaryKey = 'id_company_bio';
}
