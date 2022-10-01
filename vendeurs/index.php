<html lang="fr" nighteye="disabled">

<head>
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
  <title>Dashboard Vendeurs • Cuisinella Villennes</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/app.css">
  <link rel="stylesheet" href="./css/keyframes.css">
  <!-- Favicons -->

</head>

<body class="bg-light" id="body" onload="load()">
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" id="menu">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-red" style="max-width:175px !important;" href="#">Cuisinella Villennes</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 " href="./auth/logout.php">Déconnexion</a>
      </div>
    </div>
<!--     <button onclick="darkmode()" class="btn btn-dark">🌕</button> -->

  </header>
  <?php session_start();
  if (!isset($_SESSION['UserData']['Username'])) {
    header("location:./auth/login.php");
    exit;
  }
  ?>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <p class="text-center fw-bold" id="version"></p>
              <hr>
              <a class="nav-link active" href="./index.php">
                <i class="bi bi-house"></i>
                Accueil
              </a>
              <a class="nav-link" id="mapslink" href="./maps.php">
                <i class="bi bi-compass"></i>
                Plans
              </a>
              <a class="nav-link" id="cha-link" href="./changelog.php">
                <i class="bi bi-view-list"></i>
                Changelog
              </a>
            </li>
          </ul>
        </div>
    </div>

  </div>
  <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
  <div class="col-12 my-3 m-auto d-flex justify-content-center">
      <div class="alert alert-danger alert-dismissible mx-2 d-none">
        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-primary alert-dismissible mx-2">
        <strong>Intranet 1.4</strong> La nouvelle mouture d'Intranet sera disponible le 13 septembre.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-info alert-dismissible mx-2">
        <strong>Identifiants</strong> Vos nouveaux identifiants vous seront envoyés le 12 septembre par e-mail !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    <div class="chartjs-size-monitor">
      <div class="chartjs-size-monitor-expand">
        <div class=""></div>
      </div>
      <div class="chartjs-size-monitor-shrink">
        <div class=""></div>
      </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="fs-6">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button onclick="exportTableToExcel('tblData', 'table')" type="button" class="btn btn-sm btn-outline-success ">Exporter (.xls)</button>
          <!--<button type="button" class="btn btn-sm btn-outline-secondary disabled">Exporter (.pdf)</button>-->
        </div>
      </div>
    </div>
    <canvas class="my-4 w-100 chartjs-render-monitor d-none" id="myChart" width="2304" height="972" style=" height: 486px; width: 1152px;"></canvas>
    <h4>SAV</h4>
    <div class="table-responsive">
      <?php
      $str_data = file_get_contents("../www/forms/forms-result.json");
      $data = json_decode($str_data, true);

      $temp = "<table id=\"tblData\" class='table table-striped table-hover'>";

      $temp .= "<tr><th scope='col'>Date</th>";
      $temp .= "<th scope='col'>Client</th>";
      $temp .= "<th scope='col'>Vendeur</th>";
      $temp .= "<th scope='col'>Poseur d'origine</th>";
      $temp .= "<th scope='col'>Durée</th>";
      $temp .= "<th scope='col'>Nombre de poseurs</th>";
      $temp .= "<th scope='col'>Poseur demandé</th>";
      $temp .= "<th scope='col'>N° d'AR</th>";
      $temp .= "<th scope='col'>Commentaires</th></tr>";

      for ($i = 0; $i < sizeof($data["employees"]); $i++) {
        $temp .= "<tr>";
        $temp .= "<td>" . $data["employees"][$i]["date2"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["customer"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["vendeur"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["Nom"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["Duree"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["Poseurs"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["poseursdemande"] . "</td>";
        $temp .= "<td>" . $data["employees"][$i]["ARnumber"] . "</td>";
        $temp .= "<td style=\"max-width:310px !important;\">" . $data["employees"][$i]["comments"] . "</td>";
        $temp .= "</tr>";
      }

      $temp .= "</table>";

      echo $temp;
      ?>
    </div>
  </main>
  </div>
  </div>

  <!-- Modal -->

  <script>
    function exportTableToExcel(tableID, filename = "") {
      var downloadLink;
      var dataType = "application/vnd.ms-excel";
      var tableSelect = document.getElementById(tableID);
      var tableHTML = tableSelect.outerHTML.replace(/ /g, "%20");

      // Specify file name
      filename = filename ? filename + ".xls" : "excel_data.xls";

      // Create download link element
      downloadLink = document.createElement("a");

      document.body.appendChild(downloadLink);

      if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(["\ufeff", tableHTML], {
          type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
      } else {
        // Create a link to the file
        downloadLink.href = "data:" + dataType + ", " + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
      }
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    }

    function darkmode() {
      const darkmode = document.getElementById('body');
      const menu = document.getElementById('sidebarMenu');
      const menuLink = document.getElementById('mapslink');
      const menuLink2 = document.getElementById('cha-link');
      const tableh = document.getElementsByTagName('th');
      const table = document.getElementById('tblData');
      darkmode.classList.remove('bg-light');
      darkmode.classList.add('bg-dark');
      darkmode.style.color = "#fff";
      menu.classList.remove('bg-light');
      menu.classList.add('bg-dark');
      menuLink.style.color = "#fff";
      menuLink2.style.color = "#fff";
      table.style.color = "#fff";
      var style = document.createElement('style');
      style.innerHTML = `
      .table-striped > tbody > tr:nth-of-type(2n+1) > * {
    color: #fff !important;
}
.table-striped:hover > tbody:hover > tr:nth-of-type(2n+1):hover > * {
    color: #fff !important;
}
  `;
      document.head.appendChild(style);

      document.getElementById('menu').innerHTML = "<a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-red\" style=\"max-width:175px !important;\" href=\"#\">Cuisinella Villennes</a><button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button><div class=\"navbar-nav\"><div class=\"nav-item text-nowrap\"><a class=\"nav-link px-3\" href=\"./auth/logout.php\">Déconnexion</a></div> </div><button onclick=\"lightmode()\" class=\"btn btn-dark\">☀️</button>"
      console.log('Darkmode Activé à :' + Date.now())

    }

    function lightmode() {
      const darkmode = document.getElementById('body');
      const menu = document.getElementById('sidebarMenu');
      const menuLink = document.getElementById('mapslink');
      const menuLink2 = document.getElementById('cha-link');
      const tableh = document.getElementsByTagName('th');
      const table = document.getElementById('tblData');
      darkmode.classList.remove('bg-dark');
      darkmode.classList.add('bg-light');
      darkmode.style.color = "#000";
      menu.classList.remove('bg-dark');
      menu.classList.add('bg-light');
      menuLink.style.color = "#000";
      menuLink2.style.color = "#000";
      table.style.color = "#000";
      var style = document.createElement('style');
      style.innerHTML = `
      .table-striped > tbody > tr:nth-of-type(2n+1) > * {
    color: #000 !important;
}
.table-striped:hover > tbody:hover > tr:nth-of-type(2n+1):hover > * {
    color: #000 !important;
}
  `;
      document.head.appendChild(style);

      document.getElementById('menu').innerHTML = "<a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-red\" style=\"max-width:175px !important;\" href=\"#\">Cuisinella Villennes</a><button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button><div class=\"navbar-nav\"><div class=\"nav-item text-nowrap\"><a class=\"nav-link px-3\" href=\"./auth/logout.php\">Déconnexion</a></div> </div><button onclick=\"darkmode()\" class=\"btn btn-dark\">🌕</button>"
      console.log('Darkmode Activé à :' + Date.now())

    }
  </script>
  <script src="./js/version.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>