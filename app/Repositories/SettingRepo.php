<?php
namespace App\Repositories;

use App\Models\Setting;
use App\Models\Image;
//set DB default
use App\Extra\Code\SettingDefault;
use App\Extra\Code\CodePattern;
use App\Enums\EImage;
use App\Models\ImageOther;
//lib
use Mavinoo\Batch\BatchFacade;

class SettingRepo extends BaseRepo
{
    /**
     * get model
     * @return string
     */
    public function model()
    {
        return Setting::class;
    }

		public function getTheAsideImages() {
			$asideImages = ImageOther::where('type',EImage::ASIDE)->get();
			foreach ($asideImages as $key => $image) {
					$image_resolve[$image['id']] = $image;
			}
			$asideImages = !empty($image_resolve) ? $image_resolve : $asideImages;
			return $asideImages;
		}

		public static function updateMultiRows(array $fields)
		{
			BatchFacade::update(new Setting, $fields, 'id');
		}
		
		public function registDefaultData() {
			//call model
			$settingTable = $this->model;
			//get all value
			$settings = SettingDefault::valueOf();
	
			//run fill data
			foreach ($settings as $setting) {
				$data = $settingTable->first();
				//fill data in the case of empty db
				if (empty($data)) {
					$insertFields = [];
					$insertFields['name'] = $setting['inputname'];
					$insertFields['setting_value'] = $setting['value2'];
					$insertFields = $settingTable->insert($insertFields);				
				}
			}
		}


		public function getByOptions(array $aOptions) {
			$result = $this->model->orderBy('id', 'ASC');
			foreach ($aOptions as $key => $val) {            
				if (!isset($val)) {
					continue;
				}
				switch ($key) {
					case 'id':
						$result->where('id', $val);
						break;
					case 'in_name':
						if (!is_array($val)) {
							$val = [$val];
						}
						$result->whereIn('name', $val);
						break;
					case 'name':
						$result->where('name', $val);
						break;
				}
			}
			return parent::getByOption($aOptions, $result);
		}

		public function getAsideImages(){
			return ImageOther::where('type',EImage::ASIDE)->get();
		}
}