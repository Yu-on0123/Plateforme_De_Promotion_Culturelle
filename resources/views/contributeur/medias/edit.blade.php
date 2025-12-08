<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le média - BéninCulture</title>
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
            --gradient-info: linear-gradient(135deg, #0ea5e9, #3b82f6);
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
        .media-header {
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
        .main-container {
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
        
        /* ===== APERÇU DU MÉDIA ===== */
        .media-preview {
            background: linear-gradient(135deg, var(--earth-50), var(--gold-50));
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            margin-bottom: 2.5rem;
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-md);
            text-align: center;
        }
        
        .preview-title {
            font-family: 'Playfair Display', serif;
            color: var(--earth-800);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }
        
        .preview-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }
        
        .media-image {
            max-width: 100%;
            max-height: 300px;
            border-radius: var(--radius-lg);
            border: 3px solid var(--earth-200);
            box-shadow: var(--shadow-lg);
            transition: transform 0.3s ease;
        }
        
        .media-image:hover {
            transform: scale(1.02);
        }
        
        .media-placeholder {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, var(--earth-200), var(--earth-300));
            border-radius: var(--radius-lg);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--earth-600);
            border: 2px dashed var(--earth-400);
        }
        
        .media-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .media-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--earth-700);
            background: white;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-sm);
            border: 1px solid var(--earth-200);
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
        
        .form-select, .form-control, .form-textarea {
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
        
        .form-select:focus, .form-control:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.1);
        }
        
        .form-select.is-invalid, .form-control.is-invalid, .form-textarea.is-invalid {
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
        
        /* ===== UPLOAD DE FICHIER ===== */
        .file-upload-container {
            position: relative;
        }
        
        .file-upload-label {
            display: block;
            padding: 2rem;
            background: white;
            border: 2px dashed var(--earth-300);
            border-radius: var(--radius-lg);
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }
        
        .file-upload-label:hover {
            border-color: var(--primary-red);
            background: var(--red-50);
            transform: translateY(-2px);
        }
        
        .file-upload-label.drag-over {
            border-color: var(--primary-gold);
            background: var(--gold-50);
            border-style: solid;
        }
        
        .upload-icon {
            font-size: 2.5rem;
            color: var(--earth-400);
            margin-bottom: 1rem;
        }
        
        .upload-text {
            color: var(--earth-700);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .upload-subtext {
            color: var(--earth-600);
            font-size: 0.9rem;
        }
        
        .file-info {
            background: var(--earth-50);
            border-radius: var(--radius-md);
            padding: 1rem;
            margin-top: 1rem;
            display: none;
            border: 1px solid var(--earth-200);
        }
        
        .file-info.show {
            display: block;
            animation: slideDown 0.3s ease;
        }
        
        .file-name {
            font-weight: 500;
            color: var(--earth-800);
            margin-bottom: 0.5rem;
        }
        
        .file-size {
            color: var(--earth-600);
            font-size: 0.9rem;
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
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
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
        @media (max-width: 992px) {
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
            
            .main-container {
                padding: 0 1.5rem;
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
            
            .media-preview {
                padding: 1.5rem;
            }
            
            .media-info {
                flex-direction: column;
                align-items: center;
                gap: 0.75rem;
            }
            
            .info-item {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .header-container,
            .main-container {
                padding: 0 1rem;
            }
            
            .form-body {
                padding: 1.5rem;
            }
            
            .form-header h3 {
                font-size: 1.3rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .media-placeholder {
                width: 150px;
                height: 150px;
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
        
        .file-type-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-sm);
            font-size: 0.8rem;
            font-weight: 500;
            margin-left: 0.5rem;
        }
        
        .badge-image {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
        }
        
        .badge-video {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
            color: white;
        }
        
        .badge-audio {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }
        
        .badge-document {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }
        
        /* ===== PRÉVISUALISATION DU FICHIER ===== */
        .new-file-preview {
            background: linear-gradient(135deg, var(--gold-50), var(--red-50));
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            margin-top: 1rem;
            display: none;
            border: 1px solid var(--earth-200);
            animation: fadeInUp 0.3s ease;
        }
        
        .new-file-preview.show {
            display: block;
        }
        
        .preview-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="media-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="brand-text">
                    <h1>BéninCulture</h1>
                    <div class="subtitle">Gestion des médias</div>
                </div>
            </div>
            
            <div class="header-nav">
                <a href="{{ route('contributeur.medias.index') }}" class="nav-category">
                    <i class="fas fa-list"></i> Mes médias
                </a>
                <a href="{{ route('contributeur.medias.create') }}" class="nav-category">
                    <i class="fas fa-plus"></i> Nouveau média
                </a>
            </div>
        </div>
    </header>

    <!-- Formulaire principal -->
    <div class="main-container">
        <div class="form-card">
            <div class="form-header">
                <h3>
                    <i class="fas fa-edit"></i>
                    Modifier le média
                </h3>
            </div>
            
            <div class="form-body">
                <!-- Aperçu du média actuel -->
                <div class="media-preview">
                    <div class="preview-title">
                        <i class="fas fa-eye"></i>
                        Média actuel
                    </div>
                    <div class="preview-content">
                        @if(preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $media->chemin))
                            <img src="{{ asset('storage/' . $media->chemin) }}" 
                                 class="media-image" 
                                 alt="{{ $media->description }}"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
                        @else
                            <div class="media-placeholder">
                                <i class="fas fa-file-{{ getFileIcon($media->typeMedia->nom) }} media-icon"></i>
                                <div style="text-align: center;">
                                    <strong>{{ $media->typeMedia->nom }}</strong>
                                    <p class="text-muted mt-1" style="font-size: 0.9rem;">
                                        {{ basename($media->chemin) }}
                                    </p>
                                </div>
                            </div>
                        @endif
                        
                        <div class="media-info">
                            <div class="info-item">
                                <i class="fas fa-file"></i>
                                <span>{{ $media->typeMedia->nom }}</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-weight"></i>
                                <span>{{ getFileSize($media->chemin) }}</span>
                            </div>
                            <div class="info-item">
                                <i class="far fa-calendar"></i>
                                <span>Ajouté le {{ $media->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ route('contributeur.medias.update', $media) }}" 
                      method="POST" enctype="multipart/form-data" id="mediaForm">
                    @csrf
                    @method('PUT')

                    <!-- Contenu associé -->
                    <div class="form-group">
                        <label for="id_contenu" class="form-label required">
                            <i class="fas fa-link"></i> Contenu associé
                        </label>
                        <select class="form-select @error('id_contenu') is-invalid @enderror" 
                                id="id_contenu" name="id_contenu" required>
                            @foreach($contenus as $cont)
                                <option value="{{ $cont->id }}" 
                                    {{ old('id_contenu', $media->id_contenu) == $cont->id ? 'selected' : '' }}>
                                    {{ $cont->titre }}
                                    <span class="file-type-badge {{ $cont->statut === 'publié' ? 'badge-image' : 'badge-document' }}">
                                        {{ ucfirst($cont->statut) }}
                                    </span>
                                </option>
                            @endforeach
                        </select>
                        @error('id_contenu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle"></i> Sélectionnez le contenu auquel ce média est associé
                        </div>
                    </div>

                    <!-- Type de média -->
                    <div class="form-group">
                        <label for="id_typemedia" class="form-label required">
                            <i class="fas fa-tag"></i> Type de média
                        </label>
                        <select class="form-select @error('id_typemedia') is-invalid @enderror" 
                                id="id_typemedia" name="id_typemedia" required>
                            @foreach($typesMedia as $type)
                                <option value="{{ $type->id }}" 
                                    {{ old('id_typemedia', $media->id_typemedia) == $type->id ? 'selected' : '' }}
                                    data-icon="fa-file-{{ getFileIcon($type->nom) }}">
                                    {{ $type->nom }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_typemedia')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle"></i> Le type de média détermine comment il sera affiché
                        </div>
                    </div>

                    <!-- Nouveau fichier -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-file-upload"></i> Remplacer le fichier (optionnel)
                        </label>
                        <div class="file-upload-container">
                            <label for="media" class="file-upload-label" id="uploadLabel">
                                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                <div class="upload-text">
                                    Cliquez ou glissez-déposez un fichier
                                </div>
                                <div class="upload-subtext">
                                    Images, vidéos, audio, documents (max 10MB)
                                </div>
                            </label>
                            <input type="file" 
                                   class="form-control @error('media') is-invalid @enderror" 
                                   id="media" name="media"
                                   accept="image/*,video/*,audio/*,.pdf,.doc,.docx,.txt"
                                   style="display: none;">
                            <div class="file-info" id="fileInfo">
                                <div class="file-name" id="fileName"></div>
                                <div class="file-size" id="fileSize"></div>
                            </div>
                        </div>
                        @error('media')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-exclamation-circle"></i> Laissez vide pour conserver le fichier actuel
                        </div>
                        
                        <!-- Prévisualisation du nouveau fichier -->
                        <div class="new-file-preview" id="newFilePreview">
                            <div class="preview-title">
                                <i class="fas fa-eye"></i>
                                Nouveau fichier sélectionné
                            </div>
                            <div id="newFileContent"></div>
                            <div class="preview-actions">
                                <button type="button" class="btn btn-outline" onclick="clearNewFile()">
                                    <i class="fas fa-times"></i> Supprimer
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description" class="form-label required">
                            <i class="fas fa-align-left"></i> Description
                        </label>
                        <div class="textarea-container">
                            <textarea class="form-control @error('description') is-invalid @enderror form-textarea" 
                                      id="description" name="description" rows="4" 
                                      required>{{ old('description', $media->description) }}</textarea>
                            <div id="char-counter" class="textarea-counter normal">0/500 caractères</div>
                        </div>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle"></i> Décrivez brièvement le contenu de ce média
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class="form-actions">
                        <div class="action-group">
                            <a href="{{ route('contributeur.medias.show', $media) }}" 
                               class="btn btn-secondary btn-lg">
                                <i class="fas fa-eye"></i> Annuler
                            </a>
                            <a href="{{ route('contributeur.medias.index') }}" 
                               class="btn btn-outline btn-lg">
                                <i class="fas fa-arrow-left"></i> Retour
                            </a>
                        </div>
                        <div class="action-group">
                            <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                <i class="fas fa-save"></i> Enregistrer les modifications
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
            const descriptionTextarea = document.getElementById('description');
            const charCounter = document.getElementById('char-counter');
            const form = document.getElementById('mediaForm');
            const submitBtn = document.getElementById('submitBtn');
            const fileInput = document.getElementById('media');
            const uploadLabel = document.getElementById('uploadLabel');
            const fileInfo = document.getElementById('fileInfo');
            const newFilePreview = document.getElementById('newFilePreview');
            const maxLength = 500;
            const maxFileSize = 10 * 1024 * 1024; // 10MB
            
            // Compteur de caractères pour la description
            descriptionTextarea.addEventListener('input', function() {
                const currentLength = this.value.length;
                charCounter.textContent = `${currentLength}/${maxLength} caractères`;
                
                // Mise à jour des classes selon la longueur
                charCounter.className = 'textarea-counter normal';
                if (currentLength > maxLength * 0.9 && currentLength <= maxLength) {
                    charCounter.classList.add('warning');
                }
                if (currentLength > maxLength) {
                    charCounter.classList.add('danger');
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                }
            });
            
            // Initialisation du compteur
            descriptionTextarea.dispatchEvent(new Event('input'));
            
            // Gestion du drag & drop pour le fichier
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                uploadLabel.addEventListener(eventName, preventDefaults, false);
            });
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            ['dragenter', 'dragover'].forEach(eventName => {
                uploadLabel.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                uploadLabel.addEventListener(eventName, unhighlight, false);
            });
            
            function highlight() {
                uploadLabel.classList.add('drag-over');
            }
            
            function unhighlight() {
                uploadLabel.classList.remove('drag-over');
            }
            
            // Gestion du drop de fichier
            uploadLabel.addEventListener('drop', handleDrop, false);
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                fileInput.files = files;
                handleFiles(files);
            }
            
            // Gestion du clic sur la zone d'upload
            uploadLabel.addEventListener('click', function() {
                fileInput.click();
            });
            
            // Gestion de la sélection de fichier
            fileInput.addEventListener('change', function() {
                handleFiles(this.files);
            });
            
            function handleFiles(files) {
                if (files.length > 0) {
                    const file = files[0];
                    
                    // Validation de la taille
                    if (file.size > maxFileSize) {
                        alert('Le fichier est trop volumineux. Taille maximale : 10MB');
                        fileInput.value = '';
                        fileInfo.classList.remove('show');
                        newFilePreview.classList.remove('show');
                        return;
                    }
                    
                    // Mise à jour des informations du fichier
                    document.getElementById('fileName').textContent = file.name;
                    document.getElementById('fileSize').textContent = formatFileSize(file.size);
                    fileInfo.classList.add('show');
                    
                    // Prévisualisation du nouveau fichier
                    previewNewFile(file);
                    
                    // Animation de confirmation
                    uploadLabel.style.animation = 'pulse 0.5s ease-in-out';
                    setTimeout(() => {
                        uploadLabel.style.animation = '';
                    }, 500);
                }
            }
            
            function formatFileSize(bytes) {
                if (bytes < 1024) return bytes + ' B';
                else if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
                else return (bytes / 1048576).toFixed(1) + ' MB';
            }
            
            function previewNewFile(file) {
                const newFileContent = document.getElementById('newFileContent');
                const reader = new FileReader();
                
                if (file.type.startsWith('image/')) {
                    reader.onload = function(e) {
                        newFileContent.innerHTML = `
                            <img src="${e.target.result}" 
                                 class="media-image" 
                                 alt="Nouvelle image"
                                 style="max-height: 200px;">
                        `;
                    };
                    reader.readAsDataURL(file);
                } else {
                    const icon = getFileIconFromType(file.type);
                    newFileContent.innerHTML = `
                        <div class="media-placeholder">
                            <i class="fas fa-${icon} media-icon"></i>
                            <div style="text-align: center;">
                                <strong>${file.name}</strong>
                                <p class="text-muted mt-1" style="font-size: 0.9rem;">
                                    ${file.type.split('/')[1].toUpperCase() || 'FICHIER'}
                                </p>
                            </div>
                        </div>
                    `;
                }
                
                newFilePreview.classList.add('show');
                newFilePreview.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
            
            function getFileIconFromType(mimeType) {
                if (mimeType.startsWith('image/')) return 'image';
                if (mimeType.startsWith('video/')) return 'video';
                if (mimeType.startsWith('audio/')) return 'music';
                if (mimeType.includes('pdf')) return 'file-pdf';
                if (mimeType.includes('word') || mimeType.includes('document')) return 'file-word';
                return 'file-alt';
            }
            
            window.clearNewFile = function() {
                fileInput.value = '';
                fileInfo.classList.remove('show');
                newFilePreview.classList.remove('show');
                uploadLabel.innerHTML = `
                    <i class="fas fa-cloud-upload-alt upload-icon"></i>
                    <div class="upload-text">
                        Cliquez ou glissez-déposez un fichier
                    </div>
                    <div class="upload-subtext">
                        Images, vidéos, audio, documents (max 10MB)
                    </div>
                `;
            };
            
            // Gestion de la soumission du formulaire
            form.addEventListener('submit', function(e) {
                const descriptionLength = descriptionTextarea.value.length;
                
                if (descriptionLength > maxLength) {
                    e.preventDefault();
                    charCounter.classList.add('danger');
                    charCounter.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${descriptionLength}/${maxLength} caractères`;
                    
                    charCounter.style.animation = 'pulse 0.5s ease-in-out 2';
                    setTimeout(() => {
                        charCounter.style.animation = '';
                    }, 1000);
                    
                    alert('La description dépasse la limite de 500 caractères.');
                    descriptionTextarea.focus();
                    return;
                }
                
                // Animation de chargement
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Modification en cours...';
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
            });
            
            // Animation des éléments
            const formElements = document.querySelectorAll('.form-group, .media-preview');
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
        
        // Fonction helper PHP en JavaScript
        function getFileIcon(typeName) {
            const icons = {
                'Image': 'image',
                'Vidéo': 'video',
                'Audio': 'music',
                'Document': 'file-alt',
                'PDF': 'file-pdf',
            };
            return icons[typeName] || 'file';
        }
    </script>
        @include('components.footer-styles')
        @include('components.footer-contributor')
</body>
</html>

<?php
function getFileIcon($type) {
    $icons = [
        'Image' => 'image',
        'Vidéo' => 'video',
        'Audio' => 'music',
        'Document' => 'file-alt',
        'PDF' => 'file-pdf',
    ];
    return $icons[$type] ?? 'file';
}

function getFileSize($path) {
    $size = Storage::disk('public')->size($path);
    if ($size < 1024) {
        return $size . ' B';
    } elseif ($size < 1048576) {
        return round($size / 1024, 1) . ' KB';
    } else {
        return round($size / 1048576, 1) . ' MB';
    }
}
?>