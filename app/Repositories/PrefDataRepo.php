<?php

namespace App\Repositories;

use App\Interfaces\PrefDataRepositoryInterface;
use App\Models\PrefData;
use App\Models\Area;
use App\Extra\Code\Pref;
use App\Extra\Code\CodePattern;
use Illuminate\Support\Carbon;
use App\Enums\EPref;
use Mavinoo\Batch\BatchFacade;

class PrefDataRepo extends BaseRepo implements PrefDataRepositoryInterface
{
	public function __construct()
	{
		parent::__construct();
	}

	public function model()
	{
		return PrefData::class;
	}

	public static function updateMultiRows(array $fields)
	{
		BatchFacade::update(new PrefData, $fields, 'pref_code');
	}

	public function registDefaultData()
	{
		//call model
		$prefTable = $this->model;
		//get all value
		$prefs = Pref::valueOf();

		//run fill data
		foreach ($prefs as $pref) {
			$data = $prefTable->find($pref['code']);

			//fill data in the case of empty db
			if (empty($data) && $pref['code'] != Pref::$MISETTEI[CodePattern::$CODE]) {
				$prefData = [];
				$prefData[EPref::PREF_CODE] = $pref['code'];
				$prefData[EPref::PREF_NAME] = $pref['value'];
				$prefData[EPref::SEARCH_TEXT] = $pref['value2'];
				$prefData[EPref::URL_TEXT] = $pref['value3'];
				$prefData = $prefTable->insert($prefData);
			}
		}
	}
	public function getAreaByPref($pref_id)
	{
		return Area::whereIn('pref', $pref_id)->get();
	}
	public function getAreaInPrefecture($pref_id, $type)
	{
		$area = $this->model->with('getArea')->whereIn('id', (array)$pref_id)->get();

		if ($type == 'html') {
			$output = '<select name="area" multiple="multiple" id="area" class="form-control" style="height: 230px;">';
			if ($area) {
				foreach ($area as $getAreas) {
					foreach ($getAreas['getArea'] as $item) {
						if ($item['area_type'] != 2) {
							$output .= '<option value="' . $item->id . '">' . $item->name . '</option>';
						}
					}
				}
			}
			$output .= '</select>';
		} else {
			$output = $area;
		}

		return response()->json($output);
	}
}
