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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/newcss.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/nightmode.css">
  <link rel="stylesheet" href="css/darkmode.css">
</head>

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
      <h1 class="jumbotron-first-title"><i class="bi bi-docs bi-bookmark-fill"></i> Raccourcis sur le Bureau</h1>
      <p class="jumbotron-first-desc">Ajoutez Intranet sur votre bureau pour un accès direct ! C'est simple et rapide.
        <br> Votre productivité n'en sera qu'accrue !</p>
      <a href="./docs/pc-side/bookmark.php" class="link link-principal-hero">Voir</a>
    </div>
    <div class="second-section">
      <h1 class="jumbotron-second-title"><i class="bi bi-docs bi-ui-radios"></i> Remplir le Formulaire</h1>
      <p class="jumbotron-second-desc">Apprenez ou ré-apprenez à remplir le formulaire. La page a été mise à jour avec
        les nouveaux champs ! </p>
      <a href="./docs/learn-input.php" class="link link-principal-hero">Voir</a>
    </div>
    <div class="third-section">
      <h1 class="jumbotron-second-title"><i class="bi bi-docs bi-newspaper"></i> Les Cuisinell'Actu</h1>
      <p class="jumbotron-second-desc">Qu'est-ce-que c'est ? À quoi ça sert ? Comment ça marche ? Toutes les questions
        sont traitées dans cette page de documentation.</p>
      <a href="./docs/cuisinellactu.php" class="link link-principal-hero">Voir</a>
    </div>
  </div>
  <h4 class="docs-headlines">En plus...</h4>
  <div class="docs-more" style="margin-bottom:1.5rem !important;">
    <div class="left-side border-side">
      <div class="item-docs">
        <h3 class="more-docs-title">Numéros d'AR</h3>
        <p class="more-docs-para">Trouver les numéros d'AR, comment les entrer dans le formulaire. Télécharger le
          tableau des AR.</p>
        <div class="link-docs-div">
          <a class="link-docs-primary" href="./docs/ar-number.php">Voir ></a>
        </div>
      </div>
      <div class="item-docs">
        <h3 class="more-docs-title">L'envers du décor !</h3>
        <p class="more-docs-para">Découvrir comment ça marche et quelles technologies sont utilisées par Intranet et leurs
          fonctions respectives.</p>
        <div class="link-docs-div">
          <a class="link-docs-primary" href="./docs/discover-code.php">Voir ></a>
        </div>
        <div class="item-docs">
          <h3 class="more-docs-title">Remplacer l'adresse mail d'Intranet</h3>
          <p class="more-docs-para">Vous en avez marre de voir une adresse mail trop longues dans vos notifications
            Intranet, cette documentation est pour vous !</p>
          <div class="link-docs-div">
            <a class="link-docs-primary link-docs-disabled" href="">Bientôt ></a>
          </div>
        </div>
        <div class="item-docs" style="display:none">
          <h3 class="more-docs-title">Prévenir les autres</h3>
          <p class="more-docs-para">Vous avez fais une demande de SAV et vous voulez prévenir certains autres vendeurs
            que'elle a été faites, vous êtes au très bon endroit.</p>
          <div class="link-docs-div">
            <a class="link-docs-primary" href="">Voir ></a>
          </div>
        </div>
        <div class="item-docs">
          <h3 class="more-docs-title">Design System</h3>
          <p class="more-docs-para">Un fichier avec tous les élements graphique du site, c'est ça le design system.
            <br>Logiciels requis (détails dans l'article)</p>
          <div class="link-docs-div">
            <a class="link-docs-primary link-docs-disabled" href="">Bientôt ></a>
          </div>
        </div>
      </div>
      </div>
      <div class="right-side">
        <div class="item-docs">
          <h3 class="more-docs-title">Intranet 1.3</h3>
          <p class="more-docs-para">Un train entier de nouveautés pour vous ! Du design, de la surpuissance, plein de
            nouveautés pour accroitre votre productivité !</p>
          <div class="link-docs-div">
            <a class="link-docs-primary" href="./discover.php">Voir ></a>
          </div>
          <div class="item-docs">
            <h3 class="more-docs-title">Cuisinell'Actu</h3>
            <p class="more-docs-para">Découvrez les Cuisinell'Actu, les actualités faites pour Cuisinella Villennes,
              vous êtes prévenus de l'arrivée d'une nouvelle Actu par mail..</p>
            <div class="link-docs-div">
              <a class="link-docs-primary" href="./docs/cuisinellactu.php">Voir ></a>
            </div>
          </div>
          <div class="item-docs">
            <h3 class="more-docs-title">Nouveautés à venir</h3>
            <p class="more-docs-para">Découvrez les annonces des prochaines fonctionnalités sur cette page ! <br>Toutes
              les nouvelles fonctionnalités mineures sont régies ici !</p>
            <div class="link-docs-div">
              <a class="link-docs-primary" href="./docs/nouveau.php">Voir ></a>
            </div>
          </div>
          <div class="item-docs">
            <h3 class="more-docs-title">Mentions Légales</h3>
            <p class="more-docs-para">Toutes les informations sur le site, l'hébergeur et bien-sûr l'auteur ! Les
              informations concernant les cookies, le traitement des données personnelles. </p>
            <div class="link-docs-div">
              <a class="link-docs-primary" target="_blank"
                href="https://leolesimple.notion.site/Mentions-L-gales-6f8a33a3388d4ef9a80a7f3acba3a507">Voir ></a>
            </div>
          </div>
          <div class="item-docs">
            <h3 class="more-docs-title">RGPD</h3>
            <p class="more-docs-para">Le Règlement général sur la protection des données est une loi européenne qui
              oblige le site a donner des informations sur les données personelles prélévées. </p>
            <div class="link-docs-div">
              <a class="link-docs-primary" target="_blank"
                href="https://leolesimple.notion.site/RGPD-c006027ffae9436b858641db02c9f988">Voir ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php
        include('./assets/footer.php')
      ?>
</body>

</html>