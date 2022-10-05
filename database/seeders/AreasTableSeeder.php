<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pref' => 1,
                'name' => '札幌市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            1 => 
            array (
                'id' => 2,
                'pref' => 1,
                'name' => '札幌市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            2 => 
            array (
                'id' => 3,
                'pref' => 1,
                'name' => '札幌市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            3 => 
            array (
                'id' => 4,
                'pref' => 1,
                'name' => '札幌市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            4 => 
            array (
                'id' => 5,
                'pref' => 1,
                'name' => '札幌市白石区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            5 => 
            array (
                'id' => 6,
                'pref' => 1,
                'name' => '札幌市豊平区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            6 => 
            array (
                'id' => 7,
                'pref' => 1,
                'name' => '札幌市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            7 => 
            array (
                'id' => 8,
                'pref' => 1,
                'name' => '札幌市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            8 => 
            array (
                'id' => 9,
                'pref' => 1,
                'name' => '札幌市厚別区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            9 => 
            array (
                'id' => 10,
                'pref' => 1,
                'name' => '札幌市手稲区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            10 => 
            array (
                'id' => 11,
                'pref' => 1,
                'name' => '札幌市清田区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            11 => 
            array (
                'id' => 12,
                'pref' => 1,
                'name' => '函館市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            12 => 
            array (
                'id' => 13,
                'pref' => 1,
                'name' => '小樽市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            13 => 
            array (
                'id' => 14,
                'pref' => 1,
                'name' => '旭川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            14 => 
            array (
                'id' => 15,
                'pref' => 1,
                'name' => '室蘭市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            15 => 
            array (
                'id' => 16,
                'pref' => 1,
                'name' => '釧路市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            16 => 
            array (
                'id' => 17,
                'pref' => 1,
                'name' => '帯広市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            17 => 
            array (
                'id' => 18,
                'pref' => 1,
                'name' => '北見市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            18 => 
            array (
                'id' => 19,
                'pref' => 1,
                'name' => '夕張市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            19 => 
            array (
                'id' => 20,
                'pref' => 1,
                'name' => '岩見沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            20 => 
            array (
                'id' => 21,
                'pref' => 1,
                'name' => '網走市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            21 => 
            array (
                'id' => 22,
                'pref' => 1,
                'name' => '留萌市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            22 => 
            array (
                'id' => 23,
                'pref' => 1,
                'name' => '苫小牧市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            23 => 
            array (
                'id' => 24,
                'pref' => 1,
                'name' => '稚内市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            24 => 
            array (
                'id' => 25,
                'pref' => 1,
                'name' => '美唄市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            25 => 
            array (
                'id' => 26,
                'pref' => 1,
                'name' => '芦別市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            26 => 
            array (
                'id' => 27,
                'pref' => 1,
                'name' => '江別市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            27 => 
            array (
                'id' => 28,
                'pref' => 1,
                'name' => '赤平市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            28 => 
            array (
                'id' => 29,
                'pref' => 1,
                'name' => '紋別市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            29 => 
            array (
                'id' => 30,
                'pref' => 1,
                'name' => '士別市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            30 => 
            array (
                'id' => 31,
                'pref' => 1,
                'name' => '名寄市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            31 => 
            array (
                'id' => 32,
                'pref' => 1,
                'name' => '三笠市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            32 => 
            array (
                'id' => 33,
                'pref' => 1,
                'name' => '根室市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            33 => 
            array (
                'id' => 34,
                'pref' => 1,
                'name' => '千歳市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            34 => 
            array (
                'id' => 35,
                'pref' => 1,
                'name' => '滝川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            35 => 
            array (
                'id' => 36,
                'pref' => 1,
                'name' => '砂川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            36 => 
            array (
                'id' => 37,
                'pref' => 1,
                'name' => '歌志内市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            37 => 
            array (
                'id' => 38,
                'pref' => 1,
                'name' => '深川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            38 => 
            array (
                'id' => 39,
                'pref' => 1,
                'name' => '富良野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            39 => 
            array (
                'id' => 40,
                'pref' => 1,
                'name' => '登別市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            40 => 
            array (
                'id' => 41,
                'pref' => 1,
                'name' => '恵庭市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            41 => 
            array (
                'id' => 42,
                'pref' => 1,
                'name' => '伊達市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            42 => 
            array (
                'id' => 43,
                'pref' => 1,
                'name' => '北広島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            43 => 
            array (
                'id' => 44,
                'pref' => 1,
                'name' => '石狩市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            44 => 
            array (
                'id' => 45,
                'pref' => 1,
                'name' => '北斗市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            45 => 
            array (
                'id' => 46,
                'pref' => 1,
                'name' => '石狩郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            46 => 
            array (
                'id' => 47,
                'pref' => 1,
                'name' => '松前郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            47 => 
            array (
                'id' => 48,
                'pref' => 1,
                'name' => '上磯郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            48 => 
            array (
                'id' => 49,
                'pref' => 1,
                'name' => '亀田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            49 => 
            array (
                'id' => 50,
                'pref' => 1,
                'name' => '茅部郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            50 => 
            array (
                'id' => 51,
                'pref' => 1,
                'name' => '二海郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            51 => 
            array (
                'id' => 52,
                'pref' => 1,
                'name' => '山越郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            52 => 
            array (
                'id' => 53,
                'pref' => 1,
                'name' => '檜山郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            53 => 
            array (
                'id' => 54,
                'pref' => 1,
                'name' => '爾志郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            54 => 
            array (
                'id' => 55,
                'pref' => 1,
                'name' => '奥尻郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            55 => 
            array (
                'id' => 56,
                'pref' => 1,
                'name' => '瀬棚郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            56 => 
            array (
                'id' => 57,
                'pref' => 1,
                'name' => '久遠郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            57 => 
            array (
                'id' => 58,
                'pref' => 1,
                'name' => '島牧郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            58 => 
            array (
                'id' => 59,
                'pref' => 1,
                'name' => '寿都郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            59 => 
            array (
                'id' => 60,
                'pref' => 1,
                'name' => '磯谷郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            60 => 
            array (
                'id' => 61,
                'pref' => 1,
                'name' => '虻田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            61 => 
            array (
                'id' => 62,
                'pref' => 1,
                'name' => '岩内郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            62 => 
            array (
                'id' => 63,
                'pref' => 1,
                'name' => '古宇郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            63 => 
            array (
                'id' => 64,
                'pref' => 1,
                'name' => '積丹郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            64 => 
            array (
                'id' => 65,
                'pref' => 1,
                'name' => '古平郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            65 => 
            array (
                'id' => 66,
                'pref' => 1,
                'name' => '余市郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            66 => 
            array (
                'id' => 67,
                'pref' => 1,
                'name' => '空知郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            67 => 
            array (
                'id' => 68,
                'pref' => 1,
                'name' => '夕張郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            68 => 
            array (
                'id' => 69,
                'pref' => 1,
                'name' => '樺戸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            69 => 
            array (
                'id' => 70,
                'pref' => 1,
                'name' => '雨竜郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            70 => 
            array (
                'id' => 71,
                'pref' => 1,
                'name' => '上川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            71 => 
            array (
                'id' => 72,
                'pref' => 1,
                'name' => '空知郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            72 => 
            array (
                'id' => 73,
                'pref' => 1,
                'name' => '勇払郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            73 => 
            array (
                'id' => 74,
                'pref' => 1,
                'name' => '中川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            74 => 
            array (
                'id' => 75,
                'pref' => 1,
                'name' => '増毛郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            75 => 
            array (
                'id' => 76,
                'pref' => 1,
                'name' => '留萌郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            76 => 
            array (
                'id' => 77,
                'pref' => 1,
                'name' => '苫前郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            77 => 
            array (
                'id' => 78,
                'pref' => 1,
                'name' => '天塩郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            78 => 
            array (
                'id' => 79,
                'pref' => 1,
                'name' => '宗谷郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            79 => 
            array (
                'id' => 80,
                'pref' => 1,
                'name' => '枝幸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            80 => 
            array (
                'id' => 81,
                'pref' => 1,
                'name' => '礼文郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            81 => 
            array (
                'id' => 82,
                'pref' => 1,
                'name' => '利尻郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            82 => 
            array (
                'id' => 83,
                'pref' => 1,
                'name' => '網走郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            83 => 
            array (
                'id' => 84,
                'pref' => 1,
                'name' => '斜里郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            84 => 
            array (
                'id' => 85,
                'pref' => 1,
                'name' => '常呂郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            85 => 
            array (
                'id' => 86,
                'pref' => 1,
                'name' => '紋別郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            86 => 
            array (
                'id' => 87,
                'pref' => 1,
                'name' => '虻田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            87 => 
            array (
                'id' => 88,
                'pref' => 1,
                'name' => '有珠郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            88 => 
            array (
                'id' => 89,
                'pref' => 1,
                'name' => '白老郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            89 => 
            array (
                'id' => 90,
                'pref' => 1,
                'name' => '沙流郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            90 => 
            array (
                'id' => 91,
                'pref' => 1,
                'name' => '新冠郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            91 => 
            array (
                'id' => 92,
                'pref' => 1,
                'name' => '浦河郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            92 => 
            array (
                'id' => 93,
                'pref' => 1,
                'name' => '様似郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            93 => 
            array (
                'id' => 94,
                'pref' => 1,
                'name' => '幌泉郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            94 => 
            array (
                'id' => 95,
                'pref' => 1,
                'name' => '日高郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            95 => 
            array (
                'id' => 96,
                'pref' => 1,
                'name' => '河東郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            96 => 
            array (
                'id' => 97,
                'pref' => 1,
                'name' => '河西郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            97 => 
            array (
                'id' => 98,
                'pref' => 1,
                'name' => '広尾郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            98 => 
            array (
                'id' => 99,
                'pref' => 1,
                'name' => '足寄郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            99 => 
            array (
                'id' => 100,
                'pref' => 1,
                'name' => '十勝郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            100 => 
            array (
                'id' => 101,
                'pref' => 1,
                'name' => '釧路郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            101 => 
            array (
                'id' => 102,
                'pref' => 1,
                'name' => '厚岸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            102 => 
            array (
                'id' => 103,
                'pref' => 1,
                'name' => '阿寒郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            103 => 
            array (
                'id' => 104,
                'pref' => 1,
                'name' => '白糠郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            104 => 
            array (
                'id' => 105,
                'pref' => 1,
                'name' => '野付郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            105 => 
            array (
                'id' => 106,
                'pref' => 1,
                'name' => '標津郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            106 => 
            array (
                'id' => 107,
                'pref' => 1,
                'name' => '目梨郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            107 => 
            array (
                'id' => 108,
                'pref' => 2,
                'name' => '青森市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            108 => 
            array (
                'id' => 109,
                'pref' => 2,
                'name' => '弘前市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            109 => 
            array (
                'id' => 110,
                'pref' => 2,
                'name' => '八戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            110 => 
            array (
                'id' => 111,
                'pref' => 2,
                'name' => '黒石市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            111 => 
            array (
                'id' => 112,
                'pref' => 2,
                'name' => '五所川原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            112 => 
            array (
                'id' => 113,
                'pref' => 2,
                'name' => '十和田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            113 => 
            array (
                'id' => 114,
                'pref' => 2,
                'name' => '三沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            114 => 
            array (
                'id' => 115,
                'pref' => 2,
                'name' => 'むつ市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            115 => 
            array (
                'id' => 116,
                'pref' => 2,
                'name' => 'つがる市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            116 => 
            array (
                'id' => 117,
                'pref' => 2,
                'name' => '平川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            117 => 
            array (
                'id' => 118,
                'pref' => 2,
                'name' => '東津軽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            118 => 
            array (
                'id' => 119,
                'pref' => 2,
                'name' => '西津軽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            119 => 
            array (
                'id' => 120,
                'pref' => 2,
                'name' => '中津軽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            120 => 
            array (
                'id' => 121,
                'pref' => 2,
                'name' => '南津軽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            121 => 
            array (
                'id' => 122,
                'pref' => 2,
                'name' => '北津軽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            122 => 
            array (
                'id' => 123,
                'pref' => 2,
                'name' => '上北郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            123 => 
            array (
                'id' => 124,
                'pref' => 2,
                'name' => '下北郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            124 => 
            array (
                'id' => 125,
                'pref' => 2,
                'name' => '三戸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            125 => 
            array (
                'id' => 126,
                'pref' => 3,
                'name' => '盛岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            126 => 
            array (
                'id' => 127,
                'pref' => 3,
                'name' => '宮古市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            127 => 
            array (
                'id' => 128,
                'pref' => 3,
                'name' => '大船渡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            128 => 
            array (
                'id' => 129,
                'pref' => 3,
                'name' => '花巻市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            129 => 
            array (
                'id' => 130,
                'pref' => 3,
                'name' => '北上市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            130 => 
            array (
                'id' => 131,
                'pref' => 3,
                'name' => '久慈市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            131 => 
            array (
                'id' => 132,
                'pref' => 3,
                'name' => '遠野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            132 => 
            array (
                'id' => 133,
                'pref' => 3,
                'name' => '一関市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            133 => 
            array (
                'id' => 134,
                'pref' => 3,
                'name' => '陸前高田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            134 => 
            array (
                'id' => 135,
                'pref' => 3,
                'name' => '釜石市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            135 => 
            array (
                'id' => 136,
                'pref' => 3,
                'name' => '二戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            136 => 
            array (
                'id' => 137,
                'pref' => 3,
                'name' => '八幡平市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            137 => 
            array (
                'id' => 138,
                'pref' => 3,
                'name' => '奥州市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            138 => 
            array (
                'id' => 139,
                'pref' => 3,
                'name' => '滝沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            139 => 
            array (
                'id' => 140,
                'pref' => 3,
                'name' => '岩手郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            140 => 
            array (
                'id' => 141,
                'pref' => 3,
                'name' => '紫波郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            141 => 
            array (
                'id' => 142,
                'pref' => 3,
                'name' => '和賀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            142 => 
            array (
                'id' => 143,
                'pref' => 3,
                'name' => '胆沢郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            143 => 
            array (
                'id' => 144,
                'pref' => 3,
                'name' => '西磐井郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            144 => 
            array (
                'id' => 145,
                'pref' => 3,
                'name' => '東磐井郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            145 => 
            array (
                'id' => 146,
                'pref' => 3,
                'name' => '気仙郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            146 => 
            array (
                'id' => 147,
                'pref' => 3,
                'name' => '上閉伊郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            147 => 
            array (
                'id' => 148,
                'pref' => 3,
                'name' => '下閉伊郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            148 => 
            array (
                'id' => 149,
                'pref' => 3,
                'name' => '九戸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            149 => 
            array (
                'id' => 150,
                'pref' => 3,
                'name' => '二戸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            150 => 
            array (
                'id' => 151,
                'pref' => 4,
                'name' => '仙台市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            151 => 
            array (
                'id' => 152,
                'pref' => 4,
                'name' => '仙台市青葉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            152 => 
            array (
                'id' => 153,
                'pref' => 4,
                'name' => '仙台市宮城野区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            153 => 
            array (
                'id' => 154,
                'pref' => 4,
                'name' => '仙台市若林区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            154 => 
            array (
                'id' => 155,
                'pref' => 4,
                'name' => '仙台市太白区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            155 => 
            array (
                'id' => 156,
                'pref' => 4,
                'name' => '仙台市泉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            156 => 
            array (
                'id' => 157,
                'pref' => 4,
                'name' => '石巻市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            157 => 
            array (
                'id' => 158,
                'pref' => 4,
                'name' => '塩竈市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            158 => 
            array (
                'id' => 159,
                'pref' => 4,
                'name' => '気仙沼市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            159 => 
            array (
                'id' => 160,
                'pref' => 4,
                'name' => '白石市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            160 => 
            array (
                'id' => 161,
                'pref' => 4,
                'name' => '名取市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            161 => 
            array (
                'id' => 162,
                'pref' => 4,
                'name' => '角田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            162 => 
            array (
                'id' => 163,
                'pref' => 4,
                'name' => '多賀城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            163 => 
            array (
                'id' => 164,
                'pref' => 4,
                'name' => '岩沼市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            164 => 
            array (
                'id' => 165,
                'pref' => 4,
                'name' => '登米市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            165 => 
            array (
                'id' => 166,
                'pref' => 4,
                'name' => '栗原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            166 => 
            array (
                'id' => 167,
                'pref' => 4,
                'name' => '東松島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            167 => 
            array (
                'id' => 168,
                'pref' => 4,
                'name' => '大崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            168 => 
            array (
                'id' => 169,
                'pref' => 4,
                'name' => '富谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            169 => 
            array (
                'id' => 170,
                'pref' => 4,
                'name' => '刈田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            170 => 
            array (
                'id' => 171,
                'pref' => 4,
                'name' => '柴田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            171 => 
            array (
                'id' => 172,
                'pref' => 4,
                'name' => '伊具郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            172 => 
            array (
                'id' => 173,
                'pref' => 4,
                'name' => '亘理郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            173 => 
            array (
                'id' => 174,
                'pref' => 4,
                'name' => '宮城郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            174 => 
            array (
                'id' => 175,
                'pref' => 4,
                'name' => '黒川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            175 => 
            array (
                'id' => 176,
                'pref' => 4,
                'name' => '加美郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            176 => 
            array (
                'id' => 177,
                'pref' => 4,
                'name' => '遠田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            177 => 
            array (
                'id' => 178,
                'pref' => 4,
                'name' => '牡鹿郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            178 => 
            array (
                'id' => 179,
                'pref' => 4,
                'name' => '本吉郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            179 => 
            array (
                'id' => 180,
                'pref' => 5,
                'name' => '秋田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            180 => 
            array (
                'id' => 181,
                'pref' => 5,
                'name' => '能代市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            181 => 
            array (
                'id' => 182,
                'pref' => 5,
                'name' => '横手市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            182 => 
            array (
                'id' => 183,
                'pref' => 5,
                'name' => '大館市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            183 => 
            array (
                'id' => 184,
                'pref' => 5,
                'name' => '男鹿市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            184 => 
            array (
                'id' => 185,
                'pref' => 5,
                'name' => '湯沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            185 => 
            array (
                'id' => 186,
                'pref' => 5,
                'name' => '鹿角市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            186 => 
            array (
                'id' => 187,
                'pref' => 5,
                'name' => '由利本荘市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            187 => 
            array (
                'id' => 188,
                'pref' => 5,
                'name' => '潟上市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            188 => 
            array (
                'id' => 189,
                'pref' => 5,
                'name' => '大仙市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            189 => 
            array (
                'id' => 190,
                'pref' => 5,
                'name' => '北秋田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            190 => 
            array (
                'id' => 191,
                'pref' => 5,
                'name' => 'にかほ市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            191 => 
            array (
                'id' => 192,
                'pref' => 5,
                'name' => '仙北市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            192 => 
            array (
                'id' => 193,
                'pref' => 5,
                'name' => '鹿角郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            193 => 
            array (
                'id' => 194,
                'pref' => 5,
                'name' => '北秋田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            194 => 
            array (
                'id' => 195,
                'pref' => 5,
                'name' => '山本郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            195 => 
            array (
                'id' => 196,
                'pref' => 5,
                'name' => '南秋田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            196 => 
            array (
                'id' => 197,
                'pref' => 5,
                'name' => '仙北郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            197 => 
            array (
                'id' => 198,
                'pref' => 5,
                'name' => '雄勝郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            198 => 
            array (
                'id' => 199,
                'pref' => 6,
                'name' => '山形市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            199 => 
            array (
                'id' => 200,
                'pref' => 6,
                'name' => '米沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            200 => 
            array (
                'id' => 201,
                'pref' => 6,
                'name' => '鶴岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            201 => 
            array (
                'id' => 202,
                'pref' => 6,
                'name' => '酒田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            202 => 
            array (
                'id' => 203,
                'pref' => 6,
                'name' => '新庄市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            203 => 
            array (
                'id' => 204,
                'pref' => 6,
                'name' => '寒河江市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            204 => 
            array (
                'id' => 205,
                'pref' => 6,
                'name' => '上山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            205 => 
            array (
                'id' => 206,
                'pref' => 6,
                'name' => '村山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            206 => 
            array (
                'id' => 207,
                'pref' => 6,
                'name' => '長井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            207 => 
            array (
                'id' => 208,
                'pref' => 6,
                'name' => '天童市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            208 => 
            array (
                'id' => 209,
                'pref' => 6,
                'name' => '東根市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            209 => 
            array (
                'id' => 210,
                'pref' => 6,
                'name' => '尾花沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            210 => 
            array (
                'id' => 211,
                'pref' => 6,
                'name' => '南陽市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            211 => 
            array (
                'id' => 212,
                'pref' => 6,
                'name' => '東村山郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            212 => 
            array (
                'id' => 213,
                'pref' => 6,
                'name' => '西村山郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            213 => 
            array (
                'id' => 214,
                'pref' => 6,
                'name' => '北村山郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            214 => 
            array (
                'id' => 215,
                'pref' => 6,
                'name' => '最上郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            215 => 
            array (
                'id' => 216,
                'pref' => 6,
                'name' => '東置賜郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            216 => 
            array (
                'id' => 217,
                'pref' => 6,
                'name' => '西置賜郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            217 => 
            array (
                'id' => 218,
                'pref' => 6,
                'name' => '東田川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            218 => 
            array (
                'id' => 219,
                'pref' => 6,
                'name' => '飽海郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            219 => 
            array (
                'id' => 220,
                'pref' => 7,
                'name' => '福島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            220 => 
            array (
                'id' => 221,
                'pref' => 7,
                'name' => '会津若松市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            221 => 
            array (
                'id' => 222,
                'pref' => 7,
                'name' => '郡山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            222 => 
            array (
                'id' => 223,
                'pref' => 7,
                'name' => 'いわき市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            223 => 
            array (
                'id' => 224,
                'pref' => 7,
                'name' => '白河市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            224 => 
            array (
                'id' => 225,
                'pref' => 7,
                'name' => '須賀川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            225 => 
            array (
                'id' => 226,
                'pref' => 7,
                'name' => '喜多方市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            226 => 
            array (
                'id' => 227,
                'pref' => 7,
                'name' => '相馬市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            227 => 
            array (
                'id' => 228,
                'pref' => 7,
                'name' => '二本松市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            228 => 
            array (
                'id' => 229,
                'pref' => 7,
                'name' => '田村市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            229 => 
            array (
                'id' => 230,
                'pref' => 7,
                'name' => '南相馬市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            230 => 
            array (
                'id' => 231,
                'pref' => 7,
                'name' => '伊達市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            231 => 
            array (
                'id' => 232,
                'pref' => 7,
                'name' => '本宮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            232 => 
            array (
                'id' => 233,
                'pref' => 7,
                'name' => '伊達郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            233 => 
            array (
                'id' => 234,
                'pref' => 7,
                'name' => '安達郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            234 => 
            array (
                'id' => 235,
                'pref' => 7,
                'name' => '岩瀬郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            235 => 
            array (
                'id' => 236,
                'pref' => 7,
                'name' => '南会津郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            236 => 
            array (
                'id' => 237,
                'pref' => 7,
                'name' => '耶麻郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            237 => 
            array (
                'id' => 238,
                'pref' => 7,
                'name' => '河沼郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            238 => 
            array (
                'id' => 239,
                'pref' => 7,
                'name' => '大沼郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            239 => 
            array (
                'id' => 240,
                'pref' => 7,
                'name' => '西白河郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            240 => 
            array (
                'id' => 241,
                'pref' => 7,
                'name' => '東白川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            241 => 
            array (
                'id' => 242,
                'pref' => 7,
                'name' => '石川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            242 => 
            array (
                'id' => 243,
                'pref' => 7,
                'name' => '田村郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            243 => 
            array (
                'id' => 244,
                'pref' => 7,
                'name' => '双葉郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            244 => 
            array (
                'id' => 245,
                'pref' => 7,
                'name' => '相馬郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            245 => 
            array (
                'id' => 246,
                'pref' => 8,
                'name' => '水戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            246 => 
            array (
                'id' => 247,
                'pref' => 8,
                'name' => '日立市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            247 => 
            array (
                'id' => 248,
                'pref' => 8,
                'name' => '土浦市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            248 => 
            array (
                'id' => 249,
                'pref' => 8,
                'name' => '古河市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            249 => 
            array (
                'id' => 250,
                'pref' => 8,
                'name' => '石岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            250 => 
            array (
                'id' => 251,
                'pref' => 8,
                'name' => '結城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            251 => 
            array (
                'id' => 252,
                'pref' => 8,
                'name' => '龍ケ崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            252 => 
            array (
                'id' => 253,
                'pref' => 8,
                'name' => '下妻市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            253 => 
            array (
                'id' => 254,
                'pref' => 8,
                'name' => '常総市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            254 => 
            array (
                'id' => 255,
                'pref' => 8,
                'name' => '常陸太田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            255 => 
            array (
                'id' => 256,
                'pref' => 8,
                'name' => '高萩市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            256 => 
            array (
                'id' => 257,
                'pref' => 8,
                'name' => '北茨城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            257 => 
            array (
                'id' => 258,
                'pref' => 8,
                'name' => '笠間市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            258 => 
            array (
                'id' => 259,
                'pref' => 8,
                'name' => '取手市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            259 => 
            array (
                'id' => 260,
                'pref' => 8,
                'name' => '牛久市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            260 => 
            array (
                'id' => 261,
                'pref' => 8,
                'name' => 'つくば市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            261 => 
            array (
                'id' => 262,
                'pref' => 8,
                'name' => 'ひたちなか市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            262 => 
            array (
                'id' => 263,
                'pref' => 8,
                'name' => '鹿嶋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            263 => 
            array (
                'id' => 264,
                'pref' => 8,
                'name' => '潮来市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            264 => 
            array (
                'id' => 265,
                'pref' => 8,
                'name' => '守谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            265 => 
            array (
                'id' => 266,
                'pref' => 8,
                'name' => '常陸大宮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            266 => 
            array (
                'id' => 267,
                'pref' => 8,
                'name' => '那珂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            267 => 
            array (
                'id' => 268,
                'pref' => 8,
                'name' => '筑西市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            268 => 
            array (
                'id' => 269,
                'pref' => 8,
                'name' => '坂東市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            269 => 
            array (
                'id' => 270,
                'pref' => 8,
                'name' => '稲敷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            270 => 
            array (
                'id' => 271,
                'pref' => 8,
                'name' => 'かすみがうら市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            271 => 
            array (
                'id' => 272,
                'pref' => 8,
                'name' => '桜川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            272 => 
            array (
                'id' => 273,
                'pref' => 8,
                'name' => '神栖市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            273 => 
            array (
                'id' => 274,
                'pref' => 8,
                'name' => '行方市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            274 => 
            array (
                'id' => 275,
                'pref' => 8,
                'name' => '鉾田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            275 => 
            array (
                'id' => 276,
                'pref' => 8,
                'name' => 'つくばみらい市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            276 => 
            array (
                'id' => 277,
                'pref' => 8,
                'name' => '小美玉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            277 => 
            array (
                'id' => 278,
                'pref' => 8,
                'name' => '東茨城郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            278 => 
            array (
                'id' => 279,
                'pref' => 8,
                'name' => '那珂郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            279 => 
            array (
                'id' => 280,
                'pref' => 8,
                'name' => '久慈郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            280 => 
            array (
                'id' => 281,
                'pref' => 8,
                'name' => '稲敷郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            281 => 
            array (
                'id' => 282,
                'pref' => 8,
                'name' => '結城郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            282 => 
            array (
                'id' => 283,
                'pref' => 8,
                'name' => '猿島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            283 => 
            array (
                'id' => 284,
                'pref' => 8,
                'name' => '北相馬郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            284 => 
            array (
                'id' => 285,
                'pref' => 9,
                'name' => '宇都宮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            285 => 
            array (
                'id' => 286,
                'pref' => 9,
                'name' => '足利市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            286 => 
            array (
                'id' => 287,
                'pref' => 9,
                'name' => '栃木市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            287 => 
            array (
                'id' => 288,
                'pref' => 9,
                'name' => '佐野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            288 => 
            array (
                'id' => 289,
                'pref' => 9,
                'name' => '鹿沼市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            289 => 
            array (
                'id' => 290,
                'pref' => 9,
                'name' => '日光市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            290 => 
            array (
                'id' => 291,
                'pref' => 9,
                'name' => '小山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            291 => 
            array (
                'id' => 292,
                'pref' => 9,
                'name' => '真岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            292 => 
            array (
                'id' => 293,
                'pref' => 9,
                'name' => '大田原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            293 => 
            array (
                'id' => 294,
                'pref' => 9,
                'name' => '矢板市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            294 => 
            array (
                'id' => 295,
                'pref' => 9,
                'name' => '那須塩原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            295 => 
            array (
                'id' => 296,
                'pref' => 9,
                'name' => 'さくら市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            296 => 
            array (
                'id' => 297,
                'pref' => 9,
                'name' => '那須烏山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            297 => 
            array (
                'id' => 298,
                'pref' => 9,
                'name' => '下野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            298 => 
            array (
                'id' => 299,
                'pref' => 9,
                'name' => '河内郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            299 => 
            array (
                'id' => 300,
                'pref' => 9,
                'name' => '上都賀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            300 => 
            array (
                'id' => 301,
                'pref' => 9,
                'name' => '芳賀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            301 => 
            array (
                'id' => 302,
                'pref' => 9,
                'name' => '下都賀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            302 => 
            array (
                'id' => 303,
                'pref' => 9,
                'name' => '塩谷郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            303 => 
            array (
                'id' => 304,
                'pref' => 9,
                'name' => '那須郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            304 => 
            array (
                'id' => 305,
                'pref' => 10,
                'name' => '前橋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            305 => 
            array (
                'id' => 306,
                'pref' => 10,
                'name' => '高崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            306 => 
            array (
                'id' => 307,
                'pref' => 10,
                'name' => '桐生市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            307 => 
            array (
                'id' => 308,
                'pref' => 10,
                'name' => '伊勢崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            308 => 
            array (
                'id' => 309,
                'pref' => 10,
                'name' => '太田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            309 => 
            array (
                'id' => 310,
                'pref' => 10,
                'name' => '沼田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            310 => 
            array (
                'id' => 311,
                'pref' => 10,
                'name' => '館林市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            311 => 
            array (
                'id' => 312,
                'pref' => 10,
                'name' => '渋川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            312 => 
            array (
                'id' => 313,
                'pref' => 10,
                'name' => '藤岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            313 => 
            array (
                'id' => 314,
                'pref' => 10,
                'name' => '富岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            314 => 
            array (
                'id' => 315,
                'pref' => 10,
                'name' => '安中市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            315 => 
            array (
                'id' => 316,
                'pref' => 10,
                'name' => 'みどり市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            316 => 
            array (
                'id' => 317,
                'pref' => 10,
                'name' => '北群馬郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            317 => 
            array (
                'id' => 318,
                'pref' => 10,
                'name' => '多野郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            318 => 
            array (
                'id' => 319,
                'pref' => 10,
                'name' => '甘楽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            319 => 
            array (
                'id' => 320,
                'pref' => 10,
                'name' => '吾妻郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            320 => 
            array (
                'id' => 321,
                'pref' => 10,
                'name' => '利根郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            321 => 
            array (
                'id' => 322,
                'pref' => 10,
                'name' => '佐波郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            322 => 
            array (
                'id' => 323,
                'pref' => 10,
                'name' => '邑楽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            323 => 
            array (
                'id' => 324,
                'pref' => 11,
                'name' => 'さいたま市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            324 => 
            array (
                'id' => 325,
                'pref' => 11,
                'name' => 'さいたま市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            325 => 
            array (
                'id' => 326,
                'pref' => 11,
                'name' => 'さいたま市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            326 => 
            array (
                'id' => 327,
                'pref' => 11,
                'name' => 'さいたま市大宮区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            327 => 
            array (
                'id' => 328,
                'pref' => 11,
                'name' => 'さいたま市見沼区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            328 => 
            array (
                'id' => 329,
                'pref' => 11,
                'name' => 'さいたま市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            329 => 
            array (
                'id' => 330,
                'pref' => 11,
                'name' => 'さいたま市桜区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            330 => 
            array (
                'id' => 331,
                'pref' => 11,
                'name' => 'さいたま市浦和区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            331 => 
            array (
                'id' => 332,
                'pref' => 11,
                'name' => 'さいたま市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            332 => 
            array (
                'id' => 333,
                'pref' => 11,
                'name' => 'さいたま市緑区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            333 => 
            array (
                'id' => 334,
                'pref' => 11,
                'name' => 'さいたま市岩槻区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            334 => 
            array (
                'id' => 335,
                'pref' => 11,
                'name' => '川越市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            335 => 
            array (
                'id' => 336,
                'pref' => 11,
                'name' => '熊谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            336 => 
            array (
                'id' => 337,
                'pref' => 11,
                'name' => '川口市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            337 => 
            array (
                'id' => 338,
                'pref' => 11,
                'name' => '行田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            338 => 
            array (
                'id' => 339,
                'pref' => 11,
                'name' => '秩父市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            339 => 
            array (
                'id' => 340,
                'pref' => 11,
                'name' => '所沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            340 => 
            array (
                'id' => 341,
                'pref' => 11,
                'name' => '飯能市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            341 => 
            array (
                'id' => 342,
                'pref' => 11,
                'name' => '加須市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            342 => 
            array (
                'id' => 343,
                'pref' => 11,
                'name' => '本庄市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            343 => 
            array (
                'id' => 344,
                'pref' => 11,
                'name' => '東松山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            344 => 
            array (
                'id' => 345,
                'pref' => 11,
                'name' => '春日部市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            345 => 
            array (
                'id' => 346,
                'pref' => 11,
                'name' => '狭山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            346 => 
            array (
                'id' => 347,
                'pref' => 11,
                'name' => '羽生市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            347 => 
            array (
                'id' => 348,
                'pref' => 11,
                'name' => '鴻巣市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            348 => 
            array (
                'id' => 349,
                'pref' => 11,
                'name' => '深谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            349 => 
            array (
                'id' => 350,
                'pref' => 11,
                'name' => '上尾市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            350 => 
            array (
                'id' => 351,
                'pref' => 11,
                'name' => '草加市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            351 => 
            array (
                'id' => 352,
                'pref' => 11,
                'name' => '越谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            352 => 
            array (
                'id' => 353,
                'pref' => 11,
                'name' => '蕨市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            353 => 
            array (
                'id' => 354,
                'pref' => 11,
                'name' => '戸田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            354 => 
            array (
                'id' => 355,
                'pref' => 11,
                'name' => '入間市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            355 => 
            array (
                'id' => 356,
                'pref' => 11,
                'name' => '鳩ヶ谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            356 => 
            array (
                'id' => 357,
                'pref' => 11,
                'name' => '朝霞市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            357 => 
            array (
                'id' => 358,
                'pref' => 11,
                'name' => '志木市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            358 => 
            array (
                'id' => 359,
                'pref' => 11,
                'name' => '和光市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            359 => 
            array (
                'id' => 360,
                'pref' => 11,
                'name' => '新座市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            360 => 
            array (
                'id' => 361,
                'pref' => 11,
                'name' => '桶川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            361 => 
            array (
                'id' => 362,
                'pref' => 11,
                'name' => '久喜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            362 => 
            array (
                'id' => 363,
                'pref' => 11,
                'name' => '北本市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            363 => 
            array (
                'id' => 364,
                'pref' => 11,
                'name' => '八潮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            364 => 
            array (
                'id' => 365,
                'pref' => 11,
                'name' => '富士見市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            365 => 
            array (
                'id' => 366,
                'pref' => 11,
                'name' => '三郷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            366 => 
            array (
                'id' => 367,
                'pref' => 11,
                'name' => '蓮田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            367 => 
            array (
                'id' => 368,
                'pref' => 11,
                'name' => '坂戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            368 => 
            array (
                'id' => 369,
                'pref' => 11,
                'name' => '幸手市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            369 => 
            array (
                'id' => 370,
                'pref' => 11,
                'name' => '鶴ヶ島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            370 => 
            array (
                'id' => 371,
                'pref' => 11,
                'name' => '日高市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            371 => 
            array (
                'id' => 372,
                'pref' => 11,
                'name' => '吉川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            372 => 
            array (
                'id' => 373,
                'pref' => 11,
                'name' => 'ふじみ野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            373 => 
            array (
                'id' => 374,
                'pref' => 11,
                'name' => '白岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            374 => 
            array (
                'id' => 375,
                'pref' => 11,
                'name' => '北足立郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            375 => 
            array (
                'id' => 376,
                'pref' => 11,
                'name' => '入間郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            376 => 
            array (
                'id' => 377,
                'pref' => 11,
                'name' => '比企郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            377 => 
            array (
                'id' => 378,
                'pref' => 11,
                'name' => '秩父郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            378 => 
            array (
                'id' => 379,
                'pref' => 11,
                'name' => '児玉郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            379 => 
            array (
                'id' => 380,
                'pref' => 11,
                'name' => '大里郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            380 => 
            array (
                'id' => 381,
                'pref' => 11,
                'name' => '北埼玉郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            381 => 
            array (
                'id' => 382,
                'pref' => 11,
                'name' => '南埼玉郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            382 => 
            array (
                'id' => 383,
                'pref' => 11,
                'name' => '北葛飾郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            383 => 
            array (
                'id' => 384,
                'pref' => 12,
                'name' => '千葉市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            384 => 
            array (
                'id' => 385,
                'pref' => 12,
                'name' => '千葉市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            385 => 
            array (
                'id' => 386,
                'pref' => 12,
                'name' => '千葉市花見川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            386 => 
            array (
                'id' => 387,
                'pref' => 12,
                'name' => '千葉市稲毛区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            387 => 
            array (
                'id' => 388,
                'pref' => 12,
                'name' => '千葉市若葉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            388 => 
            array (
                'id' => 389,
                'pref' => 12,
                'name' => '千葉市緑区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            389 => 
            array (
                'id' => 390,
                'pref' => 12,
                'name' => '千葉市美浜区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            390 => 
            array (
                'id' => 391,
                'pref' => 12,
                'name' => '銚子市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            391 => 
            array (
                'id' => 392,
                'pref' => 12,
                'name' => '市川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            392 => 
            array (
                'id' => 393,
                'pref' => 12,
                'name' => '船橋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            393 => 
            array (
                'id' => 394,
                'pref' => 12,
                'name' => '館山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            394 => 
            array (
                'id' => 395,
                'pref' => 12,
                'name' => '木更津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            395 => 
            array (
                'id' => 396,
                'pref' => 12,
                'name' => '松戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            396 => 
            array (
                'id' => 397,
                'pref' => 12,
                'name' => '野田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            397 => 
            array (
                'id' => 398,
                'pref' => 12,
                'name' => '茂原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            398 => 
            array (
                'id' => 399,
                'pref' => 12,
                'name' => '成田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            399 => 
            array (
                'id' => 400,
                'pref' => 12,
                'name' => '佐倉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            400 => 
            array (
                'id' => 401,
                'pref' => 12,
                'name' => '東金市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            401 => 
            array (
                'id' => 402,
                'pref' => 12,
                'name' => '旭市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            402 => 
            array (
                'id' => 403,
                'pref' => 12,
                'name' => '習志野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            403 => 
            array (
                'id' => 404,
                'pref' => 12,
                'name' => '柏市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            404 => 
            array (
                'id' => 405,
                'pref' => 12,
                'name' => '勝浦市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            405 => 
            array (
                'id' => 406,
                'pref' => 12,
                'name' => '市原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            406 => 
            array (
                'id' => 407,
                'pref' => 12,
                'name' => '流山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            407 => 
            array (
                'id' => 408,
                'pref' => 12,
                'name' => '八千代市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            408 => 
            array (
                'id' => 409,
                'pref' => 12,
                'name' => '我孫子市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            409 => 
            array (
                'id' => 410,
                'pref' => 12,
                'name' => '鴨川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            410 => 
            array (
                'id' => 411,
                'pref' => 12,
                'name' => '鎌ケ谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            411 => 
            array (
                'id' => 412,
                'pref' => 12,
                'name' => '君津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            412 => 
            array (
                'id' => 413,
                'pref' => 12,
                'name' => '富津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            413 => 
            array (
                'id' => 414,
                'pref' => 12,
                'name' => '浦安市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            414 => 
            array (
                'id' => 415,
                'pref' => 12,
                'name' => '四街道市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            415 => 
            array (
                'id' => 416,
                'pref' => 12,
                'name' => '袖ケ浦市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            416 => 
            array (
                'id' => 417,
                'pref' => 12,
                'name' => '八街市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            417 => 
            array (
                'id' => 418,
                'pref' => 12,
                'name' => '印西市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            418 => 
            array (
                'id' => 419,
                'pref' => 12,
                'name' => '白井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            419 => 
            array (
                'id' => 420,
                'pref' => 12,
                'name' => '富里市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            420 => 
            array (
                'id' => 421,
                'pref' => 12,
                'name' => '南房総市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            421 => 
            array (
                'id' => 422,
                'pref' => 12,
                'name' => '匝瑳市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            422 => 
            array (
                'id' => 423,
                'pref' => 12,
                'name' => '香取市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            423 => 
            array (
                'id' => 424,
                'pref' => 12,
                'name' => '山武市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            424 => 
            array (
                'id' => 425,
                'pref' => 12,
                'name' => 'いすみ市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            425 => 
            array (
                'id' => 426,
                'pref' => 12,
                'name' => '大網白里市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            426 => 
            array (
                'id' => 427,
                'pref' => 12,
                'name' => '印旛郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            427 => 
            array (
                'id' => 428,
                'pref' => 12,
                'name' => '香取郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            428 => 
            array (
                'id' => 429,
                'pref' => 12,
                'name' => '山武郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            429 => 
            array (
                'id' => 430,
                'pref' => 12,
                'name' => '長生郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            430 => 
            array (
                'id' => 431,
                'pref' => 12,
                'name' => '夷隅郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            431 => 
            array (
                'id' => 432,
                'pref' => 12,
                'name' => '安房郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            432 => 
            array (
                'id' => 433,
                'pref' => 13,
                'name' => '千代田区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            433 => 
            array (
                'id' => 434,
                'pref' => 13,
                'name' => '中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            434 => 
            array (
                'id' => 435,
                'pref' => 13,
                'name' => '港区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            435 => 
            array (
                'id' => 436,
                'pref' => 13,
                'name' => '新宿区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            436 => 
            array (
                'id' => 437,
                'pref' => 13,
                'name' => '文京区',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            437 => 
            array (
                'id' => 438,
                'pref' => 13,
                'name' => '台東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            438 => 
            array (
                'id' => 439,
                'pref' => 13,
                'name' => '墨田区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            439 => 
            array (
                'id' => 440,
                'pref' => 13,
                'name' => '江東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            440 => 
            array (
                'id' => 441,
                'pref' => 13,
                'name' => '品川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            441 => 
            array (
                'id' => 442,
                'pref' => 13,
                'name' => '目黒区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            442 => 
            array (
                'id' => 443,
                'pref' => 13,
                'name' => '大田区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            443 => 
            array (
                'id' => 444,
                'pref' => 13,
                'name' => '世田谷区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            444 => 
            array (
                'id' => 445,
                'pref' => 13,
                'name' => '渋谷区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            445 => 
            array (
                'id' => 446,
                'pref' => 13,
                'name' => '中野区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            446 => 
            array (
                'id' => 447,
                'pref' => 13,
                'name' => '杉並区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            447 => 
            array (
                'id' => 448,
                'pref' => 13,
                'name' => '豊島区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            448 => 
            array (
                'id' => 449,
                'pref' => 13,
                'name' => '北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            449 => 
            array (
                'id' => 450,
                'pref' => 13,
                'name' => '荒川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            450 => 
            array (
                'id' => 451,
                'pref' => 13,
                'name' => '板橋区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            451 => 
            array (
                'id' => 452,
                'pref' => 13,
                'name' => '練馬区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            452 => 
            array (
                'id' => 453,
                'pref' => 13,
                'name' => '足立区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            453 => 
            array (
                'id' => 454,
                'pref' => 13,
                'name' => '葛飾区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            454 => 
            array (
                'id' => 455,
                'pref' => 13,
                'name' => '江戸川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            455 => 
            array (
                'id' => 456,
                'pref' => 13,
                'name' => '八王子市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            456 => 
            array (
                'id' => 457,
                'pref' => 13,
                'name' => '立川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            457 => 
            array (
                'id' => 458,
                'pref' => 13,
                'name' => '武蔵野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            458 => 
            array (
                'id' => 459,
                'pref' => 13,
                'name' => '三鷹市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            459 => 
            array (
                'id' => 460,
                'pref' => 13,
                'name' => '青梅市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            460 => 
            array (
                'id' => 461,
                'pref' => 13,
                'name' => '府中市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            461 => 
            array (
                'id' => 462,
                'pref' => 13,
                'name' => '昭島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            462 => 
            array (
                'id' => 463,
                'pref' => 13,
                'name' => '調布市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            463 => 
            array (
                'id' => 464,
                'pref' => 13,
                'name' => '町田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            464 => 
            array (
                'id' => 465,
                'pref' => 13,
                'name' => '小金井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            465 => 
            array (
                'id' => 466,
                'pref' => 13,
                'name' => '小平市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            466 => 
            array (
                'id' => 467,
                'pref' => 13,
                'name' => '日野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            467 => 
            array (
                'id' => 468,
                'pref' => 13,
                'name' => '東村山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            468 => 
            array (
                'id' => 469,
                'pref' => 13,
                'name' => '国分寺市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            469 => 
            array (
                'id' => 470,
                'pref' => 13,
                'name' => '国立市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            470 => 
            array (
                'id' => 471,
                'pref' => 13,
                'name' => '福生市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            471 => 
            array (
                'id' => 472,
                'pref' => 13,
                'name' => '狛江市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            472 => 
            array (
                'id' => 473,
                'pref' => 13,
                'name' => '東大和市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            473 => 
            array (
                'id' => 474,
                'pref' => 13,
                'name' => '清瀬市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            474 => 
            array (
                'id' => 475,
                'pref' => 13,
                'name' => '東久留米市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            475 => 
            array (
                'id' => 476,
                'pref' => 13,
                'name' => '武蔵村山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            476 => 
            array (
                'id' => 477,
                'pref' => 13,
                'name' => '多摩市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            477 => 
            array (
                'id' => 478,
                'pref' => 13,
                'name' => '稲城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            478 => 
            array (
                'id' => 479,
                'pref' => 13,
                'name' => '羽村市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            479 => 
            array (
                'id' => 480,
                'pref' => 13,
                'name' => 'あきる野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            480 => 
            array (
                'id' => 481,
                'pref' => 13,
                'name' => '西東京市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            481 => 
            array (
                'id' => 482,
                'pref' => 13,
                'name' => '西多摩郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            482 => 
            array (
                'id' => 483,
                'pref' => 13,
                'name' => '大島町',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            483 => 
            array (
                'id' => 484,
                'pref' => 13,
                'name' => '利島村',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            484 => 
            array (
                'id' => 485,
                'pref' => 13,
                'name' => '新島村',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            485 => 
            array (
                'id' => 486,
                'pref' => 13,
                'name' => '神津島村',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            486 => 
            array (
                'id' => 487,
                'pref' => 13,
                'name' => '三宅島三宅村',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            487 => 
            array (
                'id' => 488,
                'pref' => 13,
                'name' => '御蔵島村',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            488 => 
            array (
                'id' => 489,
                'pref' => 13,
                'name' => '八丈島八丈町',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            489 => 
            array (
                'id' => 490,
                'pref' => 13,
                'name' => '青ヶ島村',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            490 => 
            array (
                'id' => 491,
                'pref' => 13,
                'name' => '小笠原村',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            491 => 
            array (
                'id' => 492,
                'pref' => 14,
                'name' => '横浜市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            492 => 
            array (
                'id' => 493,
                'pref' => 14,
                'name' => '横浜市鶴見区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            493 => 
            array (
                'id' => 494,
                'pref' => 14,
                'name' => '横浜市神奈川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            494 => 
            array (
                'id' => 495,
                'pref' => 14,
                'name' => '横浜市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            495 => 
            array (
                'id' => 496,
                'pref' => 14,
                'name' => '横浜市中区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            496 => 
            array (
                'id' => 497,
                'pref' => 14,
                'name' => '横浜市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            497 => 
            array (
                'id' => 498,
                'pref' => 14,
                'name' => '横浜市保土ケ谷区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            498 => 
            array (
                'id' => 499,
                'pref' => 14,
                'name' => '横浜市磯子区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            499 => 
            array (
                'id' => 500,
                'pref' => 14,
                'name' => '横浜市金沢区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 501,
                'pref' => 14,
                'name' => '横浜市港北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            1 => 
            array (
                'id' => 502,
                'pref' => 14,
                'name' => '横浜市戸塚区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            2 => 
            array (
                'id' => 503,
                'pref' => 14,
                'name' => '横浜市港南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            3 => 
            array (
                'id' => 504,
                'pref' => 14,
                'name' => '横浜市旭区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            4 => 
            array (
                'id' => 505,
                'pref' => 14,
                'name' => '横浜市緑区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            5 => 
            array (
                'id' => 506,
                'pref' => 14,
                'name' => '横浜市瀬谷区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            6 => 
            array (
                'id' => 507,
                'pref' => 14,
                'name' => '横浜市栄区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            7 => 
            array (
                'id' => 508,
                'pref' => 14,
                'name' => '横浜市泉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            8 => 
            array (
                'id' => 509,
                'pref' => 14,
                'name' => '横浜市青葉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            9 => 
            array (
                'id' => 510,
                'pref' => 14,
                'name' => '横浜市都筑区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            10 => 
            array (
                'id' => 511,
                'pref' => 14,
                'name' => '川崎市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            11 => 
            array (
                'id' => 512,
                'pref' => 14,
                'name' => '川崎市川崎区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            12 => 
            array (
                'id' => 513,
                'pref' => 14,
                'name' => '川崎市幸区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            13 => 
            array (
                'id' => 514,
                'pref' => 14,
                'name' => '川崎市中原区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            14 => 
            array (
                'id' => 515,
                'pref' => 14,
                'name' => '川崎市高津区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            15 => 
            array (
                'id' => 516,
                'pref' => 14,
                'name' => '川崎市多摩区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            16 => 
            array (
                'id' => 517,
                'pref' => 14,
                'name' => '川崎市宮前区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            17 => 
            array (
                'id' => 518,
                'pref' => 14,
                'name' => '川崎市麻生区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            18 => 
            array (
                'id' => 519,
                'pref' => 14,
                'name' => '相模原市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            19 => 
            array (
                'id' => 520,
                'pref' => 14,
                'name' => '相模原市緑区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            20 => 
            array (
                'id' => 521,
                'pref' => 14,
                'name' => '相模原市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            21 => 
            array (
                'id' => 522,
                'pref' => 14,
                'name' => '相模原市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            22 => 
            array (
                'id' => 523,
                'pref' => 14,
                'name' => '横須賀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            23 => 
            array (
                'id' => 524,
                'pref' => 14,
                'name' => '平塚市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            24 => 
            array (
                'id' => 525,
                'pref' => 14,
                'name' => '鎌倉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            25 => 
            array (
                'id' => 526,
                'pref' => 14,
                'name' => '藤沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            26 => 
            array (
                'id' => 527,
                'pref' => 14,
                'name' => '小田原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            27 => 
            array (
                'id' => 528,
                'pref' => 14,
                'name' => '茅ヶ崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            28 => 
            array (
                'id' => 529,
                'pref' => 14,
                'name' => '逗子市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            29 => 
            array (
                'id' => 530,
                'pref' => 14,
                'name' => '相模原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            30 => 
            array (
                'id' => 531,
                'pref' => 14,
                'name' => '三浦市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            31 => 
            array (
                'id' => 532,
                'pref' => 14,
                'name' => '秦野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            32 => 
            array (
                'id' => 533,
                'pref' => 14,
                'name' => '厚木市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            33 => 
            array (
                'id' => 534,
                'pref' => 14,
                'name' => '大和市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            34 => 
            array (
                'id' => 535,
                'pref' => 14,
                'name' => '伊勢原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            35 => 
            array (
                'id' => 536,
                'pref' => 14,
                'name' => '海老名市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            36 => 
            array (
                'id' => 537,
                'pref' => 14,
                'name' => '座間市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            37 => 
            array (
                'id' => 538,
                'pref' => 14,
                'name' => '南足柄市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            38 => 
            array (
                'id' => 539,
                'pref' => 14,
                'name' => '綾瀬市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            39 => 
            array (
                'id' => 540,
                'pref' => 14,
                'name' => '三浦郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            40 => 
            array (
                'id' => 541,
                'pref' => 14,
                'name' => '高座郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            41 => 
            array (
                'id' => 542,
                'pref' => 14,
                'name' => '中郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            42 => 
            array (
                'id' => 543,
                'pref' => 14,
                'name' => '足柄上郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            43 => 
            array (
                'id' => 544,
                'pref' => 14,
                'name' => '足柄下郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            44 => 
            array (
                'id' => 545,
                'pref' => 14,
                'name' => '愛甲郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            45 => 
            array (
                'id' => 546,
                'pref' => 15,
                'name' => '新潟市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:51',
                'updated_at' => '2021-03-05 00:26:51',
            ),
            46 => 
            array (
                'id' => 547,
                'pref' => 15,
                'name' => '新潟市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            47 => 
            array (
                'id' => 548,
                'pref' => 15,
                'name' => '新潟市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            48 => 
            array (
                'id' => 549,
                'pref' => 15,
                'name' => '新潟市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            49 => 
            array (
                'id' => 550,
                'pref' => 15,
                'name' => '新潟市江南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            50 => 
            array (
                'id' => 551,
                'pref' => 15,
                'name' => '新潟市秋葉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            51 => 
            array (
                'id' => 552,
                'pref' => 15,
                'name' => '新潟市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            52 => 
            array (
                'id' => 553,
                'pref' => 15,
                'name' => '新潟市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            53 => 
            array (
                'id' => 554,
                'pref' => 15,
                'name' => '新潟市西蒲区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            54 => 
            array (
                'id' => 555,
                'pref' => 15,
                'name' => '長岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            55 => 
            array (
                'id' => 556,
                'pref' => 15,
                'name' => '三条市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            56 => 
            array (
                'id' => 557,
                'pref' => 15,
                'name' => '柏崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            57 => 
            array (
                'id' => 558,
                'pref' => 15,
                'name' => '新発田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            58 => 
            array (
                'id' => 559,
                'pref' => 15,
                'name' => '小千谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            59 => 
            array (
                'id' => 560,
                'pref' => 15,
                'name' => '加茂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            60 => 
            array (
                'id' => 561,
                'pref' => 15,
                'name' => '十日町市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            61 => 
            array (
                'id' => 562,
                'pref' => 15,
                'name' => '見附市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            62 => 
            array (
                'id' => 563,
                'pref' => 15,
                'name' => '村上市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            63 => 
            array (
                'id' => 564,
                'pref' => 15,
                'name' => '燕市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            64 => 
            array (
                'id' => 565,
                'pref' => 15,
                'name' => '糸魚川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            65 => 
            array (
                'id' => 566,
                'pref' => 15,
                'name' => '妙高市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            66 => 
            array (
                'id' => 567,
                'pref' => 15,
                'name' => '五泉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            67 => 
            array (
                'id' => 568,
                'pref' => 15,
                'name' => '上越市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            68 => 
            array (
                'id' => 569,
                'pref' => 15,
                'name' => '阿賀野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            69 => 
            array (
                'id' => 570,
                'pref' => 15,
                'name' => '佐渡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            70 => 
            array (
                'id' => 571,
                'pref' => 15,
                'name' => '魚沼市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            71 => 
            array (
                'id' => 572,
                'pref' => 15,
                'name' => '南魚沼市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            72 => 
            array (
                'id' => 573,
                'pref' => 15,
                'name' => '胎内市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            73 => 
            array (
                'id' => 574,
                'pref' => 15,
                'name' => '北蒲原郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            74 => 
            array (
                'id' => 575,
                'pref' => 15,
                'name' => '西蒲原郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            75 => 
            array (
                'id' => 576,
                'pref' => 15,
                'name' => '南蒲原郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            76 => 
            array (
                'id' => 577,
                'pref' => 15,
                'name' => '東蒲原郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            77 => 
            array (
                'id' => 578,
                'pref' => 15,
                'name' => '三島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            78 => 
            array (
                'id' => 579,
                'pref' => 15,
                'name' => '北魚沼郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            79 => 
            array (
                'id' => 580,
                'pref' => 15,
                'name' => '南魚沼郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            80 => 
            array (
                'id' => 581,
                'pref' => 15,
                'name' => '中魚沼郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            81 => 
            array (
                'id' => 582,
                'pref' => 15,
                'name' => '刈羽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            82 => 
            array (
                'id' => 583,
                'pref' => 15,
                'name' => '岩船郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            83 => 
            array (
                'id' => 584,
                'pref' => 16,
                'name' => '富山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            84 => 
            array (
                'id' => 585,
                'pref' => 16,
                'name' => '高岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            85 => 
            array (
                'id' => 586,
                'pref' => 16,
                'name' => '魚津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            86 => 
            array (
                'id' => 587,
                'pref' => 16,
                'name' => '氷見市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            87 => 
            array (
                'id' => 588,
                'pref' => 16,
                'name' => '滑川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            88 => 
            array (
                'id' => 589,
                'pref' => 16,
                'name' => '黒部市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            89 => 
            array (
                'id' => 590,
                'pref' => 16,
                'name' => '砺波市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            90 => 
            array (
                'id' => 591,
                'pref' => 16,
                'name' => '小矢部市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            91 => 
            array (
                'id' => 592,
                'pref' => 16,
                'name' => '南砺市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            92 => 
            array (
                'id' => 593,
                'pref' => 16,
                'name' => '射水市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            93 => 
            array (
                'id' => 594,
                'pref' => 16,
                'name' => '中新川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            94 => 
            array (
                'id' => 595,
                'pref' => 16,
                'name' => '下新川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            95 => 
            array (
                'id' => 596,
                'pref' => 17,
                'name' => '金沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            96 => 
            array (
                'id' => 597,
                'pref' => 17,
                'name' => '七尾市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            97 => 
            array (
                'id' => 598,
                'pref' => 17,
                'name' => '小松市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            98 => 
            array (
                'id' => 599,
                'pref' => 17,
                'name' => '輪島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            99 => 
            array (
                'id' => 600,
                'pref' => 17,
                'name' => '珠洲市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            100 => 
            array (
                'id' => 601,
                'pref' => 17,
                'name' => '加賀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            101 => 
            array (
                'id' => 602,
                'pref' => 17,
                'name' => '羽咋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            102 => 
            array (
                'id' => 603,
                'pref' => 17,
                'name' => 'かほく市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            103 => 
            array (
                'id' => 604,
                'pref' => 17,
                'name' => '白山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            104 => 
            array (
                'id' => 605,
                'pref' => 17,
                'name' => '能美市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            105 => 
            array (
                'id' => 606,
                'pref' => 17,
                'name' => '野々市市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            106 => 
            array (
                'id' => 607,
                'pref' => 17,
                'name' => '能美郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            107 => 
            array (
                'id' => 608,
                'pref' => 17,
                'name' => '河北郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            108 => 
            array (
                'id' => 609,
                'pref' => 17,
                'name' => '羽咋郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            109 => 
            array (
                'id' => 610,
                'pref' => 17,
                'name' => '鹿島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            110 => 
            array (
                'id' => 611,
                'pref' => 17,
                'name' => '鳳珠郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            111 => 
            array (
                'id' => 612,
                'pref' => 18,
                'name' => '福井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            112 => 
            array (
                'id' => 613,
                'pref' => 18,
                'name' => '敦賀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            113 => 
            array (
                'id' => 614,
                'pref' => 18,
                'name' => '小浜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            114 => 
            array (
                'id' => 615,
                'pref' => 18,
                'name' => '大野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            115 => 
            array (
                'id' => 616,
                'pref' => 18,
                'name' => '勝山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            116 => 
            array (
                'id' => 617,
                'pref' => 18,
                'name' => '鯖江市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            117 => 
            array (
                'id' => 618,
                'pref' => 18,
                'name' => 'あわら市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            118 => 
            array (
                'id' => 619,
                'pref' => 18,
                'name' => '越前市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            119 => 
            array (
                'id' => 620,
                'pref' => 18,
                'name' => '坂井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            120 => 
            array (
                'id' => 621,
                'pref' => 18,
                'name' => '吉田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            121 => 
            array (
                'id' => 622,
                'pref' => 18,
                'name' => '今立郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            122 => 
            array (
                'id' => 623,
                'pref' => 18,
                'name' => '南条郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            123 => 
            array (
                'id' => 624,
                'pref' => 18,
                'name' => '丹生郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            124 => 
            array (
                'id' => 625,
                'pref' => 18,
                'name' => '三方郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            125 => 
            array (
                'id' => 626,
                'pref' => 18,
                'name' => '大飯郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            126 => 
            array (
                'id' => 627,
                'pref' => 18,
                'name' => '三方上中郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            127 => 
            array (
                'id' => 628,
                'pref' => 19,
                'name' => '甲府市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            128 => 
            array (
                'id' => 629,
                'pref' => 19,
                'name' => '富士吉田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            129 => 
            array (
                'id' => 630,
                'pref' => 19,
                'name' => '都留市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            130 => 
            array (
                'id' => 631,
                'pref' => 19,
                'name' => '山梨市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            131 => 
            array (
                'id' => 632,
                'pref' => 19,
                'name' => '大月市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            132 => 
            array (
                'id' => 633,
                'pref' => 19,
                'name' => '韮崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            133 => 
            array (
                'id' => 634,
                'pref' => 19,
                'name' => '南アルプス市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            134 => 
            array (
                'id' => 635,
                'pref' => 19,
                'name' => '北杜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            135 => 
            array (
                'id' => 636,
                'pref' => 19,
                'name' => '甲斐市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            136 => 
            array (
                'id' => 637,
                'pref' => 19,
                'name' => '笛吹市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            137 => 
            array (
                'id' => 638,
                'pref' => 19,
                'name' => '上野原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            138 => 
            array (
                'id' => 639,
                'pref' => 19,
                'name' => '甲州市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            139 => 
            array (
                'id' => 640,
                'pref' => 19,
                'name' => '中央市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            140 => 
            array (
                'id' => 641,
                'pref' => 19,
                'name' => '西八代郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            141 => 
            array (
                'id' => 642,
                'pref' => 19,
                'name' => '南巨摩郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            142 => 
            array (
                'id' => 643,
                'pref' => 19,
                'name' => '中巨摩郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            143 => 
            array (
                'id' => 644,
                'pref' => 19,
                'name' => '南都留郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            144 => 
            array (
                'id' => 645,
                'pref' => 19,
                'name' => '北都留郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            145 => 
            array (
                'id' => 646,
                'pref' => 20,
                'name' => '長野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            146 => 
            array (
                'id' => 647,
                'pref' => 20,
                'name' => '松本市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            147 => 
            array (
                'id' => 648,
                'pref' => 20,
                'name' => '上田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            148 => 
            array (
                'id' => 649,
                'pref' => 20,
                'name' => '岡谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            149 => 
            array (
                'id' => 650,
                'pref' => 20,
                'name' => '飯田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            150 => 
            array (
                'id' => 651,
                'pref' => 20,
                'name' => '諏訪市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            151 => 
            array (
                'id' => 652,
                'pref' => 20,
                'name' => '須坂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            152 => 
            array (
                'id' => 653,
                'pref' => 20,
                'name' => '小諸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            153 => 
            array (
                'id' => 654,
                'pref' => 20,
                'name' => '伊那市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            154 => 
            array (
                'id' => 655,
                'pref' => 20,
                'name' => '駒ヶ根市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            155 => 
            array (
                'id' => 656,
                'pref' => 20,
                'name' => '中野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            156 => 
            array (
                'id' => 657,
                'pref' => 20,
                'name' => '大町市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            157 => 
            array (
                'id' => 658,
                'pref' => 20,
                'name' => '飯山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            158 => 
            array (
                'id' => 659,
                'pref' => 20,
                'name' => '茅野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            159 => 
            array (
                'id' => 660,
                'pref' => 20,
                'name' => '塩尻市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            160 => 
            array (
                'id' => 661,
                'pref' => 20,
                'name' => '佐久市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            161 => 
            array (
                'id' => 662,
                'pref' => 20,
                'name' => '千曲市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            162 => 
            array (
                'id' => 663,
                'pref' => 20,
                'name' => '東御市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            163 => 
            array (
                'id' => 664,
                'pref' => 20,
                'name' => '安曇野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            164 => 
            array (
                'id' => 665,
                'pref' => 20,
                'name' => '南佐久郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            165 => 
            array (
                'id' => 666,
                'pref' => 20,
                'name' => '北佐久郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            166 => 
            array (
                'id' => 667,
                'pref' => 20,
                'name' => '小県郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            167 => 
            array (
                'id' => 668,
                'pref' => 20,
                'name' => '諏訪郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            168 => 
            array (
                'id' => 669,
                'pref' => 20,
                'name' => '上伊那郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            169 => 
            array (
                'id' => 670,
                'pref' => 20,
                'name' => '下伊那郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            170 => 
            array (
                'id' => 671,
                'pref' => 20,
                'name' => '木曽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            171 => 
            array (
                'id' => 672,
                'pref' => 20,
                'name' => '東筑摩郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            172 => 
            array (
                'id' => 673,
                'pref' => 20,
                'name' => '北安曇郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            173 => 
            array (
                'id' => 674,
                'pref' => 20,
                'name' => '埴科郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            174 => 
            array (
                'id' => 675,
                'pref' => 20,
                'name' => '上高井郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            175 => 
            array (
                'id' => 676,
                'pref' => 20,
                'name' => '下高井郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            176 => 
            array (
                'id' => 677,
                'pref' => 20,
                'name' => '上水内郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            177 => 
            array (
                'id' => 678,
                'pref' => 20,
                'name' => '下水内郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            178 => 
            array (
                'id' => 679,
                'pref' => 21,
                'name' => '岐阜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            179 => 
            array (
                'id' => 680,
                'pref' => 21,
                'name' => '大垣市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            180 => 
            array (
                'id' => 681,
                'pref' => 21,
                'name' => '高山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            181 => 
            array (
                'id' => 682,
                'pref' => 21,
                'name' => '多治見市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            182 => 
            array (
                'id' => 683,
                'pref' => 21,
                'name' => '関市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            183 => 
            array (
                'id' => 684,
                'pref' => 21,
                'name' => '中津川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            184 => 
            array (
                'id' => 685,
                'pref' => 21,
                'name' => '美濃市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            185 => 
            array (
                'id' => 686,
                'pref' => 21,
                'name' => '瑞浪市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            186 => 
            array (
                'id' => 687,
                'pref' => 21,
                'name' => '羽島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            187 => 
            array (
                'id' => 688,
                'pref' => 21,
                'name' => '恵那市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            188 => 
            array (
                'id' => 689,
                'pref' => 21,
                'name' => '美濃加茂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            189 => 
            array (
                'id' => 690,
                'pref' => 21,
                'name' => '土岐市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            190 => 
            array (
                'id' => 691,
                'pref' => 21,
                'name' => '各務原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            191 => 
            array (
                'id' => 692,
                'pref' => 21,
                'name' => '可児市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            192 => 
            array (
                'id' => 693,
                'pref' => 21,
                'name' => '山県市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            193 => 
            array (
                'id' => 694,
                'pref' => 21,
                'name' => '瑞穂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            194 => 
            array (
                'id' => 695,
                'pref' => 21,
                'name' => '飛騨市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            195 => 
            array (
                'id' => 696,
                'pref' => 21,
                'name' => '本巣市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            196 => 
            array (
                'id' => 697,
                'pref' => 21,
                'name' => '郡上市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            197 => 
            array (
                'id' => 698,
                'pref' => 21,
                'name' => '下呂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            198 => 
            array (
                'id' => 699,
                'pref' => 21,
                'name' => '海津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            199 => 
            array (
                'id' => 700,
                'pref' => 21,
                'name' => '羽島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            200 => 
            array (
                'id' => 701,
                'pref' => 21,
                'name' => '養老郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            201 => 
            array (
                'id' => 702,
                'pref' => 21,
                'name' => '不破郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            202 => 
            array (
                'id' => 703,
                'pref' => 21,
                'name' => '安八郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            203 => 
            array (
                'id' => 704,
                'pref' => 21,
                'name' => '揖斐郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            204 => 
            array (
                'id' => 705,
                'pref' => 21,
                'name' => '本巣郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            205 => 
            array (
                'id' => 706,
                'pref' => 21,
                'name' => '加茂郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            206 => 
            array (
                'id' => 707,
                'pref' => 21,
                'name' => '可児郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            207 => 
            array (
                'id' => 708,
                'pref' => 21,
                'name' => '大野郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            208 => 
            array (
                'id' => 709,
                'pref' => 22,
                'name' => '静岡市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            209 => 
            array (
                'id' => 710,
                'pref' => 22,
                'name' => '静岡市葵区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            210 => 
            array (
                'id' => 711,
                'pref' => 22,
                'name' => '静岡市駿河区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            211 => 
            array (
                'id' => 712,
                'pref' => 22,
                'name' => '静岡市清水区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            212 => 
            array (
                'id' => 713,
                'pref' => 22,
                'name' => '浜松市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            213 => 
            array (
                'id' => 714,
                'pref' => 22,
                'name' => '浜松市中区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            214 => 
            array (
                'id' => 715,
                'pref' => 22,
                'name' => '浜松市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            215 => 
            array (
                'id' => 716,
                'pref' => 22,
                'name' => '浜松市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            216 => 
            array (
                'id' => 717,
                'pref' => 22,
                'name' => '浜松市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            217 => 
            array (
                'id' => 718,
                'pref' => 22,
                'name' => '浜松市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            218 => 
            array (
                'id' => 719,
                'pref' => 22,
                'name' => '浜松市浜北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            219 => 
            array (
                'id' => 720,
                'pref' => 22,
                'name' => '浜松市天竜区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            220 => 
            array (
                'id' => 721,
                'pref' => 22,
                'name' => '沼津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            221 => 
            array (
                'id' => 722,
                'pref' => 22,
                'name' => '熱海市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            222 => 
            array (
                'id' => 723,
                'pref' => 22,
                'name' => '三島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            223 => 
            array (
                'id' => 724,
                'pref' => 22,
                'name' => '富士宮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            224 => 
            array (
                'id' => 725,
                'pref' => 22,
                'name' => '伊東市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            225 => 
            array (
                'id' => 726,
                'pref' => 22,
                'name' => '島田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            226 => 
            array (
                'id' => 727,
                'pref' => 22,
                'name' => '富士市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            227 => 
            array (
                'id' => 728,
                'pref' => 22,
                'name' => '磐田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            228 => 
            array (
                'id' => 729,
                'pref' => 22,
                'name' => '焼津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            229 => 
            array (
                'id' => 730,
                'pref' => 22,
                'name' => '掛川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            230 => 
            array (
                'id' => 731,
                'pref' => 22,
                'name' => '藤枝市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            231 => 
            array (
                'id' => 732,
                'pref' => 22,
                'name' => '御殿場市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            232 => 
            array (
                'id' => 733,
                'pref' => 22,
                'name' => '袋井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            233 => 
            array (
                'id' => 734,
                'pref' => 22,
                'name' => '下田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            234 => 
            array (
                'id' => 735,
                'pref' => 22,
                'name' => '裾野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            235 => 
            array (
                'id' => 736,
                'pref' => 22,
                'name' => '湖西市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            236 => 
            array (
                'id' => 737,
                'pref' => 22,
                'name' => '伊豆市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            237 => 
            array (
                'id' => 738,
                'pref' => 22,
                'name' => '御前崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            238 => 
            array (
                'id' => 739,
                'pref' => 22,
                'name' => '菊川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            239 => 
            array (
                'id' => 740,
                'pref' => 22,
                'name' => '伊豆の国市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            240 => 
            array (
                'id' => 741,
                'pref' => 22,
                'name' => '牧之原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            241 => 
            array (
                'id' => 742,
                'pref' => 22,
                'name' => '賀茂郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            242 => 
            array (
                'id' => 743,
                'pref' => 22,
                'name' => '田方郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            243 => 
            array (
                'id' => 744,
                'pref' => 22,
                'name' => '駿東郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            244 => 
            array (
                'id' => 745,
                'pref' => 22,
                'name' => '富士郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            245 => 
            array (
                'id' => 746,
                'pref' => 22,
                'name' => '榛原郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            246 => 
            array (
                'id' => 747,
                'pref' => 22,
                'name' => '周智郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            247 => 
            array (
                'id' => 748,
                'pref' => 22,
                'name' => '浜名郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            248 => 
            array (
                'id' => 749,
                'pref' => 23,
                'name' => '名古屋市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            249 => 
            array (
                'id' => 750,
                'pref' => 23,
                'name' => '名古屋市千種区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            250 => 
            array (
                'id' => 751,
                'pref' => 23,
                'name' => '名古屋市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            251 => 
            array (
                'id' => 752,
                'pref' => 23,
                'name' => '名古屋市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            252 => 
            array (
                'id' => 753,
                'pref' => 23,
                'name' => '名古屋市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            253 => 
            array (
                'id' => 754,
                'pref' => 23,
                'name' => '名古屋市中村区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            254 => 
            array (
                'id' => 755,
                'pref' => 23,
                'name' => '名古屋市中区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            255 => 
            array (
                'id' => 756,
                'pref' => 23,
                'name' => '名古屋市昭和区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            256 => 
            array (
                'id' => 757,
                'pref' => 23,
                'name' => '名古屋市瑞穂区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            257 => 
            array (
                'id' => 758,
                'pref' => 23,
                'name' => '名古屋市熱田区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            258 => 
            array (
                'id' => 759,
                'pref' => 23,
                'name' => '名古屋市中川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            259 => 
            array (
                'id' => 760,
                'pref' => 23,
                'name' => '名古屋市港区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            260 => 
            array (
                'id' => 761,
                'pref' => 23,
                'name' => '名古屋市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            261 => 
            array (
                'id' => 762,
                'pref' => 23,
                'name' => '名古屋市守山区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            262 => 
            array (
                'id' => 763,
                'pref' => 23,
                'name' => '名古屋市緑区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            263 => 
            array (
                'id' => 764,
                'pref' => 23,
                'name' => '名古屋市名東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            264 => 
            array (
                'id' => 765,
                'pref' => 23,
                'name' => '名古屋市天白区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            265 => 
            array (
                'id' => 766,
                'pref' => 23,
                'name' => '豊橋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            266 => 
            array (
                'id' => 767,
                'pref' => 23,
                'name' => '岡崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            267 => 
            array (
                'id' => 768,
                'pref' => 23,
                'name' => '一宮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            268 => 
            array (
                'id' => 769,
                'pref' => 23,
                'name' => '瀬戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            269 => 
            array (
                'id' => 770,
                'pref' => 23,
                'name' => '半田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            270 => 
            array (
                'id' => 771,
                'pref' => 23,
                'name' => '春日井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            271 => 
            array (
                'id' => 772,
                'pref' => 23,
                'name' => '豊川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            272 => 
            array (
                'id' => 773,
                'pref' => 23,
                'name' => '津島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            273 => 
            array (
                'id' => 774,
                'pref' => 23,
                'name' => '碧南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            274 => 
            array (
                'id' => 775,
                'pref' => 23,
                'name' => '刈谷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            275 => 
            array (
                'id' => 776,
                'pref' => 23,
                'name' => '豊田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            276 => 
            array (
                'id' => 777,
                'pref' => 23,
                'name' => '安城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            277 => 
            array (
                'id' => 778,
                'pref' => 23,
                'name' => '西尾市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            278 => 
            array (
                'id' => 779,
                'pref' => 23,
                'name' => '蒲郡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            279 => 
            array (
                'id' => 780,
                'pref' => 23,
                'name' => '犬山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            280 => 
            array (
                'id' => 781,
                'pref' => 23,
                'name' => '常滑市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            281 => 
            array (
                'id' => 782,
                'pref' => 23,
                'name' => '江南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            282 => 
            array (
                'id' => 783,
                'pref' => 23,
                'name' => '小牧市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            283 => 
            array (
                'id' => 784,
                'pref' => 23,
                'name' => '稲沢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            284 => 
            array (
                'id' => 785,
                'pref' => 23,
                'name' => '新城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            285 => 
            array (
                'id' => 786,
                'pref' => 23,
                'name' => '東海市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            286 => 
            array (
                'id' => 787,
                'pref' => 23,
                'name' => '大府市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            287 => 
            array (
                'id' => 788,
                'pref' => 23,
                'name' => '知多市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            288 => 
            array (
                'id' => 789,
                'pref' => 23,
                'name' => '尾張旭市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            289 => 
            array (
                'id' => 790,
                'pref' => 23,
                'name' => '高浜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            290 => 
            array (
                'id' => 791,
                'pref' => 23,
                'name' => '岩倉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            291 => 
            array (
                'id' => 792,
                'pref' => 23,
                'name' => '豊明市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            292 => 
            array (
                'id' => 793,
                'pref' => 23,
                'name' => '日進市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            293 => 
            array (
                'id' => 794,
                'pref' => 23,
                'name' => '田原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            294 => 
            array (
                'id' => 795,
                'pref' => 23,
                'name' => '愛西市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            295 => 
            array (
                'id' => 796,
                'pref' => 23,
                'name' => '清須市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            296 => 
            array (
                'id' => 797,
                'pref' => 23,
                'name' => '北名古屋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            297 => 
            array (
                'id' => 798,
                'pref' => 23,
                'name' => '弥富市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            298 => 
            array (
                'id' => 799,
                'pref' => 23,
                'name' => 'みよし市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            299 => 
            array (
                'id' => 800,
                'pref' => 23,
                'name' => 'あま市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            300 => 
            array (
                'id' => 801,
                'pref' => 23,
                'name' => '長久手市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            301 => 
            array (
                'id' => 802,
                'pref' => 23,
                'name' => '愛知郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            302 => 
            array (
                'id' => 803,
                'pref' => 23,
                'name' => '西春日井郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            303 => 
            array (
                'id' => 804,
                'pref' => 23,
                'name' => '丹羽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            304 => 
            array (
                'id' => 805,
                'pref' => 23,
                'name' => '海部郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            305 => 
            array (
                'id' => 806,
                'pref' => 23,
                'name' => '知多郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            306 => 
            array (
                'id' => 807,
                'pref' => 23,
                'name' => '幡豆郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            307 => 
            array (
                'id' => 808,
                'pref' => 23,
                'name' => '額田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            308 => 
            array (
                'id' => 809,
                'pref' => 23,
                'name' => '北設楽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            309 => 
            array (
                'id' => 810,
                'pref' => 24,
                'name' => '津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            310 => 
            array (
                'id' => 811,
                'pref' => 24,
                'name' => '四日市市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            311 => 
            array (
                'id' => 812,
                'pref' => 24,
                'name' => '伊勢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            312 => 
            array (
                'id' => 813,
                'pref' => 24,
                'name' => '松阪市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            313 => 
            array (
                'id' => 814,
                'pref' => 24,
                'name' => '桑名市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            314 => 
            array (
                'id' => 815,
                'pref' => 24,
                'name' => '鈴鹿市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            315 => 
            array (
                'id' => 816,
                'pref' => 24,
                'name' => '名張市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            316 => 
            array (
                'id' => 817,
                'pref' => 24,
                'name' => '尾鷲市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            317 => 
            array (
                'id' => 818,
                'pref' => 24,
                'name' => '亀山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            318 => 
            array (
                'id' => 819,
                'pref' => 24,
                'name' => '鳥羽市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            319 => 
            array (
                'id' => 820,
                'pref' => 24,
                'name' => '熊野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            320 => 
            array (
                'id' => 821,
                'pref' => 24,
                'name' => 'いなべ市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            321 => 
            array (
                'id' => 822,
                'pref' => 24,
                'name' => '志摩市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            322 => 
            array (
                'id' => 823,
                'pref' => 24,
                'name' => '伊賀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            323 => 
            array (
                'id' => 824,
                'pref' => 24,
                'name' => '桑名郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            324 => 
            array (
                'id' => 825,
                'pref' => 24,
                'name' => '員弁郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            325 => 
            array (
                'id' => 826,
                'pref' => 24,
                'name' => '三重郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            326 => 
            array (
                'id' => 827,
                'pref' => 24,
                'name' => '多気郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            327 => 
            array (
                'id' => 828,
                'pref' => 24,
                'name' => '度会郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            328 => 
            array (
                'id' => 829,
                'pref' => 24,
                'name' => '北牟婁郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            329 => 
            array (
                'id' => 830,
                'pref' => 24,
                'name' => '南牟婁郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            330 => 
            array (
                'id' => 831,
                'pref' => 25,
                'name' => '大津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            331 => 
            array (
                'id' => 832,
                'pref' => 25,
                'name' => '彦根市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            332 => 
            array (
                'id' => 833,
                'pref' => 25,
                'name' => '長浜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            333 => 
            array (
                'id' => 834,
                'pref' => 25,
                'name' => '近江八幡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            334 => 
            array (
                'id' => 835,
                'pref' => 25,
                'name' => '草津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            335 => 
            array (
                'id' => 836,
                'pref' => 25,
                'name' => '守山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            336 => 
            array (
                'id' => 837,
                'pref' => 25,
                'name' => '栗東市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            337 => 
            array (
                'id' => 838,
                'pref' => 25,
                'name' => '甲賀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            338 => 
            array (
                'id' => 839,
                'pref' => 25,
                'name' => '野洲市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            339 => 
            array (
                'id' => 840,
                'pref' => 25,
                'name' => '湖南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            340 => 
            array (
                'id' => 841,
                'pref' => 25,
                'name' => '高島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            341 => 
            array (
                'id' => 842,
                'pref' => 25,
                'name' => '東近江市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            342 => 
            array (
                'id' => 843,
                'pref' => 25,
                'name' => '米原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            343 => 
            array (
                'id' => 844,
                'pref' => 25,
                'name' => '蒲生郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            344 => 
            array (
                'id' => 845,
                'pref' => 25,
                'name' => '愛知郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            345 => 
            array (
                'id' => 846,
                'pref' => 25,
                'name' => '犬上郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            346 => 
            array (
                'id' => 847,
                'pref' => 26,
                'name' => '京都市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            347 => 
            array (
                'id' => 848,
                'pref' => 26,
                'name' => '京都市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            348 => 
            array (
                'id' => 849,
                'pref' => 26,
                'name' => '京都市上京区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            349 => 
            array (
                'id' => 850,
                'pref' => 26,
                'name' => '京都市左京区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            350 => 
            array (
                'id' => 851,
                'pref' => 26,
                'name' => '京都市中京区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            351 => 
            array (
                'id' => 852,
                'pref' => 26,
                'name' => '京都市東山区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            352 => 
            array (
                'id' => 853,
                'pref' => 26,
                'name' => '京都市下京区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            353 => 
            array (
                'id' => 854,
                'pref' => 26,
                'name' => '京都市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            354 => 
            array (
                'id' => 855,
                'pref' => 26,
                'name' => '京都市右京区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            355 => 
            array (
                'id' => 856,
                'pref' => 26,
                'name' => '京都市伏見区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            356 => 
            array (
                'id' => 857,
                'pref' => 26,
                'name' => '京都市山科区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            357 => 
            array (
                'id' => 858,
                'pref' => 26,
                'name' => '京都市西京区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            358 => 
            array (
                'id' => 859,
                'pref' => 26,
                'name' => '福知山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            359 => 
            array (
                'id' => 860,
                'pref' => 26,
                'name' => '舞鶴市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            360 => 
            array (
                'id' => 861,
                'pref' => 26,
                'name' => '綾部市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            361 => 
            array (
                'id' => 862,
                'pref' => 26,
                'name' => '宇治市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            362 => 
            array (
                'id' => 863,
                'pref' => 26,
                'name' => '宮津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            363 => 
            array (
                'id' => 864,
                'pref' => 26,
                'name' => '亀岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            364 => 
            array (
                'id' => 865,
                'pref' => 26,
                'name' => '城陽市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            365 => 
            array (
                'id' => 866,
                'pref' => 26,
                'name' => '向日市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            366 => 
            array (
                'id' => 867,
                'pref' => 26,
                'name' => '長岡京市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            367 => 
            array (
                'id' => 868,
                'pref' => 26,
                'name' => '八幡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            368 => 
            array (
                'id' => 869,
                'pref' => 26,
                'name' => '京田辺市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            369 => 
            array (
                'id' => 870,
                'pref' => 26,
                'name' => '京丹後市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            370 => 
            array (
                'id' => 871,
                'pref' => 26,
                'name' => '南丹市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            371 => 
            array (
                'id' => 872,
                'pref' => 26,
                'name' => '木津川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            372 => 
            array (
                'id' => 873,
                'pref' => 26,
                'name' => '乙訓郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            373 => 
            array (
                'id' => 874,
                'pref' => 26,
                'name' => '久世郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            374 => 
            array (
                'id' => 875,
                'pref' => 26,
                'name' => '綴喜郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            375 => 
            array (
                'id' => 876,
                'pref' => 26,
                'name' => '相楽郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            376 => 
            array (
                'id' => 877,
                'pref' => 26,
                'name' => '船井郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            377 => 
            array (
                'id' => 878,
                'pref' => 26,
                'name' => '与謝郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            378 => 
            array (
                'id' => 879,
                'pref' => 27,
                'name' => '大阪市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            379 => 
            array (
                'id' => 880,
                'pref' => 27,
                'name' => '大阪市都島区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            380 => 
            array (
                'id' => 881,
                'pref' => 27,
                'name' => '大阪市福島区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            381 => 
            array (
                'id' => 882,
                'pref' => 27,
                'name' => '大阪市此花区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            382 => 
            array (
                'id' => 883,
                'pref' => 27,
                'name' => '大阪市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            383 => 
            array (
                'id' => 884,
                'pref' => 27,
                'name' => '大阪市港区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            384 => 
            array (
                'id' => 885,
                'pref' => 27,
                'name' => '大阪市大正区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            385 => 
            array (
                'id' => 886,
                'pref' => 27,
                'name' => '大阪市天王寺区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            386 => 
            array (
                'id' => 887,
                'pref' => 27,
                'name' => '大阪市浪速区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            387 => 
            array (
                'id' => 888,
                'pref' => 27,
                'name' => '大阪市西淀川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            388 => 
            array (
                'id' => 889,
                'pref' => 27,
                'name' => '大阪市東淀川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            389 => 
            array (
                'id' => 890,
                'pref' => 27,
                'name' => '大阪市東成区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            390 => 
            array (
                'id' => 891,
                'pref' => 27,
                'name' => '大阪市生野区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            391 => 
            array (
                'id' => 892,
                'pref' => 27,
                'name' => '大阪市旭区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            392 => 
            array (
                'id' => 893,
                'pref' => 27,
                'name' => '大阪市城東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            393 => 
            array (
                'id' => 894,
                'pref' => 27,
                'name' => '大阪市阿倍野区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            394 => 
            array (
                'id' => 895,
                'pref' => 27,
                'name' => '大阪市住吉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            395 => 
            array (
                'id' => 896,
                'pref' => 27,
                'name' => '大阪市東住吉区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            396 => 
            array (
                'id' => 897,
                'pref' => 27,
                'name' => '大阪市西成区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            397 => 
            array (
                'id' => 898,
                'pref' => 27,
                'name' => '大阪市淀川区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            398 => 
            array (
                'id' => 899,
                'pref' => 27,
                'name' => '大阪市鶴見区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            399 => 
            array (
                'id' => 900,
                'pref' => 27,
                'name' => '大阪市住之江区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            400 => 
            array (
                'id' => 901,
                'pref' => 27,
                'name' => '大阪市平野区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            401 => 
            array (
                'id' => 902,
                'pref' => 27,
                'name' => '大阪市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            402 => 
            array (
                'id' => 903,
                'pref' => 27,
                'name' => '大阪市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            403 => 
            array (
                'id' => 904,
                'pref' => 27,
                'name' => '堺市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            404 => 
            array (
                'id' => 905,
                'pref' => 27,
                'name' => '堺市堺区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            405 => 
            array (
                'id' => 906,
                'pref' => 27,
                'name' => '堺市中区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            406 => 
            array (
                'id' => 907,
                'pref' => 27,
                'name' => '堺市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            407 => 
            array (
                'id' => 908,
                'pref' => 27,
                'name' => '堺市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            408 => 
            array (
                'id' => 909,
                'pref' => 27,
                'name' => '堺市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            409 => 
            array (
                'id' => 910,
                'pref' => 27,
                'name' => '堺市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            410 => 
            array (
                'id' => 911,
                'pref' => 27,
                'name' => '堺市美原区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            411 => 
            array (
                'id' => 912,
                'pref' => 27,
                'name' => '岸和田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            412 => 
            array (
                'id' => 913,
                'pref' => 27,
                'name' => '豊中市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            413 => 
            array (
                'id' => 914,
                'pref' => 27,
                'name' => '池田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            414 => 
            array (
                'id' => 915,
                'pref' => 27,
                'name' => '吹田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            415 => 
            array (
                'id' => 916,
                'pref' => 27,
                'name' => '泉大津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            416 => 
            array (
                'id' => 917,
                'pref' => 27,
                'name' => '高槻市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            417 => 
            array (
                'id' => 918,
                'pref' => 27,
                'name' => '貝塚市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            418 => 
            array (
                'id' => 919,
                'pref' => 27,
                'name' => '守口市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            419 => 
            array (
                'id' => 920,
                'pref' => 27,
                'name' => '枚方市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            420 => 
            array (
                'id' => 921,
                'pref' => 27,
                'name' => '茨木市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            421 => 
            array (
                'id' => 922,
                'pref' => 27,
                'name' => '八尾市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            422 => 
            array (
                'id' => 923,
                'pref' => 27,
                'name' => '泉佐野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            423 => 
            array (
                'id' => 924,
                'pref' => 27,
                'name' => '富田林市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            424 => 
            array (
                'id' => 925,
                'pref' => 27,
                'name' => '寝屋川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            425 => 
            array (
                'id' => 926,
                'pref' => 27,
                'name' => '河内長野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            426 => 
            array (
                'id' => 927,
                'pref' => 27,
                'name' => '松原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            427 => 
            array (
                'id' => 928,
                'pref' => 27,
                'name' => '大東市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            428 => 
            array (
                'id' => 929,
                'pref' => 27,
                'name' => '和泉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            429 => 
            array (
                'id' => 930,
                'pref' => 27,
                'name' => '箕面市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            430 => 
            array (
                'id' => 931,
                'pref' => 27,
                'name' => '柏原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            431 => 
            array (
                'id' => 932,
                'pref' => 27,
                'name' => '羽曳野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            432 => 
            array (
                'id' => 933,
                'pref' => 27,
                'name' => '門真市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            433 => 
            array (
                'id' => 934,
                'pref' => 27,
                'name' => '摂津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            434 => 
            array (
                'id' => 935,
                'pref' => 27,
                'name' => '高石市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            435 => 
            array (
                'id' => 936,
                'pref' => 27,
                'name' => '藤井寺市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            436 => 
            array (
                'id' => 937,
                'pref' => 27,
                'name' => '東大阪市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            437 => 
            array (
                'id' => 938,
                'pref' => 27,
                'name' => '泉南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            438 => 
            array (
                'id' => 939,
                'pref' => 27,
                'name' => '四條畷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            439 => 
            array (
                'id' => 940,
                'pref' => 27,
                'name' => '交野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            440 => 
            array (
                'id' => 941,
                'pref' => 27,
                'name' => '大阪狭山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            441 => 
            array (
                'id' => 942,
                'pref' => 27,
                'name' => '阪南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            442 => 
            array (
                'id' => 943,
                'pref' => 27,
                'name' => '三島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            443 => 
            array (
                'id' => 944,
                'pref' => 27,
                'name' => '豊能郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            444 => 
            array (
                'id' => 945,
                'pref' => 27,
                'name' => '泉北郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            445 => 
            array (
                'id' => 946,
                'pref' => 27,
                'name' => '泉南郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            446 => 
            array (
                'id' => 947,
                'pref' => 27,
                'name' => '南河内郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            447 => 
            array (
                'id' => 948,
                'pref' => 28,
                'name' => '神戸市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            448 => 
            array (
                'id' => 949,
                'pref' => 28,
                'name' => '神戸市東灘区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            449 => 
            array (
                'id' => 950,
                'pref' => 28,
                'name' => '神戸市灘区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            450 => 
            array (
                'id' => 951,
                'pref' => 28,
                'name' => '神戸市兵庫区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            451 => 
            array (
                'id' => 952,
                'pref' => 28,
                'name' => '神戸市長田区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            452 => 
            array (
                'id' => 953,
                'pref' => 28,
                'name' => '神戸市須磨区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            453 => 
            array (
                'id' => 954,
                'pref' => 28,
                'name' => '神戸市垂水区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            454 => 
            array (
                'id' => 955,
                'pref' => 28,
                'name' => '神戸市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            455 => 
            array (
                'id' => 956,
                'pref' => 28,
                'name' => '神戸市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            456 => 
            array (
                'id' => 957,
                'pref' => 28,
                'name' => '神戸市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            457 => 
            array (
                'id' => 958,
                'pref' => 28,
                'name' => '姫路市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            458 => 
            array (
                'id' => 959,
                'pref' => 28,
                'name' => '尼崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            459 => 
            array (
                'id' => 960,
                'pref' => 28,
                'name' => '明石市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            460 => 
            array (
                'id' => 961,
                'pref' => 28,
                'name' => '西宮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            461 => 
            array (
                'id' => 962,
                'pref' => 28,
                'name' => '洲本市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            462 => 
            array (
                'id' => 963,
                'pref' => 28,
                'name' => '芦屋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            463 => 
            array (
                'id' => 964,
                'pref' => 28,
                'name' => '伊丹市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            464 => 
            array (
                'id' => 965,
                'pref' => 28,
                'name' => '相生市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            465 => 
            array (
                'id' => 966,
                'pref' => 28,
                'name' => '豊岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            466 => 
            array (
                'id' => 967,
                'pref' => 28,
                'name' => '加古川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            467 => 
            array (
                'id' => 968,
                'pref' => 28,
                'name' => '赤穂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            468 => 
            array (
                'id' => 969,
                'pref' => 28,
                'name' => '西脇市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            469 => 
            array (
                'id' => 970,
                'pref' => 28,
                'name' => '宝塚市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            470 => 
            array (
                'id' => 971,
                'pref' => 28,
                'name' => '三木市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            471 => 
            array (
                'id' => 972,
                'pref' => 28,
                'name' => '高砂市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            472 => 
            array (
                'id' => 973,
                'pref' => 28,
                'name' => '川西市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            473 => 
            array (
                'id' => 974,
                'pref' => 28,
                'name' => '小野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            474 => 
            array (
                'id' => 975,
                'pref' => 28,
                'name' => '三田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            475 => 
            array (
                'id' => 976,
                'pref' => 28,
                'name' => '加西市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            476 => 
            array (
                'id' => 977,
                'pref' => 28,
                'name' => '丹波篠山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            477 => 
            array (
                'id' => 978,
                'pref' => 28,
                'name' => '養父市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            478 => 
            array (
                'id' => 979,
                'pref' => 28,
                'name' => '丹波市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            479 => 
            array (
                'id' => 980,
                'pref' => 28,
                'name' => '南あわじ市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            480 => 
            array (
                'id' => 981,
                'pref' => 28,
                'name' => '朝来市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            481 => 
            array (
                'id' => 982,
                'pref' => 28,
                'name' => '淡路市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            482 => 
            array (
                'id' => 983,
                'pref' => 28,
                'name' => '宍粟市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            483 => 
            array (
                'id' => 984,
                'pref' => 28,
                'name' => '加東市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            484 => 
            array (
                'id' => 985,
                'pref' => 28,
                'name' => 'たつの市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            485 => 
            array (
                'id' => 986,
                'pref' => 28,
                'name' => '川辺郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            486 => 
            array (
                'id' => 987,
                'pref' => 28,
                'name' => '多可郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            487 => 
            array (
                'id' => 988,
                'pref' => 28,
                'name' => '加古郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            488 => 
            array (
                'id' => 989,
                'pref' => 28,
                'name' => '神崎郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            489 => 
            array (
                'id' => 990,
                'pref' => 28,
                'name' => '揖保郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            490 => 
            array (
                'id' => 991,
                'pref' => 28,
                'name' => '赤穂郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            491 => 
            array (
                'id' => 992,
                'pref' => 28,
                'name' => '佐用郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            492 => 
            array (
                'id' => 993,
                'pref' => 28,
                'name' => '美方郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            493 => 
            array (
                'id' => 994,
                'pref' => 29,
                'name' => '奈良市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            494 => 
            array (
                'id' => 995,
                'pref' => 29,
                'name' => '大和高田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            495 => 
            array (
                'id' => 996,
                'pref' => 29,
                'name' => '大和郡山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            496 => 
            array (
                'id' => 997,
                'pref' => 29,
                'name' => '天理市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            497 => 
            array (
                'id' => 998,
                'pref' => 29,
                'name' => '橿原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            498 => 
            array (
                'id' => 999,
                'pref' => 29,
                'name' => '桜井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            499 => 
            array (
                'id' => 1000,
                'pref' => 29,
                'name' => '五條市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'pref' => 29,
                'name' => '御所市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:52',
                'updated_at' => '2021-03-05 00:26:52',
            ),
            1 => 
            array (
                'id' => 1002,
                'pref' => 29,
                'name' => '生駒市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            2 => 
            array (
                'id' => 1003,
                'pref' => 29,
                'name' => '香芝市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            3 => 
            array (
                'id' => 1004,
                'pref' => 29,
                'name' => '葛城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            4 => 
            array (
                'id' => 1005,
                'pref' => 29,
                'name' => '宇陀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            5 => 
            array (
                'id' => 1006,
                'pref' => 29,
                'name' => '山辺郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            6 => 
            array (
                'id' => 1007,
                'pref' => 29,
                'name' => '生駒郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            7 => 
            array (
                'id' => 1008,
                'pref' => 29,
                'name' => '磯城郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            8 => 
            array (
                'id' => 1009,
                'pref' => 29,
                'name' => '宇陀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            9 => 
            array (
                'id' => 1010,
                'pref' => 29,
                'name' => '高市郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            10 => 
            array (
                'id' => 1011,
                'pref' => 29,
                'name' => '北葛城郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            11 => 
            array (
                'id' => 1012,
                'pref' => 29,
                'name' => '吉野郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            12 => 
            array (
                'id' => 1013,
                'pref' => 30,
                'name' => '和歌山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            13 => 
            array (
                'id' => 1014,
                'pref' => 30,
                'name' => '海南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            14 => 
            array (
                'id' => 1015,
                'pref' => 30,
                'name' => '橋本市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            15 => 
            array (
                'id' => 1016,
                'pref' => 30,
                'name' => '有田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            16 => 
            array (
                'id' => 1017,
                'pref' => 30,
                'name' => '御坊市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            17 => 
            array (
                'id' => 1018,
                'pref' => 30,
                'name' => '田辺市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            18 => 
            array (
                'id' => 1019,
                'pref' => 30,
                'name' => '新宮市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            19 => 
            array (
                'id' => 1020,
                'pref' => 30,
                'name' => '紀の川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            20 => 
            array (
                'id' => 1021,
                'pref' => 30,
                'name' => '岩出市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            21 => 
            array (
                'id' => 1022,
                'pref' => 30,
                'name' => '海草郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            22 => 
            array (
                'id' => 1023,
                'pref' => 30,
                'name' => '伊都郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            23 => 
            array (
                'id' => 1024,
                'pref' => 30,
                'name' => '有田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            24 => 
            array (
                'id' => 1025,
                'pref' => 30,
                'name' => '日高郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            25 => 
            array (
                'id' => 1026,
                'pref' => 30,
                'name' => '西牟婁郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            26 => 
            array (
                'id' => 1027,
                'pref' => 30,
                'name' => '東牟婁郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            27 => 
            array (
                'id' => 1028,
                'pref' => 31,
                'name' => '鳥取市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            28 => 
            array (
                'id' => 1029,
                'pref' => 31,
                'name' => '米子市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            29 => 
            array (
                'id' => 1030,
                'pref' => 31,
                'name' => '倉吉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            30 => 
            array (
                'id' => 1031,
                'pref' => 31,
                'name' => '境港市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            31 => 
            array (
                'id' => 1032,
                'pref' => 31,
                'name' => '岩美郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            32 => 
            array (
                'id' => 1033,
                'pref' => 31,
                'name' => '八頭郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            33 => 
            array (
                'id' => 1034,
                'pref' => 31,
                'name' => '東伯郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            34 => 
            array (
                'id' => 1035,
                'pref' => 31,
                'name' => '西伯郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            35 => 
            array (
                'id' => 1036,
                'pref' => 31,
                'name' => '日野郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            36 => 
            array (
                'id' => 1037,
                'pref' => 32,
                'name' => '松江市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            37 => 
            array (
                'id' => 1038,
                'pref' => 32,
                'name' => '浜田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            38 => 
            array (
                'id' => 1039,
                'pref' => 32,
                'name' => '出雲市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            39 => 
            array (
                'id' => 1040,
                'pref' => 32,
                'name' => '益田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            40 => 
            array (
                'id' => 1041,
                'pref' => 32,
                'name' => '大田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            41 => 
            array (
                'id' => 1042,
                'pref' => 32,
                'name' => '安来市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            42 => 
            array (
                'id' => 1043,
                'pref' => 32,
                'name' => '江津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            43 => 
            array (
                'id' => 1044,
                'pref' => 32,
                'name' => '雲南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            44 => 
            array (
                'id' => 1045,
                'pref' => 32,
                'name' => '八束郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            45 => 
            array (
                'id' => 1046,
                'pref' => 32,
                'name' => '仁多郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            46 => 
            array (
                'id' => 1047,
                'pref' => 32,
                'name' => '飯石郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            47 => 
            array (
                'id' => 1048,
                'pref' => 32,
                'name' => '簸川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            48 => 
            array (
                'id' => 1049,
                'pref' => 32,
                'name' => '邑智郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            49 => 
            array (
                'id' => 1050,
                'pref' => 32,
                'name' => '鹿足郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            50 => 
            array (
                'id' => 1051,
                'pref' => 32,
                'name' => '隠岐郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            51 => 
            array (
                'id' => 1052,
                'pref' => 33,
                'name' => '岡山市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            52 => 
            array (
                'id' => 1053,
                'pref' => 33,
                'name' => '岡山市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            53 => 
            array (
                'id' => 1054,
                'pref' => 33,
                'name' => '岡山市中区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            54 => 
            array (
                'id' => 1055,
                'pref' => 33,
                'name' => '岡山市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            55 => 
            array (
                'id' => 1056,
                'pref' => 33,
                'name' => '岡山市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            56 => 
            array (
                'id' => 1057,
                'pref' => 33,
                'name' => '倉敷市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            57 => 
            array (
                'id' => 1058,
                'pref' => 33,
                'name' => '津山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            58 => 
            array (
                'id' => 1059,
                'pref' => 33,
                'name' => '玉野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            59 => 
            array (
                'id' => 1060,
                'pref' => 33,
                'name' => '笠岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            60 => 
            array (
                'id' => 1061,
                'pref' => 33,
                'name' => '井原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            61 => 
            array (
                'id' => 1062,
                'pref' => 33,
                'name' => '総社市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            62 => 
            array (
                'id' => 1063,
                'pref' => 33,
                'name' => '高梁市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            63 => 
            array (
                'id' => 1064,
                'pref' => 33,
                'name' => '新見市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            64 => 
            array (
                'id' => 1065,
                'pref' => 33,
                'name' => '備前市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            65 => 
            array (
                'id' => 1066,
                'pref' => 33,
                'name' => '瀬戸内市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            66 => 
            array (
                'id' => 1067,
                'pref' => 33,
                'name' => '赤磐市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            67 => 
            array (
                'id' => 1068,
                'pref' => 33,
                'name' => '真庭市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            68 => 
            array (
                'id' => 1069,
                'pref' => 33,
                'name' => '美作市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            69 => 
            array (
                'id' => 1070,
                'pref' => 33,
                'name' => '浅口市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            70 => 
            array (
                'id' => 1071,
                'pref' => 33,
                'name' => '和気郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            71 => 
            array (
                'id' => 1072,
                'pref' => 33,
                'name' => '都窪郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            72 => 
            array (
                'id' => 1073,
                'pref' => 33,
                'name' => '浅口郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            73 => 
            array (
                'id' => 1074,
                'pref' => 33,
                'name' => '小田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            74 => 
            array (
                'id' => 1075,
                'pref' => 33,
                'name' => '真庭郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            75 => 
            array (
                'id' => 1076,
                'pref' => 33,
                'name' => '苫田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            76 => 
            array (
                'id' => 1077,
                'pref' => 33,
                'name' => '勝田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            77 => 
            array (
                'id' => 1078,
                'pref' => 33,
                'name' => '久米郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            78 => 
            array (
                'id' => 1079,
                'pref' => 33,
                'name' => '加賀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            79 => 
            array (
                'id' => 1080,
                'pref' => 34,
                'name' => '広島市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            80 => 
            array (
                'id' => 1081,
                'pref' => 34,
                'name' => '広島市中区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            81 => 
            array (
                'id' => 1082,
                'pref' => 34,
                'name' => '広島市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            82 => 
            array (
                'id' => 1083,
                'pref' => 34,
                'name' => '広島市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            83 => 
            array (
                'id' => 1084,
                'pref' => 34,
                'name' => '広島市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            84 => 
            array (
                'id' => 1085,
                'pref' => 34,
                'name' => '広島市安佐南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            85 => 
            array (
                'id' => 1086,
                'pref' => 34,
                'name' => '広島市安佐北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            86 => 
            array (
                'id' => 1087,
                'pref' => 34,
                'name' => '広島市安芸区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            87 => 
            array (
                'id' => 1088,
                'pref' => 34,
                'name' => '広島市佐伯区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            88 => 
            array (
                'id' => 1089,
                'pref' => 34,
                'name' => '呉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            89 => 
            array (
                'id' => 1090,
                'pref' => 34,
                'name' => '竹原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            90 => 
            array (
                'id' => 1091,
                'pref' => 34,
                'name' => '三原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            91 => 
            array (
                'id' => 1092,
                'pref' => 34,
                'name' => '尾道市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            92 => 
            array (
                'id' => 1093,
                'pref' => 34,
                'name' => '福山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            93 => 
            array (
                'id' => 1094,
                'pref' => 34,
                'name' => '府中市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            94 => 
            array (
                'id' => 1095,
                'pref' => 34,
                'name' => '三次市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            95 => 
            array (
                'id' => 1096,
                'pref' => 34,
                'name' => '庄原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            96 => 
            array (
                'id' => 1097,
                'pref' => 34,
                'name' => '大竹市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            97 => 
            array (
                'id' => 1098,
                'pref' => 34,
                'name' => '東広島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            98 => 
            array (
                'id' => 1099,
                'pref' => 34,
                'name' => '廿日市市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            99 => 
            array (
                'id' => 1100,
                'pref' => 34,
                'name' => '安芸高田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            100 => 
            array (
                'id' => 1101,
                'pref' => 34,
                'name' => '江田島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            101 => 
            array (
                'id' => 1102,
                'pref' => 34,
                'name' => '安芸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            102 => 
            array (
                'id' => 1103,
                'pref' => 34,
                'name' => '山県郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            103 => 
            array (
                'id' => 1104,
                'pref' => 34,
                'name' => '豊田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            104 => 
            array (
                'id' => 1105,
                'pref' => 34,
                'name' => '世羅郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            105 => 
            array (
                'id' => 1106,
                'pref' => 34,
                'name' => '神石郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            106 => 
            array (
                'id' => 1107,
                'pref' => 35,
                'name' => '下関市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            107 => 
            array (
                'id' => 1108,
                'pref' => 35,
                'name' => '宇部市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            108 => 
            array (
                'id' => 1109,
                'pref' => 35,
                'name' => '山口市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            109 => 
            array (
                'id' => 1110,
                'pref' => 35,
                'name' => '萩市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            110 => 
            array (
                'id' => 1111,
                'pref' => 35,
                'name' => '防府市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            111 => 
            array (
                'id' => 1112,
                'pref' => 35,
                'name' => '下松市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            112 => 
            array (
                'id' => 1113,
                'pref' => 35,
                'name' => '岩国市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            113 => 
            array (
                'id' => 1114,
                'pref' => 35,
                'name' => '光市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            114 => 
            array (
                'id' => 1115,
                'pref' => 35,
                'name' => '長門市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            115 => 
            array (
                'id' => 1116,
                'pref' => 35,
                'name' => '柳井市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            116 => 
            array (
                'id' => 1117,
                'pref' => 35,
                'name' => '美祢市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            117 => 
            array (
                'id' => 1118,
                'pref' => 35,
                'name' => '周南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            118 => 
            array (
                'id' => 1119,
                'pref' => 35,
                'name' => '山陽小野田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            119 => 
            array (
                'id' => 1120,
                'pref' => 35,
                'name' => '大島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            120 => 
            array (
                'id' => 1121,
                'pref' => 35,
                'name' => '玖珂郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            121 => 
            array (
                'id' => 1122,
                'pref' => 35,
                'name' => '熊毛郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            122 => 
            array (
                'id' => 1123,
                'pref' => 35,
                'name' => '阿武郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            123 => 
            array (
                'id' => 1124,
                'pref' => 36,
                'name' => '徳島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            124 => 
            array (
                'id' => 1125,
                'pref' => 36,
                'name' => '鳴門市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            125 => 
            array (
                'id' => 1126,
                'pref' => 36,
                'name' => '小松島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            126 => 
            array (
                'id' => 1127,
                'pref' => 36,
                'name' => '阿南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            127 => 
            array (
                'id' => 1128,
                'pref' => 36,
                'name' => '吉野川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            128 => 
            array (
                'id' => 1129,
                'pref' => 36,
                'name' => '阿波市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            129 => 
            array (
                'id' => 1130,
                'pref' => 36,
                'name' => '美馬市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            130 => 
            array (
                'id' => 1131,
                'pref' => 36,
                'name' => '三好市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            131 => 
            array (
                'id' => 1132,
                'pref' => 36,
                'name' => '勝浦郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            132 => 
            array (
                'id' => 1133,
                'pref' => 36,
                'name' => '名東郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            133 => 
            array (
                'id' => 1134,
                'pref' => 36,
                'name' => '名西郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            134 => 
            array (
                'id' => 1135,
                'pref' => 36,
                'name' => '那賀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            135 => 
            array (
                'id' => 1136,
                'pref' => 36,
                'name' => '海部郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            136 => 
            array (
                'id' => 1137,
                'pref' => 36,
                'name' => '板野郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            137 => 
            array (
                'id' => 1138,
                'pref' => 36,
                'name' => '美馬郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            138 => 
            array (
                'id' => 1139,
                'pref' => 36,
                'name' => '三好郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            139 => 
            array (
                'id' => 1140,
                'pref' => 37,
                'name' => '高松市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            140 => 
            array (
                'id' => 1141,
                'pref' => 37,
                'name' => '丸亀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            141 => 
            array (
                'id' => 1142,
                'pref' => 37,
                'name' => '坂出市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            142 => 
            array (
                'id' => 1143,
                'pref' => 37,
                'name' => '善通寺市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            143 => 
            array (
                'id' => 1144,
                'pref' => 37,
                'name' => '観音寺市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            144 => 
            array (
                'id' => 1145,
                'pref' => 37,
                'name' => 'さぬき市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            145 => 
            array (
                'id' => 1146,
                'pref' => 37,
                'name' => '東かがわ市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            146 => 
            array (
                'id' => 1147,
                'pref' => 37,
                'name' => '三豊市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            147 => 
            array (
                'id' => 1148,
                'pref' => 37,
                'name' => '小豆郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            148 => 
            array (
                'id' => 1149,
                'pref' => 37,
                'name' => '木田郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            149 => 
            array (
                'id' => 1150,
                'pref' => 37,
                'name' => '香川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            150 => 
            array (
                'id' => 1151,
                'pref' => 37,
                'name' => '綾歌郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            151 => 
            array (
                'id' => 1152,
                'pref' => 37,
                'name' => '仲多度郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            152 => 
            array (
                'id' => 1153,
                'pref' => 38,
                'name' => '松山市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            153 => 
            array (
                'id' => 1154,
                'pref' => 38,
                'name' => '今治市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            154 => 
            array (
                'id' => 1155,
                'pref' => 38,
                'name' => '宇和島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            155 => 
            array (
                'id' => 1156,
                'pref' => 38,
                'name' => '八幡浜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            156 => 
            array (
                'id' => 1157,
                'pref' => 38,
                'name' => '新居浜市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            157 => 
            array (
                'id' => 1158,
                'pref' => 38,
                'name' => '西条市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            158 => 
            array (
                'id' => 1159,
                'pref' => 38,
                'name' => '大洲市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            159 => 
            array (
                'id' => 1160,
                'pref' => 38,
                'name' => '伊予市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            160 => 
            array (
                'id' => 1161,
                'pref' => 38,
                'name' => '四国中央市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            161 => 
            array (
                'id' => 1162,
                'pref' => 38,
                'name' => '西予市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            162 => 
            array (
                'id' => 1163,
                'pref' => 38,
                'name' => '東温市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            163 => 
            array (
                'id' => 1164,
                'pref' => 38,
                'name' => '越智郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            164 => 
            array (
                'id' => 1165,
                'pref' => 38,
                'name' => '上浮穴郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            165 => 
            array (
                'id' => 1166,
                'pref' => 38,
                'name' => '伊予郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            166 => 
            array (
                'id' => 1167,
                'pref' => 38,
                'name' => '喜多郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            167 => 
            array (
                'id' => 1168,
                'pref' => 38,
                'name' => '西宇和郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            168 => 
            array (
                'id' => 1169,
                'pref' => 38,
                'name' => '北宇和郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            169 => 
            array (
                'id' => 1170,
                'pref' => 38,
                'name' => '南宇和郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            170 => 
            array (
                'id' => 1171,
                'pref' => 39,
                'name' => '高知市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            171 => 
            array (
                'id' => 1172,
                'pref' => 39,
                'name' => '室戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            172 => 
            array (
                'id' => 1173,
                'pref' => 39,
                'name' => '安芸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            173 => 
            array (
                'id' => 1174,
                'pref' => 39,
                'name' => '南国市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            174 => 
            array (
                'id' => 1175,
                'pref' => 39,
                'name' => '土佐市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            175 => 
            array (
                'id' => 1176,
                'pref' => 39,
                'name' => '須崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            176 => 
            array (
                'id' => 1177,
                'pref' => 39,
                'name' => '宿毛市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            177 => 
            array (
                'id' => 1178,
                'pref' => 39,
                'name' => '土佐清水市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            178 => 
            array (
                'id' => 1179,
                'pref' => 39,
                'name' => '四万十市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            179 => 
            array (
                'id' => 1180,
                'pref' => 39,
                'name' => '香南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            180 => 
            array (
                'id' => 1181,
                'pref' => 39,
                'name' => '香美市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            181 => 
            array (
                'id' => 1182,
                'pref' => 39,
                'name' => '安芸郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            182 => 
            array (
                'id' => 1183,
                'pref' => 39,
                'name' => '長岡郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            183 => 
            array (
                'id' => 1184,
                'pref' => 39,
                'name' => '土佐郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            184 => 
            array (
                'id' => 1185,
                'pref' => 39,
                'name' => '吾川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            185 => 
            array (
                'id' => 1186,
                'pref' => 39,
                'name' => '高岡郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            186 => 
            array (
                'id' => 1187,
                'pref' => 39,
                'name' => '幡多郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            187 => 
            array (
                'id' => 1188,
                'pref' => 40,
                'name' => '北九州市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            188 => 
            array (
                'id' => 1189,
                'pref' => 40,
                'name' => '北九州市門司区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            189 => 
            array (
                'id' => 1190,
                'pref' => 40,
                'name' => '北九州市若松区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            190 => 
            array (
                'id' => 1191,
                'pref' => 40,
                'name' => '北九州市戸畑区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            191 => 
            array (
                'id' => 1192,
                'pref' => 40,
                'name' => '北九州市小倉北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            192 => 
            array (
                'id' => 1193,
                'pref' => 40,
                'name' => '北九州市小倉南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            193 => 
            array (
                'id' => 1194,
                'pref' => 40,
                'name' => '北九州市八幡東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            194 => 
            array (
                'id' => 1195,
                'pref' => 40,
                'name' => '北九州市八幡西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            195 => 
            array (
                'id' => 1196,
                'pref' => 40,
                'name' => '福岡市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            196 => 
            array (
                'id' => 1197,
                'pref' => 40,
                'name' => '福岡市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            197 => 
            array (
                'id' => 1198,
                'pref' => 40,
                'name' => '福岡市博多区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            198 => 
            array (
                'id' => 1199,
                'pref' => 40,
                'name' => '福岡市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            199 => 
            array (
                'id' => 1200,
                'pref' => 40,
                'name' => '福岡市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            200 => 
            array (
                'id' => 1201,
                'pref' => 40,
                'name' => '福岡市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            201 => 
            array (
                'id' => 1202,
                'pref' => 40,
                'name' => '福岡市城南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            202 => 
            array (
                'id' => 1203,
                'pref' => 40,
                'name' => '福岡市早良区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            203 => 
            array (
                'id' => 1204,
                'pref' => 40,
                'name' => '大牟田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            204 => 
            array (
                'id' => 1205,
                'pref' => 40,
                'name' => '久留米市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            205 => 
            array (
                'id' => 1206,
                'pref' => 40,
                'name' => '直方市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            206 => 
            array (
                'id' => 1207,
                'pref' => 40,
                'name' => '飯塚市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            207 => 
            array (
                'id' => 1208,
                'pref' => 40,
                'name' => '田川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            208 => 
            array (
                'id' => 1209,
                'pref' => 40,
                'name' => '柳川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            209 => 
            array (
                'id' => 1210,
                'pref' => 40,
                'name' => '八女市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            210 => 
            array (
                'id' => 1211,
                'pref' => 40,
                'name' => '筑後市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            211 => 
            array (
                'id' => 1212,
                'pref' => 40,
                'name' => '大川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            212 => 
            array (
                'id' => 1213,
                'pref' => 40,
                'name' => '行橋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            213 => 
            array (
                'id' => 1214,
                'pref' => 40,
                'name' => '豊前市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            214 => 
            array (
                'id' => 1215,
                'pref' => 40,
                'name' => '中間市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            215 => 
            array (
                'id' => 1216,
                'pref' => 40,
                'name' => '小郡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            216 => 
            array (
                'id' => 1217,
                'pref' => 40,
                'name' => '筑紫野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            217 => 
            array (
                'id' => 1218,
                'pref' => 40,
                'name' => '春日市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            218 => 
            array (
                'id' => 1219,
                'pref' => 40,
                'name' => '大野城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            219 => 
            array (
                'id' => 1220,
                'pref' => 40,
                'name' => '宗像市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            220 => 
            array (
                'id' => 1221,
                'pref' => 40,
                'name' => '太宰府市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            221 => 
            array (
                'id' => 1222,
                'pref' => 40,
                'name' => '古賀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            222 => 
            array (
                'id' => 1223,
                'pref' => 40,
                'name' => '福津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            223 => 
            array (
                'id' => 1224,
                'pref' => 40,
                'name' => 'うきは市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            224 => 
            array (
                'id' => 1225,
                'pref' => 40,
                'name' => '宮若市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            225 => 
            array (
                'id' => 1226,
                'pref' => 40,
                'name' => '嘉麻市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            226 => 
            array (
                'id' => 1227,
                'pref' => 40,
                'name' => '朝倉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            227 => 
            array (
                'id' => 1228,
                'pref' => 40,
                'name' => 'みやま市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            228 => 
            array (
                'id' => 1229,
                'pref' => 40,
                'name' => '糸島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            229 => 
            array (
                'id' => 1230,
                'pref' => 40,
                'name' => '那珂川市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            230 => 
            array (
                'id' => 1231,
                'pref' => 40,
                'name' => '筑紫郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            231 => 
            array (
                'id' => 1232,
                'pref' => 40,
                'name' => '糟屋郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            232 => 
            array (
                'id' => 1233,
                'pref' => 40,
                'name' => '遠賀郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            233 => 
            array (
                'id' => 1234,
                'pref' => 40,
                'name' => '鞍手郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            234 => 
            array (
                'id' => 1235,
                'pref' => 40,
                'name' => '嘉穂郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            235 => 
            array (
                'id' => 1236,
                'pref' => 40,
                'name' => '朝倉郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            236 => 
            array (
                'id' => 1237,
                'pref' => 40,
                'name' => '三井郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            237 => 
            array (
                'id' => 1238,
                'pref' => 40,
                'name' => '三潴郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            238 => 
            array (
                'id' => 1239,
                'pref' => 40,
                'name' => '八女郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            239 => 
            array (
                'id' => 1240,
                'pref' => 40,
                'name' => '田川郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            240 => 
            array (
                'id' => 1241,
                'pref' => 40,
                'name' => '京都郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            241 => 
            array (
                'id' => 1242,
                'pref' => 40,
                'name' => '築上郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            242 => 
            array (
                'id' => 1243,
                'pref' => 41,
                'name' => '佐賀市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            243 => 
            array (
                'id' => 1244,
                'pref' => 41,
                'name' => '唐津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            244 => 
            array (
                'id' => 1245,
                'pref' => 41,
                'name' => '鳥栖市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            245 => 
            array (
                'id' => 1246,
                'pref' => 41,
                'name' => '多久市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            246 => 
            array (
                'id' => 1247,
                'pref' => 41,
                'name' => '伊万里市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            247 => 
            array (
                'id' => 1248,
                'pref' => 41,
                'name' => '武雄市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            248 => 
            array (
                'id' => 1249,
                'pref' => 41,
                'name' => '鹿島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            249 => 
            array (
                'id' => 1250,
                'pref' => 41,
                'name' => '小城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            250 => 
            array (
                'id' => 1251,
                'pref' => 41,
                'name' => '嬉野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            251 => 
            array (
                'id' => 1252,
                'pref' => 41,
                'name' => '神埼市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            252 => 
            array (
                'id' => 1253,
                'pref' => 41,
                'name' => '神埼郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            253 => 
            array (
                'id' => 1254,
                'pref' => 41,
                'name' => '三養基郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            254 => 
            array (
                'id' => 1255,
                'pref' => 41,
                'name' => '東松浦郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            255 => 
            array (
                'id' => 1256,
                'pref' => 41,
                'name' => '西松浦郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            256 => 
            array (
                'id' => 1257,
                'pref' => 41,
                'name' => '杵島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            257 => 
            array (
                'id' => 1258,
                'pref' => 41,
                'name' => '藤津郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            258 => 
            array (
                'id' => 1259,
                'pref' => 42,
                'name' => '長崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            259 => 
            array (
                'id' => 1260,
                'pref' => 42,
                'name' => '佐世保市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            260 => 
            array (
                'id' => 1261,
                'pref' => 42,
                'name' => '島原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            261 => 
            array (
                'id' => 1262,
                'pref' => 42,
                'name' => '諫早市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            262 => 
            array (
                'id' => 1263,
                'pref' => 42,
                'name' => '大村市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            263 => 
            array (
                'id' => 1264,
                'pref' => 42,
                'name' => '平戸市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            264 => 
            array (
                'id' => 1265,
                'pref' => 42,
                'name' => '松浦市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            265 => 
            array (
                'id' => 1266,
                'pref' => 42,
                'name' => '対馬市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            266 => 
            array (
                'id' => 1267,
                'pref' => 42,
                'name' => '壱岐市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            267 => 
            array (
                'id' => 1268,
                'pref' => 42,
                'name' => '五島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            268 => 
            array (
                'id' => 1269,
                'pref' => 42,
                'name' => '西海市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            269 => 
            array (
                'id' => 1270,
                'pref' => 42,
                'name' => '雲仙市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            270 => 
            array (
                'id' => 1271,
                'pref' => 42,
                'name' => '南島原市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            271 => 
            array (
                'id' => 1272,
                'pref' => 42,
                'name' => '西彼杵郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            272 => 
            array (
                'id' => 1273,
                'pref' => 42,
                'name' => '東彼杵郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            273 => 
            array (
                'id' => 1274,
                'pref' => 42,
                'name' => '北松浦郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            274 => 
            array (
                'id' => 1275,
                'pref' => 42,
                'name' => '南松浦郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            275 => 
            array (
                'id' => 1276,
                'pref' => 43,
                'name' => '熊本市',
                'area_type' => 2,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            276 => 
            array (
                'id' => 1277,
                'pref' => 43,
                'name' => '熊本市中央区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            277 => 
            array (
                'id' => 1278,
                'pref' => 43,
                'name' => '熊本市東区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            278 => 
            array (
                'id' => 1279,
                'pref' => 43,
                'name' => '熊本市西区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            279 => 
            array (
                'id' => 1280,
                'pref' => 43,
                'name' => '熊本市南区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            280 => 
            array (
                'id' => 1281,
                'pref' => 43,
                'name' => '熊本市北区',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            281 => 
            array (
                'id' => 1282,
                'pref' => 43,
                'name' => '八代市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            282 => 
            array (
                'id' => 1283,
                'pref' => 43,
                'name' => '人吉市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            283 => 
            array (
                'id' => 1284,
                'pref' => 43,
                'name' => '荒尾市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            284 => 
            array (
                'id' => 1285,
                'pref' => 43,
                'name' => '水俣市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            285 => 
            array (
                'id' => 1286,
                'pref' => 43,
                'name' => '玉名市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            286 => 
            array (
                'id' => 1287,
                'pref' => 43,
                'name' => '山鹿市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            287 => 
            array (
                'id' => 1288,
                'pref' => 43,
                'name' => '菊池市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            288 => 
            array (
                'id' => 1289,
                'pref' => 43,
                'name' => '宇土市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            289 => 
            array (
                'id' => 1290,
                'pref' => 43,
                'name' => '上天草市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            290 => 
            array (
                'id' => 1291,
                'pref' => 43,
                'name' => '宇城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            291 => 
            array (
                'id' => 1292,
                'pref' => 43,
                'name' => '阿蘇市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            292 => 
            array (
                'id' => 1293,
                'pref' => 43,
                'name' => '天草市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            293 => 
            array (
                'id' => 1294,
                'pref' => 43,
                'name' => '合志市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            294 => 
            array (
                'id' => 1295,
                'pref' => 43,
                'name' => '下益城郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            295 => 
            array (
                'id' => 1296,
                'pref' => 43,
                'name' => '玉名郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            296 => 
            array (
                'id' => 1297,
                'pref' => 43,
                'name' => '鹿本郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            297 => 
            array (
                'id' => 1298,
                'pref' => 43,
                'name' => '菊池郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            298 => 
            array (
                'id' => 1299,
                'pref' => 43,
                'name' => '阿蘇郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            299 => 
            array (
                'id' => 1300,
                'pref' => 43,
                'name' => '上益城郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            300 => 
            array (
                'id' => 1301,
                'pref' => 43,
                'name' => '八代郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            301 => 
            array (
                'id' => 1302,
                'pref' => 43,
                'name' => '葦北郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            302 => 
            array (
                'id' => 1303,
                'pref' => 43,
                'name' => '球磨郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            303 => 
            array (
                'id' => 1304,
                'pref' => 43,
                'name' => '天草郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            304 => 
            array (
                'id' => 1305,
                'pref' => 44,
                'name' => '大分市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            305 => 
            array (
                'id' => 1306,
                'pref' => 44,
                'name' => '別府市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            306 => 
            array (
                'id' => 1307,
                'pref' => 44,
                'name' => '中津市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            307 => 
            array (
                'id' => 1308,
                'pref' => 44,
                'name' => '日田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            308 => 
            array (
                'id' => 1309,
                'pref' => 44,
                'name' => '佐伯市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            309 => 
            array (
                'id' => 1310,
                'pref' => 44,
                'name' => '臼杵市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            310 => 
            array (
                'id' => 1311,
                'pref' => 44,
                'name' => '津久見市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            311 => 
            array (
                'id' => 1312,
                'pref' => 44,
                'name' => '竹田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            312 => 
            array (
                'id' => 1313,
                'pref' => 44,
                'name' => '豊後高田市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            313 => 
            array (
                'id' => 1314,
                'pref' => 44,
                'name' => '杵築市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            314 => 
            array (
                'id' => 1315,
                'pref' => 44,
                'name' => '宇佐市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            315 => 
            array (
                'id' => 1316,
                'pref' => 44,
                'name' => '豊後大野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            316 => 
            array (
                'id' => 1317,
                'pref' => 44,
                'name' => '由布市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            317 => 
            array (
                'id' => 1318,
                'pref' => 44,
                'name' => '国東市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            318 => 
            array (
                'id' => 1319,
                'pref' => 44,
                'name' => '東国東郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            319 => 
            array (
                'id' => 1320,
                'pref' => 44,
                'name' => '速見郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            320 => 
            array (
                'id' => 1321,
                'pref' => 44,
                'name' => '玖珠郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            321 => 
            array (
                'id' => 1322,
                'pref' => 45,
                'name' => '宮崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            322 => 
            array (
                'id' => 1323,
                'pref' => 45,
                'name' => '都城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            323 => 
            array (
                'id' => 1324,
                'pref' => 45,
                'name' => '延岡市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            324 => 
            array (
                'id' => 1325,
                'pref' => 45,
                'name' => '日南市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            325 => 
            array (
                'id' => 1326,
                'pref' => 45,
                'name' => '小林市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            326 => 
            array (
                'id' => 1327,
                'pref' => 45,
                'name' => '日向市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            327 => 
            array (
                'id' => 1328,
                'pref' => 45,
                'name' => '串間市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            328 => 
            array (
                'id' => 1329,
                'pref' => 45,
                'name' => '西都市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            329 => 
            array (
                'id' => 1330,
                'pref' => 45,
                'name' => 'えびの市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            330 => 
            array (
                'id' => 1331,
                'pref' => 45,
                'name' => '宮崎郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            331 => 
            array (
                'id' => 1332,
                'pref' => 45,
                'name' => '北諸県郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            332 => 
            array (
                'id' => 1333,
                'pref' => 45,
                'name' => '西諸県郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            333 => 
            array (
                'id' => 1334,
                'pref' => 45,
                'name' => '東諸県郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            334 => 
            array (
                'id' => 1335,
                'pref' => 45,
                'name' => '児湯郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            335 => 
            array (
                'id' => 1336,
                'pref' => 45,
                'name' => '東臼杵郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            336 => 
            array (
                'id' => 1337,
                'pref' => 45,
                'name' => '西臼杵郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            337 => 
            array (
                'id' => 1338,
                'pref' => 46,
                'name' => '鹿児島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            338 => 
            array (
                'id' => 1339,
                'pref' => 46,
                'name' => '鹿屋市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            339 => 
            array (
                'id' => 1340,
                'pref' => 46,
                'name' => '枕崎市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            340 => 
            array (
                'id' => 1341,
                'pref' => 46,
                'name' => '阿久根市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            341 => 
            array (
                'id' => 1342,
                'pref' => 46,
                'name' => '出水市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            342 => 
            array (
                'id' => 1343,
                'pref' => 46,
                'name' => '指宿市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            343 => 
            array (
                'id' => 1344,
                'pref' => 46,
                'name' => '西之表市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            344 => 
            array (
                'id' => 1345,
                'pref' => 46,
                'name' => '垂水市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            345 => 
            array (
                'id' => 1346,
                'pref' => 46,
                'name' => '薩摩川内市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            346 => 
            array (
                'id' => 1347,
                'pref' => 46,
                'name' => '日置市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            347 => 
            array (
                'id' => 1348,
                'pref' => 46,
                'name' => '曽於市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            348 => 
            array (
                'id' => 1349,
                'pref' => 46,
                'name' => '霧島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            349 => 
            array (
                'id' => 1350,
                'pref' => 46,
                'name' => 'いちき串木野市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            350 => 
            array (
                'id' => 1351,
                'pref' => 46,
                'name' => '南さつま市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            351 => 
            array (
                'id' => 1352,
                'pref' => 46,
                'name' => '志布志市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            352 => 
            array (
                'id' => 1353,
                'pref' => 46,
                'name' => '奄美市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            353 => 
            array (
                'id' => 1354,
                'pref' => 46,
                'name' => '南九州市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            354 => 
            array (
                'id' => 1355,
                'pref' => 46,
                'name' => '伊佐市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            355 => 
            array (
                'id' => 1356,
                'pref' => 46,
                'name' => '姶良市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            356 => 
            array (
                'id' => 1357,
                'pref' => 46,
                'name' => '鹿児島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            357 => 
            array (
                'id' => 1358,
                'pref' => 46,
                'name' => '薩摩郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            358 => 
            array (
                'id' => 1359,
                'pref' => 46,
                'name' => '出水郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            359 => 
            array (
                'id' => 1360,
                'pref' => 46,
                'name' => '姶良郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            360 => 
            array (
                'id' => 1361,
                'pref' => 46,
                'name' => '曽於郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            361 => 
            array (
                'id' => 1362,
                'pref' => 46,
                'name' => '肝属郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            362 => 
            array (
                'id' => 1363,
                'pref' => 46,
                'name' => '熊毛郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            363 => 
            array (
                'id' => 1364,
                'pref' => 46,
                'name' => '大島郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            364 => 
            array (
                'id' => 1365,
                'pref' => 47,
                'name' => '那覇市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            365 => 
            array (
                'id' => 1366,
                'pref' => 47,
                'name' => '宜野湾市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            366 => 
            array (
                'id' => 1367,
                'pref' => 47,
                'name' => '石垣市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            367 => 
            array (
                'id' => 1368,
                'pref' => 47,
                'name' => '浦添市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            368 => 
            array (
                'id' => 1369,
                'pref' => 47,
                'name' => '名護市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            369 => 
            array (
                'id' => 1370,
                'pref' => 47,
                'name' => '糸満市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            370 => 
            array (
                'id' => 1371,
                'pref' => 47,
                'name' => '沖縄市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            371 => 
            array (
                'id' => 1372,
                'pref' => 47,
                'name' => '豊見城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            372 => 
            array (
                'id' => 1373,
                'pref' => 47,
                'name' => 'うるま市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            373 => 
            array (
                'id' => 1374,
                'pref' => 47,
                'name' => '宮古島市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            374 => 
            array (
                'id' => 1375,
                'pref' => 47,
                'name' => '南城市',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            375 => 
            array (
                'id' => 1376,
                'pref' => 47,
                'name' => '国頭郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            376 => 
            array (
                'id' => 1377,
                'pref' => 47,
                'name' => '中頭郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            377 => 
            array (
                'id' => 1378,
                'pref' => 47,
                'name' => '島尻郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            378 => 
            array (
                'id' => 1379,
                'pref' => 47,
                'name' => '宮古郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            379 => 
            array (
                'id' => 1380,
                'pref' => 47,
                'name' => '八重山郡',
                'area_type' => 1,
                'del_flg' => 1,
                'created_at' => '2021-03-05 00:26:53',
                'updated_at' => '2021-03-05 00:26:53',
            ),
            380 => 
            array (
                'id' => 1381,
                'pref' => 13,
                'name' => '東京23区全域',
                'area_type' => 2,
                'del_flg' => 0,
                'created_at' => '2021-05-25 23:21:49',
                'updated_at' => '2021-05-25 23:21:49',
            ),
        ));
        
        
    }
}