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
  <title>Dashboard • Cuisinella Villennes</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/app.css">
  <link rel="stylesheet" href="./css/keyframes.css">
  <!-- Favicons -->

</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-red" style="max-width:175px !important;" href="#">Cuisinella Villennes</a>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 " href="./auth/logout.php">Déconnexion</a>
      </div>
    </div>
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
              <p class="text-center fw-bold">
                Version 1.3.3
              </p>
              <hr>
              <a class="nav-link" href="./index.php">
                <i class="bi bi-house"></i>
                Accueil
              </a>
              <a class="nav-link active" href="./sav.php">
                <i class="bi bi-cone-striped"></i>
                SAV
              </a>
              <a class="nav-link" href="./actu.php">
                <i class="bi bi-newspaper"></i>
                Cuisinell'Actu
              </a>
              <a class="nav-link" href="./absence.php">
                <i class="bi bi-briefcase"></i>
                Absences
              </a>
              <a class="nav-link" href="./relance.php">
                <i class="bi bi-briefcase"></i>
                Relance
              </a>
              <a class="nav-link" href="./maps.php">
                <i class="bi bi-compass"></i>
                Plans
              </a>
              <a class="nav-link" href="./changelog.php">
                <i class="bi bi-view-list"></i>
                Changelog
              </a>
            </li>
          </ul>
        </div>
    </div>

  </div>
  </nav>
  </div>
  </div>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="fs-6">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button onclick="exportTableToExcel('tblData', 'table')" type="button" class="btn btn-sm btn-success ">Exporter (.xls)</button>
        </div>
      </div>
    </div>
    <h4>SAV</h4>
    <div class="table-responsive">
      <?php
      $str_data = file_get_contents("../www/forms/forms-result.json");
      $data = json_decode($str_data, true);

      $temp = "<table id=\"tblData\" class='table table-striped table-hover'>";

      $temp .= "<tr id='myUL'>";
      $temp .= "<th scope='col'>Date</th>";
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
        $temp .= "<td style='text-transform:uppercase;'>" . $data["employees"][$i]["customer"] . "</td>";
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
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>