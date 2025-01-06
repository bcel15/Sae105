<?php
// contact.php
// Page de contact du site sur les parfums.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Magasin de Parfums</title>
    <!-- Lien vers la feuille de style principale -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Lien vers la feuille de style spécifique à la page contact -->
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <!-- Logo du magasin de parfums -->
                <img src="img/logo.png" alt="Logo Magasin de Parfums">
            </div>
            <h1>Magasin de Parfums</h1>
            <div class="cart-link">
                <!-- Lien vers le panier -->
                <a href="cart.php">Panier</a>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <!-- Menu de navigation -->
            <li><a href="index.php">Accueil</a></li>
            <li><a href="catalog.php">Produits</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section class="hero-contact">
            <!-- Section d'en-tête visuelle -->
            <div class="hero-image">
                <h2>BESOIN D'UNE INFO ? NOUS SOMMES LÀ POUR Y RÉPONDRE !</h2>
            </div>
        </section>

        <section class="breadcrumb">
            <!-- Fil d'Ariane -->
            <p><a href="index.php">Accueil</a> > <a href="contact.php">Contact</a></p>
        </section>

        <section class="contact-form">
            <!-- Formulaire de contact principal -->
            <h2>NOUS CONTACTER</h2>
            <p>Une question sur nos parfums, nos offres ou nos services ? Nos conseillers vous aideront avec plaisir !</p>

            <form action="send_contact.php" method="post">
                <label for="prenom">Prénom *</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="nom">Nom *</label>
                <input type="text" id="nom" name="nom" required>

                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>

                <label for="adresse">Adresse postale</label>
                <textarea id="adresse" name="adresse"></textarea>

                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone">

                <label for="message">Votre message</label>
                <textarea id="message" name="message" rows="5"></textarea>

                <label for="informations">Souhaitez-vous être informé(e) de nos nouvelles offres ?</label>
                <select id="informations" name="informations">
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>

                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <!-- Pied de page avec copyright et liens -->
            <p>&copy; 2025 Magasin de Parfums</p>
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="legal.php">Mentions Légales</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>

