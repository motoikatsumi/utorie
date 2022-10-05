<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offices')->delete();
        
        \DB::table('offices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_id' => 1,
                'name' => 'Office Name Hokkaido',
                'address' => 'Street Address in Hokkaido',
                'access' => 'ABC',
                'hours' => '18:90',
                'holiday' => 'Thứ 7 - Chủ Nhật',
                'tel' => '0129292829292',
                'created_at' => '2021-01-26 15:01:30',
                'updated_at' => '2021-01-26 15:01:30',
            ),
        ));
        
        
    }
}