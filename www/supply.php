<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <!--
    Formulaires de Cuisinella Villennes
    HTML 5.1 
    Version 1.4 
    © Léo LESIMPLE
    -->
    <meta charset="UTF-8">
    <meta name="description" content="Faites vos demandes de SAV">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Léo LESIMPLE">

    <title>Fournitures • Cuisinella Villennes</title>

    <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/manifest.json">

    <link rel="stylesheet" href="./css/newcss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/nightmode.css">
    <link rel="stylesheet" href="css/darkmode.css">
</head>

<body>
    <?php
    include('./assets/nav.php')
    ?>
    <div class="intro-section">
        <h1 class="principal-title">Demande de Fournitures </h1>
        <p class="principal-para">Ce formulaire vous sert à faire livrer des ournitures de Bureau via le site JPG.</p>
    </div>
    <form method="post" enctype="multipart/form-data" name="supply" action="./sendzone/supply/submit.php">
        <div class="form-sav">
            <h4 class='section-title'>Demande faite par :</h4>

            <select class="form-select" name="vendeur" aria-label="vendeur" required>
                <option selected>Choisissez...</option>
                <option value="Audrey Tichit">Audrey Tichit</option>
                <option value="Khaoula Hammami">Khaoula Hammami</option>
                <option value="Johan Coudert">Johan Coudert</option>
                <option value="Tom Coudert">Tom Coudert</option>
                <option value="Kaled Salhi">Kaled Salhi</option>
                <option value="Johan Sacilotto">Johan Sacilotto</option>
                <option value="Régis Rétif">Régis Rétif</option>
                <option value="Dinis Ferreira">Dinis Ferreira</option>
                <option value="Jessy Laram">Jessy Laram</option>
            </select>

            <h4 class='section-title'>Article</h4>
            <p class="desc-form">Entrez le nom de l'article que vous voulez. Vous avez plusieurs articles à demander, séparez vos articles par une virgule.</p>
            <textarea placeholder="Article" name="article"  required></textarea>


            <h4 class='section-title'>Référence JPG</h4>
            <p class="desc-form">Pour avoir l'objet précis, vous pouvez copier/coller la référence de l'article sur JPG. Merci de respecter l'ordre des articles du dessus si vous demandez plusieurs élements.</p>
            <textarea placeholder="Article" name="refjpg" ></textarea>

            <h4 class='section-title'>Quantité</h4>
            <p class="desc-form">Vous souhaitez plusieurs exemplaires de vos articles, inscrivez-le ici !<b> Si vous n'en voulez qu'un, ne remplissez pas !</b></p>
            <input  type="number" name="qte" value="1" min="1" max="99" required>

            <h4 class='section-title'>Options</h4>
            <p class="desc-form">Votre demande comporte des articles à options, renseignez-les ici et<b> dans le même ordre</b> que votre liste d'articles. Si il n'y a pas d'options, ne renseignez rien ! <small><i><br>Si vous oubliez de mettre les options, la commande sera faite avec les options de base.</small></i></p>
            <textarea placeholder="Article" name="options" ></textarea>


            <h4 class='section-title'>Commentaires</h4>
            <textarea  type="text" placeholder="Commentaires..." name="commentaires" ></textarea>

            <div class="container my-5" style="width: 500px;">
                <button type="submit" class="link link-principal link-submit" style='border:0;' value="Send Form">Envoyer</button>
            </div>
        </div>
    </form>



    <!-- Footer -->
    <?php
    include('./assets/footer.php')
    ?>
</body>

</html>