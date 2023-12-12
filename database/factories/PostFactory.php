<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
            "image" => $this->faker->imageUrl,
            "description" => $this->faker->sentence,
            "likes" => $this->faker->randomDigit,
            "user_id" => $this->faker->randomElement([1,2,3]),
        ];
    }
}
