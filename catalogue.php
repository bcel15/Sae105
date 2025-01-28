<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - CP Parfums</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="catalogue.css">
</head>
<body>
<header>

    <div class=head-container>
        <a href="panier.php">
            <img src="caddie.png" alt="Caddie" class="caddie">
        </a>
    </div>

    <!-- Image en fond du header -->
    <div class="header-background">
        <a href="#nos-parfums" class="no-link-style">
            <h1>Notre catalogue</h1>
        </a>
    </div>

    <!-- Menu de navigation -->
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="panier.php">Panier</a></li>
            <li><a href="creation.php">Création</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="nos-parfums">
        <h2 style="font-size: 2em; font-weight: bold;">Nos Parfums</h2>
        <div class="parfums-container">
            <div class="parfum" onclick="showDetails('parfum1')">
                <img src="photo_parfum/parfum_rose.jpg" alt="Parfum Élégance">
                <h2>Élégance</h2>
                <p>Raffiné et classique</p>
                <p class="prix">51,24 €</p>
                <button onclick="addToCart('Élégance', 51.24, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum2')">
                <img src="photo_parfum/parfum_gris.jpg" alt="Parfum Mystère">
                <h2>Mystère</h2>
                <p>Envoutant et charismatique</p>
                <p class="prix">110,25 €</p>
                <button onclick="addToCart('Mystère', 110.25, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum3')">
                <img src="photo_parfum/parfum_vert2.jpg" alt="Parfum Horizon">
                <h2>Horizon</h2>
                <p>Frais et dynamique</p>
                <p class="prix">106,40 €</p>
                <button onclick="addToCart('Horizon', 106.40, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum4')">
                <img src="photo_parfum/parfum_violet3.jpg" alt="Parfum Ambition">
                <h2>Ambition</h2>
                <p>Moderne et audacieux</p>
                <p class="prix">120,00 €</p>
                <button onclick="addToCart('Ambition', 120.00, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum5')">
                <img src="photo_parfum/parfum_fleur.jpg" alt="Parfum Sérénité">
                <h2>Sérénité</h2>
                <p>Apaisant et doux</p>
                <p class="prix">135,00 €</p>
                <button onclick="addToCart('Sérénité', 135.00, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum6')">
                <img src="photo_parfum/parfum_violet2.jpg" alt="Parfum Évasion">
                <h2>Évasion</h2>
                <p>Exotique et unique</p>
                <p class="prix">115,50 €</p>
                <button onclick="addToCart('Évasion', 115.50, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum7')">
                <img src="photo_parfum/parfum_rouge2.jpg" alt="Parfum Bravoure">
                <h2>Bravoure</h2>
                <p>Fort et distinctif</p>
                <p class="prix">102,90 €</p>
                <button onclick="addToCart('Bravoure', 102.90, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum8')">
                <img src="photo_parfum/parfum_rose2.jpg" alt="Parfum Harmonie">
                <h2>Harmonie</h2>
                <p>Équilibré et floral</p>
                <p class="prix">98,75 €</p>
                <button onclick="addToCart('Harmonie', 98.75, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum9')">
                <img src="photo_parfum/parfum_orange2.jpg" alt="Parfum Nuit">
                <h2>Nuit</h2>
                <p>Sombre et séduisant</p>
                <p class="prix">125,60 €</p>
                <button onclick="addToCart('Nuit', 125.60, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum10')">
                <img src="photo_parfum/parfum_vert3.jpg" alt="Parfum Vitalité">
                <h2>Vitalité</h2>
                <p>Énergique et frais</p>
                <p class="prix">89,40 €</p>
                <button onclick="addToCart('Vitalité', 89.40, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum11')">
                <img src="photo_parfum/parfum_jaune2.jpg" alt="Parfum Prestige">
                <h2>Prestige</h2>
                <p>Luxueux et riche</p>
                <p class="prix">145,30 €</p>
                <button onclick="addToCart('Prestige', 145.30, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum12')">
                <img src="photo_parfum/parfum_rouge.jpg" alt="Parfum Tempête">
                <h2>Tempête</h2>
                <p>Intense et audacieux</p>
                <p class="prix">112,00 €</p>
                <button onclick="addToCart('Tempête', 112.00, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum13')">
                <img src="photo_parfum/parfum_bleu2.jpg" alt="Parfum Saphir">
                <h2>Saphir</h2>
                <p>Éclatant et rare</p>
                <p class="prix">130,20 €</p>
                <button onclick="addToCart('Saphir', 130.20, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum14')">
                <img src="photo_parfum/parfum_blanc2.jpg" alt="Parfum Zénith">
                <h2>Zénith</h2>
                <p>Chaud et lumineux</p>
                <p class="prix">122,45 €</p>
                <button onclick="addToCart('Zénith', 122.45, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum15')">
                <img src="photo_parfum/parfum_violet.jpg" alt="Parfum Énigme">
                <h2>Énigme</h2>
                <p>Mystérieux et captivant</p>
                <p class="prix">118,90 €</p>
                <button onclick="addToCart('Énigme', 118.90, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum16')">
                <img src="photo_parfum/parfum_jaune.jpg" alt="Parfum Arôme">
                <h2>Arôme</h2>
                <p>Naturel et frais</p>
                <p class="prix">95,60 €</p>
                <button onclick="addToCart('Arôme', 95.60, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum17')">
                <img src="photo_parfum/parfum_rouge3.jpg" alt="Parfum Rubis">
                <h2>Rubis</h2>
                <p>Vibrant et précieux</p>
                <p class="prix">138,00 €</p>
                <button onclick="addToCart('Rubis', 138.00, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum18')">
                <img src="photo_parfum/parfum_blanc.jpg" alt="Parfum Pureté">
                <h2>Pureté</h2>
                <p>Clair et apaisant</p>
                <p class="prix">99,90 €</p>
                <button onclick="addToCart('Pureté', 99.90, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum19')">
                <img src="photo_parfum/parfum_orange.jpg" alt="Parfum Flamme">
                <h2>Flamme</h2>
                <p>Chaleureux et intense</p>
                <p class="prix">140,20 €</p>
                <button onclick="addToCart('Flamme', 140.20, event); event.stopPropagation();">Ajouter au panier</button>
            </div>

            <div class="parfum" onclick="showDetails('parfum20')">
                <img src="photo_parfum/parfum_gris2.jpg" alt="Parfum Cristal">
                <h2>Cristal</h2>
                <p>Pur et éclatant</p>
                <p class="prix">108,75 €</p>
                <button onclick="addToCart('Cristal', 108.75, event); event.stopPropagation();">Ajouter au panier</button>
            </div>
        </div>
    </section>

    <section id="details-parfum" class="hidden">
        <div class="popup-content">
            <img id="details-image" src="#" alt="Image du parfum">
            <h2 id="details-title">Titre du Parfum</h2>
            <p id="details-description">Description du parfum.</p>
            <p id="details-prix">Prix: </p>
            <button class="ajouter-panier" onclick="addToCartFromPopup()">Ajouter au panier</button>
            <button onclick="closeDetails()">Fermer</button>
        </div>
    </section>

    <!-- Pop-up en haut à droite pour confirmation -->
    <div id="cart-popup" class="cart-popup hidden">
            <p id="cart-message"></p>
        </div>

</main>

<footer>
    <!-- Liens Contact et Mentions Légales centrés -->
    <div style="text-align: center; margin-top: 16px;">
        <ul style="list-style: none; padding: 0; line-height: 1.8; display: inline-flex; gap: 20px;">
            <li><a href="contact.php" style="text-decoration: none; color: #ffffff; font-size: 18px;">Contact</a></li>
            <li><a href="copyright.php" style="text-decoration: none; color: #ffffff; font-size: 18px;">Mentions Légales</a></li>
        </ul>
    </div>

    <!-- Mention Légale centrée en bas -->
    <p style="text-align: center; font-size: 16px; margin-top: 10px;">&copy; 2025 CP Parfums. Tous droits réservés.</p>
</footer>


<script defer src="catalogue.js"></script>
</body>
</html>
