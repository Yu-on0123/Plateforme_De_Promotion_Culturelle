@extends('admin.dashboard')

@section('title', 'Éditer la Langue - ' . $langue->nom)

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
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-5px); }
}

/* Styles principaux */
.edit-langue-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 2rem;
}

/* Header avec dégradé */
.edit-header {
    background: var(--gradient);
    border-radius: 24px;
    padding: 2.5rem 2rem;
    margin-bottom: 2.5rem;
    color: white;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    text-align: center;
    animation: fadeInUp 0.8s ease-out;
}

.edit-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.edit-header-content {
    position: relative;
    z-index: 2;
}

.edit-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
    animation: float 4s ease-in-out infinite;
    display: inline-block;
}

.edit-title {
    font-size: 2.5rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.edit-subtitle {
    font-size: 1.125rem;
    opacity: 0.9;
    font-weight: 500;
}

/* Formulaire */
.edit-form-container {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 24px;
    padding: 2.5rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    animation: slideInFromLeft 0.8s ease-out 0.2s both;
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
    margin-bottom: 2rem;
    animation: fadeInUp 0.6s ease-out;
}

.form-group:nth-child(1) { animation-delay: 0.3s; }
.form-group:nth-child(2) { animation-delay: 0.4s; }
.form-group:nth-child(3) { animation-delay: 0.5s; }

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
}

