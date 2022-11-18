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
  <meta name="description" content="Bienvenue sur le portail Intranet de Cuisinella Villennes/Seine, faites vos demandes de SAV, Navette et de fournitures au même endroit !">

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

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <h1 class="principal-title" data-aos="fade-up" data-aos-duration="1800">
      Demande de Navettes
    </h1>
    <div class="expl">
      <p class="primary-para" data-aos="fade-up" data-aos-duration="1900">Accueillez les Demandes de Navettes ! <br> Sur le même exemple que les Demande d'Intervention SAV, les Demandes de Navettes sont simples d'utilisation, on remplit le Formulaire, on envoie et c'est fait ! </p>
      <div class="principal-link-container">
        <a class="link link-principal" href="./form.php" data-aos="fade-up" data-aos-duration="2000">Voir > </a>
      </div>
    </div>
    <img src="./img/supply-form.png" class="img-hero" alt="Image montrant le formulaire." width="900" height="auto" loading="lazy" data-aos="fade-up" data-aos-duration="2100">
  </div>
  <!-- En plus... -->
  <div class="image-right-hero div-home-hero-invert">
    <div class="image-right-text-hero mt-2" data-aos="fade-left" data-aos-duration="2200">
      <h1 class="secondary-title intrnaet">Intranet 1.4</h1>
      <p class="secondary-para">(Re)Découvrez les nouveautés d'Intranet dans sa version 1.4 <br>Nouveaux Formulaires, Nouveaux Dashboard, Sécurité renforcée et une page de Statut pour consulter chaque partie du Site en cas de panne et/ou un dysfonctionnement.</p>
      <div class="btn-container">
        <a href="./discover.php" class="link link-secondary">Voir ></a>
      </div>
    </div>
    <div class="image-right-img-hero">
      <img src="./img/cover-images/cover-1_4.png" class="mid-img" alt="" data-aos="fade-right" data-aos-duration="2200">
    </div>
  </div>

  <div class="image-side-hero">
    <div class="image-side-text-hero mt-2" data-aos="fade-up" data-aos-duration="2200">
      <h1 class="secondary-title">Demande de Fournitures</h1>
      <p class="secondary-para">Ce formulaire vous est mis à disposition pour demander les fournitures de bureau dont vous avez besoin chez JPG. Nous nous chargeons ensuite de les commander. Si la référence que vous souhaitez n'est pas disponible, vous serez prévenus. </p>
      <div class="btn-container">
        <a href="./supply.php" class="link link-secondary">Voir ></a>
      </div>
    </div>
    <div class="image-side-img-hero">
      <img src="./img/supply-view.png" class="mid-img" alt="" data-aos="fade-down" data-aos-duration="2200">
    </div>
  </div>

  <div class="image-right-hero">
    <div class="image-right-text-hero mt-2" data-aos="fade-right" data-aos-duration="2200">
      <h1 class="secondary-title">Demande de SAV</h1>
      <p class="secondary-para">Formulez vos demandes d'intervention SAV, ce formulaire ne sert que pour la planification, une fois que tous les éléments Navette sont arrivés, si cela n'est pas fait diriger vous d'abord vers le formulaire "Demandes de Navettes".</p>
      <div class="btn-container">
        <a href="./form.php" class="link link-secondary">Voir ></a>
      </div>
    </div>
    <div class="image-right-img-hero">
      <img src="./img/sav-form.png" class="mid-img" alt="" data-aos="fade-left" data-aos-duration="2200">
    </div>
  </div>

  <div class="image-side-hero">
    <div class="image-side-text-hero mt-2 " data-aos="fade-down" data-aos-duration="2200">
      <h1 class="secondary-title">Documentation</h1>
      <p class="secondary-para">Formulez vos demandes d'intervention SAV, ce formulaire ne sert que pour la planification, une fois que tous les éléments Navette sont arrivés, si cela n'est pas fait diriger vous d'abord vers le formulaire "Demandes de Navettes".</p>
      <div class="btn-container">
        <a href="./docs.php" class="link link-secondary">Voir ></a>
      </div>
    </div>
    <div class="image-side-img-hero">
      <img src="./img/docs-home.png" class="mid-img" alt="" data-aos="fade-up" data-aos-duration="2200">
    </div>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- Footer -->
  <?php
  include('./assets/footer.php')
  ?>
</body>

</html>