<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PrefData;
use App\Models\Company;
use App\Models\Review;

class Office extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'address',
        'access',
        'hours',
        'holiday',
        'pref_id',
        'tel',
    ];
    public function companies() {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function prefs() {
        return $this->belongsTo(PrefData::class, 'pref_id'); 
    }
    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
