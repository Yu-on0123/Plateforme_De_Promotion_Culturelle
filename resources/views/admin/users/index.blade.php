@extends('admin.dashboard')

@section('title', 'Gestion des Utilisateurs')

@section('content')

<style>
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --primary-light: #c7d2fe;
    --secondary: #f8fafc;
    --accent: #3b82f6;
    --success: #10b981;
    --danger: #ef4444;
    --warning: #f59e0b;
    --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-hover: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    --glass: rgba(255, 255, 255, 0.25);
    --glass-border: rgba(255, 255, 255, 0.18);
    --shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    --text: #1e293b;
    --text-light: #64748b;
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(40px) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes slideInFromLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-8px) rotate(3deg); }
}

@keyframes avatarGlow {
    0%, 100% { box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7); }
    50% { box-shadow: 0 0 0 8px rgba(59, 130, 246, 0); }
}

/* Styles principaux */
.users-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

/* Header avec dégradé */
.users-header {
    background: var(--gradient);
    border-radius: 24px;
    padding: 2.5rem 2rem;
    margin-bottom: 2.5rem;
    color: white;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.8s ease-out;
}

.users-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.users-header-content {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.header-text {
    flex: 1;
}

.header-icon {
    font-size: 3rem;
    animation: float 6s ease-in-out infinite;
    display: inline-block;
    margin-right: 1rem;
}

.header-title {
    font-size: 2.5rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.header-subtitle {
    font-size: 1.125rem;
    opacity: 0.9;
    font-weight: 500;
}

/* Statistiques */
.stats-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2.5rem;
}

.stat-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 1.5rem;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    animation: fadeInUp 0.6s ease-out;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.stat-icon {
    font-size: 2.5rem;
    margin-bottom: 0.75rem;
    display: inline-block;
}

.stat-value {
    font-size: 2rem;
    font-weight: 800;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--text-light);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Grille des utilisateurs */
.users-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2.5rem;
}

.user-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 1.5rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    animation: slideInFromLeft 0.6s ease-out;
    position: relative;
    overflow: hidden;
}

.user-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: var(--gradient);
    transition: left 0.4s ease;
    z-index: 0;
}

.user-card:hover::before {
    left: 0;
}

