<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes commentaires - BéninCulture</title>
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
            background: linear-gradient(135deg, var(--primary-cream) 0%, var(--earth-50) 100%);
            color: var(--earth-800);
            line-height: 1.6;
            min-height: 100vh;
        }
        
        /* ===== HEADER PROFESSIONNEL ===== */
        .comments-header {
            background: var(--primary-cream);
            padding: 1.25rem 0;
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid var(--earth-200);
            margin-bottom: 2rem;
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
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem 4rem;
            animation: fadeInUp 0.6s ease forwards;
        }
        
        /* ===== HEADER DE PAGE ===== */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid var(--earth-200);
        }
        
        .page-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: var(--earth-800);
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .page-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--gradient-primary);
            margin-top: 0.5rem;
            border-radius: 2px;
        }
        
        /* ===== ALERTES ===== */
        .alert {
            padding: 1.5rem;
            border-radius: var(--radius-lg);
            margin-bottom: 2rem;
            border: 1px solid transparent;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            animation: slideIn 0.5s ease;
        }
        
        .alert-success {
            background: linear-gradient(135deg, var(--earth-50), var(--gold-50));
            border-color: var(--primary-gold);
            color: var(--earth-800);
            border-left: 4px solid var(--primary-gold);
        }
        
        .alert-info {
            background: linear-gradient(135deg, var(--earth-50), var(--red-50));
            border-color: var(--earth-400);
            color: var(--earth-800);
            border-left: 4px solid var(--primary-red);
        }
        
        .alert-link {
            color: var(--primary-red);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .alert-link:hover {
            color: var(--earth-800);
            text-decoration: underline;
        }
        
        .alert-dismissible {
            position: relative;
            padding-right: 3rem;
        }
        
        .btn-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 1.2rem;
            color: var(--earth-600);
            cursor: pointer;
            transition: color 0.2s ease;
        }
        
        .btn-close:hover {
            color: var(--primary-red);
        }
        
        /* ===== ÉTAT VIDE ===== */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-md);
            margin: 2rem 0;
        }
        
        .empty-icon {
            font-size: 3.5rem;
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
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* ===== GRILLE DE COMMENTAIRES ===== */
        .comments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .comment-card {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
            animation: fadeInUp 0.5s ease forwards;
            opacity: 0;
        }
        
        .comment-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-gold);
        }
        
        .comment-header {
            background: linear-gradient(135deg, var(--primary-red), var(--earth-800));
            padding: 1.5rem;
            color: white;
            position: relative;
        }
        
        .comment-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 2rem;
            width: 20px;
            height: 20px;
            background: var(--earth-800);
            transform: rotate(45deg);
        }
        
        .comment-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        
        .comment-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .comment-rating {
            display: flex;
            gap: 2px;
            margin-top: 0.5rem;
        }
        
        .star {
            color: var(--gold-500);
            font-size: 0.9rem;
        }
        
        .star-empty {
            color: rgba(255, 255, 255, 0.3);
        }
        
        .comment-body {
            padding: 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .comment-text {
            color: var(--earth-700);
            line-height: 1.7;
            margin-bottom: 1.5rem;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .comment-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 1.5rem;
            border-top: 1px solid var(--earth-200);
            font-size: 0.9rem;
        }
        
        .comment-date {
            color: var(--earth-600);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .comment-actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.2s ease;
            border: 1px solid transparent;
            font-size: 0.9rem;
        }
        
        .action-view {
            background: var(--earth-50);
            color: var(--earth-700);
            border-color: var(--earth-300);
        }
        
        .action-view:hover {
            background: var(--earth-100);
            border-color: var(--earth-500);
            color: var(--earth-800);
        }
        
        .action-edit {
            background: var(--gold-50);
            color: var(--gold-700);
            border-color: var(--gold-300);
        }
        
        .action-edit:hover {
            background: var(--gold-100);
            border-color: var(--gold-500);
            color: var(--gold-800);
        }
        
        .action-delete {
            background: var(--red-50);
            color: var(--red-600);
            border-color: var(--red-300);
        }
        
        .action-delete:hover {
            background: var(--red-100);
            border-color: var(--red-500);
            color: var(--red-700);
        }
        
        .comment-footer {
            background: var(--earth-50);
            padding: 1rem 2rem;
            border-top: 1px solid var(--earth-200);
            font-size: 0.9rem;
        }
        
        .footer-info {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            color: var(--earth-600);
        }
        
        .footer-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        /* ===== PAGINATION ===== */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }
        
        .pagination {
            display: flex;
            gap: 0.5rem;
            list-style: none;
            background: white;
            padding: 1rem 1.5rem;
            border-radius: var(--radius-lg);
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
            min-width: 40px;
            height: 40px;
            border-radius: var(--radius-sm);
            background: white;
            color: var(--earth-700);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            border: 1px solid var(--earth-300);
            padding: 0 0.75rem;
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
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* ===== MODAL DE CONFIRMATION ===== */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 10, 10, 0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }
        
        .modal-content {
            background: white;
            border-radius: var(--radius-xl);
            padding: 3rem;
            max-width: 500px;
            width: 90%;
            text-align: center;
            box-shadow: var(--shadow-xl);
            animation: slideUp 0.3s ease;
        }
        
        .modal-title {
            font-family: 'Playfair Display', serif;
            color: var(--earth-800);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        
        .modal-text {
            color: var(--earth-600);
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        
        .btn-modal-cancel {
            background: var(--earth-100);
            color: var(--earth-700);
            border: 1px solid var(--earth-300);
        }
        
        .btn-modal-confirm {
            background: var(--gradient-primary);
            color: white;
            border: none;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .comments-grid {
                grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
            }
        }
        
        @media (max-width: 992px) {
            .comments-grid {
                grid-template-columns: 1fr;
                max-width: 700px;
                margin: 0 auto 3rem;
            }
            
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.5rem;
            }
            
            .page-title {
                font-size: 1.8rem;
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
                padding: 0 1.5rem 3rem;
            }
            
            .comment-card {
                height: auto;
            }
            
            .comment-header {
                padding: 1.25rem;
            }
            
            .comment-body {
                padding: 1.5rem;
            }
            
            .comment-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .comment-actions {
                align-self: flex-end;
            }
            
            .footer-info {
                flex-direction: column;
                gap: 0.75rem;
            }
        }
        
        @media (max-width: 480px) {
            .header-container,
            .main-container {
                padding: 0 1rem;
            }
            
            .page-title {
                font-size: 1.5rem;
            }
            
            .comment-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .modal-content {
                padding: 2rem 1.5rem;
            }
            
            .modal-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="comments-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="brand-text">
                    <h1>BéninCulture</h1>
                    <div class="subtitle">Vos contributions</div>
                </div>
            </div>
            
            <div class="header-nav">
                <a href="{{ route('explorer.index') }}" class="nav-category">
                    <i class="fas fa-compass"></i> Explorer
                </a>
                <a href="{{ route('commentaires.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Nouveau commentaire
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="main-container">
        <!-- En-tête de page -->
        <div class="page-header">
            <div>
                <h1 class="page-title">
                    <i class="fas fa-comments"></i> Mes commentaires
                </h1>
                <p class="text-muted mt-2">Retrouvez ici tous les commentaires que vous avez publiés</p>
            </div>
            <a href="{{ route('commentaires.create') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-plus-circle"></i> Ajouter un commentaire
            </a>
        </div>

        <!-- Alertes -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible" id="successAlert">
                <i class="fas fa-check-circle" style="color: var(--primary-gold); font-size: 1.2rem;"></i>
                <div>
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close" onclick="dismissAlert('successAlert')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        <!-- État vide -->
        @if($commentaires->isEmpty())
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="fas fa-comment-slash"></i>
                </div>
                <h3>Aucun commentaire pour le moment</h3>
                <p>
                    Vous n'avez pas encore commenté de contenu culturel. 
                    Explorez les contenus publiés et partagez vos impressions.
                </p>
                <div class="mt-4">
                    <a href="{{ route('explorer.index') }}" class="btn btn-primary">
                        <i class="fas fa-compass"></i> Explorer les contenus
                    </a>
                    <a href="{{ route('commentaires.create') }}" class="btn btn-outline ml-3">
                        <i class="fas fa-plus"></i> Créer un commentaire
                    </a>
                </div>
            </div>
        @else
            <!-- Grille de commentaires -->
            <div class="comments-grid">
                @foreach($commentaires as $index => $commentaire)
                    <div class="comment-card" style="animation-delay: {{ $index * 0.1 }}s;">
                        <!-- En-tête de carte -->
                        <div class="comment-header">
                            <div class="comment-title">
                                <span>{{ $commentaire->contenu->titre }}</span>
                                <span class="comment-badge">
                                    {{ $commentaire->contenu->type->nom }}
                                </span>
                            </div>
                            
                            @if($commentaire->note)
                                <div class="comment-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $commentaire->note ? 'star' : 'star-empty' }}"></i>
                                    @endfor
                                </div>
                            @endif
                        </div>
                        
                        <!-- Corps de carte -->
                        <div class="comment-body">
                            <div class="comment-text">
                                {{ Str::limit($commentaire->texte, 200) }}
                            </div>
                            
                            <div class="comment-meta">
                                <div class="comment-date">
                                    <i class="far fa-calendar"></i>
                                    {{ $commentaire->date->format('d/m/Y à H:i') }}
                                </div>
                                
                                <div class="comment-actions">
                                    <a href="{{ route('commentaires.show', $commentaire) }}" 
                                       class="action-btn action-view"
                                       title="Voir le détail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('commentaires.edit', $commentaire) }}" 
                                       class="action-btn action-edit"
                                       title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            class="action-btn action-delete delete-comment"
                                            data-comment-id="{{ $commentaire->id }}"
                                            data-comment-title="{{ $commentaire->contenu->titre }}"
                                            title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pied de carte -->
                        <div class="comment-footer">
                            <div class="footer-info">
                                <div class="footer-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{ $commentaire->contenu->region->nom }}</span>
                                </div>
                                <div class="footer-item">
                                    <i class="fas fa-language"></i>
                                    <span>{{ $commentaire->contenu->langue->nom ?? 'Non spécifié' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($commentaires->hasPages())
                <div class="pagination-container">
                    <ul class="pagination">
                        {{-- Lien précédent --}}
                        @if($commentaires->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="fas fa-chevron-left"></i>
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $commentaires->previousPageUrl() }}">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Numéros de page --}}
                        @php
                            $current = $commentaires->currentPage();
                            $last = $commentaires->lastPage();
                            $start = max(1, $current - 2);
                            $end = min($last, $current + 2);
                        @endphp

                        @if($start > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $commentaires->url(1) }}">1</a>
                            </li>
                            @if($start > 2)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                            @endif
                        @endif

                        @for($page = $start; $page <= $end; $page++)
                            <li class="page-item {{ $page == $current ? 'active' : '' }}">
                                <a class="page-link" href="{{ $commentaires->url($page) }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endfor

                        @if($end < $last)
                            @if($end < $last - 1)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link" href="{{ $commentaires->url($last) }}">
                                    {{ $last }}
                                </a>
                            </li>
                        @endif

                        {{-- Lien suivant --}}
                        @if($commentaires->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $commentaires->nextPageUrl() }}">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </li>
                        @endif
                    </ul>
                </div>
            @endif
        @endif
    </main>

    <!-- Modal de confirmation de suppression -->
    <div class="modal-overlay" id="deleteModal">
        <div class="modal-content">
            <h3 class="modal-title">
                <i class="fas fa-exclamation-triangle" style="color: var(--primary-red);"></i>
                Confirmer la suppression
            </h3>
            <p class="modal-text" id="modalText">
                Êtes-vous sûr de vouloir supprimer ce commentaire ? Cette action est irréversible.
            </p>
            <form id="deleteForm" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            <div class="modal-actions">
                <button type="button" class="btn btn-modal-cancel" onclick="closeModal()">
                    <i class="fas fa-times"></i> Annuler
                </button>
                <button type="button" class="btn btn-modal-confirm" onclick="confirmDelete()">
                    <i class="fas fa-trash"></i> Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation des cartes
            const commentCards = document.querySelectorAll('.comment-card');
            commentCards.forEach(card => {
                card.style.opacity = '1';
            });
            
            // Gestion des alertes
            window.dismissAlert = function(alertId) {
                const alert = document.getElementById(alertId);
                if (alert) {
                    alert.style.transform = 'translateX(-100%)';
                    alert.style.opacity = '0';
                    setTimeout(() => {
                        alert.style.display = 'none';
                    }, 300);
                }
            };
            
            // Gestion de la suppression
            let currentDeleteForm = null;
            
            document.querySelectorAll('.delete-comment').forEach(button => {
                button.addEventListener('click', function() {
                    const commentId = this.dataset.commentId;
                    const commentTitle = this.dataset.commentTitle;
                    
                    // Mettre à jour le texte du modal
                    document.getElementById('modalText').textContent = 
                        `Êtes-vous sûr de vouloir supprimer votre commentaire sur "${commentTitle}" ? Cette action est irréversible.`;
                    
                    // Mettre à jour le formulaire
                    const form = document.getElementById('deleteForm');
                    form.action = `/commentaires/${commentId}`;
                    
                    // Afficher le modal
                    document.getElementById('deleteModal').style.display = 'flex';
                });
            });
            
            // Fermer le modal
            window.closeModal = function() {
                document.getElementById('deleteModal').style.display = 'none';
            };
            
            // Confirmer la suppression
            window.confirmDelete = function() {
                document.getElementById('deleteForm').submit();
            };
            
            // Fermer le modal en cliquant en dehors
            document.getElementById('deleteModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });
            
            // Animations au défilement
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            // Observer les cartes
            commentCards.forEach(card => {
                observer.observe(card);
            });
            
            // Gestion du responsive
            function handleResponsive() {
                const grid = document.querySelector('.comments-grid');
                if (window.innerWidth < 768) {
                    grid.style.gridTemplateColumns = '1fr';
                } else {
                    grid.style.gridTemplateColumns = 'repeat(auto-fill, minmax(500px, 1fr))';
                }
            }
            
            window.addEventListener('resize', handleResponsive);
            handleResponsive();
        });
    </script>
    @if(Auth::check())
    @include('components.footer-styles')

    @if(Auth::user()->role === 'contributeur')
        @include('components.footer-contributor')
    @elseif(Auth::user()->role === 'user')
        @include('components.footer-user')
    @endif
@endif
</body>
</html>