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
  <title>Cuisinell'Actu • Cuisinella Villennes</title>
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

<body style="overflow:hidden !important">

  <?php
  include('./assets/nav.php')
  ?>
  <div id="overlay"></div>
  <div id="page" style="overflow:hidden !important">
    <h1 class="page-title" style="margin-top:1.5rem">Cuisinell'Actu</h1>
    <form class="d-flex justify-content-center" action="./sendzone/send-news.php" method="post" enctype="multipart/form-data">
      <div class="news-container">
        <div>
          <h3 class="news-title">Titre</h3>
          <input type="text" class="form-control mb-4" name="title" placeholder="Titre...">

          <h5 class="news-title">Description</h5>
          <textarea class="form-control" placeholder="Description" name="description"></textarea>

          <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
          <input class="file-upload" type="file" id="formFile" name="imgnews" accept=".jpg,.jpeg">

          <div class='btn-group w-100'>
            <button type="submit" class="link link-send" style="margin-right:0;" value="Send Form">Publier 🚀</button>
          </div>
        </div>
    </form>
  </div>

</body>

</html>