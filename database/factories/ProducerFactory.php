<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProducerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pro_name' => $this->faker->name(),
            //
        ];
    }
}