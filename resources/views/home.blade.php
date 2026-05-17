<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>
<body>
     @include('partials.navbar') {{-- Inclure la barre de navigation --}}

    <main id="main">
        @yield('content') // Contenu spécifique à chaque page
    </main>

    {{-- Inclure la section "À propos" --}}
    @include('partials.propos')
   {{-- Inclure la section "À propos" --}}
    @include('partials.footer') {{-- Inclure le pied de page --}}


</body>
</html>
