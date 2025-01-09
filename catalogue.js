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

// Fonction pour afficher les détails d'un parfum
function showDetails(parfumId) {
    const detailsSection = document.getElementById("details-parfum");
    const detailsImage = document.getElementById("details-image");
    const detailsTitle = document.getElementById("details-title");
    const detailsDescription = document.getElementById("details-description");

    // Récupérer le parfum correspondant
    const parfumElement = document.querySelector(`.parfum[onclick="showDetails('${parfumId}')"]`);
    
    if (parfumElement) {
        const imageSrc = parfumElement.querySelector("img").src;
        const title = parfumElement.querySelector("h2").textContent;
        const description = descriptions[parfumId] || "Description non disponible.";

        // Mettre à jour les éléments de la fenêtre pop-up
        detailsImage.src = imageSrc;
        detailsTitle.textContent = title;
        detailsDescription.textContent = description;

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
