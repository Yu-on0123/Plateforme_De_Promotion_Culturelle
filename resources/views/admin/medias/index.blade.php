{{-- resources/views/admin/medias/index.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Gestion des Médias')

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

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-8px) rotate(3deg); }
}

@keyframes mediaHover {
    0% { transform: translateY(0) scale(1); }
    100% { transform: translateY(-8px) scale(1.02); }
}

body {
    background: var(--gray-50);
}

.media-header {
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

.media-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.media-header > div {
    position: relative;
    z-index: 2;
}

.media-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.75rem;
}

.media-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    display: flex;
    flex-direction: column;
    height: 100%;
    position: relative;
    animation: slideInFromLeft 0.6s ease-out;
}

.media-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.media-card:hover::before {
    transform: scaleX(1);
}

.media-card:hover {
    animation: mediaHover 0.4s ease-out forwards;
    box-shadow: var(--shadow-hover);
}

.media-img-container {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
    background: linear-gradient(135deg, var(--gray-100), var(--gray-200));
}

.media-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s ease;
}

.media-card:hover .media-img {
    transform: scale(1.1);
}

.media-type-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(0, 0, 0, 0.75);
    backdrop-filter: blur(10px);
    color: white;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.media-info {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.media-title {
    font-weight: 700;
    color: var(--gray-800);
    margin-bottom: 0.75rem;
    font-size: 1.2rem;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.media-description {
    color: var(--gray-600);
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 1rem;
    flex-grow: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.media-meta {
    display: flex;
    justify-content: space-between;
    font-size: 0.8rem;
    color: var(--gray-500);
    margin-top: auto;
    padding-top: 1rem;
    border-top: 1px solid var(--gray-200);
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

.media-actions {
    display: flex;
    justify-content: center;
    padding: 0 1.5rem 1.5rem;
    gap: 0.75rem;
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
    animation: float 4s ease-in-out infinite;
}

.media-filters {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    padding: 1.5rem;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    border: 1px solid var(--gray-200);
}

.filter-select {
    padding: 0.75rem 1rem;
    border-radius: var(--radius-sm);
    border: 1px solid var(--gray-300);
    background: rgba(255, 255, 255, 0.8);
    color: var(--gray-800);
    font-size: 0.9rem;
    transition: all 0.3s ease;
    flex: 1;
    min-width: 180px;
}

.filter-select:focus {
    outline: none;
    border-color: var(--primary-500);
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
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

.pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 3rem;
}

.pagination {
    display: flex;
    gap: 0.5rem;
}

.page-item {
    display: inline-flex;
}

.page-link {
    padding: 0.75rem 1rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--gray-300);
    border-radius: var(--radius-sm);
    color: var(--gray-800);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.page-link:hover {
    background: var(--primary-500);
    color: white;
    border-color: var(--primary-500);
    transform: translateY(-2px);
}

.page-item.active .page-link {
    background: var(--gradient);
    color: white;
    border-color: var(--primary-500);
}

.audio-player {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gray-100), var(--gray-200));
    padding: 1rem;
}

.audio-player audio {
    width: 100%;
    max-width: 280px;
    border-radius: var(--radius-sm);
}

.document-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gray-100), var(--gray-200));
    color: var(--gray-600);
    padding: 2rem;
}

.document-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
    animation: float 3s ease-in-out infinite;
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

