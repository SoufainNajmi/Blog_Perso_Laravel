{{-- resources/views/posts/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Accueil Tous les articles')

@section('content')
    <h1>Bienvenue sur mon blog</h1>

    @if($articles->isEmpty())
        <p>Aucun article pour le moment.</p>
    @else
        <ul class="post-list">
            @foreach($articles as $article)
                <li class="post-item">
                    <h2>
                        <a href="{{ route('articles.show', $article->id) }}">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p>{{ Str::limit($article->body, 150) }}</p>
                    <small>Publié le {{ $article->created_at->format('d/m/Y') }}</small>
                </li>
            @endforeach
        </ul>

        {{ $articles->links() }} {{-- Pagination --}}
    @endif
@endsection
