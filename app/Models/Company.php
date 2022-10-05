<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\FilterTrait;
use App\Models\Area;
use App\Models\Genre;
use App\Models\StickingPoint;
use App\Models\Image;
use App\Models\Office;
use App\Models\RelatedCompany;
use App\Models\Review;

class Company extends Model
{
    use HasFactory, FilterTrait;

    /**
     * set string fields for filtering
     * @var array
     */
    protected $likeFilterFields = ['company_name', 'genre', 'company_title', 'address'];

    /**
     * set interger fields for filtering
     * @var array
     */
    protected $intFilterFields = ['display_priority', 'display_flg', 'index'];

    /**
     * set interger fields for filtering
     * @var array
     */
    protected $betweenFilterFields = ['id'];

    // protected $arrayFilterFields = [];
    // protected $boolFilterFields = [];

    // protected $appends = ['count_review'];

    protected $fillable = [
        'company_name', 'order_character', 'company_title', 'company_content', 'possible_area', 'impossible_area', 'company_name_2', 'address', 'establishment_date',
        'representative', 'capital', 'employees', 'unit_price', 'construction_results', 'handling_method', 'after_warranty', 'construction_permit',
        'home_page', 'facebook', 'instagram', 'line', 'pinterest', 'youtube', 'email', 'html', 'remarks', 'display_priority', 'display_flg', 'delete_flg', 'index', 'total_review'
    ];

    public function getAreas()
    {
        return $this->belongsToMany(Area::class);
    }

    public function getImpossibleAreas()
    {
        return $this->belongsToMany(Area::class, 'impossible_area');
    }

    public function getGenres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function getPrefs()
    {
        return $this->belongsToMany(PrefData::class, 'company_pref', 'company_id', 'pref_id');
    }

    public function getStickings()
    {
        return $this->belongsToMany(StickingPoint::class, 'sticking_company', 'company_id', 'sticking_id')->with('GenreCat');
    }

    public function getRelateds()
    {
        return $this->hasMany(RelatedCompany::class, 'company_id');
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function getImages()
    {
        return $this->hasMany(Image::class, 'relation_id')->where('type', 1)->orderByDesc('main');
    }

    public function getImageMain()
    {
        return $this->hasMany(Image::class, 'relation_id')->where([['type', 1], ['main', 1]]);
    }

    public function getImageOther()
    {
        return $this->hasMany(Image::class, 'relation_id')->where([['type', 1], ['main', '!=', 1]]);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
