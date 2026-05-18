@extends('home') {{-- si vous utilisez un layout principal --}}
{{-- OU directement sans layout (mais en incluant navbar et footer manuellement) --}}

{{-- Exemple sans layout dédié (si vous n'avez pas encore de layout) --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Mon Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #2d3436;
            line-height: 1.6;
        }
        /* Réutilisation des styles navbar/footer (vous les avez déjà) */
        .about-hero {
            background: linear-gradient(135deg, #2c3e50 0%, #1e2a36 100%);
            color: white;
            text-align: center;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
        }
        .about-hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .about-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
            margin: 3rem 0;
        }
        .about-left {
            flex: 1;
            min-width: 250px;
            text-align: center;
        }
        .avatar {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #f1c40f;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
        }
        .social-links-about {
            margin-top: 1rem;
        }
        .social-links-about a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            background-color: #2c3e50;
            border-radius: 50%;
            color: white;
            font-size: 1.3rem;
            margin: 0 6px;
            transition: all 0.3s;
            text-decoration: none;
        }
        .social-links-about a:hover {
            background-color: #f1c40f;
            color: #1e2a36;
            transform: translateY(-3px);
        }
        .about-right {
            flex: 2;
        }
        .about-right h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            border-left: 5px solid #f1c40f;
            padding-left: 1rem;
        }
        .about-right p {
            margin-bottom: 1.2rem;
            font-size: 1.05rem;
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin: 1.5rem 0;
        }
        .skill-tag {
            background-color: #2c3e50;
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            font-size: 0.9rem;
            transition: 0.2s;
        }
        .skill-tag:hover {
            background-color: #f1c40f;
            color: #1e2a36;
            transform: scale(1.02);
        }
        .quote {
            font-style: italic;
            background-color: #ecf0f1;
            padding: 1.5rem;
            border-radius: 12px;
            margin: 2rem 0;
            border-left: 4px solid #f1c40f;
            font-size: 1.1rem;
        }
        @media (max-width: 768px) {
            .about-hero h1 { font-size: 2rem; }
            .about-content { flex-direction: column; }
            .about-left { text-align: center; }
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="about-hero">
        <h1>À propos de moi</h1>
        <p>Découvrez l’histoire derrière ce blog, mes passions et ce qui me motive à écrire.</p>
    </div>

    <div class="container">
        <div class="about-content">
            <div class="about-left">
                <!-- Remplacez par votre photo réelle -->
                <img src="https://ui-avatars.com/api/?background=2c3e50&color=f1c40f&size=220&rounded=true&bold=true&name=John+Doe" alt="Avatar" class="avatar">
                <h3 style="margin-top: 1rem;">John Doe</h3>
                <p style="color: #7f8c8d;">Développeur & Rédacteur passionné</p>
                <div class="social-links-about">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-medium-m"></i></a>
                </div>
            </div>
            <div class="about-right">
                <h2>Mon parcours</h2>
                <p>Passionné par l'écriture et le développement web, j'ai créé ce blog en 2025 pour partager mes expériences, tutoriels et réflexions. Avant cela, j'ai travaillé en tant que développeur full-stack, ce qui m'a permis d'acquérir une solide expertise dans les technologies modernes (Laravel, Vue.js, Tailwind).</p>
                <p>Ce blog est un espace d'échange et d'apprentissage continu. Je crois fermement que le partage de connaissances enrichit tout le monde, et c'est pourquoi j'essaie de produire du contenu clair, utile et sincère.</p>

                <h2>Ce que vous trouverez ici</h2>
                <p>Vous trouverez principalement des articles sur le développement web, les bonnes pratiques, mais aussi des récits de voyages et des réflexions personnelles. Je suis convaincu que la technologie et l'humain doivent aller de pair.</p>

                <div class="skills">
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">Vue.js</span>
                    <span class="skill-tag">Tailwind CSS</span>
                    <span class="skill-tag">SQL</span>
                </div>

                <div class="quote">
                    <i class="fas fa-quote-left" style="color: #f1c40f; margin-right: 10px;"></i>
                    Le partage est la plus belle forme d'apprentissage. Merci d'être là !
                </div>

                <p>Si vous souhaitez échanger, poser une question ou simplement dire bonjour, n'hésitez pas à me contacter via les réseaux sociaux ou à laisser un commentaire sous les articles.</p>
                <p style="margin-top: 1rem;"><strong>Bonne lecture !</strong> 🚀</p>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script>
        // Optionnel : petit effet de scroll ou rien
    </script>
</body>
</html>
