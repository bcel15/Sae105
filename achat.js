// Récupération des éléments du DOM
const form = document.getElementById('paymentForm');
const successMessage = document.getElementById('successMessage');

// Écoute de l'événement "submit" sur le formulaire
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche le rechargement de la page

    // Récupération des valeurs des champs du formulaire
    const cardNumber = document.getElementById('cardNumber').value.trim();
    const expiryDate = document.getElementById('expiryDate').value.trim();
    const cvv = document.getElementById('cvv').value.trim();

    // Validation des entrées
    if (!/^\d{16}$/.test(cardNumber)) {
        alert('Le numéro de carte doit contenir exactement 16 chiffres.');
        return;
    }
    if (!/^\d{3}$/.test(cvv)) {
        alert('Le CVV doit contenir exactement 3 chiffres.');
        return;
    }
    if (!/^\d{2}\/\d{2}$/.test(expiryDate)) {
        alert('La date d’expiration doit être au format MM/AA.');
        return;
    }

    // Si tous les champs sont valides
    successMessage.style.display = 'block'; // Affiche le message de succès
    form.style.display = 'none'; // Masque le formulaire
});