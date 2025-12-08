<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un contenu - BéninCulture</title>
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
            padding: var(--space-md);
        }
        
        /* ===== EN-TÊTE DE PAGE ===== */
        .page-header {
            max-width: 1200px;
            margin: 0 auto var(--space-xl);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: var(--space-md);
            padding: var(--space-lg) 0;
        }
        
        .brand-section {
            display: flex;
            align-items: center;
            gap: var(--space-md);
        }
        
        .brand-icon {
            width: 56px;
            height: 56px;
            background: var(--gradient-primary);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: var(--shadow-md);
        }
        
        .brand-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.25rem;
            color: var(--earth-800);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .brand-text .subtitle {
            font-size: 1rem;
            color: var(--primary-red);
            font-weight: 500;
        }
        
        .btn-back {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            padding: 0.75rem 1.5rem;
            background: white;
            color: var(--earth-700);
            text-decoration: none;
            border-radius: var(--radius-md);
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid var(--earth-300);
            box-shadow: var(--shadow-sm);
        }
        
        .btn-back:hover {
            background: var(--red-50);
            border-color: var(--primary-red);
            color: var(--primary-red);
            transform: translateX(-2px);
            box-shadow: var(--shadow-md);
        }
        
        /* ===== CARTE PRINCIPALE ===== */
        .create-card {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .card-header {
            background: var(--gradient-primary);
            padding: var(--space-xl);
            color: white;
            display: flex;
            align-items: center;
            gap: var(--space-md);
        }
        
        .header-icon {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            backdrop-filter: blur(4px);
        }
        
        .card-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            font-weight: 600;
        }
        
        /* ===== CONTENU DU FORMULAIRE ===== */
        .card-content {
            padding: var(--space-xl);
        }
        
        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--space-md);
            margin-bottom: var(--space-lg);
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--earth-700);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-label .required {
            color: var(--primary-red);
            font-weight: 700;
        }
        
        .form-control {
            padding: 0.875rem 1rem;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-md);
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
            color: var(--earth-800);
            font-family: 'Inter', sans-serif;
            width: 100%;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.15);
        }
        
        .form-control.is-invalid {
            border-color: var(--red-500);
            background-color: var(--red-50);
        }
        
        .invalid-feedback {
            color: var(--red-600);
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-text {
            color: var(--earth-600);
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-text i {
            color: var(--earth-500);
        }
        
        /* ===== TEXTAREA RICHE ===== */
        .textarea-container {
            margin-bottom: var(--space-xl);
        }
        
        .textarea-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.75rem;
        }
        
        .text-editor-tools {
            display: flex;
            gap: 0.5rem;
        }
        
        .editor-btn {
            width: 32px;
            height: 32px;
            background: var(--earth-100);
            border: 1px solid var(--earth-300);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--earth-700);
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .editor-btn:hover {
            background: var(--earth-200);
            color: var(--primary-red);
        }
        
        #texte {
            min-height: 300px;
            resize: vertical;
        }
        
        /* ===== SECTION AVANCÉE ===== */
        .advanced-section {
            background: var(--earth-50);
            border: 1px solid var(--earth-200);
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            margin-bottom: var(--space-xl);
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            color: var(--earth-800);
            margin-bottom: var(--space-md);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .section-title i {
            color: var(--primary-red);
        }
        
        /* ===== BOUTONS D'ACTION ===== */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: var(--space-lg);
            border-top: 1px solid var(--earth-200);
            flex-wrap: wrap;
            gap: var(--space-md);
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
        
        .btn-secondary {
            background: var(--earth-100);
            color: var(--earth-700);
            border: 1px solid var(--earth-300);
        }
        
        .btn-secondary:hover {
            background: var(--earth-200);
            border-color: var(--earth-400);
        }
        
        .save-options {
            display: flex;
            gap: var(--space-sm);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--earth-700);
            border: 1px solid var(--earth-300);
        }
        
        .btn-outline:hover {
            background: var(--earth-100);
            border-color: var(--earth-400);
        }
        
        /* ===== INDICATEUR DE PROGRESSION ===== */
        .progress-indicator {
            margin-bottom: var(--space-xl);
        }
        
        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: var(--space-md);
        }
        
        .progress-steps::before {
            content: '';
            position: absolute;
            top: 16px;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--earth-200);
            z-index: 1;
        }
        
        .progress-step {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .step-circle {
            width: 36px;
            height: 36px;
            background: var(--earth-100);
            border: 2px solid var(--earth-300);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.5rem;
            color: var(--earth-600);
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .progress-step.active .step-circle {
            background: var(--primary-red);
            border-color: var(--primary-red);
            color: white;
        }
        
        .step-label {
            font-size: 0.875rem;
            color: var(--earth-600);
            font-weight: 500;
        }
        
        .progress-step.active .step-label {
            color: var(--primary-red);
            font-weight: 600;
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
        
        .fade-in-up {
            animation: fadeInUp 0.5s ease forwards;
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            body {
                padding: var(--space-sm);
            }
            
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--space-sm);
            }
            
            .brand-text h1 {
                font-size: 1.75rem;
            }
            
            .card-header {
                padding: var(--space-lg);
                flex-direction: column;
                align-items: flex-start;
                gap: var(--space-sm);
                text-align: center;
            }
            
            .card-content {
                padding: var(--space-lg);
            }
            
            .form-row {
                grid-template-columns: 1fr;
                gap: var(--space-sm);
            }
            
            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .save-options {
                width: 100%;
            }
            
            .progress-steps {
                flex-wrap: wrap;
                gap: var(--space-md);
            }
            
            .progress-steps::before {
                display: none;
            }
        }
        
        @media (max-width: 480px) {
            .brand-text h1 {
                font-size: 1.5rem;
            }
            
            .card-header h2 {
                font-size: 1.5rem;
            }
            
            .card-content {
                padding: var(--space-md);
            }
            
            .advanced-section {
                padding: var(--space-md);
            }
        }
    </style>
</head>
<body>
    <!-- En-tête de page -->
    <div class="page-header fade-in-up">
        <div class="brand-section">
            <div class="brand-icon">
                <i class="fas fa-feather-alt"></i>
            </div>
            <div class="brand-text">
                <h1>Créer un contenu</h1>
                <p class="subtitle">Partagez votre savoir sur le patrimoine culturel</p>
            </div>
        </div>
        <a href="{{ route('contributeur.contenus.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Retour aux contenus
        </a>
    </div>

    <!-- Indicateur de progression -->
    <div class="progress-indicator fade-in-up">
        <div class="progress-steps">
            <div class="progress-step active">
                <div class="step-circle">1</div>
                <div class="step-label">Informations de base</div>
            </div>
            <div class="progress-step">
                <div class="step-circle">2</div>
                <div class="step-label">Contenu détaillé</div>
            </div>
            <div class="progress-step">
                <div class="step-circle">3</div>
                <div class="step-label">Médias</div>
            </div>
        </div>
    </div>

    <!-- Carte principale du formulaire -->
    <div class="create-card fade-in-up">
        <div class="card-header">
            <div class="header-icon">
                <i class="fas fa-plus-circle"></i>
            </div>
            <h2>Nouveau contenu culturel</h2>
        </div>
        
        <div class="card-content">
            <form action="{{ route('contributeur.contenus.store') }}" method="POST" id="create-form">
                @csrf

                <!-- Section informations de base -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="titre" class="form-label">
                            <i class="fas fa-heading"></i> Titre <span class="required">*</span>
                        </label>
                        <input type="text" 
                               class="form-control @error('titre') is-invalid @enderror" 
                               id="titre" 
                               name="titre" 
                               value="{{ old('titre') }}" 
                               placeholder="Ex: Les Rites d'Initiation dans le Sud-Bénin" 
                               required>
                        @error('titre')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="statut" class="form-label">
                            <i class="fas fa-eye"></i> Visibilité
                        </label>
                        <select class="form-control @error('statut') is-invalid @enderror" 
                                id="statut" 
                                name="statut">
                            <option value="brouillon" {{ old('statut') == 'brouillon' ? 'selected' : '' }}>
                                <i class="fas fa-save"></i> Brouillon (visible uniquement par vous)
                            </option>
                            <option value="publié" {{ old('statut') == 'publié' ? 'selected' : '' }}>
                                <i class="fas fa-globe"></i> Publié (visible par tous)
                            </option>
                        </select>
                        @error('statut')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="id_type" class="form-label">
                            <i class="fas fa-tag"></i> Type de contenu <span class="required">*</span>
                        </label>
                        <select class="form-control @error('id_type') is-invalid @enderror" 
                                id="id_type" 
                                name="id_type" 
                                required>
                            <option value="">Sélectionner un type</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" 
                                    {{ old('id_type') == $type->id ? 'selected' : '' }}>
                                    {{ $type->nom }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_type')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_region" class="form-label">
                            <i class="fas fa-map-marker-alt"></i> Région <span class="required">*</span>
                        </label>
                        <select class="form-control @error('id_region') is-invalid @enderror" 
                                id="id_region" 
                                name="id_region" 
                                required>
                            <option value="">Sélectionner une région</option>
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}" 
                                    {{ old('id_region') == $region->id ? 'selected' : '' }}>
                                    {{ $region->nom }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_region')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_langue" class="form-label">
                            <i class="fas fa-language"></i> Langue <span class="required">*</span>
                        </label>
                        <select class="form-control @error('id_langue') is-invalid @enderror" 
                                id="id_langue" 
                                name="id_langue" 
                                required>
                            <option value="">Sélectionner une langue</option>
                            @foreach($langues as $langue)
                                <option value="{{ $langue->id }}" 
                                    {{ old('id_langue') == $langue->id ? 'selected' : '' }}>
                                    {{ $langue->nom }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_langue')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Section contenu détaillé -->
                <div class="textarea-container">
                    <div class="textarea-header">
                        <label for="texte" class="form-label">
                            <i class="fas fa-align-left"></i> Contenu <span class="required">*</span>
                        </label>
                        <div class="text-editor-tools">
                            <button type="button" class="editor-btn" onclick="formatText('bold')">
                                <i class="fas fa-bold"></i>
                            </button>
                            <button type="button" class="editor-btn" onclick="formatText('italic')">
                                <i class="fas fa-italic"></i>
                            </button>
                            <button type="button" class="editor-btn" onclick="formatText('link')">
                                <i class="fas fa-link"></i>
                            </button>
                        </div>
                    </div>
                    
                    <textarea class="form-control @error('texte') is-invalid @enderror" 
                              id="texte" 
                              name="texte" 
                              rows="12" 
                              placeholder="Décrivez votre contenu en détail..." 
                              required>{{ old('texte') }}</textarea>
                    
                    @error('texte')
                        <div class="invalid-feedback">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                    
                    <div class="form-text">
                        <i class="fas fa-info-circle"></i>
                        Minimum 10 caractères. Utilisez le format Markdown pour une mise en forme avancée.
                    </div>
                    
                    <div class="char-counter" id="char-counter">
                        <i class="fas fa-text-height"></i> <span id="char-count">0</span> caractères
                    </div>
                </div>

                <!-- Section avancée (optionnelle) -->
                <div class="advanced-section">
                    <h3 class="section-title">
                        <i class="fas fa-cogs"></i> Options avancées
                    </h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="mots_cles" class="form-label">
                                <i class="fas fa-hashtag"></i> Mots-clés
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   id="mots_cles" 
                                   name="mots_cles" 
                                   value="{{ old('mots_cles') }}" 
                                   placeholder="tradition, culture, patrimoine">
                            <div class="form-text">
                                Séparés par des virgules
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="source" class="form-label">
                                <i class="fas fa-book"></i> Source
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   id="source" 
                                   name="source" 
                                   value="{{ old('source') }}" 
                                   placeholder="Livre, entretien, recherche...">
                            <div class="form-text">
                                Mentionnez vos sources pour plus de crédibilité
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="form-actions">
                    <a href="{{ route('contributeur.contenus.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Annuler
                    </a>
                    
                    <div class="save-options">
                        <button type="submit" name="action" value="save_draft" class="btn btn-outline">
                            <i class="fas fa-save"></i> Sauvegarder comme brouillon
                        </button>
                        <button type="submit" name="action" value="publish" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Publier le contenu
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Validation côté client
            const form = document.getElementById('create-form');
            const texteInput = document.getElementById('texte');
            const charCount = document.getElementById('char-count');
            
            // Compteur de caractères
            function updateCharCount() {
                const length = texteInput.value.length;
                charCount.textContent = length;
                
                if (length < 10) {
                    charCount.style.color = 'var(--red-600)';
                } else if (length < 100) {
                    charCount.style.color = 'var(--gold-600)';
                } else {
                    charCount.style.color = 'var(--earth-600)';
                }
            }
            
            texteInput.addEventListener('input', updateCharCount);
            updateCharCount(); // Initialiser
            
            // Validation du formulaire
            form.addEventListener('submit', function(e) {
                const texte = texteInput.value;
                const titre = document.getElementById('titre').value;
                
                if (titre.trim().length < 2) {
                    e.preventDefault();
                    showError('Le titre doit avoir au moins 2 caractères.', 'titre');
                    return;
                }
                
                if (texte.trim().length < 10) {
                    e.preventDefault();
                    showError('Le contenu doit avoir au moins 10 caractères.', 'texte');
                    return;
                }
                
                if (!document.getElementById('id_type').value) {
                    e.preventDefault();
                    showError('Veuillez sélectionner un type de contenu.', 'id_type');
                    return;
                }
                
                if (!document.getElementById('id_region').value) {
                    e.preventDefault();
                    showError('Veuillez sélectionner une région.', 'id_region');
                    return;
                }
                
                if (!document.getElementById('id_langue').value) {
                    e.preventDefault();
                    showError('Veuillez sélectionner une langue.', 'id_langue');
                    return;
                }
            });
            
            // Fonction pour afficher les erreurs
            function showError(message, fieldId) {
                const field = document.getElementById(fieldId);
                const existingError = field.parentElement.querySelector('.invalid-feedback');
                
                if (existingError) {
                    existingError.querySelector('span').textContent = message;
                } else {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'invalid-feedback';
                    errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> <span>${message}</span>`;
                    
                    field.classList.add('is-invalid');
                    field.parentElement.appendChild(errorDiv);
                }
                
                field.focus();
            }
            
            // Outils d'édition simple
            window.formatText = function(type) {
                const textarea = document.getElementById('texte');
                const start = textarea.selectionStart;
                const end = textarea.selectionEnd;
                const selectedText = textarea.value.substring(start, end);
                let formattedText = '';
                
                switch(type) {
                    case 'bold':
                        formattedText = `**${selectedText}**`;
                        break;
                    case 'italic':
                        formattedText = `*${selectedText}*`;
                        break;
                    case 'link':
                        formattedText = `[${selectedText}](url)`;
                        break;
                }
                
                textarea.value = textarea.value.substring(0, start) + 
                                formattedText + 
                                textarea.value.substring(end);
                textarea.focus();
                textarea.setSelectionRange(start, start + formattedText.length);
            };
            
            // Mise à jour de la progression
            const textarea = document.getElementById('texte');
            const titreInput = document.getElementById('titre');
            
            function updateProgress() {
                const titreValid = titreInput.value.trim().length > 0;
                const typeValid = document.getElementById('id_type').value;
                const regionValid = document.getElementById('id_region').value;
                const langueValid = document.getElementById('id_langue').value;
                const texteValid = textarea.value.trim().length >= 10;
                
                const steps = document.querySelectorAll('.progress-step');
                
                // Étape 1 (informations de base)
                if (titreValid && typeValid && regionValid && langueValid) {
                    steps[0].classList.add('active');
                } else {
                    steps[0].classList.remove('active');
                }
                
                // Étape 2 (contenu détaillé)
                if (texteValid) {
                    steps[1].classList.add('active');
                } else {
                    steps[1].classList.remove('active');
                }
                
                // Étape 3 (médias) - toujours inactive pour ce formulaire de base
                steps[2].classList.remove('active');
            }
            
            // Écouteurs d'événements pour la progression
            titreInput.addEventListener('input', updateProgress);
            document.getElementById('id_type').addEventListener('change', updateProgress);
            document.getElementById('id_region').addEventListener('change', updateProgress);
            document.getElementById('id_langue').addEventListener('change', updateProgress);
            textarea.addEventListener('input', updateProgress);
            
            // Initialiser la progression
            updateProgress();
        });
    </script>
        @include('components.footer-styles')
        @include('components.footer-contributor')
</body>
</html>