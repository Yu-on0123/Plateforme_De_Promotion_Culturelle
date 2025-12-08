{{-- resources/views/admin/home.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Tableau de Bord - CultureAdmin')

@section('content')

<style>
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --primary-light: #c7d2fe;
    --secondary: #f8fafc;
    --accent: #f59e0b;
    --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-hover: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    --glass: rgba(255, 255, 255, 0.25);
    --glass-border: rgba(255, 255, 255, 0.18);
    --shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    --text: #1e293b;
    --text-light: #64748b;
}

/* Animations principales */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

@keyframes glow {
    0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.3); }
    50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.6); }
}

@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(50px) scale(0.9);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* Styles globaux améliorés */
.dashboard-container {
    padding: 2rem;
    max-width: 1400px;
    margin: 0 auto;
}

/* Grille de statistiques avec effet glassmorphism */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2.5rem;
}

.stat-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 24px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    cursor: pointer;
    animation: slideInUp 0.6s ease forwards;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: var(--gradient);
    transition: left 0.6s ease;
    z-index: 0;
}

.stat-card:hover::before {
    left: 0;
}

.stat-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    animation: glow 2s infinite;
}

.stat-card.active {
    transform: translateY(-25px) scale(1.08);
    z-index: 100;
}

.stat-content {
    position: relative;
    z-index: 2;
}

.stat-icon {
    width: 70px;
    height: 70px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin-bottom: 1rem;
    animation: float 6s ease-in-out infinite;
}

