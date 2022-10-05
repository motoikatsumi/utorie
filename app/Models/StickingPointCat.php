<?php

namespace App\Models;

use App\Models\StickingPoint;
use Illuminate\Database\Eloquent\Model;

class StickingPointCat extends Model
{
    public $table = 'stickingpoint_cats';

    public function getStickingPoint(){
        return $this->hasMany(StickingPoint::class,'stickingpoint_cat');
    }
}
