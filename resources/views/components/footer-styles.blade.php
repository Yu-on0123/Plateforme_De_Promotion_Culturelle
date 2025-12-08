{{-- resources/views/components/footer-styles.blade.php --}}
<style>
    /* ==============================
       Variables de la palette Terres & Royaumes
       ============================== */
    :root {
        --primary-red: #8B1E1E;
        --primary-gold: #D4AF37;
        --primary-ocre: #C19A6B;
        --primary-black: #0A0A0A;
        --primary-beige: #F5E9D9;
        --primary-cream: #FFFBF0;
        --earth-500: #C19A6B;
        --earth-700: #846358;
        --earth-800: #5d4037;
        --earth-900: #4e342e;

        --radius-sm: 8px;
        --radius-md: 12px;
        --radius-lg: 16px;
    }

    /* ==============================
       Layout sticky footer
       ============================== */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Inter', sans-serif;
    }

    .page-wrapper {
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }

    .page-content {
        flex: 1; /* prend tout l'espace restant */
    }

    /* ==============================
       Styles généraux footer
       ============================== */
    .universal-footer {
        width: 100%;
        padding: 2rem 0 1rem;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    /* ==============================
       Navigation
       ============================== */
    .footer-nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid rgba(245, 233, 217, 0.2);
    }

    .footer-link {
        color: var(--primary-beige);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1.5rem;
        border-radius: var(--radius-lg);
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(245, 233, 217, 0.1);
        font-weight: 500;
        font-size: 0.95rem;
    }

    .footer-link:hover {
        background: rgba(139, 30, 30, 0.3);
        border-color: var(--primary-red);
        transform: translateY(-3px);
        color: white;
    }

    .footer-link.logout-btn {
        background: none;
        border: none;
        font-family: inherit;
        font-size: inherit;
        cursor: pointer;
        color: var(--primary-beige);
    }

    .footer-link.highlight {
        background: linear-gradient(135deg, var(--primary-gold), #b8942a);
        color: var(--earth-900);
        font-weight: 600;
    }

    .footer-link.admin {
        background: linear-gradient(135deg, var(--primary-red), #7a1919);
        color: white;
    }

    /* ==============================
       Informations
       ============================== */
    .footer-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
        margin-bottom: 1.5rem;
    }

    .footer-brand {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .footer-logo {
        width: 50px;
        height: 50px;
        background: var(--earth-700);
        border-radius: var(--radius-lg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
    }

    .footer-logo.contributor {
        background: linear-gradient(135deg, var(--primary-gold), #b8942a);
    }

    .footer-brand-text h4 {
        font-family: 'Playfair Display', serif;
        font-size: 1.2rem;
        color: var(--primary-gold);
        margin: 0;
    }

    .footer-brand-text p {
        color: var(--primary-ocre);
        margin: 0;
        font-size: 0.9rem;
    }

    /* ==============================
       Copyright
       ============================== */
    .footer-copyright {
        text-align: center;
        color: rgba(245, 233, 217, 0.5);
        font-size: 0.9rem;
        padding-top: 1.5rem;
        border-top: 1px solid rgba(245, 233, 217, 0.1);
    }

    /* ==============================
       Styles spécifiques
       ============================== */
    .user-footer {
        background: linear-gradient(135deg, var(--earth-800), var(--earth-900));
    }

    .contributor-footer {
        background: linear-gradient(135deg, var(--earth-900), var(--primary-black));
        border-top: 3px solid var(--primary-gold);
    }

    /* ==============================
       Responsive
       ============================== */
    @media (max-width: 768px) {
        .footer-container {
            padding: 0 1rem;
        }

        .footer-nav {
            gap: 0.5rem;
        }

        .footer-link {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }

        .footer-info {
            flex-direction: column;
            text-align: center;
            gap: 1.5rem;
        }

        .footer-brand {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .footer-link {
            flex: 1 0 calc(50% - 0.5rem);
            justify-content: center;
            text-align: center;
        }

        .footer-link span {
            display: none;
        }

        .footer-link i {
            font-size: 1.2rem;
        }
    }

    .page-content {
    flex: 1;
    padding-bottom: 4rem; /* espace entre le contenu et le footer */
}

</style>
