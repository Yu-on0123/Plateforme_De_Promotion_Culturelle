@extends('admin.dashboard')

@section('title', 'Créer un Nouvel Utilisateur')

@section('content')

<style>
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --primary-light: #c7d2fe;
    --secondary: #f8fafc;
    --accent: #3b82f6;
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

@keyframes avatarPulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(59, 130, 246, 0); }
}

/* Styles principaux */
.create-user-container {
    max-width: 600px;
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
    margin-bottom: 1.5rem;
    animation: fadeInUp 0.6s ease-out;
}

.form-group:nth-child(1) { animation-delay: 0.3s; }
.form-group:nth-child(2) { animation-delay: 0.4s; }
.form-group:nth-child(3) { animation-delay: 0.5s; }
.form-group:nth-child(4) { animation-delay: 0.6s; }

.form-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.75rem;
}

.form-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    color: white;
    background: linear-gradient(135deg, var(--accent), #1d4ed8);
    flex-shrink: 0;
}

.form-label {
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: var(--text-light);
}

.form-input {
    width: 100%;
    padding: 1rem 1.25rem;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.form-input:focus {
    outline: none;
    border-color: var(--accent);
    background: white;
    box-shadow: 0 4px 20px rgba(59, 130, 246, 0.15);
    transform: translateY(-2px);
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

.form-select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 1rem;
    padding-right: 3rem;
}

/* Aperçu de l'avatar */
.avatar-preview {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
    padding: 1rem;
    background: rgba(248, 250, 252, 0.8);
    border-radius: 12px;
    border: 2px dashed #cbd5e1;
    transition: all 0.3s ease;
}

.avatar-preview:hover {
    border-color: var(--accent);
    background: rgba(59, 130, 246, 0.05);
}

.avatar-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--accent);
    animation: avatarPulse 2s infinite;
}

.avatar-placeholder {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--accent), #1d4ed8);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 1.25rem;
    border: 3px solid var(--accent);
    animation: avatarPulse 2s infinite;
}

.avatar-info {
    flex: 1;
}

.avatar-name {
    font-weight: 600;
    color: var(--text);
    margin-bottom: 0.25rem;
}

.avatar-details {
    font-size: 0.875rem;
    color: var(--text-light);
}

/* Indicateur de force du mot de passe */
.password-strength {
    margin-top: 0.5rem;
}

.strength-bar {
    height: 4px;
    background: #e5e7eb;
    border-radius: 2px;
    overflow: hidden;
    margin-bottom: 0.5rem;
}

