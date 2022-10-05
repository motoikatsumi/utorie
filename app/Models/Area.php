<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Area extends Model
{
    protected $fillable = [
        'pref',
        'area_type',
        'del_flg',
        'created_at',
        'updated_at'
    ];
    public function prefs() {
        return $this->belongsTo(PrefData::class, 'pref', 'pref_code');
    }
    public function companies(){
        return $this->belongsToMany(Company::class)->with('getImageMain')->withSum(['reviews as review_star' => function ($query){
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
