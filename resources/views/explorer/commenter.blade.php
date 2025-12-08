<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commenter : {{ $contenu->titre }} - BéninCulture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            background: linear-gradient(135deg, var(--primary-cream), var(--earth-50));
            color: var(--earth-800);
            line-height: 1.6;
            min-height: 100vh;
            padding: 2rem 1rem;
        }
        
        /* Header */
        .comment-header {
            max-width: 800px;
            margin: 0 auto 2rem;
            text-align: center;
        }
        
        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
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
        
        /* Container principal */
        .comment-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Carte principale */
        .comment-card {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
            margin-bottom: 2rem;
        }
        
        .card-header {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid var(--earth-200);
        }
        
        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--earth-800);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        /* Info contenu */
        .content-info {
            background: var(--red-50);
            border-radius: var(--radius-md);
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid var(--red-200);
        }
        
        .content-info h5 {
            color: var(--primary-red);
            font-weight: 600;
            margin-bottom: 0.75rem;
            font-size: 1.1rem;
        }
        
        .content-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: var(--earth-800);
            margin-bottom: 1rem;
        }
        
        .content-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .tag {
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .tag-type {
            background: var(--primary-red);
            color: white;
        }
        
        .tag-region {
            background: var(--earth-500);
            color: white;
        }
        
        .tag-langue {
            background: var(--gold-500);
            color: white;
        }
        
        .content-excerpt {
            color: var(--earth-600);
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        /* Form */
        .comment-form {
            margin-bottom: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--earth-700);
            margin-bottom: 0.75rem;
            font-size: 1rem;
        }
        
        /* Note */
        .rating-container {
            background: var(--earth-50);
            padding: 1.5rem;
            border-radius: var(--radius-md);
            border: 1px solid var(--earth-200);
        }
        
        .rating-options {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 0.5rem;
        }
        
        .rating-option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.2s ease;
            border: 2px solid transparent;
        }
        
        .rating-option:hover {
            background: var(--red-50);
            border-color: var(--red-200);
        }
        
        .rating-option input[type="radio"] {
            display: none;
        }
        
        .rating-option input[type="radio"]:checked + label {
            color: var(--primary-red);
            font-weight: 600;
        }
        
        .rating-option label {
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--earth-600);
        }
        
        .stars {
            color: var(--primary-gold);
        }
        
        /* Textarea */
        .form-control {
            width: 100%;
            padding: 1rem;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-md);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            color: var(--earth-800);
            transition: all 0.2s ease;
            resize: vertical;
            min-height: 180px;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.1);
        }
        
        .form-control.is-invalid {
            border-color: var(--red-500);
        }
        
        .invalid-feedback {
            color: var(--red-600);
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        
        .form-text {
            color: var(--earth-600);
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            justify-content: space-between;
        }
        
        .char-counter {
            font-weight: 600;
        }
        
        .char-counter.danger {
            color: var(--red-600);
        }
        
        /* Boutons */
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--earth-200);
        }
        
        .btn {
            padding: 0.875rem 2rem;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            border: 2px solid transparent;
            cursor: pointer;
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--earth-600);
            border-color: var(--earth-300);
        }
        
        .btn-secondary:hover {
            background: var(--earth-100);
            border-color: var(--earth-400);
            transform: translateY(-2px);
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
        
        /* Règles */
        .rules-card {
            background: var(--earth-50);
            border-radius: var(--radius-lg);
            padding: 2rem;
            border: 1px solid var(--earth-300);
            border-left: 4px solid var(--primary-red);
        }
        
        .rules-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .rules-header h6 {
            font-size: 1.1rem;
            color: var(--primary-red);
            font-weight: 600;
        }
        
        .rules-list {
            list-style: none;
        }
        
        .rules-list li {
            margin-bottom: 0.75rem;
            padding-left: 1.5rem;
            position: relative;
            color: var(--earth-700);
        }
        
        .rules-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-red);
            font-weight: bold;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }
            
            .comment-card {
                padding: 1.5rem;
            }
            
            .card-title {
                font-size: 1.5rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .content-tags {
                flex-direction: column;
            }
            
            .rating-options {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            .rating-option {
                width: 100%;
            }
            
            .form-actions {
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .brand {
                flex-direction: column;
                text-align: center;
            }
            
            .comment-card {
                padding: 1.25rem;
            }
            
            .card-title {
                font-size: 1.3rem;
            }
            
            .content-info {
                padding: 1rem;
            }
            
            .content-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="comment-header">
        <div class="brand">
            <div class="brand-icon">
                <i class="fas fa-landmark"></i>
            </div>
            <div class="brand-text">
                <h1>BéninCulture</h1>
            </div>
        </div>
    </header>

    <!-- Container principal -->
    <main class="comment-container">
        <!-- Carte principale -->
        <div class="comment-card">
            <div class="card-header">
                <h2 class="card-title">
                    <i class="fas fa-comment-medical"></i>
                    Ajouter un commentaire
                </h2>
            </div>
            
            <!-- Info sur le contenu -->
            <div class="content-info">
                <h5>Vous commentez :</h5>
                <div class="content-title">{{ $contenu->titre }}</div>
                
                <div class="content-tags">
                    <span class="tag tag-type">{{ $contenu->type->nom }}</span>
                    <span class="tag tag-region">{{ $contenu->region->nom }}</span>
                    @if($contenu->langue)
                        <span class="tag tag-langue">{{ $contenu->langue->nom }}</span>
                    @endif
                </div>
                
                <p class="content-excerpt">
                    {{ Str::limit(strip_tags($contenu->texte), 200) }}
                </p>
            </div>

            <!-- Formulaire -->
            <form action="{{ route('explorer.commenter', $contenu) }}" method="POST" class="comment-form">
                @csrf

                <!-- Note -->
                <div class="form-group">
                    <label class="form-label">Note (optionnelle)</label>
                    <div class="rating-container">
                        <div class="rating-options">
                            @for($i = 1; $i <= 5; $i++)
                                <div class="rating-option">
                                    <input class="form-check-input" type="radio" 
                                           name="note" id="note{{ $i }}" 
                                           value="{{ $i }}"
                                           {{ old('note') == $i ? 'checked' : '' }}>
                                    <label for="note{{ $i }}">
                                        <div class="stars">
                                            @for($j = 1; $j <= $i; $j++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                        </div>
                                        <span>{{ $i }} étoile{{ $i > 1 ? 's' : '' }}</span>
                                    </label>
                                </div>
                            @endfor
                            
                            <div class="rating-option">
                                <input class="form-check-input" type="radio" 
                                       name="note" id="note0" 
                                       value="" {{ is_null(old('note')) ? 'checked' : '' }}>
                                <label for="note0">
                                    Aucune note
                                </label>
                            </div>
                        </div>
                        
                        @error('note')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Commentaire -->
                <div class="form-group">
                    <label for="texte" class="form-label">Votre commentaire *</label>
                    <textarea class="form-control @error('texte') is-invalid @enderror" 
                              id="texte" name="texte" rows="6" 
                              placeholder="Partagez votre avis sur ce contenu..."
                              required>{{ old('texte') }}</textarea>
                    
                    @error('texte')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    
                    <div class="form-text">
                        Soyez respectueux et constructif. Maximum 1000 caractères.
                        <span id="char-counter" class="char-counter">0/1000</span>
                    </div>
                </div>

                <!-- Boutons -->
                <div class="form-actions">
                    <a href="{{ route('explorer.show', $contenu) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Annuler
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Publier le commentaire
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Règles de commentaire -->
        <div class="rules-card">
            <div class="rules-header">
                <i class="fas fa-info-circle" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                <h6>Règles de commentaire</h6>
            </div>
            <ul class="rules-list">
                <li>Soyez respectueux et courtois</li>
                <li>Partagez votre expérience personnelle</li>
                <li>Évitez les commentaires hors sujet</li>
                <li>Pas de langage offensant ou discriminatoire</li>
                <li>Les commentaires sont modérés</li>
            </ul>
        </div>
    </main>

    <script>
        // Compteur de caractères
        const textarea = document.getElementById('texte');
        const charCounter = document.getElementById('char-counter');
        
        function updateCharCounter() {
            const maxLength = 1000;
            const currentLength = textarea.value.length;
            charCounter.textContent = `${currentLength}/${maxLength} caractères`;
            
            if (currentLength > maxLength) {
                charCounter.classList.add('danger');
                textarea.classList.add('is-invalid');
            } else {
                charCounter.classList.remove('danger');
                textarea.classList.remove('is-invalid');
            }
        }
        
        textarea.addEventListener('input', updateCharCounter);
        
        // Initialiser le compteur
        updateCharCounter();
        
        // Validation avant envoi
        document.querySelector('.comment-form').addEventListener('submit', function(e) {
            const textarea = document.getElementById('texte');
            const textValue = textarea.value.trim();
            
            if (textValue.length < 10) {
                e.preventDefault();
                alert('Votre commentaire doit contenir au moins 10 caractères.');
                textarea.focus();
                return false;
            }
            
            if (textValue.length > 1000) {
                e.preventDefault();
                alert('Votre commentaire ne peut pas dépasser 1000 caractères.');
                textarea.focus();
                return false;
            }
            
            return true;
        });
        
        // Gestion des notes
        const ratingOptions = document.querySelectorAll('.rating-option input[type="radio"]');
        ratingOptions.forEach(option => {
            option.addEventListener('change', function() {
                // Retirer la sélection de toutes les options
                ratingOptions.forEach(opt => {
                    const parent = opt.closest('.rating-option');
                    if (parent) {
                        parent.style.background = 'transparent';
                        parent.style.borderColor = 'transparent';
                    }
                });
                
                // Mettre en surbrillance l'option sélectionnée
                const selectedParent = this.closest('.rating-option');
                if (selectedParent) {
                    selectedParent.style.background = 'var(--red-50)';
                    selectedParent.style.borderColor = 'var(--red-200)';
                }
            });
        });
        
        // Initialiser la sélection des notes
        document.querySelectorAll('.rating-option input[type="radio"]:checked').forEach(option => {
            const parent = option.closest('.rating-option');
            if (parent) {
                parent.style.background = 'var(--red-50)';
                parent.style.borderColor = 'var(--red-200)';
            }
        });
        
        // Animation douce au chargement
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.comment-card, .rules-card');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>