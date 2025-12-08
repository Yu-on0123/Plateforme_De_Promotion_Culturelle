<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'CultureAdmin - Dashboard')</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
    overflow-x: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }

  /* Effet de particules animées en arrière-plan */
  .particles {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: hidden;
  }

  .particle {
    position: absolute;
    background: var(--primary-light);
    border-radius: 50%;
    opacity: 0.3;
    animation: float 15s infinite linear;
  }

  @keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    25% { transform: translateY(-20px) rotate(90deg); }
    50% { transform: translateY(0) rotate(180deg); }
    75% { transform: translateY(20px) rotate(270deg); }
  }

  /* Sidebar moderne avec effet glassmorphism */
  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 280px;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-right: 1px solid var(--glass-border);
    box-shadow: var(--shadow);
    transform: translateX(-100%);
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    z-index: 1000;
    padding: 2rem 1.5rem;
    overflow-y: auto;
  }

  .sidebar.open {
    transform: translateX(0);
  }

  .sidebar-header {
    text-align: center;
    margin-bottom: 2.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 2px solid rgba(99, 102, 241, 0.1);
  }

  .logo {
    font-size: 2rem;
    font-weight: 900;
    background: var(--gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    margin-bottom: 0.5rem;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .logo-subtitle {
    font-size: 0.875rem;
    color: var(--text-light);
    font-weight: 500;
  }

  .nav-item {
    display: flex;
    align-items: center;
    padding: 1rem 1.25rem;
    margin-bottom: 0.75rem;
    border-radius: 16px;
    font-weight: 600;
    color: var(--text);
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .nav-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: var(--gradient);
    transition: left 0.4s ease;
    z-index: -1;
  }

  .nav-item:hover::before {
    left: 0;
  }

  .nav-item:hover {
    color: white;
    transform: translateX(8px);
    box-shadow: 0 8px 25px rgba(99, 102, 241, 0.3);
  }

  .nav-item i {
    margin-right: 1rem;
    font-size: 1.25rem;
    width: 24px;
    text-align: center;
  }

  .nav-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--primary-light), transparent);
    margin: 1.5rem 0;
  }

  /* Topbar moderne */
  .topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 2rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-bottom: 1px solid var(--glass-border);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    position: sticky;
    top: 0;
    z-index: 999;
    transition: all 0.3s ease;
  }

  .topbar.scrolled {
    padding: 0.75rem 2rem;
    background: rgba(255, 255, 255, 0.95);
  }

  .hamburger {
    font-size: 1.8rem;
    cursor: pointer;
    color: var(--primary);
    transition: all 0.3s ease;
    padding: 0.5rem;
    border-radius: 12px;
  }

  .hamburger:hover {
    background: var(--primary-light);
    transform: rotate(90deg);
  }

  .search-container {
    position: relative;
    flex: 1;
    max-width: 500px;
    margin: 0 2rem;
  }

  .search-input {
    width: 100%;
    padding: 0.875rem 1.25rem 0.875rem 3rem;
    border: none;
    border-radius: 50px;
    background: rgba(248, 250, 252, 0.8);
    backdrop-filter: blur(10px);
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  }

  .search-input:focus {
    outline: none;
    background: white;
    box-shadow: 0 8px 25px rgba(99, 102, 241, 0.15);
    transform: translateY(-2px);
  }

  .search-icon {
    position: absolute;
    left: 1.25rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
  }

  .user-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .logout-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
  }

  .logout-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
  }

  /* Contenu principal */
  .content {
    padding: 2rem;
    max-width: 1400px;
    margin: 0 auto;
    transition: all 0.4s ease;
  }

  .content.expanded {
    margin-left: 0;
  }

  /* Footer moderne */
  footer {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    padding: 3rem 2rem;
    margin-top: 4rem;
    border-top: 1px solid var(--glass-border);
  }

  .footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 3rem;
    max-width: 1200px;
    margin: 0 auto;
  }

  .footer-section h3 {
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: var(--text);
    position: relative;
    padding-bottom: 0.75rem;
  }

  .footer-section h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 3px;
    background: var(--gradient);
    border-radius: 2px;
  }

  .footer-links {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .footer-link {
    color: var(--text-light);
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .footer-link:hover {
    color: var(--primary);
    transform: translateX(5px);
  }

  .footer-bottom {
    text-align: center;
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    color: var(--text-light);
    font-size: 0.9rem;
  }

  /* Animations */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in-up {
    animation: fadeInUp 0.6s ease forwards;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .sidebar {
      width: 100%;
    }
    
    .topbar {
      padding: 1rem;
    }
    
    .search-container {
      margin: 0 1rem;
    }
    
    .content {
      padding: 1rem;
    }
    
    .footer-grid {
      grid-template-columns: 1fr;
      gap: 2rem;
    }
  }

  /* Mode sombre optionnel */
  .dark-mode-toggle {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--gradient);
    border: none;
    color: white;
    cursor: pointer;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .dark-mode-toggle:hover {
    transform: scale(1.1) rotate(180deg);
  }
</style>
</head>
<body>

<!-- Effet de particules animées -->
<div class="particles" id="particles"></div>

<!-- SIDEBAR MODERNE -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <div class="logo">CultureAdmin</div>
    <div class="logo-subtitle">Plateforme de Gestion</div>
  </div>

  <nav class="sidebar-nav">
    <a class="nav-item" href="{{ route('admin.dashboard') }}">
      <i class="fas fa-chart-line"></i>
      <span>Tableau de Bord</span>
    </a>
    
    <a class="nav-item" href="{{ route('admin.users.index') }}">
      <i class="fas fa-users"></i>
      <span>Utilisateurs</span>
    </a>
    
    <a class="nav-item" href="{{ route('admin.contenus.index') }}">
      <i class="fas fa-file-alt"></i>
      <span>Contenus</span>
    </a>
    
    <a class="nav-item" href="{{ route('admin.langues.index') }}">
      <i class="fas fa-globe"></i>
      <span>Langues</span>
    </a>
    
    <a class="nav-item" href="{{ route('admin.commentaires.index') }}">
      <i class="fas fa-comments"></i>
      <span>Commentaires</span>
    </a>

    <div class="nav-divider"></div>
    
    <a class="nav-item" href="{{ route('admin.medias.index') }}">
      <i class="fas fa-photo-video"></i>
      <span>Médias</span>
    </a>
    
    <a class="nav-item" href="{{ route('admin.regions.index') }}">
      <i class="fas fa-map-marked-alt"></i>
      <span>Régions</span>
    </a>
    
    <a class="nav-item" href="{{ route('admin.types_contenus.index') }}">
      <i class="fas fa-tags"></i>
      <span>Types de Contenu</span>
    </a>
    
    <a class="nav-item" href="{{ route('admin.types_medias.index') }}">
      <i class="fas fa-film"></i>
      <span>Types de Média</span>
    </a>

    <div class="nav-divider"></div>

    <!-- Déconnexion -->
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="nav-item w-full text-left">
        <i class="fas fa-sign-out-alt"></i>
        <span>Déconnexion</span>
      </button>
    </form>
  </nav>

  <div class="mt-8 p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border border-blue-100">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold">
        <i class="fas fa-shield-alt"></i>
      </div>
      <div>
        <div class="font-bold text-blue-900">Mode Admin</div>
        <div class="text-xs text-blue-600">Accès complet au système</div>
      </div>
    </div>
  </div>
</div>

<!-- TOPBAR MODERNE -->
<header class="topbar" id="topbar">
  <div class="flex items-center gap-4">
    <span class="hamburger" onclick="toggleSidebar()">
      <i class="fas fa-bars"></i>
    </span>
    <div class="hidden md:block">
      <div class="text-xl font-black bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
        CultureAdmin
      </div>
    </div>
  </div>

  <div class="search-container">
    <i class="fas fa-search search-icon"></i>
    <input type="text" placeholder="Rechercher dans le système..." class="search-input">
  </div>

  <div class="user-actions">
    <button class="logout-btn" onclick="document.querySelector('form[action=\'{{ route('logout') }}\']').submit()">
      <i class="fas fa-sign-out-alt"></i>
      <span class="hidden sm:inline">Déconnexion</span>
    </button>
  </div>
</header>

<!-- CONTENU PRINCIPAL -->
<main class="content" id="mainContent">
  @yield('content')
</main>

<!-- FOOTER MODERNE -->
<footer>
  <div class="footer-grid">
    <div class="footer-section">
      <h3>Navigation</h3>
      <div class="footer-links">
        <a href="{{ route('admin.dashboard') }}" class="footer-link">
          <i class="fas fa-arrow-right"></i>
          Tableau de Bord
        </a>
        <a href="{{ route('admin.users.index') }}" class="footer-link">
          <i class="fas fa-arrow-right"></i>
          Gestion Utilisateurs
        </a>
        <a href="{{ route('admin.contenus.index') }}" class="footer-link">
          <i class="fas fa-arrow-right"></i>
          Contenus
        </a>
        <a href="{{ route('admin.medias.index') }}" class="footer-link">
          <i class="fas fa-arrow-right"></i>
          Bibliothèque Médias
        </a>
      </div>
    </div>

    <div class="footer-section">
      <h3>Support</h3>
      <div class="footer-links">
        <a href="#" class="footer-link">
          <i class="fas fa-question-circle"></i>
          Centre d'Aide
        </a>
        <a href="#" class="footer-link">
          <i class="fas fa-book"></i>
          Documentation
        </a>
        <a href="#" class="footer-link">
          <i class="fas fa-headset"></i>
          Support Technique
        </a>
        <a href="#" class="footer-link">
          <i class="fas fa-bug"></i>
          Signaler un Problème
        </a>
      </div>
    </div>

    <div class="footer-section">
      <h3>Légal</h3>
      <div class="footer-links">
        <a href="#" class="footer-link">
          <i class="fas fa-shield-alt"></i>
          Confidentialité
        </a>
        <a href="#" class="footer-link">
          <i class="fas fa-file-contract"></i>
          Conditions d'Utilisation
        </a>
        <a href="#" class="footer-link">
          <i class="fas fa-cookie"></i>
          Politique des Cookies
        </a>
        <a href="#" class="footer-link">
          <i class="fas fa-balance-scale"></i>
          Mentions Légales
        </a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2024 CultureAdmin. Tous droits réservés. | Conçu avec <i class="fas fa-heart text-red-500"></i> pour les administrateurs</p>
  </div>
</footer>

<!-- BOUTON MODE SOMBRE (optionnel) -->
<button class="dark-mode-toggle" onclick="toggleDarkMode()">
  <i class="fas fa-moon"></i>
</button>

<script>
// Génération des particules animées
function createParticles() {
  const particlesContainer = document.getElementById('particles');
  const particleCount = 15;
  
  for (let i = 0; i < particleCount; i++) {
    const particle = document.createElement('div');
    particle.className = 'particle';
    
    // Taille aléatoire
    const size = Math.random() * 60 + 20;
    particle.style.width = `${size}px`;
    particle.style.height = `${size}px`;
    
    // Position aléatoire
    particle.style.left = `${Math.random() * 100}%`;
    particle.style.top = `${Math.random() * 100}%`;
    
    // Animation delay aléatoire
    particle.style.animationDelay = `${Math.random() * 15}s`;
    
    // Opacité aléatoire
    particle.style.opacity = Math.random() * 0.4 + 0.1;
    
    particlesContainer.appendChild(particle);
  }
}

// Gestion de la sidebar
function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const mainContent = document.getElementById('mainContent');
  
  sidebar.classList.toggle('open');
  mainContent.classList.toggle('expanded');
}

// Effet de scroll sur la topbar
window.addEventListener('scroll', function() {
  const topbar = document.getElementById('topbar');
  if (window.scrollY > 50) {
    topbar.classList.add('scrolled');
  } else {
    topbar.classList.remove('scrolled');
  }
});

// Mode sombre (optionnel)
function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
  const toggleBtn = document.querySelector('.dark-mode-toggle i');
  
  if (document.body.classList.contains('dark-mode')) {
    toggleBtn.className = 'fas fa-sun';
    document.body.style.background = 'linear-gradient(135deg, #1e293b 0%, #334155 100%)';
  } else {
    toggleBtn.className = 'fas fa-moon';
    document.body.style.background = 'linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%)';
  }
}

// Animation d'entrée pour le contenu
document.addEventListener('DOMContentLoaded', function() {
  createParticles();
  
  // Animation d'entrée pour les éléments de contenu
  const contentElements = document.querySelectorAll('.content > *');
  contentElements.forEach((element, index) => {
    element.classList.add('animate-fade-in-up');
    element.style.animationDelay = `${index * 0.1}s`;
  });
});

// Fermer la sidebar en cliquant à l'extérieur
document.addEventListener('click', function(event) {
  const sidebar = document.getElementById('sidebar');
  const hamburger = document.querySelector('.hamburger');
  
  if (!sidebar.contains(event.target) && !hamburger.contains(event.target) && sidebar.classList.contains('open')) {
    toggleSidebar();
  }
});
</script>

</body>
</html>