<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_affichage_page_posts(): void
    {
        $response = $this->get('/posts');

        erer
        $response->assertStatus(200);
        $response->assertSee('Rudolph Orn');
    }
}
