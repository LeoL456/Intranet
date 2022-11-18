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
  <title>Navettes • Dashboard Villennes</title>
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
      <h1 class="page-title">Tableau des demandes de Fournitures</h1>
    </div>
    <div class="btn-group">
      <input class="search-bar" placeholder="🔍 Rechercher..." type="search" onkeyup="search()" id="search-input">
      <button onclick="exportTableToExcel('tblData', 'table')" class="link link-excel ">Exporter (.xls)</button>
    </div>

    <?php
    $str_data = file_get_contents("../www/sendzone/supply/supply-result.json");
    $data = json_decode($str_data, true);

    $temp = "<table id=\"tblData\">";

    $temp .= "<tr id='myUL' class='tr-title'>";
    $temp .= "<th style='border-top-left-radius: 20px;' scope='col'>Date</th>";
    $temp .= "<th scope='col'>Nom</th>";
    $temp .= "<th scope='col'>Article</th>";
    $temp .= "<th scope='col'>Référence JPG</th>";
    $temp .= "<th scope='col'>Quantité</th>";
    $temp .= "<th scope='col'>Options</th>";
    $temp .= "<th style='border-top-right-radius: 20px;' scope='col'>Commentaires</th></tr>";

    for ($i = 0; $i < sizeof($data["supply"]); $i++) {
      $temp .= "<tr>";
      $temp .= "<td>" . $data["supply"][$i]["date2"] . "</td>";
      $temp .= "<td>" . $data["supply"][$i]["name"] . "</td>";
      $temp .= "<td>" . $data["supply"][$i]["article"] . "</td>";
      $temp .= "<td>" . $data["supply"][$i]["refjpg"] . "</td>";
      $temp .= "<td>" . $data["supply"][$i]["qte"] . "</td>";
      $temp .= "<td>" . $data["supply"][$i]["options"] . "</td>";
      $temp .= "<td style=\"max-width:210px !important;\">" . $data["supply"][$i]["commentaire"] . "</td>";
      $temp .= "</tr>";
    }

    $temp .= "</table>";

    echo $temp;
    ?>

    <script>
      function search() {
        // Declare variables 
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search-input");
        filter = input.value.toUpperCase();
        table = document.getElementById("tblData");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>

    <script>
      function exportTableToExcel(tableID, filename = "Tableau_Recapitulatif_Demandes_Navettes22") {
        var downloadLink;
        var dataType = "application/vnd.ms-excel";
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, "%20");
        var filename = "Tableau_Recapitulatif_Demandes_Navettes22";
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
    </script>
  </div>
  <script src="./js/weather.js"></script>
</body>


</html>