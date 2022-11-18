<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <!--
    Intranet — Cuisinella Villennes
    HTML 5.1 
    Version 1.4
    © Léo LESIMPLE
    -->
  <meta charset="UTF-8">
  <meta name="description" content="Faites vos demandes de SAV">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Léo LESIMPLE">
  <meta name="designer" content="Léo LESIMPLE">
  <link rel="canonical" href="https://onyos.fr/docs/supply.php">

  <title>Documentation • Cuisinella Villennes</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../css/general.css">
  <link rel="stylesheet" href="../css/nightmode.css">
  <link rel="stylesheet" href="../css/darkmode.css">
  <link rel="stylesheet" href="../css/docs.css">
  <link rel="stylesheet" href="../css/newcss.css">
</head>

<body>
  <?php
  include('../assets/nav.php')
  ?>

  <div class="docs-page">
    <div class="intro-section">
      <h1 class="principal-title">Demandes de Fournitures</h1>
      <p class="principal-para">Apprenez à remplir les champs du formulaire pour que votre demande soit valide. <br> Attention, certains champs sont obligatoires, vous ne pouvez pas envoyer le formulaire tant que ceux-ci sont pas remplis.</p>
    </div>
    <div class="docs-item">
      <h1>1. Renseignez votre nom.</h1>
      <p>Pour que votre demande soit suivie et pour savoir à qui s'adresser ou encore pour avoir des renseignements, il est primordial de renseigner votre nom.</p>
      <img src="./img/supply/name.jpeg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>2. Entrez le nom de l'article que vous souhaitez.</h1>
      <p>Le champ "Articles" vous permet de renseigner le nom de vos articles ! Faites aux plus précis sans être trop long ! <u>Si vous souhaitez commander plusieurs articles vous devrez faire plusieurs fois le formulaire !.</u></p>
      <img src="./img/supply/article.jpg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>3. Entrez la Référence JPG (Facultatif)</h1>
      <p>Vous souhaitez un article précis ? Il est alors impératif de mettre la référence JPG ! Les références se trouvent dans le catalogue JPG et sont souvent sous la forme : WW - 00000 - 00J</p>
      <img src="./img/supply/ref.jpg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>4. Vous en voulez plusieurs ?</h1>
      <p>Le champ Quantité vous permet de demander un article en plusieurs exemplaires. La valeur par défaut est "1", si vous le voulez en un exemplaire </p>
      <img src="./img/supply/qte.jpg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>5. Et dans une option précise ?</h1>
      <p>Vous avez la possiblité de mettre des options sur votre demande de fournitures ! Précisez la couleur, la taille ou encore la puissance. Faites attention ! Certaines options sur certains produits font augmenter le prix du produit ! </p>
      <img src="./img/supply/options.jpg" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
  </div>

  <!-- Footer -->
  <?php
  include('../assets/footer.php')
  ?>
</body>

</html>