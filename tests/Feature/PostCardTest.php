<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostCardTest extends TestCase
{

    
   /** @test */  
    /**
     * A basic feature test example.
     */
    public function test_affichage_nom_User_posts(): void
    {
        $user = User::factory()->create();

        $post_user_name = Post::factory()->create(['user_id' => $user->id]);


        $response = $this->actingAs($user)->get('/posts');

        $response->assertStatus(200);
        $response->assertSee(e($user->name)); // On teste si le nom de l'utilisateur pour un post, s'affiche sur la page.
    }

    public function test_affichage_description_dun_post(): void 
    {

      //  $user = User::factory()->create();
      //  $post = Post::factory()->create(); // Cela crée un post avec une description fictive
    
      //  $response = $this->actingAs($user)->get('/posts');
    
      //  $response->assertSee(e($post->description));

    }
}

    
