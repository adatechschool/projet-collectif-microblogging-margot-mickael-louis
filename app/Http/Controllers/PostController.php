<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);

        return view('index', compact('posts'));
    }
    public function uniquePost($id = null){
        // Si $id est null, rediriger ou afficher une erreur selon vos besoins
        if ($id === null) {
            // Exemple de redirection vers la page d'index
            return redirect()->route('index');
        }
    
        // Sinon, récupérer le post correspondant à l'ID
        $post = Post::find($id);
    
        // Vérifier si le post a été trouvé
        if ($post === null) {
            // Exemple de redirection vers la page d'index en cas de post non trouvé
            return redirect()->route('index')->with('error', 'Post non trouvé');
        }
    
        // Afficher la vue avec le post unique
        return view('uniquepost', compact('post'));
    }
    
    

    
}