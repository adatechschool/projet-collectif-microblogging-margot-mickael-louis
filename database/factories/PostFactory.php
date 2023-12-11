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
        //  on choppe un tableau de tous les ids existant (juste la valeur avec "pluck")
        $ids = User::pluck("id");
        return [
            "image_url" => $this->faker->imageUrl,
            "description" => $this->faker->sentence,
            "likes" => $this->faker->randomDigit,
            "image_file" => $this->faker->image,
            "user_id" => $this->faker->randomElement([1,2,3]),
        ];
    }
}
