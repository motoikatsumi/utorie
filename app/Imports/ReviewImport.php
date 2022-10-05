<?php

namespace App\Imports;

use App\Models\Review;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class ReviewImport implements ToModel, WithHeadingRow, WithUpserts
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {        
        $review = Review::where('id', $row['id'])->first();
        $review2 = Review::where('company_id', $row['カンパニー名ID'])->where('nickname', $row['お名前・ニックネーム'])->first();
        if (!empty($review)) {
            $review->update(
                [
                    'company_id' => $row['カンパニー名ID'],
                    'nickname' => $row['お名前・ニックネーム'],
                    'age' => $row['年齢'],
                    'sex' => $row['性別'],
                    'posted_at' => $row['投稿日'],
                    'satisfaction' => $row['総合満足度'],
                    'price' => $row['価格'],
                    'performance' => $row['商品力・性能'],
                    'proposal_ability' => $row['設計・提案力'],
                    'maintenance_support' => $row['アフターケア・メンテナンスサポート'],
                    'review_title' => $row['口コミ件名'],
                    'review_content' => $row['口コミ内容'],
                    'free_choice' => $row['選択自由度'],
                    'review_show' => $row['公開設定']                
                ]                
            );
        } else {       
            if(!$review2) {
                $review = Review::create([
                    'company_id' => $row['カンパニー名ID'],
                    'nickname' => $row['お名前・ニックネーム'],
                    'age' => $row['年齢'],
                    'sex' => $row['性別'],
                    'posted_at' => $row['投稿日'],
                    'satisfaction' => $row['総合満足度'],
                    'price' => $row['価格'],
                    'performance' => $row['商品力・性能'],
                    'proposal_ability' => $row['設計・提案力'],
                    'maintenance_support' => $row['アフターケア・メンテナンスサポート'],
                    'review_title' => $row['口コミ件名'],
                    'review_content' => $row['口コミ内容'],
                    'free_choice' => $row['選択自由度'],
                    'review_show' => $row['公開設定']                
                ]);
            }
        }
        return $review;
    }
    public function uniqueBy()
    {
        return ['company_id', 'nickname'];
    }
}
