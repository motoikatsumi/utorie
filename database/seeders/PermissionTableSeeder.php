<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Permission();
        $role_employee->name = 'create_store';
        $role_employee->save();

        $role_employee = new Permission();
        $role_employee->name = 'review_store';
        $role_employee->save();
 
        $role_employee = new Permission();
        $role_employee->name = 'update_store';
        $role_employee->save();
 
        $role_manager = new Permission();
        $role_manager->name = 'delete_store';
        $role_manager->save();
    }
}
