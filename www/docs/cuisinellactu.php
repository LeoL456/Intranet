<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <!--
    Intranet — Cuisinella Villennes
    HTML 5.1 
    Version 1.4
    © Léo LESIMPLE
    -->
    <meta charset="UTF-8">
    <meta name="description" content="Faites vos demandes de SAV">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Léo LESIMPLE"> 
     
    <title>Documentation • Cuisinella Villennes</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/nightmode.css">
    <link rel="stylesheet" href="../css/darkmode.css">
    <link rel="stylesheet" href="../css/docs.css">
    <link rel="stylesheet" href="../css/newcss.css">
</head>
<body>
  <?php
    include('../assets/nav.php')
  ?>

  <div class="docs-page">
    <div class="intro-section">
        <h1 class="principal-title">Présentation des Cuisinell'Actu</h1>
        <p class="principal-para">Restez au courant des actualités du magasin avec les Cuisinell'Actu, prévenu par e-mail <br> vous ne raterez aucune <i>Cuisinell'Actu</i></p>
    </div>
    <div class="docs-item">
      <h1>Utiliser les Cuisinell'Actu depuis un Ordinateur ou un Smartphone (macOS, iOS, Windows, Android)</h1>
      <p>Pour vous rendre sur les Cuisinell'Actu, <br>
       <span class="details-docs-page">Depuis la page d'accueil :</span> 
       <ul>
           <li>Cliquez sur le lien <span class="nav-item">Cuisinell'Actu</span> dans l'entête de page ou...</li>
           <li>Cliquez sur le bouton <span class="link link-principal-hero">Voir ></span> sur la page d'accueil.</li>
       </ul>
       <span class="details-docs-page">Depuis une autre page :</span> 
        <ul>
            <li>Cliquez sur le lien <span class="nav-item">Cuisinell'Actu</span> dans l'entête de page ou...</li>
            <li>Cliquez sur le lien <span class="footer-link">Cuisinell'Actu</span> dans le bas de page.</li>
        </ul>
        <span class="details-docs-page">Depuis un Dashboard  :</span> 
        <ul>
            <li>Rentrez <code>https://onyos.fr/news.php</code> ou simplement <code>onyos.fr/news.php</code> dans la barre de recherche</li>
        </ul>
        Une fois arrivé sur les Cuisinell'Actu, cliquez sur le bouton "Accéder aux dernières Cuisinell'Actu". 
    </p>
      <img src="./img/cuisinellactu-new-design.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>

    <div class="docs-item">
      <h1>Comment lire une Cuisinell'Actu</h1>
      <p>Une Cuisinell'Actu est un bloc constitué d'une illustration (image, dessin, infographie). Sous l'image un bloc "soudé" à l'image contient en haut à droite, la date de publication de l'article. Un Titre et une description se trouve en bas à gauche. </p>
      <img src="./img/news-squellette.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
  </div>

      <!-- Footer -->
      <?php
        include('../assets/footer.php')
      ?>
</body>
</html>