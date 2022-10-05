<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\FilterTrait;

class Store extends Model
{
    use HasFactory,FilterTrait;

    // const STATUS_DRAFT = 'draft';
    // const STATUS_UNPUBLISHED = 'unpublished';
    // const STATUS_PUBLISHED = 'published';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    /**
	 * set string fields for filtering
	 * @var array
	 */
	protected $likeFilterFields = ['store_name', 'brand','province'];

    /**
     * set boolean fields for filtering
     * @var array
     */
    protected $boolFilterFields = ['status'];

    protected $fillable = [
        'store_name','brand','province','city','address','direction_description','tel','bussiness_hours','regular_holiday',
        'packing_lot','license_to_hold','store_subject','store_content','store_img','about_store','scraping_url','affiliate_page',
        'affiliate_banner','product_id','purchase_method','other_condition','correspondence_area','remake','display_flg','latitude',
        'longitude','html','address_flg','noindex','delete_flg'
    ];

}
