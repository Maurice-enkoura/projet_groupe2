<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande #{{ str_pad($commande->id, 6, '0', STR_PAD_LEFT) }} - Restaurant Delice</title>
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
            --info-color: #17a2b8;
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

        .btn-warning {
            background-color: var(--warning-color);
            color: var(--dark-color);
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        /* Order Detail Section */
        .order-detail-section {
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
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .order-id {
            background-color: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .page-subtitle {
            font-size: 18px;
            color: var(--gray-color);
            margin-bottom: 30px;
        }

        /* Order Container */
        .order-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        @media (max-width: 992px) {
            .order-container {
                grid-template-columns: 1fr;
            }
        }

        /* Order Details */
        .order-details {
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

        /* Order Status */
        .order-status-section {
            margin-bottom: 40px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-processing {
            background-color: #cce5ff;
            color: #004085;
        }

        .status-delivered {
            background-color: #d4edda;
            color: #155724;
        }

        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Order Info */
        .order-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        .info-label {
            font-size: 14px;
            color: var(--gray-color);
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 18px;
            font-weight: 600;
            color: var(--secondary-color);
        }

        /* Plat Details */
        .plat-details {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .plat-image {
            width: 120px;
            height: 120px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .plat-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .plat-info h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }

        .plat-price {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .plat-description {
            color: var(--gray-color);
            line-height: 1.6;
        }

        /* Order Summary */
        .order-summary {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 25px;
            color: var(--secondary-color);
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .summary-total {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #ddd;
        }

        /* Notes Section */
        .notes-section {
            margin-top: 30px;
        }

        .notes-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        .notes-label {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }

        .notes-content {
            color: var(--gray-color);
            line-height: 1.6;
            white-space: pre-line;
        }

        .notes-empty {
            color: #aaa;
            font-style: italic;
        }

        /* Actions */
        .order-actions {
            display: flex;
            gap: 15px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        /* Timeline */
        .timeline {
            margin-top: 40px;
        }

        .timeline-item {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .timeline-item:last-child {
            border-bottom: none;
        }

        .timeline-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .timeline-icon i {
            color: var(--primary-color);
        }

        .timeline-content h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--secondary-color);
        }

        .timeline-content p {
            font-size: 14px;
            color: var(--gray-color);
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

            .order-detail-section {
                padding: 100px 0 60px;
            }

            .page-title {
                font-size: 24px;
                flex-direction: column;
                align-items: flex-start;
            }

            .order-details,
            .order-summary {
                padding: 20px;
            }

            .plat-details {
                flex-direction: column;
                text-align: center;
            }

            .order-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .order-info-grid {
                grid-template-columns: 1fr;
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
                <a href="{{ route('commandes.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Nouvelle commande
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

    <!-- Order Detail Section -->
    <section class="order-detail-section">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header fade-in">
                <h1 class="page-title">
                    Détails de la commande
                    <span class="order-id">#{{ str_pad($commande->id, 6, '0', STR_PAD_LEFT) }}</span>
                </h1>
                <p class="page-subtitle">Consultez les détails et le statut de votre commande</p>
                
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
            <div class="order-container">
                <!-- Order Details -->
                <div class="order-details fade-in">
                    <!-- Order Status -->
                    <div class="order-status-section">
                        @php
                            $statusClass = [
                                'en_attente' => 'status-pending',
                                'en_cours' => 'status-processing',
                                'livree' => 'status-delivered',
                                'annulee' => 'status-cancelled'
                            ][$commande->statut] ?? 'status-pending';
                        @endphp
                        <span class="status-badge {{ $statusClass }}">
                            {{ ucfirst(str_replace('_', ' ', $commande->statut)) }}
                        </span>
                        <h2 class="section-title">
                            <i class="fas fa-info-circle"></i> Informations de la commande
                        </h2>
                    </div>

                    <!-- Order Info -->
                    <div class="order-info-grid">
                        <div class="info-card">
                            <div class="info-label">Date de commande</div>
                            <div class="info-value">{{ $commande->created_at->format('d/m/Y H:i') }}</div>
                        </div>
                        <div class="info-card">
                            <div class="info-label">Dernière mise à jour</div>
                            <div class="info-value">{{ $commande->updated_at->format('d/m/Y H:i') }}</div>
                        </div>
                        <div class="info-card">
                            <div class="info-label">Méthode</div>
                            <div class="info-value">Livraison</div>
                        </div>
                    </div>

                    <!-- Plat Details -->
                    <div class="plat-details">
                        <div class="plat-image">
                            @if($commande->plat->image)
                                <img src="{{ asset('storage/' . $commande->plat->image) }}" 
                                     alt="{{ $commande->plat->nom }}">
                            @else
                                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80" 
                                     alt="{{ $commande->plat->nom }}">
                            @endif
                        </div>
                        <div class="plat-info">
                            <h3>{{ $commande->plat->nom }}</h3>
                            <div class="plat-price">{{ number_format($commande->plat->prix, 2) }} €</div>
                            @if($commande->plat->description)
                                <p class="plat-description">
                                    {{ Str::limit($commande->plat->description, 200) }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <!-- Timeline -->
                    <div class="timeline">
                        <h3 class="section-title">
                            <i class="fas fa-history"></i> Historique de la commande
                        </h3>
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Commande passée</h4>
                                <p>{{ $commande->created_at->format('d/m/Y à H:i') }}</p>
                            </div>
                        </div>
                        
                        @if($commande->statut == 'en_cours' || $commande->statut == 'livree')
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Préparation en cours</h4>
                                    <p>Votre plat est en cours de préparation</p>
                                </div>
                            </div>
                        @endif
                        
                        @if($commande->statut == 'livree')
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Commande livrée</h4>
                                    <p>Votre commande a été livrée avec succès</p>
                                </div>
                            </div>
                        @endif
                        
                        @if($commande->statut == 'annulee')
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i class="fas fa-times-circle"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Commande annulée</h4>
                                    <p>La commande a été annulée le {{ $commande->updated_at->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Notes -->
                    @if($commande->notes)
                        <div class="notes-section">
                            <h3 class="section-title">
                                <i class="fas fa-sticky-note"></i> Notes supplémentaires
                            </h3>
                            <div class="notes-card">
                                <div class="notes-content">{{ $commande->notes }}</div>
                            </div>
                        </div>
                    @endif

                    <!-- Actions -->
                    <div class="order-actions">
                        <a href="{{ route('commandes.index') }}" class="btn btn-outline">
                            <i class="fas fa-list"></i> Voir toutes mes commandes
                        </a>
                        
                        @if($commande->statut == 'en_attente')
                            <form action="{{ route('commandes.cancel', $commande) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" 
                                        class="btn btn-warning"
                                        onclick="return confirm('Êtes-vous sûr de vouloir annuler cette commande ?')">
                                    <i class="fas fa-times"></i> Annuler la commande
                                </button>
                            </form>
                        @endif
                        
                        <a href="{{ route('commandes.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Nouvelle commande
                        </a>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="order-summary fade-in">
                    <h3 class="summary-title">Récapitulatif</h3>
                    
                    <div class="summary-item">
                        <span>Sous-total :</span>
                        <span>{{ number_format($commande->prix_unitaire * $commande->quantite, 2) }} €</span>
                    </div>
                    
                    <div class="summary-item">
                        <span>Frais de livraison :</span>
                        <span>Gratuit</span>
                    </div>
                    
                    <div class="summary-item">
                        <span>TVA (20%) :</span>
                        <span>{{ number_format(($commande->prix_unitaire * $commande->quantite) * 0.20, 2) }} €</span>
                    </div>
                    
                    <div class="summary-item summary-total">
                        <span>Total :</span>
                        <span>{{ number_format($commande->total, 2) }} €</span>
                    </div>

                    <!-- Order Details -->
                    <div style="margin-top: 30px;">
                        <div class="summary-item">
                            <span>Quantité :</span>
                            <span>{{ $commande->quantite }}</span>
                        </div>
                        <div class="summary-item">
                            <span>Prix unitaire :</span>
                            <span>{{ number_format($commande->prix_unitaire, 2) }} €</span>
                        </div>
                    </div>

                    <!-- Customer Info -->
                    <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
                        <h4 style="font-size: 16px; font-weight: 600; margin-bottom: 15px; color: var(--secondary-color);">
                            <i class="fas fa-user"></i> Informations client
                        </h4>
                        <p style="margin-bottom: 10px; color: var(--gray-color);">
                            <strong>Nom :</strong> {{ Auth::user()->name }}
                        </p>
                        <p style="color: var(--gray-color);">
                            <strong>Email :</strong> {{ Auth::user()->email }}
                        </p>
                    </div>

                    <!-- Help Section -->
                    <div style="margin-top: 30px; padding: 20px; background-color: #f8f9fa; border-radius: 10px;">
                        <h4 style="font-size: 16px; font-weight: 600; margin-bottom: 10px; color: var(--secondary-color);">
                            <i class="fas fa-question-circle"></i> Besoin d'aide ?
                        </h4>
                        <p style="font-size: 14px; color: var(--gray-color); margin-bottom: 10px;">
                            Pour toute question concernant votre commande, contactez-nous :
                        </p>
                        <a href="mailto:contact@delice-restaurant.com" 
                           style="color: var(--primary-color); text-decoration: none; font-weight: 500;">
                            <i class="fas fa-envelope"></i> contact@delice-restaurant.com
                        </a>
                        <p style="font-size: 14px; color: var(--gray-color); margin-top: 10px;">
                            <i class="fas fa-phone"></i> 01 23 45 67 89
                        </p>
                    </div>
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
                <p style="margin-top: 10px; font-size: 12px;">
                    Commande #{{ str_pad($commande->id, 6, '0', STR_PAD_LEFT) }}
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            // Afficher l'année en cours
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        });
    </script>
</body>
</html>