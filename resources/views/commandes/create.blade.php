<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Commande - Restaurant Delice</title>
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
            background-color: #f5f7fa;
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

        /* Order Section */
        .order-section {
            padding: 120px 0 80px;
            min-height: 100vh;
        }

        .page-header {
            margin-bottom: 40px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary-color);
            font-family: 'Georgia', serif;
        }

        .page-subtitle {
            font-size: 18px;
            color: var(--gray-color);
            margin-bottom: 30px;
        }

        /* Order Container */
        .order-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        @media (max-width: 992px) {
            .order-container {
                grid-template-columns: 1fr;
            }
        }

        /* Plats Selection */
        .plats-selection {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 25px;
            color: var(--secondary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: var(--primary-color);
        }

        /* Plats Grid */
        .plats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            max-height: 500px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .plat-select-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            border: 2px solid transparent;
            cursor: pointer;
            transition: all 0.3s;
        }

        .plat-select-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .plat-select-card.selected {
            border-color: var(--primary-color);
            background-color: rgba(196, 30, 58, 0.05);
        }

        .plat-select-image {
            width: 100%;
            height: 150px;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .plat-select-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .plat-select-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--secondary-color);
        }

        .plat-select-price {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .plat-select-info {
            font-size: 14px;
            color: var(--gray-color);
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .plat-stock {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            color: var(--success-color);
        }

        .plat-stock.low {
            color: var(--warning-color);
        }

        .plat-stock.out {
            color: var(--primary-color);
        }

        /* Order Form */
        .order-form {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .selected-plat {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .selected-plat-image {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .selected-plat-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .selected-plat-info h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .selected-plat-price {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .form-text {
            font-size: 14px;
            color: var(--gray-color);
            margin-top: 5px;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid #ddd;
            background-color: white;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .quantity-btn:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .quantity-input {
            width: 80px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
        }

        .price-summary {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .price-row.total {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #ddd;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
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
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .order-section {
                padding: 100px 0 60px;
            }

            .page-title {
                font-size: 24px;
            }

            .plats-grid {
                grid-template-columns: 1fr;
            }

            .selected-plat {
                flex-direction: column;
                text-align: center;
            }

            .form-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .plats-selection,
            .order-form {
                padding: 20px;
            }
        }

        /* Animation */
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
                <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
            </ul>

            <div class="auth-buttons">
                <a href="{{ route('commandes.index') }}" class="btn btn-outline">
                    <i class="fas fa-shopping-bag"></i> Mes commandes
                </a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline" style="padding: 10px 20px;">
                        Déconnexion
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Order Section -->
    <section class="order-section">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header fade-in">
                <h1 class="page-title">Nouvelle Commande</h1>
                <p class="page-subtitle">Sélectionnez un plat et précisez vos préférences</p>

                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="{{ route('commandes.index') }}" class="btn btn-outline">
                        <i class="fas fa-arrow-left"></i> Retour aux commandes
                    </a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                </div>
            </div>

            <!-- Order Container -->
            <div class="order-container fade-in">
                <!-- Plats Selection -->
                <div class="plats-selection">
                    <h2 class="section-title">
                        <i class="fas fa-utensils"></i> Sélectionnez un plat
                    </h2>

                    @if($plats && $plats->count() > 0)
                    <div class="plats-grid">
                        @foreach($plats as $platItem)
                        <div class="plat-select-card {{ $plat && $plat->id == $platItem->id ? 'selected' : '' }}"
                            data-plat-id="{{ $platItem->id }}"
                            data-plat-name="{{ $platItem->nom }}"
                            data-plat-price="{{ $platItem->prix }}"
                            data-plat-stock="{{ $platItem->stock }}"
                            data-plat-image="{{ $platItem->image ? asset('storage/' . $platItem->image) : 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80' }}"
                            data-plat-description="{{ $platItem->description }}">
                            <div class="plat-select-image">
                                <img src="{{ $platItem->image ? asset('storage/' . $platItem->image) : 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80' }}"
                                    alt="{{ $platItem->nom }}">
                            </div>
                            <div class="plat-select-name">{{ $platItem->nom }}</div>
                            <div class="plat-select-price">{{ number_format($platItem->prix, 2) }} €</div>
                            <div class="plat-select-info">
                                {{ Str::limit($platItem->description, 100) }}
                            </div>
                            <div class="plat-stock {{ $platItem->stock <= 5 ? ($platItem->stock == 0 ? 'out' : 'low') : '' }}">
                                <i class="fas fa-box"></i>
                                Stock : {{ $platItem->stock }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="empty-state">
                        <i class="fas fa-utensils"></i>
                        <h3>Aucun plat disponible</h3>
                        <p>Tous les plats sont actuellement en rupture de stock.</p>
                        <a href="{{ route('plats.index') }}" class="btn btn-primary mt-3">
                            <i class="fas fa-arrow-left"></i> Voir tous les plats
                        </a>
                    </div>
                    @endif
                </div>

                <!-- Order Form -->
                <div class="order-form">
                    <h2 class="section-title">
                        <i class="fas fa-clipboard-list"></i> Détails de la commande
                    </h2>

                    <form id="orderForm" action="{{ route('commandes.store') }}" method="POST">
                        @csrf

                        <!-- Selected Plat Display -->
                        <div id="selectedPlatDisplay" class="selected-plat"
                            style="{{ !$plat ? 'display: none;' : '' }}">
                            @if($plat)
                            <div class="selected-plat-image">
                                <img src="{{ $plat->image ? asset('storage/' . $plat->image) : 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80' }}"
                                    alt="{{ $plat->nom }}">
                            </div>
                            <div class="selected-plat-info">
                                <h3>{{ $plat->nom }}</h3>
                                <p class="selected-plat-price">{{ number_format($plat->prix, 2) }} €</p>
                                <p class="plat-stock {{ $plat->stock <= 5 ? ($plat->stock == 0 ? 'out' : 'low') : '' }}">
                                    <i class="fas fa-box"></i>
                                    Stock disponible : {{ $plat->stock }}
                                </p>
                            </div>
                            @endif
                        </div>

                        <!-- Hidden Input for Plat ID -->
                        <input type="hidden" name="plat_id" id="plat_id" value="{{ $plat ? $plat->id : '' }}">

                        <!-- Quantity -->
                        <div class="form-group">
                            <label class="form-label" for="quantite">Quantité</label>
                            <div class="quantity-selector">
                                <button type="button" class="quantity-btn" id="decreaseQuantity">-</button>
                                <input type="number"
                                    name="quantite"
                                    id="quantite"
                                    class="form-control quantity-input"
                                    value="1"
                                    min="1"
                                    max="10"
                                    required>
                                <button type="button" class="quantity-btn" id="increaseQuantity">+</button>
                            </div>
                            <div class="form-text">Maximum 10 unités par commande</div>
                        </div>

                        <!-- Notes -->
                        <div class="form-group">
                            <label class="form-label" for="notes">Notes supplémentaires</label>
                            <textarea name="notes"
                                id="notes"
                                class="form-control"
                                rows="4"
                                placeholder="Précisez vos préférences, allergies, ou instructions spéciales..."></textarea>
                            <div class="form-text">Maximum 500 caractères</div>
                        </div>

                        <!-- Price Summary -->
                        <div class="price-summary">
                            <div class="price-row">
                                <span>Prix unitaire :</span>
                                <span id="unitPrice">0.00 €</span>
                            </div>
                            <div class="price-row">
                                <span>Quantité :</span>
                                <span id="quantityDisplay">1</span>
                            </div>
                            <div class="price-row total">
                                <span>Total :</span>
                                <span id="totalPrice">0.00 €</span>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="form-actions">
                            <a href="{{ route('commandes.index') }}" class="btn btn-outline">
                                Annuler
                            </a>
                            <button type="submit" id="submitBtn" class="btn btn-primary" {{ !$plat ? 'disabled' : '' }}>
                                <i class="fas fa-shopping-cart"></i> Passer la commande
                            </button>
                        </div>
                    </form>
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
                        <li><a href="{{ route('dashboard') }}"><i class="fas fa-chevron-right"></i> Tableau de bord</a></li>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Afficher l'année en cours
            document.getElementById('currentYear').textContent = new Date().getFullYear();

            // Variables globales
            let selectedPlat = null;
            let unitPrice = 0;
            let maxStock = 10;

            // Sélection de plat
            document.querySelectorAll('.plat-select-card').forEach(card => {
                card.addEventListener('click', function() {
                    // Retirer la sélection précédente
                    document.querySelectorAll('.plat-select-card').forEach(c => {
                        c.classList.remove('selected');
                    });

                    // Ajouter la sélection
                    this.classList.add('selected');

                    // Mettre à jour les variables
                    selectedPlat = {
                        id: this.dataset.platId,
                        name: this.dataset.platName,
                        price: parseFloat(this.dataset.platPrice),
                        stock: parseInt(this.dataset.platStock),
                        image: this.dataset.platImage,
                        description: this.dataset.platDescription
                    };

                    unitPrice = selectedPlat.price;
                    maxStock = Math.min(selectedPlat.stock, 10);

                    // Mettre à jour le formulaire
                    updateSelectedPlatDisplay();
                    updateQuantityLimits();
                    updatePriceSummary();
                    updateSubmitButton();
                });
            });

            // Mettre à jour l'affichage du plat sélectionné
            function updateSelectedPlatDisplay() {
                const display = document.getElementById('selectedPlatDisplay');
                const platIdInput = document.getElementById('plat_id');

                if (selectedPlat) {
                    platIdInput.value = selectedPlat.id;

                    display.innerHTML = `
                        <div class="selected-plat-image">
                            <img src="${selectedPlat.image}" alt="${selectedPlat.name}">
                        </div>
                        <div class="selected-plat-info">
                            <h3>${selectedPlat.name}</h3>
                            <p class="selected-plat-price">${selectedPlat.price.toFixed(2)} €</p>
                            <p class="plat-stock ${selectedPlat.stock <= 5 ? (selectedPlat.stock == 0 ? 'out' : 'low') : ''}">
                                <i class="fas fa-box"></i>
                                Stock disponible : ${selectedPlat.stock}
                            </p>
                        </div>
                    `;
                    display.style.display = 'flex';
                } else {
                    platIdInput.value = '';
                    display.style.display = 'none';
                }
            }

            // Mettre à jour les limites de quantité
            function updateQuantityLimits() {
                const quantityInput = document.getElementById('quantite');
                if (selectedPlat) {
                    quantityInput.max = maxStock;
                    if (parseInt(quantityInput.value) > maxStock) {
                        quantityInput.value = maxStock;
                    }
                }
            }

            // Mettre à jour le récapitulatif des prix
            function updatePriceSummary() {
                const quantity = parseInt(document.getElementById('quantite').value) || 1;
                const unitPriceElement = document.getElementById('unitPrice');
                const quantityDisplay = document.getElementById('quantityDisplay');
                const totalPriceElement = document.getElementById('totalPrice');

                if (selectedPlat) {
                    unitPriceElement.textContent = selectedPlat.price.toFixed(2) + ' €';
                    quantityDisplay.textContent = quantity;
                    totalPriceElement.textContent = (selectedPlat.price * quantity).toFixed(2) + ' €';
                } else {
                    unitPriceElement.textContent = '0.00 €';
                    quantityDisplay.textContent = '1';
                    totalPriceElement.textContent = '0.00 €';
                }
            }

            // Mettre à jour le bouton de soumission
            function updateSubmitButton() {
                const submitBtn = document.getElementById('submitBtn');
                if (selectedPlat && selectedPlat.stock > 0) {
                    submitBtn.disabled = false;
                } else {
                    submitBtn.disabled = true;
                }
            }

            // Gestion des boutons de quantité
            document.getElementById('increaseQuantity').addEventListener('click', function() {
                const quantityInput = document.getElementById('quantite');
                let quantity = parseInt(quantityInput.value) || 1;
                if (quantity < maxStock) {
                    quantityInput.value = quantity + 1;
                    updatePriceSummary();
                }
            });

            document.getElementById('decreaseQuantity').addEventListener('click', function() {
                const quantityInput = document.getElementById('quantite');
                let quantity = parseInt(quantityInput.value) || 1;
                if (quantity > 1) {
                    quantityInput.value = quantity - 1;
                    updatePriceSummary();
                }
            });

            document.getElementById('quantite').addEventListener('change', function() {
                let quantity = parseInt(this.value) || 1;
                if (quantity < 1) {
                    this.value = 1;
                } else if (quantity > maxStock) {
                    this.value = maxStock;
                }
                updatePriceSummary();
            });

            // Pré-sélectionner le plat si passé en paramètre
            @if($plat)

            document.addEventListener('DOMContentLoaded', function() {
                const platCard = document.querySelector(`[data-plat-id="{{ $plat->id }}"]`);
                if (platCard) {
                    platCard.click();
                }
            });
            @endif


            // Validation du formulaire
            document.getElementById('orderForm').addEventListener('submit', function(e) {
                if (!selectedPlat) {
                    e.preventDefault();
                    alert('Veuillez sélectionner un plat.');
                    return false;
                }

                const quantity = parseInt(document.getElementById('quantite').value);
                if (quantity > selectedPlat.stock) {
                    e.preventDefault();
                    alert(`Stock insuffisant. Disponible : ${selectedPlat.stock}`);
                    return false;
                }

                if (quantity < 1) {
                    e.preventDefault();
                    alert('La quantité doit être au moins de 1.');
                    return false;
                }

                return true;
            });
        });
    </script>
</body>

</html>