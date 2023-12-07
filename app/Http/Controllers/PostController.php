<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index()
    {   
        $posts = Post::paginate(5);

        // trie et affiche 5 posts par page
        return view('index', compact('posts'));
    }
    public function uniquePost($id = null)
    {
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
    public function create(Request $request): RedirectResponse
    {   
        // vécupère la requête lancée par le formulaire et vérifie les données
        $request->validate([
            'image' => 'required',
            'description' => 'required',
        ]);

        // crée une instance du modèle
        $post = new Post();
        $post->image = $request->image;

        //récupère l'id de l'utilisateur connecté
        $post->user_id = auth()->id();
        $post->description = $request->description;
        $post->likes = 0;

        //sauvegarde le nouveau post dans la BDD
        $post->save();

        //redirige sur la page
        return redirect()->route('index')->with('success', 'post publié');
    }



}