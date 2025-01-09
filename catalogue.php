<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - CP Parfums</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="catalogue.css">
    <script defer src="catalogue.js"></script>
</head>
<body>
<header>
        <!-- Image en fond du header -->
        <div class="header-background">
            <h1>Notre catalogue</h1>
        </div>

        <!-- Menu de navigation -->
<nav>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="contact.php">Contacter</a></li>
        <li><a href="panier.php">Panier</a></li>
    </ul>
</nav>

    </header>

    <main>
        <section id="nos-parfums">
            <h1>Nos Parfums</h1>
            <div class="parfums-container">
                <div class="parfum" onclick="showDetails('parfum1')">
                    <img src="images/parfum1.jpg" alt="Parfum Élégance">
                    <h2>Élégance</h2>
                    <p>Raffiné et classique</p>
                    <p class="prix">51,24 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum2')">
                    <img src="images/parfum2.jpg" alt="Parfum Mystère">
                    <h2>Mystère</h2>
                    <p>Envoutant et charismatique</p>
                    <p class="prix">110,25 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum3')">
                    <img src="images/parfum3.jpg" alt="Parfum Horizon">
                    <h2>Horizon</h2>
                    <p>Frais et dynamique</p>
                    <p class="prix">106,40 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum4')">
                    <img src="images/parfum4.jpg" alt="Parfum Ambition">
                    <h2>Ambition</h2>
                    <p>Moderne et audacieux</p>
                    <p class="prix">120,00 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum5')">
                    <img src="images/parfum5.jpg" alt="Parfum Sérénité">
                    <h2>Sérénité</h2>
                    <p>Apaisant et doux</p>
                    <p class="prix">135,00 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum6')">
                    <img src="images/parfum6.jpg" alt="Parfum Évasion">
                    <h2>Évasion</h2>
                    <p>Exotique et unique</p>
                    <p class="prix">115,50 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum7')">
                    <img src="images/parfum7.jpg" alt="Parfum Bravoure">
                    <h2>Bravoure</h2>
                    <p>Fort et distinctif</p>
                    <p class="prix">102,90 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum8')">
                    <img src="images/parfum8.jpg" alt="Parfum Harmonie">
                    <h2>Harmonie</h2>
                    <p>Équilibré et floral</p>
                    <p class="prix">98,75 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum9')">
                    <img src="images/parfum9.jpg" alt="Parfum Nuit">
                    <h2>Nuit</h2>
                    <p>Sombre et séduisant</p>
                    <p class="prix">125,60 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum10')">
                    <img src="images/parfum10.jpg" alt="Parfum Vitalité">
                    <h2>Vitalité</h2>
                    <p>Énergique et frais</p>
                    <p class="prix">89,40 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum11')">
                    <img src="images/parfum11.jpg" alt="Parfum Prestige">
                    <h2>Prestige</h2>
                    <p>Luxueux et riche</p>
                    <p class="prix">145,30 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum12')">
                    <img src="images/parfum12.jpg" alt="Parfum Tempête">
                    <h2>Tempête</h2>
                    <p>Intense et audacieux</p>
                    <p class="prix">112,00 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum13')">
                    <img src="images/parfum13.jpg" alt="Parfum Saphir">
                    <h2>Saphir</h2>
                    <p>Éclatant et rare</p>
                    <p class="prix">130,20 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum14')">
                    <img src="images/parfum14.jpg" alt="Parfum Zénith">
                    <h2>Zénith</h2>
                    <p>Chaud et lumineux</p>
                    <p class="prix">122,45 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum15')">
                    <img src="images/parfum15.jpg" alt="Parfum Énigme">
                    <h2>Énigme</h2>
                    <p>Mystérieux et captivant</p>
                    <p class="prix">118,90 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum16')">
                    <img src="images/parfum16.jpg" alt="Parfum Arôme">
                    <h2>Arôme</h2>
                    <p>Naturel et frais</p>
                    <p class="prix">95,60 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum17')">
                    <img src="images/parfum17.jpg" alt="Parfum Rubis">
                    <h2>Rubis</h2>
                    <p>Vibrant et précieux</p>
                    <p class="prix">138,00 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum18')">
                    <img src="images/parfum18.jpg" alt="Parfum Pureté">
                    <h2>Pureté</h2>
                    <p>Clair et apaisant</p>
                    <p class="prix">99,90 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum19')">
                    <img src="images/parfum19.jpg" alt="Parfum Flamme">
                    <h2>Flamme</h2>
                    <p>Chaleureux et intense</p>
                    <p class="prix">140,20 €</p>
                </div>

                <div class="parfum" onclick="showDetails('parfum20')">
                    <img src="images/parfum20.jpg" alt="Parfum Cristal">
                    <h2>Cristal</h2>
                    <p>Pur et éclatant</p>
                    <p class="prix">108,75 €</p>
                </div>
            </div>
        </section>

        <section id="details-parfum" class="hidden">
            <div class="popup-content">
                <img id="details-image" src="" alt="Image du parfum">
                <h2 id="details-title">Titre du Parfum</h2>
                <p id="details-description">Description du parfum.</p>
                <button onclick="closeDetails()">Fermer</button>
            </div>
        </section>

    </main>


    <footer>
        <p>&copy; 2025 CP Parfums. Tous droits réservés.</p>
    </footer>
    
    <script defer src="catalogue.js"></script>

</body>
</html>