.user-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.user-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.user-avatar {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.5rem;
    color: white;
    flex-shrink: 0;
    background: linear-gradient(135deg, var(--accent), #1d4ed8);
    animation: avatarGlow 3s infinite;
    border: 3px solid white;
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
}

.user-info {
    flex: 1;
}

.user-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.user-id {
    font-size: 0.875rem;
    background: rgba(99, 102, 241, 0.1);
    color: var(--primary);
    padding: 0.25rem 0.5rem;
    border-radius: 8px;
    font-weight: 600;
}

.user-details {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.user-detail {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
    color: var(--text-light);
}

.user-detail i {
    width: 16px;
    text-align: center;
}

.user-role {
    display: inline-flex;
    align-items: center;
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.role-admin {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
}

.role-user {
    background: linear-gradient(135deg, #10b981, #047857);
    color: white;
}

.role-editor {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
}

.role-moderator {
    background: linear-gradient(135deg, #8b5cf6, #7c3aed);
    color: white;
}

.user-actions {
    display: flex;
    gap: 0.75rem;
    margin-top: 1rem;
}

.action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem;
    border-radius: 12px;
    font-weight: 600;
    font-size: 0.875rem;
    transition: all 0.3s ease;
    cursor: pointer;
    border: none;
    text-decoration: none;
    flex: 1;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.action-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.action-btn:hover::before {
    left: 100%;
}

.btn-edit {
    background: linear-gradient(135deg, var(--warning), #d97706);
    color: white;
}

.btn-edit:hover {
    background: linear-gradient(135deg, #d97706, #b45309);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
}

.btn-delete {
    background: linear-gradient(135deg, var(--danger), #dc2626);
    color: white;
}

.btn-delete:hover {
    background: linear-gradient(135deg, #dc2626, #b91c1c);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
}

.btn-icon {
    font-size: 1rem;
    margin-right: 0.5rem;
}

/* Bouton d'ajout */
.add-user-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 2rem;
    background: linear-gradient(135deg, var(--accent), #1d4ed8);
    color: white;
    border: none;
    border-radius: 16px;
    font-weight: 700;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
    text-decoration: none;
    gap: 0.75rem;
}

.add-user-btn:hover {
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(59, 130, 246, 0.4);
    animation: pulse 1s infinite;
}

/* Pagination */
.pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 2.5rem;
}

.pagination {
    display: flex;
    gap: 0.5rem;
    align-items: center;
}

.page-item {
    display: inline-flex;
}

.page-link {
    padding: 0.75rem 1rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 12px;
    color: var(--text);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.page-link:hover {
    background: var(--primary);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
}

.page-item.active .page-link {
    background: var(--gradient);
    color: white;
    border-color: var(--primary);
}

/* État vide */
.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 24px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 0.6s ease-out;
}

.empty-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

.empty-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 1rem;
}

.empty-text {
    color: var(--text-light);
    margin-bottom: 2rem;
}

/* Responsive */
@media (max-width: 768px) {
    .users-container {
        padding: 1rem;
    }
    
    .users-header {
        padding: 2rem 1rem;
    }
    
    .header-title {
        font-size: 2rem;
    }
    
    .users-header-content {
        flex-direction: column;
        text-align: center;
    }
    
    .users-grid {
        grid-template-columns: 1fr;
    }
    
    .user-content {
        flex-direction: column;
        text-align: center;
    }
    
    .user-actions {
        flex-direction: column;
    }
    
    .stats-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .header-title {
        font-size: 1.75rem;
    }
    
    .stats-container {
        grid-template-columns: 1fr;
    }
    
    .user-name {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
}
</style>

<div class="users-container">

    <!-- Header avec dégradé -->
    <div class="users-header">
        <div class="users-header-content">
            <div class="header-text">
                <div class="header-icon">👥</div>
                <h1 class="header-title">Gestion des Utilisateurs</h1>
                <p class="header-subtitle">Administrez tous les utilisateurs de votre plateforme</p>
            </div>
            <a href="{{ route('admin.users.create') }}" class="add-user-btn">
                <span class="btn-icon">➕</span>
                Nouvel Utilisateur
            </a>
        </div>
    </div>

    <!-- Statistiques -->
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div class="stat-value">{{ $users->total() }}</div>
            <div class="stat-label">Utilisateurs Totaux</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">👑</div>
            <div class="stat-value">{{ $users->where('role', 'admin')->count() }}</div>
            <div class="stat-label">Administrateurs</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">📊</div>
            <div class="stat-value">{{ $users->where('statut', 'actif')->count() }}</div>
            <div class="stat-label">Utilisateurs Actifs</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">🆕</div>
            <div class="stat-value">{{ $users->where('created_at', '>=', now()->subDays(7))->count() }}</div>
            <div class="stat-label">Nouveaux (7j)</div>
        </div>
    </div>

    @if($users->count() > 0)
        <!-- Grille des utilisateurs -->
        <div class="users-grid">
            @foreach($users as $user)
                <div class="user-card">
                    <div class="user-content">
                        <div class="user-avatar">
                            {{ strtoupper(substr($user->prenom, 0, 1)) }}{{ strtoupper(substr($user->nom, 0, 1)) }}
                        </div>
                        <div class="user-info">
                            <div class="user-name">
                                {{ $user->prenom }} {{ $user->nom }}
                                <span class="user-id">#{{ $user->id }}</span>
                            </div>
                            
                            <div class="user-details">
                                <div class="user-detail">
                                    <i>📧</i>
                                    <span>{{ $user->email }}</span>
                                </div>
                                <div class="user-detail">
                                    <i>🎭</i>
                                    <span class="user-role role-{{ strtolower($user->role ?? 'user') }}">
                                        {{ $user->role ?? 'Utilisateur' }}
                                    </span>
                                </div>
                                @if($user->statut)
                                <div class="user-detail">
                                    <i>📊</i>
                                    <span>Statut: {{ $user->statut }}</span>
                                </div>
                                @endif
                                @if($user->date_naissance)
                                <div class="user-detail">
                                    <i>🎂</i>
                                    <span>Né le: {{ \Carbon\Carbon::parse($user->date_naissance)->format('d/m/Y') }}</span>
                                </div>
                                @endif
                            </div>

                            <div class="user-actions">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="action-btn btn-edit">
                                    <span class="btn-icon">✏️</span>
                                    Modifier
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="action-btn btn-delete w-full"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                        <span class="btn-icon">🗑️</span>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination-container">
            {{ $users->links() }}
        </div>
    @else
        <!-- État vide -->
        <div class="empty-state">
            <div class="empty-icon">👥</div>
            <h3 class="empty-title">Aucun utilisateur trouvé</h3>
            <p class="empty-text">Commencez par ajouter votre premier utilisateur à la plateforme</p>
            <a href="{{ route('admin.users.create') }}" class="add-user-btn">
                <span class="btn-icon">➕</span>
                Ajouter le premier utilisateur
            </a>
        </div>
    @endif

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation d'entrée pour les cartes utilisateur
    const userCards = document.querySelectorAll('.user-card');
    userCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateX(-30px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.6s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateX(0)';
        }, index * 100);
    });

    // Animation pour les statistiques
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.6s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 200 + (index * 100));
    });

    // Effet de confirmation amélioré pour la suppression
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (!confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.')) {
                e.preventDefault();
                e.stopPropagation();
                
                // Effet de shake sur le bouton
                this.style.animation = 'shake 0.5s ease-in-out';
                setTimeout(() => {
                    this.style.animation = '';
                }, 500);
            }
        });
    });

    // Effet de hover sur les cartes
    userCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Mise à jour en temps réel des statistiques (simulation)
    function updateStats() {
        const statValues = document.querySelectorAll('.stat-value');
        statValues.forEach(stat => {
            const currentValue = parseInt(stat.textContent);
            const newValue = currentValue + Math.floor(Math.random() * 3);
            stat.textContent = newValue;
            
            // Effet de pulse sur la mise à jour
            stat.style.transform = 'scale(1.1)';
            setTimeout(() => {
                stat.style.transform = 'scale(1)';
            }, 300);
        });
    }

    // Mettre à jour les stats toutes les 10 secondes (démonstration)
    // setInterval(updateStats, 10000);
});
</script>

@endsection