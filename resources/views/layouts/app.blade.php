<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Culture Bénin - Patrimoine & Traditions')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles spécifiques pour le design Culture Bénin -->
    <style>
        /* Reset et styles de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
            background-color: #000;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Image statique en arrière-plan (parallaxe) */
        .static-background {
            position: fixed;
            inset: 0;
            background-image: url("{{ asset('images/benin-ganvie_girl.webp') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.7;
            z-index: -1;
        }

        /* Containers Noirs et Blancs génériques */
        .black-container {
            background-color: rgba(0, 0, 0, 0.85);
            color: white;
            padding: 5rem 2rem;
            width: 100%;
            position: relative;
            z-index: 10;
        }

        .white-container {
            background-color: rgba(255, 255, 255, 0.95);
            color: #333;
            max-width: 1400px;
            margin: 4rem auto;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            position: relative;
            z-index: 10;
        }

        /* Footer style Culture Bénin */
        .footer-culture-benin {
            background-color: #222;
            color: #ccc;
            padding: 3rem 2rem 1.5rem;
            text-align: center;
            position: relative;
            z-index: 10;
            margin-top: auto;
            width: 100%;
        }

        .footer-culture-benin .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-culture-benin .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 0.95rem;
        }

        .footer-culture-benin .footer-links a:hover {
            color: #ffd700;
        }

        .footer-culture-benin .footer-links i {
            margin-right: 8px;
        }

        .footer-culture-benin .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 1.5rem;
            margin-top: 1.5rem;
            color: #aaa;
            font-size: 0.9rem;
        }

        /* Boutons style Culture Bénin */
        .btn-culture {
            display: inline-block;
            background-color: #b22222;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            font-size: 1rem;
            border: none;
            cursor: pointer;
        }

        .btn-culture:hover {
            background-color: #8b0000;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            color: white;
        }

        .btn-culture-yellow {
            background-color: #ffd700;
            color: #333;
        }

        .btn-culture-yellow:hover {
            background-color: #e6c200;
            color: #333;
        }

        /* Cartes style Culture Bénin */
        .card-culture {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
            transition: transform 0.3s;
        }

        .card-culture:hover {
            transform: translateY(-10px);
        }

        /* Utilitaires */
        .text-culture-red { color: #b22222; }
        .text-culture-yellow { color: #ffd700; }
        .bg-culture-red { background-color: #b22222; }
        .bg-culture-yellow { background-color: #ffd700; }

        /* Responsive */
        @media (max-width: 768px) {
            .white-container {
                margin: 2rem;
                padding: 2rem;
            }
            
            .footer-culture-benin .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
        }

        /* Espacement pour les pages avec content */
        .page-content {
            flex: 1;
            position: relative;
            z-index: 1;
        }

        /* Navigation intégrée dans votre style */
        .nav-culture-benin {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
            border-bottom: 2px solid #ffd700;
        }

        .nav-culture-benin .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-culture-benin .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-culture-benin .logo i {
            color: #ffd700;
            font-size: 2rem;
        }

        .nav-culture-benin .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-culture-benin .nav-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        .nav-culture-benin .nav-links a:hover {
            color: #ffd700;
        }

        .nav-culture-benin .nav-links a.active {
            color: #ffd700;
            border-bottom: 2px solid #ffd700;
            padding-bottom: 5px;
        }

        .nav-culture-benin .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .nav-culture-benin {
                padding: 1rem;
            }
            
            .nav-culture-benin .nav-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-culture-benin .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
        }
    </style>
    
    <!-- Additional CSS -->
    @stack('styles')
</head>
<body>
    <!-- Image de fond fixe pour l'effet parallaxe -->
    <div class="static-background"></div>

    <!-- Navigation Culture Bénin -->
    <nav class="nav-culture-benin">
        <div class="nav-container">
            <a href="{{ route('open') }}" class="logo">
                <i class="fas fa-landmark"></i>
                <span>Culture Bénin</span>
            </a>
            
            <div class="nav-links">
                <a href="{{ route('explorer.index') }}" class="{{ request()->routeIs('explorer.*') ? 'active' : '' }}">
                    <i class="fas fa-globe-americas"></i> Explorateur
                </a>
                
                @auth
                    @if(Auth::user()->role === 'contributeur' || Auth::user()->role === 'admin')
                        <a href="{{ route('contributeur.dashboard') }}" class="{{ request()->routeIs('contributeur.dashboard') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt"></i> Tableau de bord
                        </a>
                        
                        <a href="{{ route('contributeur.contenus.index') }}" class="{{ request()->routeIs('contributeur.contenus.*') ? 'active' : '' }}">
                            <i class="fas fa-book-open"></i> Mes contenus
                        </a>
                        
                        <a href="{{ route('contributeur.medias.index') }}" class="{{ request()->routeIs('contributeur.medias.*') ? 'active' : '' }}">
                            <i class="fas fa-images"></i> Mes médias
                        </a>
                    @else
                        <a href="{{ route('user.dashboard') }}" class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt"></i> Tableau de bord
                        </a>
                    @endif
                    
                    <a href="{{ route('commentaires.index') }}" class="{{ request()->routeIs('commentaires.*') ? 'active' : '' }}">
                        <i class="fas fa-comments"></i> Mes commentaires
                    </a>
                @endauth
            </div>
            
            <div class="user-menu">
                @auth
                    <div class="relative group">
                        <button class="flex items-center gap-2 text-white">
                            @if(Auth::user()->photo)
                                <img src="{{ asset('storage/' . Auth::user()->photo) }}" 
                                     class="w-8 h-8 rounded-full border-2 border-yellow-400" 
                                     alt="{{ Auth::user()->name }}">
                            @else
                                <div class="w-8 h-8 bg-gray-300 rounded-full border-2 border-yellow-400 flex items-center justify-center">
                                    <i class="fas fa-user text-gray-600"></i>
                                </div>
                            @endif
                            <span class="hidden md:inline">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-sm"></i>
                        </button>
                        
                        <div class="absolute right-0 mt-2 w-48 bg-black bg-opacity-90 backdrop-blur-sm rounded-lg shadow-xl border border-yellow-500 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-white hover:bg-yellow-500 hover:text-black first:rounded-t-lg transition">
                                <i class="fas fa-user-circle mr-2"></i> Mon profil
                            </a>
                            
                            @if(Auth::user()->role === 'contributeur')
                                <a href="{{ route('contributeur.contenus.create') }}" class="block px-4 py-3 text-white hover:bg-yellow-500 hover:text-black transition">
                                    <i class="fas fa-plus-circle mr-2"></i> Nouveau contenu
                                </a>
                            @endif
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-3 text-white hover:bg-red-600 last:rounded-b-lg transition">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="flex gap-2">
                        <a href="{{ route('login') }}" class="text-white hover:text-yellow-400 transition">
                            <i class="fas fa-sign-in-alt mr-1"></i> Connexion
                        </a>
                        <span class="text-gray-400">|</span>
                        <a href="{{ route('register') }}" class="text-yellow-400 hover:text-yellow-300 transition">
                            <i class="fas fa-user-plus mr-1"></i> Inscription
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="page-content">
        <!-- Messages Flash -->
        @if(session('success'))
            <div class="fixed top-20 right-4 z-50 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-3"></i>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="fixed top-20 right-4 z-50 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-3"></i>
                    <span>{{ session('error') }}</span>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="max-w-7xl mx-auto px-4 mt-4">
                <div class="bg-red-600 text-white p-4 rounded-lg">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-exclamation-triangle mr-3"></i>
                        <strong>Veuillez corriger les erreurs suivantes :</strong>
                    </div>
                    <ul class="list-disc list-inside text-sm">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <!-- Contenu spécifique à chaque page -->
        @yield('content')
    </main>

    <!-- Footer Culture Bénin -->
    <footer class="footer-culture-benin">
        <div class="footer-links">
            <a href="{{ route('explorer.index') }}">
                <i class="fas fa-globe-americas"></i> Explorateur
            </a>
            
            @auth
                @if(Auth::user()->role === 'contributeur' || Auth::user()->role === 'admin')
                    <a href="{{ route('contributeur.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                @else
                    <a href="{{ route('user.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                @endif
            @endauth
            
            <a href="{{ route('profile.edit') }}">
                <i class="fas fa-user-circle"></i> Profil
            </a>
            
            @if(Auth::check() && Auth::user()->role === 'contributeur')
                <a href="{{ route('contributeur.contenus.create') }}">
                    <i class="fas fa-plus-circle"></i> Créer un contenu
                </a>
            @endif
            
            <a href="#">
                <i class="fas fa-info-circle"></i> À propos
            </a>
            
            <a href="#">
                <i class="fas fa-envelope"></i> Contact
            </a>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Culture Bénin. Patrimoine vivant, mémoire partagée.</p>
            <p class="mt-2 text-sm">Tous droits réservés. Tous les contenus sont vérifiés par notre comité culturel.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Animation pour les messages flash
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessages = document.querySelectorAll('[class*="fixed"]');
            flashMessages.forEach(msg => {
                setTimeout(() => {
                    msg.style.transition = 'opacity 0.5s';
                    msg.style.opacity = '0';
                    setTimeout(() => msg.remove(), 500);
                }, 5000);
            });

            // Animation pour les cartes
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-up');
                    }
                });
            }, observerOptions);

            // Observer les cartes et sections
            document.querySelectorAll('.card-culture, .white-container').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
    
    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>