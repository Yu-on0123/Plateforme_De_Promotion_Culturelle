document.addEventListener('DOMContentLoaded', () => {

    const video = document.getElementById('headerVideo');
    const section = document.querySelector('.video-header');

    /* -------------------------------------- */
    /* AUTOPLAY SÉCURISÉ */
    /* -------------------------------------- */
    video.muted = true;

    /* -------------------------------------- */
    /* LECTURE / PAUSE AUTOMATIQUE (scroll) */
    /* -------------------------------------- */
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                video.play().catch(() => {});
            } else {
                video.pause();
            }
        });
    }, { threshold: 0.3 });

    observer.observe(section);

    // Mute / Unmute
    btnMute.addEventListener('click', () => {
        video.muted = !video.muted;
        updateIcons();
    });

    updateIcons();

    /* -------------------------------------- */
    /* HOVER DES CARTES (normalisé) */
    /* -------------------------------------- */
    function applyHover(card, bg, color) {
        const text = card.querySelector('.hover-card-content');

        card.addEventListener('mouseenter', () => {
            card.style.background = bg;
            card.style.color = color;
            if (text) text.style.color = color;
        });

        card.addEventListener('mouseleave', () => {
            card.style.background = "";
            card.style.color = "";
            if (text) text.style.color = "";
        });
    }

    const red = document.getElementById('card-red');
    const yellow = document.getElementById('card-yellow');

    if (red) applyHover(red, "#b22222", "white");
    if (yellow) applyHover(yellow, "#ffd700", "#333");
});
