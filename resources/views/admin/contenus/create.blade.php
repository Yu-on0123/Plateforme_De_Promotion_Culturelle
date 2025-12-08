@extends('admin.dashboard')

@section('title', 'Créer un Nouveau Contenu')

@section('content')

<style>
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --primary-light: #c7d2fe;
    --secondary: #f8fafc;
    --accent: #10b981;
    --success: #10b981;
    --danger: #ef4444;
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

@keyframes slideInFromRight {
    from {
        opacity: 0;
        transform: translateX(30px);
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
    50% { transform: translateY(-10px) rotate(5deg); }
}

@keyframes sparkle {
    0%, 100% { opacity: 0; transform: scale(0); }
    50% { opacity: 1; transform: scale(1); }
}

@keyframes typewriter {
    from { width: 0; }
    to { width: 100%; }
}

/* Styles principaux */
.create-content-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

/* Header avec dégradé */
.create-header {
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

.create-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.create-header-content {
    position: relative;
    z-index: 2;
}

.create-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    animation: float 6s ease-in-out infinite;
    display: inline-block;
}

.create-title {
    font-size: 2.5rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.create-subtitle {
    font-size: 1.125rem;
    opacity: 0.9;
    font-weight: 500;
}

/* Formulaire */
.create-form-container {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 24px;
    padding: 2.5rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    animation: slideInFromRight 0.8s ease-out 0.2s both;
}

/* Messages d'erreur stylisés */
.error-container {
    background: linear-gradient(135deg, #fef2f2, #fee2e2);
    border: 1px solid #fecaca;
    border-radius: 16px;
    padding: 1.5rem;
    margin-bottom: 2rem;
    animation: shake 0.5s ease-in-out;
}

.error-title {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-weight: 700;
    color: #dc2626;
    margin-bottom: 1rem;
    font-size: 1.125rem;
}

.error-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.error-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.5rem 0;
    color: #991b1b;
    font-weight: 500;
}

.error-item::before {
    content: '⚠️';
    font-size: 1.125rem;
}

/* Grille de formulaire */
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}

/* Groupes de formulaire */
.form-group {
    margin-bottom: 2rem;
    animation: fadeInUp 0.6s ease-out;
}

.form-group:nth-child(1) { animation-delay: 0.3s; }
.form-group:nth-child(2) { animation-delay: 0.4s; }
.form-group:nth-child(3) { animation-delay: 0.5s; }
.form-group:nth-child(4) { animation-delay: 0.6s; }

.form-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    color: white;
    background: linear-gradient(135deg, var(--accent), #047857);
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
}

.form-icon::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: rgba(255, 255, 255, 0.1);
    transform: rotate(45deg);
    animation: sparkle 3s ease-in-out infinite;
}

.form-label {
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-light);
}

.form-input {
    width: 100%;
    padding: 1.25rem 1.5rem;
    border: 2px solid #e5e7eb;
    border-radius: 16px;
    font-size: 1rem;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
}

.form-input:focus {
    outline: none;
    border-color: var(--accent);
    background: white;
    box-shadow: 0 4px 25px rgba(16, 185, 129, 0.2);
    transform: translateY(-3px);
}

.form-input.error {
    border-color: #ef4444;
    background: #fef2f2;
    animation: shake 0.5s ease-in-out;
}

.form-input.success {
    border-color: #10b981;
    background: #f0fdf4;
}

.form-textarea {
    resize: vertical;
    min-height: 200px;
    line-height: 1.6;
    font-family: inherit;
}

.form-select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1.5rem center;
    background-size: 1rem;
    padding-right: 3.5rem;
}

/* Compteurs de caractères */
.char-counter {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 0.75rem;
    font-size: 0.9rem;
}

.char-count {
    font-weight: 700;
    transition: color 0.3s ease;
}

.char-limit {
    font-weight: 500;
    color: var(--text-light);
}

/* Aperçu en temps réel */
.preview-section {
    background: rgba(248, 250, 252, 0.8);
    border: 2px dashed #cbd5e1;
    border-radius: 16px;
    padding: 1.5rem;
    margin-top: 1.5rem;
    transition: all 0.3s ease;
}

.preview-section:hover {
    border-color: var(--accent);
    background: rgba(16, 185, 129, 0.05);
}

.preview-title {
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-light);
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.preview-content {
    font-size: 1rem;
    color: var(--text);
    line-height: 1.6;
}

.preview-empty {
    color: var(--text-light);
    font-style: italic;
    opacity: 0.7;
}

.content-preview {
    background: white;
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    border-left: 4px solid var(--accent);
}

.preview-header {
    display: flex;
    justify-content: between;
    align-items: flex-start;
    margin-bottom: 1rem;
    gap: 1rem;
}

