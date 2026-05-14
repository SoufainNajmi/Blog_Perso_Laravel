<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;// Permet de gérer les requêtes HTTP
use App\Models\Article;

class ArticleController extends Controller
{
    //  public function index()
  public function index()
{
    $articles = Article::latest()->paginate(10);
    return view('articles.index', compact('articles'));
}
   public function show(Article $article) // Affiche un article spécifique
    {
        return view('articles.show', compact('article')); // Affiche la vue avec l'article
    }

    public function create()
    {

        return view('articles.create');
    }

    public function store(Request $request)// Enregistre un nouvel article dans la base de données
    {
        // Validation des données
        $validated = $request->validate([ // Valide les données reçues du formulaire
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:255',
        ]);

        // Création de l'article
        Article::create($validated); //function static create() pour créer un nouvel article avec les données validées

        // Redirection vers la liste des articles
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès !');
    }
}
