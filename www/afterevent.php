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

    <title>Accueil • Cuisinella Villennes</title>

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/nightmode.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" href="css/newcss.css">
    <link rel="stylesheet" href="./css/event.css">

    <style>
        .big-img>img {
            margin: 0 !important;
        }
    </style>

</head>

<body>
    <?php
    include('./assets/nav.php')
    ?>
    <div class="event-hero">
        <div class="big-img">
            <img src="./img/spoiler_event.jpg" alt="Spoiler de l'événement" data-aos-duration="1500" data-aos="fade-up">
        </div>
        <h1 class="event-title" data-aos-duration="1300" data-aos-delay="1200" data-aos="fade-up">Pro. Sous tous les angles.</h1>
        <p class="event-subtitle" data-aos-duration="1300" data-aos-delay="1500" data-aos="fade-up">(Re)Découvrez les nouveautés annoncées à l'évènement de ce matin ! Nouveaux Dashboards, Formulaires, et bien plus...</p>
        <div class="savethedate" data-aos-duration="1300" data-aos-delay="2000" data-aos="fade-up">Le 13 Septembre</div>
    </div>

    <div class="details-event" style="margin-top: 2rem !important">
        <div class="details-container">
            <div class="details-txt" data-aos-duration="1300" data-aos="fade-right">
                <h2 class="time">Des Nouveaux Dashboards !</h2>
                <p style="margin-left:4rem; margin-top:0">Les Dashboards se refont une beauté, les vacances leurs ont profités pour s'enrichir et s'adapter. Maintenant disponible sur téléphone et tablettes, le Dashboard appore de nouvelles couleurs, une présentation en menu latéral et un nouveau système de mot de passe oublié fait son apparition !</p>
            </div>
            <div class="details-illustration">
                <img src="./img/dashboard_v_1.4.png" style="height:100%" data-aos-duration="1700" data-aos="fade-left">
            </div>
        </div>

        <div class="details-container-invert">
            <div class="details-txt" data-aos-duration="1300" data-aos="fade-right">
                <h2 class="time">Deux nouveaux formulaires !</h2>
                <p style="margin-left:4rem; margin-top:0">Demande de Navette et Fournitures, deux formulaires qui vous serviront respectivement à demander des éléments en navettes et de commander des fournitures de bureau depuis JPG par l'intermédiaire de l'assistante. Les anciennes méthodes de demandes seront désormais obsolètes. </p>
            </div>
            <div class="details-illustration">
                <img src="./img/navette-view.png" style="height:100%" data-aos-duration="1700" data-aos="fade-left">
            </div>
        </div>

        <div class="details-container">
            <div class="details-txt" data-aos-duration="1300" data-aos="fade-right">
                <h2 class="time" style="line-height: 1.1">La recherche est maintenant disponible !</h2>
                <p style="margin-left:4rem; margin-top:0">Plus la peine de chercher sa ligne dans les tableaux du Dashboard, un champ de recherche est maintenant disponible. Non sensible à la casse (si vous écrivez en majuscules et que le résultat doit être en minuscule, il s'affichera quand même), vos recherches aboutiront à chaque fois. Pas besoin de tout taper, la recherche se fait à chaque caractère tapé.</p>
            </div>
            <div class="details-illustration">
                <img src="./img/recherche.png" style="height:100%" data-aos-duration="1700" data-aos="fade-left">
            </div>
        </div>

        <div class="details-container-invert">
            <div class="details-txt" data-aos-duration="1300" data-aos="fade-right">
                <h2 class="time">Le Statut en temps réel !</h2>
                <p style="margin-left:4rem; margin-top:0">Une panne, un dysfoncrtionnement sur le site ? La page Statut fonctionnant grâce à Atlassian Statuspage ! Plus tard, il sera possible de voir le Statut d'autres applications ! Elle est disponible sur <a class="nav-item" href="https://onyos1.statuspage.io" target="_blank" rel="noopener noreferrer">le site d'Atlassian.</a></p>
            </div>
            <div class="details-illustration">
                <img src="./img/status-atlassian.png" style="height:100%" data-aos-duration="1700" data-aos="fade-left">
            </div>
        </div>
    </div>

    <h1 style="text-align:center;margin-bottom:3rem">Et bien plus à découvrir...</h1>

    <!-- Footer -->
    <?php
    include('./assets/footer.php')
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>