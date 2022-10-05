<?php
namespace App\Repositories;

use App\Models\StickingPoint;
use App\Interfaces\StickingRepositoryInterface;
use App\Repositories\BaseRepo as BaseRepo;
use Mavinoo\Batch\BatchFacade;

class StickingRepo extends BaseRepo implements StickingRepositoryInterface
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function model()
	{
		return StickingPoint::class;
	}

	public static function updateMultiRows(array $fields)
	{
		BatchFacade::update(new StickingPoint, $fields, 'id');
	}

}