<!DOCTYPE html>
<html>
<head>
    <title>Liste Articles</title>
</head>
<body>

<h1>Liste des articles</h1>

@foreach($articles as $article)

    <div>

        <h2>{{ $article->title }}</h2>

        <p>{{ $article->content }}</p>

        <small>
            Auteur : {{ $article->author }}
        </small>

        <hr>

    </div>

@endforeach

</body>
</html>
