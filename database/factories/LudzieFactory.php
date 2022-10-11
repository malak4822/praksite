<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LudzieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imie' => $this->faker->sentence(),
            'nazwisko' => "koty, psy, zwierzeta",
            'wiek' =>  rand(10, 80),
            'wzrost' => rand(100, 199),
            'autyzm' => false,
        ];
    }
}
