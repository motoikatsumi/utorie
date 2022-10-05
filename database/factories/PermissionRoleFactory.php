<?php

namespace Database\Factories;

use App\Models\PermissionRole;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionRoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PermissionRole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => \App\Models\Role::all()->random()->id,
            'permission_id' => \App\Models\Permission::all()->random()->id
        ];
    }
}
