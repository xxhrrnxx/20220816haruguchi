<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'postcode' => $this->faker->realText(8),
            'address' => $this->faker->realText(20),
            'building_name' => $this->faker->realText(20),
            'opinion' => $this->faker->realText(20),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
