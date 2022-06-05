<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopicalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'title'=> $this->faker->sentence(6, true),
           'content'=> $this->faker->paragraph(3, true)
        ];
    }
}
