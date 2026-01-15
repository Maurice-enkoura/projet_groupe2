<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Restaurant Delice</title>
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

        .btn-outline {
            background-color: transparent;
            border: 2px solid #e9ecef;
            color: var(--dark-color);
        }

        .btn-outline:hover {
            border-color: var(--primary-color);
            background-color: rgba(196, 30, 58, 0.05);
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

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 10px;
            font-size: 14px;
            color: var(--gray-color);
        }

        .forgot-password:hover {
            color: var(--primary-color);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
        }

        .checkbox-group label {
            font-size: 14px;
            color: var(--gray-color);
            cursor: pointer;
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

        .features-list {
            list-style: none;
        }

        .features-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .features-list li:hover {
            transform: translateX(10px);
            background: rgba(255, 255, 255, 0.15);
        }

        .features-list i {
            color: var(--accent-color);
            font-size: 20px;
            width: 24px;
        }

        .features-list span {
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

        .mr-2 {
            margin-right: 0.5rem;
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
                
                <h2 class="sidebar-title">Bienvenue à nouveau</h2>
                <p class="sidebar-text">Connectez-vous pour accéder à votre compte et continuer votre expérience gastronomique.</p>
                
                <ul class="features-list">
                    <li class="fade-in" style="animation-delay: 0.1s">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Gérez vos commandes en ligne</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.2s">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Accédez à vos réservations</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.3s">
                        <i class="fas fa-heart"></i>
                        <span>Retrouvez vos plats préférés</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.4s">
                        <i class="fas fa-gift"></i>
                        <span>Bénéficiez d'offres exclusives</span>
                    </li>
                    <li class="fade-in" style="animation-delay: 0.5s">
                        <i class="fas fa-history"></i>
                        <span>Consultez votre historique</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Formulaire de connexion -->
        <div class="auth-content">
            <div class="form-container">
                <h1 class="form-title">Connexion</h1>
                <p class="form-subtitle">Accédez à votre compte pour gérer vos commandes et réservations</p>

                @if($errors->any())
                    <div class="error-message" style="background-color: #ffeaea; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <i class="fas fa-exclamation-circle"></i>
                        <div>
                            <strong>Erreur d'authentification</strong>
                            <ul style="margin-top: 5px; padding-left: 20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @if(session('status'))
                    <div class="success-message" style="background-color: #d4edda; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <i class="fas fa-check-circle"></i>
                        {{ session('status') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="success-message" style="background-color: #d4edda; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               class="form-control" 
                               value="{{ old('email') }}"
                               placeholder="exemple@email.com" 
                               required
                               autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-with-icon">
                            <input type="password" 
                                   id="password" 
                                   name="password" 
                                   class="form-control" 
                                   placeholder="Votre mot de passe" 
                                   required>
                            <i class="fas fa-eye input-icon toggle-password"></i>
                        </div>
                        <a href="{{ route('password.request') }}" class="forgot-password">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Se souvenir de moi</label>
                    </div>

                    <button type="submit" class="btn btn-primary fade-in">
                        <i class="fas fa-sign-in-alt mr-2"></i>Se connecter
                    </button>
                </form>

                <div class="divider">
                    <span>Ou</span>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-outline fade-in" style="animation-delay: 0.1s">
                        <i class="fab fa-google mr-2"></i>Continuer avec Google
                    </button>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-outline fade-in" style="animation-delay: 0.2s">
                        <i class="fab fa-facebook-f mr-2"></i>Continuer avec Facebook
                    </button>
                </div>

                <div class="form-footer">
                    <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
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
                const input = document.getElementById('password');
                
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

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.fade-in').forEach((el, index) => {
                el.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Focus automatique sur l'email
            document.getElementById('email').focus();
        });

        // Validation du formulaire
        document.querySelector('form').addEventListener('submit', function(e) {
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            
            // Validation basique de l'email
            if (!email.value.includes('@')) {
                e.preventDefault();
                alert('Veuillez entrer une adresse email valide.');
                email.focus();
                return;
            }
            
            // Validation du mot de passe
            if (password.value.length < 6) {
                e.preventDefault();
                alert('Le mot de passe doit contenir au moins 6 caractères.');
                password.focus();
                return;
            }
        });

        // Animation pour les boutons sociaux
        document.querySelectorAll('.btn-outline').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>