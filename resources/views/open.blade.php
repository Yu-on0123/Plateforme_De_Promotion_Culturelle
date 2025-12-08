<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culture Bénin - Patrimoine & Traditions</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Image de fond fixe pour l'effet parallaxe -->
    <div class="static-background"></div>

    <!-- Section Vidéo d'en-tête -->
    <header class="video-header">
        <video autoplay muted loop playsinline id="headerVideo">
            <source src="{{ URL::asset("videos/video-header.mp4") }}" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
        <div class="video-overlay">
            <h1>Culture Bénin</h1>
            <p>Découvrez la richesse du patrimoine béninois</p>
        </div>
        
    </header>

    <!-- Section Container Noir avec Description et Cartes Hover -->
    <section class="black-container">
        <div class="description">
            <h2>Notre Plateforme</h2>
            <p>Une plateforme dédiée à la préservation et à la promotion de la culture béninoise sous toutes ses formes : histoire, arts, langues et traditions.</p>
        </div>
        <div class="hover-cards">
            <div class="hover-card" id="card-red">
                <div class="hover-card-icon">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="hover-card-content">
                    <h3>Histoire Royale</h3>
                    <p>Explorez les dynasties et les royaumes qui ont façonné le Bénin, d'Abomey à Porto-Novo.</p>
                </div>
            </div>
            <div class="hover-card" id="card-yellow">
                <div class="hover-card-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <div class="hover-card-content">
                    <h3>Arts Traditionnels</h3>
                    <p>Découvrez les techniques ancestrales de la sculpture, du tissage et de la vannerie.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Premier Container Blanc Centré -->
    <section class="white-container intro">
        <h2>Plongez au Cœur de la Culture</h2>
        <p>Le Bénin, berceau du Vodoun et des royaumes historiques, vous ouvre ses portes. À travers cette plateforme, explorez ses sites emblématiques, ses langues vibrantes et ses événements culturels.</p>
        <p>Les sections suivantes vous présentent des joyaux du patrimoine.</p>
    </section>

    <!-- Section des 4 Cartes Patrimoine -->
    <section class="heritage-cards">
        <div class="card">
            <div class="card-image">
                <img src="{{ URL::asset("images/abomey_palais.jpg") }}" alt="Palais Royal d'Abomey">
            </div>
            <div class="card-content">
                <h3>Abomey</h3>
                <p>Ancienne capitale du Royaume du Dahomey, classée au patrimoine mondial de l'UNESCO pour ses palais royaux et ses bas-reliefs historiques.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ URL::asset("images/porte-_de-_non_retour_benin-1024x768.jpg") }}" alt="Porte du Non-Retour">
            </div>
            <div class="card-content">
                <h3>Porte du Non-Retour</h3>
                <p>Mémorial emblématique de Ouidah rappelant la traite négrière, lieu de mémoire et de recueillement.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ URL::asset("images/foret_sacree_de_kpasse.jpeg") }}" alt="Forêt Sacrée de Kpassè">
            </div>
            <div class="card-content">
                <h3>Forêt Sacrée de Kpassè</h3>
                <p>Site naturel et spirituel à Ouidah, abritant des statues de divinités vodoun et une faune préservée.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ URL::asset("images/atassi.jpeg") }}" alt="Assassin's Creed Mirage - Atassi">
            </div>
            <div class="card-content">
                <h3>Délice: Atassi</h3>
                <p>Découvrez l'un des plats les plus appreciés des Béninois.</p>
            </div>
        </div>
    </section>

    <!-- Section des 3 Cartes Langues -->
    <section class="language-cards">
        <div class="lang-card">
            <div class="lang-icon">
                <i class="fas fa-language"></i>
            </div>
            <h3>Fon</h3>
            <p>Langue majoritaire du Sud Bénin, parlée par plus de 2 millions de personnes. Utilisée dans les cérémonies vodoun.</p>
            <div class="lang-details">
                <span><strong>Région :</strong> Sud</span>
                <span><strong>Locuteurs :</strong> ~2,1M</span>
            </div>
        </div>
        <div class="lang-card">
            <div class="lang-icon">
                <i class="fas fa-book"></i>
            </div>
            <h3>Yoruba</h3>
            <p>Langue de grande influence culturelle et religieuse dans le pays. Littérature riche et traditions orales.</p>
            <div class="lang-details">
                <span><strong>Région :</strong> Sud-Est</span>
                <span><strong>Locuteurs :</strong> ~900K</span>
            </div>
        </div>
        <div class="lang-card">
            <div class="lang-icon">
                <i class="fas fa-comments"></i>
            </div>
            <h3>Goun</h3>
            <p>Langue locale de la région de Porto-Novo, riche en expressions traditionnelles et proverbes.</p>
            <div class="lang-details">
                <span><strong>Région :</strong> Porto-Novo</span>
                <span><strong>Locuteurs :</strong> ~700K</span>
            </div>
            <a href="#" class="see-more">Voir plus <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- Container Blanc avec Appel à l'Action -->
    <section class="white-container cta">
        <h2>Prêt à explorer davantage ?</h2>
        <p>Inscrivez-vous pour accéder à l'ensemble des contenus, participer aux événements et contribuer à la plateforme.</p>
        <a href="#inscription" class="cta-button">
            Découvrir la plateforme <i class="fas fa-long-arrow-alt-right"></i>
        </a>
    </section>

    <!-- Gros Container Noir avec 3 Événements -->
    <section class="black-container events">
        <h2>Événements & Lieux à ne pas manquer</h2>
        <div class="event-cards">
            <div class="event-card">
                <div class="event-img">
                    <img src="{{ URL::asset("images/voduns_day_egoun.jpeg") }}" alt="Festival de Vodoun">
                </div>
                <div class="event-content">
                    <h3>Festival de Vodoun</h3>
                    <p>10 Janvier - Ouidah</p>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img">
                    <img src="{{ URL::asset("images/abomey_455.jpeg") }}" alt="Musée d'Abomey">
                </div>
                <div class="event-content">
                    <h3>Musée d'Abomey</h3>
                    <p>Exposition permanente - Abomey</p>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img">
                    <img src="{{ URL::asset("images/danse.jpg") }}" alt="Fête Gèlèdè">
                </div>
                <div class="event-content">
                    <h3>Fête Gèlèdè</h3>
                    <p>Mars/Avril - Région Yoruba</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dernier Container Blanc (Connexion) -->
    <section class="white-container login">
        <h2>Connectez-vous pour contribuer</h2>
        <p>Accédez à votre espace personnel, publiez du contenu et interagissez avec la communauté.</p>
        <a href="login" class="login-button">Se connecter / S'inscrire</a>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-links">
            <a href="#"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
            <a href="#"><i class="fas fa-book"></i> Contenus</a>
            <a href="#"><i class="fas fa-info-circle"></i> À propos</a>
            <a href="#"><i class="fas fa-envelope"></i> Nous contacter</a>
            <a href="#"><i class="fas fa-shield-alt"></i> Politique de confidentialité</a>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Culture Bénin. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="{{ URL::asset("js/script.js") }}"></script>
</body>
</html>