.strength-fill {
    height: 100%;
    width: 0%;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.strength-text {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.strength-weak { background: #ef4444; width: 25%; }
.strength-fair { background: #f59e0b; width: 50%; }
.strength-good { background: #10b981; width: 75%; }
.strength-strong { background: #10b981; width: 100%; }

/* Actions */
.form-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: flex-end;
    flex-wrap: wrap;
    margin-top: 2.5rem;
    padding-top: 2rem;
    border-top: 2px solid rgba(59, 130, 246, 0.1);
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
    background: linear-gradient(135deg, var(--accent), #1d4ed8);
    color: white;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(59, 130, 246, 0.4);
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
    .create-user-container {
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
        gap: 0.5rem;
    }
}
</style>

<div class="create-user-container">

    <!-- Overlay de chargement -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
        <div class="loading-text">Création de l'utilisateur en cours...</div>
    </div>

    <!-- Header avec dégradé -->
    <div class="create-header">
        <div class="create-header-content">
            <div class="create-icon">👤</div>
            <h1 class="create-title">Nouvel Utilisateur</h1>
            <p class="create-subtitle">Ajoutez un nouvel utilisateur à la plateforme</p>
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

        <form method="POST" action="{{ route('admin.users.store') }}" id="createForm">
            @csrf

            <div class="form-grid">
                <!-- Nom -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">👤</div>
                        <label class="form-label">Nom</label>
                    </div>
                    <input name="nom" type="text" value="{{ old('nom') }}" required
                           class="form-input @error('nom') error @enderror"
                           placeholder="Entrez le nom"
                           id="nomInput">
                </div>

                <!-- Prénom -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">👤</div>
                        <label class="form-label">Prénom</label>
                    </div>
                    <input name="prenom" type="text" value="{{ old('prenom') }}" required
                           class="form-input @error('prenom') error @enderror"
                           placeholder="Entrez le prénom"
                           id="prenomInput">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">📧</div>
                        <label class="form-label">Email</label>
                    </div>
                    <input name="email" type="email" value="{{ old('email') }}" required
                           class="form-input @error('email') error @enderror"
                           placeholder="exemple@email.com"
                           id="emailInput">
                </div>

                <!-- Mot de passe -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">🔒</div>
                        <label class="form-label">Mot de passe</label>
                    </div>
                    <input name="password" type="password" required
                           class="form-input @error('password') error @enderror"
                           placeholder="Créez un mot de passe sécurisé"
                           id="passwordInput">
                    <div class="password-strength">
                        <div class="strength-bar">
                            <div class="strength-fill" id="passwordStrength"></div>
                        </div>
                        <div class="strength-text" id="passwordText">Force du mot de passe</div>
                    </div>
                </div>

                <!-- Rôle -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">🎭</div>
                        <label class="form-label">Rôle</label>
                    </div>
                    <input name="role" type="text" value="{{ old('role') }}"
                           class="form-input @error('role') error @enderror"
                           placeholder="Ex: Admin, Utilisateur, Éditeur"
                           id="roleInput">
                </div>

                <!-- Sexe -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">⚧️</div>
                        <label class="form-label">Sexe</label>
                    </div>
                    <select name="sexe" class="form-input form-select @error('sexe') error @enderror" id="sexeSelect">
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                </div>

                <!-- Langue -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">🌐</div>
                        <label class="form-label">Langue</label>
                    </div>
                    <select name="id_langue" class="form-input form-select @error('id_langue') error @enderror" id="langueSelect">
                        <option value="">-- Sélectionner une langue --</option>
                        @foreach($langues as $l)
                            <option value="{{ $l->id }}" {{ old('id_langue') == $l->id ? 'selected' : '' }}>
                                {{ $l->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Date de naissance -->
                <div class="form-group">
                    <div class="form-header">
                        <div class="form-icon">🎂</div>
                        <label class="form-label">Date de naissance</label>
                    </div>
                    <input name="date_naissance" type="date" value="{{ old('date_naissance') }}"
                           class="form-input @error('date_naissance') error @enderror"
                           id="dateInput">
                </div>
            </div>

            <!-- Statut -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon">📊</div>
                    <label class="form-label">Statut</label>
                </div>
                <input name="statut" type="text" value="{{ old('statut') }}"
                       class="form-input @error('statut') error @enderror"
                       placeholder="Ex: Actif, Inactif, En attente"
                       id="statutInput">
            </div>

            <!-- Photo -->
            <div class="form-group">
                <div class="form-header">
                    <div class="form-icon">🖼️</div>
                    <label class="form-label">Photo (URL)</label>
                </div>
                <input name="photo" type="text" value="{{ old('photo') }}"
                       class="form-input @error('photo') error @enderror"
                       placeholder="https://exemple.com/photo.jpg"
                       id="photoInput">
                
                <!-- Aperçu de l'avatar -->
                <div class="avatar-preview" id="avatarPreview">
                    <div class="avatar-placeholder" id="avatarPlaceholder">
                        <span id="avatarInitials">?</span>
                    </div>
                    <div class="avatar-info">
                        <div class="avatar-name" id="avatarName">Nouvel utilisateur</div>
                        <div class="avatar-details" id="avatarDetails">Aperçu du profil</div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                    <span class="btn-icon">←</span>
                    Annuler
                </a>
                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <span class="btn-icon">✨</span>
                    Créer l'utilisateur
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
    const prenomInput = document.getElementById('prenomInput');
    const emailInput = document.getElementById('emailInput');
    const passwordInput = document.getElementById('passwordInput');
    const roleInput = document.getElementById('roleInput');
    const sexeSelect = document.getElementById('sexeSelect');
    const langueSelect = document.getElementById('langueSelect');
    const dateInput = document.getElementById('dateInput');
    const statutInput = document.getElementById('statutInput');
    const photoInput = document.getElementById('photoInput');
    
    // Éléments d'aperçu
    const avatarPreview = document.getElementById('avatarPreview');
    const avatarPlaceholder = document.getElementById('avatarPlaceholder');
    const avatarInitials = document.getElementById('avatarInitials');
    const avatarName = document.getElementById('avatarName');
    const avatarDetails = document.getElementById('avatarDetails');
    
    // Indicateur de force du mot de passe
    const passwordStrength = document.getElementById('passwordStrength');
    const passwordText = document.getElementById('passwordText');

    // Événements de saisie
    nomInput.addEventListener('input', updateAvatarPreview);
    prenomInput.addEventListener('input', updateAvatarPreview);
    emailInput.addEventListener('input', updateAvatarDetails);
    roleInput.addEventListener('input', updateAvatarDetails);
    sexeSelect.addEventListener('change', updateAvatarDetails);
    langueSelect.addEventListener('change', updateAvatarDetails);
    dateInput.addEventListener('change', updateAvatarDetails);
    statutInput.addEventListener('input', updateAvatarDetails);
    photoInput.addEventListener('input', updateAvatarPhoto);
    
    passwordInput.addEventListener('input', updatePasswordStrength);

    // Validation du formulaire
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Validation des champs requis
        isValid = validateField(nomInput) && isValid;
        isValid = validateField(prenomInput) && isValid;
        isValid = validateField(emailInput) && isValid;
        isValid = validateField(passwordInput) && isValid;
        
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
    function updateAvatarPreview() {
        const nom = nomInput.value.trim();
        const prenom = prenomInput.value.trim();
        
        if (nom || prenom) {
            const initials = (prenom.charAt(0) + nom.charAt(0)).toUpperCase() || '?';
            avatarInitials.textContent = initials;
            avatarName.textContent = `${prenom} ${nom}`.trim() || 'Nouvel utilisateur';
        } else {
            avatarInitials.textContent = '?';
            avatarName.textContent = 'Nouvel utilisateur';
        }
        
        updateAvatarDetails();
    }

    function updateAvatarDetails() {
        const details = [];
        const email = emailInput.value.trim();
        const role = roleInput.value.trim();
        const langue = langueSelect.options[langueSelect.selectedIndex]?.text;
        const statut = statutInput.value.trim();
        
        if (email) details.push(email);
        if (role) details.push(role);
        if (langue && langueSelect.value) details.push(langue);
        if (statut) details.push(statut);
        
        avatarDetails.textContent = details.join(' • ') || 'Aperçu du profil';
    }

    function updateAvatarPhoto() {
        const photoUrl = photoInput.value.trim();
        
        if (photoUrl) {
            // Créer une image pour vérifier si l'URL est valide
            const img = new Image();
            img.onload = function() {
                avatarPlaceholder.style.backgroundImage = `url(${photoUrl})`;
                avatarPlaceholder.style.backgroundSize = 'cover';
                avatarPlaceholder.style.backgroundPosition = 'center';
                avatarInitials.style.display = 'none';
            };
            img.onerror = function() {
                avatarPlaceholder.style.backgroundImage = '';
                avatarInitials.style.display = 'flex';
            };
            img.src = photoUrl;
        } else {
            avatarPlaceholder.style.backgroundImage = '';
            avatarInitials.style.display = 'flex';
        }
    }

    function updatePasswordStrength() {
        const password = passwordInput.value;
        let strength = 0;
        let text = 'Force du mot de passe';
        let className = '';
        
        if (password.length > 0) {
            if (password.length < 6) {
                strength = 25;
                text = 'Faible';
                className = 'strength-weak';
            } else if (password.length < 8) {
                strength = 50;
                text = 'Moyen';
                className = 'strength-fair';
            } else if (password.length < 12) {
                strength = 75;
                text = 'Bon';
                className = 'strength-good';
            } else {
                strength = 100;
                text = 'Fort';
                className = 'strength-strong';
            }
            
            // Vérifier la complexité
            if (password.match(/[a-z]/) && password.match(/[A-Z]/) && password.match(/[0-9]/) && password.match(/[^a-zA-Z0-9]/)) {
                strength = Math.min(strength + 25, 100);
                text = 'Très fort';
            }
        }
        
        passwordStrength.className = `strength-fill ${className}`;
        passwordStrength.style.width = `${strength}%`;
        passwordText.textContent = text;
        passwordText.style.color = getStrengthColor(strength);
    }

    function getStrengthColor(strength) {
        if (strength <= 25) return '#ef4444';
        if (strength <= 50) return '#f59e0b';
        if (strength <= 75) return '#10b981';
        return '#10b981';
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

    // Initialisation
    updateAvatarPreview();
    updatePasswordStrength();

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
});
</script>

@endsection