{{-- resources/views/admin/regions/show.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Détails de la Région')

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

.region-detail-header {
    background: var(--gradient);
    border-radius: var(--radius);
    padding: 2.5rem;
    margin-bottom: 2.5rem;
    color: white;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
}

.region-detail-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.region-detail-header > div {
    position: relative;
    z-index: 2;
}

.detail-card {
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
}

.detail-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient);
}

.detail-card:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-2px);
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.info-card {
    background: var(--card-gradient);
    border-radius: var(--radius);
    padding: 1.5rem;
    border: 1px solid var(--border);
    transition: all 0.3s ease;
}

.info-card:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow);
}

.info-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--text-light);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.info-value {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--text);
    line-height: 1.6;
}

.info-value-large {
    font-size: 1.5rem;
    font-weight: 700;
}

.description-card {
    background: var(--card-gradient);
    border-radius: var(--radius);
    padding: 2rem;
    border: 1px solid var(--border);
    margin-bottom: 2rem;
}

.description-content {
    color: var(--text);
    line-height: 1.7;
    font-size: 1rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-item {
    background: white;
    border-radius: var(--radius);
    padding: 1.5rem;
    text-align: center;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
    border: 1px solid var(--border);
}

.stat-item:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-lg);
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.875rem;
    color: var(--text-light);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem 1.5rem;
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

.btn-secondary {
    background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
    color: var(--text);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.btn-secondary:hover {
    background: linear-gradient(135deg, #e5e7eb, #d1d5db);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.btn-warning {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
    box-shadow: 0 2px 8px rgba(245, 158, 11, 0.15);
}

.btn-warning:hover {
    background: linear-gradient(135deg, #fde68a, #fcd34d);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.25);
}

.actions-container {
    display: flex;
    gap: 1rem;
    justify-content: flex-end;
    flex-wrap: wrap;
}

.id-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
    color: var(--text-light);
    border-radius: 50%;
    font-weight: 800;
    font-size: 1.25rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border: 3px solid white;
}

.region-name {
    font-size: 2.5rem;
    font-weight: 800;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1.2;
    margin-bottom: 0.5rem;
}

.region-subtitle {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.125rem;
    font-weight: 500;
}

.empty-value {
    color: var(--text-light);
    font-style: italic;
}

.value-with-icon {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.icon-wrapper {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.125rem;
}

.icon-population {
    background: linear-gradient(135deg, #ecfdf5, #d1fae5);
    color: #065f46;
}

.icon-area {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
}

.icon-location {
    background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
    color: #3730a3;
}

.icon-description {
    background: linear-gradient(135deg, #fce7f3, #fbcfe8);
    color: #831843;
}

@media (max-width: 768px) {
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .region-detail-header {
        padding: 2rem 1.5rem;
    }
    
    .actions-container {
        justify-content: center;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .region-name {
        font-size: 2rem;
    }
    
    .info-card {
        padding: 1.25rem;
    }
}
</style>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- Header avec dégradé --}}
    <div class="region-detail-header">
        <div class="text-center">
            <div class="flex justify-center mb-4">
                <div class="id-badge">
                    #{{ $region->id }}
                </div>
            </div>
            <h1 class="region-name">{{ $region->nom }}</h1>
            <p class="region-subtitle">Détails complets de la région</p>
        </div>
    </div>

    {{-- Cartes d'informations principales --}}
    <div class="info-grid">
        <div class="info-card">
            <div class="info-label">
                <span>👥</span> Population
            </div>
            <div class="value-with-icon">
                <div class="icon-wrapper icon-population">
                    👥
                </div>
                <div class="info-value info-value-large">
                    @if($region->population)
                        {{ number_format($region->population, 0, ',', ' ') }} habitants
                    @else
                        <span class="empty-value">Non spécifiée</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="info-card">
            <div class="info-label">
                <span>🗺️</span> Superficie
            </div>
            <div class="value-with-icon">
                <div class="icon-wrapper icon-area">
                    📏
                </div>
                <div class="info-value info-value-large">
                    @if($region->superficie)
                        {{ number_format($region->superficie, 0, ',', ' ') }} km²
                    @else
                        <span class="empty-value">Non spécifiée</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="info-card">
            <div class="info-label">
                <span>📍</span> Localisation
            </div>
            <div class="value-with-icon">
                <div class="icon-wrapper icon-location">
                    🗺️
                </div>
                <div class="info-value">
                    @if($region->localisation)
                        {{ $region->localisation }}
                    @else
                        <span class="empty-value">Non spécifiée</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Carte de description --}}
    <div class="description-card">
        <div class="info-label">
            <span>📝</span> Description
        </div>
        <div class="value-with-icon">
            <div class="icon-wrapper icon-description">
                📋
            </div>
            <div class="description-content">
                @if($region->description)
                    {{ $region->description }}
                @else
                    <span class="empty-value">Aucune description disponible pour cette région.</span>
                @endif
            </div>
        </div>
    </div>

    {{-- Statistiques supplémentaires --}}
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-number">{{ $region->id }}</div>
            <div class="stat-label">Identifiant</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">
                @if($region->population && $region->superficie)
                    {{ number_format($region->population / $region->superficie, 1) }}
                @else
                    -
                @endif
            </div>
            <div class="stat-label">Densité (hab/km²)</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">
                {{ strlen($region->nom) }}
            </div>
            <div class="stat-label">Longueur du nom</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">
                @if($region->description)
                    {{ str_word_count($region->description) }}
                @else
                    0
                @endif
            </div>
            <div class="stat-label">Mots description</div>
        </div>
    </div>

    {{-- Actions --}}
    <div class="detail-card p-6">
        <div class="actions-container">
            <a href="{{ route('admin.regions.index') }}" class="btn btn-secondary">
                <span>←</span> Retour à la liste
            </a>
            <a href="{{ route('admin.regions.edit', $region->id) }}" class="btn btn-warning">
                <span>✏️</span> Modifier la région
            </a>
        </div>
    </div>

</div>

<script>
// Animation d'entrée pour les éléments
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.info-card, .stat-item, .description-card');
    
    elements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            element.style.transition = 'all 0.6s ease';
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, index * 100);
    });
});

// Effet de pulse sur le badge ID
const idBadge = document.querySelector('.id-badge');
if (idBadge) {
    setInterval(() => {
        idBadge.style.transform = 'scale(1.05)';
        setTimeout(() => {
            idBadge.style.transform = 'scale(1)';
        }, 300);
    }, 3000);
}
</script>

@endsection