@media (max-width: 768px) {
    .media-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.25rem;
    }
    
    .media-filters {
        flex-direction: column;
    }
    
    .media-header {
        padding: 2rem 1.5rem;
    }
    
    .filter-select {
        min-width: 100%;
    }
    
    .stats-container {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .action-btn {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .stats-container {
        grid-template-columns: 1fr;
    }
    
    .media-grid {
        grid-template-columns: 1fr;
    }
    
    .media-actions {
        justify-content: space-between;
    }
}
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- Header avec dégradé --}}
    <div class="media-header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2">Bibliothèque des Médias</h1>
                <p class="opacity-90 text-lg">Gérez tous vos contenus multimédias en un seul endroit</p>
            </div>
            <a href="{{ route('admin.medias.create') }}" class="btn-add">
                <span>➕</span> Ajouter un média
            </a>
        </div>
    </div>

    {{-- Message succès --}}
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    {{-- Statistiques avec cartes animées --}}
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-value">{{ $medias->count() }}</div>
            <div class="stat-label">Total des médias</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $medias->where('type_media_id', 1)->count() }}</div>
            <div class="stat-label">Images</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $medias->where('type_media_id', 2)->count() }}</div>
            <div class="stat-label">Vidéos</div>
        </div>
        <div class="stat-card">
            <div class="stat-value">{{ $medias->where('type_media_id', 3)->count() }}</div>
            <div class="stat-label">Documents</div>
        </div>
    </div>

    {{-- Filtres avec design amélioré --}}
    <div class="media-filters">
        <select class="filter-select">
            <option value="">Tous les types</option>
            @foreach($typesMedia as $type)
                <option value="{{ $type->id }}">{{ $type->nom }}</option>
            @endforeach
        </select>

        <select class="filter-select">
            <option value="">Tous les contenus</option>
            @foreach($contenus as $contenu)
                <option value="{{ $contenu->id }}">{{ $contenu->titre }}</option>
            @endforeach
        </select>

        <input type="text" placeholder="Rechercher un média..." class="filter-select flex-grow">
    </div>

    {{-- Grille médias avec rendu amélioré --}}
    @if($medias->count() > 0)
        <div class="media-grid">

            @foreach($medias as $media)

                @php
                    $url = $media->chemin;
                    $ext = strtolower(pathinfo($url, PATHINFO_EXTENSION));
                    $isImage = in_array($ext, ['jpg','jpeg','png','gif','webp']);
                    $isVideo = in_array($ext, ['mp4','webm','ogg']);
                    $isAudio = in_array($ext, ['mp3','wav','aac']);
                @endphp

                <div class="media-card">

                    <div class="media-img-container">
                        
                        {{-- IMAGE avec redimensionnement --}}
                        @if($isImage)
                            <img src="{{ $url }}" 
                                 class="media-img"
                                 onerror="this.src='/images/placeholder-media.jpg';"
                                 alt="{{ $media->description ?? 'Image média' }}">
                        @endif

                        {{-- VIDEO avec poster --}}
                        @if($isVideo)
                            <video class="media-img" 
                                   poster="/images/video-poster.jpg"
                                   onerror="this.poster='/images/placeholder-media.jpg'">
                                <source src="{{ $url }}" type="video/{{ $ext }}">
                            </video>
                        @endif

                        {{-- AUDIO avec player stylisé --}}
                        @if($isAudio)
                            <div class="audio-player">
                                <audio controls>
                                    <source src="{{ $url }}" type="audio/{{ $ext }}">
                                </audio>
                            </div>
                        @endif

                        {{-- DOCUMENT avec placeholder stylisé --}}
                        @if(!$isImage && !$isVideo && !$isAudio)
                            <div class="document-placeholder">
                                <div class="document-icon">📄</div>
                                <p class="text-center font-medium">Document</p>
                                <p class="text-sm mt-1">{{ strtoupper($ext) }} file</p>
                            </div>
                        @endif

                        <div class="media-type-badge">
                            {{ $media->typeMedia->nom ?? 'Non classé' }}
                        </div>

                    </div>

                    <div class="media-info">
                        <h3 class="media-title">
                            {{ $media->contenu->titre ?? 'Sans titre' }}
                        </h3>

                        <p class="media-description">
                            {{ $media->description ?? 'Aucune description fournie' }}
                        </p>

                        <div class="media-meta">
                            <span>
                                Ajouté le {{ optional($media->created_at)->format('d/m/Y') ?? 'Date inconnue' }}
                            </span>
                            <span>{{ strtoupper($ext) }}</span>
                        </div>
                    </div>

                    <div class="media-actions">
                        <a href="{{ route('admin.medias.edit', $media->id) }}" 
                           class="action-btn btn-edit"
                           title="Modifier">
                            <span>✏️</span>
                            <div class="action-tooltip">Modifier</div>
                        </a>

                        <form action="{{ route('admin.medias.destroy', $media->id) }}"
                              method="POST"
                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce média ?');">
                            @csrf
                            @method('DELETE')
                            <button class="action-btn btn-delete"
                                    title="Supprimer">
                                <span>🗑️</span>
                                <div class="action-tooltip">Supprimer</div>
                            </button>
                        </form>
                    </div>

                </div>

            @endforeach

        </div>

        {{-- Pagination stylisée --}}
        <div class="pagination-container">
            {{ $medias->links() }}
        </div>

    @else

        {{-- État vide amélioré --}}
        <div class="empty-state">
            <div class="empty-state-icon">📁</div>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Aucun média trouvé</h3>
            <p class="empty-state-text">Commencez par enrichir votre bibliothèque multimédia</p>
            <a href="{{ route('admin.medias.create') }}" class="btn-add">➕ Ajouter le premier média</a>
        </div>

    @endif

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation d'entrée pour les cartes média
    const mediaCards = document.querySelectorAll('.media-card');
    mediaCards.forEach((card, index) => {
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

    // Filtrage interactif (exemple basique)
    const filterSelects = document.querySelectorAll('.filter-select');
    filterSelects.forEach(select => {
        select.addEventListener('change', function() {
            // Implémentation du filtrage à ajouter ici
            console.log('Filtre changé:', this.value);
        });
    });
});
</script>

@endsection