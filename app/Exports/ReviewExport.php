<?php

namespace App\Exports;

use App\Models\Review;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReviewExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'id', 'カンパニー名ID', 'お名前・ニックネーム', '年齢', '性別', '投稿日', '総合満足度', '価格', '商品力・性能', '設計・提案力', 'アフターケア・メンテナンスサポート', '口コミ件名', '口コミ内容', '選択自由度', '公開設定'
        ];
    }

    public function collection()
    {
        return Review::select('id', 'company_id', 'nickname', 'age', 'sex', 'posted_at', 'satisfaction', 'price', 'performance', 'proposal_ability', 'maintenance_support', 'review_title', 'review_content', 'free_choice', 'review_show')->get();
    }
}
