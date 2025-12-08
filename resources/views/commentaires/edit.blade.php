<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le commentaire - BéninCulture</title>
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
            --gradient-warning: linear-gradient(135deg, var(--gold-400), var(--gold-600));
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
        .edit-header {
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
            background: var(--gradient-warning);
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
        
        .btn-outline {
            background: transparent;
            color: var(--primary-red);
            border-color: var(--earth-300);
        }
        
        .btn-outline:hover {
            background: var(--red-50);
            border-color: var(--primary-red);
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
            background: var(--gradient-warning);
            padding: 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .form-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(30%, -30%);
        }
        
        .form-header h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 1;
        }
        
        .form-body {
            padding: 3rem;
        }
        
        /* ===== ALERTE D'INFORMATION ===== */
        .content-alert {
            background: linear-gradient(135deg, var(--earth-50), var(--gold-50));
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin-bottom: 2.5rem;
            border-left: 4px solid var(--primary-gold);
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-sm);
        }
        
        .alert-heading {
            font-family: 'Playfair Display', serif;
            color: var(--earth-800);
            margin-bottom: 1rem;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .content-title {
            font-size: 1.3rem;
            color: var(--earth-800);
            font-weight: 600;
            margin-bottom: 1rem;
            line-height: 1.4;
        }
        
        .badges-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1rem;
        }
        
        .badge {
            padding: 0.5rem 1.25rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .badge-type {
            background: linear-gradient(135deg, var(--primary-red), var(--red-600));
            color: white;
        }
        
        .badge-region {
            background: linear-gradient(135deg, var(--earth-600), var(--earth-800));
            color: white;
        }
        
        .badge-langue {
            background: linear-gradient(135deg, var(--gold-300), var(--gold-500));
            color: var(--earth-900);
        }
        
        /* ===== FORMULAIRE ===== */
        .form-group {
            margin-bottom: 2.5rem;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--earth-800);
            margin-bottom: 1rem;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-label.required::after {
            content: ' *';
            color: var(--primary-red);
        }
        
        .form-control {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-md);
            font-size: 1rem;
            transition: all 0.2s ease;
            background: white;
            color: var(--earth-800);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            resize: vertical;
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
            gap: 1.5rem;
        }
        
        .rating-options {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        
        .rating-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
        }
        
        .rating-input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .rating-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            padding: 1.5rem 2rem;
            background: white;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-lg);
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            color: var(--earth-700);
            min-width: 120px;
        }
        
        .rating-label:hover {
            border-color: var(--primary-gold);
            background: var(--gold-50);
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }
        
        .rating-input:checked + .rating-label {
            background: var(--gold-50);
            border-color: var(--primary-gold);
            color: var(--earth-800);
            box-shadow: var(--shadow-sm);
            transform: translateY(-3px);
        }
        
        .stars {
            color: var(--gold-500);
            display: flex;
            gap: 2px;
            font-size: 1.5rem;
        }
        
        .rating-text {
            font-size: 0.95rem;
            text-align: center;
        }
        
        /* ===== COMPTEUR DE CARACTÈRES ===== */
        .textarea-container {
            position: relative;
        }
        
        .textarea-counter {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            font-size: 0.875rem;
            background: rgba(255, 255, 255, 0.9);
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
        }
        
        .textarea-counter.normal {
            color: var(--earth-600);
        }
        
        .textarea-counter.warning {
            color: var(--gold-700);
            font-weight: 500;
        }
        
        .textarea-counter.danger {
            color: var(--red-600);
            font-weight: 600;
            background: var(--red-50);
        }
        
        /* ===== BOUTONS D'ACTION ===== */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 2px solid var(--earth-200);
        }
        
        .action-group {
            display: flex;
            gap: 1rem;
        }
        
        .btn-lg {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border-radius: var(--radius-md);
        }
        
        /* ===== ÉDITEUR VISUEL ===== */
        .editor-tools {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }
        
        .editor-btn {
            padding: 0.5rem 1rem;
            background: white;
            border: 1px solid var(--earth-300);
            border-radius: var(--radius-sm);
            color: var(--earth-700);
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }
        
        .editor-btn:hover {
            background: var(--earth-50);
            border-color: var(--earth-500);
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
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .rating-options {
                justify-content: center;
            }
            
            .rating-label {
                min-width: 100px;
                padding: 1.25rem 1.5rem;
            }
            
            .stars {
                font-size: 1.25rem;
            }
        }
        
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
            }
            
            .form-actions {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .action-group {
                width: 100%;
                justify-content: space-between;
            }
            
            .btn-lg {
                width: 100%;
                justify-content: center;
            }
            
            .rating-options {
                flex-direction: column;
                align-items: center;
            }
            
            .rating-label {
                width: 100%;
                max-width: 250px;
                flex-direction: row;
                justify-content: space-between;
            }
        }
        
        @media (max-width: 480px) {
            .container, .header-container {
                padding: 0 1.25rem;
            }
            
            .form-body {
                padding: 1.5rem;
            }
            
            .content-alert {
                padding: 1.5rem;
            }
            
            .content-title {
                font-size: 1.1rem;
            }
            
            .badges-container {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .badge {
                width: 100%;
                justify-content: center;
            }
            
            .form-header h3 {
                font-size: 1.3rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .action-group {
                flex-direction: column;
            }
        }
        
        /* ===== ÉTATS ===== */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }
        
        .success-preview {
            background: linear-gradient(135deg, var(--earth-100), var(--gold-50));
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            margin-top: 2rem;
            border-left: 4px solid var(--primary-gold);
            display: none;
            animation: slideInRight 0.5s ease;
        }
        
        .success-preview.show {
            display: block;
        }
        
        .preview-title {
            font-family: 'Playfair Display', serif;
            color: var(--earth-800);
            margin-bottom: 1rem;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .preview-content {
            color: var(--earth-700);
            line-height: 1.6;
            padding: 1rem;
            background: white;
            border-radius: var(--radius-sm);
            border: 1px solid var(--earth-200);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="edit-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="brand-text">
                    <h1>BéninCulture</h1>
                    <div class="subtitle">Modifier votre contribution</div>
                </div>
            </div>
            
            <div class="header-nav">
                <a href="{{ route('commentaires.index') }}" class="nav-category">
                    <i class="fas fa-list"></i> Mes commentaires
                </a>
                <a href="{{ route('explorer.index') }}" class="nav-category">
                    <i class="fas fa-compass"></i> Explorer
                </a>
            </div>
        </div>
    </header>

    <!-- Formulaire principal -->
    <div class="container">
        <div class="form-card">
            <div class="form-header">
                <h3>
                    <i class="fas fa-edit"></i>
                    Modifier le commentaire
                </h3>
            </div>
            
            <div class="form-body">
                <!-- Information sur le contenu -->
                <div class="content-alert">
                    <div class="alert-heading">
                        <i class="fas fa-info-circle"></i>
                        Vous commentez :
                    </div>
                    <h4 class="content-title">{{ $contenu->titre }}</h4>
                    <div class="badges-container">
                        <span class="badge badge-type">
                            <i class="fas fa-tag"></i>
                            {{ $contenu->type->nom }}
                        </span>
                        <span class="badge badge-region">
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $contenu->region->nom }}
                        </span>
                        <span class="badge badge-langue">
                            <i class="fas fa-language"></i>
                            {{ $contenu->langue->nom ?? 'Non spécifié' }}
                        </span>
                    </div>
                </div>

                <form action="{{ route('commentaires.update', $commentaire) }}" method="POST" id="editForm">
                    @csrf
                    @method('PUT')

                    <!-- Notation -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-star"></i> Note (optionnelle)
                        </label>
                        <div class="rating-container">
                            <div class="rating-options">
                                @for($i = 1; $i <= 5; $i++)
                                    <div class="rating-group">
                                        <input class="rating-input" type="radio" 
                                               name="note" id="note{{ $i }}" 
                                               value="{{ $i }}"
                                               {{ old('note', $commentaire->note) == $i ? 'checked' : '' }}>
                                        <label class="rating-label" for="note{{ $i }}">
                                            <div class="stars">
                                                @for($j = 1; $j <= $i; $j++)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                            </div>
                                            <span class="rating-text">
                                                {{ $i }} étoile{{ $i > 1 ? 's' : '' }}
                                            </span>
                                        </label>
                                    </div>
                                @endfor
                                
                                <div class="rating-group">
                                    <input class="rating-input" type="radio" 
                                           name="note" id="note0" 
                                           value="" {{ is_null(old('note', $commentaire->note)) ? 'checked' : '' }}>
                                    <label class="rating-label" for="note0">
                                        <div class="stars" style="color: var(--earth-300);">
                                            <i class="fas fa-ban"></i>
                                        </div>
                                        <span class="rating-text">
                                            Aucune note
                                        </span>
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
                        <label for="texte" class="form-label required">
                            <i class="fas fa-edit"></i> Votre commentaire
                        </label>
                        
                        <!-- Outils d'édition simple -->
                        <div class="editor-tools">
                            <button type="button" class="editor-btn" onclick="formatText('bold')">
                                <i class="fas fa-bold"></i> Gras
                            </button>
                            <button type="button" class="editor-btn" onclick="formatText('italic')">
                                <i class="fas fa-italic"></i> Italique
                            </button>
                            <button type="button" class="editor-btn" onclick="formatText('quote')">
                                <i class="fas fa-quote-right"></i> Citation
                            </button>
                        </div>
                        
                        <div class="textarea-container">
                            <textarea class="form-control @error('texte') is-invalid @enderror" 
                                      id="texte" name="texte" rows="8" required
                                      placeholder="Modifiez votre commentaire ici...">{{ old('texte', $commentaire->texte) }}</textarea>
                            <div id="char-counter" class="textarea-counter normal">0/1000 caractères</div>
                        </div>
                        @error('texte')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-exclamation-circle"></i> Maximum 1000 caractères. Votre commentaire sera visible par tous les utilisateurs.
                        </div>
                    </div>

                    <!-- Prévisualisation -->
                    <div class="success-preview" id="previewPanel">
                        <div class="preview-title">
                            <i class="fas fa-eye"></i> Aperçu de votre commentaire
                        </div>
                        <div class="preview-content" id="previewContent">
                            <!-- Le contenu sera inséré ici par JavaScript -->
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class="form-actions">
                        <div class="action-group">
                            <a href="{{ route('commentaires.show', $commentaire) }}" 
                               class="btn btn-secondary btn-lg">
                                <i class="fas fa-eye"></i> Annuler
                            </a>
                            <a href="{{ route('commentaires.index') }}" class="btn btn-outline btn-lg">
                                <i class="fas fa-arrow-left"></i> Retour
                            </a>
                        </div>
                        <div class="action-group">
                            <button type="button" class="btn btn-secondary btn-lg" onclick="showPreview()">
                                <i class="fas fa-eye"></i> Prévisualiser
                            </button>
                            <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                <i class="fas fa-save"></i> Enregistrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('texte');
            const charCounter = document.getElementById('char-counter');
            const form = document.getElementById('editForm');
            const submitBtn = document.getElementById('submitBtn');
            const maxLength = 1000;
            
            // Compteur de caractères
            textarea.addEventListener('input', function() {
                const currentLength = this.value.length;
                charCounter.textContent = `${currentLength}/${maxLength} caractères`;
                
                // Mise à jour des classes selon la longueur
                charCounter.className = 'textarea-counter normal';
                if (currentLength > maxLength * 0.9 && currentLength <= maxLength) {
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
                
                // Mettre à jour la prévisualisation
                updatePreview();
            });
            
            // Initialisation du compteur
            updateCounter();
            function updateCounter() {
                const currentLength = textarea.value.length;
                charCounter.textContent = `${currentLength}/${maxLength} caractères`;
                
                if (currentLength > maxLength * 0.9 && currentLength <= maxLength) {
                    charCounter.classList.add('warning');
                }
                if (currentLength > maxLength) {
                    charCounter.classList.add('danger');
                }
            }
            
            // Mise en forme du texte
            window.formatText = function(type) {
                const textarea = document.getElementById('texte');
                const start = textarea.selectionStart;
                const end = textarea.selectionEnd;
                const selectedText = textarea.value.substring(start, end);
                
                let formattedText = selectedText;
                let replacement = selectedText;
                
                switch(type) {
                    case 'bold':
                        formattedText = `**${selectedText}**`;
                        replacement = `<strong>${selectedText}</strong>`;
                        break;
                    case 'italic':
                        formattedText = `*${selectedText}*`;
                        replacement = `<em>${selectedText}</em>`;
                        break;
                    case 'quote':
                        formattedText = `> ${selectedText}`;
                        replacement = `<blockquote>${selectedText}</blockquote>`;
                        break;
                }
                
                // Remplacer le texte sélectionné
                textarea.value = textarea.value.substring(0, start) + 
                                formattedText + 
                                textarea.value.substring(end);
                
                // Remettre le focus et la sélection
                textarea.focus();
                textarea.setSelectionRange(start, start + formattedText.length);
                
                // Mettre à jour le compteur et la prévisualisation
                textarea.dispatchEvent(new Event('input'));
            };
            
            // Prévisualisation
            window.showPreview = function() {
                const previewPanel = document.getElementById('previewPanel');
                const previewContent = document.getElementById('previewContent');
                
                updatePreview();
                previewPanel.classList.toggle('show');
                
                if (previewPanel.classList.contains('show')) {
                    previewPanel.scrollIntoView({ behavior: 'smooth' });
                }
            };
            
            function updatePreview() {
                const textarea = document.getElementById('texte');
                const previewContent = document.getElementById('previewContent');
                
                // Simple conversion markdown vers HTML
                let html = textarea.value
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                    .replace(/\*(.*?)\*/g, '<em>$1</em>')
                    .replace(/^\> (.*?)$/gm, '<blockquote>$1</blockquote>')
                    .replace(/\n/g, '<br>');
                
                previewContent.innerHTML = html || '<em>Aucun contenu à prévisualiser...</em>';
            }
            
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
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enregistrement...';
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
            });
            
            // Animation des étoiles
            const ratingInputs = document.querySelectorAll('.rating-input');
            ratingInputs.forEach(input => {
                const label = input.nextElementSibling;
                
                label.addEventListener('mouseenter', function() {
                    const value = this.previousElementSibling.value;
                    if (value) {
                        highlightStars(value);
                    } else {
                        resetStars();
                    }
                });
                
                label.addEventListener('mouseleave', function() {
                    const checkedInput = document.querySelector('.rating-input:checked');
                    if (checkedInput && checkedInput.value) {
                        highlightStars(checkedInput.value);
                    } else {
                        resetStars();
                    }
                });
                
                input.addEventListener('change', function() {
                    if (this.value) {
                        highlightStars(this.value);
                    } else {
                        resetStars();
                    }
                });
            });
            
            function highlightStars(count) {
                const stars = document.querySelectorAll('.stars i.fa-star');
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
                const stars = document.querySelectorAll('.stars i.fa-star');
                stars.forEach(star => {
                    star.style.color = 'var(--earth-300)';
                    star.style.transform = 'scale(1)';
                });
            }
            
            // Initialiser les étoiles
            const initialChecked = document.querySelector('.rating-input:checked');
            if (initialChecked && initialChecked.value) {
                highlightStars(initialChecked.value);
            }
            
            // Animation des éléments
            const formElements = document.querySelectorAll('.form-group, .content-alert');
            formElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = `opacity 0.4s ease ${index * 0.1}s, transform 0.4s ease ${index * 0.1}s`;
                
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, 100 + (index * 100));
            });
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