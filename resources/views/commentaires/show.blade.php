<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du commentaire - BéninCulture</title>
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
        .detail-header {
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
        
        /* ===== CARTE PRINCIPALE ===== */
        .detail-card {
            background: var(--gradient-card);
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--earth-200);
            margin-bottom: 3rem;
        }
        
        /* ===== EN-TÊTE DE CARTE ===== */
        .card-header-main {
            background: linear-gradient(135deg, var(--earth-200), var(--earth-300));
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid var(--earth-400);
        }
        
        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--earth-800);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .card-actions {
            display: flex;
            gap: 0.75rem;
        }
        
        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.2s ease;
            border: 1px solid transparent;
            font-size: 1rem;
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
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
        
        .action-delete {
            background: var(--red-50);
            color: var(--red-600);
            border-color: var(--red-300);
            cursor: pointer;
        }
        
        .action-delete:hover {
            background: var(--red-100);
            border-color: var(--red-500);
            color: var(--red-700);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
        
        /* ===== CORPS DE CARTE ===== */
        .card-body-main {
            padding: 2.5rem;
        }
        
        /* ===== INFORMATIONS PRINCIPALES ===== */
        .content-header {
            margin-bottom: 2.5rem;
        }
        
        .content-title {
            font-size: 1.6rem;
            color: var(--earth-800);
            margin-bottom: 1rem;
            font-weight: 600;
            line-height: 1.4;
        }
        
        .meta-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 1rem;
            align-items: center;
        }
        
        .badge {
            padding: 0.5rem 1.25rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .badge-type {
            background: linear-gradient(135deg, var(--primary-red), var(--red-600));
            color: white;
        }
        
        .badge-region {
            background: linear-gradient(135deg, var(--earth-600), var(--earth-800));
            color: white;
        }
        
        .rating-badge {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            color: var(--gold-600);
            font-weight: 500;
        }
        
        .star {
            color: var(--gold-500);
        }
        
        .star-empty {
            color: var(--earth-300);
        }
        
        .date-badge {
            color: var(--earth-600);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        /* ===== CONTENU DU COMMENTAIRE ===== */
        .comment-content {
            background: linear-gradient(135deg, var(--earth-50), white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin-bottom: 2.5rem;
            border: 1px solid var(--earth-200);
            position: relative;
        }
        
        .comment-content::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 1.5rem;
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            color: var(--earth-300);
            line-height: 1;
        }
        
        .comment-text {
            color: var(--earth-700);
            line-height: 1.8;
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }
        
        /* ===== MÉTADONNÉES ===== */
        .metadata-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }
        
        .metadata-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            border: 1px solid var(--earth-200);
            transition: all 0.2s ease;
        }
        
        .metadata-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        
        .metadata-title {
            font-weight: 600;
            color: var(--earth-700);
            margin-bottom: 1rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .metadata-value {
            color: var(--earth-800);
            font-size: 1.1rem;
            font-weight: 500;
        }
        
        .metadata-badge {
            display: inline-block;
            padding: 0.4rem 1rem;
            border-radius: var(--radius-sm);
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .status-published {
            background: linear-gradient(135deg, var(--gold-100), var(--gold-200));
            color: var(--gold-800);
        }
        
        .status-draft {
            background: linear-gradient(135deg, var(--earth-100), var(--earth-200));
            color: var(--earth-800);
        }
        
        /* ===== CONTENU COMMENTÉ ===== */
        .content-card {
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.05), rgba(59, 130, 246, 0.05));
            border-radius: var(--radius-xl);
            border: 1px solid rgba(14, 165, 233, 0.2);
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .content-card-header {
            background: linear-gradient(135deg, var(--earth-800), var(--primary-black));
            padding: 1.5rem;
            color: white;
        }
        
        .content-card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .content-card-body {
            padding: 2rem;
        }
        
        .content-excerpt {
            color: var(--earth-700);
            line-height: 1.7;
            margin-bottom: 1.5rem;
            font-style: italic;
        }
        
        .content-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1.5rem;
            border-top: 1px solid var(--earth-200);
        }
        
        .author-info {
            color: var(--earth-600);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .btn-link {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .btn-link:hover {
            color: var(--earth-800);
            gap: 0.75rem;
        }
        
        /* ===== PIED DE CARTE ===== */
        .card-footer-main {
            background: var(--earth-50);
            padding: 1.5rem 2rem;
            border-top: 1px solid var(--earth-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .footer-actions {
            display: flex;
            gap: 1rem;
        }
        
        .btn-lg {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border-radius: var(--radius-md);
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
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
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
        
        @keyframes highlight {
            0%, 100% {
                background-color: transparent;
            }
            50% {
                background-color: var(--gold-50);
            }
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .metadata-grid {
                grid-template-columns: 1fr;
            }
            
            .card-footer-main {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .footer-actions {
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
            
            .card-header-main {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
                padding: 1.25rem;
            }
            
            .card-actions {
                align-self: flex-end;
            }
            
            .card-body-main {
                padding: 1.5rem;
            }
            
            .content-title {
                font-size: 1.3rem;
            }
            
            .meta-tags {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .date-badge {
                align-self: flex-end;
            }
            
            .comment-content {
                padding: 1.5rem;
            }
            
            .content-footer {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
            
            .author-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .btn-lg {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .header-container,
            .main-container {
                padding: 0 1rem;
            }
            
            .card-title {
                font-size: 1.4rem;
            }
            
            .content-card-body {
                padding: 1.5rem;
            }
            
            .modal-content {
                padding: 2rem 1.5rem;
            }
            
            .modal-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="detail-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-comment-dots"></i>
                </div>
                <div class="brand-text">
                    <h1>BéninCulture</h1>
                    <div class="subtitle">Vos contributions</div>
                </div>
            </div>
            
            <div class="header-nav">
                <a href="{{ route('commentaires.index') }}" class="nav-category">
                    <i class="fas fa-list"></i> Mes commentaires
                </a>
                <a href="{{ route('explorer.index') }}" class="nav-category">
                    <i class="fas fa-compass"></i> Explorer
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="main-container">
        <!-- Carte de détail -->
        <div class="detail-card">
            <!-- En-tête -->
            <div class="card-header-main">
                <h2 class="card-title">
                    <i class="fas fa-comment-dots"></i>
                    Détail du commentaire
                </h2>
                <div class="card-actions">
                    <a href="{{ route('commentaires.edit', $commentaire) }}" 
                       class="action-btn action-edit"
                       title="Modifier">
                        <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" 
                            class="action-btn action-delete delete-comment"
                            title="Supprimer">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            
            <!-- Corps -->
            <div class="card-body-main">
                <!-- Informations principales -->
                <div class="content-header">
                    <h3 class="content-title">{{ $commentaire->contenu->titre }}</h3>
                    
                    <div class="meta-tags">
                        <span class="badge badge-type">
                            <i class="fas fa-tag"></i>
                            {{ $commentaire->contenu->type->nom }}
                        </span>
                        <span class="badge badge-region">
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $commentaire->contenu->region->nom }}
                        </span>
                        
                        @if($commentaire->note)
                            <div class="rating-badge">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= $commentaire->note ? 'star' : 'star-empty' }}"></i>
                                @endfor
                                <span>{{ $commentaire->note }}/5</span>
                            </div>
                        @endif
                        
                        <div class="date-badge ms-auto">
                            <i class="far fa-calendar"></i>
                            {{ $commentaire->date->format('d/m/Y H:i') }}
                        </div>
                    </div>
                </div>
                
                <!-- Contenu du commentaire -->
                <div class="comment-content">
                    <p class="comment-text">{{ $commentaire->texte }}</p>
                </div>
                
                <!-- Métadonnées -->
                <div class="metadata-grid">
                    <div class="metadata-card">
                        <div class="metadata-title">
                            <i class="fas fa-user"></i>
                            Auteur du commentaire
                        </div>
                        <div class="metadata-value">
                            {{ $commentaire->utilisateur->name ?? 'Vous' }}
                        </div>
                    </div>
                    
                    <div class="metadata-card">
                        <div class="metadata-title">
                            <i class="far fa-calendar-alt"></i>
                            Date de publication
                        </div>
                        <div class="metadata-value">
                            {{ $commentaire->date->format('d/m/Y à H:i') }}
                        </div>
                    </div>
                    
                    <div class="metadata-card">
                        <div class="metadata-title">
                            <i class="fas fa-language"></i>
                            Langue du contenu
                        </div>
                        <div class="metadata-value">
                            {{ $commentaire->contenu->langue->nom ?? 'Non spécifié' }}
                        </div>
                    </div>
                    
                    <div class="metadata-card">
                        <div class="metadata-title">
                            <i class="fas fa-check-circle"></i>
                            Statut du contenu
                        </div>
                        <div class="metadata-value">
                            <span class="metadata-badge {{ $commentaire->contenu->statut === 'publié' ? 'status-published' : 'status-draft' }}">
                                <i class="fas fa-{{ $commentaire->contenu->statut === 'publié' ? 'check' : 'clock' }}"></i>
                                {{ ucfirst($commentaire->contenu->statut) }}
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Contenu commenté -->
                <div class="content-card">
                    <div class="content-card-header">
                        <h4 class="content-card-title">
                            <i class="fas fa-book-open"></i>
                            Contenu commenté
                        </h4>
                    </div>
                    <div class="content-card-body">
                        <h5 class="mb-3" style="color: var(--earth-800);">{{ $commentaire->contenu->titre }}</h5>
                        <p class="content-excerpt">
                            {{ Str::limit($commentaire->contenu->texte, 300) }}
                        </p>
                        <div class="content-footer">
                            <div class="author-info">
                                <span>
                                    <i class="fas fa-user"></i>
                                    {{ $commentaire->contenu->auteur->name ?? 'Auteur inconnu' }}
                                </span>
                                <span>
                                    <i class="fas fa-calendar"></i>
                                    {{ $commentaire->contenu->date_creation->format('d/m/Y') }}
                                </span>
                            </div>
                            <a href="{{ route('explorer.show', $commentaire->contenu) }}" 
                               class="btn-link">
                                Voir le contenu complet
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pied de carte -->
            <div class="card-footer-main">
                <a href="{{ route('commentaires.index') }}" class="btn btn-secondary btn-lg">
                    <i class="fas fa-arrow-left"></i>
                    Retour à mes commentaires
                </a>
                <div class="footer-actions">
                    <a href="{{ route('explorer.show', $commentaire->contenu) }}" 
                       class="btn btn-primary btn-lg">
                        <i class="fas fa-comments"></i>
                        Voir tous les commentaires
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal de confirmation de suppression -->
    <div class="modal-overlay" id="deleteModal">
        <div class="modal-content">
            <h3 class="modal-title">
                <i class="fas fa-exclamation-triangle" style="color: var(--primary-red);"></i>
                Confirmer la suppression
            </h3>
            <p class="modal-text" id="modalText">
                Êtes-vous sûr de vouloir supprimer ce commentaire ?<br>
                Cette action est irréversible.
            </p>
            <form id="deleteForm" method="POST" action="{{ route('commentaires.destroy', $commentaire) }}" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            <div class="modal-actions">
                <button type="button" class="btn btn-modal-cancel" onclick="closeModal()">
                    <i class="fas fa-times"></i> Annuler
                </button>
                <button type="button" class="btn btn-modal-confirm" onclick="confirmDelete()">
                    <i class="fas fa-trash"></i> Supprimer définitivement
                </button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation d'entrée
            const detailCard = document.querySelector('.detail-card');
            detailCard.style.opacity = '0';
            detailCard.style.transform = 'translateY(30px)';
            detailCard.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            
            setTimeout(() => {
                detailCard.style.opacity = '1';
                detailCard.style.transform = 'translateY(0)';
            }, 100);
            
            // Animation du contenu du commentaire
            const commentText = document.querySelector('.comment-text');
            commentText.style.animation = 'highlight 2s ease-in-out';
            
            // Gestion de la suppression
            const deleteBtn = document.querySelector('.delete-comment');
            deleteBtn.addEventListener('click', function() {
                document.getElementById('deleteModal').style.display = 'flex';
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
            
            // Animation des cartes de métadonnées au survol
            const metadataCards = document.querySelectorAll('.metadata-card');
            metadataCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Gestion du responsive
            function handleResponsive() {
                const metaTags = document.querySelector('.meta-tags');
                if (window.innerWidth < 768) {
                    metaTags.style.flexDirection = 'column';
                    metaTags.style.alignItems = 'flex-start';
                } else {
                    metaTags.style.flexDirection = 'row';
                    metaTags.style.alignItems = 'center';
                }
            }
            
            window.addEventListener('resize', handleResponsive);
            handleResponsive();
            
            // Ajout d'un effet de focus sur le commentaire
            const commentContent = document.querySelector('.comment-content');
            commentContent.addEventListener('click', function() {
                this.style.transform = 'scale(1.01)';
                this.style.boxShadow = 'var(--shadow-xl)';
                setTimeout(() => {
                    this.style.transform = '';
                    this.style.boxShadow = '';
                }, 300);
            });
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