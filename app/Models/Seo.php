<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    //cần thêm fillable trong model khi thực hiện Request Seo::firstOrNew
    protected $fillable = ['page_name', 'route', 'page_status', 'title', 'keywords', 'description', 'repeat_keyword_description', 'is_index', 'created_at', 'updated_at'];

    public static function route() {
    }
}
