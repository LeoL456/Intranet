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
  <link rel="stylesheet" href="css/newcss.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/nightmode.css">
  <link rel="stylesheet" href="css/darkmode.css">
</head>

<style>
  @media screen and (max-width:900px) {
    .principal-para-docs {
      font-size: 20px !important;
    }

    .principal-title-docs {
      font-size: 30px !important;
      margin-bottom: 2.5rem !important;
    }
  }
</style>

<body>
  <?php
  include('./assets/nav.php')
  ?>
  <div class="intro-section docs-title">
    <h1 class="principal-title-docs" style="margin-bottom:0;">Documentation</h1>
    <p class="principal-para-docs" style="margin-bottom:0;">Apprenez comment marche le formulaire en quelques étapes
      avec la Documentation !</p>
  </div>
  <h4 class="docs-headlines">À la une !</h4>
  <div class="docs-grid">
    <div class="highlight-section">
      <h1 class="jumbotron-first-title"><i class="bi bi-docs bi-box-seam-fill"></i> Demande de Navettes</h1>
      <p class="jumbotron-first-desc">
        <span class="new">Nouveau !</span> Demandez vos Navettes directement depuis Intranet ! <br> Faites le modèle des Demandes de SAV, les Demandes sont simples et rapides à formuler !
      </p>
      <a href="./docs/navettes.php" class="link link-principal">Voir</a>
    </div>
    <div class="second-section">
      <h1 class="jumbotron-second-title"><i class="bi bi-docs bi-vector-pen"></i> Demande de Fournitures</h1>
      <p class="jumbotron-second-desc"><span class="new">Nouveau !</span> Les Demandes de Fournitures débarque sur Intranet (remplacement du Google Forms), commandez stylos, cahier et autres fournitures de Bureau depuis Intranet ! </p>
      <a href="./docs/supply.php" class="link link-principal">Voir</a>
    </div>
    <div class="third-section">
      <h1 class="jumbotron-second-title"><i class="bi bi-docs bi-clipboard-data"></i> Les Nouveaux Dashboards</h1>
      <p class="jumbotron-second-desc">Un Dashboard revu de fond en comble ! Un Design Moderne, plus chaleureux ainsi que le Mode Sombre et la compatibilité mobile s'invitent sur vos Dashboard !</p>
      <a href="./docs/dashboard.php" class="link link-principal">Voir</a>
    </div>
  </div>
  <h4 class="docs-headlines">En plus...</h4>
  <ul class="flex-container">
    <li class="flex-item">
      <h2 class="intranetv13">Intranet 1.4</h2>
      <p>Nouveaux Formulaires, Statut du Site en temps réel. Des Dashboards revus de fond en comble. <br>Tout ça avec encore plus de sécurité !</p>
      <a class="link-docs-primary" href="./discover.php">Voir ></a>
    </li>
    <li class="flex-item">
      <h2>Formulaire d'Intervention SAV</h2>
      <p>Faites planifier vos SAV en quelques clics avec le formulaire de demandes d'intervention SAV.<br> Aussi simple que ça !</p>
      <a class="link-docs-primary" href="./docs/learn-input.php">Voir ></a>
    </li>
    <li class="flex-item">
      <h2>Raccourcis sur le Bureau</h2>
      <p>Ajoutez Intranet sur votre bureau pour un accès direct ! C'est simple et rapide.
        <br>Votre productivité n'en sera qu'accrue !
      </p>
      <a class="link-docs-primary" href="./docs/pc-side/bookmark.php">Voir ></a>
    </li>
    <li class="flex-item">
      <h2>Cuisinell'Actu</h2>
      <p>Découvrez les Cuisinell'Actu, les actualités faites pour Cuisinella Villennes, vous êtes prévenus de l'arrivée d'une nouvelle Actu par mail..</p>
      <a class="link-docs-primary" href="./docs/cuisinellactu.php">Voir ></a>
    </li>
    <li class="flex-item">
      <h2>Pendant ce temps en coullisses...</h2>
      <p>Découvrez comment le site est pensé, fabriqué, et comment marche ses éléments ! Ainsi que comment le site vous assure une sécurité constante !</p>
      <a class="link-docs-primary" href="./docs/discover-code.php">Voir ></a>
    </li>
    <li class="flex-item">
      <h2>Trouver le Numéro d'AR</h2>
      <p>Pour remplir certains formulaires, vous avez besoin du numéro d'AR de votre projet. <br> Vous y trouverez tout l'explication ici !</p>
      <a class="link-docs-primary" href="./docs/ar-number.php">Voir ></a>
    </li>
    <li class="flex-item">
      <h2>Mentions Légales</h2>
      <p>Toutes les informations sur le site, l'hébergeur et bien-sûr l'auteur, les cookies et le traitement des données personnelles.</p>
      <a class="link-docs-primary" href="https://leolesimple.notion.site/Mentions-L-gales-6f8a33a3388d4ef9a80a7f3acba3a507">Voir ></a>
    </li>
    <li class="flex-item">
      <h2>RGPD</h2>
      <p>Consultez le Réglement Général sur la Protection des Données et comment le site traite et stocke vos données !</p>
      <a class="link-docs-primary" target="_blank" href="https://leolesimple.notion.site/RGPD-c006027ffae9436b858641db02c9f988">Voir ></a>
    </li>
  </ul>

  <!-- Footer -->
  <?php
  include('./assets/footer.php')
  ?>
</body>

</html>