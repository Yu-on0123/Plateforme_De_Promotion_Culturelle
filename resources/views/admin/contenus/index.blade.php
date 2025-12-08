@extends('admin.dashboard')

@section('title', 'Gestion des Contenus')

@section('content')

<style>
:root {
    /* Palette harmonieuse - Bleu/Violet dominant avec accents chauds */
    --primary-50: #f0f4ff;
    --primary-100: #e0e7ff;
    --primary-200: #c7d2fe;
    --primary-300: #a5b4fc;
    --primary-400: #818cf8;
    --primary-500: #6366f1;
    --primary-600: #4f46e5;
    --primary-700: #4338ca;
    --primary-800: #3730a3;
    --primary-900: #312e81;
    
    --accent-50: #fffbeb;
    --accent-100: #fef3c7;
    --accent-200: #fde68a;
    --accent-300: #fcd34d;
    --accent-400: #fbbf24;
    --accent-500: #f59e0b;
    --accent-600: #d97706;
    --accent-700: #b45309;
    --accent-800: #92400e;
    --accent-900: #78350f;
    
    --success-50: #ecfdf5;
    --success-100: #d1fae5;
    --success-200: #a7f3d0;
    --success-300: #6ee7b7;
    --success-400: #34d399;
    --success-500: #10b981;
    --success-600: #059669;
    --success-700: #047857;
    --success-800: #065f46;
    --success-900: #064e3b;
    
    --danger-50: #fef2f2;
    --danger-100: #fee2e2;
    --danger-200: #fecaca;
    --danger-300: #fca5a5;
    --danger-400: #f87171;
    --danger-500: #ef4444;
    --danger-600: #dc2626;
    --danger-700: #b91c1c;
    --danger-800: #991b1b;
    --danger-900: #7f1d1d;
    
    --gray-50: #f8fafc;
    --gray-100: #f1f5f9;
    --gray-200: #e2e8f0;
    --gray-300: #cbd5e1;
    --gray-400: #94a3b8;
    --gray-500: #64748b;
    --gray-600: #475569;
    --gray-700: #334155;
    --gray-800: #1e293b;
    --gray-900: #0f172a;

    /* Variables fonctionnelles */
    --gradient: linear-gradient(135deg, var(--primary-500) 0%, var(--primary-700) 100%);
    --gradient-accent: linear-gradient(135deg, var(--accent-500), var(--accent-700));
    --gradient-success: linear-gradient(135deg, var(--success-500), var(--success-700));
    --gradient-danger: linear-gradient(135deg, var(--danger-500), var(--danger-700));
    
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

@keyframes actionGlow {
    0%, 100% { box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.4); }
    50% { box-shadow: 0 0 0 6px rgba(99, 102, 241, 0); }
}

.contenu-header {
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

.contenu-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.contenu-header > div {
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
    border: 1px solid var(--gray-200);
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
    color: var(--gray-600);
    font-size: 0.9rem;
    font-weight: 500;
}

.table-container {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: all 0.3s ease;
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.table-container:hover {
    box-shadow: var(--shadow-lg);
}

.dataTables_wrapper {
    padding: 0 !important;
}

#contenuTable {
    width: 100% !important;
    border-collapse: collapse;
}

#contenuTable thead th {
    background: linear-gradient(135deg, var(--gray-50), var(--gray-100));
    padding: 1.25rem 1rem;
    font-weight: 700;
    color: var(--gray-800);
    border-bottom: 2px solid var(--gray-200);
    text-transform: uppercase;
    font-size: 0.875rem;
    letter-spacing: 0.5px;
}

#contenuTable tbody tr {
    transition: all 0.3s ease;
    border-bottom: 1px solid var(--gray-200);
}

#contenuTable tbody tr:hover {
    background: linear-gradient(135deg, var(--gray-50), var(--gray-100));
    transform: translateX(8px);
}

#contenuTable tbody td {
    padding: 1.25rem 1rem;
    color: var(--gray-800);
    font-weight: 500;
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
    background: linear-gradient(135deg, var(--accent-100), var(--accent-200));
    color: var(--accent-800);
}

