<?php
namespace App\Repositories;

use App\Models\Genre;

use App\Extra\Code\GenreDefault;
use App\Extra\Code\CodePattern;
use Illuminate\Support\Carbon;
use App\Enums\EGenre;
use Mavinoo\Batch\BatchFacade;
use App\Interfaces\GenreRepositoryInterface;
use App\Models\StickingPoint;

class GenreRepo extends BaseRepo implements GenreRepositoryInterface
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function model()
	{
		return Genre::class;
	}

	public static function updateMultiRows(array $fields)
	{
		BatchFacade::update(new Genre, $fields, 'genre_code');
	}
	
	public function getSticking($genreIds) {
		$stickings = StickingPoint::whereIn('genre_code', $genreIds)->get();
		return $stickings;
	}

	public function getAreaInPrefecture($pref_id, $type){
		$area = $this->model->with('getArea')->whereIn('id',(array)$pref_id)->get();
		if($type == 'html'){
			$output='<select name="area" multiple="multiple" id="area" class="form-control" style="height: 230px;">';
			if ($area) {
				foreach ($area as $getAreas) {
					foreach ($getAreas['getArea'] as $item) {
						$output .= '<option value="'.$item->id.'">'.$item->name.'</option>';
					}
				}
			}
			$output.='</select>';
		}else{
			$output = $area;
		}
		return response()->json($output);
	}
}