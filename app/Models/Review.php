<?php

namespace App\Models;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }
    protected $fillable = ['company_id', 'nickname', 'age', 'sex', 'posted_at', 'satisfaction', 'price','performance','proposal_ability','maintenance_support','review_title','review_content','free_choice', 'review_show', 'created_at', 'updated_at'];
}
