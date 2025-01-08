// Catalogue.js

const descriptionsGenerated = {
    parfum1: "Un parfum intemporel qui incarne l'élégance à travers des notes florales délicates et un fond boisé apaisant.",
    parfum2: "Un mélange captivant d'épices exotiques et de senteurs boisées, parfait pour les soirées mystiques.",
    // Ajoutez les descriptions générées ici pour chaque parfum...
};

function showDetails(parfumId) {
    const parfumElement = document.querySelector(`.parfum[onclick="showDetails('${parfumId}')"]`);
    const imageSrc = parfumElement.querySelector("img").src;
    const title = parfumElement.querySelector("h2").textContent;
    const description = parfumElement.querySelector("p:nth-of-type(1)").textContent;
    const prix = parfumElement.querySelector(".prix").textContent;
    const generatedDescription = descriptionsGenerated[parfumId];

    // Mettre à jour la pop-up
    document.getElementById("details-image").src = imageSrc;
    document.getElementById("details-title").textContent = title;
    document.getElementById("details-description").textContent = `${description} - Prix: ${prix}`;
    document.getElementById("details-generated").textContent = generatedDescription || "Description indisponible.";

    // Afficher la pop-up
    const detailsSection = document.getElementById("details-parfum");
    detailsSection.classList.add("visible");
}

function closeDetails() {
    const detailsSection = document.getElementById("details-parfum");
    detailsSection.classList.remove("visible");
}
