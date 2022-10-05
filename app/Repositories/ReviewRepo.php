<?php
namespace App\Repositories;

use App\Interfaces\ReviewRepositoryInterface;
use App\Models\Review;
use App\Repositories\BaseRepo as BaseRepo;

class ReviewRepo extends BaseRepo implements ReviewRepositoryInterface
{
    public $storeRepository;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function model()
    {
        return Review::class;
    }
    
}