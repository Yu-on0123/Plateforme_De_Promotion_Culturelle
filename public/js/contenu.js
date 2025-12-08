// Gestion des cartes de contenu
document.addEventListener('DOMContentLoaded', function() {
    // Ajuster la hauteur des médias selon le type
    const contentCards = document.querySelectorAll('.content-card');
    
    contentCards.forEach(card => {
        const mediaElement = card.querySelector('.card-media');
        const infoElement = card.querySelector('.card-info');
        const mediaType = card.querySelector('.media-type i');
        
        if (mediaType) {
            const type = mediaType.className;
            
            // Réglage des hauteurs selon le type de média
            if (type.includes('fa-video')) {
                // Vidéo : 40% hauteur
                mediaElement.style.height = '40%';
                infoElement.style.height = '60%';
            } else if (type.includes('fa-volume-up')) {
                // Audio : 20% hauteur
                mediaElement.style.height = '20%';
                infoElement.style.height = '80%';
            }
            // Image : déjà à 60% par défaut dans le CSS
        }
        
        // Gestion des couleurs au hover/click
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '100';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
        
        // Navigation smooth vers les sections
        card.querySelector('.card-btn').addEventListener('click', function(e) {
            // Pour l'instant, juste un placeholder
            console.log('Navigation vers le contenu complet');
        });
    });
    
    // Navigation de la navbar
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const offset = 80; // Compensation pour la navbar fixe
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Gestion dynamique des couleurs de texte
    function updateTextColors() {
        const cards = document.querySelectorAll('.content-card');
        
        cards.forEach(card => {
            if (card.classList.contains('card-red')) {
                // Texte par défaut pour rouge
                const excerpt = card.querySelector('.card-excerpt');
                const metaItems = card.querySelectorAll('.meta-item');
                
                if (excerpt) excerpt.style.color = '#ccc';
                metaItems.forEach(item => {
                    item.style.color = '#aaa';
                });
            }
            
            if (card.classList.contains('card-yellow')) {
                // Texte par défaut pour jaune
                const excerpt = card.querySelector('.card-excerpt');
                const metaItems = card.querySelectorAll('.meta-item');
                
                if (excerpt) excerpt.style.color = '#ccc';
                metaItems.forEach(item => {
                    item.style.color = '#aaa';
                });
            }
        });
    }
    
    // Initialiser les couleurs
    updateTextColors();
});