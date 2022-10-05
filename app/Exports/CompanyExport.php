<?php

namespace App\Exports;

use App\Models\Company;
use App\Models\Area;
use App\Models\PrefData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CompanyExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {        
        return [
            'カンパニーID',
            'カンパニー名※',
            '50音',
            'ブランド説明文 件名',
            'ブランド説明文 内容',
            '会社名',
            '所在地',
            '設立',
            '資本金',
            '代表者',
            '従業員数',
            '参考坪単価',
            '施工実績',
            '取扱い工法',
            'アフター・保証',
            '建設業許可番号',
            'ホームページ',
            'Facebook',
            'Instagram',
            'LINE',
            'Pinterest',
            'YouTube',
            'メールアドレス',
            '備考',
            'HTML',
            '検索表示フラグ',
            '検索表示優先度',
            'index',
            'ジャンル※',
            'こだわりポイント',
            '施工対応可能エリア',
            '施工対応不可エリア'
        ];
    }
    public function collection()
    {
        $companies = Company::select(
            'id',
            'company_name',
            'order_character',
            'company_title',
            'company_content',
            'company_name_2',
            'address',
            'establishment_date',
            'capital',
            'representative',
            'employees',
            'unit_price',
            'construction_results',
            'handling_method',
            'after_warranty',
            'construction_permit',
            'home_page',
            'facebook',
            'instagram',
            'line',
            'pinterest',
            'youtube',
            'email',
            'remarks',
            'html',
            'display_flg',
            'display_priority',
            'index',
        )->with('getStickings', 'getGenres', 'getAreas', 'getImpossibleAreas')->where('delete_flg', 0)->get()->makeHidden('count_review');
        $companies->each(function ($item, $key) {
            $sticking_point = $item->getStickings->reduce(function ($carry, $item) {
                return $item->name . '-' . $carry;
            });
            $genre = $item->getGenres->reduce(function ($carry, $item) {
                return $item->url_text . '-' . $carry;
            });


            $areasid = $item->getAreas->pluck('id')->toArray();
            $prefsid = $item->getPrefs->pluck('pref_code')->toArray();
            $prefsname = $item->getPrefs->pluck('name')->toArray();
            
            if(count($areasid) > 0) {
                $areaModal = new Area;
                $areabyPref = $areaModal->select('*')->whereIn('id', $areasid)->with('prefs')->get();

                //check if prefs selected but area not;
                $groupAreaPref = $areabyPref->groupBy('prefs.name');

                $ists = array_diff($prefsname, array_keys($groupAreaPref->toArray()));
                if(count(collect($ists)) > 0) {
                    foreach ($ists as $ist) {
                        $groupAreaPref->put($ist, []);
                    }
                }                                                                
                $areabyPref = $groupAreaPref->reduce(function ($carry, $theAre, $key) {
                    if(count($theAre) > 0) {
                        $mapsArea = $theAre->implode('name', '_');
                        return $carry . $key.':'.$mapsArea.'&';
                    }else {
                        $mapsArea = '';
                        return $carry . $key . '&';
                    }                    
                    
                });
                $area = rtrim($areabyPref, '&');                
                
            }else {
                //only pref or not;                
                if(count($prefsid) > 0) {
                    $preftable = new PrefData();
                    $prefs = $preftable->select('*')->whereIn('pref_code', $prefsid)->get()->pluck('name');                    
                    $area = $prefs->implode('&');                    
                }else {
                    $area = '';
                }                
            }
            $impossible_area = $item->getImpossibleAreas->reduce(function ($carry, $item) {
                return $item->name . '-' . $carry;
            });
            $item->genre = rtrim($genre, '-');
            $item->sticking_point = rtrim($sticking_point, '-');
            $item->area = $area;
            $item->impossible_area = rtrim($impossible_area, '-');
            return $item;
        });
        
        return $companies;
    }
}
