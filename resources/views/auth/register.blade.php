<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Restaurant Delice</title>
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
            --error-color: #dc3545;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-container {
            width: 100%;
            max-width: 1200px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            display: flex;
            min-height: 700px;
        }

        .auth-sidebar {
            flex: 1;
            background: linear-gradient(135deg, var(--secondary-color) 0%, #2d2d2d 100%);
            color: white;
            padding: 60px 40px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .auth-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            opacity: 0.15;
        }

        .auth-content {
            flex: 1;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .logo-icon i {
            color: white;
            font-size: 24px;
        }

        .logo-text {
            font-size: 28px;
            font-weight: bold;
            color: var(--secondary-color);
            font-family: 'Georgia', serif;
        }

        .form-container {
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
        }

        .form-title {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--secondary-color);
            font-family: 'Georgia', serif;
        }

        .form-subtitle {
            color: var(--gray-color);
            margin-bottom: 30px;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            background-color: white;
            box-shadow: 0 0 0 3px rgba(196, 30, 58, 0.1);
        }

        .input-with-icon {
            position: relative;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-color);
            cursor: pointer;
        }

        .btn {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #a0182e;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(196, 30, 58, 0.3);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: var(--gray-color);
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e9ecef;
        }

        .divider span {
            padding: 0 15px;
            font-size: 14px;
        }

        .social-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 30px;
        }

        .social-btn {
            padding: 14px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            background: white;
            color: var(--dark-color);
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .social-btn:hover {
            border-color: var(--primary-color);
            background-color: rgba(196, 30, 58, 0.05);
        }

        .form-footer {
            text-align: center;
            margin-top: 30px;
            color: var(--gray-color);
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: var(--error-color);
            font-size: 14px;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .success-message {
            color: var(--success-color);
            font-size: 14px;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 20px;
        }

        .checkbox-group input[type="checkbox"] {
            margin-top: 3px;
        }

        .checkbox-group label {
            font-size: 14px;
            color: var(--gray-color);
        }

        .checkbox-group a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .checkbox-group a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .auth-container {
                flex-direction: column;
            }

            .auth-sidebar {
                padding: 40px 30px;
            }

            .auth-content {
                padding: 40px 30px;
            }

            .social-buttons {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .auth-sidebar,
            .auth-content {
                padding: 30px 20px;
            }

            .form-title {
                font-size: 28px;
            }
        }

        /* Animation pour le sidebar */
        .sidebar-content {
            position: relative;
            z-index: 10;
        }

        .sidebar-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        .sidebar-text {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #e0e0e0;
        }

        .benefits-list {
            list-style: none;
        }

        .benefits-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .benefits-list i {
            color: var(--accent-color);
            font-size: 20px;
            width: 24px;
        }

        .benefits-list span {
            font-size: 16px;
        }

        /* Animation */
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

        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- Sidebar avec avantages -->
        <div class="auth-sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="logo-text" style="color: white;">Delice</div>
                </div>
                
                <h2 class="sidebar-title">Rejoignez notre communauté</h2>
                <p class="sidebar-text">Créez votre compte pour profiter de tous nos services exclusifs et réserver votre table en quelques clics.</p>
                
                <ul class="benefits-list">
                    <li class="fade-in" style="animation-delay: 0.1s">
                        <i class="fas fa-calendar-check"></i>
                        <span>Réservation rapide et facile</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.2s">
                        <i class="fas fa-percent"></i>
                        <span>10% de réduction sur votre première commande</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.3s">
                        <i class="fas fa-star"></i>
                        <span>Accès aux menus et offres exclusives</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.4s">
                        <i class="fas fa-history"></i>
                        <span>Historique de vos commandes et réservations</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.5s">
                        <i class="fas fa-gift"></i>
                        <span>Cadeaux d'anniversaire et offres spéciales</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Formulaire d'inscription -->
        <div class="auth-content">
            <div class="form-container">
                <h1 class="form-title">Créez votre compte</h1>
                <p class="form-subtitle">Inscrivez-vous pour commencer votre expérience culinaire</p>

                @if($errors->any())
                    <div class="error-message" style="background-color: #ffeaea; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <i class="fas fa-exclamation-circle"></i>
                        <div>
                            <strong>Veuillez corriger les erreurs suivantes :</strong>
                            <ul style="margin-top: 5px; padding-left: 20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @if(session('success'))
                    <div class="success-message" style="background-color: #d4edda; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name" class="form-label">Nom complet</label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               class="form-control" 
                               value="{{ old('name') }}"
                               placeholder="Votre nom et prénom" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               class="form-control" 
                               value="{{ old('email') }}"
                               placeholder="exemple@email.com" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input type="tel" 
                               id="phone" 
                               name="phone" 
                               class="form-control" 
                               value="{{ old('phone') }}"
                               placeholder="01 23 45 67 89" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-with-icon">
                            <input type="password" 
                                   id="password" 
                                   name="password" 
                                   class="form-control" 
                                   placeholder="Minimum 8 caractères" 
                                   required
                                   minlength="8">
                            <i class="fas fa-eye input-icon toggle-password" data-target="password"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                        <div class="input-with-icon">
                            <input type="password" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   class="form-control" 
                                   placeholder="Retapez votre mot de passe" 
                                   required>
                            <i class="fas fa-eye input-icon toggle-password" data-target="password_confirmation"></i>
                        </div>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">
                            J'accepte les <a href="#" target="_blank">conditions générales</a> 
                            et la <a href="#" target="_blank">politique de confidentialité</a>
                        </label>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="newsletter" name="newsletter" checked>
                        <label for="newsletter">
                            Je souhaite recevoir les offres spéciales et actualités du restaurant
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary fade-in">
                        <i class="fas fa-user-plus mr-2"></i>Créer mon compte
                    </button>
                </form>

                <div class="divider">
                    <span>Ou continuer avec</span>
                </div>

                <div class="social-buttons">
                    <button type="button" class="social-btn fade-in" style="animation-delay: 0.1s">
                        <i class="fab fa-google"></i>Google
                    </button>
                    <button type="button" class="social-btn fade-in" style="animation-delay: 0.2s">
                        <i class="fab fa-facebook-f"></i>Facebook
                    </button>
                </div>

                <div class="form-footer">
                    <p>Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a></p>
                    <p style="margin-top: 15px;">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-arrow-left mr-2"></i>Retour à l'accueil
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Gestion de la visibilité du mot de passe
        document.querySelectorAll('.toggle-password').forEach(icon => {
            icon.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                
                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            });
        });

        // Validation du formulaire
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('password_confirmation');
            const terms = document.getElementById('terms');
            
            // Vérification des mots de passe
            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                alert('Les mots de passe ne correspondent pas.');
                confirmPassword.focus();
                return;
            }
            
            // Vérification des conditions
            if (!terms.checked) {
                e.preventDefault();
                alert('Vous devez accepter les conditions générales.');
                terms.focus();
                return;
            }
            
            // Vérification de la force du mot de passe
            if (password.value.length < 8) {
                e.preventDefault();
                alert('Le mot de passe doit contenir au moins 8 caractères.');
                password.focus();
                return;
            }
        });

        // Formatage du téléphone
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 10) value = value.substring(0, 10);
            
            if (value.length > 6) {
                value = value.replace(/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/, '$1 $2 $3 $4 $5');
            } else if (value.length > 4) {
                value = value.replace(/(\d{2})(\d{2})(\d{2})/, '$1 $2 $3');
            } else if (value.length > 2) {
                value = value.replace(/(\d{2})(\d{2})/, '$1 $2');
            }
            
            e.target.value = value;
        });

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.fade-in').forEach((el, index) => {
                el.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>