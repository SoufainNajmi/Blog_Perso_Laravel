<footer class="footer">
    <div class="footer-container">
        <!-- Colonne 1 : À propos -->
        <div class="footer-col">
            <h3>À propos</h3>
            <p>Blog personnel partageant des réflexions sur la technologie, les voyages et le quotidien. Merci de votre visite !</p>
        </div>

        <!-- Colonne 2 : Liens rapides -->
        <div class="footer-col">
            <h3>Liens rapides</h3>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('articles.index') }}">Tous les articles</a></li>
                <li><a href="{{ route('articles.create') }}">Écrire un article</a></li>
            </ul>
        </div>

        <!-- Colonne 3 : Catégories (exemple statique, à remplacer par vos vraies catégories si vous en avez) -->
        <div class="footer-col">
            <h3>Catégories</h3>
            <ul>
                <li><a href="#">Technologie</a></li>
                <li><a href="#">Voyages</a></li>
                <li><a href="#">Réflexions</a></li>
                <li><a href="#">Tutoriels</a></li>
            </ul>
        </div>

        <!-- Colonne 4 : Réseaux sociaux -->
        <div class="footer-col">
            <h3>Suivez-moi</h3>
            <div class="social-links">
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="RSS"><i class="fas fa-rss"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Mon Blog Personnel. Tous droits réservés.</p>
        <p>Réalisé avec ❤️ et Laravel</p>
    </div>
</footer>

<style>
    .footer {
        background-color: #1e2a36;  /* légèrement plus foncé que la navbar */
        color: #ecf0f1;
        padding: 3rem 0 1rem 0;
        margin-top: 4rem;
        font-size: 0.9rem;
    }
    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 2rem;
        padding: 0 20px;
    }
    .footer-col {
        flex: 1;
        min-width: 180px;
    }
    .footer-col h3 {
        font-size: 1.2rem;
        margin-bottom: 1rem;
        color: #f1c40f;
        position: relative;
        display: inline-block;
    }
    .footer-col h3::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -6px;
        width: 40px;
        height: 2px;
        background-color: #f1c40f;
    }
    .footer-col p {
        line-height: 1.6;
        color: #bdc3c7;
    }
    .footer-col ul {
        list-style: none;
        padding: 0;
    }
    .footer-col ul li {
        margin-bottom: 0.6rem;
    }
    .footer-col ul li a {
        color: #bdc3c7;
        text-decoration: none;
        transition: color 0.3s;
    }
    .footer-col ul li a:hover {
        color: #f1c40f;
        padding-left: 5px;
    }
    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 0.5rem;
    }
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background-color: #2c3e50;
        border-radius: 50%;
        color: #ecf0f1;
        font-size: 1.2rem;
        transition: all 0.3s;
        text-decoration: none;
    }
    .social-links a:hover {
        background-color: #f1c40f;
        color: #1e2a36;
        transform: translateY(-3px);
    }
    .footer-bottom {
        text-align: center;
        padding-top: 2rem;
        margin-top: 2rem;
        border-top: 1px solid #2c3e50;
        font-size: 0.85rem;
        color: #95a5a6;
    }
    .footer-bottom p {
        margin: 0.3rem 0;
    }
    /* Responsive */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            gap: 1.8rem;
            text-align: center;
        }
        .footer-col h3::after {
            left: 50%;
            transform: translateX(-50%);
        }
        .social-links {
            justify-content: center;
        }
    }
</style>
