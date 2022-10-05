<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class CompanyPrefTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_pref')->delete();
        
        \DB::table('company_pref')->insert(array (
            0 => 
            array (
                'id' => 5,
                'pref_id' => 1,
                'company_id' => 0,
            ),
            1 => 
            array (
                'id' => 6,
                'pref_id' => 1,
                'company_id' => 303,
            ),
            2 => 
            array (
                'id' => 7,
                'pref_id' => 2,
                'company_id' => 303,
            ),
            3 => 
            array (
                'id' => 8,
                'pref_id' => 3,
                'company_id' => 303,
            ),
            4 => 
            array (
                'id' => 13,
                'pref_id' => 1,
                'company_id' => 305,
            ),
            5 => 
            array (
                'id' => 14,
                'pref_id' => 2,
                'company_id' => 305,
            ),
            6 => 
            array (
                'id' => 15,
                'pref_id' => 2,
                'company_id' => 306,
            ),
            7 => 
            array (
                'id' => 16,
                'pref_id' => 3,
                'company_id' => 306,
            ),
            8 => 
            array (
                'id' => 17,
                'pref_id' => 4,
                'company_id' => 306,
            ),
            9 => 
            array (
                'id' => 18,
                'pref_id' => 5,
                'company_id' => 306,
            ),
            10 => 
            array (
                'id' => 19,
                'pref_id' => 6,
                'company_id' => 306,
            ),
            11 => 
            array (
                'id' => 20,
                'pref_id' => 1,
                'company_id' => 257,
            ),
            12 => 
            array (
                'id' => 21,
                'pref_id' => 1,
                'company_id' => 301,
            ),
            13 => 
            array (
                'id' => 22,
                'pref_id' => 1,
                'company_id' => 268,
            ),
            14 => 
            array (
                'id' => 23,
                'pref_id' => 1,
                'company_id' => 304,
            ),
            15 => 
            array (
                'id' => 24,
                'pref_id' => 1,
                'company_id' => 161,
            ),
            16 => 
            array (
                'id' => 25,
                'pref_id' => 1,
                'company_id' => 276,
            ),
            17 => 
            array (
                'id' => 26,
                'pref_id' => 1,
                'company_id' => 296,
            ),
            18 => 
            array (
                'id' => 27,
                'pref_id' => 1,
                'company_id' => 297,
            ),
            19 => 
            array (
                'id' => 28,
                'pref_id' => 1,
                'company_id' => 111,
            ),
            20 => 
            array (
                'id' => 29,
                'pref_id' => 1,
                'company_id' => 160,
            ),
            21 => 
            array (
                'id' => 30,
                'pref_id' => 1,
                'company_id' => 159,
            ),
            22 => 
            array (
                'id' => 31,
                'pref_id' => 1,
                'company_id' => 162,
            ),
            23 => 
            array (
                'id' => 32,
                'pref_id' => 1,
                'company_id' => 56,
            ),
            24 => 
            array (
                'id' => 33,
                'pref_id' => 1,
                'company_id' => 33,
            ),
            25 => 
            array (
                'id' => 34,
                'pref_id' => 1,
                'company_id' => 56,
            ),
            26 => 
            array (
                'id' => 35,
                'pref_id' => 1,
                'company_id' => 33,
            ),
            27 => 
            array (
                'id' => 36,
                'pref_id' => 1,
                'company_id' => 35,
            ),
            28 => 
            array (
                'id' => 37,
                'pref_id' => 1,
                'company_id' => 135,
            ),
            29 => 
            array (
                'id' => 38,
                'pref_id' => 1,
                'company_id' => 136,
            ),
            30 => 
            array (
                'id' => 39,
                'pref_id' => 1,
                'company_id' => 137,
            ),
            31 => 
            array (
                'id' => 40,
                'pref_id' => 1,
                'company_id' => 155,
            ),
            32 => 
            array (
                'id' => 41,
                'pref_id' => 1,
                'company_id' => 139,
            ),
            33 => 
            array (
                'id' => 42,
                'pref_id' => 1,
                'company_id' => 155,
            ),
            34 => 
            array (
                'id' => 43,
                'pref_id' => 1,
                'company_id' => 165,
            ),
            35 => 
            array (
                'id' => 44,
                'pref_id' => 1,
                'company_id' => 185,
            ),
            36 => 
            array (
                'id' => 45,
                'pref_id' => 1,
                'company_id' => 115,
            ),
            37 => 
            array (
                'id' => 46,
                'pref_id' => 1,
                'company_id' => 116,
            ),
            38 => 
            array (
                'id' => 47,
                'pref_id' => 1,
                'company_id' => 15,
            ),
        ));
        
        
    }
}