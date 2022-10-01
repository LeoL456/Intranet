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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/nightmode.css">
  <link rel="stylesheet" href="css/darkmode.css">
  <link rel="stylesheet" href="css/newcss.css">
</head>

<body>
  <?php
  include('./assets/nav.php')
  ?>
  <!-- Full -->
  <div class="div-home-hero">
    <h1 class="principal-title">
      Demandes de SAV
    </h1>
    <div class="expl">
      <p class="principal-para">Faites votre demande de planification de SAV simplement avec le formulaire de demande de SAV, plus simple, ergonomique et beaucoup plus efficace !</p>
      <div class="principal-link-container">
        <a class="link link-principal-hero" href="./form.php">Voir > </a>
      </div>
    </div>
    <img src="./img/overview-mac.png" class="img-hero" alt="Image montrant le formulaire." width="900" height="auto" loading="lazy">
  </div>
  <!-- Mid -->
  <div class="grid div-home-hero-invert">
    <div class="doc-col">
      <div class="mid-col">
        <h2 class="secondary-title">
          Documentation
        </h2>
        <p class="secondary-para" style="margin-top: 1rem;">
          Vous n'y comprenez rien ? Lisez la documentation, tout y est expliqué dans les moindres détails.
        </p>
        <div class="principal-link-container" style="margin-top: 2.5rem;">
          <a class="link link-secondary-border-hero" href="./form.php">Ouvrir > </a>
        </div>
      </div>
      <div class="mid-img">
        <img class="fluid-img" src="./img/new-docs.png" alt="Aperçu de la page Documentation">
      </div>
    </div>
    <div class="news-col">
      <div class="mid-col">
        <h2 class="secondary-title">
          Cuisinell'Actu
        </h2>
        <p class="secondary-para">
          Toutes les actus de Cuisinella Villennes regroupées en un seul point. Vous êtes avertis par mail de l'arrivée d'une nouvelle Cuisinell'Actu, vous ne raterez plus aucune info !
        </p>
        <div class="principal-link-container">
          <a class="link link-secondary-border-hero" href="./form.php">Voir > </a>
        </div>
      </div>
      <div class="mid-img">
        <img class="fluid-img" src="./img/news-view.png" alt="Aperçu de la page Cuisinell'Actu (màj le 7/08/22)">
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php
  include('./assets/footer.php')
  ?>
</body>

</html>