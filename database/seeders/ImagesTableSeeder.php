<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'relation_id' => 1,
                'type' => 1,
                'image_path' => '/uploads/company/01-2021/16115835738010_Screenshot_5.png',
                'main' => 0,
                'created_at' => '2021-01-25 14:06:13',
                'updated_at' => '2021-01-25 14:06:13',
            ),
            1 => 
            array (
                'id' => 2,
                'relation_id' => 1,
                'type' => 1,
                'image_path' => '/uploads/company/01-2021/16115835739316_Screenshot_6.png',
                'main' => 0,
                'created_at' => '2021-01-25 14:06:13',
                'updated_at' => '2021-01-25 14:06:13',
            ),
            2 => 
            array (
                'id' => 3,
                'relation_id' => 1,
                'type' => 1,
                'image_path' => '/uploads/company/01-2021/16115835731527_shirowaki_day.png',
                'main' => 0,
                'created_at' => '2021-01-25 14:06:13',
                'updated_at' => '2021-01-25 14:06:13',
            ),
            3 => 
            array (
                'id' => 4,
                'relation_id' => 1,
                'type' => 1,
                'image_path' => '/uploads/company/01-2021/16115835734615_shirowaki_night.png',
                'main' => 0,
                'created_at' => '2021-01-25 14:06:13',
                'updated_at' => '2021-01-25 14:06:13',
            ),
            4 => 
            array (
                'id' => 5,
                'relation_id' => 1,
                'type' => 1,
                'image_path' => '/uploads/company/01-2021/16115835731852_sec06.png',
                'main' => 1,
                'created_at' => '2021-01-25 14:06:13',
                'updated_at' => '2021-01-25 14:06:13',
            ),
        ));
        
        
    }
}