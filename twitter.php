<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Twitter - CP Parfums</title>
    <style>
        /* Style général */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            background: linear-gradient(135deg,rgb(88, 88, 88),rgb(62, 62, 62),rgb(31, 31, 31),rgb(44, 44, 44),rgb(0, 0, 0));
            color: white;
            text-align: left;
            padding: 20px;
        }

        /* Logo Twitter */
        .logo {
            width: 150px;
            height: 150px;
            background-image: url('twitter.webp');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 20px;
        }

        /* Conteneur des tweets */
        .feed {
            width: 100%;
            max-width: 600px;
            background-color: #333333; /* Fond sombre pour le feed */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        /* Style des tweets */
        .tweet {
            border-bottom: 1px solid #444444;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        /* Nom et pseudo */
        .tweet-header {
            font-weight: bold;
            color: #1da1f2; /* Bleu Twitter */
            margin-bottom: 5px;
        }

        .tweet-handle {
            font-size: 0.9em;
            color: #8899a6;
        }

        /* Texte du tweet */
        .tweet-text {
            margin: 10px 0;
            font-size: 1.1em;
            color: #e1e1e1; /* Couleur claire pour le texte */
        }

        /* Réactions */
        .reactions {
            display: flex;
            justify-content: space-between;
            font-size: 0.9em;
        }

        .like, .retweet, .reply {
            color: #1da1f2; /* Bleu Twitter */
            cursor: pointer;
        }

        .like:hover, .retweet:hover, .reply:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="logo"></div>
    <div class="feed">
        <div class="tweet">
            <div class="tweet-header">Alice Dupont <span class="tweet-handle">@alice_dupont</span></div>
            <div class="tweet-text">Aujourd'hui, j'ai testé un parfum de CP Parfums. Une fragrance unique qui ne laisse personne indifférent. #CPParfums</div>
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="retweet">Retweeter</span>
                <span class="reply">Répondre</span>
            </div>
        </div>

        <div class="tweet">
            <div class="tweet-header">Marc Lefevre <span class="tweet-handle">@marc_lefevre</span></div>
            <div class="tweet-text">Le parfum "Évasion" de CP Parfums a transformé ma journée ! Je me sens prêt à tout affronter. #ParfumDeCaractère</div>
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="retweet">Retweeter</span>
                <span class="reply">Répondre</span>
            </div>
        </div>

        <div class="tweet">
            <div class="tweet-header">Sophie Martin <span class="tweet-handle">@sophie_martin</span></div>
            <div class="tweet-text">Le parfum "Rêverie" de CP Parfums est exactement ce dont j'avais besoin ce matin. Un souffle de fraîcheur pour bien démarrer la journée. #Rêverie #ParfumDeQualité</div>
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="retweet">Retweeter</span>
                <span class="reply">Répondre</span>
            </div>
        </div>
    </div>
</body>
</html>
