<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StickingCompany extends Model
{
    public $timestamps = false;
    protected $table = 'sticking_company';
    protected $fillable = ['company_id', 'sticking_id'];
}
