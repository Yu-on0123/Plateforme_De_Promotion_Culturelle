<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $contenu->titre }} - BéninCulture</title>
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
            --gradient-dark: linear-gradient(135deg, var(--earth-800), var(--primary-red));
            
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
            padding: 1rem;
        }
        
        /* ===== HEADER ===== */
        .detail-header {
            max-width: 1200px;
            margin: 0 auto 2rem;
            text-align: center;
            padding: 1rem;
        }
        
        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }
        
        .brand-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        
        .brand-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--earth-800);
            font-weight: 600;
        }
        
        /* ===== CONTENEUR PRINCIPAL ===== */
        .detail-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* ===== CARTE PRINCIPALE ===== */
        .content-card {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
            margin-bottom: 2rem;
            overflow: hidden;
            position: relative;
        }
        
        .card-header {
            background: var(--gradient-primary);
            padding: 2rem;
            color: white;
            position: relative;
        }
        
        .close-btn {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }
        
        .content-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.3;
            padding-right: 3rem;
        }
        
        .content-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            padding: 0.6rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            backdrop-filter: blur(5px);
        }
        
        /* ===== IMAGE PRINCIPALE ===== */
        .main-image-section {
            position: relative;
            background: var(--earth-100);
            min-height: 300px;
            overflow: hidden;
        }
        
        .main-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
        }
        
        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            padding: 2rem;
            color: white;
        }
        
        .image-type {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: rgba(0, 0, 0, 0.8);
            color: var(--primary-gold);
            padding: 0.6rem 1.2rem;
            border-radius: 25px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            backdrop-filter: blur(5px);
        }
        
        /* ===== SECTION DESCRIPTION ===== */
        .description-section {
            padding: 2.5rem;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--primary-red);
            display: flex;
            align-items: center;
            gap: 1rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--earth-200);
        }
        
        .content-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--earth-700);
            white-space: pre-line;
            margin-bottom: 2rem;
        }
        
        /* ===== GRILLE D'INFORMATIONS ===== */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
            padding: 2rem 0;
            border-top: 1px solid var(--earth-200);
            border-bottom: 1px solid var(--earth-200);
        }
        
        .info-card {
            background: var(--earth-50);
            padding: 1.5rem;
            border-radius: var(--radius-lg);
            border-left: 4px solid var(--primary-red);
            transition: all 0.3s ease;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }
        
        .info-card h5 {
            font-size: 1rem;
            color: var(--earth-800);
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .info-card h5 i {
            color: var(--primary-red);
        }
        
        .info-card p {
            color: var(--earth-700);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        /* ===== GALERIE MÉDIAS ===== */
        .media-section {
            margin: 2rem 0;
        }
        
        .media-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .media-item {
            border-radius: var(--radius-md);
            overflow: hidden;
            background: var(--earth-100);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
            height: 150px;
        }
        
        .media-item:hover {
            transform: translateY(-5px);
            border-color: var(--primary-gold);
            box-shadow: var(--shadow-md);
        }
        
        .media-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .media-icon {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--primary-red);
        }
        
        /* ===== FOOTER ===== */
        .card-footer {
            padding: 2rem;
            background: var(--earth-50);
            border-top: 1px solid var(--earth-200);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 1.5rem;
        }
        
        .back-link {
            color: var(--primary-red);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius-md);
            background: var(--red-50);
            border: 1px solid var(--red-200);
            font-weight: 500;
        }
        
        .back-link:hover {
            background: var(--primary-red);
            color: white;
            transform: translateX(-5px);
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 0.875rem 1.75rem;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            border: 2px solid transparent;
            cursor: pointer;
        }
        
        .btn-outline {
            background: transparent;
            color: var(--primary-red);
            border-color: var(--earth-300);
        }
        
        .btn-outline:hover {
            background: var(--red-50);
            border-color: var(--primary-red);
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
        
        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        /* ===== ANIMATIONS ===== */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease forwards;
        }
        
        .slide-in {
            animation: slideIn 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
        
        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 1024px) {
            .content-title {
                font-size: 1.9rem;
            }
            
            .main-image {
                height: 350px;
            }
            
            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding: 0.5rem;
            }
            
            .content-title {
                font-size: 1.6rem;
                padding-right: 0;
            }
            
            .card-header {
                padding: 1.5rem;
            }
            
            .close-btn {
                top: 1rem;
                right: 1rem;
                width: 40px;
                height: 40px;
            }
            
            .main-image {
                height: 300px;
            }
            
            .description-section {
                padding: 1.5rem;
            }
            
            .section-title {
                font-size: 1.4rem;
            }
            
            .content-description {
                font-size: 1rem;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
                padding: 1.5rem 0;
            }
            
            .card-footer {
                flex-direction: column;
                align-items: stretch;
                padding: 1.5rem;
            }
            
            .back-link {
                width: 100%;
                justify-content: center;
            }
            
            .action-buttons {
                width: 100%;
                justify-content: center;
            }
            
            .btn {
                flex: 1;
                justify-content: center;
                min-width: 150px;
            }
            
            .media-grid {
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            }
            
            .media-item {
                height: 120px;
            }
        }
        
        @media (max-width: 480px) {
            .brand {
                flex-direction: column;
                text-align: center;
                gap: 0.75rem;
            }
            
            .brand-icon {
                width: 45px;
                height: 45px;
                font-size: 1.3rem;
            }
            
            .brand-text h1 {
                font-size: 1.5rem;
            }
            
            .content-title {
                font-size: 1.4rem;
            }
            
            .content-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }
            
            .meta-item {
                width: 100%;
                justify-content: center;
            }
            
            .main-image {
                height: 250px;
            }
            
            .image-overlay {
                padding: 1.5rem;
            }
            
            .image-type {
                top: 1rem;
                right: 1rem;
                padding: 0.5rem 1rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .media-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.75rem;
            }
            
            .media-item {
                height: 100px;
            }
            
            .media-icon {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 360px) {
            .content-title {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 1.2rem;
            }
            
            .main-image {
                height: 200px;
            }
            
            .media-grid {
                grid-template-columns: 1fr;
            }
            
            .media-item {
                height: 120px;
            }
        }
        
        /* ===== ACCESSIBILITÉ ===== */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
        
        /* ===== TOUCH SCREEN OPTIMIZATION ===== */
        @media (hover: none) and (pointer: coarse) {
            .btn, .back-link, .close-btn, .media-item {
                min-height: 44px; /* Taille minimale pour les doigts */
            }
            
            .info-card:hover,
            .media-item:hover {
                transform: none;
            }
        }
        
        /* ===== DARK MODE SUPPORT ===== */
        @media (prefers-color-scheme: dark) {
            body {
                background: var(--earth-900);
                color: var(--primary-beige);
            }
            
            .content-card {
                background: var(--earth-800);
                border-color: var(--earth-700);
            }
            
            .content-description {
                color: var(--earth-300);
            }
            
            .info-card {
                background: var(--earth-700);
            }
            
            .info-card p {
                color: var(--earth-300);
            }
            
            .card-footer {
                background: var(--earth-700);
            }
            
            .back-link {
                background: var(--earth-600);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="detail-header">
        <div class="brand">
            <div class="brand-icon">
                <i class="fas fa-landmark"></i>
            </div>
            <div class="brand-text">
                <h1>BéninCulture</h1>
            </div>
        </div>
    </header>

    <!-- Conteneur principal -->
    <main class="detail-container">
        <!-- Carte principale -->
        <article class="content-card slide-in">
            <!-- Header de la carte -->
            <div class="card-header">
                <button class="close-btn" id="closeBtn" title="Fermer" aria-label="Fermer">
                    <i class="fas fa-times"></i>
                </button>
                
                <h1 class="content-title">{{ $contenu->titre }}</h1>
                
                <div class="content-meta">
                    @if($contenu->type)
                        <span class="meta-item" aria-label="Type de contenu">
                            <i class="fas fa-tag"></i>
                            {{ $contenu->type->nom }}
                        </span>
                    @endif
                    
                    <span class="meta-item" aria-label="Date de publication">
                        <i class="far fa-calendar"></i>
                        {{ $contenu->date_creation->format('d/m/Y') }}
                    </span>
                    
                    @if($contenu->auteur)
                        <span class="meta-item" aria-label="Auteur">
                            <i class="fas fa-user"></i>
                            {{ $contenu->auteur->name }}
                        </span>
                    @endif
                    
                    @if($contenu->region)
                        <span class="meta-item" aria-label="Région">
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $contenu->region->nom }}
                        </span>
                    @endif
                </div>
            </div>
            
            <!-- Image principale -->
            @php
                $mainMedia = null;
                if ($contenu->medias && $contenu->medias->count() > 0) {
                    // Chercher une image en premier
                    $mainMedia = $contenu->medias->first(function($media) {
                        return str_contains(strtolower($media->typeMedia->nom ?? ''), 'image');
                    }) ?? $contenu->medias->first();
                }
            @endphp
            
            @if($mainMedia)
                <div class="main-image-section">
                    <div class="main-image-container">
                        <img src="{{ asset('storage/' . $mainMedia->chemin) }}" 
                             alt="{{ $contenu->titre }}" 
                             class="main-image"
                             loading="lazy"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80'">
                        
                        <div class="image-type" aria-label="Type de média">
                            <i class="fas fa-{{ str_contains(strtolower($mainMedia->typeMedia->nom ?? ''), 'vidéo') ? 'video' : 'image' }}"></i>
                            {{ $mainMedia->typeMedia->nom ?? 'Image' }}
                        </div>
                        
                        @if($mainMedia->description)
                            <div class="image-overlay">
                                <p>{{ $mainMedia->description }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
            
            <!-- Description -->
            <div class="description-section">
                <h2 class="section-title">
                    <i class="fas fa-align-left"></i>
                    Description
                </h2>
                
                <div class="content-description">
                    {!! nl2br(e($contenu->texte)) !!}
                </div>
                
                <!-- Informations supplémentaires -->
                <div class="info-grid">
                    @if($contenu->langue)
                        <div class="info-card">
                            <h5><i class="fas fa-language"></i> Langue</h5>
                            <p>{{ $contenu->langue->nom }}</p>
                        </div>
                    @endif
                    
                    <div class="info-card">
                        <h5><i class="fas fa-chart-bar"></i> Statut</h5>
                        <p>
                            <span style="color: var(--primary-red); font-weight: bold;">
                                {{ ucfirst($contenu->statut) }}
                            </span>
                        </p>
                    </div>
                    
                    <div class="info-card">
                        <h5><i class="fas fa-comments"></i> Interactions</h5>
                        <p>
                            {{ $contenu->commentaires->count() }} commentaire(s)
                            @if($contenu->medias->count() > 0)
                                <br>{{ $contenu->medias->count() }} média(s)
                            @endif
                        </p>
                    </div>
                    
                    @if($contenu->mot_cles)
                        <div class="info-card">
                            <h5><i class="fas fa-hashtag"></i> Mots-clés</h5>
                            <p>{{ $contenu->mot_cles }}</p>
                        </div>
                    @endif
                </div>
                
                <!-- Galerie médias -->
                @if($contenu->medias && $contenu->medias->count() > 1)
                    <div class="media-section">
                        <h3 class="section-title">
                            <i class="fas fa-images"></i>
                            Galerie média
                        </h3>
                        
                        <div class="media-grid">
                            @foreach($contenu->medias->slice(1) as $media)
                                <div class="media-item" aria-label="Média {{ $loop->iteration }}">
                                    @php
                                        $mediaType = strtolower($media->typeMedia->nom ?? '');
                                    @endphp
                                    
                                    @if(str_contains($mediaType, 'image'))
                                        <img src="{{ asset('storage/' . $media->chemin) }}" 
                                             alt="Média {{ $loop->iteration }}"
                                             loading="lazy"
                                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80'">
                                    @elseif(str_contains($mediaType, 'vidéo'))
                                        <div class="media-icon">
                                            <i class="fas fa-video"></i>
                                        </div>
                                    @elseif(str_contains($mediaType, 'audio'))
                                        <div class="media-icon">
                                            <i class="fas fa-music"></i>
                                        </div>
                                    @else
                                        <div class="media-icon">
                                            <i class="fas fa-file"></i>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            
            <!-- Footer -->
            <footer class="card-footer">
                <a href="{{ route('explorer.index') }}" class="back-link" id="backBtn">
                    <i class="fas fa-arrow-left"></i>
                    Retour à l'explorateur
                </a>
                
                <div class="action-buttons">
                    <button class="btn btn-outline" id="shareBtn" aria-label="Partager">
                        <i class="fas fa-share-alt"></i>
                        Partager
                    </button>
                    
                    @auth
                        @if(!$dejaCommente)
                            <a href="{{ route('explorer.commenter.form', $contenu) }}" 
                               class="btn btn-primary">
                                <i class="fas fa-comment"></i>
                                Commenter
                            </a>
                        @else
                            <button class="btn btn-primary" disabled aria-label="Déjà commenté">
                                <i class="fas fa-check"></i>
                                Déjà commenté
                            </button>
                        @endif
                    @else
                        <a href="{{ route('login') }}" 
                           class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i>
                            Se connecter
                        </a>
                    @endauth
                </div>
            </footer>
        </article>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== NAVIGATION =====
            const backBtn = document.getElementById('backBtn');
            const closeBtn = document.getElementById('closeBtn');
            
            function goBack() {
                if (window.history.length > 1) {
                    window.history.back();
                } else {
                    window.location.href = "{{ route('explorer.index') }}";
                }
            }
            
            if (backBtn) {
                backBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    goBack();
                });
            }
            
            if (closeBtn) {
                closeBtn.addEventListener('click', goBack);
            }
            
            // Navigation avec la touche Échap
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    goBack();
                }
            });
            
            // ===== PARTAGE =====
            const shareBtn = document.getElementById('shareBtn');
            
            if (shareBtn && navigator.share) {
                shareBtn.addEventListener('click', async function() {
                    try {
                        await navigator.share({
                            title: "{{ $contenu->titre }}",
                            text: "Découvrez ce contenu culturel sur BéninCulture",
                            url: window.location.href,
                        });
                    } catch (err) {
                        console.log('Erreur de partage:', err);
                        fallbackShare();
                    }
                });
            } else if (shareBtn) {
                shareBtn.addEventListener('click', fallbackShare);
            }
            
            function fallbackShare() {
                // Fallback pour les navigateurs sans Web Share API
                const shareUrl = window.location.href;
                navigator.clipboard.writeText(shareUrl)
                    .then(() => {
                        const originalHTML = shareBtn.innerHTML;
                        shareBtn.innerHTML = '<i class="fas fa-check"></i> Copié !';
                        shareBtn.style.background = 'var(--primary-red)';
                        shareBtn.style.color = 'white';
                        
                        setTimeout(() => {
                            shareBtn.innerHTML = originalHTML;
                            shareBtn.style.background = '';
                            shareBtn.style.color = '';
                        }, 2000);
                    })
                    .catch(err => {
                        console.error('Erreur de copie:', err);
                        alert('Lien copié dans le presse-papier !');
                    });
            }
            
            // ===== OPTIMISATION DES IMAGES =====
            // Lazy loading amélioré
            const images = document.querySelectorAll('img[loading="lazy"]');
            
            if ('loading' in HTMLImageElement.prototype) {
                // Le navigateur supporte le lazy loading natif
                images.forEach(img => {
                    img.loading = 'lazy';
                });
            } else {
                // Fallback pour les vieux navigateurs
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src || img.src;
                            imageObserver.unobserve(img);
                        }
                    });
                });
                
                images.forEach(img => {
                    if (img.dataset.src) {
                        imageObserver.observe(img);
                    }
                });
            }
            
            // ===== GESTION DES ÉVÉNEMENTS TOUCH =====
            let lastTouchEnd = 0;
            
            document.addEventListener('touchend', function(event) {
                const now = Date.now();
                if (now - lastTouchEnd <= 300) {
                    event.preventDefault();
                }
                lastTouchEnd = now;
            }, false);
            
            // ===== ACCESSIBILITÉ =====
            // Focus management
            const focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
            const focusableContent = document.querySelectorAll(focusableElements);
            const firstFocusableElement = focusableContent[0];
            const lastFocusableElement = focusableContent[focusableContent.length - 1];
            
            document.addEventListener('keydown', function(e) {
                if (e.key !== 'Tab') return;
                
                if (e.shiftKey) { // Shift + Tab
                    if (document.activeElement === firstFocusableElement) {
                        lastFocusableElement.focus();
                        e.preventDefault();
                    }
                } else { // Tab seul
                    if (document.activeElement === lastFocusableElement) {
                        firstFocusableElement.focus();
                        e.preventDefault();
                    }
                }
            });
            
            firstFocusableElement.focus();
            
            // ===== PERFORMANCE =====
            // Debounce pour les événements de redimensionnement
            let resizeTimeout;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(function() {
                    console.log('Redimensionnement terminé');
                }, 250);
            });
            
            console.log('Page de détail chargée avec succès');
        });
        
        // Gestion du offline
        window.addEventListener('online', function() {
            console.log('Connection restored');
        });
        
        window.addEventListener('offline', function() {
            console.log('Connection lost');
        });
    </script>
</body>
</html>