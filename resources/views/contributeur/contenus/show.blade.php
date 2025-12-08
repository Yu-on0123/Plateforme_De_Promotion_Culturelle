<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $contenu->titre }} - BéninCulture</title>
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
        
        /* ===== LAYOUT PRINCIPAL ===== */
        .content-detail-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: var(--space-xl);
        }
        
        /* ===== CONTENU PRINCIPAL ===== */
        .content-main {
            display: flex;
            flex-direction: column;
            gap: var(--space-xl);
        }
        
        .content-card {
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
        }
        
        .content-header {
            padding: var(--space-xl);
            border-bottom: 1px solid var(--earth-200);
            background: linear-gradient(135deg, var(--primary-cream), white);
        }
        
        .content-title-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: var(--space-md);
            margin-bottom: var(--space-md);
        }
        
        .content-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--earth-800);
            font-weight: 700;
            line-height: 1.3;
            flex: 1;
            min-width: 300px;
        }
        
        .content-actions {
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
        
        .content-tags {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-xs);
            margin-bottom: var(--space-md);
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
        
        .content-meta {
            display: flex;
            align-items: center;
            gap: var(--space-md);
            color: var(--earth-600);
            font-size: 0.95rem;
            flex-wrap: wrap;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .content-body {
            padding: var(--space-xl);
        }
        
        .content-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--earth-700);
            white-space: pre-line;
        }
        
        /* ===== MÉDIAS ASSOCIÉS ===== */
        .medias-section {
            padding: var(--space-xl);
            border-top: 1px solid var(--earth-200);
        }
        
        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: var(--space-lg);
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .section-count {
            background: var(--earth-100);
            color: var(--earth-700);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .medias-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: var(--space-md);
        }
        
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
            height: 180px;
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
            font-size: 2.5rem;
        }
        
        .media-content {
            padding: var(--space-md);
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .media-description {
            font-size: 0.95rem;
            color: var(--earth-700);
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: var(--space-xs);
        }
        
        .media-type {
            font-size: 0.85rem;
            color: var(--earth-600);
            margin-top: auto;
            padding-top: var(--space-xs);
            border-top: 1px solid var(--earth-200);
        }
        
        /* ===== COMMENTAIRES ===== */
        .comments-section {
            padding: var(--space-xl);
            border-top: 1px solid var(--earth-200);
        }
        
        .comments-list {
            display: flex;
            flex-direction: column;
            gap: var(--space-lg);
        }
        
        .comment-card {
            background: var(--earth-50);
            border-radius: var(--radius-lg);
            padding: var(--space-md);
            border: 1px solid var(--earth-200);
        }
        
        .comment-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--space-sm);
        }
        
        .comment-author {
            font-weight: 600;
            color: var(--earth-800);
            display: flex;
            align-items: center;
            gap: var(--space-xs);
        }
        
        .comment-date {
            color: var(--earth-600);
            font-size: 0.85rem;
        }
        
        .comment-rating {
            color: var(--gold-500);
            font-size: 0.9rem;
            margin-left: var(--space-xs);
        }
        
        .comment-text {
            color: var(--earth-700);
            line-height: 1.6;
        }
        
        /* ===== SIDEBAR ===== */
        .sidebar {
            position: sticky;
            top: var(--space-md);
            align-self: flex-start;
        }
        
        .info-card {
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
            margin-bottom: var(--space-lg);
        }
        
        .info-card-header {
            background: var(--earth-100);
            padding: var(--space-lg);
            border-bottom: 1px solid var(--earth-200);
        }
        
        .info-card-header h3 {
            font-size: 1.5rem;
            color: var(--earth-800);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
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
        
        .info-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: white;
        }
        
        .badge-success {
            background: var(--gradient-success);
        }
        
        .badge-warning {
            background: var(--gradient-warning);
        }
        
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: var(--space-sm);
            margin-top: var(--space-lg);
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
        
        .btn-full {
            width: 100%;
            justify-content: center;
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
        @media (max-width: 1200px) {
            .content-detail-container {
                grid-template-columns: 1fr;
                gap: var(--space-lg);
            }
            
            .sidebar {
                position: static;
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
            
            .content-header {
                padding: var(--space-lg);
            }
            
            .content-title {
                font-size: 2rem;
                min-width: auto;
            }
            
            .content-title-section {
                flex-direction: column;
                align-items: stretch;
                gap: var(--space-sm);
            }
            
            .content-actions {
                justify-content: center;
            }
            
            .content-body {
                padding: var(--space-lg);
            }
            
            .medias-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
            
            .info-card-header,
            .info-card-body {
                padding: var(--space-md);
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }
        
        @media (max-width: 480px) {
            .brand-text h1 {
                font-size: 1.5rem;
            }
            
            .content-title {
                font-size: 1.75rem;
            }
            
            .content-tags {
                justify-content: center;
            }
            
            .content-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--space-xs);
            }
            
            .medias-grid {
                grid-template-columns: 1fr;
            }
            
            .comment-header {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--space-xs);
            }
            
            .comment-date {
                align-self: flex-start;
            }
            
            .info-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.25rem;
            }
            
            .info-value {
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <!-- En-tête de page -->
    <div class="page-header fade-in-up">
        <div class="brand-section">
            <div class="brand-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="brand-text">
                <h1>Détail du contenu</h1>
                <p class="subtitle">Explorez votre contribution au patrimoine culturel</p>
            </div>
        </div>
        <a href="{{ route('contributeur.contenus.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Retour aux contenus
        </a>
    </div>

    <!-- Layout principal -->
    <div class="content-detail-container">
        <!-- Contenu principal -->
        <div class="content-main">
            <!-- Carte du contenu -->
            <div class="content-card fade-in-up">
                <!-- En-tête -->
                <div class="content-header">
                    <div class="content-title-section">
                        <h1 class="content-title">{{ $contenu->titre }}</h1>
                        <div class="content-actions">
                            <a href="{{ route('contributeur.contenus.edit', $contenu) }}" 
                               class="btn btn-warning" title="Modifier">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <form action="{{ route('contributeur.contenus.destroy', $contenu) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirmDelete()" title="Supprimer">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="content-tags">
                        <span class="tag tag-type">{{ $contenu->type->nom ?? 'Type non spécifié' }}</span>
                        <span class="tag tag-region">{{ $contenu->region->nom ?? 'Région non spécifiée' }}</span>
                        <span class="tag tag-langue">{{ $contenu->langue->nom ?? 'Langue non spécifiée' }}</span>
                        <span class="tag {{ $contenu->statut === 'publié' ? 'tag-statut' : 'tag-statut-draft' }}">
                            {{ $contenu->statut }}
                        </span>
                    </div>
                    
                    <div class="content-meta">
                        @if($contenu->date_creation)
                            <div class="meta-item">
                                <i class="fas fa-calendar-plus"></i>
                                <span>
                                    Créé le {{ \Carbon\Carbon::parse($contenu->date_creation)->format('d/m/Y à H:i') }}
                                </span>
                            </div>
                        @elseif($contenu->created_at)
                            <div class="meta-item">
                                <i class="fas fa-calendar-plus"></i>
                                <span>
                                    Créé le {{ $contenu->created_at?->format('d/m/Y à H:i') }}
                                </span>
                            </div>
                        @endif
                    
                        <div class="meta-item">
                            <i class="fas fa-user"></i>
                            <span>Par {{ $contenu->auteur->name ?? 'Vous' }}</span>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Corps du contenu -->
                <div class="content-body">
                    <div class="content-text">
                        {{ $contenu->texte }}
                    </div>
                </div>
                
                <!-- Médias associés -->
                @if($contenu->medias->count() > 0)
                    <div class="medias-section">
                        <div class="section-header">
                            <h2 class="section-title">
                                <i class="fas fa-images"></i> Médias associés
                                <span class="section-count">{{ $contenu->medias->count() }}</span>
                            </h2>
                        </div>
                        
                        <div class="medias-grid">
                            @foreach($contenu->medias as $media)
                                @php
                                    $isImage = function($path) {
                                        $extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'];
                                        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                                        return in_array($extension, $extensions);
                                    };
                                @endphp
                                
                                <div class="media-card">
                                    <div class="media-preview">
                                        @if($isImage($media->chemin))
                                            <img src="{{ asset('storage/' . $media->chemin) }}" 
                                                 class="media-image" 
                                                 alt="{{ $media->description }}"
                                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
                                        @else
                                            <div class="media-icon">
                                                <i class="fas fa-file-alt"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="media-content">
                                        <p class="media-description">{{ $media->description }}</p>
                                        <div class="media-type">
                                            {{ $media->typeMedia->nom ?? 'Fichier' }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                <!-- Commentaires -->
                @if($contenu->commentaires->count() > 0)
                    <div class="comments-section">
                        <div class="section-header">
                            <h2 class="section-title">
                                <i class="fas fa-comments"></i> Commentaires
                                <span class="section-count">{{ $contenu->commentaires->count() }}</span>
                            </h2>
                        </div>
                        
                        <div class="comments-list">
                            @foreach($contenu->commentaires as $commentaire)
                                <div class="comment-card">
                                    <div class="comment-header">
                                        <div>
                                            <span class="comment-author">
                                                <i class="fas fa-user-circle"></i>
                                                {{ $commentaire->utilisateur->name ?? 'Utilisateur' }}
                                            </span>
                                            @if($commentaire->note)
                                                <span class="comment-rating">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <i class="fas fa-star{{ $i <= $commentaire->note ? '' : '-o' }}"></i>
                                                    @endfor
                                                </span>
                                            @endif
                                        </div>
                                        @if($commentaire->date)
                                            <span class="comment-date">
                                                <i class="far fa-clock"></i>
                                                {{ $commentaire->date->format('d/m/Y H:i') }}
                                            </span>
                                        @elseif($commentaire->created_at)
                                            <span class="comment-date">
                                                <i class="far fa-clock"></i>
                                                {{ $commentaire->created_at->format('d/m/Y H:i') }}
                                            </span>
                                        @endif
                                    </div>
                                    <p class="comment-text">{{ $commentaire->texte }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar fade-in-up">
            <!-- Carte d'information -->
            <div class="info-card">
                <div class="info-card-header">
                    <h3><i class="fas fa-info-circle"></i> Informations</h3>
                </div>
                <div class="info-card-body">
                    <ul class="info-list">
                        <li class="info-item">
                            <span class="info-label">
                                <i class="fas fa-eye"></i> Statut
                            </span>
                            <span class="info-value">
                                <span class="info-badge {{ $contenu->statut === 'publié' ? 'badge-success' : 'badge-warning' }}">
                                    {{ $contenu->statut }}
                                </span>
                            </span>
                        </li>
                        
                        <li class="info-item">
                            <span class="info-label">
                                <i class="fas fa-tag"></i> Type
                            </span>
                            <span class="info-value">{{ $contenu->type->nom ?? 'Non spécifié' }}</span>
                        </li>
                        
                        <li class="info-item">
                            <span class="info-label">
                                <i class="fas fa-map-marker-alt"></i> Région
                            </span>
                            <span class="info-value">{{ $contenu->region->nom ?? 'Non spécifiée' }}</span>
                        </li>
                        
                        <li class="info-item">
                            <span class="info-label">
                                <i class="fas fa-language"></i> Langue
                            </span>
                            <span class="info-value">{{ $contenu->langue->nom ?? 'Non spécifiée' }}</span>
                        </li>
                        
                        <li class="info-item">
                            <span class="info-label">
                                <i class="fas fa-calendar-plus"></i> Date création
                            </span>
                            <span class="info-value">
                                @if($contenu->date_creation)
                                    {{ \Carbon\Carbon::parse($contenu->date_creation)->format('d/m/Y') }}
                                @elseif($contenu->created_at)
                                    {{ $contenu->created_at?->format('d/m/Y') }}
                                @else
                                    Date inconnue
                                @endif
                            </span>                            
                        </li>
                        
                        <li class="info-item">
                            <span class="info-label">
                                <i class="fas fa-images"></i> Médias
                            </span>
                            <span class="info-value">{{ $contenu->medias->count() }}</span>
                        </li>
                        
                        <li class="info-item">
                            <span class="info-label">
                                <i class="fas fa-comments"></i> Commentaires
                            </span>
                            <span class="info-value">{{ $contenu->commentaires->count() }}</span>
                        </li>
                    </ul>
                    
                    <div class="action-buttons">
                        <a href="{{ route('contributeur.contenus.index') }}" 
                           class="btn btn-outline btn-full">
                            <i class="fas fa-list"></i> Retour à la liste
                        </a>
                        <a href="{{ route('contributeur.contenus.edit', $contenu) }}" 
                           class="btn btn-primary btn-full">
                            <i class="fas fa-edit"></i> Modifier ce contenu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Confirmation de suppression
            window.confirmDelete = function() {
                return confirm('Êtes-vous sûr de vouloir supprimer définitivement ce contenu ? Cette action est irréversible et supprimera également tous les médias et commentaires associés.');
            };
            
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
            
            // Observer les commentaires
            document.querySelectorAll('.comment-card').forEach(card => {
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
            
            // Amélioration de l'expérience de lecture
            const contentText = document.querySelector('.content-text');
            if (contentText) {
                const text = contentText.textContent;
                const wordCount = text.split(/\s+/).length;
                const readingTime = Math.ceil(wordCount / 200); // 200 mots/minute
                
                if (readingTime > 1) {
                    const readingTimeElement = document.createElement('div');
                    readingTimeElement.className = 'reading-time meta-item';
                    readingTimeElement.innerHTML = `
                        <i class="fas fa-clock"></i>
                        <span>Temps de lecture : ${readingTime} min</span>
                    `;
                    
                    const metaContainer = document.querySelector('.content-meta');
                    if (metaContainer) {
                        metaContainer.appendChild(readingTimeElement);
                    }
                }
            }
        });
    </script>
        @include('components.footer-styles')
        @include('components.footer-contributor')
</body>
</html>