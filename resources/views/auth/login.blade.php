<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BéninCulture - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            /* PALETTE "TERRES & ROYAUMES" */
            --primary-red: #8B1E1E;
            --primary-gold: #D4AF37;
            --primary-ocre: #C19A6B;
            --primary-black: #0A0A0A;
            --primary-beige: #F5E9D9;
            --primary-cream: #FFFBF0;
            
            /* Variables pour gradation */
            --red-50: #fef2f2;
            --red-100: #fee2e2;
            --red-200: #fecaca;
            --red-300: #fca5a5;
            --red-400: #f87171;
            --red-500: #ef4444;
            --red-600: #dc2626;
            --red-700: #8B1E1E;
            --red-800: #991b1b;
            --red-900: #7f1d1d;
            
            --gold-50: #fffbeb;
            --gold-100: #fef3c7;
            --gold-200: #fde68a;
            --gold-300: #fcd34d;
            --gold-400: #fbbf24;
            --gold-500: #f59e0b;
            --gold-600: #d97706;
            --gold-700: #b45309;
            --gold-800: #92400e;
            --gold-900: #78350f;
            
            --earth-50: #fdf8f3;
            --earth-100: #f2e8e5;
            --earth-200: #eaddd7;
            --earth-300: #e0cec7;
            --earth-400: #d2bab0;
            --earth-500: #C19A6B;
            --earth-600: #a18072;
            --earth-700: #846358;
            --earth-800: #5d4037;
            --earth-900: #4e342e;
            
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, var(--primary-red), var(--primary-gold));
            --gradient-earth: linear-gradient(135deg, var(--earth-800), var(--primary-red));
            --gradient-gold: linear-gradient(135deg, var(--primary-gold), var(--gold-300));
            --gradient-subtle: linear-gradient(135deg, rgba(139, 30, 30, 0.1), rgba(209, 175, 55, 0.1));
            
            /* Ombres */
            --shadow: 0 4px 20px -2px rgba(139, 30, 30, 0.15), 0 2px 8px -1px rgba(139, 30, 30, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(139, 30, 30, 0.15), 0 10px 10px -5px rgba(139, 30, 30, 0.08);
            --shadow-hover: 0 25px 50px -12px rgba(139, 30, 30, 0.25);
            --radius: 20px;
            --radius-sm: 12px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(2deg); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes slideInFromLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes culturalPattern {
            0% { transform: translateX(0) translateY(0) rotate(0deg); }
            25% { transform: translateX(5px) translateY(-5px) rotate(90deg); }
            50% { transform: translateX(0) translateY(-10px) rotate(180deg); }
            75% { transform: translateX(-5px) translateY(-5px) rotate(270deg); }
            100% { transform: translateX(0) translateY(0) rotate(360deg); }
        }

        body {
            background: linear-gradient(-45deg, var(--primary-cream), var(--gold-50), var(--earth-50), var(--red-50));
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow-x: hidden;
            color: var(--earth-800);
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(139, 30, 30, 0.08) 0%, transparent 20%),
                radial-gradient(circle at 80% 20%, rgba(209, 175, 55, 0.08) 0%, transparent 20%),
                radial-gradient(circle at 40% 40%, rgba(193, 154, 107, 0.05) 0%, transparent 30%);
            z-index: -1;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(139, 30, 30, 0.15);
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
            animation: fadeInUp 0.8s ease-out;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .login-card::after {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath fill='%238B1E1E' fill-opacity='0.08' d='M20,20 Q40,5 60,20 T100,20 L80,80 Q60,95 40,80 T0,80 Z'/%3E%3C/svg%3E");
            animation: float 6s ease-in-out infinite;
            pointer-events: none;
        }

        .login-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
            border-color: rgba(139, 30, 30, 0.3);
        }

        .form-input {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 2px solid var(--earth-300);
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(139, 30, 30, 0.05);
            font-family: 'Inter', sans-serif;
            color: var(--earth-800);
        }

        .form-input::placeholder {
            color: var(--earth-500);
        }

        .form-input:focus {
            background: white;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.2), 0 4px 20px rgba(139, 30, 30, 0.15);
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(139, 30, 30, 0.4);
            position: relative;
            overflow: hidden;
            font-family: 'Playfair Display', serif;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.7s ease;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(139, 30, 30, 0.5);
        }

        .error-container {
            background: linear-gradient(135deg, #fff5f5, #fed7d7);
            border: 2px solid #feb2b2;
            color: #9b2c2c;
            box-shadow: var(--shadow);
            animation: slideInFromLeft 0.6s ease-out;
            border-left: 4px solid var(--primary-red);
        }

        .checkbox-custom {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid var(--earth-400);
            transition: all 0.3s ease;
            border-radius: 4px;
        }

        .checkbox-custom:checked {
            background: var(--primary-red);
            border-color: var(--primary-red);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='white'%3E%3Cpath fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'/%3E%3C/svg%3E");
            background-size: 70%;
            background-position: center;
            background-repeat: no-repeat;
        }

        .link-primary {
            color: var(--primary-red);
            transition: all 0.3s ease;
            position: relative;
            font-weight: 600;
        }

        .link-primary::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: width 0.3s ease;
        }

        .link-primary:hover::after {
            width: 100%;
        }

        .link-primary:hover {
            color: var(--red-800);
        }

        .app-icon {
            animation: float 6s ease-in-out infinite;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }

        .success-message {
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            border: 2px solid #6ee7b7;
            color: #065f46;
            box-shadow: var(--shadow);
            animation: slideInFromLeft 0.6s ease-out;
            border-left: 4px solid #10b981;
        }

        .header-title {
            font-family: 'Playfair Display', serif;
            background: var(--gradient-earth);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .field-label {
            color: var(--earth-700);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .field-label::before {
            content: '✦';
            color: var(--primary-red);
            font-size: 0.8rem;
        }

        .welcome-text {
            color: var(--earth-700);
            font-weight: 600;
        }

        .cultural-pattern {
            position: absolute;
            width: 80px;
            height: 80px;
            opacity: 0.08;
            pointer-events: none;
            z-index: 0;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .pattern-1 {
            top: 15%;
            left: 10%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath fill='%238B1E1E' d='M20,20 Q40,5 60,20 T100,20 L80,80 Q60,95 40,80 T0,80 Z'/%3E%3C/svg%3E");
            animation: culturalPattern 20s linear infinite;
        }

        .pattern-2 {
            bottom: 20%;
            right: 15%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='40' fill='%23D4AF37'/%3E%3C/svg%3E");
            animation: culturalPattern 25s linear infinite reverse;
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--earth-500);
            cursor: pointer;
            padding: 4px;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--primary-red);
            transform: translateY(-50%) scale(1.1);
        }

        .input-wrapper {
            position: relative;
        }

        .login-illustration {
            background: var(--gradient-subtle);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            border: 2px solid rgba(139, 30, 30, 0.1);
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.5rem;
        }

        .feature-icon {
            color: var(--primary-red);
            font-size: 1.25rem;
        }

        .text-earth-600 {
            color: var(--earth-600);
        }

        .text-earth-700 {
            color: var(--earth-700);
        }

        .border-earth-200 {
            border-color: var(--earth-200);
        }

        .hover\:border-sunset-orange:hover {
            border-color: var(--primary-red);
        }

        .bg-orange-50 {
            background-color: var(--red-50);
        }

        .text-green-700 {
            color: #065f46;
        }

        .text-red-600 {
            color: #dc2626;
        }

        .border-green-500 {
            border-color: #10b981;
        }

        .border-red-500 {
            border-color: #ef4444;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen px-4 py-8">
    
    <!-- Éléments décoratifs culturels -->
    <div class="cultural-pattern pattern-1"></div>
    <div class="cultural-pattern pattern-2"></div>
    
    <div class="w-full max-w-4xl grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        
        <!-- Section illustration -->
        <div class="login-illustration transform transition-all duration-300 hidden lg:block">
            <div class="app-icon text-6xl mb-4">🇧🇯</div>
            <h2 class="header-title text-2xl font-bold mb-6">
                BéninCulture
            </h2>
            
            <div class="space-y-4 text-left mb-6">
                <div class="feature-item">
                    <span class="feature-icon">🌍</span>
                    <span class="text-earth-700 font-medium">Découvrez notre patrimoine culturel</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🎭</span>
                    <span class="text-earth-700 font-medium">Partagez vos traditions et arts</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">👥</span>
                    <span class="text-earth-700 font-medium">Rejoignez la communauté culturelle</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🏛️</span>
                    <span class="text-earth-700 font-medium">Accédez aux événements exclusifs</span>
                </div>
            </div>
            
            <div class="mt-8 p-4 bg-gradient-to-r from-earth-50 to-red-50 rounded-lg border border-earth-200">
                <p class="text-earth-600 text-sm italic">
                    "Le Bénin, berceau de la culture Vodoun et des royaumes historiques, vous accueille dans sa communauté numérique."
                </p>
            </div>
        </div>

        <!-- Formulaire de connexion -->
        <div class="login-card p-8 transform transition-all duration-300">
            
            <!-- Header avec icône culturelle -->
            <div class="text-center mb-8">
                <div class="app-icon text-5xl mb-3 lg:hidden">🇧🇯</div>
                <h1 class="header-title text-3xl font-bold mb-2">
                    BéninCulture
                </h1>
                <p class="welcome-text text-lg">
                    Bienvenue de retour !
                </p>
                <p class="text-earth-600 text-sm mt-1">Connectez-vous à votre espace culturel</p>
            </div>

            <!-- Affichage des erreurs -->
            @if ($errors->any())
                <div class="error-container p-4 rounded-lg mb-6">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-xl">🛑</span>
                        <div>
                            <span class="font-semibold">Échec de connexion</span>
                            <p class="text-sm mt-1">Veuillez vérifier vos identifiants</p>
                        </div>
                    </div>
                    <ul class="space-y-2 text-sm mt-3">
                        @foreach ($errors->all() as $error)
                            <li class="flex items-start gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-1 flex-shrink-0"></span>
                                <span>{{ $error }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Session status -->
            @if(session('status'))
                <div class="success-message p-4 rounded-lg mb-6 flex items-center gap-3">
                    <span class="text-2xl">✅</span>
                    <div>
                        <span class="font-semibold">{{ session('status') }}</span>
                        <p class="text-sm text-green-700 mt-1">Vous pouvez maintenant vous connecter</p>
                    </div>
                </div>
            @endif

            <!-- Formulaire de connexion -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div class="space-y-2">
                    <label for="email" class="field-label">Email</label>
                    <div class="input-wrapper">
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            placeholder="votre.nom@email.com"
                            class="form-input w-full rounded-xl p-4 focus:outline-none transition-all duration-300 pl-12"/>
                        <span class="absolute left-4 top-1/2 transform -translateY-1/2 text-earth-500">✉️</span>
                    </div>
                    @error('email')
                        <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                            <span>⚠️</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <label for="password" class="field-label">Mot de passe</label>
                    <div class="input-wrapper">
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            required 
                            placeholder="Votre mot de passe"
                            class="form-input w-full rounded-xl p-4 focus:outline-none transition-all duration-300 pl-12 pr-12"/>
                        <span class="absolute left-4 top-1/2 transform -translateY-1/2 text-earth-500">🔒</span>
                        <button type="button" class="password-toggle" id="togglePassword">
                            👁️
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                            <span>⚠️</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <label class="inline-flex items-center gap-3 text-earth-700 cursor-pointer group">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            name="remember" 
                            class="checkbox-custom w-5 h-5 rounded focus:ring-2 focus:ring-primary-red group-hover:border-primary-red transition-all duration-300">
                        <span class="group-hover:text-primary-red transition-all duration-300">Se souvenir de moi</span>
                    </label>

                    @if(Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="link-primary font-medium">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-primary w-full text-white py-4 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center gap-3 text-base mt-8">
                    <span class="text-xl">✨</span>
                    Se connecter
                    <span class="text-xl">→</span>
                </button>
            </form>

            <!-- Inscription -->
            <div class="text-center mt-8 pt-6 border-t border-earth-200">
                <p class="text-earth-600 text-sm mb-3">
                    Nouveau sur BéninCulture ?
                </p>
                <a href="{{ route('register') }}" class="link-primary font-semibold text-base flex items-center justify-center gap-2 group">
                    <span class="group-hover:transform group-hover:translate-x-1 transition-all duration-300">🎨</span>
                    <span>Rejoindre notre communauté culturelle</span>
                    <span class="group-hover:transform group-hover:translate-x-1 transition-all duration-300">→</span>
                </a>
            </div>

            <!-- Connexion rapide (optionnel) -->
            <div class="mt-6 pt-6 border-t border-earth-200">
                <p class="text-center text-earth-500 text-sm mb-3">
                    Ou connectez-vous rapidement
                </p>
                <div class="flex justify-center gap-4">
                    <button type="button" class="p-3 rounded-lg border-2 border-earth-200 hover:border-primary-red hover:bg-red-50 transition-all duration-300">
                        <span class="text-lg">📱</span>
                    </button>
                    <button type="button" class="p-3 rounded-lg border-2 border-earth-200 hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                        <span class="text-lg">📧</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Éléments du DOM
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const rememberCheckbox = document.getElementById('remember_me');

            // Animation d'entrée progressive
            const formInputs = document.querySelectorAll('.form-input');
            formInputs.forEach((input, index) => {
                input.style.opacity = '0';
                input.style.transform = 'translateY(20px) scale(0.98)';
                
                setTimeout(() => {
                    input.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    input.style.opacity = '1';
                    input.style.transform = 'translateY(0) scale(1)';
                }, 200 + (index * 100));
            });

            // Toggle password visibility
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
                this.classList.toggle('text-primary-red');
            });

            // Validation en temps réel avec effets visuels
            function validateInput(input, type) {
                const value = input.value.trim();
                const wrapper = input.parentElement;
                
                if (value === '') {
                    input.classList.remove('border-green-500', 'border-red-500', 'animate-pulse');
                    wrapper.classList.remove('transform', 'scale-[1.02]');
                    return;
                }

                let isValid = false;

                if (type === 'email') {
                    isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                } else if (type === 'password') {
                    isValid = value.length >= 8;
                }

                input.classList.toggle('border-green-500', isValid);
                input.classList.toggle('border-red-500', !isValid);
                input.classList.add('animate-pulse');
                
                // Effet sur le wrapper
                if (isValid) {
                    wrapper.classList.add('transform', 'scale-[1.02]');
                    setTimeout(() => {
                        wrapper.classList.remove('transform', 'scale-[1.02]');
                    }, 300);
                }
                
                setTimeout(() => {
                    input.classList.remove('animate-pulse');
                }, 500);
            }

            emailInput.addEventListener('input', () => validateInput(emailInput, 'email'));
            passwordInput.addEventListener('input', () => validateInput(passwordInput, 'password'));

            // Effet sur la checkbox "Se souvenir de moi"
            rememberCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    this.parentElement.classList.add('text-primary-red');
                    this.parentElement.querySelector('span').innerHTML = '✓ Se souvenir de moi';
                } else {
                    this.parentElement.classList.remove('text-primary-red');
                    this.parentElement.querySelector('span').innerHTML = 'Se souvenir de moi';
                }
            });

            // Effet de survol amélioré sur les liens
            const links = document.querySelectorAll('.link-primary');
            links.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                link.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Effet sur le bouton de soumission
            const submitBtn = document.querySelector('button[type="submit"]');
            submitBtn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.02)';
            });
            
            submitBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });

            // Effet de saisie automatique
            const isAutofilled = () => {
                return emailInput.matches(':-webkit-autofill') || 
                       emailInput.matches(':-moz-autofill') ||
                       emailInput.value && !emailInput.classList.contains('empty');
            };

            // Vérifier l'autofill au chargement
            setTimeout(() => {
                if (isAutofilled()) {
                    emailInput.classList.add('border-green-500');
                    emailInput.parentElement.classList.add('transform', 'scale-[1.02]');
                }
            }, 100);

            // Animation au chargement de la carte
            setTimeout(() => {
                document.querySelector('.login-card').style.transform = 'translateY(0)';
            }, 100);

            // Message d'accueil pour les retours
            const lastVisit = localStorage.getItem('lastVisit');
            const now = Date.now();
            
            if (!lastVisit) {
                // Premier visite
                console.log('Bienvenue sur BéninCulture !');
            } else if (now - lastVisit > 7 * 24 * 60 * 60 * 1000) {
                // Retour après plus d'une semaine
                console.log('Content de vous revoir !');
            }
            
            localStorage.setItem('lastVisit', now);
        });
    </script>

</body>
</html>