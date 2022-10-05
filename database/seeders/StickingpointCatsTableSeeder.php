<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StickingpointCatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stickingpoint_cats')->delete();
        
        \DB::table('stickingpoint_cats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_code' => 1,
                'name' => '価格帯',
                'created_at' => '2020-12-22 22:14:46',
                'updated_at' => '2020-12-22 22:14:46',
            ),
            1 => 
            array (
                'id' => 2,
                'genre_code' => 1,
                'name' => 'テイスト',
                'created_at' => '2020-12-22 22:15:07',
                'updated_at' => '2020-12-22 22:15:07',
            ),
            2 => 
            array (
                'id' => 3,
                'genre_code' => 2,
                'name' => '用途',
                'created_at' => '2020-12-22 22:15:32',
                'updated_at' => '2020-12-22 22:15:32',
            ),
            3 => 
            array (
                'id' => 4,
                'genre_code' => 3,
                'name' => '建物の種類',
                'created_at' => '2020-12-22 22:15:32',
                'updated_at' => '2020-12-22 22:15:32',
            ),
            4 => 
            array (
                'id' => 5,
                'genre_code' => 3,
                'name' => '施工場所',
                'created_at' => '2020-12-22 22:16:43',
                'updated_at' => '2020-12-22 22:16:43',
            ),
            5 => 
            array (
                'id' => 6,
                'genre_code' => 4,
                'name' => '投資の種類',
                'created_at' => '2020-12-22 22:17:38',
                'updated_at' => '2020-12-22 22:17:38',
            ),
        ));
        
        
    }
}