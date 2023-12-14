<?php

namespace App\Http\Controllers;
use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LikesController extends Controller
{
    public function like(Request $request, $likableType, $likableId)
    {
        $likableClass = "App\\Models\\" . ucfirst($likableType);
        $likable = $likableClass::find($likableId);

        if (!$likable) {
            abort(404);
        }

        $like = new Likes([
            'user_id' => Auth::id(),
        ]);

        $likable->likes()->save($like);

        return back(); // Redirige vers la page précédente
    }

    public function unlike(Request $request, $likableType, $likableId)
    {
        $likableClass = "App\\Models\\" . ucfirst($likableType);
        $likable = $likableClass::find($likableId);

        if (!$likable) {
            abort(404);
        }

        $likable->likes()->where('user_id', Auth::id())->delete();

        return back(); // Redirige vers la page précédente
    }
}