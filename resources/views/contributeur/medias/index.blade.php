<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes médias - BéninCulture</title>
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
            display: flex;
            align-items: center;
            gap: var(--space-sm);
        }
        
        .brand-text .subtitle {
            font-size: 1rem;
            color: var(--primary-red);
            font-weight: 500;
        }
        
        .total-badge {
            background: var(--gradient-primary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 1rem;
            font-weight: 600;
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
            border: none;
        }
        
        .alert-success {
            background: var(--gradient-success);
            color: white;
            box-shadow: var(--shadow-md);
        }
        
        .alert-info {
            background: var(--earth-100);
            color: var(--earth-800);
            border: 1px solid var(--earth-300);
        }
        
        .alert-warning {
            background: var(--gradient-warning);
            color: white;
            box-shadow: var(--shadow-md);
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
        
        /* ===== STATISTIQUES ===== */
        .stats-container {
            max-width: 1400px;
            margin: 0 auto var(--space-xl);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--space-md);
        }
        
        .stat-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            display: flex;
            align-items: center;
            gap: var(--space-md);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }
        
        .stat-icon {
            width: 56px;
            height: 56px;
            background: var(--gradient-subtle);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-red);
        }
        
        .stat-content h3 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--earth-800);
            margin-bottom: 0.25rem;
        }
        
        .stat-content p {
            color: var(--earth-600);
            font-size: 0.95rem;
        }
        
        /* ===== ACCORDÉON ===== */
        .accordion-container {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .accordion-item {
            background: white;
            border-radius: var(--radius-lg);
            margin-bottom: var(--space-sm);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
        }
        
        .accordion-header {
            padding: 0;
        }
        
        .accordion-button {
            width: 100%;
            padding: var(--space-lg);
            background: white;
            border: none;
            text-align: left;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--earth-800);
            transition: all 0.3s ease;
        }
        
        .accordion-button:hover {
            background: var(--earth-50);
        }
        
        .accordion-button:not(.collapsed) {
            background: var(--earth-100);
            border-bottom: 1px solid var(--earth-200);
        }
        
        .accordion-button::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            transition: transform 0.3s ease;
            color: var(--earth-600);
        }
        
        .accordion-button:not(.collapsed)::after {
            transform: rotate(180deg);
            color: var(--primary-red);
        }
        
        .content-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            gap: var(--space-sm);
        }
        
        .content-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--earth-800);
        }
        
        .media-count {
            background: var(--earth-100);
            color: var(--earth-700);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .content-badge {
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            color: white;
        }
        
        .badge-published {
            background: var(--gradient-success);
        }
        
        .badge-draft {
            background: var(--gradient-warning);
        }
        
        .accordion-body {
            padding: var(--space-lg);
            background: white;
        }
        
        /* ===== GRILLE DE MÉDIAS ===== */
        .medias-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--space-md);
            margin-bottom: var(--space-lg);
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
            height: 200px;
            position: relative;
            overflow: hidden;
            background: var(--earth-100);
            display: flex;
            align-items: center;
            justify-content: center;
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
            font-size: 3rem;
            color: var(--earth-400);
        }
        
        .media-type {
            position: absolute;
            bottom: var(--space-sm);
            right: var(--space-sm);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .media-content {
            padding: var(--space-md);
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .media-description {
            flex: 1;
            color: var(--earth-700);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: var(--space-sm);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
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
        
        .media-actions {
            display: flex;
            gap: var(--space-xs);
            flex-wrap: wrap;
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
        
        /* ===== LIENS DE CONTENU ===== */
        .content-links {
            display: flex;
            justify-content: flex-end;
            gap: var(--space-sm);
            flex-wrap: wrap;
            margin-top: var(--space-lg);
            padding-top: var(--space-lg);
            border-top: 1px solid var(--earth-200);
        }
        
        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            border-radius: var(--radius-sm);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--earth-700);
            border: 1px solid var(--earth-300);
        }
        
        .btn-outline:hover {
            background: var(--earth-50);
            border-color: var(--earth-400);
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
        
        /* ===== PAGINATION ===== */
        .pagination-container {
            max-width: 1400px;
            margin: var(--space-xl) auto;
            display: flex;
            justify-content: center;
        }
        
        .pagination {
            display: flex;
            gap: 0.5rem;
            list-style: none;
            background: white;
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
        }
        
        .page-item {
            margin: 0;
        }
        
        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: var(--radius-sm);
            background: white;
            color: var(--earth-700);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            border: 1px solid var(--earth-300);
        }
        
        .page-link:hover {
            background: var(--red-50);
            border-color: var(--primary-red);
            color: var(--primary-red);
        }
        
        .page-item.active .page-link {
            background: var(--gradient-primary);
            color: white;
            border-color: var(--primary-red);
        }
        
        .page-item.disabled .page-link {
            opacity: 0.3;
            cursor: not-allowed;
            background: var(--earth-100);
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
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .medias-grid {
                grid-template-columns: 1fr;
            }
            
            .content-header {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--space-xs);
            }
            
            .content-links {
                flex-direction: column;
                align-items: stretch;
            }
            
            .btn-sm {
                width: 100%;
                justify-content: center;
            }
            
            .empty-state {
                padding: var(--space-lg);
                margin: var(--space-lg) auto;
            }
            
            .pagination {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .brand-text h1 {
                font-size: 1.5rem;
            }
            
            .accordion-button {
                padding: var(--space-md);
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
                <h1>
                    Mes médias
                    <span class="total-badge">{{ $totalMedias }}</span>
                </h1>
                <p class="subtitle">Gérez vos médias associés aux contenus</p>
            </div>
        </div>
        <a href="{{ route('contributeur.medias.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Ajouter un média
        </a>
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

    <!-- Statistiques -->
    @php
        $imagesCount = 0;
        $videosCount = 0;
        $audioCount = 0;
        $documentsCount = 0;
        
        foreach($contenus as $contenu) {
            foreach($contenu->medias as $media) {
                $type = strtolower($media->typeMedia->nom ?? 'document');
                if (str_contains($type, 'image')) $imagesCount++;
                elseif (str_contains($type, 'vidéo') || str_contains($type, 'video')) $videosCount++;
                elseif (str_contains($type, 'audio')) $audioCount++;
                else $documentsCount++;

            }
        }
    @endphp
    
    <div class="stats-container fade-in-up">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-layer-group"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $totalMedias }}</h3>
                <p>Médias au total</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-image"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $imagesCount }}</h3>
                <p>Images</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-video"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $videosCount }}</h3>
                <p>Vidéos</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-file"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $documentsCount + $audioCount }}</h3>
                <p>Autres fichiers</p>
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    @if($contenus->isEmpty())
        <div class="empty-state fade-in-up">
            <i class="fas fa-images empty-icon"></i>
            <h3>Vous n'avez pas encore ajouté de média</h3>
            <p>
                Commencez par ajouter des médias (images, vidéos, audio) à vos contenus 
                pour enrichir votre contribution au patrimoine culturel.
            </p>
            <a href="{{ route('contributeur.contenus.index') }}" class="btn btn-primary">
                <i class="fas fa-book-open"></i> Voir vos contenus
            </a>
        </div>
    @else
        <div class="accordion-container fade-in-up">
            @foreach($contenus as $contenu)
                @php
                    $mediaCount = $contenu->medias->count();
                @endphp
                
                <div class="accordion-item" data-contenu-id="{{ $contenu->id }}">
                    <div class="accordion-header">
                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" 
                                type="button" 
                                data-bs-target="#collapse{{ $contenu->id }}" 
                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                            <div class="content-header">
                                <div>
                                    <span class="content-title">{{ $contenu->titre }}</span>
                                    @if($mediaCount > 0)
                                        <span class="media-count">{{ $mediaCount }} média{{ $mediaCount > 1 ? 's' : '' }}</span>
                                    @endif
                                </div>
                                <span class="content-badge {{ $contenu->statut === 'publié' ? 'badge-published' : 'badge-draft' }}">
                                    <i class="fas fa-{{ $contenu->statut === 'publié' ? 'globe' : 'save' }}"></i>
                                    {{ $contenu->statut }}
                                </span>
                            </div>
                        </button>
                    </div>
                    
                    <div id="collapse{{ $contenu->id }}" 
                         class="accordion-collapse {{ $loop->first ? 'show' : '' }}" 
                         aria-labelledby="heading{{ $contenu->id }}">
                        <div class="accordion-body">
                            @if($mediaCount === 0)
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle"></i>
                                    Ce contenu n'a pas encore de médias.
                                    <a href="{{ route('contributeur.medias.create', ['contenu_id' => $contenu->id]) }}" 
                                       class="alert-link">
                                        Ajouter un média
                                    </a>
                                </div>
                            @else
                                <div class="medias-grid">
                                    @foreach($contenu->medias as $media)
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
                                               if (!Storage::disk('public')->exists($path)) return 'Fichier manquant';
                                               $size = Storage::disk('public')->size($path);
                                               if ($size < 1024) return $size . ' B';
                                               elseif ($size < 1048576) return round($size / 1024, 1) . ' KB';
                                               else return round($size / 1048576, 1) . ' MB';
                                               } catch (Exception $e) {
                                               return 'Taille inconnue';
                                               }
                                             };

                                            
                                            $mediaType = $media->typeMedia->nom ?? 'Document';
                                            $isImg = $isImage($media->chemin);
                                        @endphp
                                    
                                        <div class="media-card">
                                            <div class="media-preview">
                                                @if(str_contains(strtolower($mediaType), 'image'))
                                                <img src="{{ asset('storage/' . ltrim($media->chemin, '/')) }}" 
                                                class="media-image" 
                                                alt="{{ $media->description }}"
                                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">                                           
                                                @elseif(str_contains(strtolower($mediaType), 'vidéo') || str_contains(strtolower($mediaType), 'video'))
                                                    <video class="media-video" controls>
                                                        <source src="{{ asset('storage/' . $media->chemin) }}" type="video/mp4">
                                                        Votre navigateur ne supporte pas la lecture vidéo.
                                                    </video>
                                                @elseif(str_contains(strtolower($mediaType), 'audio'))
                                                    <audio class="media-audio" controls>
                                                        <source src="{{ asset('storage/' . $media->chemin) }}" type="audio/mpeg">
                                                        Votre navigateur ne supporte pas la lecture audio.
                                                    </audio>
                                                @else
                                                    <i class="fas fa-file-{{ $getFileIcon($mediaType) }} media-icon"></i>
                                                @endif
                                                <span class="media-type">{{ $mediaType }}</span>
                                            </div>                                            
                                            
                                            <div class="media-content">
                                                <p class="media-description">{{ $media->description }}</p>
                                                
                                                <div class="media-meta">
                                                    <div class="media-size">
                                                        <i class="fas fa-weight-hanging"></i>
                                                        <span>{{ $getFileSize($media->chemin) }}</span>
                                                    </div>
                                                    @if($media->created_at)
                                                    <div>
                                                        <i class="far fa-calendar"></i>
                                                        {{ $media->created_at?->format('d/m/Y') ?? 'Date inconnue' }}
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
                            
                            <div class="content-links">
                                @if($mediaCount > 0)
                                    <a href="{{ route('contributeur.medias.par-contenu', $contenu) }}" 
                                       class="btn btn-sm btn-outline">
                                        <i class="fas fa-external-link-alt"></i> Voir tous les médias
                                    </a>
                                @endif
                                <a href="{{ route('contributeur.medias.create', ['contenu_id' => $contenu->id]) }}" 
                                   class="btn btn-sm btn-primary">
                                    <i class="fas fa-plus"></i> Ajouter un média
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($contenus->hasPages())
            <div class="pagination-container fade-in-up">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if($contenus->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link"><i class="fas fa-chevron-left"></i></span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $contenus->previousPageUrl() }}" rel="prev">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @php
                        $start = max(1, $contenus->currentPage() - 2);
                        $end = min($contenus->lastPage(), $contenus->currentPage() + 2);
                    @endphp
                    
                    @for ($page = $start; $page <= $end; $page++)
                        @if($page == $contenus->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $contenus->url($page) }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endfor

                    {{-- Next Page Link --}}
                    @if($contenus->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $contenus->nextPageUrl() }}" rel="next">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link"><i class="fas fa-chevron-right"></i></span>
                        </li>
                    @endif
                </ul>
            </div>
        @endif
    @endif

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
            
            // Gestion de l'accordéon
            const accordionButtons = document.querySelectorAll('.accordion-button');
            accordionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-bs-target');
                    
                    // Fermer tous les autres
                    accordionButtons.forEach(btn => {
                        if (btn !== this) {
                            btn.classList.add('collapsed');
                            const otherTarget = btn.getAttribute('data-bs-target');
                            document.querySelector(otherTarget).classList.remove('show');
                        }
                    });
                    
                    // Basculer l'état courant
                    this.classList.toggle('collapsed');
                    const target = document.querySelector(targetId);
                    target.classList.toggle('show');
                    
                    // Sauvegarder dans localStorage
                    if (target.classList.contains('show')) {
                        localStorage.setItem('openAccordion', targetId);
                    } else {
                        localStorage.removeItem('openAccordion');
                    }
                });
            });
            
            // Restaurer l'état ouvert depuis localStorage
            const openAccordionId = localStorage.getItem('openAccordion');
            if (openAccordionId) {
                const button = document.querySelector(`[data-bs-target="${openAccordionId}"]`);
                if (button && button.classList.contains('collapsed')) {
                    button.click();
                }
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
            
            // Observer les cartes de média
            document.querySelectorAll('.media-card').forEach(card => {
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
        });
    </script>
    
    
    
    
    @include('components.footer-styles')
    @include('components.footer-contributor')
</body>
</html>