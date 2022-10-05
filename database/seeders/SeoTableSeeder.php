<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seos')->delete();
        
        \DB::table('seos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_name' => 'Top',
                'route' => '/',
                'page_status' => 1,
                'title' => 'utorie（ウトリエ）',
                'description' => NULL,
                'keywords' => NULL,
                'repeat_keyword_description' => '1',
                'created_at' => '2020-12-23 02:51:40',
                'updated_at' => '2020-12-23 02:51:40',
            ),
            1 => 
            array (
                'id' => 2,
                'page_name' => 'sitemap',
                'route' => '/sitemap',
                'page_status' => 1,
                'title' => 'サイトマップ｜utorie（ウトリエ）',
                'description' => 'utorie（ウトリエ）のサイトマップのページです。',
                'keywords' => NULL,
                'repeat_keyword_description' => '1',
                'created_at' => '2020-12-23 02:10:16',
                'updated_at' => '2020-12-23 02:10:16',
            ),
            2 => 
            array (
                'id' => 5,
                'page_name' => 'Contact',
                'route' => '/contact',
                'page_status' => 1,
                'title' => 'お問い合わせ｜utorie（ウトリエ）',
                'description' => 'utorie（ウトリエ）のお問い合わせページです。',
                'keywords' => NULL,
                'repeat_keyword_description' => '1',
                'created_at' => '2020-12-23 02:52:08',
                'updated_at' => '2020-12-23 02:52:08',
            ),
            3 => 
            array (
                'id' => 6,
                'page_name' => 'regulation',
                'route' => '/regulation',
                'page_status' => 1,
                'title' => '利用規約｜utorie（ウトリエ）',
                'description' => 'utorie（ウトリエ）の利用規約のページです。',
                'keywords' => NULL,
                'repeat_keyword_description' => '1',
                'created_at' => '2020-12-23 02:53:01',
                'updated_at' => '2020-12-23 02:53:01',
            ),
            4 => 
            array (
                'id' => 7,
                'page_name' => 'privacy-policy',
                'route' => '/privacy-policy',
                'page_status' => 1,
                'title' => 'プライバシーポリシー｜utorie（ウトリエ）',
                'description' => 'utorie（ウトリエ）のプライバシーポリシーのページです。',
                'keywords' => NULL,
                'repeat_keyword_description' => '1',
                'created_at' => '2020-12-23 02:53:23',
                'updated_at' => '2020-12-23 02:53:23',
            ),
            5 => 
            array (
                'id' => 8,
                'page_name' => 'catalog',
                'route' => '/catalog',
                'page_status' => 1,
                'title' => '一括資料請求｜utorie（ウトリエ）',
                'description' => 'utorie（ウトリエ）の一括資料請求ページです。',
                'keywords' => NULL,
                'repeat_keyword_description' => '1',
                'created_at' => '2020-12-23 02:53:48',
                'updated_at' => '2020-12-23 02:53:48',
            ),
            6 => 
            array (
                'id' => 9,
                'page_name' => '404',
                'route' => '/404',
                'page_status' => 1,
                'title' => 'お探しのページが見つかりませんでした｜utorie（ウトリエ）',
                'description' => NULL,
                'keywords' => NULL,
                'repeat_keyword_description' => '0',
                'created_at' => '2020-12-23 02:55:01',
                'updated_at' => '2020-12-23 02:55:01',
            ),
            7 => 
            array (
                'id' => 10,
                'page_name' => 'mansion',
                'route' => '/catalog/mansion',
                'page_status' => 1,
                'title' => '一括資料請求｜utorie（ウトリエ）',
                'description' => 'utorie（ウトリエ）の一括資料請求ページです。',
                'keywords' => NULL,
                'repeat_keyword_description' => '1',
                'created_at' => '2020-12-23 02:53:48',
                'updated_at' => '2020-12-23 02:53:48',
            ),
        ));
        
        
    }
}
