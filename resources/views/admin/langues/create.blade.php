@extends('admin.dashboard')

@section('title', 'Ajouter une Nouvelle Langue')

@section('content')

<style>
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --primary-light: #c7d2fe;
    --secondary: #f8fafc;
    --accent: #f59e0b;
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

/* Styles principaux */
.add-langue-container {
    max-width: 700px;
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
    font-size: 3rem;
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

/* Groupes de formulaire */
.form-group {
    margin-bottom: 2.5rem;
    animation: fadeInUp 0.6s ease-out;
}

.form-group:nth-child(1) { animation-delay: 0.3s; }
.form-group:nth-child(2) { animation-delay: 0.4s; }
.form-group:nth-child(3) { animation-delay: 0.5s; }

.form-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.form-icon {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
    position: relative;
    overflow: hidden;
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

.form-icon.nom { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.form-icon.code { background: linear-gradient(135deg, #10b981, #047857); }
.form-icon.desc { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }

.form-label {
    font-size: 1.1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-light);
    margin-bottom: 0.5rem;
}

.form-input {
    width: 100%;
    padding: 1.25rem 1.5rem;
    border: 2px solid #e5e7eb;
    border-radius: 16px;
    font-size: 1.1rem;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
}

.form-input:focus {
    outline: none;
    border-color: var(--primary);
    background: white;
    box-shadow: 0 4px 25px rgba(99, 102, 241, 0.2);
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
    min-height: 140px;
    line-height: 1.6;
    font-family: inherit;
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

/* Suggestions de langues */
.suggestions-container {
    margin-top: 1rem;
}

.suggestions-title {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--text-light);
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.suggestions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap: 0.5rem;
}

.suggestion-chip {
    background: rgba(99, 102, 241, 0.1);
    border: 1px solid rgba(99, 102, 241, 0.2);
    border-radius: 20px;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--primary);
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
}

.suggestion-chip:hover {
    background: var(--primary);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
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
    border-color: var(--primary);
    background: rgba(99, 102, 241, 0.05);
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
    font-size: 1.1rem;
    color: var(--text);
    line-height: 1.6;
}

.preview-empty {
    color: var(--text-light);
    font-style: italic;
    opacity: 0.7;
}

.code-preview {
    background: linear-gradient(135deg, #10b981, #047857);
    color: white;
    padding: 0.75rem 1.25rem;
    border-radius: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    display: inline-block;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}

/* Actions */
.form-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: flex-end;
    flex-wrap: wrap;
    margin-top: 3rem;
    padding-top: 2.5rem;
    border-top: 2px solid rgba(99, 102, 241, 0.1);
    animation: fadeInUp 0.6s ease-out 0.6s both;
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
    min-width: 180px;
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
    background: linear-gradient(135deg, var(--success), #047857);
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
    .add-langue-container {
        padding: 1rem;
    }
    
    .create-header {
        padding: 2rem 1rem;
    }
    
    .create-title {
        font-size: 2.5rem;
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
    
    .suggestions-grid {
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    }
}

@media (max-width: 480px) {
    .create-title {
        font-size: 2rem;
    }
    
    .form-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .form-icon {
        width: 50px;
        height: 50px;
        font-size: 1.25rem;
    }
}
</style>

<div class="add-langue-container">

    <!-- Overlay de chargement -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
        <div class="loading-text">Création de la langue en cours...</div>
    </div>

    <!-- Header avec dégradé -->
    <div class="create-header">
        <div class="create-header-content">
            <div class="create-icon">🌍</div>
            <h1 class="create-title">Nouvelle Langue</h1>
            <p class="create-subtitle">Ajoutez une nouvelle langue à votre plateforme</p>
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

        <form method="POST" action="{{ route('admin.langues.store') }}" id="createForm">
            @csrf

            <!-- Nom -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon nom">📛</div>
                    <div>
                        <label class="form-label">Nom de la langue</label>
                        <div class="char-counter">
                            <span class="char-count" id="nomCount">0</span>
                            <span class="char-limit">/ 50 caractères</span>
                        </div>
                    </div>
                </div>
                <input type="text" 
                       name="nom" 
                       value="{{ old('nom') }}"
                       class="form-input @error('nom') error @enderror" 
                       placeholder="Ex: Français, English, Español, Deutsch..."
                       maxlength="50"
                       required
                       id="nomInput">
                
                <!-- Suggestions -->
                <div class="suggestions-container">
                    <div class="suggestions-title">Suggestions rapides</div>
                    <div class="suggestions-grid">
                        <div class="suggestion-chip" data-lang="Français">Français</div>
                        <div class="suggestion-chip" data-lang="English">English</div>
                        <div class="suggestion-chip" data-lang="Español">Español</div>
                        <div class="suggestion-chip" data-lang="Deutsch">Deutsch</div>
                        <div class="suggestion-chip" data-lang="Italiano">Italiano</div>
                        <div class="suggestion-chip" data-lang="Português">Português</div>
                    </div>
                </div>
                
                <!-- Preview -->
                <div class="preview-section">
                    <div class="preview-title">
                        <span>👁️</span>
                        Aperçu du nom
                    </div>
                    <div class="preview-content" id="nomPreview">
                        <span class="preview-empty">Le nom de la langue apparaîtra ici</span>
                    </div>
                </div>
            </div>

            <!-- Code langue -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon code">🔤</div>
                    <div>
                        <label class="form-label">Code de la langue</label>
                        <div class="char-counter">
                            <span class="char-count" id="codeCount">0</span>
                            <span class="char-limit">/ 5 caractères</span>
                        </div>
                    </div>
                </div>
                <input type="text" 
                       name="code" 
                       value="{{ old('code') }}"
                       class="form-input @error('code') error @enderror" 
                       placeholder="Ex: fr, en, es, de, it, pt..."
                       maxlength="5"
                       required
                       id="codeInput">
                
                <!-- Preview -->
                <div class="preview-section">
                    <div class="preview-title">
                        <span>👁️</span>
                        Aperçu du code
                    </div>
                    <div class="preview-content">
                        <div id="codePreview">
                            <span class="preview-empty">Le code langue apparaîtra ici</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon desc">📝</div>
                    <div>
                        <label class="form-label">Description</label>
                        <div class="char-counter">
                            <span class="char-count" id="descCount">0</span>
                            <span class="char-limit">/ 255 caractères</span>
                        </div>
                    </div>
                </div>
                <textarea name="description" 
                          rows="4"
                          class="form-input form-textarea @error('description') error @enderror"
                          placeholder="Décrivez cette langue, ses particularités, sa zone géographique..."
                          maxlength="255"
                          id="descInput">{{ old('description') }}</textarea>
                
                <!-- Preview -->
                <div class="preview-section">
                    <div class="preview-title">
                        <span>👁️</span>
                        Aperçu de la description
                    </div>
                    <div class="preview-content" id="descPreview">
                        <span class="preview-empty">La description apparaîtra ici</span>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.langues.index') }}" class="btn btn-secondary">
                    <span class="btn-icon">←</span>
                    Annuler
                </a>
                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <span class="btn-icon">✨</span>
                    Créer la langue
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
    const nomInput = document.getElementById('nomInput');
    const codeInput = document.getElementById('codeInput');
    const descInput = document.getElementById('descInput');
    
    // Éléments de preview
    const nomPreview = document.getElementById('nomPreview');
    const codePreview = document.getElementById('codePreview');
    const descPreview = document.getElementById('descPreview');
    
    // Compteurs
    const nomCount = document.getElementById('nomCount');
    const codeCount = document.getElementById('codeCount');
    const descCount = document.getElementById('descCount');

    // Suggestions de langues
    const suggestionChips = document.querySelectorAll('.suggestion-chip');
    
    // Mapping des codes de langue
    const langCodes = {
        'Français': 'fr',
        'English': 'en',
        'Español': 'es',
        'Deutsch': 'de',
        'Italiano': 'it',
        'Português': 'pt'
    };

    // Initialisation
    updateCounter(nomInput, nomCount);
    updateCounter(codeInput, codeCount);
    updateCounter(descInput, descCount);

    // Événements de saisie
    nomInput.addEventListener('input', function() {
        updateCounter(this, nomCount);
        updatePreview(this, nomPreview);
        validateField(this);
        autoFillCode(this.value);
    });

    codeInput.addEventListener('input', function() {
        updateCounter(this, codeCount);
        updateCodePreview(this.value);
        validateField(this);
        // Convertir en minuscules
        this.value = this.value.toLowerCase();
    });

    descInput.addEventListener('input', function() {
        updateCounter(this, descCount);
        updatePreview(this, descPreview);
        validateField(this);
    });

    // Gestion des suggestions
    suggestionChips.forEach(chip => {
        chip.addEventListener('click', function() {
            const langName = this.getAttribute('data-lang');
            nomInput.value = langName;
            nomInput.dispatchEvent(new Event('input'));
            
            // Ajouter un effet visuel sur la puce cliquée
            this.style.background = 'var(--primary)';
            this.style.color = 'white';
            this.style.transform = 'scale(1.1)';
            
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 300);
        });
    });

    // Validation du formulaire
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Validation des champs requis
        isValid = validateField(nomInput) && isValid;
        isValid = validateField(codeInput) && isValid;
        
        if (isValid) {
            // Afficher l'overlay de chargement
            loadingOverlay.classList.add('active');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="btn-icon">⏳</span>Création...';
            
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

    function updatePreview(input, previewElement) {
        const value = input.value.trim();
        if (value) {
            previewElement.textContent = value;
            previewElement.style.color = 'var(--text)';
        } else {
            previewElement.innerHTML = '<span class="preview-empty">Aucune donnée saisie</span>';
        }
    }

    function updateCodePreview(value) {
        const trimmedValue = value.trim();
        if (trimmedValue) {
            codePreview.innerHTML = `<div class="code-preview">${trimmedValue}</div>`;
        } else {
            codePreview.innerHTML = '<span class="preview-empty">Le code langue apparaîtra ici</span>';
        }
    }

    function autoFillCode(langName) {
        const trimmedName = langName.trim();
        if (trimmedName && langCodes[trimmedName] && !codeInput.value) {
            codeInput.value = langCodes[trimmedName];
            codeInput.dispatchEvent(new Event('input'));
        }
    }

    function validateField(input) {
        const value = input.value.trim();
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

    // Animation d'entrée
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
            this.parentElement.querySelector('.preview-section').style.borderColor = 'var(--primary)';
            this.parentElement.querySelector('.preview-section').style.background = 'rgba(99, 102, 241, 0.05)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.querySelector('.preview-section').style.borderColor = '#cbd5e1';
            this.parentElement.querySelector('.preview-section').style.background = 'rgba(248, 250, 252, 0.8)';
        });
    });
});
</script>

@endsection