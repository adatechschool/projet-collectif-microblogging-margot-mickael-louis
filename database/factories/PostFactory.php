<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image_url" => $this->faker->imageUrl,
            "description" => $this->faker->sentence,
            "likes" => $this->faker->randomDigit,
            "user_id" => $this->faker->numberBetween(1, User::count()),
        ];
    }
}
