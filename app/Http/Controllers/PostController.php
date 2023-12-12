<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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
         // on vérifie que les données contiennent une url OU un fichier ainsi qu'une description
         $request->validate([
            'image' => 'required_without:imageFile',
            'imageFile' => 'required_without:image',
            'description' => 'required',
        ]);
        // si il y a un fichier
        if ($request->file('imageFile')) {
            // on uploade sur Cloudinary et récupère directement l'url
            $uploadedFileUrl = Cloudinary::upload($request->file('imageFile')->getRealPath())->getSecurePath(); // je sais pas pk il reconnait pas la méthode mais ça marche
            // on ajoute l'url aux données
            $request->merge(['image' => $uploadedFileUrl]);
        }
       

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