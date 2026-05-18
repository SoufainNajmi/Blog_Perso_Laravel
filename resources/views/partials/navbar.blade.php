<nav class="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="logo">MonBlog</a>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Menu">
            ☰
        </button>
        <ul class="nav-menu" id="navMenu">
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('articles.index') }}" >Articles</a></li>
            <li><a href="{{ route('articles.create') }}" >Nouvel article</a></li>
        </ul>
    </div>
</nav>

<style>
    /* Styles de base */
    .navbar {
        background-color: #2c3e50;
        color: white;
        padding: 1rem 0;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }
    .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        text-decoration: none;
        letter-spacing: 1px;
    }
    .logo:hover {
        color: #ecf0f1;
    }
    .nav-menu {
        display: flex;
        list-style: none;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }
    .nav-menu li a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem 0;
        transition: color 0.3s;
    }
    .nav-menu li a:hover {
        color: #f1c40f;
    }
    .nav-menu li a.active {
        color: #f1c40f;
        border-bottom: 2px solid #f1c40f;
    }
    .mobile-toggle {
        display: none;
        background: none;
        border: none;
        font-size: 1.8rem;
        color: white;
        cursor: pointer;
    }

    /* Responsive : menu hamburger */
    @media (max-width: 768px) {
        .mobile-toggle {
            display: block;
        }
        .nav-menu {
            position: fixed;
            left: -100%;
            top: 70px;
            flex-direction: column;
            background-color: #2c3e50;
            width: 100%;
            text-align: center;
            transition: 0.3s;
            gap: 0;
            padding: 1rem 0;
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        .nav-menu.active {
            left: 0;
        }
        .nav-menu li {
            margin: 1rem 0;
        }
        .nav-menu li a.active {
            border-bottom: none;
            color: #f1c40f;
        }
    }
</style>

<script>
    // JavaScript pour le menu hamburger
    const toggleBtn = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }
</script>
