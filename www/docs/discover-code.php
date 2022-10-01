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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/nightmode.css">
    <link rel="stylesheet" href="/css/darkmode.css">
    <link rel="stylesheet" href="/css/docs.css">
</head>
<body>
<?php
    include('../assets/nav.php')
  ?>
<!--   3755€ -->
<div class="container">
    <h1 class="text-center docs-title"><i class="bi bi-code-slash"></i> Comment est fabriqué tout ça ?</h1>
    <p class="docs-desc">Vous êtes curieux de savoir comment tout cela fonctionne ? Vous saurez tout (ou presque) de ce formulaire , de sa conception et son fonctionnement. Ce que vous allez lire est la description d'une passion trouvée, il y a peu près 1 an, cette page est plus personelle et un peu moins neutre que les autres qui sont plus professionnelles.</p>
    <div class="d-flex justify-content-center">
    <div class="details">
        <div class="container text-center">
            <div class="row">
            <div class="col">
                Temps de lecture :<br><b>15 minutes</b>
            </div>
            <div class="col">
                Publié le :<br><b>17 avril 2022</b>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 col-md-12 pt-5 pb-5">
            <h2 class="section-title">
                Généralités
            </h2>
            <p class="section-desc">
                Un site c'est un document avec du texte au départ. Ce texte est un texte avec uune mise en page particulière, c'est la que vient la mention de langages informatiques, dans ce groupe , il y a deux groupes : le groupe des langages dit de "balisage". Ces langages ne sont la que pour former le squelette du site. Ensuite, il y a les langages dit de "programmation", eux sont là pour interagir avec le balisage et l'utilisateur. <br>Dans ce site, les deux types de langages sont présents. <i>Certains morceaux de code ont été modifiés pour garder l'intégrité du code.</i>
            </p>
        </div>
        <div class="col-lg-6 col-md-12 pt-5 pb-5">
            <img src="../../img/html-cuisinella-hash.png" alt="Page web avec un formulaire où une liste déroulante présentant le nom de chaque vendeur est ouverte." class="img-fluid docs-img  w-75">
        </div>
        <hr class="d-lg-none">
        <div class="col-lg-6 col-md-12 pt-5 pb-5">
          <img src="../../img/list-open.png" alt="Page web avec un formulaire où une liste déroulante présentant le nom de chaque poseurs est ouverte." class="img-fluid docs-img shadow w-75">
      </div>
            <div class="col-lg-6 col-md-12 pt-5 pb-5">
                <h2 class="section-title">
                    Les différents langages en action.
                </h2>
                <p class="section-desc">
                    Juste pour ce site qui parait tout simple, sept langages informatiques différents sont utilisés, ainsi que 37 fichiers différents pour ce site. <br>Les 7 langages utilisés sont : 
                    <ul>
                        <li class="list-unstyled">
                            le <strong>HTML</strong> : ce langage est celui que vous pouvez voir quand vous cliquez sur inspecter l'élément dans votre navigateur. Il sert à dire au navigateur quel est cet élément, si c'est un lien ou un paragraphe par exemple. Le HTML contient de l'hypertexte d'où son nom <b>HyperText Markup Language</b>. La version actuelle est le HTML 5.1.
                        </li>
                        <li class="list-unstyled mt-2">
                            le <strong>CSS</strong> : celui-ci sert à styliser le style sinon le site ressemblerait aux premiers sites, du texte l'un en dessous de l'autre. Avec le CSS, on peut mettre ce que l'on veut où on veut l'animer, le colorer, l'afficher selon la taille de l'écran ou encore définir ou changer la taille de police. L'acronyme CSS veut dire Cascading Style Sheets ou Feuille de style en cascade en français. La version actuelle est le CSS 3.0
                        </li>
                        <li class="list-unstyled mt-2">
                            le <strong>JavaScript</strong> : à ne pas confondre avec le Java, qui est un tout autre langage. Le JavaScript sert aux interactions, il sert par exemple à passer au mode sombre, à afficher des élements les supprimer, les stocker ou encore à animer aussi. Le JavaScript n'est pas utilisé que sur les sites web, il sert à créer des apps iOS et Android, des logiciels macOS ou Windows et plus rarement des algorithmes. La version actuele est le JavaScript ES2020.
                        </li>
                        <li class="list-unstyled mt-2">
                            le <strong>JSON</strong> : un dérivé du JavaScript, le JSON ou JavaScript Object Notation, sert à stocker des données. C'est ce JSON qui sert à stocker les données que vous avez rempli dans le formulaire. Il les stockent en variables. Le JSON est un langage statique et n'est versionné.
                        </li>
                        <li class="list-unstyled mt-2">
                            le <strong>PHP</strong> : le plus important dans ce site. Le PHP c'est le tronc principal du site. Il sert à stocker temporairement les données, les rentrer dans le fichier de stockage et à les restituer, il sert aussi à dynamiser le site. Il sert aux liaison serveur site. Son petit nom ? Hypertext Preprocessor. Le PHP évolue chaque mois et ce site est codé en PHP 8.1.4 et passera bientôt en PHP 8.1.5 ou 8.2.
                        </li>
                        <p class="mx-4 mt-4">Il est aussi utilisé des librairies. Ce que l'ont appelle librairie, ce sont des consortium ou des personnes qui créent des élements de style ou des blocs de JavaScript pour que le codage soit plus rapide ou plus sécurisé. </p>
                        <li class="list-unstyled mt-2">
                            Bootstrap : c'est une librairie de style qui est la ligne directice de ce site. Outre quelques éléments qui ont été créés de toutes pièces, le site est composé de style Bootstrap, notamment pour la compatibilité du site avec les smartphones et tablettes, Bootstrap aide beaucoup. La version de Boostrap utilisé est la version 5.1.3. 
                        </li>
                    </ul>
                </p>
            </div>
            <hr class="d-lg-none">
            <div class="col-lg-6 col-md-12 pt-5 pb-5">
                <h2 class="section-title">
                  La division entre l'utilisateur et le serveur.
                </h2>
                <p class="section-desc">
                    Dans le développement de sites web, il y a deux types de compétences. Il y a le UI et l'UX. Pas de panique, je vous explique, ce que veulent dire ces deux sigles. Commençons par l'UI, ce sigle vient de l'anglais User Interface qui veut dire Interface Utilisateur en français. Le UI est la partie dite "client", ce que vous voyez; le style, les animations, les interactions font toutes parties de l'UI. Les langages rattachés sont le HTML, le CSS, le JavaScript et en partie le PHP. L'UX veut dire lui User Experience ou stylisé User Xperience. Soit Expérience utilisateur en français. Ce sont les liaisons entre "serveur" et "navigateur", dans le formulaire, l'UX est présent dans l'envoi, le traitement, le stockage et l'extraction des données tout cela est fait par le PHP. 
                </p>
            </div>
            <div class="col-lg-6 col-md-12 pt-5 pb-5">
                <img src="https://www.alithya.com/hubfs/Imported_Blog_Media/Blog_UX-UI-3.jpg" alt="Image graphique montrant une réprésentation des deux types de développement web : UI et UX." class="img-fluid docs-img shadow w-75">
            </div>
            <h2 class="text-center my-5">Comment marche le formulaire maintenant.</h2>
          <div class="col-lg-6 col-md-12 pt-5 pb-5">
            <img src="/img/formulaire-general.png" alt="Image montrant la page du formulaire de SAV Cuisinella Villennes.." class="img-fluid docs-img w-75">
          </div>
          <div class="col-lg-6 col-md-12 pt-5 pb-5">
            <h2 class="section-title">
                1<sup>ère</sup> partie : le formulaire et son remplissage.
            </h2>
            <p class="section-desc">
                Le formulaire comme on pourrait le penser ce n'est pas que la page où vous renseigner les données à envoyer. C'est bien plus que cela. Mais pour cette première partie, nous allons juste parler du côté que vous pouvez voir. Ce formulaire est donc composé de plusieurs champs, qui ont chacun un nom et un type, leur nom est unique et ne peut être utilisé plusieurs fois. Quand vous entrer une donnée dans le formulaire, vous écrivez juste du texte en réalité il n'est pas traité. Le seul moment où le texte est détécté et traité s'est au moment où vous cliquez sur le bouton "Envoyer".
            </p>
        </div>
        <hr class="d-lg-none">
      <div class="col-lg-6 col-md-12 pt-5 pb-5">
        <h2 class="section-title">
            2<sup>e</sup> partie : La traitement et le stockage des données.
        </h2>
        <p class="section-desc">
            Une fois que vous appuyez sur le bouton "Envoyer", pour vous la page disparaît mais au delà de ça un script vient identifier les champs par leur nom. Et extraire les données que vous avez entré•e•s et les transformer en variables, ces variables vont être lues par trois autres scripts, un qui va afficher un récapitulatif de votre demande, un autre qui va entrer vos données dans le fichier pour les stocker et un autre qui va traiter le fichier excel que vous avez mis, il va le vérifier et l'envoyer vers un dossier spécifique tout en changeant son nom par la date et l'heure sous la forme (jour-mois-année-heure-minute-seconde-milliseconde.xls), il lui assigne ce qui s'appelle un timestamp, un horodatage jusqu'à la milliseconde pour éviter que deux fichiers est le même nom et qu'il écrase un fichier qui aurait été envoyé auparavant. Un quatrième et dernier script vient sans qu'on le voit imprimer la date du jour à titre informatif. Aucun tracker n'est codé dans ce formulaire.
        </p>
    </div>
    <div class="col-lg-6 col-md-12 pt-5 pb-5">
      <img src="https://bs-uploads.toptal.io/blackfish-uploads/blog/post/seo/og_image_file/og_image/15493/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png" alt="Image montrant une base de données et les possibilités de données." class="img-fluid docs-img shadow w-75">
  </div>
  <hr class="d-lg-none">
  <div class="col-lg-6 col-md-12 pt-5 pb-5">
    <img src="../../img/dashboard-empty.png" alt="Dashboard vide de données montrant comment les données sont interpêtées." class="img-fluid docs-img shadow w-75">
