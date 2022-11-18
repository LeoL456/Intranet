<html lang="fr" nighteye="disabled">

<head>
  <?php session_start();
  if (!isset($_SESSION['UserData']['Username'])) {
    header("location:./auth/login.php");
    exit;
  }
  ?>
  <!--
    Formulaires de Cuisinella Villennes
    HTML 5.1 
    Version 1.4
    © Léo LESIMPLE
    -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Privé">
  <meta name="author" content="Léo LESIMPLE">
  <title>Accueil • Dashboard Orgeval</title>
  <link rel="stylesheet" href="./css/app.css">
  <link rel="stylesheet" href="./css/keyframes.css">
  <!-- Favicons -->
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


  <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' />
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
  <script src="./js/mapbox-directions.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-language/v1.0.0/mapbox-gl-language.js'></script>

</head>

<body>
  <?php
  include('./assets/nav.php')
  ?>
  <div id="overlay"></div>
  <div id="page">
    <!-- Icons -->
    <div class="dash-home">
      <div class="icon-line">
        <div class="sav-icon">
          <a href="./sav.php" class="link-dark text-decoration-none">
            <img src="./img/icons/sav.png" alt="" class="icon sav-icon-shadow">
            <p class="app-name">SAV</p>
          </a>
        </div>
        <div class="maps-icon">
          <a href="./maps.php" class="link-dark text-decoration-none">
            <img src="./img/icons/maps.png" alt="" class="icon maps-icon-shadow">
            <p class="app-name">Maps</p>
          </a>
        </div>
        <div class="navette-icon">
          <a href="./navette.php" class="link-dark text-decoration-none">
            <img src="./img/icons/navette.png" alt="" class="icon navette-icon-shadow">
            <p class="app-name">Navette</p>
          </a>
        </div>
        <div class="log-icon">
          <a href="./changelog.php" class="link-dark text-decoration-none">
            <img src="./img/icons/log.png" alt="" class="icon log-icon-shadow">
            <p class="app-name">Changelog</p>
          </a>
        </div>
      </div>
    </div>

    <!-- Widget -->
    <div class="widget-zone">
      <div class="maps-zone" style="border-radius:20px !important" onclick="location.href='maps.php'">
        <div class="widget maps-w" style="overflow: hidden;">
          <div id='map' style='width: 100%; height: 100%;'></div>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoibGVvbDQ1NiIsImEiOiJja3ByNjJ4ZG8wNDI5MnFwODYwemd3eHgxIn0.__6W_S-kcyNy4uB_mpL7UQ';
            var map = new mapboxgl.Map({
              container: 'map',
              style: 'mapbox://styles/mapbox/streets-v11',
              center: [1.98393, 48.9293],
              zoom: 12,
              interactive: false,

            });
          </script>
        </div>
      </div>
      <div class="weather-zone">
        <div class="widget weather-w">
          <main class="weather-struc">
            <div class="wrapper">
              <img id="icon">
              <div class="weatherWidget">
                <div id="loading">Loading...</div>
                <div class="place">
                  <span class="city"></span><span class="country"></span>
                </div>
                <div class="temp"></div>
                <div class="desc"></div>
              </div>
            </div>
          </main>
        </div>
      </div>
      <div class="day-zone">
        <div class="widget day-w text-center p-5">
          <?php echo "<h1 class=\"day\"'>" . date("d") . "</h1>" ?>
          <?php
          setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR', 'fr', 'fr', 'fra', 'fr_FR@euro');
          echo "<p class='month-year'>" . strftime("%B") . '<br>';
          ?>
          <?php echo date("Y") . "</p>" ?>
        </div>
      </div>
    </div>
  </div>
  <style>
    .mapboxgl-ctrl-attrib-button,
    .mapboxgl-ctrl,
    .mapboxgl-ctrl-attrib,
    .mapboxgl-compact {
      display: none !important;
    }

    .mapboxgl-canvas {
      border-radius: 20px !important;
    }
  </style>
  <script src="./js/weather.js"></script>
</body>


</html>