<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImpossibleArea extends Model
{
    public $timestamps = false;
    protected $table = 'impossible_area';
    protected $fillable = ['company_id', 'area_id'];
}
