<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <!--
    Formulaires de Cuisinella Villennes
    HTML 5.1 
    Version 1.4 
    © Léo LESIMPLE
    -->
  <meta charset="UTF-8">
  <meta name="description" content="Faites vos demandes de SAV">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Léo LESIMPLE">

  <title>Demandes de SAV • Cuisinella Villennes</title>

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

  <link rel="stylesheet" href="./css/newcss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/nightmode.css">
  <link rel="stylesheet" href="css/darkmode.css">
</head>

<body>
  <?php
  include('./assets/nav.php')
  ?>
  <div class="intro-section">
    <h1 class="principal-title">Demande de planification SAV</h1>
    <p class="principal-para">Ce formulaire est à remplir <b>UNIQUEMENT</b> pour demander la planification de votre SAV, <br> une fois la Navette arrivée et les élements préparés !</p>
  </div>
  <form method="post" enctype="multipart/form-data" name="myemailform" action="./forms/submit.php">
    <div class="form-sav">
      <h4 class='section-title'>Demande faite par :</h4>

      <select class="form-select" name="vendeur" aria-label="vendeur" required>
        <option selected>Choisissez...</option>
        <option value="Audrey Tichit">Audrey Tichit</option>
        <option value="Khaoula Hammami">Khaoula Hammami</option>
        <option value="Johan Coudert">Johan Coudert</option>
        <option value="Tom Coudert">Tom Coudert</option>
        <option value="Kaled Salhi">Kaled Salhi</option>
        <option value="Johan Sacilotto">Johan Sacilotto</option>
        <option value="Régis Rétif">Régis Rétif</option>
        <option value="Dinis Ferreira">Dinis Ferreira</option>
        <option value="Jessy Laram">Jessy Laram</option>
      </select>

      <h4 class='section-title'>Poseur d'origine</h4>

      <select class="form-select" name="poseurs" aria-label="Poseurs" required>
        <option selected>Choisissez...</option>
        <option value="Jean-Michel PELTRIAUX">Jean-Michel PELTRIAUX</option>
        <option value="Mickaël CORSO">Mickaël CORSO</option>
        <option value="Christophe GRINDEL">Christophe GRINDEL</option>
        <option value="Romain DAOULAS">Romain DAOULAS</option>
        <option value="Armindo DE FARIA LEITE">Armindo DE FARIA LEITE</option>
        <option value="Carlos ARAUJO">Carlos ARAUJO</option>
        <option value="Laurent MORESCHETTI">Laurent MORESCHETTI</option>
        <option value="Romuald KIEFER">Romuald KIEFER</option>
        <option value="Patrick MAURIN">Patrick MAURIN</option>
        <option value="Gilles RENAUD">Gilles RENAUD</option>
        <option value="Willy MARTINET">Willy MARTINET</option>
        <option value="Stefan MILOSEVIC">Stefan MILOSEVIC</option>
      </select>

      <h4 class='section-title'>Poseur demandé</h4>
      <select class="form-select" name="poseursdemande" aria-label="Poseurs" required>
        <option selected>Choisissez...</option>
        <option value="MATOM">MATOM</option>
        <option value="Jean-Michel PELTRIAUX">Jean-Michel PELTRIAUX</option>
        <option value="Mickaël CORSO">Mickaël CORSO</option>
        <option value="Christophe GRINDEL">Christophe GRINDEL</option>
        <option value="Romain DAOULAS">Romain DAOULAS</option>
        <option value="Armindo DE FARIA LEITE">Armindo DE FARIA LEITE</option>
        <option value="Carlos ARAUJO">Carlos ARAUJO</option>
        <option value="Laurent MORESCHETTI">Laurent MORESCHETTI</option>
        <option value="Romuald KIEFER">Romuald KIEFER</option>
        <option value="Patrick MAURIN">Patrick MAURIN</option>
        <option value="Gilles RENAUD">Gilles RENAUD</option>
        <option value="Willy MARTINET">Willy MARTINET</option>
        <option value="Stefan MILOSEVIC">Stefan MILOSEVIC</option>
      </select>

      <h4 class='section-title'>Durée</h4>
      <p class="desc-form">Précisez la durée du SAV.</p>
      <div class="plans">
        <label class="plan un-plan" for="un">
          <input type="radio" name="duree" value="1/2 journée" id="un">
          <div class="plan-content">
            <div class="plan-details">
              <span class='span-radio'>1/2 journée</span>
            </div>
          </div>
        </label>

        <label class="plan deux-plan" for="deux">
          <input type="radio" id="deux" name="duree" value="1 jour">
          <div class="plan-content">
            <div class="plan-details">
              <span class='span-radio'>1 jour</span>
            </div>
          </div>
        </label>

        <label class="plan trois-plan" for="trois">
          <input type="radio" id="trois" name="duree" value="2 jours">
          <div class="plan-content">
            <div class="plan-details">
              <span class='span-radio'>2 jours</span>
            </div>
          </div>
        </label>
      </div>
      <h4 class='section-title'>Nombre de poseur(s)</h4>
      <p class="desc-form">Précisez le nombre de poseur(s).</p>
      <div class="plans">
        <label class="plan un-poseur-plan" for="un-poseur">
          <input type="radio" name="nbposeurs" value="1" id="un-poseur">
          <div class="plan-content">
            <div class="plan-details">
              <span class='span-radio'>1</span>
            </div>
          </div>
        </label>

        <label class="plan deux-poseurs-plan" for="deux-poseurs">
          <input type="radio" id="deux-poseurs" name="nbposeurs" value="2">
          <div class="plan-content">
            <div class="plan-details">
              <span class='span-radio'>2</span>
            </div>
          </div>
        </label>

        <label class="plan trois-poseurs-plan" for="trois-poseurs">
          <input type="radio" id="trois-poseurs" name="nbposeurs" value="3">
          <div class="plan-content">
            <div class="plan-details">
              <span class='span-radio'>3</span>
            </div>
          </div>
        </label>
      </div>

      <h4 class='section-title'>Nom du client</h4>
      <p class="desc-form">Quel est le client concerné ?</p>
      <input  type="text" placeholder="   Nom" name="customer"  required>

      <h4 class='section-title'>Numéro(s) d'AR</h4>
      <p class="desc-form">Précisez le numéro ou les numéros d'AR en relation avec votre demande.</p>
      <input  type="text" placeholder="   N° d'AR" name="ARnumber" >

      <h4 class='section-title'>Votre SAV est-il prêt ? <span class="badge-new">Nouveau !</span></h4>

      <select class="form-select" name="pret" aria-label="pret" required>
        <option selected>Choisissez...</option>
        <option value="Prêt">SAV prêt (Fiche intervention + colis prêts)</option>
        <option value="Attente Navette">En attente de la Navette...</option>
        <option value="Non préparé">Non préparé</option>
      </select>

      <h4 class='section-title'>Commentaires</h4>
      <textarea  type="text" placeholder="   Commentaires..." name="comments" ></textarea>

      <div class="container my-5" style="width: 500px;">
        <button type="submit" class="link link-principal link-submit" style='border:0;' value="Send Form">Envoyer</button>
      </div>
    </div>
  </form>

  <style>
    .badge-new {
      font-size: 12px !important;
      letter-spacing: -0.3px;
      font-weight: 800;
      /* background-color: #E65E25; */
      /* color: #fff; */
      color: #E65E25;
      /* padding: 0.375rem !important; */
      border-radius: .375rem;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      line-height: 1;
    }
  </style>

  <!-- Footer -->
  <?php
  include('./assets/footer.php')
  ?>
</body>

</html>