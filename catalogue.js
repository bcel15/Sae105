// Objet contenant les descriptions pour chaque parfum
const descriptions = {
    parfum1: "Un parfum raffiné qui évoque le charme intemporel et la sophistication Élégance est parfait pour des soirées mémorables Sa composition combine des notes délicates de rose de mai de vanille bourbon et de bois de santal créant une harmonie élégante et chaleureuse",
    parfum2: "Mystère avec ses notes envoûtantes incarne l'élégance et le charisme dans chaque goutte Ses accords subtils de musc blanc de jasmin d'Arabie et d'encens offrent une fragrance profonde et intrigante captivant tous les sens",
    parfum3: "Horizon capture l'essence de la fraîcheur et du dynamisme idéal pour les esprits aventureux Ce parfum allie les notes vivifiantes de citron vert de menthe poivrée et de cèdre offrant une expérience énergisante qui éveille les sens",
    parfum4: "Ambition moderne et audacieux Ambition reflète la personnalité des visionnaires de notre époque Ses notes de poivre noir de cuir et de patchouli confèrent au parfum une profondeur et une force qui symbolisent la réussite et l'aspiration",
    parfum5: "Sérénité est un parfum apaisant et doux parfait pour une ambiance relaxante et paisible Composé de lavande de camomille et de musc il dégage une fraîcheur délicate qui apaise l’esprit et invite à la tranquillité",
    parfum6: "Évasion offre une expérience exotique et unique transportant vos sens vers des contrées lointaines Avec ses accords de ylang-ylang de noix de coco et de bois de teck il invite à l’évasion dans un monde lointain et mystérieux",
    parfum7: "Bravoure conçu pour les personnalités fortes et distinctives qui osent être différentes Ce parfum audacieux mélange des notes de cuir de bois de gaïac et de tabac créant une fragrance unique qui inspire confiance et leadership",
    parfum8: "Harmonie mélange un équilibre parfait de notes florales et boisées pour une élégance naturelle Avec ses touches de violette de patchouli et de cèdre ce parfum évoque la sérénité et la beauté d’un jardin sauvage",
    parfum9: "Nuit est un parfum mystérieux et séduisant idéal pour des soirées envoûtantes Ses accords de rose noire de musc et d'ambre offrent une expérience sensorielle intense et irrésistible capturant l’essence de la nuit",
    parfum10: "Vitalité est un souffle d’énergie et de fraîcheur parfait pour commencer la journée en beauté Ses notes de pamplemousse de basilic et de romarin apportent une explosion de fraîcheur dynamisant l’esprit pour toute la journée",
    parfum11: "Prestige est un parfum luxueux et riche un symbole de statut et de raffinement Composé de notes de oud de rose turque et de musc blanc il dégage une richesse et une profondeur intemporelle capturant l’essence du luxe",
    parfum12: "Tempête évoque l'intensité et l'audace pour ceux qui aiment se démarquer Ce parfum combine des notes de gingembre de bois de cèdre et de vétiver créant une fragrance audacieuse et énergique qui fait tourner les têtes",
    parfum13: "Saphir est un trésor rare éclatant de lumière et de distinction Avec sa composition de fleurs d'orchidée de bergamote et de musc blanc il offre une sensation de fraîcheur et d’élégance précieuse semblable à un joyau scintillant",
    parfum14: "Zénith capture la chaleur et la lumière parfait pour illuminer chaque moment Ses accords de mandarine de miel et de bois de santal créent un parfum lumineux qui rayonne de chaleur et de bien-être",
    parfum15: "Énigme est mystérieux et captivant pour ceux qui aiment intriguer et fasciner La combinaison de notes de bois de oud de patchouli et de vanille noire offre une fragrance énigmatique et sensuelle attirant l’attention sans tout dévoiler",
    parfum16: "Arôme offre une fraîcheur naturelle qui rappelle les jardins verdoyants au printemps Ce parfum vivifiant associe la menthe le citron et le jasmin pour une sensation de pureté et de renouveau rafraîchissant l’âme et l’esprit",
    parfum17: "Rubis est vibrant et précieux une véritable déclaration de passion et de luxe Avec des notes de framboise de rose et de bois de cèdre ce parfum crée une expérience sensorielle intense riche en émotion et en désir",
    parfum18: "Pureté incarne la clarté et l’apaisement parfait pour les moments de sérénité La combinaison de fleur d’oranger de lavande et de musc crée une fragrance douce et lumineuse apportant calme et tranquillité intérieure",
    parfum19: "Flamme est intense et chaleureux un parfum qui reflète la passion Les accords de cannelle de vanille et de bois brûlé créent une expérience olfactive chaude et envoûtante idéale pour des moments de désir intense",
    parfum20: "Cristal est pur et éclatant une symphonie de lumière et de fraîcheur Avec des notes de bergamote de jasmin et de musc ce parfum évoque une pureté lumineuse capturant l’essence de la fraîcheur et du renouveau"

};

