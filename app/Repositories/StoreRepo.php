<?php
namespace App\Repositories;

use App\Models\Store;
use App\Interfaces\StoreRepositoryInterface;
use App\Repositories\BaseRepo as BaseRepo;
class StoreRepo extends BaseRepo implements StoreRepositoryInterface
{
    public $storeRepository;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function model()
    {
        return Store::class;
    }
    
}