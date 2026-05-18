<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Personnel')</title>
</head>
<body>
      @include('partials.navbar')

    <main>
        @yield('content') // Contenu spécifique à chaque page
    </main>
    @include('partials.about')


    @include('partials.footer')

</body>
</html>
