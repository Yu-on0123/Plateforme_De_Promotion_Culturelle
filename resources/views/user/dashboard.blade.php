<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - BéninCulture</title>
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
        
        .welcome-text .date {
            font-size: 0.85rem;
            color: var(--earth-600);
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
        }
        
        .welcome-content {
            text-align: center;
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
        
        /* Section commentaires */
        .section-card {
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
        
        /* Liste des commentaires */
        .comments-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .comment-item {
            padding: 1.25rem;
            background: white;
            border-radius: var(--radius-md);
            border: 1px solid var(--earth-200);
            transition: all 0.2s ease;
        }
        
        .comment-item:hover {
            border-color: var(--primary-gold);
            box-shadow: var(--shadow-sm);
        }
        
        .comment-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 0.75rem;
        }
        
        .comment-content {
            margin-bottom: 0.75rem;
        }
        
        .content-title {
            font-size: 1rem;
            color: var(--earth-800);
            font-weight: 600;
            margin-bottom: 0.5rem;
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
        
        .content-text {
            font-size: 0.95rem;
            color: var(--earth-700);
            line-height: 1.5;
        }
        
        .comment-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: var(--earth-600);
        }
        
        .comment-date {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .comment-rating {
            color: var(--primary-gold);
        }
        
        .comment-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }
        
        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.8rem;
        }
        
        /* Section profil */
        .profile-section {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .profile-card {
            background: var(--gradient-card);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--earth-200);
            text-align: center;
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
            font-weight: 600;
            border: 4px solid white;
            box-shadow: var(--shadow-md);
        }
        
        .profile-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--earth-800);
            margin-bottom: 0.5rem;
        }
        
        .profile-role {
            color: var(--primary-red);
            font-size: 0.9rem;
            font-weight: 500;
            background: var(--red-50);
            padding: 0.25rem 1rem;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 1.5rem;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
        }
        
        .info-item {
            text-align: left;
        }
        
        .info-label {
            font-size: 0.85rem;
            color: var(--earth-600);
            margin-bottom: 0.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .info-value {
            font-size: 1rem;
            color: var(--earth-800);
            font-weight: 500;
        }
        
        /* Navigation rapide */
        .quick-nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .nav-card {
            background: var(--gradient-card);
            border-radius: var(--radius-md);
            padding: 1.5rem;
            border: 1px solid var(--earth-200);
            text-decoration: none;
            color: var(--earth-800);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .nav-card:hover {
            transform: translateY(-2px);
            border-color: var(--primary-red);
            box-shadow: var(--shadow-md);
            background: white;
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
            
            .profile-section {
                grid-template-columns: 1fr;
            }
            
            .info-grid {
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
                grid-template-columns: 1fr;
            }
            
            .quick-nav-grid {
                grid-template-columns: 1fr;
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
            
            .section-card {
                padding: 1.5rem;
            }
            
            .comment-header {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .comment-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
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
                    <div class="subtitle">Tableau de bord utilisateur</div>
                </div>
            </div>
            
            <div class="user-info">
                <div class="welcome-text">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="date">Membre depuis {{ Auth::user()->created_at?->format('m/Y') ?? 'date inconnue' }}</span>
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
                <h2 class="welcome-title">Bon retour, {{ Auth::user()->name }} !</h2>
                <p class="welcome-subtitle">
                    Découvrez et interagissez avec les trésors culturels du Bénin. 
                    Votre participation enrichit notre patrimoine commun.
                </p>
                <a href="{{ route('explorer.index') }}" class="btn btn-primary">
                    <i class="fas fa-search"></i> Découvrir les contenus
                </a>
            </div>
        </section>
        
        <!-- Grille de statistiques -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div>
                        <div class="stat-title">Commentaires</div>
                        <div class="stat-value">{{ $stats['total_commentaires'] }}</div>
                    </div>
                </div>
                <p class="stat-description">Nombre de commentaires que vous avez publiés</p>
                <div class="stat-action">
                    <a href="{{ route('user.commentaires.index') }}" class="btn btn-outline btn-sm">
                        <i class="fas fa-list"></i> Voir mes commentaires
                    </a>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <div>
                        <div class="stat-title">Contenus visités</div>
                        <div class="stat-value">∞</div>
                    </div>
                </div>
                <p class="stat-description">Explorez les trésors culturels du Bénin</p>
                <div class="stat-action">
                    <a href="{{ route('explorer.index') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-search"></i> Explorer
                    </a>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <div>
                        <div class="stat-title">Profil</div>
                        <div class="stat-value">Actif</div>
                    </div>
                </div>
                <p class="stat-description">Gérez vos informations personnelles</p>
                <div class="stat-action">
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline btn-sm">
                        <i class="fas fa-cog"></i> Modifier
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Commentaires récents -->
        <section class="section-card">
            <div class="section-header">
                <div>
                    <h3 class="section-title">Vos commentaires récents</h3>
                    <p class="section-subtitle">Vos dernières contributions sur les contenus culturels</p>
                </div>
                <a href="{{ route('user.commentaires.index') }}" class="btn btn-outline">
                    <i class="fas fa-list"></i> Voir tout
                </a>
            </div>
            
            @if($stats['commentaires_recents'] && $stats['commentaires_recents']->count() > 0)
                <div class="comments-list">
                    @foreach($stats['commentaires_recents'] as $commentaire)
                        <div class="comment-item">
                            <div class="comment-header">
                                <div class="content-title">
                                    <a href="{{ route('explorer.show', $commentaire->contenu) }}">
                                        {{ $commentaire->contenu->titre }}
                                    </a>
                                </div>
                                @if($commentaire->note)
                                    <div class="comment-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star{{ $i <= $commentaire->note ? '' : '-o' }}"></i>
                                        @endfor
                                    </div>
                                @endif
                            </div>
                            <div class="comment-content">
                                <p class="content-text">{{ Str::limit($commentaire->texte, 150) }}</p>
                            </div>
                            <div class="comment-meta">
                                <div class="comment-date">
                                    <i class="far fa-calendar"></i> 
                                    {{ $commentaire->date->format('d/m/Y H:i') }}
                                </div>
                                <div class="comment-actions">
                                    <a href="{{ route('user.commentaires.show', $commentaire) }}" 
                                       class="btn btn-outline btn-sm">
                                        <i class="fas fa-eye"></i> Détails
                                    </a>
                                    <a href="{{ route('explorer.show', $commentaire->contenu) }}" 
                                       class="btn btn-outline btn-sm">
                                        <i class="fas fa-external-link-alt"></i> Contenu
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div style="text-align: center; margin-top: 1.5rem;">
                    <a href="{{ route('user.commentaires.index') }}" class="btn btn-primary">
                        <i class="fas fa-list"></i> Voir tous mes commentaires
                    </a>
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h4>Aucun commentaire pour le moment</h4>
                    <p>Commencez à explorer les contenus et partagez vos avis !</p>
                    <a href="{{ route('explorer.index') }}" class="btn btn-primary">
                        <i class="fas fa-search"></i> Explorer les contenus
                    </a>
                </div>
            @endif
        </section>
        
        <!-- Section profil et informations -->
        <div class="profile-section">
            <div class="profile-card">
                <div class="profile-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                </div>
                <h3 class="profile-name">{{ Auth::user()->name }}</h3>
                <div class="profile-role">Membre actif</div>
                <div style="margin-top: 1.5rem;">
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Modifier le profil
                    </a>
                </div>
            </div>
            
            <div class="section-card">
                <h3 class="section-title">Informations du compte</h3>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-envelope"></i> Email
                        </div>
                        <div class="info-value">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-calendar-alt"></i> Membre depuis
                        </div>
                        <div class="info-value">{{ Auth::user()->created_at?->format('d/m/Y') ?? 'Date inconnue' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-comments"></i> Commentaires
                        </div>
                        <div class="info-value">{{ $stats['total_commentaires'] }} publiés</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-user-check"></i> Statut
                        </div>
                        <div class="info-value">Actif</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation rapide -->
        <section class="section-card">
            <h3 class="section-title">Navigation rapide</h3>
            <p class="section-subtitle">Accès direct aux principales sections</p>
            
            <div class="quick-nav-grid">
                <a href="{{ route('explorer.index') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Explorer les contenus</h4>
                        <p>Découvrez le patrimoine culturel</p>
                    </div>
                </a>
                <a href="{{ route('user.commentaires.create') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-comment-medical"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Ajouter un commentaire</h4>
                        <p>Partagez votre avis</p>
                    </div>
                </a>
                <a href="{{ route('profile.edit') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Paramètres du profil</h4>
                        <p>Gérez vos informations</p>
                    </div>
                </a>
                <a href="{{ route('open') }}" class="nav-card">
                    <div class="nav-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="nav-content">
                        <h4>Retour à l'accueil</h4>
                        <p>Page d'accueil principale</p>
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
            const statValue = document.querySelector('.stat-value');
            if (statValue && statValue.textContent !== '∞') {
                const target = parseInt(statValue.textContent);
                const duration = 1000;
                const increment = target / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        statValue.textContent = target;
                        clearInterval(timer);
                    } else {
                        statValue.textContent = Math.floor(current);
                    }
                }, 16);
            }
            
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
            document.querySelectorAll('.stat-card, .section-card, .nav-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>