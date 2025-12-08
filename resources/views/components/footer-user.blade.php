{{-- resources/views/components/footer-user.blade.php --}}
<footer class="universal-footer user-footer">
    <div class="footer-container">
        <!-- Navigation principale -->
        <div class="footer-nav">
            <a href="{{ route('user.dashboard') }}" class="footer-link">
                <i class="fas fa-tachometer-alt"></i>
                <span>Tableau de bord</span>
            </a>
            
            <a href="{{ route('explorer.index') }}" class="footer-link">
                <i class="fas fa-compass"></i>
                <span>Explorer</span>
            </a>
            
            <a href="{{ route('commentaires.index') }}" class="footer-link">
                <i class="fas fa-comments"></i>
                <span>Mes commentaires</span>
            </a>
            
            <a href="{{ route('profile.edit') }}" class="footer-link">
                <i class="fas fa-user"></i>
                <span>Mon profil</span>
            </a>
            
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="footer-link logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Déconnexion</span>
                </button>
            </form>
        </div>
        
        <!-- Informations -->
        <div class="footer-info">
            <div class="footer-brand">
                <div class="footer-logo">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="footer-brand-text">
                    <h4>BéninCulture</h4>
                    <p>Explorez le patrimoine</p>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="footer-copyright">
            <p>&copy; {{ date('Y') }} BéninCulture. Tous droits réservés.</p>
        </div>
    </div>
</footer>