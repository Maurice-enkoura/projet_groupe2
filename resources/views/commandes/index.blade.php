<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Commandes - Restaurant Delice</title>
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

        .btn-success {
            background-color: var(--success-color);
            color: white;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        /* Orders Section */
        .orders-section {
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

        /* Orders Container */
        .orders-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            color: var(--secondary-color);
        }

        .orders-count {
            font-size: 16px;
            color: var(--gray-color);
        }

        .orders-count span {
            color: var(--primary-color);
            font-weight: 600;
        }

        /* Filter Section */
        .filter-section {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 14px;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        /* Orders Table */
        .orders-table {
            width: 100%;
            border-collapse: collapse;
        }

        .orders-table th {
            text-align: left;
            padding: 15px;
            background-color: #f8f9fa;
            font-weight: 600;
            color: var(--gray-color);
            border-bottom: 2px solid #e9ecef;
        }

        .orders-table td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            vertical-align: middle;
        }

        .orders-table tr:hover {
            background-color: #f8f9fa;
        }

        .order-id {
            font-family: 'Courier New', monospace;
            font-weight: 600;
            color: var(--secondary-color);
        }

        .plat-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .plat-image {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .plat-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .plat-details h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .plat-details p {
            font-size: 14px;
            color: var(--gray-color);
        }

        .order-status {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
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

        .order-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
            color: var(--dark-color);
            text-decoration: none;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .action-btn:hover {
            transform: translateY(-2px);
        }

        .action-btn.view:hover {
            background-color: var(--info-color);
            color: white;
        }

        .action-btn.cancel:hover {
            background-color: var(--primary-color);
            color: white;
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

        .empty-state h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            margin-top: 40px;
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

            .orders-section {
                padding: 100px 0 60px;
            }

            .page-title {
                font-size: 24px;
            }

            .orders-container {
                padding: 20px;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .orders-table {
                display: block;
                overflow-x: auto;
            }

            .plat-info {
                flex-direction: column;
                align-items: flex-start;
            }

            .plat-image {
                width: 80px;
                height: 80px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .filter-section {
                justify-content: center;
            }

            .order-actions {
                flex-direction: column;
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

    <!-- Orders Section -->
    <section class="orders-section">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header fade-in">
                <h1 class="page-title">Mes Commandes</h1>
                <p class="page-subtitle">Consultez l'historique et le statut de toutes vos commandes</p>
                
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="{{ route('dashboard') }}" class="btn btn-outline">
                        <i class="fas fa-arrow-left"></i> Retour au tableau de bord
                    </a>
                    <a href="{{ route('commandes.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> Nouvelle commande
                    </a>
                </div>
            </div>

            <!-- Orders Container -->
            <div class="orders-container fade-in">
                <div class="section-header">
                    <div>
                        <h2 class="section-title">Historique des commandes</h2>
                        <div class="orders-count">
                            Total : <span>{{ $commandes->total() }}</span> commande(s)
                        </div>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="filter-section">
                    <button class="filter-btn active" data-status="all">Toutes</button>
                    <button class="filter-btn" data-status="en_attente">En attente</button>
                    <button class="filter-btn" data-status="en_cours">En cours</button>
                    <button class="filter-btn" data-status="livree">Livrées</button>
                    <button class="filter-btn" data-status="annulee">Annulées</button>
                </div>

                @if($commandes->count() > 0)
                    <div class="table-responsive">
                        <table class="orders-table">
                            <thead>
                                <tr>
                                    <th>Commande</th>
                                    <th>Plat</th>
                                    <th>Date</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($commandes as $commande)
                                    <tr class="order-row" data-status="{{ $commande->statut }}">
                                        <td>
                                            <div class="order-id">
                                                #{{ str_pad($commande->id, 6, '0', STR_PAD_LEFT) }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="plat-info">
                                                <div class="plat-image">
                                                    @if($commande->plat->image)
                                                        <img src="{{ asset($commande->plat->image) }}" 
                                                             alt="{{ $commande->plat->nom }}">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=400&q=80" 
                                                             alt="{{ $commande->plat->nom }}">
                                                    @endif
                                                </div>
                                                <div class="plat-details">
                                                    <h4>{{ $commande->plat->nom }}</h4>
                                                    <p>{{ Str::limit($commande->plat->description, 50) }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $commande->created_at->format('d/m/Y H:i') }}</td>
                                        <td>{{ $commande->quantite }}</td>
                                        <td>
                                            <strong>{{ number_format($commande->total, 2) }} FCFA</strong>
                                        </td>
                                        <td>
                                            @php
                                                $statusClass = [
                                                    'en_attente' => 'status-pending',
                                                    'en_cours' => 'status-processing',
                                                    'livree' => 'status-delivered',
                                                    'annulee' => 'status-cancelled'
                                                ][$commande->statut] ?? 'status-pending';
                                            @endphp
                                            <span class="order-status {{ $statusClass }}">
                                                {{ ucfirst(str_replace('_', ' ', $commande->statut)) }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="order-actions">
                                                <a href="{{ route('commandes.show', $commande) }}" 
                                                   class="action-btn view"
                                                   title="Voir détails">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                @if($commande->statut == 'en_attente')
                                                    <form action="{{ route('commandes.cancel', $commande) }}" 
                                                          method="POST"
                                                          style="display: inline;">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" 
                                                                class="action-btn cancel"
                                                                title="Annuler"
                                                                onclick="return confirm('Êtes-vous sûr de vouloir annuler cette commande ?')">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($commandes->hasPages())
                        <div class="pagination">
                            {{ $commandes->links('pagination::simple-bootstrap') }}
                        </div>
                    @endif
                @else
                    <div class="empty-state">
                        <i class="fas fa-shopping-bag"></i>
                        <h3>Aucune commande</h3>
                        <p>Vous n'avez pas encore passé de commande.</p>
                        <a href="{{ route('commandes.create') }}" class="btn btn-primary mt-3">
                            <i class="fas fa-plus-circle"></i> Passer votre première commande
                        </a>
                    </div>
                @endif
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
        // Filtrage des commandes
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const orderRows = document.querySelectorAll('.order-row');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Retirer la classe active de tous les boutons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Ajouter la classe active au bouton cliqué
                    this.classList.add('active');

                    const selectedStatus = this.dataset.status;

                    // Filtrer les lignes
                    orderRows.forEach(row => {
                        if (selectedStatus === 'all' || row.dataset.status === selectedStatus) {
                            row.style.display = 'table-row';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                });
            });

            // Afficher l'année en cours dans le footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        });
    </script>
</body>
</html>