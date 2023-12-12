<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostCardTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_affichage_page_posts(): void
    {
        $user = User::factory()->create();

        $post = Post::factory()->create(['user_id' => $user->id,'description' => $user->id]);


        $response = $this->actingAs($user)->get('/posts');

        $response->assertStatus(200);
        $response->assertSee(e($user->name)); // On teste si le nom de l'utilisateur pour un post, s'affiche sur la page.
        $response->assertSee(e($user->description));
    }
}
