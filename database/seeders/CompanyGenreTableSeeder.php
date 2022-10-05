<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class CompanyGenreTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_genre')->delete();
        
        \DB::table('company_genre')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_id' => 2,
                'company_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'genre_id' => 3,
                'company_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'genre_id' => 2,
                'company_id' => 15,
            ),
            3 => 
            array (
                'id' => 4,
                'genre_id' => 2,
                'company_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'genre_id' => 1,
                'company_id' => 3,
            ),
            5 => 
            array (
                'id' => 7,
                'genre_id' => 3,
                'company_id' => 6,
            ),
            6 => 
            array (
                'id' => 8,
                'genre_id' => 2,
                'company_id' => 18,
            ),
            7 => 
            array (
                'id' => 9,
                'genre_id' => 1,
                'company_id' => 22,
            ),
            8 => 
            array (
                'id' => 10,
                'genre_id' => 3,
                'company_id' => 301,
            ),
            9 => 
            array (
                'id' => 11,
                'genre_id' => 2,
                'company_id' => 302,
            ),
            10 => 
            array (
                'id' => 14,
                'genre_id' => 1,
                'company_id' => 304,
            ),
            11 => 
            array (
                'id' => 15,
                'genre_id' => 2,
                'company_id' => 304,
            ),
            12 => 
            array (
                'id' => 16,
                'genre_id' => 2,
                'company_id' => 301,
            ),
            13 => 
            array (
                'id' => 17,
                'genre_id' => 2,
                'company_id' => 305,
            ),
            14 => 
            array (
                'id' => 18,
                'genre_id' => 3,
                'company_id' => 305,
            ),
            15 => 
            array (
                'id' => 21,
                'genre_id' => 1,
                'company_id' => 257,
            ),
            16 => 
            array (
                'id' => 22,
                'genre_id' => 1,
                'company_id' => 306,
            ),
            17 => 
            array (
                'id' => 23,
                'genre_id' => 4,
                'company_id' => 268,
            ),
            18 => 
            array (
                'id' => 24,
                'genre_id' => 4,
                'company_id' => 303,
            ),
            19 => 
            array (
                'id' => 25,
                'genre_id' => 1,
                'company_id' => 161,
            ),
            20 => 
            array (
                'id' => 26,
                'genre_id' => 1,
                'company_id' => 276,
            ),
            21 => 
            array (
                'id' => 27,
                'genre_id' => 4,
                'company_id' => 304,
            ),
            22 => 
            array (
                'id' => 28,
                'genre_id' => 4,
                'company_id' => 161,
            ),
            23 => 
            array (
                'id' => 29,
                'genre_id' => 4,
                'company_id' => 304,
            ),
            24 => 
            array (
                'id' => 30,
                'genre_id' => 4,
                'company_id' => 161,
            ),
            25 => 
            array (
                'id' => 31,
                'genre_id' => 4,
                'company_id' => 276,
            ),
            26 => 
            array (
                'id' => 32,
                'genre_id' => 4,
                'company_id' => 296,
            ),
            27 => 
            array (
                'id' => 33,
                'genre_id' => 4,
                'company_id' => 297,
            ),
            28 => 
            array (
                'id' => 34,
                'genre_id' => 4,
                'company_id' => 111,
            ),
            29 => 
            array (
                'id' => 35,
                'genre_id' => 4,
                'company_id' => 160,
            ),
            30 => 
            array (
                'id' => 36,
                'genre_id' => 4,
                'company_id' => 159,
            ),
            31 => 
            array (
                'id' => 37,
                'genre_id' => 4,
                'company_id' => 162,
            ),
            32 => 
            array (
                'id' => 38,
                'genre_id' => 4,
                'company_id' => 56,
            ),
            33 => 
            array (
                'id' => 39,
                'genre_id' => 4,
                'company_id' => 33,
            ),
            34 => 
            array (
                'id' => 40,
                'genre_id' => 4,
                'company_id' => 268,
            ),
            35 => 
            array (
                'id' => 41,
                'genre_id' => 4,
                'company_id' => 301,
            ),
            36 => 
            array (
                'id' => 42,
                'genre_id' => 4,
                'company_id' => 303,
            ),
            37 => 
            array (
                'id' => 43,
                'genre_id' => 4,
                'company_id' => 155,
            ),
            38 => 
            array (
                'id' => 44,
                'genre_id' => 4,
                'company_id' => 137,
            ),
            39 => 
            array (
                'id' => 45,
                'genre_id' => 4,
                'company_id' => 305,
            ),
            40 => 
            array (
                'id' => 46,
                'genre_id' => 4,
                'company_id' => 139,
            ),
            41 => 
            array (
                'id' => 47,
                'genre_id' => 4,
                'company_id' => 15,
            ),
            42 => 
            array (
                'id' => 48,
                'genre_id' => 4,
                'company_id' => 136,
            ),
            43 => 
            array (
                'id' => 49,
                'genre_id' => 4,
                'company_id' => 135,
            ),
            44 => 
            array (
                'id' => 50,
                'genre_id' => 4,
                'company_id' => 35,
            ),
            45 => 
            array (
                'id' => 51,
                'genre_id' => 4,
                'company_id' => 33,
            ),
            46 => 
            array (
                'id' => 52,
                'genre_id' => 4,
                'company_id' => 257,
            ),
        ));
        
        
    }
}