<header class="dashboard-header">
  <span onclick="openNav()" class="open-menu">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
    </svg>
  </span>
  <h1>Cuisinella Villennes</h1>
  <div class="disconnect" onclick="location.href='./auth/logout.php';">
    Déconnexion
  </div>
</header>

<div id="dashboard-sidenav" class="sidenav">
  <div class="dashboard-info">
    <h3 class="dashboard-title">Dashboard Vendeurs</h3>
    <hr>
    <p class="version">Version 1.4</p>
  </div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-family: sans-serif !important; font-style:normal !important;">&times;</a>
  <a class="sidebar-item" href="./index.php">Accueil</a>
  <a class="sidebar-item" href="./sav.php">SAV</a>
  <a class="sidebar-item" href="./navette.php">Navette</a>
  <a class="sidebar-item" href="./supply.php">Fournitures</a>
  <a class="sidebar-item" href="./maps.php">Plans</a>
  <a class="sidebar-item" href="./changelog.php">Changelog</a>


  <div class="disconnect-sm" id="logout" onclick="location.href='./auth/logout.php';">
    Déconnexion
  </div>
</div>

<div class="darkdiv-switch">
  <div class="header">
    <i class="sun bi bi-sun-fill"></i>
    <i class="moon hide bi bi-moon-fill"></i>
  </div>
</div>

<script>
  function openNav() {
    document.getElementById("dashboard-sidenav").style.width = "250px";
    document.getElementById("dashboard-sidenav").style.overflowX = "visible";
    document.getElementsByClassName("open-menu").style.display = "none";
    document.getElementById("logout").style.transition = "all 1s";
  }

  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("dashboard-sidenav").style.width = "0";
    document.getElementById("dashboard-sidenav").style.overflowX = "hidden";
    document.getElementsByClassName("open-menu").style.display = "block";
  }
</script>
<script src="https://dashboard.onyos.fr/js/darkmode.js"></script>