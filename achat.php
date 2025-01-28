<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achat - Validation de commande</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="achat.css">
</head>
<body>
    <div class="container">
        <h1>Valider mon achat</h1>
        <form id="paymentForm">
            <label for="cardNumber">Numéro de carte bancaire</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>

            <label for="expiryDate">Date d'expiration</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/AA" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" required>

            <button type="submit">Valider et payer</button>
        </form>
        <div class="success-message" id="successMessage">Commande passée avec succès !</div>
        <a href="index.php">Retour à l'accueil</a>
    </div>
    <script src="achat.js"></script>
</body>
</html>