// Afficher la pop-up en haut à droite
function showCartPopup(name) {
    const cartPopup = document.getElementById("cart-popup");
    const cartMessage = document.getElementById("cart-message");
    cartMessage.innerText = `${name} a été ajouté au panier`;
    cartPopup.classList.remove("hidden");

    // Masquer la pop-up après 3 secondes
    setTimeout(function() {
        cartPopup.classList.add("hidden");
    }, 3000);
}

// Ajouter au panier depuis le catalogue
function addToCart(name, price, event) {
    // Empêcher le comportement par défaut du bouton (éviter qu'il recharge la page)
    event.preventDefault();

    // Récupérer le panier existant depuis localStorage
    const panier = JSON.parse(localStorage.getItem('panier')) || [];
    
    // Ajouter le nouveau produit au panier
    panier.push({ nom: name, prix: price });
    
    // Mettre à jour localStorage
    localStorage.setItem('panier', JSON.stringify(panier));
    
    console.log(`Ajouté au panier: ${name} pour ${price} €`);
    
    // Afficher la pop-up de confirmation
    showCartPopup(name);
}

// Ajouter au panier depuis le pop-up
function addToCartFromPopup() {
    const title = document.getElementById("details-title").innerText;
    const priceText = document.getElementById("details-prix").innerText;
    const price = parseFloat(priceText.replace('€', '').trim()); // Extraire le prix
    addToCart(title, price, event);  // Appel à la fonction d'ajout au panier
}

// Fonction pour afficher les détails d'un parfum
function showDetails(parfumId) {
    const detailsSection = document.getElementById("details-parfum");
    const detailsImage = document.getElementById("details-image");
    const detailsTitle = document.getElementById("details-title");
    const detailsDescription = document.getElementById("details-description");
    const detailsPrice = document.getElementById("details-prix");

    // Récupérer le parfum correspondant
    const parfumElement = document.querySelector(`.parfum[onclick="showDetails('${parfumId}')"]`);
    
    if (parfumElement) {
        const imageSrc = parfumElement.querySelector("img").src;
        const title = parfumElement.querySelector("h2").textContent;
        const description = descriptions[parfumId] || "Description non disponible.";
        const price = parfumElement.querySelector(".prix").textContent;

        // Mettre à jour les éléments de la fenêtre pop-up
        detailsImage.src = imageSrc;
        detailsTitle.textContent = title;
        detailsDescription.textContent = description;
        detailsPrice.textContent = `Prix: ${price}`;

        // Afficher la section pop-up
        detailsSection.classList.add("visible");
        detailsSection.classList.remove("hidden");
    }
}

// Fonction pour fermer la fenêtre de détails
function closeDetails() {
    const detailsSection = document.getElementById("details-parfum");
    detailsSection.classList.add("hidden");
    detailsSection.classList.remove("visible");
}

