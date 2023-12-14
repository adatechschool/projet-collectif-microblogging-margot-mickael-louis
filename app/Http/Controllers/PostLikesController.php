<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Post;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    public function like(Post $post) {
        $liker = auth()->user();

        $liker->likes()->attach($post);
        return redirect()->route('dashboard')->with('success','likes succesfully');
    }
}
