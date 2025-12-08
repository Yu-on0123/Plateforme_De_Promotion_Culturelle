@extends('admin.dashboard')

@section('title', 'Détails de la Langue - ' . $langue->nom)

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

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(5deg); }
}

@keyframes glow {
    0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.3); }
    50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.6); }
}

@keyframes slideInFromLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Styles principaux */
.langue-detail-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

/* Header avec dégradé */
.langue-header {
    background: var(--gradient);
    border-radius: 24px;
    padding: 3rem 2rem;
    margin-bottom: 2.5rem;
    color: white;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    text-align: center;
    animation: fadeInUp 0.8s ease-out;
}

.langue-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.langue-header-content {
    position: relative;
    z-index: 2;
}

.langue-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    animation: float 6s ease-in-out infinite;
    display: inline-block;
}

.langue-name {
    font-size: 3rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.langue-subtitle {
    font-size: 1.125rem;
    opacity: 0.9;
    font-weight: 500;
}

/* Grille d'informations */
.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2.5rem;
}

.info-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    animation: slideInFromLeft 0.6s ease-out;
}

.info-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    animation: glow 3s infinite;
}

.info-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(99, 102, 241, 0.1);
}

.info-icon {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
}

.info-icon.id { background: linear-gradient(135deg, #f59e0b, #d97706); }
.info-icon.name { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.info-icon.code { background: linear-gradient(135deg, #10b981, #047857); }
.info-icon.desc { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }

.info-title {
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-light);
    margin-bottom: 0.25rem;
}

.info-value {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text);
    line-height: 1.4;
}

.info-value.empty {
    color: var(--text-light);
    font-style: italic;
    font-weight: 500;
}

/* Carte de description */
.description-card {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 2.5rem;
    margin-bottom: 2.5rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.description-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.description-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: linear-gradient(135deg, #ec4899, #db2777);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
}

.description-title {
    font-size: 1.25rem;
    font-weight: 800;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.description-content {
    color: var(--text);
    line-height: 1.7;
    font-size: 1.1rem;
    padding: 1rem;
    background: rgba(248, 250, 252, 0.8);
    border-radius: 12px;
    border-left: 4px solid #8b5cf6;
}

/* Actions */
.actions-container {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
    animation: fadeInUp 0.8s ease-out 0.4s both;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 2rem;
    border-radius: 16px;
    font-weight: 700;
    font-size: 1rem;
    transition: all 0.3s ease;
    cursor: pointer;
    border: none;
    text-decoration: none;
    gap: 0.75rem;
    min-width: 160px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    color: var(--text);
    border: 1px solid var(--glass-border);
}

.btn-secondary:hover {
    background: rgba(248, 250, 252, 0.95);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.btn-warning {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
}

.btn-warning:hover {
    background: linear-gradient(135deg, #d97706, #b45309);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
}

.btn-icon {
    font-size: 1.25rem;
}

/* Statistiques supplémentaires */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1rem;
    margin-bottom: 2.5rem;
}

.stat-item {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 16px;
    padding: 1.5rem;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    animation: fadeInUp 0.6s ease-out 0.6s both;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
}

.stat-number {
    font-size: 2rem;
    font-weight: 900;
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

/* Badge de code langue */
.code-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, #10b981, #047857);
    color: white;
    border-radius: 50px;
    font-size: 1.25rem;
    font-weight: 800;
    letter-spacing: 2px;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
    margin-top: 0.5rem;
}

/* Responsive */
@media (max-width: 768px) {
    .langue-detail-container {
        padding: 1rem;
    }
    
    .langue-header {
        padding: 2rem 1rem;
    }
    
    .langue-name {
        font-size: 2.5rem;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .actions-container {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .langue-name {
        font-size: 2rem;
    }
    
    .info-card {
        padding: 1.5rem;
    }
    
    .description-card {
        padding: 1.5rem;
    }
}
</style>

<div class="langue-detail-container">

    <!-- Header avec dégradé -->
    <div class="langue-header">
        <div class="langue-header-content">
            <div class="langue-icon">🌐</div>
            <h1 class="langue-name">{{ $langue->nom }}</h1>
            <p class="langue-subtitle">Détails complets de la configuration linguistique</p>
        </div>
    </div>

    <!-- Grille d'informations principales -->
    <div class="info-grid">
        <div class="info-card">
            <div class="info-header">
                <div class="info-icon id">#</div>
                <div>
                    <div class="info-title">Identifiant Unique</div>
                    <div class="info-value">{{ $langue->id }}</div>
                </div>
            </div>
        </div>

        <div class="info-card">
            <div class="info-header">
                <div class="info-icon name">📛</div>
                <div>
                    <div class="info-title">Nom Complet</div>
                    <div class="info-value">{{ $langue->nom }}</div>
                </div>
            </div>
        </div>

        <div class="info-card">
            <div class="info-header">
                <div class="info-icon code">🔤</div>
                <div>
                    <div class="info-title">Code Langue</div>
                    <div class="code-badge">{{ $langue->code_langue }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques supplémentaires -->
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-number">{{ strlen($langue->nom) }}</div>
            <div class="stat-label">Caractères</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">{{ str_word_count($langue->nom) }}</div>
            <div class="stat-label">Mots</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">{{ strlen($langue->code_langue) }}</div>
            <div class="stat-label">Longueur Code</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">
                @if($langue->description)
                    {{ str_word_count($langue->description) }}
                @else
                    0
                @endif
            </div>
            <div class="stat-label">Mots Description</div>
        </div>
    </div>

    <!-- Carte de description -->
    <div class="description-card">
        <div class="description-header">
            <div class="description-icon">📝</div>
            <div class="description-title">Description</div>
        </div>
        <div class="description-content">
            @if($langue->description)
                {{ $langue->description }}
            @else
                <span class="info-value empty">Aucune description disponible pour cette langue.</span>
            @endif
        </div>
    </div>

    <!-- Actions -->
    <div class="actions-container">
        <a href="{{ route('admin.langues.index') }}" class="btn btn-secondary">
            <span class="btn-icon">←</span>
            Retour à la liste
        </a>
        <a href="{{ route('admin.langues.edit', $langue->id) }}" class="btn btn-warning">
            <span class="btn-icon">✏️</span>
            Modifier la langue
        </a>
    </div>

</div>

<script>
// Animation d'entrée progressive
document.addEventListener('DOMContentLoaded', function() {
    // Effet de particules sur le header
    createHeaderParticles();
    
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

    // Observer tous les éléments animables
    document.querySelectorAll('.info-card, .stat-item, .description-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });
});

// Effet de particules sur le header
function createHeaderParticles() {
    const header = document.querySelector('.langue-header');
    const particleCount = 8;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.style.cssText = `
            position: absolute;
            width: ${Math.random() * 40 + 20}px;
            height: ${Math.random() * 40 + 20}px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float ${Math.random() * 10 + 10}s infinite ease-in-out;
            animation-delay: ${Math.random() * 5}s;
            left: ${Math.random() * 100}%;
            top: ${Math.random() * 100}%;
        `;
        header.appendChild(particle);
    }
}

// Effet de hover sur les cartes d'information
document.querySelectorAll('.info-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});
</script>

@endsection