.btn-edit:hover {
    background: linear-gradient(135deg, var(--accent-200), var(--accent-300));
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
}

.btn-delete {
    background: linear-gradient(135deg, var(--danger-100), var(--danger-200));
    color: var(--danger-800);
}

.btn-delete:hover {
    background: linear-gradient(135deg, var(--danger-200), var(--danger-300));
    box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
}

.btn-add {
    background: var(--gradient);
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

/* Badges harmonisés */
.type-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: linear-gradient(135deg, var(--primary-100), var(--primary-200));
    color: var(--primary-800);
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    border: 1px solid var(--primary-200);
    transition: all 0.3s ease;
}

.type-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.2);
}

.statut-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.statut-publie {
    background: linear-gradient(135deg, var(--success-100), var(--success-200));
    color: var(--success-800);
    border: 1px solid var(--success-200);
}

.statut-brouillon {
    background: linear-gradient(135deg, var(--accent-100), var(--accent-200));
    color: var(--accent-800);
    border: 1px solid var(--accent-200);
}

.statut-archive {
    background: linear-gradient(135deg, var(--gray-100), var(--gray-200));
    color: var(--gray-700);
    border: 1px solid var(--gray-200);
}

.auteur-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: linear-gradient(135deg, #fce7f3, #fbcfe8);
    color: #831843;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    border: 1px solid #fbcfe8;
    transition: all 0.3s ease;
}

.auteur-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(236, 72, 153, 0.2);
}

.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--gray-200);
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
    animation: pulse 3s ease-in-out infinite;
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

.success-message {
    background: linear-gradient(135deg, var(--success-50), var(--success-100));
    color: var(--success-800);
    padding: 1rem 1.5rem;
    border-radius: var(--radius);
    border: 1px solid var(--success-200);
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
    background: var(--success-500);
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

/* Styles DataTables harmonisés */
.dataTables_filter input {
    padding: 0.75rem 1rem;
    border: 1px solid var(--gray-300);
    border-radius: var(--radius-sm);
    margin-left: 0.5rem;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.8);
}

.dataTables_filter input:focus {
    outline: none;
    border-color: var(--primary-500);
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
}

.dataTables_length select {
    padding: 0.5rem 1rem;
    border: 1px solid var(--gray-300);
    border-radius: var(--radius-sm);
    margin: 0 0.5rem;
    background: rgba(255, 255, 255, 0.8);
}

.dataTables_paginate .paginate_button {
    padding: 0.5rem 1rem;
    margin: 0 0.25rem;
    border: 1px solid var(--gray-300);
    border-radius: var(--radius-sm);
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.8);
}

.dataTables_paginate .paginate_button:hover {
    background: var(--gradient) !important;
    color: white !important;
    border-color: var(--primary-500);
}

.dataTables_paginate .paginate_button.current {
    background: var(--gradient) !important;
    color: white !important;
    border-color: var(--primary-500);
}

