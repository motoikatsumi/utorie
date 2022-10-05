<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StickingPoint extends Model
{
    public $table = "sticking_points";
    protected $fillable = ['name', 'supplement_text', 'url_text', 'view_type', 'created_at', 'updated_at'];

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre', 'genre_code', 'genre_code');
    }

    public function companies() {
        return $this->belongsToMany(Company::class, 'sticking_company', 'sticking_id', 'company_id')->withSum(['reviews as review_star' => function ($query){
            $query->where('review_show', '=', 1);
        }], 'satisfaction')
        ->withcount(['reviews' => function ($query) {
            $query->where('review_show', '=', 1);
        }])
        ->where([
            ['delete_flg', 0],
            ['display_flg', 1]
        ]);
    }

    public function GenreCat()
    {
        // return $this->hasManyThrough('App\Models\StickingPointCat', 'App\Models\Genre', 'stickingpoint_cats', 'id');
        return $this->belongsTo('App\Models\StickingPointCat', 'stickingpoint_cat', 'id');
    }

}
