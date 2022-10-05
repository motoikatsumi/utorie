<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class RelatedCompany extends Model
{
    public $table = 'related_companies';
    protected $fillable = [
        'company_id',
        'related_id',
    ];
}
