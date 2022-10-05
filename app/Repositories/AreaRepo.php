<?php
namespace App\Repositories;

use App\Interfaces\PrefDataRepositoryInterface;
use App\Models\Area;
use App\Extra\Code\Pref;
use App\Extra\Code\CodePattern;
use Illuminate\Support\Carbon;
use App\Enums\EPref;
use Mavinoo\Batch\BatchFacade;

class AreaRepo extends BaseRepo
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function model()
	{
		return Area::class;
	}
}