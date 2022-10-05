<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class AreaCompanyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('area_company')->delete();
        
        \DB::table('area_company')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area_id' => 91,
                'company_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'area_id' => 92,
                'company_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'area_id' => 73,
                'company_id' => 15,
            ),
            3 => 
            array (
                'id' => 4,
                'area_id' => 117,
                'company_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'area_id' => 119,
                'company_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'area_id' => 91,
                'company_id' => 3,
            ),
            6 => 
            array (
                'id' => 12,
                'area_id' => 5,
                'company_id' => 1,
            ),
            7 => 
            array (
                'id' => 13,
                'area_id' => 1,
                'company_id' => 1,
            ),
            8 => 
            array (
                'id' => 14,
                'area_id' => 5,
                'company_id' => 6,
            ),
            9 => 
            array (
                'id' => 15,
                'area_id' => 6,
                'company_id' => 6,
            ),
            10 => 
            array (
                'id' => 18,
                'area_id' => 3,
                'company_id' => 8,
            ),
            11 => 
            array (
                'id' => 21,
                'area_id' => 2,
                'company_id' => 18,
            ),
            12 => 
            array (
                'id' => 22,
                'area_id' => 3,
                'company_id' => 18,
            ),
            13 => 
            array (
                'id' => 23,
                'area_id' => 4,
                'company_id' => 18,
            ),
            14 => 
            array (
                'id' => 24,
                'area_id' => 8,
                'company_id' => 19,
            ),
            15 => 
            array (
                'id' => 26,
                'area_id' => 5,
                'company_id' => 22,
            ),
        ));
        
        
    }
}