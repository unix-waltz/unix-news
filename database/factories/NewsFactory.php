<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(),
            "slug" => $this->faker->slug(),
            "excerpt" => $this->faker->paragraph(),
            "body" => $this->faker->paragraph(mt_rand(10,10)),
            "user_id" => mt_rand(1,10),
            "category_id" => mt_rand(1,4)
        ];
    }
}
