<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau mot de passe - BéninCulture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            --gradient-subtle: linear-gradient(135deg, rgba(139, 30, 30, 0.05), rgba(209, 175, 55, 0.05));
            --gradient-card: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.98));
            --gradient-success: linear-gradient(135deg, #10b981, #059669);
            
            /* Ombres */
            --shadow-sm: 0 2px 4px rgba(139, 30, 30, 0.05);
            --shadow-md: 0 4px 6px rgba(139, 30, 30, 0.08);
            --shadow-lg: 0 10px 15px rgba(139, 30, 30, 0.12);
            --shadow-xl: 0 20px 25px rgba(139, 30, 30, 0.15);
            
            /* Bordures */
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            
            /* Espacements */
            --space-xs: 0.5rem;
            --space-sm: 1rem;
            --space-md: 1.5rem;
            --space-lg: 2rem;
            --space-xl: 3rem;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--earth-50);
            color: var(--earth-800);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--space-md);
        }
        
        /* ===== CONTENEUR PRINCIPAL ===== */
        .auth-container {
            width: 100%;
            max-width: 500px;
        }
        
        /* ===== CARTE DE RÉINITIALISATION ===== */
        .reset-card {
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .reset-header {
            background: var(--gradient-primary);
            padding: var(--space-xl);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .reset-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='rgba(255,255,255,0.05)' d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z'%3E%3C/path%3E%3C/svg%3E");
            opacity: 0.1;
        }
        
        .reset-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto var(--space-md);
            font-size: 2rem;
            backdrop-filter: blur(4px);
            position: relative;
            z-index: 1;
            border: 3px solid rgba(255, 255, 255, 0.3);
            animation: float 3s ease-in-out infinite;
        }
        
        .reset-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }
        
        .reset-header p {
            opacity: 0.9;
            font-size: 0.95rem;
            position: relative;
            z-index: 1;
        }
        
        .reset-content {
            padding: var(--space-xl);
        }
        
        /* ===== MESSAGE D'INFORMATION ===== */
        .info-message {
            background: var(--earth-50);
            border: 1px solid var(--earth-200);
            border-radius: var(--radius-lg);
            padding: var(--space-md);
            margin-bottom: var(--space-lg);
            color: var(--earth-700);
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .info-message i {
            color: var(--primary-red);
            margin-right: 0.5rem;
            float: left;
            margin-top: 0.25rem;
        }
        
        /* ===== FORMULAIRE ===== */
        .form-group {
            margin-bottom: var(--space-lg);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--earth-700);
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .form-label span {
            color: var(--primary-red);
            margin-left: 0.25rem;
        }
        
        .input-group {
            position: relative;
        }
        
        .form-input {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 3rem;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-md);
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
            color: var(--earth-800);
            font-family: 'Inter', sans-serif;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.15);
        }
        
        .form-input.is-invalid {
            border-color: var(--red-500);
            background-color: var(--red-50);
        }
        
        .form-input.is-valid {
            border-color: var(--gold-500);
            background-color: var(--gold-50);
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--earth-500);
            font-size: 1rem;
        }
        
        .input-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: var(--earth-500);
            cursor: pointer;
            padding: 0.25rem;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
        }
        
        .input-toggle:hover {
            color: var(--primary-red);
            background: var(--earth-100);
        }
        
        .error-message {
            color: var(--red-600);
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        /* ===== INDICATEUR DE FORCE DU MOT DE PASSE ===== */
        .password-strength {
            margin-top: var(--space-xs);
            height: 4px;
            background: var(--earth-200);
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }
        
        .strength-bar {
            height: 100%;
            width: 0%;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        
        .strength-bar.weak {
            width: 33%;
            background: var(--red-500);
        }
        
        .strength-bar.medium {
            width: 66%;
            background: var(--gold-500);
        }
        
        .strength-bar.strong {
            width: 100%;
            background: var(--primary-red);
        }
        
        .strength-text {
            font-size: 0.75rem;
            color: var(--earth-600);
            margin-top: 0.25rem;
            text-align: right;
        }
        
        .password-rules {
            margin-top: var(--space-sm);
            padding: var(--space-sm);
            background: var(--earth-50);
            border-radius: var(--radius-sm);
            border: 1px solid var(--earth-200);
        }
        
        .rule-list {
            list-style: none;
            padding-left: 0;
        }
        
        .rule-list li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.25rem;
            font-size: 0.85rem;
            color: var(--earth-600);
        }
        
        .rule-list li:last-child {
            margin-bottom: 0;
        }
        
        .rule-list i {
            font-size: 0.75rem;
            width: 16px;
            text-align: center;
        }
        
        .rule-list li.valid i {
            color: var(--gold-500);
        }
        
        .rule-list li.invalid i {
            color: var(--earth-400);
        }
        
        /* ===== CONFIRMATION DE MOT DE PASSE ===== */
        .confirmation-status {
            margin-top: var(--space-xs);
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .confirmation-status.show {
            opacity: 1;
        }
        
        .confirmation-status.match {
            color: var(--gold-600);
        }
        
        .confirmation-status.mismatch {
            color: var(--red-600);
        }
        
        /* ===== BOUTON DE SOUMISSION ===== */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: var(--space-xl);
        }
        
        .btn {
            padding: 0.875rem 2rem;
            border-radius: var(--radius-md);
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Inter', sans-serif;
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            min-width: 180px;
            justify-content: center;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        .btn-primary.loading {
            opacity: 0.8;
            cursor: not-allowed;
        }
        
        /* ===== LIENS UTILES ===== */
        .auth-links {
            text-align: center;
            margin-top: var(--space-xl);
            padding-top: var(--space-lg);
            border-top: 1px solid var(--earth-200);
        }
        
        .auth-link {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .auth-link:hover {
            color: var(--earth-800);
            text-decoration: underline;
        }
        
        /* ===== ANIMATIONS ===== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.5s ease forwards;
        }
        
        .shake {
            animation: shake 0.5s ease;
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            body {
                padding: var(--space-sm);
            }
            
            .auth-container {
                max-width: 400px;
            }
            
            .reset-header,
            .reset-content {
                padding: var(--space-lg);
            }
            
            .btn-primary {
                min-width: 100%;
                justify-content: center;
            }
            
            .form-actions {
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .auth-container {
                max-width: 100%;
            }
            
            .reset-header h1 {
                font-size: 1.5rem;
            }
            
            .reset-content {
                padding: var(--space-md);
            }
            
            .reset-icon {
                width: 64px;
                height: 64px;
                font-size: 1.5rem;
            }
            
            .info-message {
                padding: var(--space-sm);
            }
        }
    </style>
</head>
<body>
    <div class="auth-container fade-in-up">
        <div class="reset-card">
            <!-- En-tête -->
            <div class="reset-header">
                <div class="reset-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h1>Nouveau mot de passe</h1>
                <p>Choisissez un mot de passe sécurisé pour votre compte</p>
            </div>
            
            <!-- Contenu -->
            <div class="reset-content">
                <!-- Message d'information -->
                <div class="info-message">
                    <i class="fas fa-info-circle"></i>
                    <div>
                        Veuillez entrer votre adresse email et choisir un nouveau mot de passe sécurisé.
                        Assurez-vous que votre mot de passe respecte nos critères de sécurité.
                    </div>
                </div>
                
                <!-- Formulaire -->
                <form method="POST" action="{{ route('password.store') }}" id="reset-form">
                    @csrf
                    
                    <!-- Token de réinitialisation -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope"></i> Adresse email
                            <span>*</span>
                        </label>
                        
                        <div class="input-group">
                            <i class="fas fa-at input-icon"></i>
                            <input id="email"
                                   class="form-input @error('email') is-invalid @enderror"
                                   type="email"
                                   name="email"
                                   value="{{ old('email', $request->email) }}"
                                   placeholder="votre@email.com"
                                   required
                                   autofocus
                                   autocomplete="username">
                        </div>
                        
                        @error('email')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!-- Mot de passe -->
                    <div class="form-group">
                        <label for="password" class="form-label">
                            <i class="fas fa-key"></i> Nouveau mot de passe
                            <span>*</span>
                        </label>
                        
                        <div class="input-group">
                            <i class="fas fa-lock input-icon"></i>
                            <input id="password"
                                   class="form-input @error('password') is-invalid @enderror"
                                   type="password"
                                   name="password"
                                   placeholder="Votre nouveau mot de passe"
                                   required
                                   autocomplete="new-password">
                            
                            <button type="button" class="input-toggle" id="toggle-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        
                        <!-- Indicateur de force -->
                        <div class="password-strength">
                            <div class="strength-bar" id="strength-bar"></div>
                        </div>
                        <div class="strength-text" id="strength-text">Force du mot de passe</div>
                        
                        <!-- Règles du mot de passe -->
                        <div class="password-rules">
                            <ul class="rule-list" id="password-rules">
                                <li class="invalid" id="rule-length">
                                    <i class="fas fa-circle"></i>
                                    <span>Au moins 8 caractères</span>
                                </li>
                                <li class="invalid" id="rule-uppercase">
                                    <i class="fas fa-circle"></i>
                                    <span>Au moins une majuscule</span>
                                </li>
                                <li class="invalid" id="rule-lowercase">
                                    <i class="fas fa-circle"></i>
                                    <span>Au moins une minuscule</span>
                                </li>
                                <li class="invalid" id="rule-number">
                                    <i class="fas fa-circle"></i>
                                    <span>Au moins un chiffre</span>
                                </li>
                                <li class="invalid" id="rule-special">
                                    <i class="fas fa-circle"></i>
                                    <span>Au moins un caractère spécial</span>
                                </li>
                            </ul>
                        </div>
                        
                        @error('password')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!-- Confirmation du mot de passe -->
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">
                            <i class="fas fa-key"></i> Confirmer le mot de passe
                            <span>*</span>
                        </label>
                        
                        <div class="input-group">
                            <i class="fas fa-lock input-icon"></i>
                            <input id="password_confirmation"
                                   class="form-input @error('password_confirmation') is-invalid @enderror"
                                   type="password"
                                   name="password_confirmation"
                                   placeholder="Confirmez votre nouveau mot de passe"
                                   required
                                   autocomplete="new-password">
                            
                            <button type="button" class="input-toggle" id="toggle-confirm-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        
                        <!-- Statut de confirmation -->
                        <div class="confirmation-status" id="confirmation-status">
                            <i class="fas fa-check-circle"></i>
                            <span id="confirmation-text">Les mots de passe correspondent</span>
                        </div>
                        
                        @error('password_confirmation')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!-- Bouton de soumission -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" id="submit-btn">
                            <i class="fas fa-sync-alt"></i>
                            Réinitialiser le mot de passe
                        </button>
                    </div>
                </form>
                
                <!-- Liens utiles -->
                <div class="auth-links">
                    <a href="{{ route('login') }}" class="auth-link">
                        <i class="fas fa-sign-in-alt"></i>
                        Retour à la connexion
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password_confirmation');
            const togglePasswordBtn = document.getElementById('toggle-password');
            const toggleConfirmBtn = document.getElementById('toggle-confirm-password');
            const submitBtn = document.getElementById('submit-btn');
            const form = document.getElementById('reset-form');
            const strengthBar = document.getElementById('strength-bar');
            const strengthText = document.getElementById('strength-text');
            const confirmationStatus = document.getElementById('confirmation-status');
            const confirmationText = document.getElementById('confirmation-text');
            
            // Focus sur le champ email
            emailInput.focus();
            
            // Basculer la visibilité des mots de passe
            togglePasswordBtn.addEventListener('click', function() {
                togglePasswordVisibility(passwordInput, this);
            });
            
            toggleConfirmBtn.addEventListener('click', function() {
                togglePasswordVisibility(confirmPasswordInput, this);
            });
            
            function togglePasswordVisibility(input, button) {
                const icon = button.querySelector('i');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                if (type === 'text') {
                    icon.className = 'fas fa-eye-slash';
                    button.setAttribute('title', 'Cacher le mot de passe');
                } else {
                    icon.className = 'fas fa-eye';
                    button.setAttribute('title', 'Afficher le mot de passe');
                }
            }
            
            // Validation de l'email en temps réel
            emailInput.addEventListener('input', validateEmail);
            emailInput.addEventListener('blur', () => validateEmail(true));
            
            function validateEmail(showError = false) {
                const email = emailInput.value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                emailInput.classList.remove('is-invalid', 'is-valid');
                
                if (email.length === 0) return false;
                
                if (!emailRegex.test(email)) {
                    if (showError) {
                        emailInput.classList.add('is-invalid');
                    }
                    return false;
                }
                
                emailInput.classList.add('is-valid');
                return true;
            }
            
            // Vérification de la force du mot de passe
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                updatePasswordStrength(password);
                updatePasswordRules(password);
                checkPasswordMatch();
            });
            
            // Vérification de la correspondance des mots de passe
            confirmPasswordInput.addEventListener('input', checkPasswordMatch);
            
            function checkPasswordMatch() {
                const password = passwordInput.value;
                const confirm = confirmPasswordInput.value;
                
                if (confirm.length === 0) {
                    confirmationStatus.classList.remove('show', 'match', 'mismatch');
                    return;
                }
                
                confirmationStatus.classList.add('show');
                
                if (password === confirm) {
                    confirmationStatus.classList.add('match');
                    confirmationStatus.classList.remove('mismatch');
                    confirmationText.textContent = 'Les mots de passe correspondent';
                    confirmPasswordInput.classList.remove('is-invalid');
                    confirmPasswordInput.classList.add('is-valid');
                } else {
                    confirmationStatus.classList.add('mismatch');
                    confirmationStatus.classList.remove('match');
                    confirmationText.textContent = 'Les mots de passe ne correspondent pas';
                    confirmPasswordInput.classList.add('is-invalid');
                    confirmPasswordInput.classList.remove('is-valid');
                }
            }
            
            function updatePasswordStrength(password) {
                let strength = 0;
                
                // Règles de force
                if (password.length >= 8) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[a-z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;
                
                // Mettre à jour la barre de force
                strengthBar.className = 'strength-bar';
                strengthBar.style.width = '0%';
                
                if (password.length === 0) {
                    strengthText.textContent = 'Force du mot de passe';
                    return;
                }
                
                if (strength <= 2) {
                    strengthBar.classList.add('weak');
                    strengthText.textContent = 'Faible';
                    strengthText.style.color = 'var(--red-600)';
                } else if (strength <= 4) {
                    strengthBar.classList.add('medium');
                    strengthText.textContent = 'Moyen';
                    strengthText.style.color = 'var(--gold-600)';
                } else {
                    strengthBar.classList.add('strong');
                    strengthText.textContent = 'Fort';
                    strengthText.style.color = 'var(--primary-red)';
                }
            }
            
            function updatePasswordRules(password) {
                const rules = {
                    length: password.length >= 8,
                    uppercase: /[A-Z]/.test(password),
                    lowercase: /[a-z]/.test(password),
                    number: /[0-9]/.test(password),
                    special: /[^A-Za-z0-9]/.test(password)
                };
                
                // Mettre à jour chaque règle
                Object.keys(rules).forEach(rule => {
                    const ruleElement = document.getElementById(`rule-${rule}`);
                    const icon = ruleElement.querySelector('i');
                    
                    if (rules[rule]) {
                        ruleElement.classList.remove('invalid');
                        ruleElement.classList.add('valid');
                        icon.className = 'fas fa-check-circle';
                        icon.style.color = 'var(--gold-500)';
                    } else {
                        ruleElement.classList.remove('valid');
                        ruleElement.classList.add('invalid');
                        icon.className = 'fas fa-circle';
                        icon.style.color = 'var(--earth-400)';
                    }
                });
            }
            
            // Validation du formulaire
            form.addEventListener('submit', function(e) {
                const email = emailInput.value.trim();
                const password = passwordInput.value;
                const confirm = confirmPasswordInput.value;
                let isValid = true;
                
                // Validation de l'email
                if (!validateEmail(true)) {
                    e.preventDefault();
                    isValid = false;
                    shakeElement(emailInput);
                }
                
                // Validation du mot de passe
                if (password.length === 0) {
                    e.preventDefault();
                    showPasswordError('Veuillez entrer un mot de passe');
                    isValid = false;
                } else if (password.length < 8) {
                    e.preventDefault();
                    showPasswordError('Le mot de passe doit contenir au moins 8 caractères');
                    isValid = false;
                }
                
                // Validation de la confirmation
                if (password !== confirm) {
                    e.preventDefault();
                    showConfirmError('Les mots de passe ne correspondent pas');
                    isValid = false;
                }
                
                // Empêcher la double soumission
                if (isValid && submitBtn.classList.contains('loading')) {
                    e.preventDefault();
                    return;
                }
                
                // Mettre à jour le bouton
                if (isValid) {
                    submitBtn.classList.add('loading');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Réinitialisation...';
                    submitBtn.disabled = true;
                    
                    // Réinitialiser après 5 secondes
                    setTimeout(() => {
                        submitBtn.classList.remove('loading');
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 5000);
                }
            });
            
            function showPasswordError(message) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                
                // Supprimer les anciennes erreurs
                const existingError = passwordInput.parentElement.parentElement.querySelector('.error-message:not([data-server])');
                if (existingError) existingError.remove();
                
                passwordInput.parentElement.parentElement.appendChild(errorDiv);
                passwordInput.classList.add('is-invalid');
                shakeElement(passwordInput);
            }
            
            function showConfirmError(message) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                
                // Supprimer les anciennes erreurs
                const existingError = confirmPasswordInput.parentElement.parentElement.querySelector('.error-message:not([data-server])');
                if (existingError) existingError.remove();
                
                confirmPasswordInput.parentElement.parentElement.appendChild(errorDiv);
                confirmPasswordInput.classList.add('is-invalid');
                shakeElement(confirmPasswordInput);
            }
            
            function shakeElement(element) {
                element.classList.add('shake');
                setTimeout(() => {
                    element.classList.remove('shake');
                }, 500);
            }
            
            // Animation pour le bouton au survol
            submitBtn.addEventListener('mouseenter', function() {
                if (!this.classList.contains('loading')) {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = 'var(--shadow-lg)';
                }
            });
            
            submitBtn.addEventListener('mouseleave', function() {
                if (!this.classList.contains('loading')) {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                }
            });
            
            // Initialisation des animations
            setTimeout(() => {
                document.querySelectorAll('.fade-in-up').forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }, 100);
            
            // Initialiser la validation
            if (emailInput.value) validateEmail();
            if (passwordInput.value) {
                updatePasswordStrength(passwordInput.value);
                updatePasswordRules(passwordInput.value);
            }
            checkPasswordMatch();
        });
    </script>
</body>
</html>