<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un média - BéninCulture</title>
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
            max-width: 900px;
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
        .media-upload-card {
            max-width: 900px;
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
        
        .form-group {
            margin-bottom: var(--space-lg);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--earth-700);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
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
        
        .form-select {
            appearance: none;
            background: white url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%238B1E1E' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") no-repeat right 1rem center;
            padding-right: 3rem;
            cursor: pointer;
        }
        
        /* ===== UPLOAD DE FICHIER ===== */
        .file-upload-container {
            border: 2px dashed var(--earth-300);
            border-radius: var(--radius-lg);
            padding: var(--space-xl);
            text-align: center;
            transition: all 0.3s ease;
            background: var(--earth-50);
            cursor: pointer;
        }
        
        .file-upload-container:hover {
            border-color: var(--primary-red);
            background: var(--red-50);
        }
        
        .file-upload-container.dragover {
            border-color: var(--primary-red);
            background: var(--red-50);
            transform: scale(1.02);
        }
        
        .upload-icon {
            font-size: 3rem;
            color: var(--earth-400);
            margin-bottom: var(--space-sm);
        }
        
        .upload-text h4 {
            font-family: 'Playfair Display', serif;
            color: var(--earth-800);
            margin-bottom: 0.5rem;
        }
        
        .upload-text p {
            color: var(--earth-600);
            margin-bottom: var(--space-md);
        }
        
        .upload-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--gradient-primary);
            color: white;
            border-radius: var(--radius-md);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        
        #media {
            display: none;
        }
        
        .file-info {
            margin-top: var(--space-sm);
            padding: var(--space-sm);
            background: var(--earth-100);
            border-radius: var(--radius-md);
            border: 1px solid var(--earth-300);
        }
        
        .file-info-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.5rem;
        }
        
        .file-info-item:last-child {
            margin-bottom: 0;
        }
        
        .file-info-icon {
            color: var(--earth-500);
            font-size: 1rem;
        }
        
        /* ===== APERÇU ===== */
        .preview-container {
            margin-top: var(--space-md);
            display: none;
        }
        
        .preview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--space-sm);
        }
        
        .preview-title {
            font-weight: 600;
            color: var(--earth-800);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .preview-content {
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--earth-200);
            background: var(--earth-50);
        }
        
        #preview-image {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: contain;
            display: block;
        }
        
        .preview-placeholder {
            padding: var(--space-xl);
            text-align: center;
            color: var(--earth-600);
        }
        
        .preview-placeholder i {
            font-size: 3rem;
            color: var(--earth-400);
            margin-bottom: var(--space-sm);
        }
        
        /* ===== TEXTAREA ===== */
        .textarea-container {
            position: relative;
        }
        
        .char-counter {
            position: absolute;
            bottom: 0.5rem;
            right: 1rem;
            color: var(--earth-600);
            font-size: 0.875rem;
            background: white;
            padding: 0.25rem 0.5rem;
            border-radius: var(--radius-sm);
        }
        
        .char-counter.warning {
            color: var(--gold-600);
        }
        
        .char-counter.error {
            color: var(--red-600);
        }
        
        #description {
            min-height: 120px;
            resize: vertical;
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
            
            .file-upload-container {
                padding: var(--space-lg);
            }
            
            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
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
            
            .file-upload-container {
                padding: var(--space-md);
            }
            
            .upload-icon {
                font-size: 2.5rem;
            }
            
            .preview-placeholder {
                padding: var(--space-lg);
            }
        }
    </style>
