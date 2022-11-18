<!-- Desktop -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<nav id="desktop">
    <div class="header">
        <div class="img-zone">
            <img class="logo-nav" src="https://onyos.fr/img/logo-cuisinella-site.png" alt="Logo Cuisinella" height="50px">
        </div>
        <div class="link-zone">
            <a class="nav-item" href="https://onyos.fr/index.php">Accueil</a>
            <a class="dropdown">
                <a onclick="dropdown()" class="nav-item dropbtn">
                    SAV/Navette👇
                </a>
                <div id="myDropdown" class="dropdown-content">
                    <a class="nav-item-dropdown" href="https://onyos.fr/form.php">Demande d'Intervention SAV</a>
                    <a class="nav-item-dropdown" href="https://onyos.fr/navette.php">Demande de Navette</a>
                </div>
            </a>
            <a class="nav-item" href="https://onyos.fr/supply.php">Demande de Fournitures</a>
            <a class="nav-item" href="https://onyos.fr/news.php">Cuisinell'Actu</a>
            <a class="nav-item" href="https://onyos.fr/docs.php">Documentation</a>
            <a class="nav-item intranetv13 discover-nav" href="https://onyos.fr/discover.php">Intranet 1.4</a>
            <a class="nav-item dashboard-item" href="https://vendeur.onyos.fr/">Dashboard</a>
        </div>
    </div>
</nav>
<div class="darkdiv-switch">
    <div class="header">
        <i class="sun bi bi-sun-fill"></i>
        <i class="moon hide bi bi-moon-fill"></i>
    </div>
</div>
<script src="https://onyos.fr/js/darkmode.js"></script>

<!-- Mobile -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="https://onyos.fr/">Accueil</a>
    <a href="https://onyos.fr/form.php">Demande d'Intervention SAV</a>
    <a href="https://onyos.fr/navette.php">Demande de Navette</a>
    <a href="https://onyos.fr/supply.php">Demande de Fournitures</a>
    <a href="https://onyos.fr/news.php">Cuisinell'Actu</a>
    <a href="https://onyos.fr/docs.php">Documentation</a>
</div>

<nav class="mobile-nav">
    <span class="hamburger-nav" onclick="openNav()">&#9776;</span>
    <img class="logo-mobile" src="https://onyos.fr/img/logo-cuisinella-site.png" alt="Logo Cuisinella" height="50px">
</nav>

<script src="https://onyos.fr/js/app.js"></script>