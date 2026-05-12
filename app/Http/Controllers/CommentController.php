<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Article $article)
    {
        return view('comments.create', compact('article'));
    }
    public function store(Request $request, Article $article)
{
    $request->validate([
        'author' => 'required|max:50',
        'content' => 'required'
    ]);

    $article->comments()->create($request->all());

    return back()->with('success', 'Commentaire ajouté');
}
    //
}
