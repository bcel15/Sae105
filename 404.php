<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page non trouvée</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: left;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            align-items: center;
            max-width: 900px;
            margin: 0 auto;
        }
        .text {
            flex: 1;
            padding-right: 20px;
        }
        .text h1 {
            font-size: 2em;
            color: #333;
        }
        .text p {
            font-size: 1.2em;
            color: #555;
        }
        .text a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .text a:hover {
            background-color: #0056b3;
        }
        .image {
            flex: 1;
            text-align: right;
        }
        .image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text">
            <h1>Tu fais quoi ici frère ?</h1>
            <p>Vas-y, retourne sur la page d'accueil. Elle existe pas la page que tu cherches, zebi.</p>
            <a href="/">Retour à l'accueil</a>
        </div>
        <div class="image">
            <img src="photo 404.png" alt="Image 404">
        </div>
    </div>
</body>
</html>
