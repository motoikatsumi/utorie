<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PermissionRole::factory(10)->create();
    }
}
