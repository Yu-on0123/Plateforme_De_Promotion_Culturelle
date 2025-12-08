<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmer le mot de passe - BéninCulture</title>
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
        
        /* ===== CARTE D'AUTHENTIFICATION ===== */
        .auth-card {
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .auth-header {
            background: var(--gradient-primary);
            padding: var(--space-xl);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .auth-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='rgba(255,255,255,0.05)' d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z'%3E%3C/path%3E%3C/svg%3E");
            opacity: 0.1;
        }
        
        .auth-icon {
            width: 64px;
            height: 64px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto var(--space-md);
            font-size: 1.75rem;
            backdrop-filter: blur(4px);
            position: relative;
            z-index: 1;
        }
        
        .auth-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }
        
        .auth-header p {
            opacity: 0.9;
            font-size: 0.95rem;
            position: relative;
            z-index: 1;
        }
        
        .auth-content {
            padding: var(--space-xl);
        }
        
        /* ===== MESSAGE D'INFORMATION ===== */
        .info-message {
            background: var(--earth-50);
            border: 1px solid var(--earth-200);
            border-radius: var(--radius-lg);
            padding: var(--space-md);
            margin-bottom: var(--space-lg);
            text-align: center;
            color: var(--earth-700);
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .info-message i {
            color: var(--primary-red);
            margin-right: 0.5rem;
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
        
        /* ===== LIENS UTILES ===== */
        .auth-links {
            text-align: center;
            margin-top: var(--space-xl);
            padding-top: var(--space-lg);
            border-top: 1px solid var(--earth-200);
        }
        
        .auth-links a {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .auth-links a:hover {
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
            
            .auth-header,
            .auth-content {
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
            
            .auth-header h1 {
                font-size: 1.5rem;
            }
            
            .auth-content {
                padding: var(--space-md);
            }
            
            .auth-icon {
                width: 56px;
                height: 56px;
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container fade-in-up">
        <div class="auth-card">
            <!-- En-tête -->
            <div class="auth-header">
                <div class="auth-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h1>Zone sécurisée</h1>
                <p>Confirmez votre identité pour continuer</p>
            </div>
            
            <!-- Contenu -->
            <div class="auth-content">
                <!-- Message d'information -->
                <div class="info-message">
                    <i class="fas fa-info-circle"></i>
                    Cette zone de l'application nécessite une confirmation de sécurité.
                    Veuillez confirmer votre mot de passe avant de continuer.
                </div>
                
                <!-- Formulaire -->
                <form method="POST" action="{{ route('password.confirm') }}" id="confirm-form">
                    @csrf
                    
                    <!-- Mot de passe -->
                    <div class="form-group">
                        <label for="password" class="form-label">
                            <i class="fas fa-key"></i> Mot de passe
                            <span>*</span>
                        </label>
                        
                        <div class="input-group">
                            <i class="fas fa-lock input-icon"></i>
                            <input id="password"
                                   class="form-input @error('password') is-invalid @enderror"
                                   type="password"
                                   name="password"
                                   placeholder="Entrez votre mot de passe"
                                   required
                                   autocomplete="current-password">
                            
                            <button type="button" class="input-toggle" id="toggle-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        
                        @error('password')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!-- Bouton de confirmation -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" id="submit-btn">
                            <i class="fas fa-check-circle"></i>
                            Confirmer
                        </button>
                    </div>
                </form>
                
                <!-- Liens utiles -->
                <div class="auth-links">
                    <a href="{{ route('password.request') }}">
                        <i class="fas fa-question-circle"></i>
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePasswordBtn = document.getElementById('toggle-password');
            const toggleIcon = togglePasswordBtn.querySelector('i');
            const form = document.getElementById('confirm-form');
            const submitBtn = document.getElementById('submit-btn');
            
            // Basculer la visibilité du mot de passe
            togglePasswordBtn.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Changer l'icône
                if (type === 'text') {
                    toggleIcon.className = 'fas fa-eye-slash';
                    togglePasswordBtn.setAttribute('title', 'Cacher le mot de passe');
                } else {
                    toggleIcon.className = 'fas fa-eye';
                    togglePasswordBtn.setAttribute('title', 'Afficher le mot de passe');
                }
            });
            
            // Validation du formulaire
            form.addEventListener('submit', function(e) {
                const password = passwordInput.value.trim();
                
                // Réinitialiser les erreurs
                passwordInput.classList.remove('is-invalid');
                const existingError = document.querySelector('.error-message:not([data-error])');
                if (existingError) {
                    existingError.remove();
                }
                
                // Validation basique
                if (password.length === 0) {
                    e.preventDefault();
                    showError('Veuillez entrer votre mot de passe.', 'password');
                    shakeElement(passwordInput);
                    return;
                }
                
                if (password.length < 8) {
                    e.preventDefault();
                    showError('Le mot de passe doit contenir au moins 8 caractères.', 'password');
                    shakeElement(passwordInput);
                    return;
                }
                
                // Désactiver le bouton pendant l'envoi
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Vérification...';
            });
            
            // Afficher une erreur
            function showError(message, fieldId) {
                const field = document.getElementById(fieldId);
                field.classList.add('is-invalid');
                
                // Créer le message d'erreur
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.setAttribute('data-error', 'true');
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                
                // Insérer après le champ
                field.parentNode.parentNode.appendChild(errorDiv);
                
                // Focus sur le champ
                field.focus();
                
                // Scroll vers l'erreur
                errorDiv.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
            
            // Animation de secousse
            function shakeElement(element) {
                element.classList.add('shake');
                setTimeout(() => {
                    element.classList.remove('shake');
                }, 500);
            }
            
            // Feedback visuel sur la force du mot de passe
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                
                // Retirer les classes de force
                this.classList.remove('weak', 'medium', 'strong');
                
                if (password.length === 0) return;
                
                // Calculer la force
                let strength = 0;
                if (password.length >= 8) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[a-z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;
                
                // Appliquer la classe correspondante
                if (strength <= 2) {
                    this.classList.add('weak');
                    this.style.borderColor = 'var(--red-400)';
                } else if (strength <= 4) {
                    this.classList.add('medium');
                    this.style.borderColor = 'var(--gold-400)';
                } else {
                    this.classList.add('strong');
                    this.style.borderColor = 'var(--primary-red)';
                }
            });
            
            // Focus sur le champ de mot de passe au chargement
            passwordInput.focus();
            
            // Empêcher la soumission avec Entrée sur d'autres champs
            form.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && e.target !== passwordInput) {
                    e.preventDefault();
                }
            });
            
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