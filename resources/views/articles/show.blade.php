{{-- resources/views/posts/show.blade.php --}}
@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <article>
        <h1>{{ $article->title }}</h1>

        <div class="meta">
            Publié le {{ $article->created_at->format('d/m/Y à H:i') }}
            @if($article->updated_at != $article->created_at)
                – Mis à jour le {{ $article->updated_at->format('d/m/Y') }}
            @endif
        </div>

        <div class="content">
            {!! nl2br(e($article->body)) !!}
        </div>
    </article>

    <p><a href="{{ route('home') }}">← Retour à accueil</a></p>
@endsection
