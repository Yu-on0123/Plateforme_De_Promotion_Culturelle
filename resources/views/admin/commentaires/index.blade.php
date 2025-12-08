@extends('admin.dashboard')

@section('title', 'Gestion des Commentaires')

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

.commentaire-header {
    background: var(--gradient);
    border-radius: var(--radius);
    padding: 2.5rem;
    margin-bottom: 2.5rem;
    color: white;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
}

.commentaire-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.commentaire-header > div {
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

.commentaire-table {
    width: 100%;
    border-collapse: collapse;
}

.commentaire-table thead th {
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

.commentaire-table tbody tr {
    transition: all 0.3s ease;
    border-bottom: 1px solid var(--border);
}

.commentaire-table tbody tr:hover {
    background: linear-gradient(135deg, #f8fafc, #f1f5f9);
    transform: translateX(4px);
}

.commentaire-table tbody td {
    padding: 1.25rem 1rem;
    color: var(--text);
    font-weight: 500;
    vertical-align: top;
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

.comment-text {
    max-width: 300px;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.note-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-weight: 700;
    font-size: 0.875rem;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.note-excellent {
    background: linear-gradient(135deg, #ecfdf5, #d1fae5);
    color: #065f46;
    border: 2px solid #a7f3d0;
}

.note-bon {
    background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
    color: #0369a1;
    border: 2px solid #bae6fd;
}

.note-moyen {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
    border: 2px solid #fde68a;
}

.note-faible {
    background: linear-gradient(135deg, #fef2f2, #fee2e2);
    color: #991b1b;
    border: 2px solid #fecaca;
}

.user-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: linear-gradient(135deg, #fce7f3, #fbcfe8);
    color: #831843;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    border: 1px solid #fbcfe8;
}

.contenu-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
    color: #3730a3;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    border: 1px solid #c7d2fe;
    max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.date-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: linear-gradient(135deg, #ecfdf5, #d1fae5);
    color: #065f46;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    border: 1px solid #a7f3d0;
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
    
    .commentaire-header {
        padding: 2rem 1.5rem;
    }
    
    .actions-container {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
    
    .commentaire-table {
        display: block;
        overflow-x: auto;
    }
}

@media (max-width: 480px) {
    .stats-container {
        grid-template-columns: 1fr;
    }
    
    .commentaire-table thead {
        display: none;
    }
    
    .commentaire-table tbody tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
    }
    
    .commentaire-table tbody td {
        display: block;
        text-align: right;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--border);
    }
    
    .commentaire-table tbody td:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.75rem;
        color: var(--text-light);
    }
    
    .commentaire-table tbody td:last-child {
        border-bottom: none;
    }
    
    .comment-text {
        max-width: 100%;
    }
}
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- Header avec dégradé --}}
    <div class="commentaire-header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2">Gestion des Commentaires</h1>
                <p class="opacity-90 text-lg">Modérez et gérez tous les commentaires de votre plateforme</p>
            </div>
            <a href="{{ route('admin.commentaires.create') }}" class="btn btn-primary">
                <span>💬</span> Ajouter un commentaire
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
            <div class="stat-value">{{ $commentaires->count() }}</div>
            <div class="stat-label">Total des commentaires</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $commentaires->where('note', '>=', 4)->count() }}</div>
            <div class="stat-label">Commentaires positifs</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $commentaires->unique('utilisateur_id')->count() }}</div>
            <div class="stat-label">Utilisateurs actifs</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $commentaires->unique('contenu_id')->count() }}</div>
            <div class="stat-label">Contenus commentés</div>
        </div>
    </div>

    {{-- Tableau des commentaires --}}
    <div class="table-container">
        <table class="commentaire-table">
            <thead>
                <tr>
                    <th>Texte</th>
                    <th>Note</th>
                    <th>Utilisateur</th>
                    <th>Contenu</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($commentaires as $commentaire)
                    <tr id="commentaire-{{ $commentaire->id }}">
                        <td data-label="Texte">
                            <div class="comment-text" title="{{ $commentaire->texte }}">
                                {{ $commentaire->texte }}
                            </div>
                        </td>
                        <td data-label="Note">
                            @if($commentaire->note)
                                @php
                                    $noteClass = match(true) {
                                        $commentaire->note >= 4 => 'note-excellent',
                                        $commentaire->note >= 3 => 'note-bon',
                                        $commentaire->note >= 2 => 'note-moyen',
                                        default => 'note-faible'
                                    };
                                @endphp
                                <div class="note-badge {{ $noteClass }}">
                                    {{ $commentaire->note }}/5
                                </div>
                            @else
                                <span class="text-gray-400">—</span>
                            @endif
                        </td>
                        <td data-label="Utilisateur">
                            <span class="user-badge">
                                {{ $commentaire->utilisateur->name ?? 'Utilisateur supprimé' }}
                            </span>
                        </td>
                        <td data-label="Contenu">
                            <span class="contenu-badge" title="{{ $commentaire->contenu->titre ?? 'Contenu supprimé' }}">
                                {{ $commentaire->contenu->titre ?? 'Contenu supprimé' }}
                            </span>
                        </td>
                        <td data-label="Date">
                            <span class="date-badge">
                                {{ $commentaire->date }}
                            </span>
                        </td>
                        <td data-label="Actions">
                            <div class="actions-container">
                                <a href="{{ route('admin.commentaires.edit', $commentaire->id) }}" class="btn btn-edit">
                                    <span>✏️</span> Modifier
                                </a>
                                <form action="{{ route('admin.commentaires.destroy', $commentaire->id) }}" method="POST"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');">
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
                        <td colspan="6">
                            <div class="empty-state">
                                <div class="empty-state-icon">💬</div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">Aucun commentaire</h3>
                                <p class="empty-state-text">Aucun commentaire n'a été trouvé</p>
                                <a href="{{ route('admin.commentaires.create') }}" class="btn btn-primary mt-4">
                                    <span>➕</span> Ajouter le premier commentaire
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
    if (e.target.closest('form[action*="commentaires"]') && e.target.method === 'post') {
        const form = e.target;
        const row = form.closest('tr');
        if (row) {
            e.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')) {
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
                        showNotification('Commentaire supprimé avec succès', 'success');
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
</script>

@endsection