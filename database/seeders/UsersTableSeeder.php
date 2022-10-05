<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Utorie',
                'username' => 'admin',
                'email' => 'utoriefynd@utorie.jp',
                'email_verified_at' => '2020-12-03 00:19:41',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role_id' => '3',
                'status' => 1,
                'remember_token' => 'fQCShBAmQG',
                'created_at' => '2020-12-03 00:19:41',
                'updated_at' => '2020-12-03 00:19:41',
            ),
        ));
        
        
    }
}