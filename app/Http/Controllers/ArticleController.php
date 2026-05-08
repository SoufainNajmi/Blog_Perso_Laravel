<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //  public function index()
   public function index()// Affiche la liste des articles
    {
        $articles = Article::all(); // Récupère tous les articles de la base de données
        return view('articles.index', compact('articles'));// Affiche la vue avec les articles
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
