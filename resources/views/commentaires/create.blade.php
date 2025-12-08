<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un commentaire - BéninCulture</title>
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
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--primary-cream) 0%, var(--earth-50) 100%);
            color: var(--earth-800);
            line-height: 1.6;
            min-height: 100vh;
            padding-bottom: 2rem;
        }
        
        /* ===== HEADER PROFESSIONNEL ===== */
        .comment-header {
            background: var(--primary-cream);
            padding: 1.25rem 0;
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid var(--earth-200);
            margin-bottom: 2rem;
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .brand {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
        }
        
        .brand-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            font-weight: 600;
        }
        
        .brand-text .subtitle {
            font-size: 0.85rem;
            color: var(--primary-red);
            font-weight: 500;
        }
        
        .header-nav {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .nav-category {
            color: var(--earth-700);
            text-decoration: none;
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            border-radius: 20px;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            border: 1px solid var(--earth-300);
            font-size: 0.9rem;
        }
        
        .nav-category:hover {
            background: var(--red-50);
            border-color: var(--primary-red);
            color: var(--primary-red);
            transform: translateY(-1px);
        }
        
        .btn {
            padding: 0.625rem 1.25rem;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border: 1px solid transparent;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background: white;
            color: var(--earth-700);
            border: 1px solid var(--earth-300);
        }
        
        .btn-secondary:hover {
            background: var(--earth-50);
            border-color: var(--earth-500);
            transform: translateY(-2px);
        }
        
        /* ===== SECTION PRINCIPALE ===== */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
            animation: fadeInUp 0.6s ease forwards;
        }
        
        /* ===== CARTE DE FORMULAIRE ===== */
        .form-card {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
            margin-bottom: 3rem;
        }
        
        .form-header {
            background: var(--gradient-primary);
            padding: 2rem;
            color: white;
        }
        
        .form-header h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .form-body {
            padding: 3rem;
        }
        
        /* ===== FORMULAIRE ===== */
        .form-group {
            margin-bottom: 2.5rem;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--earth-800);
            margin-bottom: 0.75rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-label.required::after {
            content: ' *';
            color: var(--primary-red);
        }
        
        .form-select, .form-control {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-md);
            font-size: 1rem;
            transition: all 0.2s ease;
            background: white;
            color: var(--earth-800);
            font-family: 'Inter', sans-serif;
        }
        
        .form-select:focus, .form-control:focus {
            outline: none;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.1);
        }
        
        .form-select.is-invalid, .form-control.is-invalid {
            border-color: var(--red-500);
        }
        
        .invalid-feedback {
            display: block;
            margin-top: 0.5rem;
            color: var(--red-600);
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .form-text {
            display: block;
            margin-top: 0.5rem;
            color: var(--earth-600);
            font-size: 0.875rem;
        }
        
        /* ===== NOTATION ===== */
        .rating-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .rating-options {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        
        .rating-option {
            position: relative;
        }
        
        .rating-input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .rating-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: white;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 500;
            color: var(--earth-700);
        }
        
        .rating-label:hover {
            border-color: var(--primary-gold);
            background: var(--gold-50);
            transform: translateY(-2px);
        }
        
        .rating-input:checked + .rating-label {
            background: var(--gold-50);
            border-color: var(--primary-gold);
            color: var(--earth-800);
            box-shadow: var(--shadow-sm);
        }
        
        .stars {
            color: var(--gold-500);
            display: flex;
            gap: 2px;
        }
        
        /* ===== ZONE DE TEXTE ===== */
        .textarea-container {
            position: relative;
        }
        
        .textarea-counter {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            font-size: 0.875rem;
            color: var(--earth-600);
            background: rgba(255, 255, 255, 0.9);
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-sm);
        }
        
        .textarea-counter.warning {
            color: var(--gold-700);
        }
        
        .textarea-counter.danger {
            color: var(--red-600);
            font-weight: 600;
        }
        
        /* ===== BOUTONS D'ACTION ===== */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--earth-200);
        }
        
        .btn-lg {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border-radius: var(--radius-md);
        }
        
        /* ===== GUIDE DE COMMENTAIRE ===== */
        .comment-guide {
            background: var(--earth-50);
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin-top: 2rem;
            border-left: 4px solid var(--primary-gold);
        }
        
        .guide-title {
            font-family: 'Playfair Display', serif;
            color: var(--earth-800);
            margin-bottom: 1rem;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .guide-list {
            list-style: none;
            padding: 0;
        }
        
        .guide-list li {
            margin-bottom: 0.75rem;
            color: var(--earth-700);
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }
        
        .guide-list li::before {
            content: '✓';
            color: var(--primary-gold);
            font-weight: bold;
            flex-shrink: 0;
        }
        
        /* ===== ANIMATIONS ===== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1.5rem;
                text-align: center;
            }
            
            .header-nav {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .form-body {
                padding: 2rem;
            }
            
            .form-header {
                padding: 1.5rem;
            }
            
            .form-header h3 {
                font-size: 1.5rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .form-actions {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .form-actions .btn {
                width: 100%;
                justify-content: center;
            }
            
            .rating-options {
                flex-direction: column;
                gap: 1rem;
            }
            
            .rating-label {
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .container, .header-container {
                padding: 0 1.25rem;
            }
            
            .form-body {
                padding: 1.5rem;
            }
            
            .form-header h3 {
                font-size: 1.3rem;
            }
            
            .btn-lg {
                padding: 0.875rem 1.5rem;
                font-size: 1rem;
            }
            
            .form-label {
                font-size: 0.95rem;
            }
        }
        
        /* ===== ÉTATS ===== */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }
        
        .success-message {
            background: linear-gradient(135deg, var(--earth-100), var(--gold-50));
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            margin-top: 2rem;
            border-left: 4px solid var(--primary-gold);
            display: none;
        }
        
        .success-message.show {
            display: block;
            animation: fadeInUp 0.5s ease;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="comment-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="brand-text">
                    <h1>BéninCulture</h1>
                    <div class="subtitle">Contribuer au patrimoine</div>
                </div>
            </div>
            
            <div class="header-nav">
                <a href="{{ route('explorer.index') }}" class="nav-category">
                    <i class="fas fa-compass"></i> Explorer
                </a>
                <a href="{{ route('commentaires.index') }}" class="nav-category">
                    <i class="fas fa-list"></i> Mes commentaires
                </a>
            </div>
        </div>
    </header>

    <!-- Formulaire principal -->
    <div class="container">
        <div class="form-card">
            <div class="form-header">
                <h3>
                    <i class="fas fa-comment-medical"></i>
                    Ajouter un commentaire
                </h3>
            </div>
            
            <div class="form-body">
                <form action="{{ route('commentaires.store') }}" method="POST" id="commentForm">
                    @csrf

                    <!-- Sélection du contenu -->
                    <div class="form-group">
                        <label for="id_contenu" class="form-label required">
                            <i class="fas fa-file-alt"></i> Contenu à commenter
                        </label>
                        <select class="form-select @error('id_contenu') is-invalid @enderror" 
                                id="id_contenu" name="id_contenu" required>
                            <option value="">Choisissez un contenu publié</option>
                            @foreach($contenus as $cont)
                                <option value="{{ $cont->id }}" 
                                    {{ old('id_contenu', $contenu->id ?? '') == $cont->id ? 'selected' : '' }}>
                                    {{ $cont->titre }}
                                    ({{ $cont->type->nom }} - {{ $cont->region->nom }})
                                </option>
                            @endforeach
                        </select>
                        @error('id_contenu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle"></i> Seuls les contenus publiés sont disponibles pour commentaire.
                        </div>
                    </div>

                    <!-- Notation -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-star"></i> Note (optionnelle)
                        </label>
                        <div class="rating-container">
                            <div class="rating-options">
                                @for($i = 1; $i <= 5; $i++)
                                    <div class="rating-option">
                                        <input class="rating-input" type="radio" 
                                               name="note" id="note{{ $i }}" 
                                               value="{{ $i }}"
                                               {{ old('note') == $i ? 'checked' : '' }}>
                                        <label class="rating-label" for="note{{ $i }}">
                                            <div class="stars">
                                                @for($j = 1; $j <= $i; $j++)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                            </div>
                                            <span>{{ $i }} étoile{{ $i > 1 ? 's' : '' }}</span>
                                        </label>
                                    </div>
                                @endfor
                            </div>
                            @error('note')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Commentaire -->
                    <div class="form-group">
                        <label for="texte" class="form-label required">
                            <i class="fas fa-edit"></i> Votre commentaire
                        </label>
                        <div class="textarea-container">
                            <textarea class="form-control @error('texte') is-invalid @enderror" 
                                      id="texte" name="texte" rows="6" required
                                      placeholder="Partagez votre avis, votre expérience ou vos suggestions de manière respectueuse et constructive...">{{ old('texte') }}</textarea>
                            <div id="char-counter" class="textarea-counter">0/1000 caractères</div>
                        </div>
                        @error('texte')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-exclamation-circle"></i> Maximum 1000 caractères.
                        </div>
                    </div>

                    <!-- Guide de commentaire -->
                    <div class="comment-guide">
                        <h4 class="guide-title">
                            <i class="fas fa-lightbulb"></i> Conseils pour un bon commentaire
                        </h4>
                        <ul class="guide-list">
                            <li>Soyez respectueux et constructif</li>
                            <li>Partagez votre expérience personnelle</li>
                            <li>Apportez des informations complémentaires utiles</li>
                            <li>Évitez les répétitions et soyez concis</li>
                            <li>Relisez-vous avant de publier</li>
                        </ul>
                    </div>

                    <!-- Boutons d'action -->
                    <div class="form-actions">
                        <a href="{{ route('commentaires.index') }}" class="btn btn-secondary btn-lg">
                            <i class="fas fa-arrow-left"></i> Retour aux commentaires
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                            <i class="fas fa-paper-plane"></i> Publier le commentaire
                        </button>
                    </div>

                    <!-- Champ caché pour l'origine -->
                    @if($contenu)
                        <input type="hidden" name="from_explorer" value="1">
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('texte');
            const charCounter = document.getElementById('char-counter');
            const form = document.getElementById('commentForm');
            const submitBtn = document.getElementById('submitBtn');
            const maxLength = 1000;
            
            // Compteur de caractères
            textarea.addEventListener('input', function() {
                const currentLength = this.value.length;
                charCounter.textContent = `${currentLength}/${maxLength} caractères`;
                
                // Mise à jour des classes selon la longueur
                charCounter.className = 'textarea-counter';
                if (currentLength > maxLength * 0.9) {
                    charCounter.classList.add('warning');
                }
                if (currentLength > maxLength) {
                    charCounter.classList.add('danger');
                }
                
                // Validation en temps réel
                if (currentLength > maxLength) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                }
            });
            
            // Initialisation du compteur
            textarea.dispatchEvent(new Event('input'));
            
            // Gestion de la soumission du formulaire
            form.addEventListener('submit', function(e) {
                const textLength = textarea.value.length;
                
                if (textLength > maxLength) {
                    e.preventDefault();
                    charCounter.classList.add('danger');
                    charCounter.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${textLength}/${maxLength} caractères`;
                    
                    // Animation d'alerte
                    charCounter.style.animation = 'pulse 0.5s ease-in-out 2';
                    setTimeout(() => {
                        charCounter.style.animation = '';
                    }, 1000);
                    
                    alert('Votre commentaire dépasse la limite de 1000 caractères. Veuillez le raccourcir.');
                    textarea.focus();
                    return;
                }
                
                // Animation de chargement
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Publication en cours...';
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
                
                // Simuler un délai pour l'animation
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check"></i> Publié !';
                }, 500);
            });
            
            // Animation des éléments du formulaire
            const formElements = document.querySelectorAll('.form-group, .comment-guide');
            formElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = `opacity 0.4s ease ${index * 0.1}s, transform 0.4s ease ${index * 0.1}s`;
                
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, 100 + (index * 100));
            });
            
            // Validation du select
            const selectElement = document.getElementById('id_contenu');
            selectElement.addEventListener('change', function() {
                if (this.value) {
                    this.classList.remove('is-invalid');
                }
            });
            
            // Highlight des étoiles au survol
            const ratingInputs = document.querySelectorAll('.rating-input');
            ratingInputs.forEach(input => {
                const label = input.nextElementSibling;
                
                label.addEventListener('mouseenter', function() {
                    const value = this.previousElementSibling.value;
                    highlightStars(value);
                });
                
                label.addEventListener('mouseleave', function() {
                    const checkedInput = document.querySelector('.rating-input:checked');
                    if (checkedInput) {
                        highlightStars(checkedInput.value);
                    } else {
                        resetStars();
                    }
                });
                
                input.addEventListener('change', function() {
                    highlightStars(this.value);
                });
            });
            
            function highlightStars(count) {
                const stars = document.querySelectorAll('.stars i');
                stars.forEach((star, index) => {
                    if (index < count) {
                        star.style.color = 'var(--gold-500)';
                        star.style.transform = 'scale(1.1)';
                    } else {
                        star.style.color = 'var(--earth-300)';
                        star.style.transform = 'scale(1)';
                    }
                });
            }
            
            function resetStars() {
                const stars = document.querySelectorAll('.stars i');
                stars.forEach(star => {
                    star.style.color = 'var(--earth-300)';
                    star.style.transform = 'scale(1)';
                });
            }
            
            // Initialiser les étoiles
            const initialChecked = document.querySelector('.rating-input:checked');
            if (initialChecked) {
                highlightStars(initialChecked.value);
            }
        });
    </script>
    @if(Auth::check())
    @include('components.footer-styles')

    @if(Auth::user()->role === 'contributeur')
        @include('components.footer-contributor')
    @elseif(Auth::user()->role === 'user')
        @include('components.footer-user')
    @endif
@endif
</body>
</html>