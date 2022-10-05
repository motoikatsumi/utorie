<?php

namespace App\Repositories;

use App\Models\Company;
use App\Models\Review;
use App\Repositories\BaseRepo as BaseRepo;

class FrontCompanyRepo extends BaseRepo
{
    public $storeRepository;

    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return Company::class;
    }

    public function reviewAverage($id)
    {
        $review = Review::where('company_id', $id)->get();
        $total_point = 0;
        $total_review = 0;
        foreach ($review as $key => $item) {
            $total_review += 1;
            // $total_point += ((int)$item['price'] + (int)$item['performance'] + (int)$item['proposal_ability'] + (int)$item['free_choice'] + (int)$item['maintenance_support'])/5;
            $total_point += $item['satisfaction'];
        }
        $average = $total_point / $total_review;
        $company = Company::where('id', $id)->update([
            'star_review' => $average,
            'total_review' => $total_review
        ]);
    }
}
