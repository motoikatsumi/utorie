<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'relation_id',
        'type',
        'image_path',
        'main',
    ];
}
