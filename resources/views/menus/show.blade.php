<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $menu->nom }} - Restaurant Delice</title>
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

        /* Menu Detail Section */
        .menu-detail-section {
            padding: 120px 0 80px;
        }

        .menu-detail-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .menu-image {
            height: 100%;
            min-height: 500px;
            overflow: hidden;
        }

        .menu-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-content {
            padding: 40px;
        }

        .menu-header {
            margin-bottom: 30px;
        }

        .menu-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary-color);
            font-family: 'Georgia', serif;
        }

        .menu-price {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .menu-description {
            font-size: 18px;
            color: var(--gray-color);
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .menu-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .meta-item i {
            color: var(--primary-color);
        }

        /* Plats Section */
        .plats-section {
            margin-top: 40px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--secondary-color);
        }

        .plats-list {
            list-style: none;
        }

        .plat-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s;
        }

        .plat-item:hover {
            background-color: #f8f9fa;
        }

        .plat-item:last-child {
            border-bottom: none;
        }

        .plat-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .plat-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .plat-info {
            flex-grow: 1;
        }

        .plat-name {
            font-size: 18px;
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
            margin-bottom: 10px;
        }

        .plat-price {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-color);
        }

        .menu-actions {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--gray-color);
            text-decoration: none;
            margin-top: 30px;
            transition: color 0.3s;
        }

        .back-button:hover {
            color: var(--primary-color);
        }

        /* Footer */
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 60px 0 30px;
            margin-top: 80px;
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

        /* Responsive Design */
        @media (max-width: 992px) {
            .menu-detail-container {
                grid-template-columns: 1fr;
            }

            .menu-image {
                min-height: 300px;
            }

            .menu-content {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .menu-detail-section {
                padding: 100px 0 60px;
            }

            .menu-title {
                font-size: 28px;
            }

            .menu-price {
                font-size: 24px;
            }

            .menu-meta {
                flex-direction: column;
            }

            .menu-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .menu-content {
                padding: 20px;
            }

            .plat-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .plat-image {
                margin-bottom: 15px;
            }
        }


        .text-success {
            color: var(--success-color);
        }

        .text-primary {
            color: var(--primary-color);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
    <div class="container nav-container">
        <a href="{{ route('home') }}" class="logo">
            <div class="logo-icon">
                <i class="fas fa-utensils"></i>
            </div>
            <div class="logo-text">Delice</div>
        </a>

        <ul class="nav-menu">
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('menus.index') }}">Menus</a></li>
            <li><a href="{{ route('plats.index') }}">Plats</a></li>

            @auth
                {{-- Lien Tableau de bord selon le rôle --}}
                @if(Auth::user()->isAdmin())
                    <li><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                @else
                    <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                @endif
            @endauth
        </ul>

        <div class="auth-buttons">
            @guest
                {{-- Pour les visiteurs non connectés --}}
                <a href="{{ route('login') }}" class="btn btn-outline">Connexion</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Inscription</a>
            @else
                {{-- Pour les utilisateurs connectés --}}
                <a href="#" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline" style="padding: 10px 20px;">
                        Déconnexion
                    </button>
                </form>
            @endguest
        </div>
    </div>
</header>

    <!-- Menu Detail Section -->
    <section class="menu-detail-section">
        <div class="container">
            <div class="menu-detail-container fade-in">
                <div class="menu-image">
                    @if($menu->image)
                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->nom }}">
                    @else
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="{{ $menu->nom }}">
                    @endif
                </div>

                <div class="menu-content">
                    <div class="menu-header">
                        <h1 class="menu-title">{{ $menu->nom }}</h1>
                        <div class="menu-price">{{ number_format($menu->prix, 0, ',', ' ') }} FCFA</div>

                        @if($menu->description)
                        <p class="menu-description">{{ $menu->description }}</p>
                        @endif
                    </div>

                    <div class="menu-meta">
                        @if($menu->plats && $menu->plats->count() > 0)
                        <div class="meta-item">
                            <i class="fas fa-utensils"></i>
                            <span>{{ $menu->plats->count() }} plats inclus</span>
                        </div>
                        @endif

                        @if($menu->temps_preparation)
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>{{ $menu->temps_preparation }} minutes</span>
                        </div>
                        @endif

                        <div class="meta-item">
                            <i class="fas fa-check-circle {{ $menu->est_disponible ? 'text-success' : 'text-primary' }}"></i>
                            <span>{{ $menu->est_disponible ? 'Disponible' : 'Indisponible' }}</span>
                        </div>

                    </div>

                    @if($menu->plats && $menu->plats->count() > 0)
                    <div class="plats-section">
                        <h3 class="section-title">Plats inclus dans ce menu</h3>
                        <ul class="plats-list">
                            @foreach($menu->plats as $plat)
                            <li class="plat-item">
                                <div class="plat-image">
                                    @if($plat->image)
                                    <img src="{{ asset('storage/' . $plat->image) }}" alt="{{ $plat->nom }}">
                                    @else
                                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80" alt="{{ $plat->nom }}">
                                    @endif
                                </div>
                                <div class="plat-info">
                                    <div class="plat-name">{{ $plat->nom }}</div>
                                    @if($plat->categorie)
                                    <span class="plat-category">{{ $plat->categorie }}</span>
                                    @endif
                                    <div class="plat-price">{{ number_format($plat->prix, 2) }} €</div>
                                </div>
                                <a href="{{ route('plats.show', $plat->id) }}" class="btn btn-outline" style="flex-shrink: 0;">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="menu-actions">
                        <a href="{{ route('menus.index') }}" class="btn btn-outline">
                            <i class="fas fa-arrow-left"></i> Retour aux menus
                        </a>
                        @if($menu->est_disponible)
                        <button class="btn btn-primary">
                            <i class="fas fa-shopping-cart"></i> Ajouter au panier
                        </button>
                        @endif
                    </div>

                    <a href="{{ route('home') }}" class="back-button">
                        <i class="fas fa-home"></i> Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
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
                        <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                        <li><a href="{{ route('plats.index') }}"><i class="fas fa-chevron-right"></i> Nos Plats</a></li>
                        <li><a href="{{ route('menus.index') }}"><i class="fas fa-chevron-right"></i> Nos Menus</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Adresse</strong><br>
                                123 Rue Gastronomique<br>
                                75001 Paris, France
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Téléphone</strong><br>
                                01 23 45 67 89
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
        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            // Afficher l'année en cours dans le footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        });
    </script>
</body>

</html>