</div>
<div class="col-lg-6 col-md-12 pt-5 pb-5">
  <h2 class="section-title">
    3<sup>e</sup> partie : l'extraction et l'interprétation des données.
  </h2>
  <p class="section-desc">
    Enfin, les données que vous avez envoyés ne vont pas rester béantes dans un fichier au fin fond d'un datacneter. Négatif, elles vont être extraite et interprêtée par deux autres script de l'autre côté sur l'accès administrateur. De ce côté, les données sont retranscrites en un tableau recapitulatif, des demandes. Les deux scripts qui sont en charge de l'extraction/interprêtation des données travaillent en parrallèles. L'un va décoder le fichier où sont stockées vos données rentrées dans le formulaire et l'autre va chercher le fichier que vous avez chargé dans le formulaire. Et puis les deux scripts vont remettre ses valeurs en variables. C'est là que rentre le dernier script entre en place, il va prendre les variables et les transformer en tableau et tout cela de l'extraction à la présentation des données ne dure que quelques secondes, après le script peut être plus lent en raison d'un réseau internet saturé où d'un ordinateur trop lent.
</p>
</div>
<hr class="d-lg-none">
<div class="col-lg-6 col-md-12 pt-5 pb-5">
  <h2 class="section-title">
      4<sup>e</sup> partie : Innover et ajouter des fonctionnalités
  </h2>
  <p class="section-desc">
      Cette 4 <sup>e</sup> partie, veut dire qu'il faut sans cesse évoluer dans le monde du développement web. et être reès créatif Les tendances en matière de design changent rapidement et les sites deviennent rapidement désuets et livides (par exemple, les modes sombres se sont démocratisés ces 3 dernières années avec l'arrivée du mode sombre de macOS, l'équivalent Windows chez Apple), la confidentialité est aussi un large débat en ce moment quand certaines marques en font leur priorités d'autres essayent des les égaler sans succès. C'est pour cela que ce site ne sera pas indéfiniment comme il l'est là, il va évoluer. Peut-être au'il deviendra une boîte à outils, ce qui est actuellement le projet. <b>"Simplifier pour faire plus et mieux !"</b>
  </p>
</div>
<div class="col-lg-6 col-md-12 pt-5 pb-5">
<img src="/img/innovation-board.jpg" alt="Image montrant une base de données et les possibilités de données." class="img-fluid docs-img shadow w-75">
</div>
        </div>
    </div>
</div>
      <!-- Footer -->
      <?php
        include('../assets/footer.php')
      ?>
    </body>
</html>