.form-icon.nom { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.form-icon.code { background: linear-gradient(135deg, #10b981, #047857); }
.form-icon.desc { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }

.form-label {
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-light);
    margin-bottom: 0.5rem;
}

.form-input {
    width: 100%;
    padding: 1rem 1.5rem;
    border: 2px solid #e5e7eb;
    border-radius: 16px;
    font-size: 1rem;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.form-input:focus {
    outline: none;
    border-color: var(--primary);
    background: white;
    box-shadow: 0 4px 20px rgba(99, 102, 241, 0.15);
    transform: translateY(-2px);
}

.form-input.error {
    border-color: #ef4444;
    background: #fef2f2;
    animation: shake 0.5s ease-in-out;
}

.form-textarea {
    resize: vertical;
    min-height: 120px;
    line-height: 1.6;
}

/* Compteurs de caractères */
.char-counter {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 0.5rem;
    font-size: 0.875rem;
    color: var(--text-light);
}

.char-count {
    font-weight: 600;
    color: var(--primary);
}

.char-limit {
    font-weight: 500;
}

/* Actions */
.form-actions {
    display: flex;
    gap: 1rem;
    justify-content: flex-end;
    flex-wrap: wrap;
    margin-top: 2.5rem;
    padding-top: 2rem;
    border-top: 2px solid rgba(99, 102, 241, 0.1);
    animation: fadeInUp 0.6s ease-out 0.6s both;
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

.btn-success {
    background: linear-gradient(135deg, var(--success), #047857);
    color: white;
}

.btn-success:hover {
    background: linear-gradient(135deg, #047857, #065f46);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
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
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.btn-icon {
    font-size: 1.25rem;
}

/* Preview en temps réel */
.preview-card {
    background: rgba(248, 250, 252, 0.8);
    border: 2px dashed #cbd5e1;
    border-radius: 16px;
    padding: 1.5rem;
    margin-top: 1rem;
    transition: all 0.3s ease;
}

.preview-card:hover {
    border-color: var(--primary);
    background: rgba(99, 102, 241, 0.05);
}

.preview-title {
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-light);
    margin-bottom: 0.5rem;
}

.preview-content {
    font-size: 1rem;
    color: var(--text);
    line-height: 1.6;
}

.preview-empty {
    color: var(--text-light);
    font-style: italic;
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
    width: 60px;
    height: 60px;
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-top: 4px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Responsive */
@media (max-width: 768px) {
    .edit-langue-container {
        padding: 1rem;
    }
    
    .edit-header {
        padding: 2rem 1rem;
    }
    
    .edit-title {
        font-size: 2rem;
    }
    
    .edit-form-container {
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
    .edit-title {
        font-size: 1.75rem;
    }
    
    .form-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.75rem;
    }
    
    .form-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}
</style>

<div class="edit-langue-container">

    <!-- Overlay de chargement -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>

    <!-- Header avec dégradé -->
    <div class="edit-header">
        <div class="edit-header-content">
            <div class="edit-icon">✏️</div>
            <h1 class="edit-title">Éditer la Langue</h1>
            <p class="edit-subtitle">Modifiez les détails de {{ $langue->nom }}</p>
        </div>
    </div>

    <!-- Formulaire -->
    <div class="edit-form-container">
        @if ($errors->any())
            <div class="error-container">
                <div class="error-title">
                    <span>🚫</span>
                    Erreurs de validation
                </div>
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li class="error-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.langues.update', $langue->id) }}" id="editForm">
            @csrf
            @method('PUT')

            <!-- Nom -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon nom">📛</div>
                    <div>
                        <label class="form-label">Nom de la langue</label>
                        <div class="char-counter">
                            <span class="char-count" id="nomCount">0</span>
                            <span class="char-limit">/ 100 caractères</span>
                        </div>
                    </div>
                </div>
                <input type="text" 
                       name="nom" 
                       value="{{ old('nom', $langue->nom) }}"
                       class="form-input @error('nom') error @enderror" 
                       placeholder="Ex: Français, English, Español..."
                       maxlength="100"
                       required
                       id="nomInput">
                
                <!-- Preview -->
                <div class="preview-card">
                    <div class="preview-title">Aperçu du nom</div>
                    <div class="preview-content" id="nomPreview">
                        {{ old('nom', $langue->nom) ?: '<span class="preview-empty">Aucun nom saisi</span>' }}
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
                            <span class="char-limit">/ 10 caractères</span>
                        </div>
                    </div>
                </div>
                <input type="text" 
                       name="code" 
                       value="{{ old('code', $langue->code_langue) }}"
                       class="form-input @error('code') error @enderror" 
                       placeholder="Ex: fr, en, es..."
                       maxlength="10"
                       required
                       id="codeInput">
                
                <!-- Preview -->
                <div class="preview-card">
                    <div class="preview-title">Aperçu du code</div>
                    <div class="preview-content">
                        <code style="background: linear-gradient(135deg, #10b981, #047857); color: white; padding: 0.5rem 1rem; border-radius: 8px; font-weight: 600; letter-spacing: 1px;" id="codePreview">
                            {{ old('code', $langue->code_langue) ?: '<span class="preview-empty">Aucun code saisi</span>' }}
                        </code>
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
                            <span class="char-limit">/ 500 caractères</span>
                        </div>
                    </div>
                </div>
                <textarea name="description" 
                          rows="4"
                          class="form-input form-textarea @error('description') error @enderror"
                          placeholder="Décrivez cette langue, son utilisation, ses particularités..."
                          maxlength="500"
                          id="descInput">{{ old('description', $langue->description) }}</textarea>
                
                <!-- Preview -->
                <div class="preview-card">
                    <div class="preview-title">Aperçu de la description</div>
                    <div class="preview-content" id="descPreview">
                        {{ old('description', $langue->description) ?: '<span class="preview-empty">Aucune description saisie</span>' }}
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.langues.index') }}" class="btn btn-secondary">
                    <span class="btn-icon">←</span>
                    Annuler
                </a>
                <button type="submit" class="btn btn-success" id="submitBtn">
                    <span class="btn-icon">💾</span>
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('editForm');
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

    // Initialisation des compteurs et previews
    updateCounter(nomInput, nomCount);
    updateCounter(codeInput, codeCount);
    updateCounter(descInput, descCount);
    updatePreview(nomInput, nomPreview);
    updatePreview(codeInput, codePreview, true);
    updatePreview(descInput, descPreview);

    // Événements de saisie en temps réel
    nomInput.addEventListener('input', function() {
        updateCounter(this, nomCount);
        updatePreview(this, nomPreview);
        validateField(this);
    });

    codeInput.addEventListener('input', function() {
        updateCounter(this, codeCount);
        updatePreview(this, codePreview, true);
        validateField(this);
        // Convertir en minuscules
        this.value = this.value.toLowerCase();
    });

    descInput.addEventListener('input', function() {
        updateCounter(this, descCount);
        updatePreview(this, descPreview);
        validateField(this);
    });

    // Validation du formulaire
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Validation des champs
        isValid = validateField(nomInput) && isValid;
        isValid = validateField(codeInput) && isValid;
        
        if (isValid) {
            // Afficher l'overlay de chargement
            loadingOverlay.classList.add('active');
            submitBtn.disabled = true;
            
            // Simuler un délai pour l'UX (à retirer en production)
            setTimeout(() => {
                form.submit();
            }, 1500);
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
        
        // Changer la couleur selon le pourcentage d'utilisation
        const percentage = (count / maxLength) * 100;
        if (percentage > 90) {
            counterElement.style.color = '#ef4444';
        } else if (percentage > 75) {
            counterElement.style.color = '#f59e0b';
        } else {
            counterElement.style.color = '#6366f1';
        }
    }

    function updatePreview(input, previewElement, isCode = false) {
        const value = input.value.trim();
        if (value) {
            if (isCode) {
                previewElement.innerHTML = `<code style="background: linear-gradient(135deg, #10b981, #047857); color: white; padding: 0.5rem 1rem; border-radius: 8px; font-weight: 600; letter-spacing: 1px;">${value}</code>`;
            } else {
                previewElement.textContent = value;
            }
        } else {
            previewElement.innerHTML = '<span class="preview-empty">Aucune donnée saisie</span>';
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
            this.parentElement.style.transform = 'translateY(-5px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });
});
</script>

@endsection