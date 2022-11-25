<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'year' => $this->faker->sentence(),
            'duration' => $this->faker->sentence(),
            'studio' => $this->faker->sentence(),
            'story' => $this->faker->paragraph(5),
            'details' => $this->faker->url(),
            'trailer' => $this->faker->url(),
        ];
    }
}
