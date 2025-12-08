<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de recherche - BéninCulture</title>
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
            padding: var(--space-lg) 0;
        }
        
        .search-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: var(--space-md);
            margin-bottom: var(--space-lg);
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
        
        .search-term {
            color: var(--primary-red);
            font-weight: 600;
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
        
        /* ===== FILTRES ACTIFS ===== */
        .active-filters {
            max-width: 1400px;
            margin: 0 auto var(--space-lg);
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-xs);
            align-items: center;
        }
        
        .filter-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: white;
        }
        
        .filter-region {
            background: var(--earth-600);
        }
        
        .filter-langue {
            background: var(--earth-500);
        }
        
        .filter-type {
            background: var(--primary-red);
        }
        
        .filter-remove {
            background: transparent;
            border: none;
            color: inherit;
            cursor: pointer;
            padding: 0.25rem;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }
        
        .filter-remove:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }
        
        /* ===== LAYOUT PRINCIPAL ===== */
        .search-layout {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: var(--space-xl);
        }
        
        /* ===== FILTRES LATÉRAUX ===== */
        .filters-sidebar {
            display: flex;
            flex-direction: column;
            gap: var(--space-lg);
        }
        
        .filter-card {
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
        }
        
        .filter-card-header {
            background: var(--earth-100);
            padding: var(--space-lg);
            border-bottom: 1px solid var(--earth-200);
        }
        
        .filter-card-header h3 {
            font-size: 1.25rem;
            color: var(--earth-800);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .filter-card-body {
            padding: var(--space-lg);
        }
        
        .filter-group {
            margin-bottom: var(--space-lg);
        }
        
        .filter-group:last-child {
            margin-bottom: 0;
        }
        
        .filter-label {
            font-weight: 600;
            color: var(--earth-700);
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
            display: block;
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
        
        .form-select {
            appearance: none;
            background: white url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%238B1E1E' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") no-repeat right 1rem center;
            padding-right: 3rem;
            cursor: pointer;
        }
        
        .stats-card {
            text-align: center;
        }
        
        .stats-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-red);
            margin-bottom: 0.5rem;
        }
        
        .stats-label {
            color: var(--earth-600);
            font-size: 1rem;
        }
        
        /* ===== RÉSULTATS ===== */
        .results-container {
            display: flex;
            flex-direction: column;
            gap: var(--space-xl);
        }
        
        /* État vide */
        .empty-state {
            background: white;
            border-radius: var(--radius-xl);
            padding: var(--space-xl);
            text-align: center;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
            margin: 0 auto;
            max-width: 600px;
        }
        
        .empty-icon {
            font-size: 4rem;
            color: var(--earth-400);
            margin-bottom: var(--space-md);
        }
        
        .empty-state h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            color: var(--earth-800);
            margin-bottom: var(--space-sm);
        }
        
        .empty-state p {
            color: var(--earth-600);
            margin-bottom: var(--space-lg);
        }
        
        /* Grille de résultats */
        .results-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: var(--space-lg);
        }
        
        .content-card {
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
        
        .content-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-gold);
        }
        
        .card-media {
            height: 200px;
            position: relative;
            overflow: hidden;
            background: var(--earth-100);
        }
        
        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .content-card:hover .card-image {
            transform: scale(1.05);
        }
        
        .card-icon {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--earth-400);
            font-size: 3rem;
        }
        
        .card-badge {
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
        
        .card-content {
            padding: var(--space-lg);
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            margin-bottom: var(--space-sm);
            line-height: 1.3;
        }
        
        .card-excerpt {
            color: var(--earth-600);
            line-height: 1.6;
            margin-bottom: var(--space-md);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex: 1;
        }
        
        .card-meta {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-sm);
            margin-bottom: var(--space-md);
            font-size: 0.85rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--earth-600);
        }
        
        .card-footer {
            padding: var(--space-md);
            background: var(--earth-50);
            border-top: 1px solid var(--earth-200);
        }
        
        .card-author {
            font-weight: 600;
            color: var(--earth-800);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        /* ===== PAGINATION ===== */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: var(--space-xl);
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
        @media (max-width: 1200px) {
            .search-layout {
                grid-template-columns: 250px 1fr;
                gap: var(--space-lg);
            }
            
            .results-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
        
        @media (max-width: 992px) {
            .search-layout {
                grid-template-columns: 1fr;
            }
            
            .filters-sidebar {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: var(--space-md);
            }
            
            .filter-card {
                margin-bottom: 0;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding: var(--space-sm);
            }
            
            .brand-text h1 {
                font-size: 1.75rem;
            }
            
            .search-header {
                flex-direction: column;
                align-items: stretch;
                gap: var(--space-sm);
            }
            
            .active-filters {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .filters-sidebar {
                grid-template-columns: 1fr;
            }
            
            .results-grid {
                grid-template-columns: 1fr;
            }
            
            .empty-state {
                padding: var(--space-lg);
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
            
            .filter-card-header,
            .filter-card-body {
                padding: var(--space-md);
            }
            
            .card-content {
                padding: var(--space-md);
            }
            
            .card-title {
                font-size: 1.25rem;
            }
            
            .empty-state {
                padding: var(--space-md);
            }
            
            .empty-icon {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <!-- En-tête de page -->
    <div class="page-header fade-in-up">
        <div class="search-header">
            <div class="brand-section">
                <div class="brand-icon">
                    <i class="fas fa-search"></i>
                </div>
                <div class="brand-text">
                    <h1>
                        Résultats de recherche
                        <span class="search-term">"{{ $validated['q'] }}"</span>
                    </h1>
                    <p class="subtitle">Découvrez les contenus correspondant à votre recherche</p>
                </div>
            </div>
            
            <a href="{{ route('explorer.index') }}" class="btn btn-outline">
                <i class="fas fa-home"></i> Retour à l'explorateur
            </a>
        </div>

        <!-- Filtres actifs -->
        @if(!empty($validated['region']) || !empty($validated['langue']) || !empty($validated['type']))
            <div class="active-filters">
                @if(!empty($validated['region']))
                    @php $region = \App\Models\Region::find($validated['region']) @endphp
                    <span class="filter-badge filter-region">
                        <i class="fas fa-map-marker-alt"></i>
                        Région: {{ $region->nom ?? 'Inconnue' }}
                        <a href="{{ route('explorer.recherche', array_merge($validated, ['region' => null])) }}" 
                           class="filter-remove" title="Supprimer ce filtre">
                            ×
                        </a>
                    </span>
                @endif
                
                @if(!empty($validated['langue']))
                    @php $langue = \App\Models\Langue::find($validated['langue']) @endphp
                    <span class="filter-badge filter-langue">
                        <i class="fas fa-language"></i>
                        Langue: {{ $langue->nom ?? 'Inconnue' }}
                        <a href="{{ route('explorer.recherche', array_merge($validated, ['langue' => null])) }}" 
                           class="filter-remove" title="Supprimer ce filtre">
                            ×
                        </a>
                    </span>
                @endif
                
                @if(!empty($validated['type']))
                    @php $type = \App\Models\TypeContenu::find($validated['type']) @endphp
                    <span class="filter-badge filter-type">
                        <i class="fas fa-tag"></i>
                        Type: {{ $type->nom ?? 'Inconnu' }}
                        <a href="{{ route('explorer.recherche', array_merge($validated, ['type' => null])) }}" 
                           class="filter-remove" title="Supprimer ce filtre">
                            ×
                        </a>
                    </span>
                @endif
                
                <a href="{{ route('explorer.index') }}" class="btn btn-outline">
                    <i class="fas fa-times"></i> Effacer tous les filtres
                </a>
            </div>
        @endif
    </div>

    <!-- Résultats -->
    @if($contenus->isEmpty())
        <!-- État vide -->
        <div class="empty-state fade-in-up">
            <i class="fas fa-search empty-icon"></i>
            <h3>Aucun résultat trouvé</h3>
            <p>
                Aucun contenu ne correspond à votre recherche "{{ $validated['q'] }}".
                Essayez d'autres termes de recherche ou modifiez vos critères de filtrage.
            </p>
            <div style="display: flex; gap: var(--space-sm); justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('explorer.index') }}" class="btn btn-primary">
                    <i class="fas fa-home"></i> Retour à l'explorateur
                </a>
                <a href="{{ route('explorer.recherche') }}" class="btn btn-outline">
                    <i class="fas fa-redo"></i> Nouvelle recherche
                </a>
            </div>
        </div>
    @else
        <div class="search-layout">
            <!-- Filtres latéraux -->
            <div class="filters-sidebar fade-in-up">
                <!-- Filtres de recherche -->
                <div class="filter-card">
                    <div class="filter-card-header">
                        <h3><i class="fas fa-filter"></i> Affiner la recherche</h3>
                    </div>
                    <div class="filter-card-body">
                        <form action="{{ route('explorer.recherche') }}" method="GET" id="filter-form">
                            <input type="hidden" name="q" value="{{ $validated['q'] }}">
                            
                            <div class="filter-group">
                                <label class="filter-label">
                                    <i class="fas fa-tag"></i> Type de contenu
                                </label>
                                <select class="form-control form-select" name="type">
                                    <option value="">Tous les types</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}" 
                                            {{ $validated['type'] == $type->id ? 'selected' : '' }}>
                                            {{ $type->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="filter-group">
                                <label class="filter-label">
                                    <i class="fas fa-map-marker-alt"></i> Région
                                </label>
                                <select class="form-control form-select" name="region">
                                    <option value="">Toutes les régions</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}" 
                                            {{ $validated['region'] == $region->id ? 'selected' : '' }}>
                                            {{ $region->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="filter-group">
                                <label class="filter-label">
                                    <i class="fas fa-language"></i> Langue
                                </label>
                                <select class="form-control form-select" name="langue">
                                    <option value="">Toutes les langues</option>
                                    @foreach($langues as $langue)
                                        <option value="{{ $langue->id }}" 
                                            {{ $validated['langue'] == $langue->id ? 'selected' : '' }}>
                                            {{ $langue->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                <i class="fas fa-search"></i> Appliquer les filtres
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Statistiques -->
                <div class="filter-card stats-card">
                    <div class="filter-card-header">
                        <h3><i class="fas fa-chart-bar"></i> Statistiques</h3>
                    </div>
                    <div class="filter-card-body">
                        <div class="stats-number">{{ $contenus->total() }}</div>
                        <div class="stats-label">Résultats trouvés</div>
                        
                        @if($contenus->total() > 0)
                            <div style="margin-top: var(--space-md); padding-top: var(--space-md); border-top: 1px solid var(--earth-200);">
                                <div style="display: flex; justify-content: space-around;">
                                    <div>
                                        <div style="font-size: 1.5rem; font-weight: 700; color: var(--earth-800);">
                                            {{ $contenus->perPage() }}
                                        </div>
                                        <div style="font-size: 0.85rem; color: var(--earth-600);">
                                            par page
                                        </div>
                                    </div>
                                    <div>
                                        <div style="font-size: 1.5rem; font-weight: 700; color: var(--earth-800);">
                                            {{ $contenus->currentPage() }}
                                        </div>
                                        <div style="font-size: 0.85rem; color: var(--earth-600);">
                                            page
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Liste des résultats -->
            <div class="results-container fade-in-up">
                <!-- Grille de résultats -->
                <div class="results-grid">
                    @foreach($contenus as $contenu)
                        @php
                            $isImage = function($path) {
                                $extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'];
                                $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                                return in_array($extension, $extensions);
                            };
                            
                            $firstMedia = $contenu->medias->first();
                            $hasImage = $firstMedia && $isImage($firstMedia->chemin);
                        @endphp
                        
                        <div class="content-card">
                            <div class="card-media">
                                @if($hasImage)
                                    <img src="{{ asset('storage/' . $firstMedia->chemin) }}" 
                                         class="card-image" 
                                         alt="{{ $contenu->titre }}"
                                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'">
                                @else
                                    <div class="card-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                @endif
                                
                                <span class="card-badge">
                                    <i class="fas fa-tag"></i> {{ $contenu->type->nom ?? 'Type' }}
                                </span>
                            </div>
                            
                            <div class="card-content">
                                <h3 class="card-title">{{ $contenu->titre }}</h3>
                                
                                <p class="card-excerpt">
                                    {{ Str::limit(strip_tags($contenu->texte), 150) }}
                                </p>
                                
                                <div class="card-meta">
                                    <span class="meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $contenu->region->nom ?? 'Région inconnue' }}
                                    </span>
                                    <span class="meta-item">
                                        <i class="fas fa-language"></i>
                                        {{ $contenu->langue->nom ?? 'Langue inconnue' }}
                                    </span>
                                    @if($contenu->date_creation)
                                        <span class="meta-item">
                                            <i class="far fa-calendar"></i>
                                            {{ $contenu->date_creation->format('d/m/Y') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <div class="card-author">
                                    <i class="fas fa-user"></i>
                                    {{ $contenu->auteur->name ?? 'Auteur inconnu' }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                @if($contenus->hasPages())
                    <div class="pagination-container">
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
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            
            // Observer les cartes de contenu
            document.querySelectorAll('.content-card').forEach(card => {
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
            
            // Mise à jour automatique des filtres
            const filterSelects = document.querySelectorAll('#filter-form select');
            filterSelects.forEach(select => {
                select.addEventListener('change', function() {
                    // Mise en évidence visuelle
                    if (this.value) {
                        this.style.borderColor = 'var(--primary-red)';
                        this.style.boxShadow = '0 0 0 3px rgba(139, 30, 30, 0.1)';
                    } else {
                        this.style.borderColor = 'var(--earth-300)';
                        this.style.boxShadow = 'none';
                    }
                });
            });
            
            // Surligner les termes de recherche dans les résultats
            const searchTerm = "{{ $validated['q'] }}".toLowerCase();
            if (searchTerm && searchTerm.length > 2) {
                const cardTitles = document.querySelectorAll('.card-title');
                const cardExcerpts = document.querySelectorAll('.card-excerpt');
                
                const highlightText = (element) => {
                    const html = element.innerHTML;
                    const regex = new RegExp(`(${searchTerm})`, 'gi');
                    const highlighted = html.replace(regex, '<mark style="background: var(--gold-100); color: var(--earth-800); padding: 0.1rem 0.25rem; border-radius: 0.25rem;">$1</mark>');
                    element.innerHTML = highlighted;
                };
                
                cardTitles.forEach(highlightText);
                cardExcerpts.forEach(highlightText);
            }
        });
    </script>
</body>
</html>