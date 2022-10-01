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
     
    <title>Voici Intranet 1.3 • Cuisinella Villennes</title>

    <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/newcss.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/nightmode.css">
    <link rel="stylesheet" href="css/darkmode.css">
</head>
<body>
    <?php
        include('./assets/nav.php');
  ?>

  <div class="intro-section">
    <h1 class="principal-title discover-title">Intranet 1.3</h1>
    <p class="big-para">La plus grosse mise à jour d'Intranet depuis Intranet</p>
  </div>
  <div class="discover-container">
    <h1 class="discover-section-title">Un tout nouveau style</h1>
    <p class="discover-section-para">Le design "<a class="link-discover" href='https://getbootstrap.com/'>Bootstrap</a>" fait place au flat-design, plus moderne et surtout fait maison. Plus besoin de charger des tonnes de composants pré-fabriqués, les composants sont faits directement sur le site ! Ce qui veut dire, chargement plus rapide, beaucoup plus rapide ! De plus, ce nouveau design est moins vif et plus simple à comprendre. </p>
    <img src="./img/homepage-new.png" class ="discover-img-center" alt="">
  </div>
  <div class="discover-container-left">
    <div class="discover-text-left">
      <h1 class="discover-section-title">100% ami avec votre téléphone.</h1>
      <p class="discover-section-para">Intranet 1.3 vous permet de consulter tout le contenu depuis votre téléphone ou tablette sans rien toucher, le site s'adapte automatiquement selon la taille de votre écran. Mais qu'apporte 1.3 car les autres versions l'étaient aussi ? 1.3 apporte une nouvelle manière de s'adapter à votre appareil. Le système <code>grid</code>. Avant la version 1.2 s'appuyait sur le système de grilles <a class="link-discover" href='https://getbootstrap.com/'>Bootstrap</a> qui utilisait des pourcentages pour déterminer les tailles mais cette technologie à ses limites et <code>grid</code> les comblent parfaitement.</p>
    </div>
    <div class="discover-img-left">
      <div class="img-center">
        <img src="./img/overview-responsive.png" class ="discover-img-left img-right-side" alt="">
    </div>
  </div>
</div>
 <div class="discover-container-right">
  <div class="discover-text-right">
    <h1 class="discover-section-title">La surpuissance de PHP</h1>
    <p class="discover-section-para">Intranet se simplifie en coulisses avec une accélération de <b>17.97 %</b> par rapport à la version 1.2, vous naviguerez environ 3,2 fois plus vite sur l'Intranet. Tout ça grâce à PHP, un langage de programmation plus puissant que l'HTML utilisé précédemment et c'est aussi grâce à l'abandon de <span class="link-discover">Bootstrap</span>, plus besoin de charger un fichier de plusieurs gigas et des 11271 lignes de ce fichier de style et les 5047 lignes pour les interactions (animations, changement de tailles d'écran, ...). </p>
  </div>
  <div class="discover-img-right">
    <div class="img-center">
      <img src="./img/speed-php-metaphore.webp" class ="discover-img-left img-right-side" alt="">
    </div>
  </div>
</div>
<div class="discover-container-left">
    <div class="discover-text-left">
      <h1 class="discover-section-title">Un mail de confirmation, c'est toujours mieux !</h1>
      <p class="discover-section-para">Pour être sûr que vous avez bien envoyés votre demande de SAV, Intranet vous envoie désormais un mail comme quoi votre demande à bien été reçue. <br> Vous ne voulez plus avoir d'adresse mail du type "onyosfo@cluster031.hosting.ovh.net" quand vous recevez des mails d'Intranet, ajoutez la fiche de contact dans votre client mail. <br> <b>Besoin d'aide ? La documentation est là !</b></p>
      <span class="piece-jointe">
        <a href="./img/Intranet.vcf" download class="link link-principal-hero">Fiche de contact  <i style="margin-left:10px;" class="bi bi-cloud-download-fill"></i></a>
      </span>
    </div>
    <div class="discover-img-left">
      <div class="img-center">
        <img src="./img/mail-notif.png" class ="discover-img-left img-right-side" alt="">
    </div>
  </div>
</div>
<div class="discover-container-right">
  <div class="discover-text-right">
    <h1 class="discover-section-title">Un Dashboard spécial vendeurs</h1>
    <p class="discover-section-para">Disponible à l'adresse ci-dessous, il vous est désormais possible de vérifier si votre demande de SAV apparaît sur le tableau et de vérifier si éventuellement le SAV de votre client a déjà été demandé ! Avec l'historique complet de chaque demande. Vous pourrez même consulter les anciens dossiers de vos clients <a href="#note1"><sup>1</sup></a></p>
    <span class="piece-jointe">
        <a href="https://vendeurw.onyos.fr/" class="link link-principal-hero">Accès Vendeurs</a>
      </span>
  </div>
  <div class="discover-img-right">
    <div class="img-center">
      <img src="img/new-docs.png" class ="discover-img-left img-right-side" alt="">
    </div>
  </div>
</div>
<div class="discover-container-left">
  <div class="discover-text-left">
    <h1 class="discover-section-title">Une documentation toute neuve </h1>
    <p class="discover-section-para">La documentation se refait une beauté avec des catégories pour mieux vous repérer. De nouvelles pages de documentation mais aussi des pages qui vous expliquent comment faire des démarches sur votre appareil, par exemple, comment mettre des raccourcis vers Intranet. Certaines pages de documentation arriveront plus tard.</p>
  </div>
  <div class="discover-img-left">
    <div class="img-center">
      <img src="img/new-docs.png" class ="discover-img-left img-right-side" alt="">
    </div>
  </div>
</div>
<div class="discover-container-right">
  <div class="discover-text-right">
    <h1 class="discover-section-title">Un Design System public</h1>
    <p class="discover-section-para">Avec Intranet 1.3, le Design System qui est une bibliothèque graphique de tous les composants du site ainsi que la palette de couleurs, vous est proposé pour l'analyser ou encore le cloner et l'utiliser (sous autorisation) pour créer des documents et créer des maquettes ! Disponible pour les logiciels Figma (.fig), Sketch (.sketch) et en PDF.</p>
  </div>
  <div class="discover-img-right">
    <div class="img-center">
      <img src="https://miro.medium.com/max/1200/1*TxkQfOIfvNvl3Fnsi1PAJQ.png" class ="discover-img-left img-right-side" alt="">
    </div>
  </div>
</div>
<div class="discover-container-left">
  <div class="discover-text-left">
    <h1 class="discover-section-title">Une idée ? Une envie ? Partagez-la !</h1>
    <p class="discover-section-para">Si vous ressentez un besoin ou que vous avez une envie qu'elle quelle soit, styles, fonctionnalités, ou encore sur le code en lui-même, une adresse mail est à votre disposition : <a class="link-mail" href="mailto:idee@onyos.fr">idee@onyos.fr</a>. Intranet est en constante évolution et VOUS en êtes les acteurs alors n'hésitez pas ! </p>
  </div>
  <div class="discover-img-left">
    <div class="img-center">
      <img src="img/idea-discover.jpg" class ="discover-img-left img-right-side" alt="">
    </div>
  </div>
</div>
    <!-- Footer -->
    <?php
        include('./assets/footer.php')
    ?>
  </body>

</html>