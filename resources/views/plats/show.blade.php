<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $plat->nom }} - Restaurant Delice</title>
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

        /* Plat Detail Section */
        .plat-detail-section {
            padding: 120px 0 80px;
        }

        .plat-detail-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .plat-image {
            height: 100%;
            min-height: 500px;
            overflow: hidden;
            position: relative;
        }

        .plat-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .plat-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: var(--accent-color);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            z-index: 1;
        }

        .plat-content {
            padding: 40px;
        }

        .plat-header {
            margin-bottom: 30px;
        }

        .plat-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary-color);
            font-family: 'Georgia', serif;
        }

        .plat-price {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .plat-description {
            font-size: 18px;
            color: var(--gray-color);
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .plat-meta {
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

        /* Ingredients Section */
        .ingredients-section {
            margin-top: 40px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--secondary-color);
        }

        .ingredients-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }

        .ingredient-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .ingredient-item i {
            color: var(--success-color);
        }

        /* Menus Section */
        .menus-section {
            margin-top: 40px;
        }

        .menus-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .menu-item {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .menu-item p {
            color: var(--gray-color);
            margin-bottom: 10px;
        }

        .menu-price {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 20px;
        }

        .plat-actions {
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
            .plat-detail-container {
                grid-template-columns: 1fr;
            }

            .plat-image {
                min-height: 300px;
            }

            .plat-content {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .plat-detail-section {
                padding: 100px 0 60px;
            }

            .plat-title {
                font-size: 28px;
            }

            .plat-price {
                font-size: 24px;
            }

            .plat-meta {
                flex-direction: column;
            }

            .plat-actions {
                flex-direction: column;
            }

            .ingredients-list {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .plat-content {
                padding: 20px;
            }

            .menus-list {
                grid-template-columns: 1fr;
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

    <!-- Plat Detail Section -->
    <section class="plat-detail-section">
        <div class="container">
            <div class="plat-detail-container fade-in">
                <div class="plat-image">
                    @if($plat->image)
                    <img src="{{ asset('storage/' . $plat->image) }}" alt="{{ $plat->nom }}">
                    @else
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=800&q=80" alt="{{ $plat->nom }}">
                    @endif

                    @if($plat->menu && $plat->menu->nom)
                    <div class="plat-badge">{{ $plat->menu->nom }}</div>
                    @endif
                </div>

                <div class="plat-content">
                    <div class="plat-header">
                        <h1 class="plat-title">{{ $plat->nom }}</h1>
                        <div class="plat-price">{{ number_format($plat->prix, 2) }} FCFA</div>

                        @if($plat->description)
                        <p class="plat-description">{{ $plat->description }}</p>
                        @endif
                    </div>

                    <div class="plat-meta">
                        @if($plat->categorie)
                        <div class="meta-item">
                            <i class="fas fa-tag"></i>
                            <span>{{ $plat->categorie }}</span>
                        </div>
                        @endif

                        @if($plat->temps_preparation)
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>{{ $plat->temps_preparation }} min</span>
                        </div>
                        @endif

                        <div class="meta-item">
                            <i class="fas fa-check-circle {{ $plat->menu && $plat->menu->est_disponible ? 'text-success' : 'text-primary' }}"></i>
                            <span>
                                {{ $plat->menu && $plat->menu->est_disponible ? 'Disponible' : 'Indisponible' }}
                            </span>
                        </div>


                    </div>

                    @if(isset($plat->ingredients) && count($plat->ingredients) > 0)
                    <div class="ingredients-section">
                        <h3 class="section-title">Ingrédients</h3>
                        <ul class="ingredients-list">
                            @foreach($plat->ingredients as $ingredient)
                            <li class="ingredient-item">
                                <i class="fas fa-check"></i>
                                <span>{{ $ingredient }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if($plat->menus && $plat->menus->count() > 0)
                    <div class="menus-section">
                        <h3 class="section-title">Disponible dans ces menus</h3>
                        <div class="menus-list">
                            @foreach($plat->menus as $menu)
                            <div class="menu-item">
                                <h4>{{ $menu->nom }}</h4>
                                @if($menu->description)
                                <p>{{ Str::limit($menu->description, 100) }}</p>
                                @endif
                                <div class="menu-price">{{ number_format($menu->prix, 0, ',', ' ') }} FCFA</div>
                                <a href="{{ route('menus.show', $menu->id) }}" class="btn btn-outline" style="margin-top: 10px; width: 100%;">
                                    Voir le menu
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="plat-actions">
                        <a href="{{ route('plats.index') }}" class="btn btn-outline">
                            <i class="fas fa-arrow-left"></i> Retour aux plats
                        </a>
                        @if($plat->est_disponible)
                        <form action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Ajouter au panier
                            </button>
                        </form>
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