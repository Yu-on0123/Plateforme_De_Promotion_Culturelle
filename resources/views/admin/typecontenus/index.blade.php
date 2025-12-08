@extends('admin.dashboard')

@section('title', 'Gestion des Types de Contenu')

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

.types-header {
    background: var(--gradient);
    border-radius: var(--radius);
    padding: 2.5rem;
    margin-bottom: 2.5rem;
    color: white;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
}

.types-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.types-header > div {
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
    background: white;
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow);
    text-align: center;
    transition: transform 0.3s ease;
    position: relative;
    overflow: hidden;
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
    transform: translateY(-5px);
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
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
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: all 0.3s ease;
}

.table-container:hover {
    box-shadow: var(--shadow-lg);
}

.types-table {
    width: 100%;
    border-collapse: collapse;
}

.types-table thead th {
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

.types-table tbody tr {
    transition: all 0.3s ease;
    border-bottom: 1px solid var(--border);
}

.types-table tbody tr:hover {
    background: linear-gradient(135deg, #f8fafc, #f1f5f9);
    transform: translateX(4px);
}

.types-table tbody td {
    padding: 1.25rem 1rem;
    color: var(--text);
    font-weight: 500;
    vertical-align: middle;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem 1.25rem;
    border-radius: var(--radius-sm);
    font-weight: 600;
    font-size: 0.875rem;
    transition: all 0.3s ease;
    cursor: pointer;
    border: none;
    text-decoration: none;
    gap: 0.5rem;
    letter-spacing: 0.3px;
}

.btn-primary {
    background: var(--gradient);
    color: white;
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
}

.btn-edit {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
    box-shadow: 0 2px 8px rgba(245, 158, 11, 0.15);
}

.btn-edit:hover {
    background: linear-gradient(135deg, #fde68a, #fcd34d);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.25);
}

.btn-delete {
    background: linear-gradient(135deg, #fee2e2, #fecaca);
    color: #991b1b;
    box-shadow: 0 2px 8px rgba(239, 68, 68, 0.15);
}

.btn-delete:hover {
    background: linear-gradient(135deg, #fecaca, #fca5a5);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(239, 68, 68, 0.25);
}

.actions-container {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.type-badge {
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
}

.type-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.25);
}

.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
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

@media (max-width: 768px) {
    .stats-container {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .types-header {
        padding: 2rem 1.5rem;
    }
    
    .actions-container {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
    
    .types-table {
        display: block;
        overflow-x: auto;
    }
}

@media (max-width: 480px) {
    .stats-container {
        grid-template-columns: 1fr;
    }
    
    .types-table thead {
        display: none;
    }
    
    .types-table tbody tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
    }
    
    .types-table tbody td {
        display: block;
        text-align: right;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--border);
    }
    
    .types-table tbody td:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.75rem;
        color: var(--text-light);
    }
    
    .types-table tbody td:last-child {
        border-bottom: none;
    }
}
</style>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- Header avec dégradé --}}
    <div class="types-header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2">Gestion des Types de Contenu</h1>
                <p class="opacity-90 text-lg">Organisez et gérez les différentes catégories de contenu</p>
            </div>
            <a href="{{ route('admin.types_contenus.create') }}" class="btn btn-primary">
                <span>📁</span> Nouveau type
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
            <div class="stat-label">Types de contenu</div>
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
        <table class="types-table">
            <thead>
                <tr>
                    <th>Type de contenu</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($types as $type)
                    <tr id="type-{{ $type->id }}">
                        <td data-label="Type de contenu">
                            <span class="type-badge">
                                {{ $type->nom }}
                            </span>
                        </td>
                        <td data-label="Actions">
                            <div class="actions-container">
                                <a href="{{ route('admin.types_contenus.edit', $type->id) }}" class="btn btn-edit">
                                    <span>✏️</span> Modifier
                                </a>
                                <form action="{{ route('admin.types_contenus.destroy', $type->id) }}" method="POST"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce type de contenu ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">
                                        <span>🗑️</span> Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">
                            <div class="empty-state">
                                <div class="empty-state-icon">📁</div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">Aucun type de contenu</h3>
                                <p class="empty-state-text">Commencez par créer votre premier type de contenu</p>
                                <a href="{{ route('admin.types_contenus.create') }}" class="btn btn-primary mt-4">
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
    if (e.target.closest('form[action*="types_contenus"]') && e.target.method === 'post') {
        const form = e.target;
        const row = form.closest('tr');
        if (row) {
            e.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer ce type de contenu ?')) {
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
                        showNotification('Type de contenu supprimé avec succès', 'success');
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
    const rows = document.querySelectorAll('.types-table tbody tr');
    
    rows.forEach((row, index) => {
        row.style.opacity = '0';
        row.style.transform = 'translateX(-20px)';
        
        setTimeout(() => {
            row.style.transition = 'all 0.5s ease';
            row.style.opacity = '1';
            row.style.transform = 'translateX(0)';
        }, index * 100);
    });
});
</script>

@endsection