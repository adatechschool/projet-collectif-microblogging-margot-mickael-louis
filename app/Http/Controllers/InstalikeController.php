<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class InstalikeController extends Controller
{
    public function insta(){
        $posts = Post::paginate(10);

        return view('instalike', compact('posts'));
    }
}
