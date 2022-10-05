<?php

namespace App\Exports;

use App\Models\Office;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OfficeExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'id', 'カンパニーID', '営業所・展示場名', '住所', 'アクセス', '営業時間', '定休日', 'pref_id', '電話番号',
        ];
    }

    public function collection()
    {
        return Office::select('id', 'company_id', 'name', 'address', 'access', 'hours', 'holiday', 'pref_id', 'tel')->get();
    }
}
