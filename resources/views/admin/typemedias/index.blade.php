@extends('admin.dashboard')

@section('title', 'Gestion des Types de Médias')

@section('content')

<style>
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --primary-light: #c7d2fe;
    --secondary: #f8fafc;
    --accent: #f59e0b;
    --accent-gradient: linear-gradient(135deg, #f59e0b, #d97706);
    --text: #1e293b;
    --text-light: #64748b;
    --border: #e2e8f0;
    --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --card-gradient: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    --shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.08), 0 2px 8px -1px rgba(0, 0, 0, 0.04);
    --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    --shadow-hover: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    --radius: 16px;
    --radius-sm: 10px;
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

@keyframes actionGlow {
    0%, 100% { box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.4); }
    50% { box-shadow: 0 0 0 6px rgba(99, 102, 241, 0); }
}

.types-media-header {
    background: var(--gradient);
    border-radius: var(--radius);
    padding: 2.5rem;
    margin-bottom: 2.5rem;
    color: white;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.8s ease-out;
}

.types-media-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.types-media-header > div {
    position: relative;
    z-index: 2;
}

.stats-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2.5rem;
}

.stat-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow);
    text-align: center;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    animation: slideInFromLeft 0.6s ease-out;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient);
}

.stat-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-hover);
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.stat-label {
    color: var(--text-light);
    font-size: 0.9rem;
    font-weight: 500;
}

.table-container {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: all 0.3s ease;
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.table-container:hover {
    box-shadow: var(--shadow-lg);
}

.types-media-table {
    width: 100%;
    border-collapse: collapse;
}

.types-media-table thead th {
    background: linear-gradient(135deg, #f8fafc, #e2e8f0);
    padding: 1.25rem 1rem;
    font-weight: 700;
    color: var(--text);
    border-bottom: 2px solid var(--border);
    text-transform: uppercase;
    font-size: 0.875rem;
    letter-spacing: 0.5px;
    text-align: left;
}

.types-media-table tbody tr {
    transition: all 0.3s ease;
    border-bottom: 1px solid var(--border);
}

.types-media-table tbody tr:hover {
    background: linear-gradient(135deg, #f8fafc, #f1f5f9);
    transform: translateX(8px);
}

.types-media-table tbody td {
    padding: 1.25rem 1rem;
    color: var(--text);
    font-weight: 500;
    vertical-align: middle;
}

/* Boutons d'action iconiques */
.action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 14px;
    font-size: 1.25rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    border: none;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.action-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
    transition: left 0.5s ease;
}

.action-btn:hover::before {
    left: 100%;
}

.action-btn:hover {
    transform: translateY(-3px) scale(1.1);
    animation: actionGlow 2s infinite;
}

.btn-edit {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
}

.btn-edit:hover {
    background: linear-gradient(135deg, #fde68a, #fcd34d);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
}

.btn-delete {
    background: linear-gradient(135deg, #fee2e2, #fecaca);
    color: #991b1b;
}

.btn-delete:hover {
    background: linear-gradient(135deg, #fecaca, #fca5a5);
    box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
}

.btn-add {
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    color: white;
    padding: 1rem 2rem;
    border-radius: 14px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(99, 102, 241, 0.3);
}

.btn-add:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(99, 102, 241, 0.4);
    animation: pulse 1s infinite;
}

.actions-container {
    display: flex;
    gap: 0.75rem;
    flex-wrap: wrap;
}

.type-media-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.75rem 1.25rem;
    background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
    color: #3730a3;
    border-radius: var(--radius-sm);
    font-size: 1rem;
    font-weight: 700;
    border: 2px solid #c7d2fe;
    box-shadow: 0 2px 8px rgba(99, 102, 241, 0.15);
    transition: all 0.3s ease;
    gap: 0.5rem;
}

.type-media-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.25);
}

.type-icon {
    font-size: 1.125rem;
    opacity: 0.8;
}

.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.8s ease-out;
}

.empty-state::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient);
}

.empty-state-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    animation: float 4s ease-in-out infinite;
}

