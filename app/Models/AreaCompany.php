<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaCompany extends Model
{
    public $timestamps = false;
    protected $table = 'area_company';
    protected $fillable = ['company_id', 'area_id'];
}
