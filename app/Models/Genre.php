<?php

namespace App\Models;
use App\Models\Area;
use App\Models\StickingPoint;
use App\Models\Company; 
use Illuminate\Database\Eloquent\Model;
use DB;

class Genre extends Model
{
    //cần thêm fillable trong model khi thực hiện Request Seo::firstOrNew
    protected $fillable = ['name', 'search_text', 'url_text', 'created_at', 'updated_at'];
    public function stickings(){
        return $this->hasMany(StickingPoint::class, 'genre_code', 'genre_code');
    }
    public function companies() {
        return $this->belongsToMany(Company::class)->withSum(['reviews as review_star' => function ($query){
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
}
