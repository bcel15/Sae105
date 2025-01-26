<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Déclaration du jeu de caractères et des informations de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page affiché dans l'onglet du navigateur -->
    <title>Création - CP Parfums</title>
    <!-- Lien vers le fichier CSS global partagé par tout le site -->
    <link rel="stylesheet" href="styles.css">
    <!-- Lien vers le fichier CSS spécifique à cette page -->
    <link rel="stylesheet" href="creation.css"> 
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
            <h1>Créez votre parfum</h1>
        </div>

        <!-- Menu de navigation -->
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="panier.php">Panier</a></li>
            </ul>
        </nav>
    </header>
    <main>
    
  <section class="customization">
    <h2>Personnalisez votre parfum pour 140.99 €</h2>
    <div class="options">
      <label for="flacon">Choisissez votre flacon :</label>
      <input type="radio" id="flacon-rond" name="flacon" value="rond" onclick="changeFlacon('rond')"> Rond
      <input type="radio" id="flacon-carre" name="flacon" value="carre" onclick="changeFlacon('carre')"> Carré
      <input type="radio" id="flacon-hexagonal" name="flacon" value="hexagonal" onclick="changeFlacon('hexagonal')"> Hexagonal
    </div>

    <div class="options">
      <label for="bouchon">Choisissez votre bouchon :</label>
      <input type="radio" id="bouchon-rond" name="bouchon" value="rond" onclick="changeBouchon('rond')"> Rond
      <input type="radio" id="bouchon-carre" name="bouchon" value="carre" onclick="changeBouchon('carre')"> Carré
    </div>

    <div class="options">
      <label for="couleur">Choisissez la couleur :</label>
      <input type="color" id="couleur" name="couleur" onchange="changeCouleur(this.value)">
    </div>

    <!-- Nouveau champ pour le nom du parfum -->
    <div class="options">
      <label for="nom-parfum">Donnez un nom à votre parfum :</label>
      <input type="text" id="nom-parfum" name="nom-parfum" placeholder="Ex. Parfum floral">
    </div>

    <!-- Nouveau champ pour choisir les odeurs avec une taille réduite -->
    <div class="options">
      <label for="odeurs">Quelles odeurs voulez-vous dans votre parfum ?</label>
      <textarea id="odeurs" name="odeurs" rows="2" placeholder="Décrivez les odeurs ou ingrédients souhaités"></textarea>
    </div>
  </section>
</main>


    <section class="parfum">
      <div id="bouchon" class="bouchon"></div>
      <div id="flacon" class="flacon"></div>
      <div class="options">
        <button onclick="ajouterPanier()">Ajouter au panier</button>
    </div>
    <!-- Pop-up en haut à droite pour confirmation -->
    <div id="cart-popup" class="cart-popup hidden">
            <p id="cart-message"></p>
        </div>
    </section>

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


  <script src="creation.js"></script>
  <script src="catalogue.js"></script>

</body>
</html>
