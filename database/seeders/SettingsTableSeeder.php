<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin_email',
                'setting_value' => 'phucbui.32199@gmail.com',
                'created_at' => '2021-01-06 20:56:25',
                'updated_at' => '2021-01-06 20:56:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ga_tags',
                'setting_value' => '',
                'created_at' => '2021-01-06 20:56:25',
                'updated_at' => '2021-01-06 20:56:25',
            )
        ));
        
        
    }
}