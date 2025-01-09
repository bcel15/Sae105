// Objet contenant les descriptions pour chaque parfum
const descriptions = {
    parfum1: "Un parfum raffiné qui évoque le charme intemporel et la sophistication. Élégance est parfait pour des soirées mémorables.",
    parfum2: "Mystère, avec ses notes envoûtantes, incarne l'élégance et le charisme dans chaque goutte.",
    parfum3: "Horizon capture l'essence de la fraîcheur et du dynamisme, idéal pour les esprits aventureux.",
    parfum4: "Ambition, moderne et audacieux, reflète la personnalité des visionnaires de notre époque.",
    parfum5: "Sérénité est un parfum apaisant et doux, parfait pour une ambiance relaxante et paisible.",
    parfum6: "Évasion offre une expérience exotique et unique, transportant vos sens vers des contrées lointaines.",
    parfum7: "Bravoure est conçu pour les personnalités fortes et distinctives qui osent être différentes.",
    parfum8: "Harmonie mélange un équilibre parfait de notes florales et boisées pour une élégance naturelle.",
    parfum9: "Nuit est un parfum mystérieux et séduisant, idéal pour des soirées envoûtantes.",
    parfum10: "Vitalité est un souffle d'énergie et de fraîcheur, parfait pour commencer la journée en beauté.",
    parfum11: "Prestige est un parfum luxueux et riche, un symbole de statut et de raffinement.",
    parfum12: "Tempête évoque l'intensité et l'audace, pour ceux qui aiment se démarquer.",
    parfum13: "Saphir est un trésor rare, éclatant de lumière et de distinction.",
    parfum14: "Zénith capture la chaleur et la lumière, parfait pour illuminer chaque moment.",
    parfum15: "Énigme est mystérieux et captivant, pour ceux qui aiment intriguer et fasciner.",
    parfum16: "Arôme offre une fraîcheur naturelle qui rappelle les jardins verdoyants au printemps.",
    parfum17: "Rubis est vibrant et précieux, une véritable déclaration de passion et de luxe.",
    parfum18: "Pureté incarne la clarté et l'apaisement, parfait pour les moments de sérénité.",
    parfum19: "Flamme est intense et chaleureux, un parfum qui reflète la passion.",
    parfum20: "Cristal est pur et éclatant, une symphonie de lumière et de fraîcheur."
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

    // Ajout au panier, ici juste un log dans la console, tu peux ajouter ta propre logique pour gérer le panier
    console.log(`Ajouté au panier: ${name} pour ${price} €`);

    // Afficher la pop-up de confirmation
    showCartPopup(name);
}

// Ajouter au panier depuis le pop-up
function addToCartFromPopup() {
    const title = document.getElementById("details-title").innerText;
    const priceText = document.getElementById("details-prix").innerText;
    const price = parseFloat(priceText.replace('€', '').trim()); // Extraire le prix
    addToCart(title, price);  // Appel à la fonction d'ajout au panier
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
