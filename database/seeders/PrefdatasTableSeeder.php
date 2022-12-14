<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class PrefdatasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prefdatas')->delete();
        
        \DB::table('prefdatas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '北海道',
                'pref_code' => 1,
                'search_text' => '北海道',
                'url_text' => 'hokkaido',
                'map_area' => '北海道',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '青森県',
                'pref_code' => 2,
                'search_text' => '青森県',
                'url_text' => 'aomori',
                'map_area' => '東北',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '岩手県',
                'pref_code' => 3,
                'search_text' => '岩手県',
                'url_text' => 'iwate',
                'map_area' => '東北',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '宮城県',
                'pref_code' => 4,
                'search_text' => '宮城県',
                'url_text' => 'miyagi',
                'map_area' => '東北',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '秋田県',
                'pref_code' => 5,
                'search_text' => '秋田県',
                'url_text' => 'akita',
                'map_area' => '東北',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '山形県',
                'pref_code' => 6,
                'search_text' => '山形県',
                'url_text' => 'yamagata',
                'map_area' => '東北',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '福島県',
                'pref_code' => 7,
                'search_text' => '福島県',
                'url_text' => 'fukushima',
                'map_area' => '東北',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '茨城県',
                'pref_code' => 8,
                'search_text' => '茨城県',
                'url_text' => 'ibaragi',
                'map_area' => '関東',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '栃木県',
                'pref_code' => 9,
                'search_text' => '栃木県',
                'url_text' => 'tochigi',
                'map_area' => '関東',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '群馬県',
                'pref_code' => 10,
                'search_text' => '群馬県',
                'url_text' => 'gunnma',
                'map_area' => '関東',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '埼玉県',
                'pref_code' => 11,
                'search_text' => '埼玉県',
                'url_text' => 'saitama',
                'map_area' => '関東',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '千葉県',
                'pref_code' => 12,
                'search_text' => '千葉県',
                'url_text' => 'chiba',
                'map_area' => '関東',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '東京都',
                'pref_code' => 13,
                'search_text' => '東京都',
                'url_text' => 'tokyo',
                'map_area' => '関東',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '神奈川県',
                'pref_code' => 14,
                'search_text' => '神奈川県',
                'url_text' => 'kanagawa',
                'map_area' => '関東',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '新潟県',
                'pref_code' => 15,
                'search_text' => '新潟県',
                'url_text' => 'niigata',
                'map_area' => '甲信越・北陸',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '富山県',
                'pref_code' => 16,
                'search_text' => '富山県',
                'url_text' => 'toyama',
                'map_area' => '甲信越・北陸',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '石川県',
                'pref_code' => 17,
                'search_text' => '石川県',
                'url_text' => 'ishikawa',
                'map_area' => '甲信越・北陸',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '福井県',
                'pref_code' => 18,
                'search_text' => '福井県',
                'url_text' => 'fukui',
                'map_area' => '甲信越・北陸',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '山梨県',
                'pref_code' => 19,
                'search_text' => '山梨県',
                'url_text' => 'yamanashi',
                'map_area' => '甲信越・北陸',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '長野県',
                'pref_code' => 20,
                'search_text' => '長野県',
                'url_text' => 'nagano',
                'map_area' => '甲信越・北陸',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '岐阜県',
                'pref_code' => 21,
                'search_text' => '岐阜県',
                'url_text' => 'gifu',
                'map_area' => '東海',
                'html' => '東海',
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '静岡県',
                'pref_code' => 22,
                'search_text' => '静岡県',
                'url_text' => 'shizuoka',
                'map_area' => '東海',
                'html' => '東海',
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '愛知県',
                'pref_code' => 23,
                'search_text' => '愛知県',
                'url_text' => 'aichi',
                'map_area' => '東海',
                'html' => '東海',
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '三重県',
                'pref_code' => 24,
                'search_text' => '三重県',
                'url_text' => 'mie',
                'map_area' => '東海',
                'html' => '東海',
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '滋賀県',
                'pref_code' => 25,
                'search_text' => '滋賀県',
                'url_text' => 'shiga',
                'map_area' => '関西',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '京都府',
                'pref_code' => 26,
                'search_text' => '京都府',
                'url_text' => 'kyouto',
                'map_area' => '関西',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '大阪府',
                'pref_code' => 27,
                'search_text' => '大阪府',
                'url_text' => 'oosaka',
                'map_area' => '関西',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '兵庫県',
                'pref_code' => 28,
                'search_text' => '兵庫県',
                'url_text' => 'hyougo',
                'map_area' => '関西',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '奈良県',
                'pref_code' => 29,
                'search_text' => '奈良県',
                'url_text' => 'nara',
                'map_area' => '関西',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '和歌山県',
                'pref_code' => 30,
                'search_text' => '和歌山県',
                'url_text' => 'wakayama',
                'map_area' => '関西',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => '鳥取県',
                'pref_code' => 31,
                'search_text' => '鳥取県',
                'url_text' => 'tottori',
                'map_area' => '中国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => '島根県',
                'pref_code' => 32,
                'search_text' => '島根県',
                'url_text' => 'shimane',
                'map_area' => '中国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => '岡山県',
                'pref_code' => 33,
                'search_text' => '岡山県',
                'url_text' => 'okayama',
                'map_area' => '中国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => '広島県',
                'pref_code' => 34,
                'search_text' => '広島県',
                'url_text' => 'hiroshima',
                'map_area' => '中国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '山口県',
                'pref_code' => 35,
                'search_text' => '山口県',
                'url_text' => 'yamaguchi',
                'map_area' => '中国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => '徳島県',
                'pref_code' => 36,
                'search_text' => '徳島県',
                'url_text' => 'tokushima',
                'map_area' => '四国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => '香川県',
                'pref_code' => 37,
                'search_text' => '香川県',
                'url_text' => 'kagawa',
                'map_area' => '四国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => '愛媛県',
                'pref_code' => 38,
                'search_text' => '愛媛県',
                'url_text' => 'ehime',
                'map_area' => '四国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => '高知県',
                'pref_code' => 39,
                'search_text' => '高知県',
                'url_text' => 'kouchi',
                'map_area' => '四国',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '福岡県',
                'pref_code' => 40,
                'search_text' => '福岡県',
                'url_text' => 'fukuoka',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => '佐賀県',
                'pref_code' => 41,
                'search_text' => '佐賀県',
                'url_text' => 'saga',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => '長崎県',
                'pref_code' => 42,
                'search_text' => '長崎県',
                'url_text' => 'nagasaki',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => '熊本県',
                'pref_code' => 43,
                'search_text' => '熊本県',
                'url_text' => 'kumamoto',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => '大分県',
                'pref_code' => 44,
                'search_text' => '大分県',
                'url_text' => 'ooita',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => '宮崎県',
                'pref_code' => 45,
                'search_text' => '宮崎県',
                'url_text' => 'miyazaki',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => '鹿児島県',
                'pref_code' => 46,
                'search_text' => '鹿児島県',
                'url_text' => 'kagoshima',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => '沖縄県',
                'pref_code' => 47,
                'search_text' => '沖縄県',
                'url_text' => 'okinawa',
                'map_area' => '九州・沖縄',
                'html' => NULL,
                'del_flg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}