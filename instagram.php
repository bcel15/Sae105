<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Instagram - CP Parfums</title>
    <style>
        /* Style général */
        body {
            margin: 0;
            font-family: 'Helvetica', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            background: linear-gradient(135deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5);
            color: #333;
            padding: 20px;
        }

        /* Logo Instagram */
        .logo {
            width: 150px;
            height: 150px;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png');
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
        }

        /* Conteneur de posts */
        .feed {
            width: 100%;
            max-width: 600px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Style des posts */
        .post {
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        /* Nom et date */
        .post-header {
            font-weight: bold;
            margin-bottom: 5px;
            color: #444;
        }

        .post-date {
            font-size: 0.9em;
            color: #65676b;
        }

        /* Texte du post */
        .post-text {
            margin: 10px 0;
            font-size: 1.1em;
        }

        /* Image du post */
        .post-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 10px 0;
        }

        /* Réactions */
        .reactions {
            display: flex;
            justify-content: space-between;
            font-size: 0.9em;
            color: #999;
        }

        .like, .comment {
            color: #3897f0;
            cursor: pointer;
        }

        .like:hover, .comment:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="logo"></div>
    <div class="feed">
        <!-- Post 1 -->
        <div class="post">
            <div class="post-header">CP Parfums</div>
            <div class="post-date">2h · Paris</div>
            <div class="post-text">Découvrez notre nouveau parfum signature ! 🌸✨ #CPParfums #NouveauParfum</div>
            <img src="https://via.placeholder.com/600x400.png?text=Parfum+Signature+CP" alt="Parfum Signature" class="post-image">
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="comment">Commenter</span>
            </div>
        </div>

        <!-- Post 2 -->
        <div class="post">
            <div class="post-header">CP Parfums</div>
            <div class="post-date">1d · Lyon</div>
            <div class="post-text">Nos clients adorent notre collection automne-hiver ! 🍂❄️ Profitez de 20% de réduction avec le code WINTER20. #CPParfums #OffreSpéciale</div>
            <img src="https://via.placeholder.com/600x400.png?text=Collection+Automne+Hiver" alt="Collection Automne Hiver" class="post-image">
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="comment">Commenter</span>
            </div>
        </div>

        <!-- Post 3 -->
        <div class="post">
            <div class="post-header">CP Parfums</div>
            <div class="post-date">3d · Marseille</div>
            <div class="post-text">Merci à tous pour votre soutien pendant notre événement à Marseille ! 🎉🧴 Restez connectés pour plus de surprises. #CPParfums #Merci</div>
            <img src="https://via.placeholder.com/600x400.png?text=Evenement+CP+Parfums" alt="Evénement CP Parfums" class="post-image">
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="comment">Commenter</span>
            </div>
        </div>
        <a href="index.php">Retour à l'accueil</a>
    </div>
</body>
</html>
