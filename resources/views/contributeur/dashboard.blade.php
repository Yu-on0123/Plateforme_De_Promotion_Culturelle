<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - BéninCulture Contributeur</title>
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
        .dashboard-header {
            background: var(--primary-cream);
            padding: 1.25rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid var(--earth-200);
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
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        
        .welcome-text {
            text-align: right;
        }
        
        .welcome-text .name {
            font-size: 1rem;
            color: var(--earth-800);
            font-weight: 600;
            display: block;
        }
        
        .welcome-text .role {
            font-size: 0.85rem;
            color: var(--primary-red);
            font-weight: 500;
        }
        
        .header-actions {
            display: flex;
            gap: 0.75rem;
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
        
        .btn-outline {
            background: transparent;
            color: var(--primary-red);
            border-color: var(--earth-300);
        }
        
        .btn-outline:hover {
            background: var(--red-50);
            border-color: var(--primary-red);
            transform: translateY(-1px);
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
        
        .btn-logout {
            background: var(--red-50);
            color: var(--primary-red);
            border: 1px solid var(--red-200);
        }
        
        .btn-logout:hover {
            background: var(--primary-red);
            color: white;
        }
        
        /* ===== CONTENU PRINCIPAL ===== */
        .dashboard-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }
        
        /* Section de bienvenue */
        .welcome-section {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
            text-align: center;
        }
        
        .welcome-content {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .welcome-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--earth-800);
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .welcome-subtitle {
            font-size: 1.1rem;
            color: var(--earth-600);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        /* Grille de statistiques */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 1.75rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-primary);
        }
        
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-gold);
        }
        
        .stat-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-md);
            background: var(--gradient-subtle);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
            font-size: 1.25rem;
        }
        
        .stat-title {
            font-size: 1rem;
            color: var(--earth-700);
            font-weight: 500;
        }
        
        .stat-value {
            font-family: 'Playfair Display', serif;
            font-size: 2.25rem;
            color: var(--primary-red);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .stat-description {
            font-size: 0.9rem;
            color: var(--earth-600);
            margin-bottom: 1rem;
        }
        
        .stat-action {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid var(--earth-200);
        }
        
        .stat-action .btn {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }
        
        /* Section actions rapides */
        .quick-actions-section {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--earth-200);
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            font-weight: 600;
        }
        
        .section-subtitle {
            font-size: 0.95rem;
            color: var(--earth-600);
            margin-top: 0.25rem;
        }
        
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .action-card {
            background: white;
            border-radius: var(--radius-md);
            padding: 1.75rem;
            text-decoration: none;
            color: var(--earth-800);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 1.25rem;
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-sm);
        }
        
        .action-card:hover {
            transform: translateY(-3px);
            border-color: var(--primary-red);
            box-shadow: var(--shadow-md);
        }
        
        .action-card:hover .action-icon {
            background: var(--gradient-primary);
            color: white;
        }
        
        .action-icon {
            width: 56px;
            height: 56px;
            border-radius: var(--radius-md);
            background: var(--gradient-subtle);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-red);
            flex-shrink: 0;
            transition: all 0.2s ease;
        }
        
        .action-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--earth-800);
            margin-bottom: 0.5rem;
        }
        
        .action-content p {
            font-size: 0.9rem;
            color: var(--earth-600);
            line-height: 1.5;
        }
        
        /* Section contenus récents */
        .recent-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .recent-card {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
        }
        
        .recent-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--earth-200);
        }
        
        .recent-card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--earth-800);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .recent-list {
            max-height: 350px;
            overflow-y: auto;
            padding-right: 0.5rem;
        }
        
        .recent-list::-webkit-scrollbar {
            width: 6px;
        }
        
        .recent-list::-webkit-scrollbar-track {
            background: var(--earth-100);
            border-radius: 3px;
        }
        
        .recent-list::-webkit-scrollbar-thumb {
            background: var(--primary-red);
            border-radius: 3px;
        }
        
        .recent-item {
            padding: 1.25rem;
            background: white;
            border-radius: var(--radius-sm);
            border: 1px solid var(--earth-200);
            margin-bottom: 1rem;
            transition: all 0.2s ease;
        }
        
        .recent-item:hover {
            border-color: var(--primary-gold);
            box-shadow: var(--shadow-sm);
        }
        
        .recent-item:last-child {
            margin-bottom: 0;
        }
        
        .content-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 0.75rem;
            flex-wrap: wrap;
        }
        
        .content-status {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .status-published {
            background: rgba(0, 128, 0, 0.1);
            color: #059669;
            border: 1px solid rgba(0, 128, 0, 0.2);
        }
        
        .status-draft {
            background: rgba(245, 158, 11, 0.1);
            color: var(--gold-600);
            border: 1px solid rgba(245, 158, 11, 0.2);
        }
        
        .content-type {
            color: var(--earth-600);
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .content-title {
            font-weight: 600;
            color: var(--earth-800);
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        
        .content-title a {
            color: var(--primary-red);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .content-title a:hover {
            color: var(--earth-800);
            text-decoration: underline;
        }
        
        .content-date {
            font-size: 0.85rem;
            color: var(--earth-600);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .content-actions {
            display: flex;
            gap: 0.75rem;
            margin-top: 1rem;
        }
        
        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.8rem;
        }
        
        /* Section statistiques finales */
        .final-stats {
            background: linear-gradient(135deg, var(--primary-red), var(--earth-800));
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            color: white;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-lg);
        }
        
        .final-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }
        
        .final-stat-item {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .final-stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-gold);
            margin-bottom: 0.5rem;
        }
        
        .final-stat-title {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.9);
        }
        
        /* Navigation rapide */
        .quick-nav-section {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
        }
        
        .quick-nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .nav-card {
            background: white;
            border-radius: var(--radius-md);
            padding: 1.5rem;
            text-decoration: none;
            color: var(--earth-800);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 1rem;
            border: 1px solid var(--earth-200);
            box-shadow: var(--shadow-sm);
        }
        
        .nav-card:hover {
            transform: translateY(-2px);
            border-color: var(--primary-red);
            box-shadow: var(--shadow-md);
            background: var(--gradient-subtle);
        }
        
        .nav-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-md);
            background: var(--gradient-subtle);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
            font-size: 1.25rem;
        }
        
        .nav-content h4 {
            font-size: 1rem;
            color: var(--earth-800);
            margin-bottom: 0.25rem;
        }
        
        .nav-content p {
            font-size: 0.85rem;
            color: var(--earth-600);
        }
        
        /* Footer */
        .dashboard-footer {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--earth-200);
            text-align: center;
            color: var(--earth-600);
            font-size: 0.9rem;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }
        
        .footer-links a {
            color: var(--earth-600);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary-red);
        }
        
        /* États vides */
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            color: var(--earth-600);
        }
        
        .empty-icon {
            font-size: 3rem;
            color: var(--earth-400);
            margin-bottom: 1rem;
        }
        
        .empty-state h4 {
            font-size: 1.25rem;
            color: var(--earth-700);
            margin-bottom: 0.5rem;
        }
        
        .empty-state p {
            margin-bottom: 1.5rem;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .dashboard-container {
                padding: 0 1.5rem;
            }
            
            .recent-section {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .user-info {
                flex-direction: column;
                gap: 1rem;
            }
            
            .welcome-text {
                text-align: center;
            }
            
            .header-actions {
                justify-content: center;
            }
            
            .welcome-section {
                padding: 1.5rem;
            }
            
            .welcome-title {
                font-size: 1.75rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .actions-grid {
                grid-template-columns: 1fr;
            }
            
            .recent-section {
                grid-template-columns: 1fr;
            }
            
            .final-stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .quick-nav-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .dashboard-container {
                padding: 0 1rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .final-stats-grid {
                grid-template-columns: 1fr;
            }
            
            .quick-nav-grid {
                grid-template-columns: 1fr;
            }
            
            .action-card {
                flex-direction: column;
                text-align: center;
            }
            
            .btn {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header professionnel -->
    <header class="dashboard-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="brand-text">
                    <h1>BéninCulture</h1>
                    <div class="subtitle">Tableau de bord contributeur</div>
                </div>
            </div>
            
            <div class="user-info">
                <div class="welcome-text">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">Contributeur culturel</span>
                </div>
                <div class="header-actions">
                    <a href="{{ route('explorer.index') }}" class="btn btn-outline">
                        <i class="fas fa-compass"></i> Explorer
                    </a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-logout">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Contenu principal -->
    <main class="dashboard-container">
        <!-- Section de bienvenue -->
        <section class="welcome-section">
            <div class="welcome-content">
                <h2 class="welcome-title">Bonjour, {{ Auth::user()->name }} !</h2>
                <p class="welcome-subtitle">
                    En tant que contributeur, vous enrichissez le patrimoine culturel du Bénin.
                    Créez, gérez et partagez des contenus culturels de qualité.
                </p>
                <a href="{{ route('contributeur.contenus.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i> Créer un nouveau contenu
                </a>
            </div>
        </section>
        
        <!-- Grille de statistiques -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div>
                        <div class="stat-title">Total des contenus</div>
                        <div class="stat-value">{{ $stats['total_contenus'] ?? 0 }}</div>
                    </div>
                </div>
                <p class="stat-description">Créés par vous</p>
                <div class="stat-action">
                    <a href="{{ route('contributeur.contenus.index') }}" class="btn btn-outline btn-sm">
                        <i class="fas fa-list"></i> Voir la liste
                    </a>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div>
                        <div class="stat-title">Contenus publiés</div>
                        <div class="stat-value">{{ $stats['contenus_publies'] ?? 0 }}</div>
                    </div>
                </div>
                <p class="stat-description">Visibles par le public</p>
                <div class="stat-action">
                    <a href="{{ route('contributeur.contenus.index') }}?statut=publié" class="btn btn-outline btn-sm">
                        <i class="fas fa-eye"></i> Voir publiés
                    </a>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div>
                        <div class="stat-title">Brouillons</div>
                        <div class="stat-value">{{ $stats['contenus_brouillon'] ?? 0 }}</div>
                    </div>
                </div>
                <p class="stat-description">En attente de finalisation</p>
                <div class="stat-action">
                    <a href="{{ route('contributeur.contenus.index') }}?statut=brouillon" class="btn btn-outline btn-sm">
                        <i class="fas fa-edit"></i> Continuer l'édition
                    </a>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <div>
                        <div class="stat-title">Médias</div>
                        <div class="stat-value">{{ $stats['total_medias'] ?? 0 }}</div>
                    </div>
                </div>
                <p class="stat-description">Images, vidéos, audio</p>
                <div class="stat-action">
                    <a href="{{ route('contributeur.medias.index') }}" class="btn btn-outline btn-sm">
                        <i class="fas fa-images"></i> Gérer
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Actions rapides -->
        <section class="quick-actions-section">
            <div class="section-header">
                <div>
                    <h3 class="section-title">Actions rapides</h3>
                    <p class="section-subtitle">Accès direct aux fonctionnalités principales</p>
                </div>
            </div>
            
            <div class="actions-grid">
                <a href="{{ route('contributeur.contenus.create') }}" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                    <div class="action-content">
                        <h3>Nouveau contenu</h3>
                        <p>Créer un article, récit ou document culturel</p>
                    </div>
                </a>
                
                <a href="{{ route('contributeur.medias.create') }}" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="action-content">
                        <h3>Ajouter un média</h3>
                        <p>Images, vidéos, documents, fichiers audio</p>
                    </div>
                </a>
                
                <a href="{{ route('explorer.index') }}" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div class="action-content">
                        <h3>Explorer</h3>
                        <p>Découvrir le patrimoine culturel béninois</p>
                    </div>
                </a>
                
                <a href="{{ route('contributeur.commentaires.create') }}" class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-comment-medical"></i>
                    </div>
                    <div class="action-content">
                        <h3>Ajouter un commentaire</h3>
                        <p>Partager votre expertise et vos avis</p>
                    </div>
                </a>
            </div>
        </section>
        
        <!-- Contenus récents et commentaires -->
        <div class="recent-section">
            <!-- Contenus récents -->
            <div class="recent-card">
                <div class="recent-card-header">
                    <h3 class="recent-card-title">
                        <i class="fas fa-clock" style="color: var(--primary-red);"></i>
                        Vos contenus récents
                    </h3>
                    <a href="{{ route('contributeur.contenus.index') }}" class="btn btn-outline btn-sm">
                        <i class="fas fa-list"></i> Tout voir
                    </a>
                </div>
                
                <div class="recent-list">
                    @if(isset($stats['contenus_recents']) && $stats['contenus_recents']->count() > 0)
                        @foreach($stats['contenus_recents'] as $contenu)
                            <div class="recent-item">
                                <div class="content-meta">
                                    <span class="content-status status-{{ $contenu->statut === 'publié' ? 'published' : 'draft' }}">
                                        {{ ucfirst($contenu->statut) }}
                                    </span>
                                    <span class="content-type">
                                        <i class="fas fa-tag"></i> {{ $contenu->type->nom ?? 'Non spécifié' }}
                                    </span>
                                </div>
                                <h4 class="content-title">
                                    <a href="{{ route('contributeur.contenus.edit', $contenu) }}">
                                        {{ Str::limit($contenu->titre, 70) }}
                                    </a>
                                </h4>
                                <<div class="content-date">
                                    <i class="far fa-calendar"></i>
                                    @if($contenu->date_creation)
                                        {{ \Carbon\Carbon::parse($contenu->date_creation)->format('d/m/Y') }}
                                    @elseif($contenu->created_at)
                                        {{ $contenu->created_at?->format('d/m/Y') }}
                                    @else
                                        Date inconnue
                                    @endif
                                </div>                                
                                <div class="content-actions">
                                    <a href="{{ route('contributeur.contenus.edit', $contenu) }}" class="btn btn-outline btn-sm">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>
                                    <a href="{{ route('explorer.show', $contenu) }}" class="btn btn-outline btn-sm">
                                        <i class="fas fa-external-link-alt"></i> Voir
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="empty-state">
                            <i class="fas fa-file-alt empty-icon"></i>
                            <h4>Aucun contenu créé</h4>
                            <p>Commencez par créer votre premier contenu culturel</p>
                            <a href="{{ route('contributeur.contenus.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Créer un contenu
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Commentaires récents -->
            <div class="recent-card">
                <div class="recent-card-header">
                    <h3 class="recent-card-title">
                        <i class="fas fa-comments" style="color: var(--primary-red);"></i>
                        Vos commentaires récents
                    </h3>
                    <a href="{{ route('contributeur.commentaires.index') }}" class="btn btn-outline btn-sm">
                        <i class="fas fa-list"></i> Tout voir
                    </a>
                </div>
                
                <div class="recent-list">
                    @if(isset($stats['commentaires_recents']) && $stats['commentaires_recents']->count() > 0)
                        @foreach($stats['commentaires_recents'] as $commentaire)
                            <div class="recent-item">
                                <h4 class="content-title">
                                    <a href="{{ route('explorer.show', $commentaire->contenu) }}">
                                        {{ Str::limit($commentaire->contenu->titre, 60) }}
                                    </a>
                                </h4>
                                <p style="color: var(--earth-700); font-size: 0.95rem; margin: 0.5rem 0;">
                                    {{ Str::limit($commentaire->texte, 100) }}
                                </p>
                                <div class="content-meta">
                                    <div class="content-date">
                                        <i class="far fa-calendar"></i> 
                                        {{ $commentaire->date->format('d/m/Y H:i') }}
                                    </div>
                                    @if($commentaire->note)
                                        <div style="color: var(--primary-gold);">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star{{ $i <= $commentaire->note ? '' : '-o' }}"></i>
                                            @endfor
                                        </div>
                                    @endif
                                </div>
                                <div class="content-actions">
                                    <a href="{{ route('contributeur.commentaires.show', $commentaire) }}" class="btn btn-outline btn-sm">
                                        <i class="fas fa-eye"></i> Détails
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="empty-state">
                            <i class="fas fa-comments empty-icon"></i>
                            <h4>Aucun commentaire</h4>
                            <p>Partagez votre avis sur les contenus culturels</p>
                            <a href="{{ route('explorer.index') }}" class="btn btn-outline">
                                <i class="fas fa-search"></i> Explorer
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Statistiques finales -->
        <section class="final-stats">
            <div class="final-stats-grid">
                <div class="final-stat-item">
                    <div class="final-stat-number">{{ $stats['total_commentaires'] ?? 0 }}</div>
                    <div class="final-stat-title">Commentaires total</div>
                </div>
                <div class="final-stat-item">
                    <div class="final-stat-number">{{ $stats['contenus_publies'] ?? 0 }}</div>
                    <div class="final-stat-title">Contenus publiés</div>
                </div>
                <div class="final-stat-item">
                    <div class="final-stat-number">{{ $stats['total_contenus'] ?? 0 }}</div>
                    <div class="final-stat-title">Total créations</div>
                </div>
                <div class="final-stat-item">
                    <div class="final-stat-number">{{ $stats['total_medias'] ?? 0 }}</div>
                    <div class="final-stat-title">Médias uploadés</div>
                </div>
            </div>
        </section>
        
        <!-- Navigation rapide -->
        <section class="quick-nav-section">
            <div class="section-header">
                <h3 class="section-title">Navigation rapide</h3>
                <p class="section-subtitle">Accès direct à toutes les sections</p>
            </div>
            
            <div class="quick-nav-grid">
                <a href="{{ route('contributeur.contenus.index') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Mes contenus</h4>
                        <p>Gérer vos créations</p>
                    </div>
                </a>
                <a href="{{ route('contributeur.medias.index') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Mes médias</h4>
                        <p>Images et fichiers</p>
                    </div>
                </a>
                <a href="{{ route('contributeur.commentaires.index') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Mes commentaires</h4>
                        <p>Vos contributions</p>
                    </div>
                </a>
                <a href="{{ route('explorer.index') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Explorer</h4>
                        <p>Découvrir le patrimoine</p>
                    </div>
                </a>
                <a href="{{ route('user.dashboard') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Mon profil</h4>
                        <p>Informations personnelles</p>
                    </div>
                </a>
                <a href="{{ route('open') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Accueil</h4>
                        <p>Retour à l'accueil</p>
                    </div>
                </a>
            </div>
        </section>
        
        <!-- Footer -->
        <footer class="dashboard-footer">
            <div class="footer-links">
                <a href="{{ route('open') }}">Accueil</a>
                <a href="{{ route('explorer.index') }}">Explorer</a>
                <a href="{{ route('user.dashboard') }}">Tableau de bord</a>
                <a href="{{ route('profile.edit') }}">Profil</a>
                <a href="#">Aide</a>
            </div>
            <p>&copy; {{ date('Y') }} BéninCulture. Tous droits réservés.</p>
        </footer>
    </main>
    
    <script>
        // Animations simples
        document.addEventListener('DOMContentLoaded', function() {
            // Animation de compteur pour les statistiques
            const statValues = document.querySelectorAll('.stat-value');
            statValues.forEach(stat => {
                if (stat.textContent && stat.textContent !== '0') {
                    const target = parseInt(stat.textContent);
                    const duration = 1500;
                    const increment = target / (duration / 16);
                    let current = 0;
                    
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            stat.textContent = target;
                            clearInterval(timer);
                        } else {
                            stat.textContent = Math.floor(current);
                        }
                    }, 16);
                }
            });
            
            // Confirmation pour la déconnexion
            const logoutForm = document.querySelector('form[action*="logout"]');
            if (logoutForm) {
                logoutForm.addEventListener('submit', function(e) {
                    if (!confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
                        e.preventDefault();
                    }
                });
            }
            
            // Animation au scroll
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
            
            // Observer les cartes
            document.querySelectorAll('.stat-card, .action-card, .recent-card, .nav-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                observer.observe(card);
            });
        });
    </script>
    
</body>
</html>