<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Personnel')</title>
    <style>
        /* Un tout petit CSS pour l’exemple */
        body { font-family: sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; line-height: 1.6; }
        nav a { margin-right: 15px; }
        .post-list { list-style: none; padding: 0; }
        .post-item { margin-bottom: 20px; }
        footer { margin-top: 50px; padding-top: 20px; border-top: 1px solid #ccc; text-align: center; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Accueil</a>
        <a href="{{ route('about') }}">À propos</a>
    </nav>

    <main>
        @yield('content')
    </main>

    {{-- Inclusion du footer --}}
    @include('partials.footer')

</body>
</html>
