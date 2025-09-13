<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
 
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'categoty_id'=>$this->faker->numberBetween(1,2),
            'price'=>$this->faker->randomFloat(2, 1000, 100000),
            'description'=>$this->faker->text(),
            'img'=>$this->faker->imageUrl(),
            'is_active'=>$this->faker->boolean(),

        ];
    }
}
