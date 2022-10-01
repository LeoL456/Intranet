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
     
    <title>Documentation • Cuisinella Villennes</title>
    <!-- CSS only -->
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
        <h1 class="principal-title"></h1>
        <p class="principal-para">Apprenez à remplir les champs du formulaire pour que votre demande soit valide. <br> Attention, chaque champ est obligatoire !</p>
    </div>
    <div class="docs-item">
      <h1>1. Renseignez votre nom.</h1>
      <p>Pour que votre demande soit suivie et pour savoir à qui s'adresser ou encore pour avoir des renseignements, il est primordial de renseigner votre nom.</p>
      <img src="./img/form-name-input.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>2. Ajoutez le nom du poseur d'origine.</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et amet consequuntur at, reprehenderit consequatur cum quos possimus tempora atque laborum est adipisci, eligendi voluptatum in quam quaerat, commodi hic. Culpa!</p>
      <img src="./img/form-poseurs-origine-input.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>3. Ajoutez le nom du poseurs que vous souhaitez..</h1>
      <p>Il est essentiel que pour la planification, vous désignez un ou des poseur(s) pour faire le SAV. Vous avez le choix de demander un poseur différent de celui d'origine. En revanche, si celui-ci est le même que l'originel, vous devez quand même le mentionner.</p>
      <img src="./img/form-poseurs-demande-input.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>4. Définissez une durée</h1>
      <p>Toujours pour la planification et l'organisation, nous vous demandons de bien vouloir définir la durée de ce SAV, elle peut varier de 1/2 journée à 2 jours. <i>Si votre SAV ne dure qu'une heure ou moins d'une demi journée, choisissez quand même le champ "1/2 journée".</i></p>
      <img src="./img/form-duree-input.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>5. Besoin de plus...</h1>
      <p>Si votre SAV nécessite plus d'un poseur, alors dites le nombre de poseurs dont vous avez besoin, vous pourrez renseigner plus bas les noms de ceux que vous voulez. </p>
      <img src="./img/form-poseurs-nombre.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>6. Le nom du client.</h1>
      <p>Information essentielle, le nom du client doit absolument être renseigné dans votre demande. Si c'est un nom composé, les <kbd>Espace</kbd>, <kbd>,</kbd>, <kbd>.</kbd> sont strictement interdits, le Script d'envoi ne les tolèrent pas et renvoie une erreur.</p>
      <img src="./img/form-client.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
    <div class="docs-item">
      <h1>7. Le numéro d'AR</h1>
      <p>Information essentielle aussi, le numéro d'AR va servir à identifier votre demande. Pour trouver le numéro d'AR, vous pouvez vous rendre <a href="https://onyos.fr/docs/ar-number.php" class="link-docs-primary" target="_blank" rel="noopener noreferrer">ici</a> !</p>
      <img src="./img/form-ar.png" alt="Fenêtre du Formulaire présentant les différents choix possibles.">
    </div>
  </div>

      <!-- Footer -->
      <?php
        include('../assets/footer.php')
      ?>
</body>
</html>