.stat-title {
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 0.5rem;
    opacity: 0.8;
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.stat-change {
    font-size: 0.875rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Couleurs spécifiques pour chaque carte */
.stat-card.users .stat-icon { background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; }
.stat-card.contenus .stat-icon { background: linear-gradient(135deg, #10b981, #047857); color: white; }
.stat-card.medias .stat-icon { background: linear-gradient(135deg, #f59e0b, #d97706); color: white; }
.stat-card.commentaires .stat-icon { background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; }
.stat-card.langues .stat-icon { background: linear-gradient(135deg, #14b8a6, #0d9488); color: white; }
.stat-card.regions .stat-icon { background: linear-gradient(135deg, #ec4899, #db2777); color: white; }

/* Actions rapides stylisées */
.quick-actions {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 2.5rem;
}

.action-btn {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 16px;
    padding: 1.5rem;
    text-align: center;
    text-decoration: none;
    color: var(--text);
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
}

.action-btn:hover {
    transform: translateY(-8px);
    background: var(--gradient);
    color: white;
    box-shadow: 0 15px 40px rgba(99, 102, 241, 0.3);
}

.action-icon {
    font-size: 2rem;
    transition: transform 0.3s ease;
}

.action-btn:hover .action-icon {
    transform: scale(1.2) rotate(10deg);
}

/* Grille principale améliorée */
.main-dashboard-grid {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 2rem;
    margin-bottom: 2.5rem;
}

@media (max-width: 1024px) {
    .main-dashboard-grid {
        grid-template-columns: 1fr;
    }
}

/* Cartes de contenu avec effet néomorphisme */
.content-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.content-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.card-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(99, 102, 241, 0.1);
}

.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    background: var(--gradient);
    color: white;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 800;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Liste des utilisateurs actifs */
.user-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    margin-bottom: 0.75rem;
    border-radius: 12px;
    background: rgba(248, 250, 252, 0.8);
    transition: all 0.3s ease;
}

.user-item:hover {
    background: rgba(99, 102, 241, 0.1);
    transform: translateX(8px);
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 0.875rem;
}

.user-info {
    flex: 1;
}

.user-name {
    font-weight: 600;
    color: var(--text);
}

.user-stats {
    font-size: 0.875rem;
    color: var(--text-light);
}

/* Timeline moderne */
.timeline-item {
    display: flex;
    gap: 1rem;
    padding: 1rem;
    margin-bottom: 1rem;
    border-radius: 12px;
    background: rgba(248, 250, 252, 0.8);
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
}

.timeline-item:hover {
    border-left-color: var(--primary);
    background: rgba(99, 102, 241, 0.05);
    transform: translateX(5px);
}

.timeline-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin-top: 0.5rem;
    flex-shrink: 0;
}

.timeline-dot.users { background: #3b82f6; }
.timeline-dot.medias { background: #f59e0b; }
.timeline-dot.commentaires { background: #8b5cf6; }

.timeline-content {
    flex: 1;
}

.timeline-title {
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: var(--text);
}

.timeline-desc {
    font-size: 0.875rem;
    color: var(--text-light);
    line-height: 1.4;
}

/* Graphiques améliorés */
.charts-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    margin-bottom: 2.5rem;
}

@media (max-width: 768px) {
    .charts-grid {
        grid-template-columns: 1fr;
    }
}

.chart-container {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

.chart-title {
    font-size: 1.125rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-align: center;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Section contenus populaires */
.popular-content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin-bottom: 2.5rem;
}

@media (max-width: 768px) {
    .popular-content-grid {
        grid-template-columns: 1fr;
    }
}

.content-rating-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

.rating-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.rating-high {
    background: linear-gradient(135deg, #10b981, #047857);
    color: white;
}

.rating-low {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
}

/* Effet de flou d'arrière-plan */
.backdrop-blur {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(0);
    background: rgba(0, 0, 0, 0);
    z-index: 999;
    pointer-events: none;
    transition: all 0.3s ease;
}

.backdrop-blur.active {
    backdrop-filter: blur(10px);
    background: rgba(0, 0, 0, 0.1);
    pointer-events: all;
}

/* Animations de délai pour les éléments */
.stat-card:nth-child(1) { animation-delay: 0.1s; }
.stat-card:nth-child(2) { animation-delay: 0.2s; }
.stat-card:nth-child(3) { animation-delay: 0.3s; }
.stat-card:nth-child(4) { animation-delay: 0.4s; }
.stat-card:nth-child(5) { animation-delay: 0.5s; }
.stat-card:nth-child(6) { animation-delay: 0.6s; }
</style>

<div class="dashboard-container">
    <!-- Effet de flou d'arrière-plan -->
    <div class="backdrop-blur" id="backdropBlur"></div>

    <!-- Grille de statistiques principales -->
    <div class="stats-grid">
        <div class="stat-card users" onclick="toggleCard(this)">
            <div class="stat-content">
                <div class="stat-icon">👥</div>
                <div class="stat-title">Utilisateurs</div>
                <div class="stat-value">{{ number_format($counts['users']) }}</div>
                <div class="stat-change">
                    <span style="color:#10b981">↑ 12%</span> ce mois
                </div>
            </div>
        </div>

        <div class="stat-card contenus" onclick="toggleCard(this)">
            <div class="stat-content">
                <div class="stat-icon">📄</div>
                <div class="stat-title">Contenus publiés</div>
                <div class="stat-value">{{ number_format($counts['contenus']) }}</div>
                <div class="stat-change">
                    <span style="color:#10b981">↑ 8%</span> cette semaine
                </div>
            </div>
        </div>

        <div class="stat-card medias" onclick="toggleCard(this)">
            <div class="stat-content">
                <div class="stat-icon">🖼️</div>
                <div class="stat-title">Médias</div>
                <div class="stat-value">{{ number_format($counts['medias']) }}</div>
                <div class="stat-change">
                    <span style="color:#10b981">↑ 15%</span> aujourd'hui
                </div>
            </div>
        </div>

        <div class="stat-card commentaires" onclick="toggleCard(this)">
            <div class="stat-content">
                <div class="stat-icon">💬</div>
                <div class="stat-title">Commentaires</div>
                <div class="stat-value">{{ number_format($counts['commentaires']) }}</div>
                <div class="stat-change">
                    <span style="color:#10b981">↑ 23%</span> cette semaine
                </div>
            </div>
        </div>

        <div class="stat-card langues" onclick="toggleCard(this)">
            <div class="stat-content">
                <div class="stat-icon">🌐</div>
                <div class="stat-title">Langues</div>
                <div class="stat-value">{{ number_format($counts['langues']) }}</div>
                <div class="stat-change">
                    <span style="color:#6b7280">→ Stable</span>
                </div>
            </div>
        </div>

        <div class="stat-card regions" onclick="toggleCard(this)">
            <div class="stat-content">
                <div class="stat-icon">🗺️</div>
                <div class="stat-title">Régions</div>
                <div class="stat-value">{{ number_format($counts['regions']) }}</div>
                <div class="stat-change">
                    <span style="color:#10b981">↑ 5%</span> ce mois
                </div>
            </div>
        </div>
    </div>

    <!-- Actions rapides -->
    <div class="quick-actions">
        <a href="{{ route('admin.users.create') }}" class="action-btn">
            <div class="action-icon">👤</div>
            <div>Ajouter un utilisateur</div>
        </a>
        <a href="{{ route('admin.contenus.create') }}" class="action-btn">
            <div class="action-icon">📝</div>
            <div>Créer un contenu</div>
        </a>
        <a href="{{ route('admin.medias.index') }}" class="action-btn">
            <div class="action-icon">⚙️</div>
            <div>Gérer les médias</div>
        </a>
        <a href="{{ route('admin.commentaires.index') }}" class="action-btn">
            <div class="action-icon">💬</div>
            <div>Modérer les commentaires</div>
        </a>
    </div>

    <!-- Grille principale -->
    <div class="main-dashboard-grid">
        <!-- Utilisateurs les plus actifs -->
        <div class="content-card">
            <div class="card-header">
                <div class="card-icon">🏆</div>
                <div class="card-title">Utilisateurs les plus actifs</div>
            </div>
            <div class="card-content">
                @foreach($topUsers->take(8) as $user)
                <div class="user-item">
                    <div class="user-avatar">
                        {{ strtoupper(substr($user->prenom, 0, 1)) }}{{ strtoupper(substr($user->nom, 0, 1)) }}
                    </div>
                    <div class="user-info">
                        <div class="user-name">{{ $user->prenom }} {{ $user->nom }}</div>
                        <div class="user-stats">{{ $user->contenus_count }} contenus créés</div>
                    </div>
                    <div class="user-rating">
                        <div style="color:#f59e0b; font-weight:700;">⭐ {{ $user->contenus_count }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Timeline des activités -->
        <div class="content-card">
            <div class="card-header">
                <div class="card-icon">🕒</div>
                <div class="card-title">Activités récentes</div>
            </div>
            <div class="card-content">
                <div class="timeline-item">
                    <div class="timeline-dot users"></div>
                    <div class="timeline-content">
                        <div class="timeline-title">Nouveaux utilisateurs</div>
                        @foreach($latestUsers as $u)
                        <div class="timeline-desc">{{ $u->prenom }} {{ $u->nom }}</div>
                        @endforeach
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot medias"></div>
                    <div class="timeline-content">
                        <div class="timeline-title">Médias récents</div>
                        @foreach($latestMedias as $m)
                        <div class="timeline-desc">{{ \Illuminate\Support\Str::limit(basename($m->chemin), 30) }}</div>
                        @endforeach
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot commentaires"></div>
                    <div class="timeline-content">
                        <div class="timeline-title">Commentaires récents</div>
                        @foreach($latestCommentaires as $c)
                        <div class="timeline-desc">{{ \Illuminate\Support\Str::limit($c->texte, 50) }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques -->
    <div class="charts-grid">
        <div class="chart-container">
            <div class="chart-title">Publications par jour</div>
            <canvas id="barChart" height="250"></canvas>
        </div>
        
        <div class="chart-container">
            <div class="chart-title">Types de contenu</div>
            <canvas id="pieChart" height="250"></canvas>
        </div>
    </div>

    <!-- Contenus populaires et moins populaires -->
    <div class="popular-content-grid">
        <div class="content-rating-card">
            <div class="rating-badge rating-high">🌟 Contenus les plus appréciés</div>
            @foreach($mostLikedContents->take(6) as $content)
            <div class="user-item">
                <div class="user-avatar" style="background:linear-gradient(135deg, #10b981, #047857);">
                    ⭐
                </div>
                <div class="user-info">
                    <div class="user-name">{{ \Illuminate\Support\Str::limit($content->titre, 30) }}</div>
                    <div class="user-stats">Note: {{ number_format($content->commentaires_avg_note,1) }}/5</div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="content-rating-card">
            <div class="rating-badge rating-low">📉 Contenus à améliorer</div>
            @foreach($leastLikedContents->take(6) as $content)
            <div class="user-item">
                <div class="user-avatar" style="background:linear-gradient(135deg, #ef4444, #dc2626);">
                    📊
                </div>
                <div class="user-info">
                    <div class="user-name">{{ \Illuminate\Support\Str::limit($content->titre, 30) }}</div>
                    <div class="user-stats">Note: {{ number_format($content->commentaires_avg_note,1) }}/5</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Configuration des graphiques avec des styles modernes
const chartColors = {
    primary: 'rgba(99, 102, 241, 0.8)',
    secondary: 'rgba(16, 185, 129, 0.8)',
    accent: 'rgba(245, 158, 11, 0.8)',
    purple: 'rgba(139, 92, 246, 0.8)',
    teal: 'rgba(20, 184, 166, 0.8)',
    pink: 'rgba(236, 72, 153, 0.8)'
};

// Graphique en barres
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: {!! json_encode(array_keys($contenusByDay)) !!},
        datasets: [{
            label: 'Publications',
            data: {!! json_encode(array_values($contenusByDay)) !!},
            backgroundColor: chartColors.primary,
            borderColor: chartColors.primary,
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: 'rgba(255, 255, 255, 0.9)',
                titleColor: '#1e293b',
                bodyColor: '#1e293b',
                borderColor: chartColors.primary,
                borderWidth: 1,
                cornerRadius: 8
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: { color: 'rgba(0, 0, 0, 0.1)' }
            },
            x: {
                grid: { display: false }
            }
        }
    }
});

// Graphique circulaire
new Chart(document.getElementById('pieChart'), {
    type: 'doughnut',
    data: {
        labels: {!! json_encode(array_keys($topTypeContenuData)) !!},
        datasets: [{
            data: {!! json_encode(array_values($topTypeContenuData)) !!},
            backgroundColor: [
                chartColors.primary,
                chartColors.secondary,
                chartColors.accent,
                chartColors.purple,
                chartColors.teal
            ],
            borderWidth: 2,
            borderColor: 'rgba(255, 255, 255, 0.8)'
        }]
    },
    options: {
        responsive: true,
        cutout: '60%',
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    padding: 20,
                    usePointStyle: true
                }
            }
        }
    }
});

// Animation des cartes
function toggleCard(card) {
    const isActive = card.classList.contains('active');
    const backdrop = document.getElementById('backdropBlur');
    
    // Désactiver toutes les cartes
    document.querySelectorAll('.stat-card').forEach(c => {
        c.classList.remove('active');
    });
    
    // Activer/désactiver la carte cliquée
    if (!isActive) {
        card.classList.add('active');
        backdrop.classList.add('active');
    } else {
        backdrop.classList.remove('active');
    }
}

// Fermer la carte active en cliquant sur le backdrop
document.getElementById('backdropBlur').addEventListener('click', function() {
    document.querySelectorAll('.stat-card').forEach(c => c.classList.remove('active'));
    this.classList.remove('active');
});

// Animation d'entrée pour tous les éléments
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.stat-card, .action-btn, .content-card');
    
    elements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            element.style.transition = 'all 0.6s ease';
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, index * 100);
    });
});

// Effet de parallaxe sur le scroll
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.stat-card');
    
    parallaxElements.forEach((element, index) => {
        const speed = 0.1 + (index * 0.05);
        element.style.transform = `translateY(${scrolled * speed}px)`;
    });
});
</script>

@endsection