@extends('admin.dashboard')

@section('title', 'Modifier Type de Média - ' . $type->nom)

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
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-8px) rotate(3deg); }
}

@keyframes glow {
    0%, 100% { box-shadow: 0 0 20px rgba(245, 158, 11, 0.3); }
    50% { box-shadow: 0 0 40px rgba(245, 158, 11, 0.6); }
}

/* Styles principaux */
.edit-type-container {
    max-width: 500px;
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
    font-size: 3.5rem;
    margin-bottom: 1rem;
    animation: float 6s ease-in-out infinite;
    display: inline-block;
}

.edit-title {
    font-size: 2.25rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.type-name {
    font-size: 1.5rem;
    opacity: 0.9;
    font-weight: 600;
    background: rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    display: inline-block;
    margin-top: 0.5rem;
    backdrop-filter: blur(10px);
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

/* Groupe de formulaire */
.form-group {
    margin-bottom: 2.5rem;
    animation: fadeInUp 0.6s ease-out 0.3s both;
}

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
    background: linear-gradient(135deg, #f59e0b, #d97706);
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
}

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
    border-color: var(--accent);
    background: white;
    box-shadow: 0 4px 25px rgba(245, 158, 11, 0.2);
    transform: translateY(-3px);
    animation: glow 2s infinite;
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

/* Compteur de caractères */
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
    background: rgba(245, 158, 11, 0.05);
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

.type-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 1.5rem;
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    border-radius: 16px;
    font-weight: 700;
    font-size: 1.2rem;
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
}

/* Actions */
.form-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: flex-end;
    flex-wrap: wrap;
    margin-top: 2.5rem;
    padding-top: 2rem;
    border-top: 2px solid rgba(245, 158, 11, 0.1);
    animation: fadeInUp 0.6s ease-out 0.4s both;
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

.btn-warning {
    background: linear-gradient(135deg, var(--accent), #d97706);
    color: white;
}

.btn-warning:hover {
    background: linear-gradient(135deg, #d97706, #b45309);
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(245, 158, 11, 0.4);
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

/* Suggestions de types */
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
    background: rgba(245, 158, 11, 0.1);
    border: 1px solid rgba(245, 158, 11, 0.2);
    border-radius: 20px;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    color: #d97706;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
}

.suggestion-chip:hover {
    background: var(--accent);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
}

/* Responsive */
@media (max-width: 768px) {
    .edit-type-container {
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
    
    .suggestions-grid {
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    }
}

@media (max-width: 480px) {
    .edit-title {
        font-size: 1.75rem;
    }
    
    .type-name {
        font-size: 1.25rem;
        padding: 0.5rem 1rem;
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

<div class="edit-type-container">

    <!-- Overlay de chargement -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
        <div class="loading-text">Mise à jour en cours...</div>
    </div>

    <!-- Header avec dégradé -->
    <div class="edit-header">
        <div class="edit-header-content">
            <div class="edit-icon">🎬</div>
            <h1 class="edit-title">Modifier le Type</h1>
            <div class="type-name">{{ $type->nom }}</div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class="edit-form-container">
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

        <form action="{{ route('admin.types_medias.update', $type->id) }}" method="POST" id="editForm">
            @csrf
            @method('PUT')

            <!-- Nom du type -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon">📝</div>
                    <div>
                        <label class="form-label">Nom du type de média</label>
                        <div class="char-counter">
                            <span class="char-count" id="nomCount">{{ strlen($type->nom) }}</span>
                            <span class="char-limit">/ 50 caractères</span>
                        </div>
                    </div>
                </div>
                <input type="text" 
                       id="nom" 
                       name="nom" 
                       value="{{ old('nom', $type->nom) }}" 
                       required
                       class="form-input @error('nom') error @enderror"
                       placeholder="Ex: Image, Vidéo, Audio, Document..."
                       maxlength="50"
                       id="nomInput">
                
                <!-- Suggestions -->
                <div class="suggestions-container">
                    <div class="suggestions-title">Types courants</div>
                    <div class="suggestions-grid">
                        <div class="suggestion-chip" data-type="Image">Image</div>
                        <div class="suggestion-chip" data-type="Vidéo">Vidéo</div>
                        <div class="suggestion-chip" data-type="Audio">Audio</div>
                        <div class="suggestion-chip" data-type="Document">Document</div>
                        <div class="suggestion-chip" data-type="PDF">PDF</div>
                        <div class="suggestion-chip" data-type="Archive">Archive</div>
                    </div>
                </div>
                
                <!-- Aperçu -->
                <div class="preview-section">
                    <div class="preview-title">
                        <span>👁️</span>
                        Aperçu du type
                    </div>
                    <div class="preview-content">
                        <div class="type-badge" id="typePreview">
                            @php
                                $icon = match(strtolower($type->nom)) {
                                    'image', 'images' => '🖼️',
                                    'video', 'vidéo' => '🎬',
                                    'audio', 'son' => '🎵',
                                    'document', 'fichier' => '📄',
                                    'pdf' => '📑',
                                    'archive' => '📦',
                                    default => '📁'
                                };
                            @endphp
                            <span>{{ $icon }}</span>
                            <span id="previewText">{{ old('nom', $type->nom) }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.types_medias.index') }}" class="btn btn-secondary">
                    <span class="btn-icon">←</span>
                    Annuler
                </a>
                <button type="submit" class="btn btn-warning" id="submitBtn">
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
    const nomInput = document.getElementById('nomInput');
    const nomCount = document.getElementById('nomCount');
    const previewText = document.getElementById('previewText');
    const typePreview = document.getElementById('typePreview');

    // Mapping des icônes pour les types
    const typeIcons = {
        'image': '🖼️',
        'images': '🖼️',
        'vidéo': '🎬',
        'video': '🎬',
        'audio': '🎵',
        'son': '🎵',
        'document': '📄',
        'fichier': '📄',
        'pdf': '📑',
        'archive': '📦',
        'default': '📁'
    };

    // Suggestions de types
    const suggestionChips = document.querySelectorAll('.suggestion-chip');
    
    suggestionChips.forEach(chip => {
        chip.addEventListener('click', function() {
            const typeName = this.getAttribute('data-type');
            nomInput.value = typeName;
            nomInput.dispatchEvent(new Event('input'));
            
            // Effet visuel sur la puce cliquée
            this.style.background = 'var(--accent)';
            this.style.color = 'white';
            this.style.transform = 'scale(1.1)';
            
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 300);
        });
    });

    // Événement de saisie
    nomInput.addEventListener('input', function() {
        const value = this.value;
        const count = value.length;
        
        // Mettre à jour le compteur
        nomCount.textContent = count;
        
        // Mettre à jour la couleur du compteur
        if (count > 45) {
            nomCount.style.color = '#ef4444';
        } else if (count > 35) {
            nomCount.style.color = '#f59e0b';
        } else if (count > 0) {
            nomCount.style.color = '#10b981';
        } else {
            nomCount.style.color = '#64748b';
        }
        
        // Mettre à jour l'aperçu
        updatePreview(value);
        
        // Valider le champ
        validateField(this);
    });

    // Validation du formulaire
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const isValid = validateField(nomInput);
        
        if (isValid) {
            // Afficher l'overlay de chargement
            loadingOverlay.classList.add('active');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="btn-icon">⏳</span>Mise à jour...';
            
            // Soumission du formulaire
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
    function updatePreview(value) {
        const trimmedValue = value.trim();
        
        if (trimmedValue) {
            previewText.textContent = trimmedValue;
            
            // Mettre à jour l'icône selon le type
            const lowerValue = trimmedValue.toLowerCase();
            let icon = typeIcons.default;
            
            for (const [key, value] of Object.entries(typeIcons)) {
                if (lowerValue.includes(key)) {
                    icon = value;
                    break;
                }
            }
            
            typePreview.innerHTML = `<span>${icon}</span><span>${trimmedValue}</span>`;
        } else {
            previewText.textContent = 'Nouveau type';
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
    const formGroup = document.querySelector('.form-group');
    formGroup.style.opacity = '0';
    formGroup.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
        formGroup.style.transition = 'all 0.6s ease';
        formGroup.style.opacity = '1';
        formGroup.style.transform = 'translateY(0)';
    }, 300);

    // Effet de focus amélioré
    nomInput.addEventListener('focus', function() {
        this.parentElement.querySelector('.preview-section').style.borderColor = 'var(--accent)';
        this.parentElement.querySelector('.preview-section').style.background = 'rgba(245, 158, 11, 0.05)';
    });
    
    nomInput.addEventListener('blur', function() {
        this.parentElement.querySelector('.preview-section').style.borderColor = '#cbd5e1';
        this.parentElement.querySelector('.preview-section').style.background = 'rgba(248, 250, 252, 0.8)';
    });

    // Initialisation
    updatePreview(nomInput.value);
});
</script>

@endsection
