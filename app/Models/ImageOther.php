<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageOther extends Model
{
    protected $table = 'images_other';
    protected $fillable = [
        'type',
        'image_path',
        'link',
    ];
}
