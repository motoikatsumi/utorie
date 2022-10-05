<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_code' => 1,
                'name' => 'ハウスメーカー',
                'display_name' => 'ハウスメーカー',
                'search_text' => 'ハウスメーカー・工務店',
                'breadcrumb' => 'ハウスメーカー',
                'title_h2' => 'ハウスメーカー・工務店',
                'url_text' => 'ikkodate',
                'explain' => NULL,
                'html' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-12-28 14:44:16',
            ),
            1 => 
            array (
                'id' => 2,
                'genre_code' => 2,
                'name' => '不動産会社（土地）',
                'display_name' => '不動産会社（土地）',
                'search_text' => '土地',
                'breadcrumb' => '不動産会社（土地）',
                'title_h2' => '土地',
                'url_text' => 'tochi',
                'explain' => NULL,
                'html' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-12-28 14:44:16',
            ),
            2 => 
            array (
                'id' => 3,
                'genre_code' => 3,
                'name' => 'リフォーム会社',
                'display_name' => 'リフォーム会社',
                'search_text' => 'リフォーム・リノベーション',
                'breadcrumb' => 'リフォーム会社',
                'title_h2' => 'リフォーム・リノベーション',
                'url_text' => 'remodel',
                'explain' => NULL,
                'html' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-12-28 14:44:16',
            ),
            3 => 
            array (
                'id' => 4,
                'genre_code' => 4,
                'name' => '不動産投資会社',
                'display_name' => '不動産投資会社',
                'search_text' => '不動産投資会社',
                'breadcrumb' => '不動産投資会社',
                'title_h2' => '不動産投資会社',
                'url_text' => 'toushi',
                'explain' => NULL,
                'html' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-12-28 14:44:16',
            ),
        ));
        
        
    }
}