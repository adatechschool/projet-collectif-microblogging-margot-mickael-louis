<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use GuzzleHttp\Psr7\Request;
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

  public function test_acces_et_render_posts(): void
  {
    // crée un user fictif
    $user = User::factory()->create();
    // récupère les postes paginés (!important)
    $posts = Post::paginate(5);

    $response = $this
      // "en tant qu'user connecté" sinon erreur au niveau de l'auth.
      ->actingAs($user)
      // requête vers la route
      ->get('/posts');

    // test de la réponse à la requête
    $response->assertOk();

    // test du rendu de la vue Index, en tant qu'user connecté, avec les posts fournis
    $view = $this->actingAs($user)->view('index', ['posts' => $posts]);

    // est-ce que les propriétés du premier post sont affichées ?
    $view->assertSee($posts[0]->description);
    $view->assertSee($posts[0]->image);
    $view->assertSee($posts[0]->user_id);
    $view->assertSee($posts[0]->likes);
    $view->assertSee($posts[0]->comments);
  }

  public function test_acces_et_render_post_unique(): void
  {

    $user = User::factory()->create();
    $post = Post::factory()->create();

    $response = $this
      ->actingAs($user)
      ->get('/posts/1');

    $response->assertOk();

    // test du rendu de la vue 'uniquepost' avec le post crée plus haut
    $view = $this->actingAs($user)->view('uniquepost', ['post' => $post]);

    // est-ce que les propriétés du post sont affichées ?
    $view->assertSee($post->description);
    $view->assertSee($post->image);
    $view->assertSee($post->user_id);
    $view->assertSee($post->likes);
    $view->assertSee($post->comments);
  }

  // public function test_create_post(): void
  // {
  //   $user = User::factory()->create();
  //   $post = Post::factory()->create();


  //   $response = $this
  //     ->actingAs($user)
  //     ->POST('create', [
  //       'image' => $post->image,
  //       'decription' => $post->description,
  //     ]);
  //   echo ($response->getContent());
  //   $response->assertOk();
  // }
}


