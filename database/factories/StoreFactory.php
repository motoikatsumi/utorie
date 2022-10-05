<?php

namespace Database\Factories;

use App\Models\Store;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_name' => $this->faker->name,
            'brand' => $this->faker->name,
            'province' => $this->faker->secondaryAddress,
            'city' => $this->faker->name,
            'address'  => $this->faker->address,
            'direction_description' => $this->faker->text(50),
            'tel'  => $this->faker->phoneNumber,
            'bussiness_hours'  => $this->faker->text(10),
            'regular_holiday'  => $this->faker->text(10),
            'packing_lot' => rand(0,1),
            'license_to_hold' => $this->faker->text(10),
            'store_subject' => $this->faker->text(50),
            'store_content' => $this->faker->text(50),
            'store_img' => $this->faker->text(50),
            'about_store' => $this->faker->text(50),
            'scraping_url' => $this->faker->text(50),
            'affiliate_page' => $this->faker->text(50),
            'affiliate_banner' => $this->faker->text(50),
            'product_id' => rand(1,10),
            'purchase_method' => $this->faker->text(50),
            'other_condition' => $this->faker->text(50),
            'correspondence_area' => $this->faker->text(50),
            'remake' => $this->faker->text(50),
            'display_flg' => rand(0,1),
            'latitude' => $this->faker->text(50),
            'longitude' => $this->faker->text(50),
            'html' => $this->faker->text(50),
            'address_flg' => rand(0,1),
            'noindex' => rand(0,1),
            'delete_flg' => 0,
        ];
    }
}
