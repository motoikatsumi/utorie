<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //cần thêm fillable trong model khi thực hiện Request Seo::firstOrNew
    protected $fillable = ['name', 'value'];

    public static function route() {
    }
}
