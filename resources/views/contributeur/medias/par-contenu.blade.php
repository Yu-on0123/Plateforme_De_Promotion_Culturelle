<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias de : {{ $contenu->titre }} - BéninCulture</title>
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
            max-width: 1400px;
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
            font-size: 1.25rem;
            color: var(--primary-red);
            font-weight: 600;
        }
        
        .header-actions {
            display: flex;
            gap: var(--space-sm);
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
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
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
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
        
        .btn-info {
            background: var(--earth-500);
            color: white;
        }
        
        .btn-info:hover {
            background: var(--earth-600);
        }
        
        /* ===== ALERTE ===== */
        .alert {
            max-width: 1400px;
            margin: 0 auto var(--space-lg);
            padding: var(--space-md);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            gap: var(--space-sm);
            animation: fadeInUp 0.5s ease;
        }
        
        .alert-success {
            background: var(--gradient-success);
            color: white;
            border: none;
            box-shadow: var(--shadow-md);
        }
        
        .alert-info {
            background: var(--earth-100);
            color: var(--earth-800);
            border: 1px solid var(--earth-300);
        }
        
        .alert-close {
            background: transparent;
            border: none;
            color: inherit;
            cursor: pointer;
            margin-left: auto;
            padding: 0.5rem;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
            opacity: 0.8;
        }
        
        .alert-close:hover {
            opacity: 1;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .alert-link {
            color: var(--primary-red);
            font-weight: 600;
            text-decoration: none;
        }
        
        .alert-link:hover {
            text-decoration: underline;
        }
        
        /* ===== CARTE DU CONTENU ===== */
        .content-card {
            max-width: 1400px;
            margin: 0 auto var(--space-xl);
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .content-card-body {
            padding: var(--space-xl);
        }
        
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: var(--space-md);
            margin-bottom: var(--space-lg);
        }
        
        .content-title-section {
            flex: 1;
            min-width: 300px;
        }
        
        .content-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            color: var(--earth-800);
            font-weight: 600;
            margin-bottom: var(--space-sm);
            line-height: 1.3;
        }
        
        .content-excerpt {
            color: var(--earth-600);
            line-height: 1.6;
            margin-bottom: var(--space-md);
        }
        
        .content-tags {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-xs);
        }
        
        .tag {
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: white;
        }
        
        .tag-type {
            background: var(--primary-red);
        }
        
        .tag-region {
            background: var(--earth-600);
        }
        
        .tag-langue {
            background: var(--earth-500);
        }
        
        .tag-statut {
            background: var(--gradient-success);
        }
        
        .tag-statut-draft {
            background: var(--gradient-warning);
        }
        
        .content-stats {
            display: flex;
            gap: var(--space-md);
            flex-wrap: wrap;
        }
        
        .stat-item {
            text-align: center;
            padding: var(--space-sm);
            min-width: 100px;
        }
        
        .stat-number {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary-red);
            margin-bottom: 0.25rem;
        }
        
        .stat-label {
            color: var(--earth-600);
            font-size: 0.875rem;
        }
        
        /* ===== GRILLE DES MÉDIAS ===== */
        .medias-section {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            margin-bottom: var(--space-lg);
            padding-bottom: var(--space-sm);
            border-bottom: 2px solid var(--earth-200);
            display: flex;
            align-items: center;
            gap: var(--space-sm);
        }
        
        .medias-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--space-lg);
            margin-bottom: var(--space-xl);
        }
        
        /* ===== CARTE DE MÉDIA ===== */
        .media-card {
            background: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid var(--earth-200);
            display: flex;
            flex-direction: column;
            height: 100%;
            box-shadow: var(--shadow-sm);
        }
        
        .media-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-gold);
        }
        
        .media-preview {
            height: 200px;
            position: relative;
            overflow: hidden;
            background: var(--earth-100);
        }
        
        .media-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .media-card:hover .media-image {
            transform: scale(1.05);
        }
        
        .media-icon {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--earth-400);
            font-size: 3rem;
        }
        
        .media-badge {
            position: absolute;
            top: var(--space-sm);
            right: var(--space-sm);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 2;
        }
        
        .media-content {
            padding: var(--space-md);
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .media-title {
            font-size: 1.1rem;
            color: var(--earth-800);
            font-weight: 600;
            margin-bottom: var(--space-xs);
            line-height: 1.3;
        }
        
        .media-description {
            color: var(--earth-600);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: var(--space-sm);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex: 1;
        }
        
        .media-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: var(--space-sm);
            border-top: 1px solid var(--earth-200);
            font-size: 0.85rem;
            color: var(--earth-600);
        }
        
        .media-size {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .media-date {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .media-actions {
            display: flex;
            gap: var(--space-xs);
            padding: var(--space-md);
            background: var(--earth-50);
            border-top: 1px solid var(--earth-200);
        }
        
        .action-btn {
            flex: 1;
            min-width: 60px;
            padding: 0.5rem;
            border-radius: var(--radius-sm);
            background: white;
            border: 1px solid var(--earth-300);
            color: var(--earth-700);
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.25rem;
            font-size: 0.85rem;
            text-decoration: none;
            text-align: center;
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
        
        .action-view {
            color: var(--earth-600);
            border-color: var(--earth-300);
        }
        
        .action-view:hover {
            background: var(--earth-100);
            color: var(--earth-800);
        }
        
        .action-edit {
            color: var(--gold-700);
            border-color: var(--gold-300);
        }
        
        .action-edit:hover {
            background: var(--gold-50);
            color: var(--gold-800);
            border-color: var(--gold-400);
        }
        
        .action-delete {
            color: var(--red-600);
            border-color: var(--red-300);
        }
        
        .action-delete:hover {
            background: var(--red-50);
            color: var(--red-700);
            border-color: var(--red-400);
        }
        
        .action-download {
            color: var(--primary-red);
            border-color: var(--red-200);
        }
        
        .action-download:hover {
            background: var(--red-50);
            color: var(--red-700);
            border-color: var(--red-400);
        }
        
        /* ===== ÉTAT VIDE ===== */
        .empty-state {
            max-width: 1400px;
            margin: var(--space-xl) auto;
            padding: var(--space-xl);
            background: white;
            border-radius: var(--radius-xl);
            text-align: center;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
        }
        
        .empty-icon {
            font-size: 3rem;
            color: var(--earth-400);
            margin-bottom: var(--space-md);
        }
        
        .empty-state h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            margin-bottom: var(--space-sm);
        }
        
        .empty-state p {
            color: var(--earth-600);
            margin-bottom: var(--space-lg);
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
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
            
            .header-actions {
                width: 100%;
                justify-content: flex-start;
            }
            
            .content-card-body {
                padding: var(--space-lg);
            }
            
            .content-header {
                flex-direction: column;
                gap: var(--space-md);
            }
            
            .content-stats {
                width: 100%;
                justify-content: space-around;
            }
            
            .medias-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: var(--space-md);
            }
            
            .media-actions {
                flex-wrap: wrap;
            }
            
            .action-btn {
                min-width: 70px;
            }
            
            .empty-state {
                padding: var(--space-lg);
                margin: var(--space-lg) auto;
            }
        }
        
        @media (max-width: 480px) {
            .brand-text h1 {
                font-size: 1.5rem;
            }
            
            .brand-text .subtitle {
                font-size: 1.1rem;
            }
            
            .content-card-body {
                padding: var(--space-md);
            }
            
            .content-title {
                font-size: 1.5rem;
            }
            
            .content-tags {
                justify-content: center;
            }
            
            .stat-item {
                min-width: 80px;
                padding: var(--space-xs);
            }
            
            .stat-number {
                font-size: 1.5rem;
            }
            
            .medias-grid {
                grid-template-columns: 1fr;
            }
            
            .media-actions {
                flex-direction: column;
            }
            
            .action-btn {
                width: 100%;
            }
            
            .empty-state {
                padding: var(--space-md);
            }
            
            .empty-icon {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- En-tête de page -->
    <div class="page-header fade-in-up">
        <div class="brand-section">
            <div class="brand-icon">
                <i class="fas fa-images"></i>
            </div>
            <div class="brand-text">
                <h1>Médias du contenu</h1>
                <p class="subtitle">{{ $contenu->titre }}</p>
            </div>
        </div>
        <div class="header-actions">
            <a href="{{ route('contributeur.contenus.show', $contenu) }}" 
               class="btn btn-outline">
                <i class="fas fa-arrow-left"></i> Retour au contenu
            </a>
            <a href="{{ route('contributeur.medias.create', ['contenu_id' => $contenu->id]) }}" 
               class="btn btn-primary">
                <i class="fas fa-plus"></i> Ajouter un média
            </a>
        </div>
    </div>

    <!-- Message de succès -->
    @if(session('success'))
        <div class="alert alert-success fade-in-up">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
            <button class="alert-close" onclick="this.parentElement.style.display='none'">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif

    <!-- Carte du contenu -->
    <div class="content-card fade-in-up">
        <div class="content-card-body">
            <div class="content-header">
                <div class="content-title-section">
                    <h2 class="content-title">{{ $contenu->titre }}</h2>
                    <p class="content-excerpt">{{ Str::limit($contenu->texte, 200) }}</p>
                    <div class="content-tags">
                        <span class="tag tag-type">{{ $contenu->type->nom ?? 'Type non spécifié' }}</span>
                        <span class="tag tag-region">{{ $contenu->region->nom ?? 'Région non spécifiée' }}</span>
                        <span class="tag tag-langue">{{ $contenu->langue->nom ?? 'Langue non spécifiée' }}</span>
                        <span class="tag {{ $contenu->statut === 'publié' ? 'tag-statut' : 'tag-statut-draft' }}">
                            {{ $contenu->statut }}
                        </span>
                    </div>
                </div>
                
                <div class="content-stats">
                    <div class="stat-item">
                        <div class="stat-number">{{ $medias->count() }}</div>
                        <div class="stat-label">Médias</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">
                            @if($contenu->date_creation)
                                {{ $contenu->date_creation->format('d/m/Y') }}
                            @elseif($contenu->created_at)
                                {{ $contenu->created_at->format('d/m/Y') }}
                            @else
                                -
                            @endif
                        </div>
                        <div class="stat-label">Créé le</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section des médias -->
    <div class="medias-section fade-in-up">
        <h2 class="section-title">
            <i class="fas fa-images"></i> Médias associés
            <span style="font-size: 1rem; color: var(--earth-600);">
                ({{ $medias->count() }})
            </span>
        </h2>
        
        @if($medias->isEmpty())
            <!-- État vide -->
            <div class="empty-state">
                <i class="fas fa-images empty-icon"></i>
                <h3>Ce contenu n'a pas encore de médias</h3>
                <p>
                    Enrichissez votre contenu en y ajoutant des images, vidéos ou documents.
                    Les médias permettent de rendre votre contenu plus vivant et attractif.
                </p>
                <a href="{{ route('contributeur.medias.create', ['contenu_id' => $contenu->id]) }}" 
                   class="btn btn-primary">
                    <i class="fas fa-plus"></i> Ajouter le premier média
                </a>
            </div>
        @else
            <!-- Grille des médias -->
            <div class="medias-grid">
                @foreach($medias as $media)
                    @php
                        $isImage = function($path) {
                            $extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'];
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
                        
                        $mediaType = $media->typeMedia->nom ?? 'Document';
                        $isImg = $isImage($media->chemin);
                    @endphp
                    
                    <div class="media-card">
                        <div class="media-preview">
                            @if($isImg)
                                <img src="{{ asset('storage/' . $media->chemin) }}" 
                                     class="media-image" 
                                     alt="{{ $media->description }}"
                                     onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
                            @else
                                <div class="media-icon">
                                    <i class="fas fa-file-{{ $getFileIcon($mediaType) }}"></i>
                                </div>
                            @endif
                            <span class="media-badge">{{ $mediaType }}</span>
                        </div>
                        
                        <div class="media-content">
                            <h3 class="media-title">{{ Str::limit($media->description, 50) }}</h3>
                            <p class="media-description">{{ $media->description }}</p>
                            
                            <div class="media-meta">
                                <div class="media-size">
                                    <i class="fas fa-weight-hanging"></i>
                                    <span>{{ $getFileSize($media->chemin) }}</span>
                                </div>
                                @if($media->created_at)
                                    <div class="media-date">
                                        <i class="far fa-calendar"></i>
                                        <span>{{ $media->created_at->format('d/m/Y') }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="media-actions">
                            <a href="{{ route('contributeur.medias.show', $media) }}" 
                               class="action-btn action-view">
                                <i class="fas fa-eye"></i> Voir
                            </a>
                            <a href="{{ route('contributeur.medias.edit', $media) }}" 
                               class="action-btn action-edit">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <form action="{{ route('contributeur.medias.destroy', $media) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="action-btn action-delete"
                                        onclick="return confirmDelete()">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>
                            </form>
                            <a href="{{ route('contributeur.medias.download', $media) }}" 
                               class="action-btn action-download">
                                <i class="fas fa-download"></i> Télécharger
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Confirmation de suppression
            window.confirmDelete = function() {
                return confirm('Êtes-vous sûr de vouloir supprimer ce média ? Cette action est irréversible.');
            };
            
            // Auto-dissipation des alertes après 5 secondes
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.opacity = '0';
                    alert.style.transform = 'translateY(-10px)';
                    setTimeout(() => alert.remove(), 300);
                }, 5000);
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
            
            // Observer les cartes de média
            document.querySelectorAll('.media-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                observer.observe(card);
            });
            
            // Gestion des erreurs de chargement d'images
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', function() {
                    this.src = 'https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80';
                    this.alt = 'Image non disponible - Illustration patrimoine culturel';
                });
            });
            
            // Initialisation des animations
            setTimeout(() => {
                document.querySelectorAll('.fade-in-up').forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }, 100);
            
            // Statistiques interactives
            const statItems = document.querySelectorAll('.stat-item');
            statItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    item.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 100 + (index * 100));
            });
            
            // Animation au survol des cartes de média
            document.querySelectorAll('.media-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.zIndex = '10';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.zIndex = '1';
                });
            });
        });
    </script>
        @include('components.footer-styles')
        @include('components.footer-contributor')
</body>
</html>