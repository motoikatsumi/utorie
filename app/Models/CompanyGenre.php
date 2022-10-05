<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyGenre extends Model
{
    public $timestamps = false;
    protected $table = 'company_genre';
    protected $fillable = ['company_id', 'genre_id'];
}
