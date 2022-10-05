<?php
namespace App\Repositories;

use App\Models\Office;
use App\Interfaces\OfficeRepositoryInterface;
use App\Repositories\BaseRepo as BaseRepo;

class OfficeRepo extends BaseRepo implements OfficeRepositoryInterface
{
    public $storeRepository;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function model()
    {
        return Office::class;
    }

    public function getOffice($params) {
        $this->model->whereIn('id', $params)->get();
    }
    
}