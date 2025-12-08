<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du média - BéninCulture</title>
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
            --gradient-warning: linear-gradient(135deg, #d97706, #b45309);
            
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
            align-items: center;
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
        .media-detail-card {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .card-header {
            background: white;
            padding: var(--space-lg);
            border-bottom: 1px solid var(--earth-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: var(--space-md);
        }
        
        .header-title {
            display: flex;
            align-items: center;
            gap: var(--space-sm);
        }
        
        .header-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            color: var(--earth-800);
            font-weight: 600;
            margin: 0;
        }
        
        .header-icon {
            width: 48px;
            height: 48px;
            background: var(--gradient-subtle);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
            font-size: 1.5rem;
        }
        
        .header-actions {
            display: flex;
            gap: var(--space-xs);
        }
        
        .btn {
            padding: 0.625rem 1.25rem;
            border-radius: var(--radius-md);
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Inter', sans-serif;
        }
        
        .btn-warning {
            background: var(--gradient-warning);
            color: white;
        }
        
        .btn-danger {
            background: var(--red-500);
            color: white;
        }
        
        .btn-danger:hover {
            background: var(--red-600);
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            color: white;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        
        /* ===== CONTENU PRINCIPAL ===== */
        .card-content {
            padding: var(--space-xl);
        }
        
        .media-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-xl);
            margin-bottom: var(--space-xl);
        }
        
        /* ===== APERÇU DU MÉDIA ===== */
        .media-preview-container {
            background: var(--earth-50);
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-md);
        }
        
        .media-preview {
            padding: var(--space-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 400px;
        }
        
        .media-image {
            max-width: 100%;
            max-height: 400px;
            object-fit: contain;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-lg);
        }
        
        .media-video {
            width: 100%;
            max-height: 400px;
            border-radius: var(--radius-md);
        }
        
        .media-audio-container {
            width: 100%;
            max-width: 500px;
            padding: var(--space-md);
            background: white;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
        }
        
        .media-audio {
            width: 100%;
        }
        
        .media-icon-large {
            font-size: 4rem;
            color: var(--earth-400);
            margin-bottom: var(--space-md);
        }
        
        .media-file-info {
            background: white;
            padding: var(--space-md);
            border-top: 1px solid var(--earth-200);
        }
        
        .file-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid var(--earth-100);
        }
        
        .file-info-row:last-child {
            border-bottom: none;
        }
        
        .file-info-label {
            color: var(--earth-600);
            font-size: 0.9rem;
        }
        
        .file-info-value {
            font-weight: 600;
            color: var(--earth-800);
        }
        
        /* ===== INFORMATIONS DU MÉDIA ===== */
        .media-info-container {
            display: flex;
            flex-direction: column;
            gap: var(--space-lg);
        }
        
        .description-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-sm);
        }
        
        .description-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            margin-bottom: var(--space-md);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .description-text {
            color: var(--earth-700);
            font-size: 1.1rem;
            line-height: 1.7;
            padding: var(--space-md);
            background: var(--earth-50);
            border-radius: var(--radius-md);
        }
        
        .info-card {
            background: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-sm);
        }
        
        .info-card-header {
            background: var(--earth-100);
            padding: var(--space-md) var(--space-lg);
            border-bottom: 1px solid var(--earth-200);
        }
        
        .info-card-header h3 {
            font-size: 1.25rem;
            color: var(--earth-800);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .info-card-body {
            padding: var(--space-lg);
        }
        
        .info-list {
            list-style: none;
            padding: 0;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--space-sm) 0;
            border-bottom: 1px solid var(--earth-100);
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            color: var(--earth-600);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .info-value {
            font-weight: 600;
            color: var(--earth-800);
            text-align: right;
        }
        
        .info-link {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .info-link:hover {
            color: var(--earth-800);
            text-decoration: underline;
        }
        
        .badge {
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            color: white;
        }
        
        .badge-success {
            background: var(--gradient-success);
        }
        
        .badge-warning {
            background: var(--gradient-warning);
        }
        
        /* ===== ACTIONS RAPIDES ===== */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--space-md);
            margin-top: var(--space-xl);
        }
        
        .action-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            border: 1px solid var(--earth-200);
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            gap: var(--space-md);
            box-shadow: var(--shadow-sm);
        }
        
        .action-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-gold);
        }
        
        .action-icon {
            width: 56px;
            height: 56px;
            background: var(--gradient-subtle);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
            font-size: 1.5rem;
        }
        
        .action-content h4 {
            font-size: 1.1rem;
            color: var(--earth-800);
            margin-bottom: 0.25rem;
        }
        
        .action-content p {
            color: var(--earth-600);
            font-size: 0.9rem;
        }
        
        /* ===== FOOTER ===== */
        .card-footer {
            background: var(--earth-50);
            padding: var(--space-lg);
            border-top: 1px solid var(--earth-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: var(--space-md);
        }
        
        .footer-actions {
            display: flex;
            gap: var(--space-sm);
            flex-wrap: wrap;
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
        
        .btn-group {
            display: flex;
            gap: var(--space-xs);
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
        @media (max-width: 992px) {
            .media-layout {
                grid-template-columns: 1fr;
                gap: var(--space-lg);
            }
            
            .media-preview {
                min-height: 300px;
            }
            
            .media-image {
                max-height: 300px;
            }
        }
        
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
                flex-direction: column;
                align-items: stretch;
                gap: var(--space-sm);
            }
            
            .header-actions {
                width: 100%;
                justify-content: center;
            }
            
            .card-content {
                padding: var(--space-lg);
            }
            
            .quick-actions {
                grid-template-columns: 1fr;
            }
            
            .card-footer {
                flex-direction: column;
                align-items: stretch;
            }
            
            .footer-actions {
                order: -1;
                margin-bottom: var(--space-md);
            }
            
            .btn-group {
                width: 100%;
            }
            
            .btn-group .btn {
                flex: 1;
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .brand-text h1 {
                font-size: 1.5rem;
            }
            
            .header-title h2 {
                font-size: 1.5rem;
            }
            
            .card-content {
                padding: var(--space-md);
            }
            
            .description-text {
                padding: var(--space-sm);
                font-size: 1rem;
            }
            
            .info-card-body {
                padding: var(--space-md);
            }
            
            .info-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.25rem;
            }
            
            .info-value {
                text-align: left;
            }
            
            .action-card {
                padding: var(--space-md);
            }
            
            .action-icon {
                width: 48px;
                height: 48px;
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>
    <!-- En-tête de page -->
    <div class="page-header fade-in-up">
        <div class="brand-section">
            <div class="brand-icon">
                <i class="fas fa-image"></i>
            </div>
            <div class="brand-text">
                <h1>Détail du média</h1>
                <p class="subtitle">Informations complètes sur votre média</p>
            </div>
        </div>
        <a href="{{ route('contributeur.medias.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Retour aux médias
        </a>
    </div>

    <!-- Carte principale -->
    <div class="media-detail-card fade-in-up">
        <!-- En-tête de carte -->
        <div class="card-header">
            <div class="header-title">
                <div class="header-icon">
                    <i class="fas fa-image"></i>
                </div>
                <h2>Média ID: {{ $media->id }}</h2>
            </div>
            <div class="header-actions">
                <a href="{{ route('contributeur.medias.edit', $media) }}" 
                   class="btn btn-warning" title="Modifier">
                    <i class="fas fa-edit"></i> Modifier
                </a>
                <form action="{{ route('contributeur.medias.destroy', $media) }}" 
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                            onclick="return confirmDelete()" title="Supprimer">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>
                <a href="{{ route('contributeur.medias.download', $media) }}" 
                   class="btn btn-primary" title="Télécharger">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="card-content">
            <!-- Layout principal -->
            <div class="media-layout">
                <!-- Aperçu du média -->
                <div class="media-preview-container">
                    @php
                        $isImage = function($path) {
                            $extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'];
                            $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                            return in_array($extension, $extensions);
                        };
                        
                        $isVideo = function($path) {
                            $extensions = ['mp4', 'avi', 'mov', 'wmv', 'flv', 'webm'];
                            $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                            return in_array($extension, $extensions);
                        };
                        
                        $isAudio = function($path) {
                            $extensions = ['mp3', 'wav', 'ogg', 'aac', 'flac'];
                            $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                            return in_array($extension, $extensions);
                        };
                        
                        $getFileIcon = function($type) {
                            $icons = [
                                'Image' => 'image',
                                'Vidéo' => 'video',
                                'Audio' => 'music',
                                'Document' => 'file-alt',
                                'PDF' => 'file-pdf',
                            ];
                            return $icons[$type] ?? 'file';
                        };
                        
                        $getFileSize = function($path) {
                            try {
                                $size = Storage::disk('public')->size($path);
                                if ($size < 1024) {
                                    return $size . ' B';
                                } elseif ($size < 1048576) {
                                    return round($size / 1024, 1) . ' KB';
                                } else {
                                    return round($size / 1048576, 1) . ' MB';
                                }
                            } catch (Exception $e) {
                                return 'Taille inconnue';
                            }
                        };
                        
                        $getFileExtension = function($path) {
                            return strtoupper(pathinfo($path, PATHINFO_EXTENSION));
                        };
                        
                        $mediaType = $media->typeMedia->nom ?? 'Document';
                        $img = $isImage($media->chemin);
                        $video = $isVideo($media->chemin);
                        $audio = $isAudio($media->chemin);
                    @endphp
                    
                    <div class="media-preview">
                        @if($img)
                            <img src="{{ asset('storage/' . $media->chemin) }}" 
                                 class="media-image" 
                                 alt="{{ $media->description }}"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
                        @elseif($video)
                            <video controls class="media-video">
                                <source src="{{ asset('storage/' . $media->chemin) }}" 
                                        type="video/mp4">
                                Votre navigateur ne supporte pas la lecture vidéo.
                            </video>
                        @elseif($audio)
                            <div class="media-audio-container">
                                <div class="text-center mb-3">
                                    <i class="fas fa-music media-icon-large"></i>
                                    <h4>Fichier audio</h4>
                                </div>
                                <audio controls class="media-audio">
                                    <source src="{{ asset('storage/' . $media->chemin) }}" 
                                            type="audio/mpeg">
                                    Votre navigateur ne supporte pas la lecture audio.
                                </audio>
                            </div>
                        @else
                            <div class="text-center">
                                <i class="fas fa-file-{{ $getFileIcon($mediaType) }} media-icon-large"></i>
                                <h4>{{ $mediaType }}</h4>
                                <p class="text-muted mt-2">{{ basename($media->chemin) }}</p>
                            </div>
                        @endif
                    </div>
                    
                    <div class="media-file-info">
                        <div class="file-info-row">
                            <span class="file-info-label">Taille du fichier</span>
                            <span class="file-info-value">{{ $getFileSize($media->chemin) }}</span>
                        </div>
                        <div class="file-info-row">
                            <span class="file-info-label">Format</span>
                            <span class="file-info-value">{{ $getFileExtension($media->chemin) }}</span>
                        </div>
                        <div class="file-info-row">
                            <span class="file-info-label">Type</span>
                            <span class="file-info-value">{{ $mediaType }}</span>
                        </div>
                    </div>
                </div>

                <!-- Informations du média -->
                <div class="media-info-container">
                    <!-- Description -->
                    <div class="description-card">
                        <h3><i class="fas fa-align-left"></i> Description</h3>
                        <div class="description-text">
                            {{ $media->description }}
                        </div>
                    </div>

                    <!-- Informations détaillées -->
                    <div class="info-card">
                        <div class="info-card-header">
                            <h3><i class="fas fa-info-circle"></i> Informations détaillées</h3>
                        </div>
                        <div class="info-card-body">
                            <ul class="info-list">
                                <li class="info-item">
                                    <span class="info-label">
                                        <i class="fas fa-tag"></i> Type de média
                                    </span>
                                    <span class="info-value">{{ $mediaType }}</span>
                                </li>
                                
                                <li class="info-item">
                                    <span class="info-label">
                                        <i class="fas fa-file-alt"></i> Contenu associé
                                    </span>
                                    <span class="info-value">
                                        <a href="{{ route('contributeur.contenus.show', $media->contenu) }}" 
                                           class="info-link">
                                            {{ $media->contenu->titre ?? 'Contenu non disponible' }}
                                        </a>
                                    </span>
                                </li>
                                
                                <li class="info-item">
                                    <span class="info-label">
                                        <i class="fas fa-eye"></i> Statut du contenu
                                    </span>
                                    <span class="info-value">
                                        @if($media->contenu->statut ?? false)
                                            <span class="badge {{ $media->contenu->statut === 'publié' ? 'badge-success' : 'badge-warning' }}">
                                                <i class="fas fa-{{ $media->contenu->statut === 'publié' ? 'globe' : 'save' }}"></i>
                                                {{ $media->contenu->statut }}
                                            </span>
                                        @else
                                            <span class="badge badge-warning">Inconnu</span>
                                        @endif
                                    </span>
                                </li>
                                
                                <li class="info-item">
                                    <span class="info-label">
                                        <i class="fas fa-calendar-plus"></i> Date d'ajout
                                    </span>
                                    <span class="info-value">
                                        @if($media->created_at)
                                            {{ $media->created_at->format('d/m/Y H:i') }}
                                        @else
                                            Date inconnue
                                        @endif
                                    </span>
                                </li>
                                
                                <li class="info-item">
                                    <span class="info-label">
                                        <i class="fas fa-calendar-check"></i> Dernière modification
                                    </span>
                                    <span class="info-value">
                                        @if($media->updated_at)
                                            {{ $media->updated_at->format('d/m/Y H:i') }}
                                        @else
                                            Date inconnue
                                        @endif
                                    </span>
                                </li>
                                
                                <li class="info-item">
                                    <span class="info-label">
                                        <i class="fas fa-folder"></i> Chemin du fichier
                                    </span>
                                    <span class="info-value">
                                        <small class="text-muted">{{ $media->chemin }}</small>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions rapides -->
            <div class="quick-actions">
                <a href="{{ route('contributeur.medias.par-contenu', $media->contenu) }}" 
                   class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="action-content">
                        <h4>Tous les médias de ce contenu</h4>
                        <p>Voir tous les médias associés à ce contenu</p>
                    </div>
                </a>
                
                <a href="{{ route('contributeur.contenus.show', $media->contenu) }}" 
                   class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                    <div class="action-content">
                        <h4>Voir le contenu associé</h4>
                        <p>Accéder au contenu principal</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="card-footer">
            <div class="footer-actions">
                <a href="{{ route('contributeur.medias.index') }}" class="btn btn-outline">
                    <i class="fas fa-arrow-left"></i> Retour à mes médias
                </a>
            </div>
            
            <div class="btn-group">
                <a href="{{ route('contributeur.medias.edit', $media) }}" 
                   class="btn btn-warning">
                    <i class="fas fa-edit"></i> Modifier
                </a>
                <form action="{{ route('contributeur.medias.destroy', $media) }}" 
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                            onclick="return confirmDelete()">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>
                <a href="{{ route('contributeur.medias.download', $media) }}" 
                   class="btn btn-primary">
                    <i class="fas fa-download"></i> Télécharger
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Confirmation de suppression améliorée
            window.confirmDelete = function() {
                return confirm('Êtes-vous sûr de vouloir supprimer définitivement ce média ? Cette action est irréversible et supprimera le fichier du serveur.');
            };
            
            // Ajustement de la taille des vidéos
            const videos = document.querySelectorAll('video');
            videos.forEach(video => {
                video.addEventListener('loadedmetadata', function() {
                    const container = this.closest('.media-preview');
                    if (container && this.videoHeight > 0) {
                        const aspectRatio = this.videoWidth / this.videoHeight;
                        if (aspectRatio > 1.5) {
                            container.style.maxHeight = '500px';
                        }
                    }
                });
            });
            
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
            
            // Observer les cartes d'action
            document.querySelectorAll('.action-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                observer.observe(card);
            });
            
            // Initialisation des animations
            setTimeout(() => {
                document.querySelectorAll('.fade-in-up').forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }, 100);
            
            // Gestion des erreurs de chargement d'images
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', function() {
                    this.src = 'https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80';
                    this.alt = 'Image non disponible - Illustration patrimoine culturel';
                });
            });
        });
    </script>
        @include('components.footer-styles')
        @include('components.footer-contributor')
</body>
</html>