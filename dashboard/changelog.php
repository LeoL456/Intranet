<html lang="fr">

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
  <title>Changelog • Cuisinella Villennes</title>
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
</head>

<body id="body">
  <?php
  include('./assets/nav.php')
  ?>
  <div id="overlay"></div>
  <div id="page">
    <div class="page-header">
      <h1 class="page-title">Changelog</h1>
      <p class="page-sub">Consultez les Notes de Version de chaque version d'Intranet.</p>
    </div>

    <h1 class="section-logs-title">Intranet </h1>
    <div class="logs-card">
      <div class="card" onclick="i1_4()">
        <img src="./img/changelog/1_4.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.4</h1>
        <h3 class="date">13/09/2022</h3>
      </div>
      <div class="card" onclick="i1_3_4()">
        <img src="./img/changelog/v1.3.4.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.3.4</h1>
        <h3 class="date">11/08/2022</h3>
      </div>
      <div class="card" onclick="i1_3_3()">
        <img src="./img/changelog/v1.3.3.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.3.3</h1>
        <h3 class="date">07/08/2022</h3>
      </div>
      <div class="card" onclick="i1_3_2()">
        <img src="./img/changelog/v1.3.2.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.3.2</h1>
        <h3 class="date">30/07/2022</h3>
      </div>
      <div class="card" onclick="i1_3_1()">
        <img src="./img/changelog/v1.3.2.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.3.1</h1>
        <h3 class="date">07/07/2022</h3>
      </div>
      <div class="card" onclick="i1_3()">
        <img src="./img/changelog/v1.3.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.3</h1>
        <h3 class="date">27/06/2022</h3>
      </div>
      <div class="card" onclick="i1_2_1()">
        <img src="./img/changelog/v1.2.1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.2.1</h1>
        <h3 class="date">14/05/2022</h3>
      </div>
      <div class="card" onclick="i1_2()">
        <img src="./img/changelog/v1.2.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.2</h1>
        <h3 class="date">12/05/2022</h3>
      </div>
      <div class="card" onclick="i1_1_1()">
        <img src="./img/changelog/v1.1.1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.1.1</h1>
        <h3 class="date">06/05/2022</h3>
      </div>
      <div class="card" onclick="i1_1()">
        <img src="./img/changelog/v1.1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1.1</h1>
        <h3 class="date">05/05/2022</h3>
      </div>
      <div class="card" onclick="i1()">
        <img src="./img/changelog/v1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">Intranet 1</h1>
        <h3 class="date">26/04/2022</h3>
      </div>
    </div>

    <!-- Dashboard Manager -->

    <h1 class="section-logs-title">Dashboard Manager </h1>
    <div class="logs-card">
      <div class="card" id="dm1-4" onclick="dm1_4()">
        <img src="./img/changelog/1_4.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DM 1.4</h1>
        <h3 class="date">13/09/2022</h3>
      </div>
      <div class="card" onclick="dm1_3_2()">
        <img src="./img/changelog/v1.3.2.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DM 1.3.2</h1>
        <h3 class="date">22/07/2022</h3>
      </div>
      <div class="card" onclick="dm1_3_1()">
        <img src="./img/changelog/v1.3.1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DM 1.3.1</h1>
        <h3 class="date">07/07/2022</h3>
      </div>
      <div class="card" onclick="dm1_3()">
        <img src="./img/changelog/v1.3.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DM 1.3</h1>
        <h3 class="date">27/06/2022</h3>
      </div>
      <div class="card" onclick="dm1_2()">
        <img src="./img/changelog/v1.2.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DM 1.2</h1>
        <h3 class="date">12/05/2022</h3>
      </div>
      <div class="card" onclick="dm1_1()">
        <img src="./img/changelog/v1.1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DM 1.1</h1>
        <h3 class="date">05/05/2022</h3>
      </div>
      <div class="card" onclick="dm1()">
        <img src="./img/changelog/v1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DM 1</h1>
        <h3 class="date">26/04/2022</h3>
      </div>
    </div>

    <h1 class="section-logs-title">Dashboard Vendeur</h1>
    <div class="logs-card" style="margin-bottom:3rem;">
      <div class="card" onclick="dv1_4()">
        <img src="./img/changelog/1_4.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DV 1.4</h1>
        <h3 class="date">13/09/2022</h3>
      </div>
      <div class="card" onclick="i1_3_4()">
        <img src="./img/changelog/v1.3.4.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DV 1.3.4</h1>
        <h3 class="date">11/08/2022</h3>
      </div>
      <div class="card" onclick="i1_3_3()">
        <img src="./img/changelog/v1.3.3.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DV 1.3.3</h1>
        <h3 class="date">07/08/2022</h3>
      </div>
      <div class="card" onclick="dv1_3_2()">
        <img src="./img/changelog/v1.3.2.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DV 1.3.2</h1>
        <h3 class="date">23/07/2022</h3>
      </div>
      <div class="card" onclick="dv1_3_1()">
        <img src="./img/changelog/v1.3.1.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DV 1.3.1</h1>
        <h3 class="date">07/07/2022</h3>
      </div>
      <div class="card" onclick="dv1_3()">
        <img src="./img/changelog/v1.3.png" alt="Image présentant le logo de version sur un fond blanc à 20%">
        <h1 class="logs-version">DV 1.3</h1>
        <h3 class="date">27/06/2022</h3>
      </div>
    </div>
  </div>
</body>
<script src="./js/changelog.js"></script>

</html>