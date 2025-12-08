<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié - BéninCulture</title>
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
        
        /* ===== CARTE DE RÉCUPÉRATION ===== */
        .recovery-card {
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .recovery-header {
            background: var(--gradient-primary);
            padding: var(--space-xl);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .recovery-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='rgba(255,255,255,0.05)' d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z'%3E%3C/path%3E%3C/svg%3E");
            opacity: 0.1;
        }
        
        .recovery-icon {
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
        
        .recovery-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }
        
        .recovery-header p {
            opacity: 0.9;
            font-size: 0.95rem;
            position: relative;
            z-index: 1;
        }
        
        .recovery-content {
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
        
        /* ===== MESSAGE DE STATUT ===== */
        .status-message {
            background: var(--gradient-success);
            color: white;
            border-radius: var(--radius-lg);
            padding: var(--space-md);
            margin-bottom: var(--space-lg);
            display: flex;
            align-items: flex-start;
            gap: var(--space-sm);
            animation: slideIn 0.5s ease;
            box-shadow: var(--shadow-sm);
        }
        
        .status-message.hidden {
            display: none;
        }
        
        .status-icon {
            font-size: 1.25rem;
            flex-shrink: 0;
            margin-top: 0.125rem;
        }
        
        .status-text {
            flex: 1;
            font-size: 0.95rem;
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
        
        .error-message {
            color: var(--red-600);
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
        
        /* ===== INSTRUCTIONS ===== */
        .instructions {
            margin-top: var(--space-lg);
            background: var(--primary-cream);
            border-radius: var(--radius-lg);
            padding: var(--space-md);
            border: 1px solid var(--earth-200);
        }
        
        .instructions h4 {
            font-size: 1rem;
            color: var(--earth-800);
            margin-bottom: var(--space-sm);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .instructions-list {
            list-style: none;
            padding-left: 0;
        }
        
        .instructions-list li {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: var(--space-xs);
            color: var(--earth-600);
            font-size: 0.9rem;
        }
        
        .instructions-list li:last-child {
            margin-bottom: 0;
        }
        
        .instructions-list i {
            color: var(--primary-red);
            margin-top: 0.125rem;
            flex-shrink: 0;
        }
        
        /* ===== LIENS UTILES ===== */
        .auth-links {
            text-align: center;
            margin-top: var(--space-xl);
            padding-top: var(--space-lg);
            border-top: 1px solid var(--earth-200);
            display: flex;
            justify-content: center;
            gap: var(--space-md);
            flex-wrap: wrap;
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
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
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
            
            .recovery-header,
            .recovery-content {
                padding: var(--space-lg);
            }
            
            .btn-primary {
                min-width: 100%;
                justify-content: center;
            }
            
            .form-actions {
                justify-content: center;
            }
            
            .auth-links {
                flex-direction: column;
                align-items: center;
                gap: var(--space-sm);
            }
        }
        
        @media (max-width: 480px) {
            .auth-container {
                max-width: 100%;
            }
            
            .recovery-header h1 {
                font-size: 1.5rem;
            }
            
            .recovery-content {
                padding: var(--space-md);
            }
            
            .recovery-icon {
                width: 64px;
                height: 64px;
                font-size: 1.5rem;
            }
            
            .info-message,
            .status-message {
                padding: var(--space-sm);
            }
        }
    </style>
</head>
<body>
    <div class="auth-container fade-in-up">
        <div class="recovery-card">
            <!-- En-tête -->
            <div class="recovery-header">
                <div class="recovery-icon">
                    <i class="fas fa-key"></i>
                </div>
                <h1>Réinitialiser le mot de passe</h1>
                <p>Nous vous aiderons à récupérer votre compte</p>
            </div>
            
            <!-- Contenu -->
            <div class="recovery-content">
                <!-- Message d'information -->
                <div class="info-message">
                    <i class="fas fa-info-circle"></i>
                    <div>
                        Mot de passe oublié ? Aucun problème. Indiquez-nous simplement votre adresse email 
                        et nous vous enverrons un lien de réinitialisation qui vous permettra d'en choisir un nouveau.
                    </div>
                </div>
                
                <!-- Message de statut -->
                @if (session('status'))
                    <div class="status-message" id="status-message">
                        <i class="fas fa-check-circle status-icon"></i>
                        <div class="status-text">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
                
                <!-- Formulaire -->
                <form method="POST" action="{{ route('password.email') }}" id="recovery-form">
                    @csrf
                    
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
                                   value="{{ old('email') }}"
                                   placeholder="votre@email.com"
                                   required
                                   autofocus
                                   autocomplete="email">
                        </div>
                        
                        @error('email')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                        
                        <!-- Validation en temps réel -->
                        <div class="email-validation" id="email-validation" style="display: none;">
                            <div class="error-message" id="email-error">
                                <i class="fas fa-exclamation-circle"></i>
                                <span id="email-error-text"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Instructions -->
                    <div class="instructions">
                        <h4><i class="fas fa-lightbulb"></i> Conseils importants</h4>
                        <ul class="instructions-list">
                            <li>
                                <i class="fas fa-shield-alt"></i>
                                <span>Le lien de réinitialisation est sécurisé et valable 1 heure</span>
                            </li>
                            <li>
                                <i class="fas fa-search"></i>
                                <span>Vérifiez votre dossier spam si vous ne recevez pas l'email</span>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>L'email peut mettre quelques minutes à arriver</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Bouton de soumission -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" id="submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            Envoyer le lien de réinitialisation
                        </button>
                    </div>
                </form>
                
                <!-- Liens utiles -->
                <div class="auth-links">
                    <a href="{{ route('login') }}" class="auth-link">
                        <i class="fas fa-sign-in-alt"></i>
                        Retour à la connexion
                    </a>
                    <a href="{{ route('register') }}" class="auth-link">
                        <i class="fas fa-user-plus"></i>
                        Créer un compte
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const submitBtn = document.getElementById('submit-btn');
            const form = document.getElementById('recovery-form');
            const emailValidation = document.getElementById('email-validation');
            const emailError = document.getElementById('email-error');
            const emailErrorText = document.getElementById('email-error-text');
            const statusMessage = document.getElementById('status-message');
            
            // Focus sur le champ email
            emailInput.focus();
            
            // Validation de l'email en temps réel
            emailInput.addEventListener('input', function() {
                validateEmail(this.value);
            });
            
            emailInput.addEventListener('blur', function() {
                validateEmail(this.value, true);
            });
            
            function validateEmail(email, showError = false) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                emailValidation.style.display = 'none';
                emailInput.classList.remove('is-invalid', 'is-valid');
                
                if (email.length === 0) {
                    if (showError) {
                        showEmailError('Veuillez entrer votre adresse email');
                    }
                    return false;
                }
                
                if (!emailRegex.test(email)) {
                    if (showError) {
                        showEmailError('Veuillez entrer une adresse email valide');
                    }
                    return false;
                }
                
                // Email valide
                emailInput.classList.add('is-valid');
                return true;
            }
            
            function showEmailError(message) {
                emailErrorText.textContent = message;
                emailValidation.style.display = 'block';
                emailInput.classList.add('is-invalid');
                shakeElement(emailInput);
            }
            
            // Animation de secousse
            function shakeElement(element) {
                element.classList.add('shake');
                setTimeout(() => {
                    element.classList.remove('shake');
                }, 500);
            }
            
            // Validation du formulaire
            form.addEventListener('submit', function(e) {
                const email = emailInput.value.trim();
                
                // Validation de l'email
                if (!validateEmail(email, true)) {
                    e.preventDefault();
                    return;
                }
                
                // Empêcher la double soumission
                if (submitBtn.classList.contains('loading')) {
                    e.preventDefault();
                    return;
                }
                
                // Mettre à jour le bouton
                submitBtn.classList.add('loading');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
                submitBtn.disabled = true;
                
                // Réinitialiser après 5 secondes (en cas d'erreur)
                setTimeout(() => {
                    submitBtn.classList.remove('loading');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 5000);
                
                // Si un message de statut existe, le cacher pendant l'envoi
                if (statusMessage) {
                    statusMessage.classList.add('hidden');
                }
            });
            
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
            
            // Afficher une notification si l'email est valide
            emailInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter' && validateEmail(this.value)) {
                    submitBtn.click();
                }
            });
            
            // Animation pour le message de statut
            if (statusMessage) {
                // Redémarrer l'animation
                setTimeout(() => {
                    statusMessage.style.animation = 'none';
                    setTimeout(() => {
                        statusMessage.style.animation = 'slideIn 0.5s ease';
                    }, 10);
                }, 100);
                
                // Cacher automatiquement après 10 secondes
                setTimeout(() => {
                    statusMessage.style.opacity = '0';
                    statusMessage.style.transform = 'translateY(-10px)';
                    setTimeout(() => {
                        statusMessage.style.display = 'none';
                    }, 300);
                }, 10000);
            }
            
            // Compteur pour éviter les spams
            let recoveryAttempts = localStorage.getItem('recovery_attempts') || 0;
            let lastRecoveryTime = localStorage.getItem('last_recovery_time') || 0;
            const now = Date.now();
            const cooldownTime = 60000; // 1 minute en millisecondes
            
            if (recoveryAttempts >= 3 && now - lastRecoveryTime < cooldownTime) {
                const remainingTime = Math.ceil((cooldownTime - (now - lastRecoveryTime)) / 1000);
                disableSubmitButton(remainingTime);
            }
            
            // Mettre à jour les tentatives lors de la soumission
            form.addEventListener('submit', function() {
                recoveryAttempts++;
                localStorage.setItem('recovery_attempts', recoveryAttempts);
                localStorage.setItem('last_recovery_time', Date.now());
                
                // Réinitialiser après 5 minutes
                setTimeout(() => {
                    localStorage.removeItem('recovery_attempts');
                }, 300000);
            });
            
            function disableSubmitButton(seconds) {
                submitBtn.disabled = true;
                const originalText = submitBtn.innerHTML;
                
                const updateButtonText = () => {
                    submitBtn.innerHTML = `<i class="fas fa-clock"></i> Réessayer dans ${seconds}s`;
                    seconds--;
                    
                    if (seconds < 0) {
                        clearInterval(timer);
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                        localStorage.removeItem('recovery_attempts');
                        localStorage.removeItem('last_recovery_time');
                    }
                };
                
                updateButtonText();
                const timer = setInterval(updateButtonText, 1000);
            }
            
            // Initialisation des animations
            setTimeout(() => {
                document.querySelectorAll('.fade-in-up').forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }, 100);
        });
    </script>
</body>
</html>