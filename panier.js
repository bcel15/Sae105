// Récupérer le panier depuis localStorage
const panier = JSON.parse(localStorage.getItem('panier')) || [];

// Sélectionner le corps et le pied du tableau dans la page panier
const tableBody = document.querySelector("#panier tbody");
const totalElement = document.getElementById("total");

// Fonction pour afficher les articles du panier dans le tableau
function afficherPanier() {
    tableBody.innerHTML = ""; // Réinitialiser le contenu du tableau
    let total = 0; // Initialiser le total

    panier.forEach((item, index) => {
        // Créer une nouvelle ligne pour chaque article
        const row = document.createElement("tr");

        row.innerHTML = `
            <td>${item.nom}</td>
            <td>${item.prix} €</td>
            <td><button onclick="retirerDuPanier(${index})">Retirer</button></td>
        `;

        tableBody.appendChild(row); // Ajouter la ligne au tableau

        // Ajouter le prix de l'article au total
        total += item.prix;
    });

    // Afficher le total dans la ligne dédiée
    totalElement.textContent = `${total.toFixed(2)} €`;

    // Si le panier est vide, afficher un message
    if (panier.length === 0) {
        const emptyRow = document.createElement("tr");
        emptyRow.innerHTML = `
            <td colspan="3" style="text-align: center;">Votre panier est vide.</td>
        `;
        tableBody.appendChild(emptyRow);
        totalElement.textContent = "0 €"; // Réinitialiser le total
    }
}

// Fonction pour retirer un article du panier
function retirerDuPanier(index) {
    panier.splice(index, 1); // Retirer l'article à l'index spécifié
    localStorage.setItem('panier', JSON.stringify(panier)); // Mettre à jour localStorage
    afficherPanier(); // Rafraîchir l'affichage
}

// Gérer le clic sur le bouton "Valider le panier"
document.getElementById("validerPanier").addEventListener("click", (event) => {
    if (panier.length === 0) {
        alert("Votre panier est vide !");
        event.preventDefault(); // Empêche toute redirection ou comportement par défaut
    } else {
        window.location.href = "paiement.html"; // Rediriger vers la page de paiement
    }
});

// Afficher le panier au chargement de la page
afficherPanier();