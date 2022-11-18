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

    <title>Demandes de SAV • Cuisinella Villennes</title>

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
        <h1 class="principal-title">Demande de Navette </h1>
        <p class="principal-para">Ce formulaire vous sert à demander les éléments du point de livraison vers le magasin ! </p>
    </div>
    <form method="post" enctype="multipart/form-data" name="myemailform" action="./sendzone/navette/submit.php">
        <div class="form-sav">
            <h4 class='section-title'>Numéro(s) d'AR</h4>
            <p class="desc-form">Précisez le numéro ou les numéros d'AR en relation avec votre demande.</p>
            <input  type="text" placeholder="   N° d'AR" name="ARnumber" >

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

            <h4 class='section-title'>Gamme de Cuisine</h4>
			<input type="text" name="gamme" placeholder="Gamme" aria-label="gamme" required>

            <h4 class='section-title'>Nom du client</h4>
            <p class="desc-form">Quel est le client concerné ?</p>
            <input  type="text" placeholder="   Nom" name="kunde"  required>

            <h4 class='section-title'>Référence</h4>
            <p class="desc-form">Entrez la référence du projet.</p>
            <input  type="text" placeholder="   Ref" name="ref"  required>

            <h4 class='section-title'>Délai confirmé</h4>
            <p class="desc-form">Saisissez le numéro de semaine confirmé par l'usine <small>(vous ne pouvez pas saisir de nombre plus grand que 53 et plus petit que 1 ainsi que il n'est pas attendu l'année)</small>.</p>
            <input  type="number" name="week" aria-label="" min="1" max="53" required>

            <h4 class='section-title'>Commentaires</h4>
            <textarea  type="text" placeholder="   Commentaires..." name="kommentare" ></textarea>

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