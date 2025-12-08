<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de l'email - BéninCulture</title>
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
        
        /* ===== CARTE DE VÉRIFICATION ===== */
        .verification-card {
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .verification-header {
            background: var(--gradient-primary);
            padding: var(--space-xl);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .verification-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='rgba(255,255,255,0.05)' d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z'%3E%3C/path%3E%3C/svg%3E");
            opacity: 0.1;
        }
        
        .verification-icon {
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
        }
        
        .verification-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }
        
        .verification-header p {
            opacity: 0.9;
            font-size: 0.95rem;
            position: relative;
            z-index: 1;
        }
        
        .verification-content {
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
        
        /* ===== MESSAGE DE SUCCÈS ===== */
        .success-message {
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
        
        .success-icon {
            font-size: 1.25rem;
            flex-shrink: 0;
            margin-top: 0.125rem;
        }
        
        .success-text {
            flex: 1;
            font-size: 0.95rem;
        }
        
        /* ===== ACTIONS ===== */
        .verification-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: var(--space-md);
            margin-top: var(--space-xl);
            padding-top: var(--space-lg);
            border-top: 1px solid var(--earth-200);
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
        
        .btn-outline {
            background: transparent;
            color: var(--earth-700);
            border: 1px solid var(--earth-300);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-outline:hover {
            background: var(--earth-100);
            border-color: var(--earth-400);
            color: var(--earth-800);
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
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.5s ease forwards;
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            body {
                padding: var(--space-sm);
            }
            
            .auth-container {
                max-width: 400px;
            }
            
            .verification-header,
            .verification-content {
                padding: var(--space-lg);
            }
            
            .verification-actions {
                flex-direction: column;
                align-items: stretch;
                gap: var(--space-sm);
            }
            
            .btn-primary,
            .btn-outline {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .auth-container {
                max-width: 100%;
            }
            
            .verification-header h1 {
                font-size: 1.5rem;
            }
            
            .verification-content {
                padding: var(--space-md);
            }
            
            .verification-icon {
                width: 64px;
                height: 64px;
                font-size: 1.5rem;
            }
            
            .info-message,
            .success-message {
                padding: var(--space-sm);
            }
        }
    </style>
</head>
<body>
    <div class="auth-container fade-in-up">
        <div class="verification-card">
            <!-- En-tête -->
            <div class="verification-header">
                <div class="verification-icon float-animation">
                    <i class="fas fa-envelope"></i>
                </div>
                <h1>Vérifiez votre email</h1>
                <p>Un dernier pas avant de commencer votre exploration</p>
            </div>
            
            <!-- Contenu -->
            <div class="verification-content">
                <!-- Message d'information -->
                <div class="info-message">
                    <i class="fas fa-info-circle"></i>
                    <div>
                        Merci pour votre inscription ! Avant de commencer, veuillez vérifier votre adresse email en cliquant sur le lien que nous venons de vous envoyer.
                        Si vous n'avez pas reçu l'email, nous pouvons vous en envoyer un autre.
                    </div>
                </div>
                
                <!-- Message de succès -->
                @if (session('status') == 'verification-link-sent')
                    <div class="success-message" id="success-message">
                        <i class="fas fa-check-circle success-icon"></i>
                        <div class="success-text">
                            Un nouveau lien de vérification a été envoyé à l'adresse email que vous avez fournie lors de l'inscription.
                        </div>
                    </div>
                @endif
                
                <!-- Instructions -->
                <div class="instructions">
                    <h4><i class="fas fa-lightbulb"></i> Conseils pratiques</h4>
                    <ul class="instructions-list">
                        <li>
                            <i class="fas fa-search"></i>
                            <span>Vérifiez votre dossier spam ou courrier indésirable</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Le lien de vérification est valide pendant 24 heures</span>
                        </li>
                        <li>
                            <i class="fas fa-sync-alt"></i>
                            <span>Actualisez votre boîte de réception après l'envoi</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Actions -->
                <div class="verification-actions">
                    <!-- Formulaire de renvoi -->
                    <form method="POST" action="{{ route('verification.send') }}" id="resend-form">
                        @csrf
                        <button type="submit" class="btn btn-primary" id="resend-btn">
                            <i class="fas fa-paper-plane"></i>
                            Renvoyer l'email de vérification
                        </button>
                    </form>
                    
                    <!-- Formulaire de déconnexion -->
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <button type="submit" class="btn btn-outline">
                            <i class="fas fa-sign-out-alt"></i>
                            Se déconnecter
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const resendBtn = document.getElementById('resend-btn');
            const resendForm = document.getElementById('resend-form');
            const logoutForm = document.getElementById('logout-form');
            const successMessage = document.getElementById('success-message');
            
            // Animation pour le bouton de renvoi
            resendBtn.addEventListener('mouseenter', function() {
                this.classList.add('pulse-animation');
            });
            
            resendBtn.addEventListener('mouseleave', function() {
                this.classList.remove('pulse-animation');
            });
            
            // Gestion du renvoi d'email
            resendForm.addEventListener('submit', function(e) {
                // Empêcher la double soumission
                if (resendBtn.classList.contains('loading')) {
                    e.preventDefault();
                    return;
                }
                
                // Mettre à jour le bouton
                resendBtn.classList.add('loading');
                const originalText = resendBtn.innerHTML;
                resendBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
                resendBtn.disabled = true;
                
                // Réinitialiser après 5 secondes
                setTimeout(() => {
                    resendBtn.classList.remove('loading');
                    resendBtn.innerHTML = originalText;
                    resendBtn.disabled = false;
                }, 5000);
                
                // Scroll vers le haut pour voir le message de succès
                setTimeout(() => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                    
                    // Si un message de succès existe déjà, l'animer
                    if (successMessage) {
                        successMessage.style.animation = 'none';
                        setTimeout(() => {
                            successMessage.style.animation = 'slideIn 0.5s ease';
                        }, 10);
                    }
                }, 100);
            });
            
            // Confirmation pour la déconnexion
            logoutForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (confirm('Êtes-vous sûr de vouloir vous déconnecter ? Vous devrez vous reconnecter pour continuer.')) {
                    this.submit();
                }
            });
            
            // Notification pour vérifier la boîte de réception
            if (!sessionStorage.getItem('verification_notice_shown')) {
                setTimeout(() => {
                    const notification = document.createElement('div');
                    notification.className = 'info-message';
                    notification.style.marginTop = 'var(--space-md)';
                    notification.innerHTML = `
                        <i class="fas fa-bell"></i>
                        <div>
                            <strong>N'oubliez pas :</strong> L'email de vérification peut mettre quelques minutes à arriver.
                            Si vous ne le trouvez pas, pensez à vérifier votre dossier spam.
                        </div>
                    `;
                    
                    document.querySelector('.verification-content').insertBefore(
                        notification,
                        document.querySelector('.instructions')
                    );
                    
                    // Animer l'apparition
                    notification.style.opacity = '0';
                    notification.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        notification.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        notification.style.opacity = '1';
                        notification.style.transform = 'translateY(0)';
                    }, 100);
                    
                    sessionStorage.setItem('verification_notice_shown', 'true');
                }, 2000);
            }
            
            // Compteur pour le bouton de renvoi
            let resendCount = localStorage.getItem('resend_count') || 0;
            let lastResendTime = localStorage.getItem('last_resend_time') || 0;
            const now = Date.now();
            const cooldownTime = 60000; // 1 minute en millisecondes
            
            // Vérifier le cooldown
            if (now - lastResendTime < cooldownTime) {
                const remainingTime = Math.ceil((cooldownTime - (now - lastResendTime)) / 1000);
                disableResendButton(remainingTime);
            }
            
            function disableResendButton(seconds) {
                resendBtn.disabled = true;
                const originalText = resendBtn.innerHTML;
                
                const updateButtonText = () => {
                    resendBtn.innerHTML = `<i class="fas fa-clock"></i> Réessayer dans ${seconds}s`;
                    seconds--;
                    
                    if (seconds < 0) {
                        clearInterval(timer);
                        resendBtn.disabled = false;
                        resendBtn.innerHTML = originalText;
                        localStorage.removeItem('last_resend_time');
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