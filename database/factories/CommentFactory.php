<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $postIds = Post::pluck("id");
        $ids = User::pluck("id");
        return [
            "content" => $this->faker->sentence,
            "likes" => $this->faker->randomDigit,
            "user_id" => $this->faker->randomElement($ids),
            "post_id" => $this->faker->randomElement($postIds)];
    }
}