</head>
<body>
    <!-- En-tête de page -->
    <div class="page-header fade-in-up">
        <div class="brand-section">
            <div class="brand-icon">
                <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <div class="brand-text">
                <h1>Ajouter un média</h1>
                <p class="subtitle">Enrichissez vos contenus avec des médias</p>
            </div>
        </div>
        <a href="{{ route('contributeur.medias.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Retour aux médias
        </a>
    </div>

    <!-- Carte principale du formulaire -->
    <div class="media-upload-card fade-in-up">
        <div class="card-header">
            <div class="header-icon">
                <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <h2>Téléverser un média</h2>
        </div>
        
        <div class="card-content">
            <form action="{{ route('contributeur.medias.store') }}" method="POST" enctype="multipart/form-data" id="upload-form">
                @csrf

                <!-- Sélection du contenu -->
                <div class="form-group">
                    <label for="id_contenu" class="form-label">
                        <i class="fas fa-file-alt"></i> Contenu associé <span class="required">*</span>
                    </label>
                    <select class="form-control form-select @error('id_contenu') is-invalid @enderror" 
                            id="id_contenu" name="id_contenu" required>
                        <option value="">Sélectionnez un contenu</option>
                        @foreach($contenus as $cont)
                            <option value="{{ $cont->id }}" 
                                {{ old('id_contenu', $contenu->id ?? '') == $cont->id ? 'selected' : '' }}>
                                {{ $cont->titre }}
                                ({{ $cont->statut }})
                            </option>
                        @endforeach
                    </select>
                    @error('id_contenu')
                        <div class="invalid-feedback">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                    <div class="form-text">
                        <i class="fas fa-info-circle"></i> Le média sera associé à ce contenu.
                    </div>
                </div>

                <!-- Type de média -->
                <div class="form-group">
                    <label for="id_typemedia" class="form-label">
                        <i class="fas fa-film"></i> Type de média <span class="required">*</span>
                    </label>
                    <select class="form-control form-select @error('id_typemedia') is-invalid @enderror" 
                            id="id_typemedia" name="id_typemedia" required>
                        <option value="">Sélectionnez un type</option>
                        @foreach($typesMedia as $type)
                            <option value="{{ $type->id }}" 
                                {{ old('id_typemedia') == $type->id ? 'selected' : '' }}>
                                {{ $type->nom }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_typemedia')
                        <div class="invalid-feedback">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Zone de téléversement -->
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-file-upload"></i> Fichier <span class="required">*</span>
                    </label>
                    
                    <div class="file-upload-container" id="upload-zone">
                        <div class="upload-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div class="upload-text">
                            <h4>Glissez-déposez votre fichier ici</h4>
                            <p>ou cliquez pour parcourir</p>
                        </div>
                        <div class="upload-btn" onclick="document.getElementById('media').click()">
                            <i class="fas fa-folder-open"></i> Choisir un fichier
                        </div>
                        <input type="file" 
                               class="form-control" 
                               id="media" 
                               name="media" 
                               required
                               accept="image/*,video/*,audio/*,.pdf,.doc,.docx,.txt">
                    </div>
                    
                    @error('media')
                        <div class="invalid-feedback">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                    
                    <div class="form-text">
                        <i class="fas fa-info-circle"></i> Taille maximum : 5MB. Formats acceptés : images, vidéos, audio, PDF, documents.
                    </div>
                    
                    <!-- Info fichier -->
                    <div id="file-info" class="file-info" style="display: none;">
                        <div class="file-info-item">
                            <i class="fas fa-file file-info-icon"></i>
                            <span id="file-name">-</span>
                        </div>
                        <div class="file-info-item">
                            <i class="fas fa-weight file-info-icon"></i>
                            <span id="file-size">-</span>
                        </div>
                        <div class="file-info-item">
                            <i class="fas fa-code file-info-icon"></i>
                            <span id="file-type">-</span>
                        </div>
                    </div>
                    
                    <!-- Aperçu -->
                    <div id="preview-container" class="preview-container">
                        <div class="preview-header">
                            <div class="preview-title">
                                <i class="fas fa-eye"></i> Aperçu
                            </div>
                        </div>
                        <div class="preview-content">
                            <img id="preview-image" class="preview-image">
                            <div id="preview-placeholder" class="preview-placeholder">
                                <i class="fas fa-file"></i>
                                <p>Aperçu non disponible pour ce type de fichier</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group textarea-container">
                    <label for="description" class="form-label">
                        <i class="fas fa-align-left"></i> Description <span class="required">*</span>
                    </label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" 
                              name="description" 
                              rows="3" 
                              placeholder="Décrivez brièvement ce média (ex: photo d'une cérémonie traditionnelle, enregistrement audio d'un conte...)" 
                              required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                    <div class="char-counter" id="char-counter">
                        0/500
                    </div>
                </div>

                <!-- Boutons -->
                <div class="form-actions">
                    <a href="{{ route('contributeur.medias.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-upload"></i> Téléverser le média
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadZone = document.getElementById('upload-zone');
            const fileInput = document.getElementById('media');
            const fileInfo = document.getElementById('file-info');
            const previewContainer = document.getElementById('preview-container');
            const previewImage = document.getElementById('preview-image');
            const previewPlaceholder = document.getElementById('preview-placeholder');
            const descriptionInput = document.getElementById('description');
            const charCounter = document.getElementById('char-counter');
            const form = document.getElementById('upload-form');
            
            const fileName = document.getElementById('file-name');
            const fileSize = document.getElementById('file-size');
            const fileType = document.getElementById('file-type');
            
            // Drag and drop
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                uploadZone.addEventListener(eventName, preventDefaults, false);
            });
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            ['dragenter', 'dragover'].forEach(eventName => {
                uploadZone.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                uploadZone.addEventListener(eventName, unhighlight, false);
            });
            
            function highlight() {
                uploadZone.classList.add('dragover');
            }
            
            function unhighlight() {
                uploadZone.classList.remove('dragover');
            }
            
            // Gestion du drop
            uploadZone.addEventListener('drop', handleDrop, false);
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length > 0) {
                    fileInput.files = files;
                    handleFileSelection(files[0]);
                }
            }
            
            // Gestion de la sélection de fichier
            fileInput.addEventListener('change', function(e) {
                if (this.files.length > 0) {
                    handleFileSelection(this.files[0]);
                }
            });
            
            function handleFileSelection(file) {
                // Afficher les informations du fichier
                fileName.textContent = file.name;
                fileSize.textContent = formatFileSize(file.size);
                fileType.textContent = file.type || 'Type inconnu';
                fileInfo.style.display = 'block';
                
                // Vérifier la taille
                const maxSize = 5 * 1024 * 1024; // 5MB
                if (file.size > maxSize) {
                    showFileError('Le fichier est trop volumineux. Maximum 5MB.');
                    return;
                }
                
                // Gérer l'aperçu
                if (file.type.startsWith('image/')) {
                    previewImage.style.display = 'block';
                    previewPlaceholder.style.display = 'none';
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewContainer.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewImage.style.display = 'none';
                    previewPlaceholder.style.display = 'block';
                    previewContainer.style.display = 'block';
                }
                
                // Définir automatiquement le type de média si possible
                if (file.type.startsWith('image/')) {
                    document.getElementById('id_typemedia').value = getMediaTypeId('image');
                } else if (file.type.startsWith('video/')) {
                    document.getElementById('id_typemedia').value = getMediaTypeId('vidéo');
                } else if (file.type.startsWith('audio/')) {
                    document.getElementById('id_typemedia').value = getMediaTypeId('audio');
                } else if (file.type.includes('pdf')) {
                    document.getElementById('id_typemedia').value = getMediaTypeId('document');
                }
            }
            
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }
            
            function getMediaTypeId(typeName) {
                // Trouver l'ID du type de média correspondant au nom
                const typeSelect = document.getElementById('id_typemedia');
                for (let option of typeSelect.options) {
                    if (option.text.toLowerCase().includes(typeName.toLowerCase())) {
                        return option.value;
                    }
                }
                return '';
            }
            
            function showFileError(message) {
                // Créer un message d'erreur
                const errorDiv = document.createElement('div');
                errorDiv.className = 'invalid-feedback';
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> <span>${message}</span>`;
                
                // Nettoyer les anciennes erreurs
                const existingError = fileInput.parentElement.querySelector('.invalid-feedback');
                if (existingError) {
                    existingError.remove();
                }
                
                fileInput.parentElement.appendChild(errorDiv);
                fileInput.classList.add('is-invalid');
            }
            
            // Compteur de caractères pour la description
            descriptionInput.addEventListener('input', function() {
                const maxLength = 500;
                const currentLength = this.value.length;
                charCounter.textContent = `${currentLength}/${maxLength}`;
                
                // Mettre à jour la couleur
                charCounter.classList.remove('warning', 'error');
                if (currentLength > maxLength * 0.9) {
                    charCounter.classList.add('warning');
                }
                if (currentLength > maxLength) {
                    charCounter.classList.add('error');
                }
            });
            
            // Initialiser le compteur
            descriptionInput.dispatchEvent(new Event('input'));
            
            // Validation du formulaire
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Validation de la taille du fichier
                if (fileInput.files.length > 0) {
                    const maxSize = 5 * 1024 * 1024;
                    const file = fileInput.files[0];
                    
                    if (file.size > maxSize) {
                        e.preventDefault();
                        showFileError('Le fichier est trop volumineux. Taille maximum : 5MB.');
                        isValid = false;
                    }
                }
                
                // Validation de la description
                const description = descriptionInput.value.trim();
                if (description.length < 10) {
                    e.preventDefault();
                    showError('La description doit contenir au moins 10 caractères.', 'description');
                    isValid = false;
                }
                
                if (description.length > 500) {
                    e.preventDefault();
                    showError('La description ne peut pas dépasser 500 caractères.', 'description');
                    isValid = false;
                }
                
                if (!isValid) {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            });
            
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
            
            // Animation au défilement
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Initialisation des animations
            setTimeout(() => {
                document.querySelectorAll('.fade-in-up').forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }, 100);
        });
    </script>
        @include('components.footer-styles')
        @include('components.footer-contributor')
</body>
</html>