<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <!--
    Cuisinell'Actu de Cuisinella Villennes
    HTML 5.1 
    Version 1.4 du 12 mai 2022 
    © Léo LESIMPLE
    -->
  <meta charset="UTF-8">
  <meta name="description" content="Faites vos demandes de SAV">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=11">
  <meta name="author" content="Léo LESIMPLE">
  
  <title>Cuisnell'Actu • Cuisinella Villennes</title>

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
  <link rel="stylesheet" href="./css/newcss.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/nightmode.css">
  <link rel="stylesheet" href="css/darkmode.css">
</head>

<body>
  <?php
  include('./assets/nav.php');
  ?>
  <div class="intro-section">
    <h1 class="cuisinellactu-title">Les Cuisnell'Actu</h1>
    <p class='principal-para news-para'>Retrouvez toutes les actualités internes à Cuisinella Villennes en un seul point. Vous êtes prévenus des nouvelles actus par e-mail directement.</p>
  </div>
  <div class="last-news">
    <a href="#down" class="link link-principal">Accéder aux dernières news</a>
  </div>
  <div class="news-section">
    <?php
    $temp = '';
    $str_data = file_get_contents("../dashboard/sendzone/news-result.json");
    $data = json_decode($str_data, true);
    for ($i = 0; $i < sizeof($data["news"]); $i++) {
      $temp .= "<div class='news-item-width'>";
      $temp .= "<div class='news-item'>";
      $temp .= "<div class=' news'>";
      $temp .= "<img src='https://dashboard.onyos.fr/sendzone/upload/" . $data["news"][$i]["date"] . ".jpg' class='news-img' alt='Not found'></img>";
      $temp .= "<div class='date-section'>";
      $temp .= "<small class='news-date'>" . $data["news"][$i]["date2"] . "</small>";
      $temp .= "</div>";
      $temp .= "<div class='section-text-news'>";
      $temp .= "<h4 class='title-news'>" . $data["news"][$i]["titre"] . "</h4>";
      $temp .= "<p class='text-break desc-news'>" . $data["news"][$i]["description"] . "</p>";
      $temp .= "</div>";
      $temp .= "</div>";
      $temp .= "</div>";
      $temp .= "</div>";
    }

    echo $temp;
    ?>
  </div>

  <!-- Footer -->
  <div id="down"></div>
  <?php
  include('./assets/footer.php');
  ?>
  <script>
    console.log('Page succesfully loaded')
  </script>
</body>

</html>