.success-message {
    background: linear-gradient(135deg, #ecfdf5, #d1fae5);
    color: #065f46;
    padding: 1rem 1.5rem;
    border-radius: var(--radius);
    border: 1px solid #a7f3d0;
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-weight: 600;
    box-shadow: var(--shadow);
    animation: slideInFromLeft 0.6s ease-out;
}

.success-message::before {
    content: '✓';
    background: #10b981;
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

/* Tooltips pour les actions */
.action-tooltip {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-size: 0.75rem;
    font-weight: 600;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1000;
}

.action-tooltip::before {
    content: '';
    position: absolute;
    top: -6px;
    left: 50%;
    transform: translateX(-50%);
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid rgba(0, 0, 0, 0.8);
}

.action-btn:hover .action-tooltip {
    opacity: 1;
    visibility: visible;
    bottom: -35px;
}

@media (max-width: 768px) {
    .stats-container {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .types-media-header {
        padding: 2rem 1.5rem;
    }
    
    .actions-container {
        flex-direction: row;
        justify-content: center;
    }
    
    .action-btn {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
    
    .types-media-table {
        display: block;
        overflow-x: auto;
    }
}

@media (max-width: 480px) {
    .stats-container {
        grid-template-columns: 1fr;
    }
    
    .types-media-table thead {
        display: none;
    }
    
    .types-media-table tbody tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
    }
    
    .types-media-table tbody td {
        display: block;
        text-align: right;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--border);
    }
    
    .types-media-table tbody td:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.75rem;
        color: var(--text-light);
    }
    
    .types-media-table tbody td:last-child {
        border-bottom: none;
    }
    
    .actions-container {
        justify-content: flex-end;
    }
}
</style>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- Header avec dégradé --}}
    <div class="types-media-header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2">Gestion des Types de Médias</h1>
                <p class="opacity-90 text-lg">Catégorisez et organisez vos différents types de médias</p>
            </div>
            <a href="{{ route('admin.types_medias.create') }}" class="btn-add">
                <span>🎬</span> Nouveau type
            </a>
        </div>
    </div>

    {{-- Message succès --}}
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    {{-- Statistiques --}}
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-value">{{ $types->count() }}</div>
            <div class="stat-label">Types de médias</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $types->sum(fn($type) => strlen($type->nom)) }}</div>
            <div class="stat-label">Caractères totaux</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $types->max(fn($type) => strlen($type->nom)) }}</div>
            <div class="stat-label">Nom le plus long</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $types->min(fn($type) => strlen($type->nom)) }}</div>
            <div class="stat-label">Nom le plus court</div>
        </div>
    </div>

    {{-- Tableau des types --}}
    <div class="table-container">
        <table class="types-media-table">
            <thead>
                <tr>
                    <th>Type de média</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($types as $type)
                    <tr id="type-media-{{ $type->id }}">
                        <td data-label="Type de média">
                            <span class="type-media-badge">
                                @php
                                    $icon = match(strtolower($type->nom)) {
                                        'image', 'images' => '🖼️',
                                        'video', 'vidéo' => '🎬',
                                        'audio', 'son' => '🎵',
                                        'document', 'fichier' => '📄',
                                        'pdf' => '📑',
                                        default => '📁'
                                    };
                                @endphp
                                <span class="type-icon">{{ $icon }}</span>
                                {{ $type->nom }}
                            </span>
                        </td>
                        <td data-label="Actions">
                            <div class="actions-container">
                                <a href="{{ route('admin.types_medias.edit', $type->id) }}" 
                                   class="action-btn btn-edit"
                                   title="Modifier">
                                    <span>✏️</span>
                                    <div class="action-tooltip">Modifier</div>
                                </a>
                                <form action="{{ route('admin.types_medias.destroy', $type->id) }}" method="POST"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce type de média ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="action-btn btn-delete"
                                            title="Supprimer">
                                        <span>🗑️</span>
                                        <div class="action-tooltip">Supprimer</div>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">
                            <div class="empty-state">
                                <div class="empty-state-icon">🎬</div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">Aucun type de média</h3>
                                <p class="empty-state-text">Commencez par créer votre premier type de média</p>
                                <a href="{{ route('admin.types_medias.create') }}" class="btn-add mt-4">
                                    <span>➕</span> Créer le premier type
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<script>
function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg text-white font-semibold z-50 transform transition-transform duration-300 ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
    }`;
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Animation pour les actions de suppression
document.addEventListener('submit', function(e) {
    if (e.target.closest('form[action*="types_medias"]') && e.target.method === 'post') {
        const form = e.target;
        const row = form.closest('tr');
        if (row) {
            e.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer ce type de média ?')) {
                row.style.background = '#fee2e2';
                row.style.opacity = '0.7';
                
                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: '_method=DELETE'
                }).then(response => {
                    if (response.ok) {
                        row.style.transition = 'all 0.4s ease';
                        row.style.transform = 'translateX(100%)';
                        row.style.opacity = '0';
                        setTimeout(() => row.remove(), 400);
                        showNotification('Type de média supprimé avec succès', 'success');
                    } else {
                        showNotification('Erreur lors de la suppression', 'error');
                        row.style.background = '';
                        row.style.opacity = '1';
                    }
                });
            }
        }
    }
});

// Animation d'entrée pour les lignes du tableau
document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('.types-media-table tbody tr');
    
    rows.forEach((row, index) => {
        row.style.opacity = '0';
        row.style.transform = 'translateX(-20px)';
        
        setTimeout(() => {
            row.style.transition = 'all 0.5s ease';
            row.style.opacity = '1';
            row.style.transform = 'translateX(0)';
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
});

// Effet de survol sur les badges de type
const badges = document.querySelectorAll('.type-media-badge');
badges.forEach(badge => {
    badge.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-4px) scale(1.05)';
    });
    
    badge.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Effet de confirmation sur les boutons d'action
const actionButtons = document.querySelectorAll('.action-btn');
actionButtons.forEach(button => {
    button.addEventListener('click', function(e) {
        if (this.classList.contains('btn-delete')) {
            this.style.animation = 'shake 0.5s ease-in-out';
            setTimeout(() => {
                this.style.animation = '';
            }, 500);
        } else {
            this.style.animation = 'pulse 0.6s ease-in-out';
            setTimeout(() => {
                this.style.animation = '';
            }, 600);
        }
    });
});
</script>

@endsection