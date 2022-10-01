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
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/nightmode.css">
    <link rel="stylesheet" href="../../css/darkmode.css">
    <link rel="stylesheet" href="../../css/docs.css">
    <link rel="stylesheet" href="../../css/newcss.css">
</head>
<body>
  <?php
    include('../../assets/nav.php')
  ?>

  <div class="docs-page">
    <div class="intro-section">
        <h1 class="principal-title">Faire un raccourci depuis le Bureau</h1>
        <p class="principal-para">Vous pouvez accéder à Intranet de manière directe grâce aux raccourcis depuis le Bureau ! <br>Les méthodes pour Windows, macOS et iOS sont présentés sur cette page.</p>
    </div>
    <div class="docs-item">
      <h1>Windows.</h1>
      Compatible : Windows 10 et 11
      <ol>
          <li>Rendez-vous sur le Bureau Windows.</li>
          <li>Faites un clic droit dans une zone vide</li>
          <li>Dans le menu qui s'affiche, survolez "Nouveau" et sélectionnez "Raccourci"</li>
          <li>Une fenêtre va s'ouvrir et tapez dans l'entrée l'URL <code>https://onyos.fr/</code> <b>Attention ! Tapez l'URL complète auquel cas, le Raccourci ne fonctionnera pas !</b></li>
          <li>Faites "Suivant", puis entrez <code>Intranet</code> dans l'entrée </li>
          <li>Enfin cliquez sur Terminer ou la touche <kbd>Entrée</kbd></li>
      </ol>
      <img src="../img/windows.jpg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>macOS</h1>
      Compatible : macOS Mojave et ultérieur
      <ol>
          <li>Ouvrez la page d'accueil du site.</li>
          <li>Cliquez sur le bouton <span class="item">Accueil</span> dans l'entête.</li>
          <li>Tout en gardant le clic, glisser et déposer le lien sur le Bureau.</li>
          <li>Un fichier avec un "@" et l'intitulé "Accueil" va s'afficher.</li>
          <li>Vous pouvez le renommer et même changer son icône</p>
      </ol>
      <img src="../img/imac.jpg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div> 
    <div class="docs-item">
      <h1>iOS et iPadOS</h1>
      Compatible : iOS 11 et +
      <ol>
          <li>Ouvrez la page d'accueil du site.</li>
          <li>Cliquez sur le bouton <i class="bi bi-box-arrow-up"></i></li>
          <li>Scrollez jusqu'à trouver le bouton <span class="ios-button">Sur l'écran d'Accueil <i class="bi bi-plus-square"></i></span> et cliquez dessus.</li>
          <li>Ecrivez Intranet dans le premier champ et <b>NE TOUCHEZ EN AUCUN CAS LE DEUXIEME !</b></li>
          <li>Cliquez sur <span class="ios-button-add">Ajouter</span></p>
      </ol>
      <img src="../img/iphone.jpg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div> 
  </div>

      <!-- Footer -->
      <?php
        include('../../assets/footer.php')
      ?>
</body>
</html>