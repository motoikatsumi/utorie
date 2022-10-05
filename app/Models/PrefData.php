<?php

namespace App\Models;
use App\Models\Area;
use Illuminate\Database\Eloquent\Model;

class PrefData extends Model
{
    //cần định nghĩa lại table bởi vì laravel sẽ tự động tạo _ cho db name ngăn cách cho 2 words.
    public $table = "prefdatas";

    //cần thêm fillable trong model khi thực hiện Request Seo::firstOrNew
    protected $fillable = ['name', 'search_text', 'url_text', 'created_at', 'updated_at'];

    public static function route() {
    }

    public function getArea(){
        return $this->hasMany(Area::class, 'pref');
    }    
    public function companies() {
        return $this->belongsToMany(Company::class, 'company_pref', 'pref_id', 'company_id')->with('getImageMain')->withSum(['reviews as review_star' => function ($query){
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