.preview-title-text {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text);
    flex: 1;
}

.preview-meta {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 1rem;
}

.meta-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: rgba(99, 102, 241, 0.1);
    color: var(--primary);
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
}

/* Actions */
.form-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: flex-end;
    flex-wrap: wrap;
    margin-top: 2.5rem;
    padding-top: 2rem;
    border-top: 2px solid rgba(16, 185, 129, 0.1);
    animation: fadeInUp 0.6s ease-out 0.7s both;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 1.25rem 2.5rem;
    border-radius: 16px;
    font-weight: 700;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    cursor: pointer;
    border: none;
    text-decoration: none;
    gap: 0.75rem;
    min-width: 160px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.btn:hover::before {
    left: 100%;
}

.btn-primary {
    background: linear-gradient(135deg, var(--accent), #047857);
    color: white;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #047857, #065f46);
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(16, 185, 129, 0.4);
    animation: pulse 1s infinite;
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
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.btn-icon {
    font-size: 1.25rem;
}

/* Indicateur de chargement */
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(10px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.loading-overlay.active {
    opacity: 1;
    visibility: visible;
}

.loading-spinner {
    width: 70px;
    height: 70px;
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-top: 4px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-bottom: 1.5rem;
}

.loading-text {
    color: white;
    font-size: 1.125rem;
    font-weight: 600;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Responsive */
@media (max-width: 768px) {
    .create-content-container {
        padding: 1rem;
    }
    
    .create-header {
        padding: 2rem 1rem;
    }
    
    .create-title {
        font-size: 2rem;
    }
    
    .create-form-container {
        padding: 2rem 1.5rem;
    }
    
    .form-actions {
        flex-direction: column;
        align-items: stretch;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .create-title {
        font-size: 1.75rem;
    }
    
    .form-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.75rem;
    }
    
    .form-icon {
        width: 45px;
        height: 45px;
        font-size: 1.125rem;
    }
    
    .preview-header {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>

<div class="create-content-container">

    <!-- Overlay de chargement -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
        <div class="loading-text">Création du contenu en cours...</div>
    </div>

    <!-- Header avec dégradé -->
    <div class="create-header">
        <div class="create-header-content">
            <div class="create-icon">📝</div>
            <h1 class="create-title">Nouveau Contenu</h1>
            <p class="create-subtitle">Créez un nouveau contenu pour votre plateforme</p>
        </div>
    </div>

    <!-- Formulaire -->
    <div class="create-form-container">
        @if ($errors->any())
            <div class="error-container">
                <div class="error-title">
                    <span>🚫</span>
                    Corrections nécessaires
                </div>
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li class="error-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.contenus.store') }}" id="createForm">
            @csrf

            <!-- Titre -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon">📌</div>
                    <div>
                        <label class="form-label">Titre du contenu</label>
                        <div class="char-counter">
                            <span class="char-count" id="titreCount">0</span>
                            <span class="char-limit">/ 200 caractères</span>
                        </div>
                    </div>
                </div>
                <input type="text" 
                       name="titre" 
                       value="{{ old('titre') }}"
                       class="form-input @error('titre') error @enderror" 
                       placeholder="Entrez un titre accrocheur pour votre contenu..."
                       maxlength="200"
                       required
                       id="titreInput">
                
                <!-- Aperçu du titre -->
                <div class="preview-section">
                    <div class="preview-title">
                        <span>👁️</span>
                        Aperçu du titre
                    </div>
                    <div class="preview-content">
                        <div id="titrePreview" class="preview-title-text">
                            <span class="preview-empty">Le titre apparaîtra ici</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-grid">
                <!-- Type -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">📂</div>
                        <label class="form-label">Type de contenu</label>
                    </div>
                    <select name="id_type" 
                            class="form-input form-select @error('id_type') error @enderror" 
                            required
                            id="typeSelect">
                        <option value="">-- Choisir un type --</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}" @if(old('id_type')==$type->id) selected @endif>
                                {{ $type->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Auteur -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">👤</div>
                        <label class="form-label">Auteur</label>
                    </div>
                    <select name="id_auteur" 
                            class="form-input form-select @error('id_auteur') error @enderror" 
                            required
                            id="auteurSelect">
                        <option value="">-- Choisir un auteur --</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" @if(old('id_auteur')==$user->id) selected @endif>
                                {{ $user->prenom }} {{ $user->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Région -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">🗺️</div>
                        <label class="form-label">Région</label>
                    </div>
                    <select name="id_region" 
                            class="form-input form-select @error('id_region') error @enderror" 
                            required
                            id="regionSelect">
                        <option value="">-- Choisir une région --</option>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}" @if(old('id_region')==$region->id) selected @endif>
                                {{ $region->nom }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_region')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Langue -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">🌐</div>
                        <label class="form-label">Langue</label>
                    </div>
                    <select name="id_langue" 
                            class="form-input form-select @error('id_langue') error @enderror" 
                            required
                            id="langueSelect">
                        <option value="">-- Choisir une langue --</option>
                        @foreach($langues as $langue)
                            <option value="{{ $langue->id }}" @if(old('id_langue')==$langue->id) selected @endif>
                                {{ $langue->nom }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_langue')
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Texte -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon">📄</div>
                    <div>
                        <label class="form-label">Contenu texte</label>
                        <div class="char-counter">
                            <span class="char-count" id="texteCount">0</span>
                            <span class="char-limit">/ 5000 caractères</span>
                        </div>
                    </div>
                </div>
                <textarea name="texte" 
                          rows="8"
                          class="form-input form-textarea @error('texte') error @enderror"
                          placeholder="Rédigez votre contenu ici..."
                          maxlength="5000"
                          id="texteInput">{{ old('texte') }}</textarea>
                
                <!-- Aperçu du contenu -->
                <div class="preview-section">
                    <div class="preview-title">
                        <span>👁️</span>
                        Aperçu du contenu
                    </div>
                    <div class="preview-content">
                        <div class="content-preview">
                            <div class="preview-header">
                                <div class="preview-title-text" id="previewTitre">
                                    <span class="preview-empty">Titre du contenu</span>
                                </div>
                            </div>
                            <div class="preview-meta">
                                <div class="meta-badge" id="previewType">
                                    <span>📂</span>
                                    <span>Type</span>
                                </div>
                                <div class="meta-badge" id="previewAuteur">
                                    <span>👤</span>
                                    <span>Auteur</span>
                                </div>
                                <div class="meta-badge" id="previewRegion">
                                    <span>🗺️</span>
                                    <span>Région</span>
                                </div>
                                <div class="meta-badge" id="previewLangue">
                                    <span>🌐</span>
                                    <span>Langue</span>
                                </div>
                            </div>
                            <div class="preview-text" id="previewTexte">
                                <span class="preview-empty">Le contenu texte apparaîtra ici</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.contenus.index') }}" class="btn btn-secondary">
                    <span class="btn-icon">←</span>
                    Annuler
                </a>
                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <span class="btn-icon">✨</span>
                    Publier le contenu
                </button>
            </div>
        </form>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createForm');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const submitBtn = document.getElementById('submitBtn');
    
    // Éléments d'entrée
    const titreInput = document.getElementById('titreInput');
    const typeSelect = document.getElementById('typeSelect');
    const auteurSelect = document.getElementById('auteurSelect');
    const regionSelect = document.getElementById('regionSelect');
    const langueSelect = document.getElementById('langueSelect');
    const texteInput = document.getElementById('texteInput');
    
    // Éléments de preview
    const titrePreview = document.getElementById('titrePreview');
    const previewTitre = document.getElementById('previewTitre');
    const previewType = document.getElementById('previewType');
    const previewAuteur = document.getElementById('previewAuteur');
    const previewRegion = document.getElementById('previewRegion');
    const previewLangue = document.getElementById('previewLangue');
    const previewTexte = document.getElementById('previewTexte');
    
    // Compteurs
    const titreCount = document.getElementById('titreCount');
    const texteCount = document.getElementById('texteCount');

    // Événements de saisie
    titreInput.addEventListener('input', function() {
        updateCounter(this, titreCount);
        updateTitrePreview(this.value);
        validateField(this);
    });

    typeSelect.addEventListener('change', function() {
        updateTypePreview(this.options[this.selectedIndex]?.text);
        validateField(this);
    });

    auteurSelect.addEventListener('change', function() {
        updateAuteurPreview(this.options[this.selectedIndex]?.text);
        validateField(this);
    });

    regionSelect.addEventListener('change', function() {
        updateRegionPreview(this.options[this.selectedIndex]?.text);
        validateField(this);
    });

    langueSelect.addEventListener('change', function() {
        updateLanguePreview(this.options[this.selectedIndex]?.text);
        validateField(this);
    });

    texteInput.addEventListener('input', function() {
        updateCounter(this, texteCount);
        updateTextePreview(this.value);
        validateField(this);
    });

    // Validation du formulaire
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Validation des champs requis
        isValid = validateField(titreInput) && isValid;
        isValid = validateField(typeSelect) && isValid;
        isValid = validateField(auteurSelect) && isValid;
        isValid = validateField(regionSelect) && isValid;
        isValid = validateField(langueSelect) && isValid;
        isValid = validateField(texteInput) && isValid;
        
        if (isValid) {
            // Afficher l'overlay de chargement
            loadingOverlay.classList.add('active');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="btn-icon">⏳</span>Publication...';
            
            // Soumission du formulaire
            setTimeout(() => {
                form.submit();
            }, 2000);
        } else {
            // Effet de shake sur le bouton
            submitBtn.style.animation = 'shake 0.5s ease-in-out';
            setTimeout(() => {
                submitBtn.style.animation = '';
            }, 500);
        }
    });

    // Fonctions utilitaires
    function updateCounter(input, counterElement) {
        const count = input.value.length;
        const maxLength = input.getAttribute('maxlength');
        counterElement.textContent = count;
        
        // Changer la couleur selon le pourcentage
        const percentage = (count / maxLength) * 100;
        if (percentage > 90) {
            counterElement.style.color = '#ef4444';
        } else if (percentage > 75) {
            counterElement.style.color = '#f59e0b';
        } else if (percentage > 0) {
            counterElement.style.color = '#10b981';
        } else {
            counterElement.style.color = '#64748b';
        }
    }

    function updateTitrePreview(value) {
        const trimmedValue = value.trim();
        if (trimmedValue) {
            titrePreview.textContent = trimmedValue;
            titrePreview.className = 'preview-title-text';
            previewTitre.textContent = trimmedValue;
        } else {
            titrePreview.innerHTML = '<span class="preview-empty">Le titre apparaîtra ici</span>';
            previewTitre.innerHTML = '<span class="preview-empty">Titre du contenu</span>';
        }
    }

    function updateTypePreview(value) {
        if (value && value !== '-- Choisir un type --') {
            previewType.innerHTML = `<span>📂</span><span>${value}</span>`;
        } else {
            previewType.innerHTML = `<span>📂</span><span>Type</span>`;
        }
    }

    function updateAuteurPreview(value) {
        if (value && value !== '-- Choisir un auteur --') {
            previewAuteur.innerHTML = `<span>👤</span><span>${value}</span>`;
        } else {
            previewAuteur.innerHTML = `<span>👤</span><span>Auteur</span>`;
        }
    }

    function updateRegionPreview(value) {
        if (value && value !== '-- Choisir une région --') {
            previewRegion.innerHTML = `<span>🗺️</span><span>${value}</span>`;
        } else {
            previewRegion.innerHTML = `<span>🗺️</span><span>Région</span>`;
        }
    }

    function updateLanguePreview(value) {
        if (value && value !== '-- Choisir une langue --') {
            previewLangue.innerHTML = `<span>🌐</span><span>${value}</span>`;
        } else {
            previewLangue.innerHTML = `<span>🌐</span><span>Langue</span>`;
        }
    }

    function updateTextePreview(value) {
        const trimmedValue = value.trim();
        if (trimmedValue) {
            previewTexte.textContent = trimmedValue.length > 300 ? 
                trimmedValue.substring(0, 300) + '...' : trimmedValue;
            previewTexte.className = 'preview-text';
        } else {
            previewTexte.innerHTML = '<span class="preview-empty">Le contenu texte apparaîtra ici</span>';
        }
    }

    function validateField(input) {
        const value = input.value ? input.value.trim() : '';
        const isValid = value.length > 0;
        
        if (isValid) {
            input.classList.remove('error');
            input.classList.add('success');
        } else {
            input.classList.add('error');
            input.classList.remove('success');
        }
        
        return isValid;
    }

    // Initialisation
    updateTitrePreview(titreInput.value);
    updateTypePreview(typeSelect.options[typeSelect.selectedIndex]?.text);
    updateAuteurPreview(auteurSelect.options[auteurSelect.selectedIndex]?.text);
    updateRegionPreview(regionSelect.options[regionSelect.selectedIndex]?.text);
    updateLanguePreview(langueSelect.options[langueSelect.selectedIndex]?.text);
    updateTextePreview(texteInput.value);
    updateCounter(titreInput, titreCount);
    updateCounter(texteInput, texteCount);

    // Animation d'entrée pour les groupes de formulaire
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.opacity = '0';
        group.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            group.style.transition = 'all 0.6s ease';
            group.style.opacity = '1';
            group.style.transform = 'translateY(0)';
        }, 300 + (index * 100));
    });

    // Effet de focus amélioré
    document.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.querySelector('.preview-section')?.style.setProperty('border-color', 'var(--accent)');
            this.parentElement.querySelector('.preview-section')?.style.setProperty('background', 'rgba(16, 185, 129, 0.05)');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.querySelector('.preview-section')?.style.setProperty('border-color', '#cbd5e1');
            this.parentElement.querySelector('.preview-section')?.style.setProperty('background', 'rgba(248, 250, 252, 0.8)');
        });
    });
});
</script>

@endsection