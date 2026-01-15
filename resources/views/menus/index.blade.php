<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Menus - Restaurant Delice</title>
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

        /* Section Styling */
        .section {
            padding: 100px 0 80px;
            margin-top: 70px;
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

        /* Menus Grid */
        .menus-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .menu-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .menu-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .menu-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .menu-card:hover .menu-image img {
            transform: scale(1.1);
        }

        .menu-content {
            padding: 25px;
        }

        .menu-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .menu-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .menu-price {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .menu-description {
            color: var(--gray-color);
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .menu-details {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .detail-label {
            color: var(--gray-color);
        }

        .detail-value {
            font-weight: 500;
        }

        .menu-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-availability {
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

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            margin-top: 50px;
        }

        .page-item {
            margin: 0 5px;
        }

        .page-link {
            display: block;
            padding: 8px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            color: var(--secondary-color);
            text-decoration: none;
            transition: all 0.3s;
        }

        .page-link:hover {
            background-color: #f8f9fa;
        }

        .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--gray-color);
            grid-column: 1 / -1;
        }

        .empty-state i {
            font-size: 60px;
            margin-bottom: 20px;
            color: #e0e0e0;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .section {
                padding: 80px 0 60px;
                margin-top: 70px;
            }

            .menus-grid {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .menu-content {
                padding: 15px;
            }
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
                @if(Auth::user()->isAdmin())
                    <li><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                @else
                    <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                @endif
            @endauth
        </ul>

        <div class="auth-buttons">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline">Connexion</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Inscription</a>
            @else
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

    <!-- Menus Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <span class="section-tag">Tous nos menus</span>
                <h2>Nos <span>Menus</span> Découverte</h2>
                <p>Des expériences culinaires complètes pour découvrir l'étendue de notre créativité</p>
            </div>

            <div class="menus-grid">
                @if($menus && $menus->count() > 0)
                    @foreach($menus as $menu)
                    <div class="menu-card fade-in">
                        <div class="menu-image">
                            @php
                            $image = ($menu->image && file_exists(public_path($menu->image)))
                                ? asset($menu->image)
                                : asset('images/menus/default-menu.jpg');
                            @endphp
                            
                            <img src="{{ $image }}" alt="{{ $menu->nom }}">
                        </div>

                        <div class="menu-content">
                            <div class="menu-header">
                                <h3 class="menu-title">{{ $menu->nom }}</h3>
                                <div class="menu-price">{{ number_format($menu->prix, 0, ',', ' ') }} FCFA</div>
                            </div>

                            <p class="menu-description">
                                {{ $menu->description ?? 'Découvrez ce menu exceptionnel préparé avec soin par notre chef.' }}
                            </p>

                            <div class="menu-details">
                                @if($menu->plats && $menu->plats->count() > 0)
                                    <div class="detail-item">
                                        <span class="detail-label">Nombre de plats :</span>
                                        <span class="detail-value">{{ $menu->plats->count() }}</span>
                                    </div>
                                @endif
                                
                                @if($menu->temps_preparation)
                                    <div class="detail-item">
                                        <span class="detail-label">Temps de préparation :</span>
                                        <span class="detail-value">{{ $menu->temps_preparation }} min</span>
                                    </div>
                                @endif
                            </div>

                            <div class="menu-footer">
                                <div class="menu-availability">
                                    @if($menu->est_disponible)
                                    <i class="fas fa-check-circle available"></i>
                                    <span>Disponible</span>
                                    @else
                                    <i class="fas fa-times-circle unavailable"></i>
                                    <span>Indisponible</span>
                                    @endif
                                </div>

                                <div>
                                    <a href="{{ route('menus.show', $menu->id) }}" class="action-btn" title="Voir les détails">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
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

            <!-- Pagination -->
            @if($menus && $menus->hasPages())
                <div class="pagination">
                    {{ $menus->links('pagination::simple-bootstrap') }}
                </div>
            @endif
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
        // Animation d'apparition des cartes
        function animateCardsOnScroll() {
            const cards = document.querySelectorAll('.menu-card');

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
            // Animer les cartes au scroll
            animateCardsOnScroll();

            // Afficher l'année en cours dans le footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        });
    </script>
</body>
</html>