@media (max-width: 768px) {
    .stats-container {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .contenu-header {
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
    
    #contenuTable {
        display: block;
        overflow-x: auto;
    }
}

@media (max-width: 480px) {
    .stats-container {
        grid-template-columns: 1fr;
    }
    
    #contenuTable thead {
        display: none;
    }
    
    #contenuTable tbody tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid var(--gray-200);
        border-radius: var(--radius-sm);
    }
    
    #contenuTable tbody td {
        display: block;
        text-align: right;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--gray-200);
    }
    
    #contenuTable tbody td:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.75rem;
        color: var(--gray-500);
    }
    
    #contenuTable tbody td:last-child {
        border-bottom: none;
    }
    
    .actions-container {
        justify-content: flex-end;
    }
}
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- Header avec dégradé --}}
    <div class="contenu-header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2">Gestion des Contenus</h1>
                <p class="opacity-90 text-lg">Créez et gérez tous vos contenus en un seul endroit</p>
            </div>
            <a href="{{ route('admin.contenus.create') }}" class="btn-add">
                <span>📝</span> Créer un contenu
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
            <div class="stat-value">{{ $contenus->count() }}</div>
            <div class="stat-label">Total des contenus</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $contenus->where('statut', 'publié')->count() }}</div>
            <div class="stat-label">Contenus publiés</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $contenus->where('statut', 'brouillon')->count() }}</div>
            <div class="stat-label">Brouillons</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $contenus->unique('type_id')->count() }}</div>
            <div class="stat-label">Types différents</div>
        </div>
    </div>

    {{-- Tableau des contenus --}}
    <div class="table-container">
        <table id="contenuTable" class="display min-w-full">
            <thead>
                <tr>
                    <th class="text-left">Titre</th>
                    <th class="text-left">Type</th>
                    <th class="text-left">Auteur</th>
                    <th class="text-left">Statut</th>
                    <th class="text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contenus as $contenu)
                <tr id="contenu-{{ $contenu->id }}">
                    <td data-label="Titre">
                        <div class="font-semibold text-gray-900 max-w-xs truncate" title="{{ $contenu->titre }}">
                            {{ $contenu->titre }}
                        </div>
                    </td>
                    <td data-label="Type">
                        @if($contenu->type)
                            <span class="type-badge">{{ $contenu->type->nom }}</span>
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td data-label="Auteur">
                        @if($contenu->auteur)
                            <span class="auteur-badge">{{ $contenu->auteur->nom }}</span>
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td data-label="Statut">
                        @php
                            $statutClass = match($contenu->statut) {
                                'publié' => 'statut-publie',
                                'brouillon' => 'statut-brouillon',
                                'archivé' => 'statut-archive',
                                default => 'statut-brouillon'
                            };
                        @endphp
                        <span class="statut-badge {{ $statutClass }}">
                            {{ $contenu->statut ?? 'brouillon' }}
                        </span>
                    </td>
                    <td data-label="Actions">
                        <div class="actions-container">
                            <a href="{{ route('admin.contenus.edit', $contenu->id) }}" 
                               class="action-btn btn-edit"
                               title="Modifier">
                                <span>✏️</span>
                                <div class="action-tooltip">Modifier</div>
                            </a>
                            <button onclick="deleteContenu({{ $contenu->id }})" 
                                    class="action-btn btn-delete"
                                    title="Supprimer">
                                <span>🗑️</span>
                                <div class="action-tooltip">Supprimer</div>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- État vide --}}
    @if($contenus->count() === 0)
    <div class="empty-state mt-8">
        <div class="empty-state-icon">📝</div>
        <h3 class="text-2xl font-bold text-gray-800 mb-3">Aucun contenu créé</h3>
        <p class="empty-state-text">Commencez par créer votre premier contenu</p>
        <a href="{{ route('admin.contenus.create') }}" class="btn-add mt-4">
            <span>➕</span> Créer le premier contenu
        </a>
    </div>
    @endif

</div>

@push('scripts')
<script>
$(document).ready(function() {
    $('#contenuTable').DataTable({
        order: [[0, 'asc']],
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
        },
        dom: '<"flex justify-between items-center mb-4"lf>rt<"flex justify-between items-center mt-4"ip>',
        initComplete: function() {
            $('.dataTables_filter input').addClass('search-input');
            $('.dataTables_length select').addClass('length-select');
        }
    });
});

function deleteContenu(id){
    if(!confirm("Êtes-vous sûr de vouloir supprimer ce contenu ? Cette action est irréversible.")) return;

    $.ajax({
        url: "/admin/contenus/" + id,
        method: "POST",
        data: {
            _method: 'DELETE',
            _token: "{{ csrf_token() }}"
        },
        success: function(response){
            // Animation de suppression
            $('#contenu-' + id).css('background', '#fee2e2');
            $('#contenu-' + id).fadeOut(400, function(){
                $(this).remove();
                $('#contenuTable').DataTable().draw();
                showNotification('Contenu supprimé avec succès', 'success');
            });
        },
        error: function(){
            showNotification('Erreur lors de la suppression du contenu', 'error');
        }
    });
}

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

// Animation d'entrée pour les statistiques
document.addEventListener('DOMContentLoaded', function() {
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
});
</script>
@endpush
@endsection