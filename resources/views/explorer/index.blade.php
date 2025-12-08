<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorer - BéninCulture</title>
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
        }
        
        /* ===== HEADER PROFESSIONNEL ===== */
        .explorer-header {
            background: var(--primary-cream);
            padding: 1.25rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid var(--earth-200);
        }
        
        .header-container {
            max-width: 1400px;
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
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-1px);
        }
        
        /* ===== SECTION FILTRES ===== */
        .filters-section {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 2rem;
        }
        
        .filters-card {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
        }
        
        .filters-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            align-items: end;
        }
        
        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .filter-label {
            font-weight: 600;
            color: var(--earth-700);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .filter-input {
            padding: 0.875rem 1rem;
            border: 2px solid var(--earth-300);
            border-radius: var(--radius-md);
            font-size: 0.95rem;
            transition: all 0.2s ease;
            background: white;
            color: var(--earth-800);
            font-family: 'Inter', sans-serif;
        }
        
        .filter-input:focus {
            outline: none;
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(139, 30, 30, 0.1);
        }
        
        .filter-input::placeholder {
            color: var(--earth-500);
        }
        
        .filter-select {
            appearance: none;
            background: white url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%238B1E1E' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") no-repeat right 1rem center;
            padding-right: 3rem;
            cursor: pointer;
        }
        
        .actions-row {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .btn-lg {
            padding: 1rem 2rem;
            font-size: 1rem;
            flex: 1;
            justify-content: center;
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
        
        /* ===== SECTION INTRODUCTION ===== */
        .intro-section {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }
        
        .intro-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 3rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
            text-align: center;
        }
        
        .intro-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--earth-800);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        
        .intro-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 4px;
            background: var(--gradient-primary);
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        .intro-text {
            font-size: 1.1rem;
            color: var(--earth-600);
            line-height: 1.7;
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* ===== SECTION MESSAGE FORT ===== */
        .highlight-section {
            background: linear-gradient(135deg, var(--primary-red), var(--earth-800));
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            text-align: center;
        }
        
        .highlight-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .highlight-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        
        .highlight-text {
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 2rem;
        }
        
        .highlight-quote {
            font-style: italic;
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            padding: 1.5rem;
            background: rgba(0, 0, 0, 0.2);
            border-radius: var(--radius-md);
            border-left: 4px solid var(--primary-gold);
        }
        
        /* ===== SECTION PAR TYPE ===== */
        .type-section {
            max-width: 1400px;
            margin: 3rem auto;
            padding: 0 2rem;
        }
        
        .type-header {
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--earth-200);
        }
        
        .type-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--earth-800);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .type-description {
            color: var(--earth-600);
            margin-top: 0.5rem;
            font-size: 1rem;
        }
        
        /* ===== GRILLE DE CONTENUS ===== */
        .contents-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .content-card {
            background: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 400px;
            cursor: pointer;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
            position: relative;
        }
        
        .content-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-gold);
        }
        
        .content-media {
            height: 200px;
            position: relative;
            overflow: hidden;
        }
        
        .content-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .content-card:hover .content-media img {
            transform: scale(1.05);
        }
        
        .media-badge {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            z-index: 2;
        }
        
        .content-info {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .content-title {
            font-size: 1.2rem;
            color: var(--earth-800);
            margin-bottom: 0.75rem;
            font-weight: 600;
            line-height: 1.4;
            font-family: 'Playfair Display', serif;
        }
        
        .content-excerpt {
            flex-grow: 1;
            color: var(--earth-600);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .content-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 1rem;
            font-size: 0.85rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--earth-600);
        }
        
        .content-footer {
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid var(--earth-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .content-author {
            font-size: 0.85rem;
            color: var(--earth-700);
            font-weight: 500;
        }
        
        .content-link {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .content-link:hover {
            color: var(--earth-800);
            gap: 0.75rem;
        }
        
        /* ===== PAGINATION ===== */
        .pagination-section {
            max-width: 1400px;
            margin: 2rem auto 4rem;
            padding: 0 2rem;
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
        
        /* ===== ÉTAT VIDE ===== */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: var(--radius-lg);
            max-width: 600px;
            margin: 3rem auto;
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-md);
        }
        
        .empty-icon {
            font-size: 3rem;
            color: var(--earth-400);
            margin-bottom: 1.5rem;
        }
        
        .empty-state h3 {
            color: var(--earth-800);
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-family: 'Playfair Display', serif;
        }
        
        .empty-state p {
            color: var(--earth-600);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }
        
        /* ===== FOOTER ===== */
        .explorer-footer {
            background: var(--earth-800);
            color: white;
            padding: 3rem 2rem 2rem;
            margin-top: 4rem;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 3rem;
            padding-bottom: 3rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.2s ease;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-sm);
        }
        
        .footer-link:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .footer-info {
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
        }
        
        .footer-info p {
            margin-bottom: 1rem;
        }
        
        .copyright {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
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
        
        .fade-in-up {
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .contents-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .header-nav {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .filters-grid {
                grid-template-columns: 1fr;
            }
            
            .contents-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto 2rem;
            }
            
            .intro-card {
                padding: 2rem;
            }
            
            .intro-title {
                font-size: 2rem;
            }
            
            .highlight-section {
                padding: 3rem 1.5rem;
            }
            
            .highlight-title {
                font-size: 1.5rem;
            }
            
            .footer-links {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .header-container,
            .filters-section,
            .intro-section,
            .type-section {
                padding: 0 1rem;
            }
            
            .filters-card {
                padding: 1.5rem;
            }
            
            .intro-title {
                font-size: 1.75rem;
            }
            
            .type-title {
                font-size: 1.5rem;
            }
            
            .content-card {
                height: 380px;
            }
            
            .content-media {
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="explorer-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-compass"></i>
                </div>
                <div class="brand-text">
                    <h1>BéninCulture</h1>
                    <div class="subtitle">Explorer le patrimoine</div>
                </div>
            </div>
            
            <div class="header-nav">
                @auth
                    <a href="{{ route('user.dashboard') }}" class="nav-category">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                    @can('create-contenu')
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Créer
                        </a>
                    @endcan
                @else
                    <a href="{{ route('login') }}" class="nav-category">
                        <i class="fas fa-sign-in-alt"></i> Connexion
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Section des filtres -->
    <section class="filters-section fade-in-up" id="filtres">
        <div class="filters-card">
            <form action="{{ route('explorer.index') }}" method="GET" class="filters-grid">
                <div class="filter-group">
                    <label for="search" class="filter-label">
                        <i class="fas fa-search"></i> Rechercher
                    </label>
                    <input type="text" 
                           id="search" 
                           name="search" 
                           class="filter-input" 
                           placeholder="Rechercher un contenu, un auteur..." 
                           value="{{ request('search') }}">
                </div>
                
                <div class="filter-group">
                    <label for="region" class="filter-label">
                        <i class="fas fa-map-marker-alt"></i> Région
                    </label>
                    <select id="region" name="region" class="filter-input filter-select">
                        <option value="">Toutes les régions</option>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}" {{ request('region') == $region->id ? 'selected' : '' }}>
                                {{ $region->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="langue" class="filter-label">
                        <i class="fas fa-language"></i> Langue
                    </label>
                    <select id="langue" name="langue" class="filter-input filter-select">
                        <option value="">Toutes les langues</option>
                        @foreach($langues as $langue)
                            <option value="{{ $langue->id }}" {{ request('langue') == $langue->id ? 'selected' : '' }}>
                                {{ $langue->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="type" class="filter-label">
                        <i class="fas fa-tag"></i> Type de contenu
                    </label>
                    <select id="type" name="type" class="filter-input filter-select">
                        <option value="">Tous les types</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>
                                {{ $type->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="actions-row">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-search"></i> Appliquer les filtres
                    </button>
                    <a href="{{ route('explorer.index') }}" class="btn btn-outline btn-lg">
                        <i class="fas fa-times"></i> Réinitialiser
                    </a>
                </div>
            </form>
        </div>
    </section>

    <!-- Section introduction -->
    <section class="intro-section fade-in-up">
        <div class="intro-card">
            <h2 class="intro-title">Le Patrimoine Vivant du Bénin</h2>
            <p class="intro-text">
                Explorez la richesse culturelle du Bénin à travers ses histoires, ses traditions 
                et son patrimoine immatériel. Découvrez des contenus authentiques qui témoignent 
                de notre identité culturelle et contribuent à préserver notre héritage collectif 
                pour les générations futures.
            </p>
        </div>
    </section>

    <!-- Section message fort -->
    <section class="highlight-section fade-in-up">
        <div class="highlight-content">
            <h3 class="highlight-title">Gardiens de la Mémoire</h3>
            <p class="highlight-text">
                Chaque visiteur devient un témoin. Chaque partage, une transmission. 
                Chaque contribution, une pierre ajoutée à l'édifice de notre mémoire collective.
            </p>
            <div class="highlight-quote">
                <i class="fas fa-quote-left"></i>
                Apprenez de la culture béninoise et devenez aussi un gardien de ses richesses
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
    </section>

    <!-- Contenus par type -->
    @php
        $contentsByType = $contenus->groupBy('id_type');
    @endphp

    @foreach($types as $type)
        @if($contentsByType->has($type->id) && $contentsByType[$type->id]->count() > 0)
            <section class="type-section fade-in-up" id="type-{{ strtolower(str_replace(' ', '-', $type->nom)) }}">
                <div class="type-header">
                    <h2 class="type-title">
                        <i class="fas fa-{{ $type->icon ?? 'file' }}"></i>
                        {{ $type->nom }}
                    </h2>
                    <p class="type-description">
                        {{ $type->description ?? 'Découvrez les trésors de cette catégorie culturelle.' }}
                    </p>
                </div>
                
                <div class="contents-grid">
                    @foreach($contentsByType[$type->id] as $contenu)
                        <div class="content-card">
                            <div class="content-media">
                                @if($contenu->medias->first())
                                    @php
                                        $firstMedia = $contenu->medias->first();
                                        $mediaType = strtolower($firstMedia->type->nom ?? 'image');
                                    @endphp
                                    
                                    @if(str_contains($mediaType, 'image'))
                                        <img src="{{ $firstMedia->chemin }}" 
                                             alt="{{ $contenu->titre }}"
                                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
                                        <div class="media-badge">
                                            <i class="fas fa-image"></i> Image
                                        </div>
                                    @elseif(str_contains($mediaType, 'vidéo') || str_contains($mediaType, 'video'))
                                        <div style="background: linear-gradient(135deg, var(--earth-800), var(--primary-red)); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-play-circle" style="font-size: 3rem; color: white;"></i>
                                        </div>
                                        <div class="media-badge">
                                            <i class="fas fa-video"></i> Vidéo
                                        </div>
                                    @elseif(str_contains($mediaType, 'audio'))
                                        <div style="background: linear-gradient(135deg, var(--earth-700), var(--earth-800)); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-music" style="font-size: 3rem; color: white;"></i>
                                        </div>
                                        <div class="media-badge">
                                            <i class="fas fa-volume-up"></i> Audio
                                        </div>
                                    @endif
                                @else
                                    <div style="background: linear-gradient(135deg, var(--earth-200), var(--earth-300)); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-image" style="font-size: 3rem; color: var(--earth-500);"></i>
                                    </div>
                                    <div class="media-badge">
                                        <i class="fas fa-image"></i> Image
                                    </div>
                                @endif
                            </div>
                            <div class="content-info">
                                <h3 class="content-title">{{ $contenu->titre }}</h3>
                                <p class="content-excerpt">
                                    {{ Str::limit(strip_tags($contenu->texte), 120) }}
                                </p>
                                <div class="content-meta">
                                    <span class="meta-item">
                                        <i class="far fa-calendar"></i> 
                                        {{ $contenu->created_at?->format('d/m/Y') ?? 'Date inconnue' }}
                                    </span>
                                    @if($contenu->region)
                                        <span class="meta-item">
                                            <i class="fas fa-map-marker-alt"></i> 
                                            {{ $contenu->region->nom }}
                                        </span>
                                    @endif
                                </div>
                                <div class="content-footer">
                                    <div class="content-author">
                                        {{ $contenu->auteur ? Str::limit($contenu->auteur->name, 20) : 'Auteur inconnu' }}
                                    </div>
                                    <a href="{{ route('explorer.index') }}" class="content-link">
                                        Voir plus <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    @endforeach

    <!-- Message si aucun contenu -->
    @if($contenus->count() == 0)
        <div class="empty-state fade-in-up">
            <i class="fas fa-search empty-icon"></i>
            <h3>Aucun contenu trouvé</h3>
            <p>Aucun contenu ne correspond à vos critères de recherche.</p>
            <a href="{{ route('explorer.index') }}" class="btn btn-primary">
                <i class="fas fa-redo"></i> Voir tous les contenus
            </a>
        </div>
    @endif

    <!-- Pagination -->
    @if($contenus->hasPages())
        <div class="pagination-section fade-in-up">
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
                @foreach($contenus->getUrlRange(1, $contenus->lastPage()) as $page => $url)
                    @if($page == $contenus->currentPage())
                        <li class="page-item active">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach

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

    <!-- Footer -->
    <footer class="explorer-footer fade-in-up">
        <div class="footer-container">
            <div class="footer-links">
                <a href="{{ route('open') }}" class="footer-link">
                    <i class="fas fa-home"></i> Accueil
                </a>
                @auth
                     @if(Auth::user()->role === 'contributeur')
                     <a href="{{ route('contributeur.dashboard') }}" class="footer-link">
                      <i class="fas fa-tachometer-alt"></i> Tableau de bord
                      </a>
                     @elseif(Auth::user()->role === 'user')
                      <a href="{{ route('user.dashboard') }}" class="footer-link">
                      <i class="fas fa-tachometer-alt"></i> Tableau de bord
                       </a>
                     @endif
                @endauth

                <a href="{{ route('explorer.index') }}" class="footer-link">
                    <i class="fas fa-compass"></i> Explorer
                </a>
                <a href="{{ route('explorer.recherche') }}" class="footer-link">
                    <i class="fas fa-filter"></i> Filtres
                </a>
                <a href="#" class="footer-link">
                    <i class="fas fa-question-circle"></i> Aide
                </a>
                <a href="#" class="footer-link">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </div>
            <div class="footer-info">
                <p><i class="fas fa-shield-alt"></i> Tous les contenus sont vérifiés par notre comité culturel</p>
                <p><i class="fas fa-heart"></i> Préservons ensemble notre patrimoine culturel</p>
            </div>
            <div class="copyright">
                &copy; {{ date('Y') }} BéninCulture. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation fluide vers les sections
            const navLinks = document.querySelectorAll('.nav-category[href^="#"], .footer-link[href^="#"]');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        e.preventDefault();
                        const offset = 80;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Animations au défilement
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
            
            // Observer les sections et cartes
            document.querySelectorAll('section, .content-card').forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                observer.observe(element);
            });
            
            // Cliquez sur une carte pour voir plus
            const contentCards = document.querySelectorAll('.content-card');
            contentCards.forEach(card => {
                const viewMoreBtn = card.querySelector('.content-link');
                if(viewMoreBtn) {
                    card.addEventListener('click', function(e) {
                        if(!viewMoreBtn.contains(e.target)) {
                            viewMoreBtn.click();
                        }
                    });
                    
                    viewMoreBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        console.log('Voir plus pour :', card.querySelector('.content-title').textContent);
                        // Redirection vers la vue détaillée
                        // window.location.href = 'URL_DU_CONTENU';
                    });
                }
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
</body>
</html>