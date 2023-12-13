<?php

// CommentController.php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('post', 'author')->get();

        return view('comments.index', compact('comments'));
    }
    public function store(Request $request)
    {
        // Validation des données du formulaire (ajustez selon vos besoins)
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string',
        ]);
        // Création d'un nouveau commentaire
        Comment::create([
            'post_id' => $request->input('post_id'),
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
            'likes' => 0,
        ]);

        // Redirection vers la vue index ou une autre vue appropriée
        return redirect()->route('index');
    }
}

