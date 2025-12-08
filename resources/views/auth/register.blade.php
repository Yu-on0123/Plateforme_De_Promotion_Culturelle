<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BéninCulture - Inscription</title>
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
            
            --success-50: #ecfdf5;
            --success-100: #d1fae5;
            --success-200: #a7f3d0;
            --success-300: #6ee7b7;
            --success-400: #34d399;
            --success-500: #10b981;
            --success-600: #059669;
            --success-700: #047857;
            --success-800: #065f46;
            --success-900: #064e3b;
            
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
            
            --pattern-color: rgba(139, 30, 30, 0.03);
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

        @keyframes patternMove {
            0% { background-position: 0 0; }
            100% { background-position: 100px 100px; }
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

        .register-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(139, 30, 30, 0.15);
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
            animation: fadeInUp 0.8s ease-out;
            position: relative;
            overflow: hidden;
        }

        .register-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .register-card::after {
            content: '🇧🇯';
            position: absolute;
            bottom: -20px;
            right: -20px;
            font-size: 120px;
            opacity: 0.05;
            transform: rotate(-15deg);
            pointer-events: none;
            color: var(--primary-red);
        }

        .register-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
            border-color: rgba(139, 30, 30, 0.3);
        }

        .form-input {
            background: rgba(255, 255, 255, 0.9);
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

        .form-select {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 2px solid var(--earth-300);
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(139, 30, 30, 0.05);
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23a18072'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1rem;
            color: var(--earth-800);
        }

        .form-select:focus {
            background: white;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.2), 0 4px 20px rgba(139, 30, 30, 0.15);
            transform: translateY(-2px);
        }

        .form-file {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 2px dashed var(--earth-400);
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(139, 30, 30, 0.05);
            color: var(--earth-700);
        }

        .form-file:hover {
            border-color: var(--primary-red);
            background: rgba(139, 30, 30, 0.05);
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
            background: linear-gradient(135deg, var(--success-50), var(--success-100));
            border: 2px solid var(--success-200);
            color: var(--success-800);
            box-shadow: var(--shadow);
            animation: slideInFromLeft 0.6s ease-out;
            border-left: 4px solid var(--success-500);
        }

        .password-strength {
            margin-top: 0.5rem;
        }

        .strength-bar {
            height: 6px;
            background: var(--earth-200);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 0.5rem;
        }

        .strength-fill {
            height: 100%;
            width: 0%;
            transition: all 0.3s ease;
            border-radius: 3px;
        }

        .strength-text {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .strength-weak { background: #e53e3e; }
        .strength-fair { background: var(--primary-gold); }
        .strength-good { background: #22c55e; }
        .strength-strong { background: var(--success-500); }

        .avatar-preview {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 1rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--earth-50), var(--red-50));
            border-radius: var(--radius-sm);
            border: 2px solid var(--earth-300);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .avatar-preview::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(139, 30, 30, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(209, 175, 55, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .avatar-preview:hover {
            border-color: var(--primary-red);
            transform: translateY(-2px);
        }

        .avatar-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-red);
            animation: pulse 3s infinite;
            box-shadow: 0 4px 15px rgba(139, 30, 30, 0.3);
        }

        .avatar-placeholder {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
            border: 3px solid var(--primary-red);
            animation: pulse 3s infinite;
            box-shadow: 0 4px 15px rgba(139, 30, 30, 0.3);
        }

        .cultural-pattern {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 0.1;
            pointer-events: none;
            z-index: 0;
        }

        .pattern-1 {
            top: 10%;
            left: 5%;
            background: radial-gradient(circle, var(--primary-red) 2px, transparent 3px);
            background-size: 20px 20px;
        }

        .pattern-2 {
            bottom: 10%;
            right: 5%;
            background: radial-gradient(circle, var(--primary-gold) 2px, transparent 3px);
            background-size: 20px 20px;
            transform: rotate(45deg);
        }

        .header-title {
            font-family: 'Playfair Display', serif;
            background: var(--gradient-earth);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .welcome-text {
            color: var(--earth-700);
            font-weight: 600;
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
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            color: var(--earth-800);
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 50%;
            height: 2px;
            background: var(--gradient-primary);
        }

        .text-earth-500 { color: var(--earth-500); }
        .text-earth-600 { color: var(--earth-600); }
        .text-earth-700 { color: var(--earth-700); }
        .text-earth-800 { color: var(--earth-800); }
        .border-earth-100 { border-color: var(--earth-100); }
        .border-earth-200 { border-color: var(--earth-200); }
        .border-earth-300 { border-color: var(--earth-300); }
        .text-red-600 { color: #dc2626; }
        .text-green-500 { color: var(--success-500); }
        .text-primary-600 { color: var(--primary-red); }
        .hover\:text-primary-800:hover { color: var(--red-800); }
        .bg-red-50 { background-color: var(--red-50); }
        .bg-blue-50 { background-color: #eff6ff; }
        .border-blue-500 { border-color: #3b82f6; }
        .border-green-500 { border-color: #10b981; }
        .border-red-500 { border-color: #ef4444; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen px-4 py-8">
    
    <!-- Éléments décoratifs culturels -->
    <div class="cultural-pattern pattern-1"></div>
    <div class="cultural-pattern pattern-2"></div>
    
    <div class="w-full max-w-lg register-card p-8 transform transition-all duration-300">

        <!-- Header avec icône culturelle -->
        <div class="text-center mb-8">
            <div class="app-icon text-5xl mb-3">🇧🇯</div>
            <h1 class="header-title text-4xl font-bold mb-2">
                BéninCulture
            </h1>
            <p class="welcome-text text-lg">
                Rejoignez la communauté culturelle du Bénin
            </p>
            <p class="text-earth-600 text-sm mt-2">Partagez, découvrez et célébrez notre patrimoine</p>
        </div>

        <!-- Affichage des erreurs -->
        @if ($errors->any())
            <div class="error-container p-4 rounded-lg mb-6">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-xl">🛑</span>
                    <span class="font-semibold">Veuillez corriger les erreurs suivantes</span>
                </div>
                <ul class="space-y-2 text-sm">
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
                    <p class="text-sm text-success-700 mt-1">Bienvenue dans notre communauté !</p>
                </div>
            </div>
        @endif

        <!-- Formulaire inscription -->
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Informations personnelles -->
            <div>
                <h3 class="section-title text-xl">Informations personnelles</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Nom -->
                    <div class="space-y-2">
                        <label for="nom" class="field-label">Nom de famille</label>
                        <input 
                            id="nom" 
                            type="text" 
                            name="nom" 
                            value="{{ old('nom') }}" 
                            required 
                            placeholder="Ex: DOSSOU"
                            class="form-input w-full rounded-xl p-3 focus:outline-none transition-all duration-300"/>
                        @error('nom')
                            <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Prénom -->
                    <div class="space-y-2">
                        <label for="prenom" class="field-label">Prénom</label>
                        <input 
                            id="prenom" 
                            type="text" 
                            name="prenom" 
                            value="{{ old('prenom') }}" 
                            required 
                            placeholder="Ex: Koffi"
                            class="form-input w-full rounded-xl p-3 focus:outline-none transition-all duration-300"/>
                        @error('prenom')
                            <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Coordonnées -->
            <div>
                <h3 class="section-title text-xl">Coordonnées</h3>
                <div class="space-y-4 mt-4">
                    <!-- Email -->
                    <div class="space-y-2">
                        <label for="email" class="field-label">Email</label>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            placeholder="votre.nom@email.com"
                            class="form-input w-full rounded-xl p-3 focus:outline-none transition-all duration-300"/>
                        @error('email')
                            <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Mot de passe -->
                    <div class="space-y-2">
                        <label for="password" class="field-label">Mot de passe</label>
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            required 
                            placeholder="Minimum 8 caractères"
                            class="form-input w-full rounded-xl p-3 focus:outline-none transition-all duration-300"/>
                        <div class="password-strength">
                            <div class="strength-bar">
                                <div class="strength-fill" id="passwordStrength"></div>
                            </div>
                            <div class="strength-text" id="passwordText">Force du mot de passe</div>
                        </div>
                        @error('password')
                            <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Confirmation -->
                    <div class="space-y-2">
                        <label for="password_confirmation" class="field-label">Confirmer le mot de passe</label>
                        <input 
                            id="password_confirmation" 
                            type="password" 
                            name="password_confirmation" 
                            required 
                            placeholder="Répétez votre mot de passe"
                            class="form-input w-full rounded-xl p-3 focus:outline-none transition-all duration-300"/>
                    </div>
                </div>
            </div>

            <!-- Profil -->
            <div>
                <h3 class="section-title text-xl">Profil</h3>
                <div class="space-y-4 mt-4">
                    <!-- Sexe et Langue -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Sexe -->
                        <div class="space-y-2">
                            <label for="sexe" class="field-label">Genre</label>
                            <select name="sexe" id="sexe" class="form-select w-full rounded-xl p-3 focus:outline-none transition-all duration-300" required>
                                <option value="">-- Choisir --</option>
                                <option value="M" @if(old('sexe') == 'M') selected @endif>Masculin</option>
                                <option value="F" @if(old('sexe') == 'F') selected @endif>Féminin</option>
                            </select>
                            @error('sexe')
                                <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                                    <span>⚠️</span> {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Langue -->
                        <div class="space-y-2">
                            <label for="id_langue" class="field-label">Langue préférée</label>
                            <select name="id_langue" id="id_langue" class="form-select w-full rounded-xl p-3 focus:outline-none transition-all duration-300" required>
                                <option value="">-- Choisir une langue --</option>
                                @foreach($langues as $langue)
                                    <option value="{{ $langue->id }}" @if(old('id_langue') == $langue->id) selected @endif>{{ $langue->nom }}</option>
                                @endforeach
                            </select>
                            @error('id_langue')
                                <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                                    <span>⚠️</span> {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Date de naissance -->
                    <div class="space-y-2">
                        <label for="date_naissance" class="field-label">Date de naissance</label>
                        <input 
                            id="date_naissance" 
                            type="date" 
                            name="date_naissance" 
                            value="{{ old('date_naissance') }}" 
                            required
                            class="form-input w-full rounded-xl p-3 focus:outline-none transition-all duration-300"/>
                        @error('date_naissance')
                            <p class="text-red-600 text-xs mt-1 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Photo -->
                    <div class="space-y-2">
                        <label for="photo" class="field-label">Photo de profil</label>
                        <div class="flex flex-col gap-3">
                            <input 
                                type="file" 
                                name="photo" 
                                id="photo" 
                                accept="image/*"
                                class="form-file w-full rounded-xl p-3 focus:outline-none transition-all duration-300"/>
                            <p class="text-earth-500 text-xs">Formats acceptés : JPG, PNG. Max 2MB</p>
                        </div>
                        
                        <!-- Aperçu de l'avatar -->
                        <div class="avatar-preview" id="avatarPreview">
                            <div class="avatar-placeholder" id="avatarPlaceholder">
                                <span id="avatarInitials">?</span>
                            </div>
                            <div class="avatar-info">
                                <div class="avatar-name font-semibold text-earth-800" id="avatarName">Nouveau membre</div>
                                <div class="avatar-details text-sm text-earth-600" id="avatarDetails">Bienvenue sur BéninCulture !</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-8 pt-6 border-t border-earth-200">
                <a href="{{ route('login') }}" class="link-primary font-semibold text-sm hover:text-primary-800 transition-all duration-300">
                    <span class="flex items-center gap-2">
                        <span>←</span>
                        <span>Déjà membre ? Connectez-vous</span>
                    </span>
                </a>
                <button type="submit" class="btn-primary text-white py-3 px-8 rounded-xl font-semibold transition-all duration-300 flex items-center gap-2 text-base">
                    <span>✨</span>
                    Rejoindre la communauté
                </button>
            </div>

            <div class="text-center pt-4 border-t border-earth-100">
                <p class="text-earth-500 text-sm">
                    En vous inscrivant, vous acceptez de partager et respecter 
                    <a href="#" class="text-primary-600 hover:text-primary-800 font-medium">notre charte culturelle</a>
                </p>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Éléments du DOM
            const nomInput = document.getElementById('nom');
            const prenomInput = document.getElementById('prenom');
            const passwordInput = document.getElementById('password');
            const passwordStrength = document.getElementById('passwordStrength');
            const passwordText = document.getElementById('passwordText');
            const photoInput = document.getElementById('photo');
            const avatarPreview = document.getElementById('avatarPreview');
            const avatarPlaceholder = document.getElementById('avatarPlaceholder');
            const avatarInitials = document.getElementById('avatarInitials');
            const avatarName = document.getElementById('avatarName');
            const avatarDetails = document.getElementById('avatarDetails');

            // Animation d'entrée progressive pour les champs
            const formInputs = document.querySelectorAll('.form-input, .form-select, .form-file');
            formInputs.forEach((input, index) => {
                input.style.opacity = '0';
                input.style.transform = 'translateY(20px) scale(0.98)';
                
                setTimeout(() => {
                    input.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    input.style.opacity = '1';
                    input.style.transform = 'translateY(0) scale(1)';
                }, 200 + (index * 50));
            });

            // Force du mot de passe avec indicateur Béninois
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let text = 'Force du mot de passe';
                let className = '';
                let emoji = '';
                
                if (password.length > 0) {
                    if (password.length < 6) {
                        strength = 25;
                        text = 'Faible - À améliorer';
                        className = 'strength-weak';
                        emoji = '🔴';
                    } else if (password.length < 8) {
                        strength = 50;
                        text = 'Moyen - Peut mieux faire';
                        className = 'strength-fair';
                        emoji = '🟡';
                    } else if (password.length < 12) {
                        strength = 75;
                        text = 'Bon - Sécurisé';
                        className = 'strength-good';
                        emoji = '🟢';
                    } else {
                        strength = 100;
                        text = 'Fort - Excellent';
                        className = 'strength-strong';
                        emoji = '✅';
                    }
                    
                    // Vérifier la complexité
                    const hasLower = /[a-z]/.test(password);
                    const hasUpper = /[A-Z]/.test(password);
                    const hasNumber = /[0-9]/.test(password);
                    const hasSpecial = /[^a-zA-Z0-9]/.test(password);
                    
                    let complexity = 0;
                    if (hasLower) complexity++;
                    if (hasUpper) complexity++;
                    if (hasNumber) complexity++;
                    if (hasSpecial) complexity++;
                    
                    if (complexity >= 3) {
                        strength = Math.min(strength + 10, 100);
                        text = 'Très fort ' + emoji;
                    }
                }
                
                passwordStrength.className = `strength-fill ${className}`;
                passwordStrength.style.width = `${strength}%`;
                passwordText.textContent = text;
                passwordText.style.color = getStrengthColor(strength);
            });

            function getStrengthColor(strength) {
                if (strength <= 25) return '#e53e3e';
                if (strength <= 50) return '#b45309';
                if (strength <= 75) return '#22c55e';
                return '#16a34a';
            }

            // Aperçu de l'avatar avec noms Béninois
            function updateAvatarPreview() {
                const nom = nomInput.value.trim().toUpperCase();
                const prenom = prenomInput.value.trim();
                
                if (nom || prenom) {
                    const initials = (prenom.charAt(0) + nom.charAt(0)).toUpperCase() || '?';
                    avatarInitials.textContent = initials;
                    
                    const fullName = `${prenom} ${nom}`.trim();
                    avatarName.textContent = fullName || 'Nouveau membre';
                    
                    // Suggestions de noms Béninois
                    const beninNames = ['Koffi', 'Aïcha', 'Mawulé', 'Gnonlonfin', 'Adélaïde', 'Sèdami', 'Komlan'];
                    const randomName = beninNames[Math.floor(Math.random() * beninNames.length)];
                    
                    if (!prenom) {
                        avatarDetails.textContent = `Suggestion: ${randomName} ${nom || '[Votre nom]'}`;
                    } else {
                        avatarDetails.textContent = 'Bienvenue sur BéninCulture !';
                    }
                } else {
                    avatarInitials.textContent = '?';
                    avatarName.textContent = 'Nouveau membre';
                    avatarDetails.textContent = 'Entrez votre nom pour personnaliser';
                }
            }

            nomInput.addEventListener('input', updateAvatarPreview);
            prenomInput.addEventListener('input', updateAvatarPreview);

            // Aperçu de la photo avec effet
            photoInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    if (file.size > 2 * 1024 * 1024) {
                        alert('La photo ne doit pas dépasser 2MB');
                        this.value = '';
                        return;
                    }
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        avatarPlaceholder.style.backgroundImage = `url(${e.target.result})`;
                        avatarPlaceholder.style.backgroundSize = 'cover';
                        avatarPlaceholder.style.backgroundPosition = 'center';
                        avatarInitials.style.display = 'none';
                        avatarDetails.textContent = 'Photo prête ! Cliquez pour changer';
                    };
                    reader.readAsDataURL(file);
                } else {
                    avatarPlaceholder.style.backgroundImage = '';
                    avatarInitials.style.display = 'flex';
                    updateAvatarPreview();
                }
            });

            // Validation visuelle améliorée
            function validateInput(input, type) {
                const value = input.value.trim();
                const icon = input.parentElement.querySelector('.validation-icon');
                
                if (value === '') {
                    input.classList.remove('border-green-500', 'border-red-500', 'animate-pulse');
                    if (icon) icon.remove();
                    return;
                }

                let isValid = false;
                let message = '';

                switch(type) {
                    case 'email':
                        isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                        message = isValid ? 'Email valide' : 'Format email invalide';
                        break;
                    case 'text':
                        isValid = value.length >= 2;
                        message = isValid ? 'Nom valide' : 'Minimum 2 caractères';
                        break;
                    case 'date':
                        const date = new Date(value);
                        const today = new Date();
                        const minAge = new Date(today.getFullYear() - 13, today.getMonth(), today.getDate());
                        isValid = date <= minAge;
                        message = isValid ? 'Âge valide' : 'Vous devez avoir au moins 13 ans';
                        break;
                }

                input.classList.toggle('border-green-500', isValid);
                input.classList.toggle('border-red-500', !isValid && value !== '');
                input.classList.add('animate-pulse');
                
                setTimeout(() => {
                    input.classList.remove('animate-pulse');
                }, 500);
            }

            // Appliquer la validation
            const emailInput = document.getElementById('email');
            const nomInputField = document.getElementById('nom');
            const prenomInputField = document.getElementById('prenom');
            const dateInput = document.getElementById('date_naissance');

            emailInput.addEventListener('blur', () => validateInput(emailInput, 'email'));
            nomInputField.addEventListener('blur', () => validateInput(nomInputField, 'text'));
            prenomInputField.addEventListener('blur', () => validateInput(prenomInputField, 'text'));
            dateInput.addEventListener('change', () => validateInput(dateInput, 'date'));

            // Effet sur le bouton de soumission
            const submitBtn = document.querySelector('button[type="submit"]');
            submitBtn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.02)';
            });
            
            submitBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });

            // Animation au chargement
            setTimeout(() => {
                document.querySelector('.register-card').style.transform = 'translateY(0)';
            }, 100);

            // Initialiser l'aperçu
            updateAvatarPreview();
        });
    </script>

</body>
</html>