<?php

namespace App\Imports;

use App\Models\Office;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class OfficeImport implements ToModel, WithHeadingRow, WithUpserts
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {     
        $office = Office::where('id', $row['id'])->first();
        $office2 = Office::where('company_id', $row['カンパニーID'])->where('name', $row['営業所・展示場名'])->first();
        if (!empty($office)) {
            $office->update(
                [
                    'company_id' => $row['カンパニーID'],
                    'name' => $row['営業所・展示場名'],
                    'address' => $row['住所'],
                    'access' => $row['アクセス'],
                    'hours' => $row['営業時間'],
                    'holiday' => $row['定休日'],
                    'pref_id' => $row['pref_id'],
                    'tel' => $row['電話番号'],
                ]
            );
        } else {      
            if($office2) {                
            }else {
                $office = new Office([
                    'company_id' => $row['カンパニーID'],
                    'name' => $row['営業所・展示場名'],
                    'address' => $row['住所'],
                    'access' => $row['アクセス'],
                    'hours' => $row['営業時間'],
                    'holiday' => $row['定休日'],
                    'pref_id' => $row['pref_id'],
                    'tel' => $row['電話番号'],
                ]);
            }
        }
        return $office;
    }
    public function uniqueBy()
    {
        return ['id', 'company_id', 'name'];
    }
}
