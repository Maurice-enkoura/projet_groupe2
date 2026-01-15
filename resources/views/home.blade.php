<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Delice - Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #c41e3a;
            --secondary-color: #1a1a1a;
            --accent-color: #d4af37;
            --light-color: #f8f9fa;
            --dark-color: #333333;
            --gray-color: #6c757d;
            --success-color: #28a745;
            --warning-color: #ffc107;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark-color);
            background-color: var(--light-color);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .logo-icon i {
            color: white;
            font-size: 20px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: var(--secondary-color);
            font-family: 'Georgia', serif;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--primary-color);
        }

        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #a0182e;
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--secondary-color);
            border: 1px solid var(--gray-color);
        }

        .btn-outline:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .cart-icon {
            position: relative;
            font-size: 20px;
            color: var(--secondary-color);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        .hero h1 span {
            color: var(--accent-color);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            color: #e0e0e0;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .hero .btn {
            padding: 15px 30px;
            font-size: 18px;
        }

        .hero .btn-outline {
            background-color: white;
            color: var(--secondary-color);
        }

        /* Plats Section */
        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-tag {
            display: inline-block;
            background-color: rgba(196, 30, 58, 0.1);
            color: var(--primary-color);
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .section-title h2 {
            font-size: 36px;
            margin-bottom: 15px;
            font-family: 'Georgia', serif;
        }

        .section-title h2 span {
            color: var(--primary-color);
        }

        .section-title p {
            color: var(--gray-color);
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .plats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .plat-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .plat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .plat-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .plat-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .plat-card:hover .plat-image img {
            transform: scale(1.1);
        }

        .plat-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--accent-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            z-index: 1;
        }

        .plat-content {
            padding: 25px;
        }

        .plat-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .plat-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .plat-category {
            display: inline-block;
            background-color: #f0f0f0;
            color: var(--gray-color);
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 500;
        }

        .plat-price {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .plat-description {
            color: var(--gray-color);
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .plat-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .plat-availability {
            display: flex;
            align-items: center;
            font-size: 14px;
        }

        .available {
            color: var(--success-color);
        }

        .unavailable {
            color: var(--primary-color);
        }

        .plat-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
            color: var(--dark-color);
            text-decoration: none;
            transition: all 0.3s;
        }

        .action-btn:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Menus Section */
        .menus-section {
            background-color: #f8f9fa;
        }

        .menus-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .menu-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            padding: 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .menu-card:hover {
            transform: translateY(-5px);
        }

        .menu-image {
            height: 200px;
            overflow: hidden;
        }

        .menu-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-content {
            padding: 30px;
            text-align: center;
        }

        .menu-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(196, 30, 58, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -35px auto 20px;
            position: relative;
            z-index: 1;
        }

        .menu-icon i {
            color: var(--primary-color);
            font-size: 30px;
        }

        .menu-name {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .menu-price {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .menu-features {
            list-style: none;
            margin-bottom: 25px;
            text-align: left;
            padding: 0 10px;
        }

        .menu-features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .menu-features i {
            color: var(--success-color);
            margin-right: 10px;
            flex-shrink: 0;
        }

        /* Footer */
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer-logo .logo-icon {
            margin-right: 15px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #b0b0b0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-links i {
            margin-right: 8px;
            font-size: 12px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background-color: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .social-link:hover {
            background-color: var(--primary-color);
        }

        .contact-info {
            list-style: none;
        }

        .contact-info li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .contact-info i {
            color: var(--accent-color);
            margin-right: 10px;
            margin-top: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            color: #b0b0b0;
            font-size: 14px;
        }

        .copyright a {
            color: var(--accent-color);
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .plats-grid {
                grid-template-columns: 1fr;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero .btn {
                width: 100%;
                max-width: 300px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .menu-features {
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .hero h1 {
                font-size: 28px;
            }

            .section {
                padding: 50px 0;
            }

            .plat-card,
            .menu-card {
                padding: 15px;
            }
        }

        /* Loading Animation */
        .loading {
            text-align: center;
            padding: 40px;
            color: var(--gray-color);
        }

        .loading i {
            font-size: 30px;
            margin-bottom: 15px;
            color: var(--primary-color);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Error Message */
        .error-message {
            background-color: #ffeaea;
            color: #d32f2f;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            margin: 20px 0;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--gray-color);
        }

        .empty-state i {
            font-size: 60px;
            margin-bottom: 20px;
            color: #e0e0e0;
        }

        /* Animation pour le chargement */
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Text Center */
        .text-center {
            text-align: center;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        /* User name style */
        .user-name {
            font-weight: 500;
            color: var(--primary-color);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container nav-container">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="logo-text">Delice</div>
            </a>

            <!-- Menu principal -->
            <ul class="nav-menu">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#plats">Plats</a></li>
                <li><a href="#menus">Menus</a></li>
                <li><a href="#contact">Contact</a></li>

                @auth
                @if(Auth::user()->isAdmin())
                <li><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                @else
                <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                @endif
                @endauth
            </ul>

            <div class="auth-buttons">
                @auth
                <!-- Nom de l'utilisateur -->
                <span class="user-name">Bonjour, {{ Auth::user()->name }}</span>

                <!-- Déconnexion -->
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline">Déconnexion</button>
                </form>
                @else
                <!-- Si non connecté -->
                <a href="{{ route('login') }}" class="btn btn-outline">Connexion</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Inscription</a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Une <span>Expérience</span> Culinaire Unique</h1>
                <p>Découvrez l'art de la gastronomie française avec des ingrédients frais, une présentation raffinée et un service d'exception.</p>
                <div class="hero-buttons">
                    <a href="#plats" class="btn btn-primary">Découvrir nos Plats</a>
                    <a href="#menus" class="btn btn-outline">Voir nos Menus</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Plats Section -->
    <section class="section" id="plats">
        <div class="container">
            <div class="section-title">
                <span class="section-tag">Nos Spécialités</span>
                <h2>Plats <span>Populaires</span></h2>
                <p>Découvrez les préférés de nos clients</p>
            </div>

            <div class="plats-grid">
                @if(isset($plats) && $plats->count() > 0)
                @foreach($plats->take(6) as $plat)
                <div class="plat-card fade-in">
                    <div class="plat-image">
                        @php
                        $image = ($plat->image && file_exists(public_path($plat->image)))
                        ? asset($plat->image)
                        : asset('images/plats/default-plat.jpg');
                        @endphp

                        <img src="{{ $image }}" alt="{{ $plat->nom }}">

                        @if($plat->menu?->nom)
                        <div class="plat-badge">{{ $plat->menu->nom }}</div>
                        @endif
                    </div>

                    <div class="plat-content">
                        <div class="plat-header">
                            <div>
                                <h3 class="plat-title">{{ $plat->nom }}</h3>

                                @if($plat->categorie)
                                <span class="plat-category">
                                    {{ ucfirst($plat->categorie) }}
                                </span>
                                @endif
                            </div>

                            <div class="plat-price">
                                {{ number_format($plat->prix, 0, ',', ' ') }} FCFA
                            </div>
                        </div>

                        <p class="plat-description">
                            {{ $plat->description ?: 'Découvrez cette délicieuse spécialité de notre chef.' }}
                        </p>

                        <div class="plat-footer">
                            <div class="plat-availability">
                                @if($plat->est_disponible)
                                <i class="fas fa-check-circle available"></i>
                                <span>Disponible</span>
                                @else
                                <i class="fas fa-times-circle unavailable"></i>
                                <span>Indisponible</span>
                                @endif
                            </div>

                            <div class="plat-actions">
                                <a href="{{ route('plats.show', $plat) }}"
                                    class="action-btn"
                                    title="Voir les détails">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="empty-state">
                    <i class="fas fa-utensils"></i>
                    <h3>Aucun plat disponible</h3>
                    <p>Les plats seront bientôt ajoutés à notre carte.</p>
                </div>
                @endif
            </div>

            @if(isset($plats) && $plats->count() > 0)
            <div class="text-center mt-8">
                <a href="{{ route('plats.index') }}" class="btn btn-primary">
                    <i class="fas fa-utensils mr-2"></i>Voir tous les plats
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- Menus Section -->
    <section class="section menus-section" id="menus">
        <div class="container">
            <div class="section-title">
                <span class="section-tag">Nos Formules</span>
                <h2>Menus <span>Découverte</span></h2>
                <p>Des expériences culinaires complètes pour découvrir l'étendue de notre créativité</p>
            </div>

            <div class="menus-grid">
                @if(isset($menus) && $menus->count() > 0)
                @php
                $icons = [
                'fas fa-star',
                'fas fa-crown',
                'fas fa-glass-cheers',
                'fas fa-utensils',
                'fas fa-wine-glass-alt'
                ];
                @endphp

                @foreach($menus as $index => $menu)
                <div class="menu-card fade-in">
                    {{-- IMAGE MENU --}}
                    @php
                    $menuImage = ($menu->image && file_exists(public_path($menu->image)))
                    ? asset($menu->image)
                    : asset('images/menus/default-menu.jpg');
                    @endphp

                    <div class="menu-image">
                        <img src="{{ $menuImage }}" alt="{{ $menu->nom }}">
                    </div>

                    <div class="menu-content">
                        <div class="menu-icon">
                            <i class="{{ $icons[$index % count($icons)] }}"></i>
                        </div>

                        <h3 class="menu-name">{{ $menu->nom }}</h3>

                        <div class="menu-price">
                            {{ number_format($menu->prix, 0, ',', ' ') }} FCFA
                        </div>

                        <ul class="menu-features">
                            @if($menu->description)
                            @php
                            $features = array_slice(
                            array_filter(explode('.', $menu->description)),
                            0,
                            5
                            );
                            @endphp

                            @foreach($features as $feature)
                            <li>
                                <i class="fas fa-check"></i>
                                {{ trim($feature) }}
                            </li>
                            @endforeach
                            @else
                            <li><i class="fas fa-check"></i> Sélection du chef</li>
                            <li><i class="fas fa-check"></i> Entrée au choix</li>
                            <li><i class="fas fa-check"></i> Plat principal</li>
                            <li><i class="fas fa-check"></i> Dessert</li>
                            <li><i class="fas fa-check"></i> Boisson</li>
                            @endif
                        </ul>

                        <a href="{{ route('menus.show', $menu) }}"
                            class="btn {{ $index === 1 ? 'btn-primary' : 'btn-outline' }}"
                            style="width: 100%; margin-top: 10px;">
                            {!! $index === 1 ? '<i class="fas fa-book-open mr-2"></i>' : '' !!}
                            Voir ce menu
                        </a>
                    </div>
                </div>
                @endforeach

                @else
                <div class="empty-state">
                    <i class="fas fa-book-open"></i>
                    <h3>Aucun menu disponible</h3>
                    <p>Les menus seront bientôt ajoutés.</p>
                </div>
                @endif
            </div>

            @if(isset($menus) && $menus->count() > 0)
            <div class="text-center mt-8">
                <a href="{{ route('menus.index') }}" class="btn btn-primary">
                    <i class="fas fa-book-open mr-2"></i> Voir tous les menus
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <div class="footer-logo">
                        <div class="logo-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="logo-text" style="color: white;">Delice</div>
                    </div>
                    <p style="color: #b0b0b0; margin-bottom: 20px;">
                        Depuis 2010, nous offrons une expérience gastronomique unique avec des produits frais et locaux.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Liens Rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#home"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                        <li><a href="{{ route('plats.index') }}"><i class="fas fa-chevron-right"></i> Nos Plats</a></li>
                        <li><a href="{{ route('menus.index') }}"><i class="fas fa-chevron-right"></i> Nos Menus</a></li>
                        <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Adresse</strong><br>
                                123 Rue Liberte 6<br>
                                11000 Dakar, Sénégal
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Téléphone</strong><br>
                                774612082
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong><br>
                                contact@delice-restaurant.com
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Horaires</h3>
                    <ul class="footer-links">
                        <li><strong>Lun - Ven:</strong> 11h30 - 14h30 • 19h - 23h</li>
                        <li><strong>Samedi:</strong> 12h - 15h • 19h - 00h</li>
                        <li><strong>Dimanche:</strong> 12h - 16h</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; <span id="currentYear">{{ date('Y') }}</span> Restaurant Delice. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Gestion du scroll pour la navigation
        function setupSmoothScroll() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 70,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }

        // Animation d'apparition des cartes
        function animateCardsOnScroll() {
            const cards = document.querySelectorAll('.plat-card, .menu-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });

            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                observer.observe(card);
            });
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            // Configurer le scroll fluide
            setupSmoothScroll();

            // Animer les cartes au scroll
            animateCardsOnScroll();

            // Animation d'entrée pour les sections
            const sections = document.querySelectorAll('.section');
            sections.forEach((section, index) => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(20px)';
                section.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';

                setTimeout(() => {
                    section.style.opacity = '1';
                    section.style.transform = 'translateY(0)';
                }, 100 * index);
            });

            // Afficher l'année en cours dans le footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        });
    </script>
</body>

</html>