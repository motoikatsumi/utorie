<?php

namespace App\Imports;

use App\Models\Area;
use App\Models\Company;
use App\Models\CompanyGenre;
use App\Models\AreaCompany;
use App\Models\RelatedCompany;
use App\Models\StickingCompany;
use App\Models\CompanyPref;
use App\Models\PrefData;
use App\Models\Genre;
use App\Models\StickingPoint;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Str; 

class CompanyImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        // dd($row);
        // $renameMap = [
        //     'カンパニーID' => 'id',
        //     'カンパニー名※' => 'company_name',
        //     '50音' => 'order_character',
        //     'ブランド説明文 件名' => 'company_title',
        //     'ブランド説明文 内容' => 'company_content',
        //     '会社名' => 'company_name_2',
        //     '所在地' => 'address',
        //     '設立' => 'establishment_date',
        //     '資本金' => 'capital',
        //     '代表者' => 'representative',
        //     '従業員数' => 'employees',
        //     '参考坪単価' => 'unit_price',
        //     '施工実績' => 'construction_results',
        //     '取扱い工法' => 'handling_method',
        //     'アフター・保証' => 'after_warranty',
        //     '建設業許可番号' => 'construction_permit',
        //     'ホームページ' => 'home_page',
        //     'Facebook' => 'facebook',
        //     'Instagram' => 'instagram',
        //     'LINE' => 'line',
        //     'Pinterest' => 'pinterest',
        //     'YouTube' => 'youtube',
        //     'メールアドレス' => 'email',
        //     '備考' => 'remarks',
        //     'HTML' => 'html',
        //     '検索表示フラグ' => 'display_flg',
        //     '検索表示優先度' => 'display_priority',
        //     'index' => 'index',
        //     'ジャンル※' => 'genre',
        //     'こだわりポイント' => 'sticking_point',
        // ];

        $renameMap = [
            0 => 'id',
            1 => 'company_name',
            2 => 'order_character',
            3 => 'company_title',
            4 => 'company_content',
            5 => 'company_name_2',
            6 => 'address',
            7 => 'establishment_date',
            8 => 'capital',
            9 => 'representative',
            10 => 'employees',
            11 => 'unit_price',
            12 => 'construction_results',
            13 => 'handling_method',
            14 => 'after_warranty',
            15 => 'construction_permit',
            16 => 'home_page',
            17 => 'facebook',
            18 => 'instagram',
            19 => 'line',
            20 => 'pinterest',
            21 => 'youtube',
            22 => 'email',
            23 => 'remarks',
            24 => 'html',
            25 => 'display_flg',
            26 => 'display_priority',
            27 => 'index',
            28 => 'genre',
            29 => 'sticking_point',
            30 => 'area',
            31 => 'impossible_area',
        ];
        if ($row[0] != 'カンパニーID') {
            $row = array_combine(array_map(function ($el) use ($renameMap) {
                return $renameMap[$el];
            }, array_keys($row)), array_values($row));

            $company = Company::where('id', $row['id'])->first();

            if (!empty($company)) {
                // if ($row['delete_flg'] === null) $row['delete_flg'] = 0;
                $company->fill($row);
            } else {
                $company = new Company;
                $company->fill($row);
                $company->display_priority = empty($row['display_priority']) ? 0 : $row['display_priority'];
                $company->display_flg = $row['display_flg'] == '表示' ? 1 : 0;
                $company->index = $row['index'] == 'no' ? 0 : 1;
                $company->star_review = empty($row['star_review']) ? 0 : $row['star_review'];
                $company->delete_flg = empty($row['delete_flg']) ? 0 : $row['delete_flg'];
            }           
            $company->save();
            $this->syncCompanyRelationships($row, $company);
        }
    }
    private function syncCompanyRelationships($row, $company)
    {
        if (!empty($row['genre'])) {
            $genreName = explode('-', $row['genre']);
            $genre = Genre::select('id')->whereIn('url_text', $genreName)->get();

            $genreIds = $genre->reduce(function ($carry, $item) {
                return $carry->push($item['id']);
            }, collect([]))->toArray();

            $company->getGenres()->sync($genreIds);
        }

        if (!empty($row['sticking_point'])) {
            $stickingNames = explode('-', $row['sticking_point']);
            $sticking_points = StickingPoint::select('id')->whereIn('name', $stickingNames)->get();

            $stickingIds = $sticking_points->reduce(function ($carry, $item) {
                return $carry->push($item['id']);
            }, collect([]))->toArray();
            $company->getStickings()->sync($stickingIds);
        }        
        
        if (!empty($row['area'])) {                        
            $prefarea = collect(explode('&', $row['area']));
            
            $prefarea = $prefarea->reduce(function($carry, $item){
                $pa = Str::of($item)->explode(':');                
                $carry[$pa->get(0)] = Str::of($pa->get(1))->explode('_'); 
                return $carry;               
            }, collect([]));            
            
            
            $areaNames = $prefarea->flatten()->toArray();    
            $prefName = array_keys($prefarea->toArray());

            $areas = Area::select('id')->whereIn('name', $areaNames)->get();            
            $prefs = PrefData::select('pref_code')->whereIn('name', $prefName)->get();            
            $prefs_code = $prefs->pluck('pref_code')->toArray();

            $areaIds = $areas->reduce(function ($carry, $item) {
                return $carry->push($item['id']);
            }, collect([]))->toArray();
            
            $company->getAreas()->sync($areaIds);
            $company->getPrefs()->sync($prefs_code);
        }

        if (!empty($row['impossible_area'])) {
            $areaNames = explode('-', $row['impossible_area']);
            $impossibleArea = Area::select('id')->whereIn('name', $areaNames)->get();

            $areaIds = $impossibleArea->reduce(function ($carry, $item) {
                return $carry->push($item['id']);
            }, collect([]))->toArray();
            $company->getImpossibleAreas()->sync($areaIds);
        }
        // if (!empty($row['genre'])) {
        //     $genreName = explode('-', $row['genre']);
        //     $genre = Genre::select('id')->whereIn('url_text', $genreName)->get();

        //     $genreIds = $genre->reduce(function ($carry, $item) {
        //         return $carry->push($item['id']);
        //     }, collect([]))->toArray();

        //     $company->getGenres()->sync($genreIds);
        // }
    }
    // private function syncCompanyRelationships($row, $company)
    // {
    //     if (!empty($row['area'])) {
    //         $area = explode('-', $row['area']);
    //         foreach ($area as $key => $item) {
    //             if ($item != 0)
    //                 $area = AreaCompany::create([
    //                     'company_id' => $company->id,
    //                     'area_id' => (int)$item
    //                 ]);
    //         }
    //     }
    //     if (!empty($row['genre'])) {
    //         $genre = explode('-', $row['genre']);
    //         foreach ($genre as $key => $item) {
    //             if ($item != 0)
    //                 $genre = CompanyGenre::create([
    //                     'company_id' => $company->id,
    //                     'genre_id' => (int)$item
    //                 ]);
    //         }
    //     }
    //     if (!empty($row['pref'])) {
    //         $pref = explode('-', $row['pref']);
    //         foreach ($pref as $key => $item) {
    //             if ($item != 0)
    //                 $pref = CompanyPref::create([
    //                     'company_id' => $company->id,
    //                     'pref_id' => (int)$item
    //                 ]);
    //         }
    //     }
    //     if (!empty($row['related'])) {
    //         $related = explode('-', $row['related']);
    //         foreach ($related as $key => $item) {
    //             if ($item != 0)
    //                 $related = RelatedCompany::create([
    //                     'company_id' => $company->id,
    //                     'pref_id' => (int)$item
    //                 ]);
    //         }
    //     }
    //     if (!empty($row['sticking_point'])) {
    //         $sticking_point = explode('-', $row['sticking_point']);
    //         foreach ($sticking_point as $key => $item) {
    //             if ($item != 0)
    //                 $sticking_point = StickingCompany::create([
    //                     'company_id' => $company->id,
    //                     'sticking_id' => (int)$item
    //                 ]);
    //         }
    //     }
    // }
}
