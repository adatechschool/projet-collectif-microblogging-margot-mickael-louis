<?php

// CommentController.php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('post', 'author')->get();

        return view('comments.index', compact('comments'));
    }
}

