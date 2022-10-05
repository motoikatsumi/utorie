<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPref extends Model
{
    public $timestamps = false;
    protected $table = 'company_pref';
    protected $fillable = ['company_id', 'pref_id'];
}
