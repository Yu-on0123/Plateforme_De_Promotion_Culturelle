<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes contenus - BéninCulture</title>
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
            margin: 0 auto var(--space-md);
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
        
        .alert-close {
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
            margin-left: auto;
            padding: 0.5rem;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
        }
        
        .alert-close:hover {
            background: rgba(255, 255, 255, 0.2);
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
        
        /* ===== TABLEAU DES CONTENUS ===== */
        .table-container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--earth-200);
        }
        
        .table-responsive {
            overflow-x: auto;
        }
        
        .content-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }
        
        .content-table thead {
            background: var(--gradient-primary);
        }
        
        .content-table th {
            padding: var(--space-md);
            color: white;
            font-weight: 600;
            text-align: left;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .content-table tbody tr {
            border-bottom: 1px solid var(--earth-200);
            transition: all 0.2s ease;
        }
        
        .content-table tbody tr:hover {
            background: var(--earth-50);
        }
        
        .content-table td {
            padding: var(--space-md);
            color: var(--earth-700);
            vertical-align: middle;
        }
        
        .content-title {
            font-weight: 600;
            color: var(--earth-800);
            display: block;
            margin-bottom: 0.25rem;
        }
        
        .content-excerpt {
            font-size: 0.875rem;
            color: var(--earth-600);
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* ===== BADGES ===== */
        .badge {
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .badge-published {
            background: var(--gradient-success);
            color: white;
        }
        
        .badge-draft {
            background: var(--gradient-warning);
            color: white;
        }
        
        /* ===== ACTIONS ===== */
        .action-buttons {
            display: flex;
            gap: var(--space-xs);
            flex-wrap: wrap;
        }
        
        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
        }
        
        .action-view {
            background: var(--earth-500);
        }
        
        .action-view:hover {
            background: var(--earth-600);
        }
        
        .action-edit {
            background: var(--gold-500);
        }
        
        .action-edit:hover {
            background: var(--gold-600);
        }
        
        .action-delete {
            background: var(--red-500);
        }
        
        .action-delete:hover {
            background: var(--red-600);
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
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .content-table {
                min-width: 600px;
            }
            
            .content-table th,
            .content-table td {
                padding: var(--space-sm);
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
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .stat-card {
                flex-direction: column;
                text-align: center;
                padding: var(--space-md);
            }
            
            .action-buttons {
                justify-content: center;
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
                <i class="fas fa-book-open"></i>
            </div>
            <div class="brand-text">
                <h1>Mes contenus</h1>
                <p class="subtitle">Gérez vos contributions au patrimoine culturel</p>
            </div>
        </div>
        <a href="{{ route('contributeur.contenus.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nouveau contenu
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
        $publishedCount = $contenus->where('statut', 'publié')->count();
        $draftCount = $contenus->where('statut', 'brouillon')->count();
        $totalCount = $contenus->total();
    @endphp
    
    <div class="stats-container fade-in-up">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-layer-group"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $totalCount }}</h3>
                <p>Contenus au total</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-globe"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $publishedCount }}</h3>
                <p>Contenus publiés</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-save"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $draftCount }}</h3>
                <p>Brouillons</p>
            </div>
        </div>
    </div>

    <!-- Tableau des contenus -->
    @if($contenus->count() > 0)
        <div class="table-container fade-in-up">
            <div class="table-responsive">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Type</th>
                            <th>Région</th>
                            <th>Langue</th>
                            <th>Statut</th>
                            <th>Date création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contenus as $contenu)
                            <tr>
                                <td>
                                    <span class="content-title">{{ $contenu->titre }}</span>
                                    <span class="content-excerpt">
                                        {{ Str::limit(strip_tags($contenu->texte), 80) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge" style="background: var(--earth-100); color: var(--earth-700);">
                                        {{ $contenu->type->nom ?? 'Non spécifié' }}
                                    </span>
                                </td>
                                <td>{{ $contenu->region->nom ?? 'Non spécifié' }}</td>
                                <td>{{ $contenu->langue->nom ?? 'Non spécifié' }}</td>
                                <td>
                                    <span class="badge {{ $contenu->statut === 'publié' ? 'badge-published' : 'badge-draft' }}">
                                        <i class="fas fa-{{ $contenu->statut === 'publié' ? 'globe' : 'save' }}"></i>
                                        {{ $contenu->statut }}
                                    </span>
                                </td>
                                <td>
                                    @if($contenu->date_creation)
                                        {{ \Carbon\Carbon::parse($contenu->date_creation)->format('d/m/Y') }}
                                    @elseif($contenu->created_at)
                                        {{ $contenu->created_at?->format('d/m/Y') }}
                                    @else
                                        Date non disponible
                                    @endif
                                </td>                                
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('contributeur.contenus.show', $contenu) }}" 
                                           class="action-btn action-view" title="Voir">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('contributeur.contenus.edit', $contenu) }}" 
                                           class="action-btn action-edit" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('contributeur.contenus.destroy', $contenu) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn action-delete" 
                                                    onclick="return confirmDelete()" title="Supprimer">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
    @else
        <!-- État vide -->
        <div class="empty-state fade-in-up">
            <i class="fas fa-book-open empty-icon"></i>
            <h3>Vous n'avez pas encore créé de contenu</h3>
            <p>
                Commencez par partager votre savoir sur le patrimoine culturel du Bénin.
                Chaque contribution aide à préserver notre héritage pour les générations futures.
            </p>
            <a href="{{ route('contributeur.contenus.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Créer votre premier contenu
            </a>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Confirmation de suppression
            window.confirmDelete = function() {
                return confirm('Êtes-vous sûr de vouloir supprimer ce contenu ? Cette action est irréversible.');
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
            
            // Observer les cartes et lignes
            document.querySelectorAll('.stat-card, .content-table tbody tr').forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                observer.observe(element);
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