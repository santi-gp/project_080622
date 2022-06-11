<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' =>  $this->faker->paragraph(),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'age' => $this->faker->numberBetween(20,100),
        ];
    }
}
