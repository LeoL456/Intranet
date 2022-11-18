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
  <link rel="stylesheet" href="../css/discover/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body onload="more()">
  <?php
  include('../assets/nav.php')
  ?>

  <div class="presentation-hero">
    <div class="image-row">
      <img src="./img/dashboard/overview-mac-dashboard.png" alt="Macs avec les Dashboards ouverts" data-aos="zoom-in-down" data-aos-duration="1500">
    </div>
    <div class="title">
      <h1 class="big-title" data-aos="zoom-in-down" data-aos-duration="1800">Nouveaux Dashboards</h1>
      <p class="subtitle" data-aos-delay="1900" data-aos-duration="1800" data-aos="fade-up">Liftés et contourés, les nouveaux Dashboards sont là, et ça promet !</p>
    </div>
  </div>
  <h3 class="category design" data-aos-duration="1800" data-aos="fade-right">Design</h3>
  <div class="container-flex">
    <div class="presentation-tile bg-1" data-aos="flip-right" data-aos-duration="2000">
      <h2>Des couleurs harmonisées.</h2>
      <div class="text-area">
        <p class="inblock">
          Les couleurs des Dashboard Vendeurs et Manager ont été choisies pour qu'elles s'harmonisent ensembles et le fond d'écran a été choisi en rapport avec les couleurs.
        </p>
      </div>
    </div>
    <div class="presentation-tile bg-2" data-aos="flip-left" data-aos-duration="2000">
      <div id="overlay"></div>
      <h2>American Dream</h2>
      <div class="text-area">
        <p class="inblock">
          Le thème des nouveaux Dashboards est la Californie avec comme fond d'écran, le Golden Gate Bridge pour le Dashboard Vendeurs et l'Apple Park Visitors Center pour le Dashboard Manager.
        </p>
      </div>
    </div>
    <div class="presentation-tile-sm bg-3" data-aos="flip-up" data-aos-duration="2000" style="margin-top:2rem">
      <div class="menu" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="0">
        <h3 class="dashboard-title">Dashboard Manager</h3>
        <hr>
        <p class="version">Version 1.4</p>
        <ul class="menu-list">
          <li><a href="#" class="sidebar-item" aria-disabled="true">Accueil</a></li>
          <li><a href="#" class="sidebar-item" aria-disabled="true">SAV</a></li>
          <li><a href="#" class="sidebar-item" aria-disabled="true">Navettes</a></li>
          <li><a href="#" class="sidebar-item" aria-disabled="true">Fournitures</a></li>
          <li><a href="#" class="sidebar-item" aria-disabled="true">Plans</a></li>
          <li><a href="#" class="sidebar-item" aria-disabled="true">Changelog</a></li>
        </ul>
      </div>
      <div class="inside-sm">
        <h2>Un tout nouveau menu</h2>
        <div class="text-area">
          <p class="inblock-md">
            Pour naviguer dans les Dashboard, un nouveau menu latéral qui s'ouvre et se ferme fait son apparition, les pages s'affichent donc sur toute la largeur.
          </p>
        </div>
      </div>
    </div>
    <div class="presentation-tile-sm bg-3bis" data-aos="fade-down" data-aos-duration="2200" style="margin-top:2rem">
      <div class="inside-sm">
        <h2>Mode Sombre</h2>
        <div class="text-area">
          <p class="inblock-md">
            Le Mode Sombre débarque sur les Dashboards, automatique ou manuel à vous de choisir votre préféré. Le switch Clair/Sombre est uniformisé avec Intranet pour plus d'ergonomie.
          </p>
        </div>
      </div>
    </div>
  </div>
  <h3 class="category forms" data-aos-duration="1800" data-aos="fade-down">Formulaires</h3>
  <div class="container-grid-present">
    <div class="presentation-tile-demi-un presentation-tile-demi bg-4" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1400">
      <h2>Navettes et Fournitures</h2>
      <div class="text-area">
        <p class="inblock-sm">
          Consultez les demandes de Navettes et de Fournitures qui ont déjà été faites !
        </p>
      </div>
    </div>
    <div class="presentation-tile-demi-deux presentation-tile-demi bg-6" id="more" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1800">
      <h2>Uniformisation des noms</h2>
      <div class="text-area">
        <p class="inblock-sm">
          Les noms de clients ou texte libre sont maintenant uniformisés dans le format Aaaa.
        </p>
      </div>
    </div>
    <div class="presentation-tile-wide bg-5" data-aos="fade-left" data-aos-duration="1500">
      <h2>Filtre par recherche</h2>
      <div class="text-area">
        <p class="inblock">
          Recherchez la ligne que vous souhaitez avec le tout nouveau champ de recherche. Le filtrage se fait par nom de client ou nom du vendeur (fournitures)
        </p>

      </div>
    </div>
  </div>

  <h3 class="category connect" data-aos-duration="1800" data-aos="fade-down">Connexion</h3>
  <div class="container-flex">
    <div class="presentation-tile-full bg-mdp" data-aos-duration="1800" data-aos="fade-left">
      <h3 style="text-align:start">Mot de Passe oublié</h3>
      <p class="inblock-full">Vous avez perdu votre mot de passe pour accéder au Dashboard ? Pas de problème, le nouveau système de mot de passe oublié, vous renvoie directement vos identifiants Dashboard. Il est accessible depuis les Dashboard Vendeurs et Manager.</p>
    </div>
    <div class="presentation-tile-sm bg-ivd" data-aos="fade-right" data-aos-duration="2200" style="margin-top:2rem">
      <div class="inside-sm">
        <h2>Identifiants Personnels</h2>
        <div class="text-area">
          <p class="inblock-md">
            Pour préparer les futures nouveautés d'Intranet, le Dashboard Vendeurs abandonne l'identifiant unique pour des identifiants pour chaque vendeur.
          </p>
          <small>Les ID seront transmis par mail.</small>
        </div>
      </div>
    </div>
  </div>

  <h3 class="category changelog" data-aos-duration="1800" data-aos="fade-down">Changelog</h3>
  <div class="presentation-tile-sm bg-changelog" data-aos="fade-down" data-aos-duration="2500" style="margin-top:2rem">
    <div class="inside-sm">
      <h2>Nouveau Changelog</h2>
      <div class="text-area">
        <p class="inblock-md">
          Les Notes de versions ont été revues de fond en comble, elles se présentent en cartes qui l'ont défile sur l'axe horizontal et le détail s'affiche au clic.
        </p>
      </div>
    </div>
  </div>

  <script>
    function more() {
      document.getElementById('more').style.marginTop = "2rem"
    }
  </script>

  <!-- Footer -->
  <?php
  include('../assets/footer.php')
  ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>