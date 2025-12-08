{{-- resources/views/components/footer-contributor.blade.php --}}
<footer class="universal-footer contributor-footer">
    <div class="footer-container">
        <!-- Navigation contributeur -->
        <div class="footer-nav">
            <a href="{{ route('user.dashboard') }}" class="footer-link">
                <i class="fas fa-tachometer-alt"></i>
                <span>Tableau de bord</span>
            </a>
            
            <a href="{{ route('contributeur.contenus.index') }}" class="footer-link">
                <i class="fas fa-file-alt"></i>
                <span>Mes contenus</span>
            </a>
            
            <a href="{{ route('contributeur.contenus.create') }}" class="footer-link highlight">
                <i class="fas fa-plus-circle"></i>
                <span>Nouveau contenu</span>
            </a>
            
            <a href="{{ route('contributeur.medias.index') }}" class="footer-link">
                <i class="fas fa-photo-video"></i>
                <span>Mes médias</span>
            </a>
            
            <a href="{{ route('commentaires.index') }}" class="footer-link">
                <i class="fas fa-comments"></i>
                <span>Mes commentaires</span>
            </a>
            
            <a href="{{ route('explorer.index') }}" class="footer-link">
                <i class="fas fa-compass"></i>
                <span>Explorer</span>
            </a>
            
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="footer-link logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Déconnexion</span>
                </button>
            </form>
        </div>
        
        <!-- Informations contributeur -->
        <div class="footer-info">
            <div class="footer-brand">
                <div class="footer-logo contributor">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="footer-brand-text">
                    <h4>Contributeur BéninCulture</h4>
                    <p>Merci pour votre contribution !</p>
                </div>
            </div>
            
        </div>
        
        <!-- Copyright -->
        <div class="footer-copyright">
            <p>&copy; {{ date('Y') }} BéninCulture. Section contributeur</p>
        </div>
    </div>
</footer>