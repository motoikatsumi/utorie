<?php

namespace Database\Factories;

use App\Models\Company;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->name,
            'order_character' => $this->faker->text(50),
            'company_title' => $this->faker->name,
            'company_content'  => $this->faker->text(50),
            'sticking_point' => rand(0,100),
            'possible_area'  => $this->faker->text(50),
            'impossible_area'  => $this->faker->text(50),
            'address'  => $this->faker->address,
            'establishment_date' => date("Y-m-d H:i:s"),
            'representative' => $this->faker->text(10),
            'capital' => $this->faker->text(50),
            'employees' => $this->faker->numberBetween(500, 600),
            'unit_price' => $this->faker->numberBetween(500, 600),
            'construction_results' => $this->faker->numberBetween(500, 600),
            'handling_method' => $this->faker->text(10),
            'after_warranty' => $this->faker->text(50),
            'construction_permit' => $this->faker->text(50),
            'home_page' => rand(1,10),
            'facebook' => "https://vi-vn.facebook.com/",
            'instagram' => "https://vi-vn.facebook.com/",
            'line' => "https://vi-vn.facebook.com/",
            'pinterest' => "https://vi-vn.facebook.com/",
            'youtube' => "https://vi-vn.facebook.com/",
            'email' => "https://vi-vn.facebook.com/",
            'html' => $this->faker->text(50),
            'remarks' => $this->faker->text(50),
            'display_priority' => rand(0,1),
            'display_flg' => rand(0,1),
            'index' => rand(0,1),
            'delete_flg' => 0
        ];
    }
}
