<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Facebook - CP Parfums</title>
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
            background: linear-gradient(135deg,rgb(117, 204, 254),rgb(48, 30, 250),rgb(71, 26, 167),rgb(30, 26, 121), #4f5bd5); /* Dégradé aux couleurs vives pour CP Parfums */
            color: #1c1e21;
            padding: 20px;
        }

        /* Logo Facebook */
        .logo {
            width: 150px;
            height: 150px;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg');
            background-size: contain;
            background-repeat: no-repeat;
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

        /* Réactions */
        .reactions {
            display: flex;
            justify-content: space-between;
            font-size: 0.9em;
        }

        .comment, .like {
            color: #1877f2;
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
        <div class="post">
            <div class="post-header">Alice Dupont</div>
            <div class="post-date">1h · Paris</div>
            <div class="post-text">Aujourd'hui, j'ai acheté un nouveau parfum CP Parfums. 🌸 #CPparfums #NouveauParfum</div>
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="comment">Commenter</span>
            </div>
        </div>

        <div class="post">
            <div class="post-header">Marc Lefevre</div>
            <div class="post-date">3h · Lyon</div>
            <div class="post-text">Il pleut à Lyon aujourd'hui... mais c'est une bonne excuse pour me parfumer avec mon parfum "Tempête" de CP Parfums. 🌧️ #Tempête #MeilleurParfum</div>
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="comment">Commenter</span>
            </div>
        </div>

        <div class="post">
            <div class="post-header">Sophie Martin</div>
            <div class="post-date">5h · Marseille</div>
            <div class="post-text">Ce soir, c'est soirée parfumée avec CP Parfums! 💃🕺 #SoiréeEntreAmis #CPparfums</div>
            <div class="reactions">
                <span class="like">J'aime</span>
                <span class="comment">Commenter</span>
            </div>
        </div>
    </div>
</body>
</html>
