<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ThumbNailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author' => fake()->name(),
            'thumbnailURL' => 'https://image.shutterstock.com/image-photo/kitten-head-paws-peeking-over-260nw-1869172456.jpg', // password
            'submitted_by' => "submitted by",
        ];
    }
}
