<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'types_id'  => mt_rand(1,4),
            'nama'      => $this->faker->sentence(mt_rand(1,4)),
            'slug'      => $this->faker->slug(),
            'harga'     => $this->faker->randomNumber(5, true),
            'deskripsi' => $this->faker->sentence(mt_rand(25,100)),
            'tersedia'  => 'Tersedia'
        ];
    }
}
