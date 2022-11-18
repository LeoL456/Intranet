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
  <title>Dashboard • Cuisinella Villennes</title>
  <!-- CSS only -->
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

<body>
  <?php
  include('./assets/nav.php')
  ?>
  <div id="overlay"></div>
  <div id="page">
    <div class="page-header">
      <h1 class="page-title">Absences</h1>
      <p class="page-sub">Ceci sert uniquement le premier jour de l'absence !</p>
    </div>

    <form method="post" enctype="multipart/form-data" name="relance" action="./sendzone/absences/submit.php">
      <div class="abs-form">
        <select name="absent" aria-label="vendeur" required>
          <option selected>Choisissez...</option>
          <option value="johan.coudert">Johan Coudert</option>
          <option value="tom.coudert">Tom Coudert</option>
          <option value="dinis.ferreira">Dinis Ferreira</option>
          <option value="khaoula.hammami">Khaoula Hammami</option>
          <option value="karine.lesimple">Karine Lesimple</option>
          <option value="regis.retif">Régis Rétif</option>
          <option value="johan.sacilotto">Johan Sacilotto</option>
          <option value="kaled.salhi">Kaled Salhi</option>
          <option value="audrey.tichit">Audrey Tichit</option>
          <option value="jessy.laram">Jessy Laram</option>
        </select>
        <input type="date" name="debutabs" data-date-format="DD MMMM YYYY"><br>
      </div>
      <div class="abs-form" style="max-width: 535px; margin-left:auto;">
        <textarea autocapitalize="true" name="commentaires"></textarea>
        <input class="link link-send" type="submit" value="Envoyer">
      </div>
    </form>

    <?php
    $str_data = file_get_contents("../dashboard/sendzone/absences/relance.json");
    $data = json_decode($str_data, true);

    $temp = "<table id=\"tblData\">";

    $temp .= "<tr class='tr-title'><th style='border-top-left-radius: 20px;' scope='col'>Nom</th>";
    $temp .= "<th scope='col'>Date de début</th>";
    $temp .= "<th style='border-top-right-radius: 20px;' scope='col'>Heure de début</th>";

    for ($i = 0; $i < sizeof($data["historique"]); $i++) {
      $temp .= "<tr>";
      $temp .= "<td>" . $data["historique"][$i]["id"] . "</td>";
      $temp .= "<td>" . $data["historique"][$i]["debutabs"] . "</td>";
      $temp .= "<td>" . $data["historique"][$i]["heureabs"] . "</td>";
      $temp .= "</tr>";
    }

    $temp .= "</table>";

    echo $temp;
    ?>
  </div>
  </div>
</body>

</html>