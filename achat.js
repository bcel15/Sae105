const form = document.getElementById('paymentForm');
const successMessage = document.getElementById('successMessage');

form.addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    // Simulation de validation (vous pouvez intégrer une vraie API de paiement ici)
    const cardNumber = document.getElementById('cardNumber').value;
    const expiryDate = document.getElementById('expiryDate').value;
    const cvv = document.getElementById('cvv').value;

    if (cardNumber && expiryDate && cvv) {
        // Affiche un message de succès
        successMessage.style.display = 'block';
        form.style.display = 'none';
    } else {
        alert('Veuillez remplir tous les champs.');
    }
});
