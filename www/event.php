<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <!--
    Formulaires de Cuisinella Villennes
    HTML 5.1 
    Version 1.3
    © Léo LESIMPLE
    -->
  <meta charset="UTF-8">
  <meta name="description" content="Faites vos demandes de SAV">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Léo LESIMPLE">

  <title>Pro. Sous tous les angles • Évènement Spécial</title>

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/nightmode.css">
  <link rel="stylesheet" href="css/darkmode.css">
  <link rel="stylesheet" href="css/newcss.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <script>
    function initLocalClocks() {
      // Get the local time using JS
      var date = new Date;
      var seconds = date.getSeconds();
      var minutes = date.getMinutes();
      var hours = date.getHours();

      // Create an object with each hand and it's angle in degrees
      var hands = [{
          hand: 'hours',
          angle: (hours * 30) + (minutes / 2)
        },
        {
          hand: 'minutes',
          angle: (minutes * 6)
        },
        {
          hand: 'seconds',
          angle: (seconds * 6)
        }
      ];
      // Loop through each of these hands to set their angle
      for (var j = 0; j < hands.length; j++) {
        var elements = document.querySelectorAll('.' + hands[j].hand);
        for (var k = 0; k < elements.length; k++) {
          elements[k].style.webkitTransform = 'rotateZ(' + hands[j].angle + 'deg)';
          elements[k].style.transform = 'rotateZ(' + hands[j].angle + 'deg)';
          // If this is a minute hand, note the seconds position (to calculate minute position later)
          if (hands[j].hand === 'minutes') {
            elements[k].parentNode.setAttribute('data-second-angle', hands[j + 1].angle);
          }
        }
      }
    }
    if (degrees[j].hand === 'minutes') {
      elements[k].parentNode.setAttribute('data-second-angle', degrees[j + 1].degree);
    }
  </script>
  <style>
    .big-img {
      width: 100% !important;
      margin: auto !important;
      display: flex;
      justify-content: center;
      align-content: center;
      padding: 2rem;
    }

    .big-img>img {
      border-radius: 2.5rem;
      max-width: 45%;
      margin: 4rem;
      margin-bottom: 0 !important;
      filter: drop-shadow(rgba(0, 0, 0, 0.15) 0px 20px 20px);
    }

    .event-title {
      font-size: 96px;
      text-align: center;
      margin-top: 1.5rem;
      line-height: 1.2;
      margin-bottom: 0rem !important;
    }

    .event-subtitle {
      font-size: 28px !important;
      text-align: center;
      max-width: 1000px;
      margin: auto !important;
      line-height: 1.2;
    }

    .expl>p {
      font-size: 24px !important;
    }

    .principal-para {
      margin-bottom: .5rem !important;
    }

    .link-outline {
      padding: 0.7rem 1.7rem;
    }

    .img-event {
      border-radius: 22px !important;
      width: auto !important;
      height: 400px !important;
      margin: 2.5rem 0;
      filter: drop-shadow(rgba(0, 0, 0, 0.15) 0px 20px 20px);
      transform: rotate(5deg);
    }

    .event-details {
      width: 100% !important;
      padding: 0rem;
      display: flex;
      flex-wrap: wrap;
      align-content: center;
      justify-content: center;
      align-items: center;
      gap: 1rem;
      margin-top: 4rem;
    }

    .details-container {
      display: inline-flex;
      flex-direction: row;
      flex-wrap: nowrap;
      align-content: center;
      justify-content: center;
      align-items: center;
      width: 100% !important;
    }

    .details-container-invert {
      display: inline-flex;
      flex-direction: row-reverse;
      flex-wrap: nowrap;
      align-content: center;
      justify-content: center;
      align-items: center;
      width: 100% !important;
    }

    .details-illustration {
      width: 50%;
      display: flex;
      justify-content: center;
      flex-direction: row;
      flex-wrap: wrap;
      align-content: center;
      align-items: center;
      height: 287px;
    }

    .details-txt {
      width: 50%;
    }

    .clock {
      border-radius: 50%;
      background: #ddd url(./img/svg/hours.svg) no-repeat center;
      background-size: 88%;
      height: 8em;
      padding: 1%;
      position: relative;
      width: 8em;
      border: 5px solid #000;
      margin-right: 2.5rem;
    }

    .clock.simple:after {
      background: #000 !important;
      border-radius: 50% !important;
      content: "";
      position: absolute !important;
      left: 50% !important;
      top: 50% !important;
      transform: translate(-50%, -50%) !important;
      width: 5% !important;
      height: 5% !important;
      z-index: 100000 !important;
    }

    .minutes-container,
    .hours-container,
    .seconds-container {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }

    .hours {
      background: #000;
      height: 20%;
      left: 48.75%;
      position: absolute;
      top: 30%;
      transform-origin: 50% 100%;
      width: 2.5%;
    }

    .minutes {
      background: #000;
      height: 40%;
      left: 49%;
      position: absolute;
      top: 10%;
      transform-origin: 50% 100%;
      width: 2%;
    }

    .seconds {
      background: #000;
      height: 45%;
      left: 49.5%;
      position: absolute;
      top: 14%;
      transform-origin: 50% 80%;
      width: 1%;
      z-index: 8;
    }

    @keyframes rotate {
      100% {
        transform: rotateZ(360deg);
      }
    }

    .hours-container {
      animation: rotate 43200s infinite linear;
    }

    .minutes-container {
      animation: rotate 3600s infinite linear;
    }

    .seconds-container {
      animation: rotate 60s infinite linear;
    }

    .time {
      font-size: 45px;
      padding: 0 4rem;
      margin-bottom: 1rem !important;
    }

    .details-txt>p {
      font-size: 20px;
      font-weight: 500;
    }

    .iconside>img {
      display: block;
    }

    .iconside {
      font-size: 40px !important;
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      align-content: center;
      justify-content: center;
      align-items: center;
    }

    #calendarbtn {
      display: flex;
      width: fit-content;
      flex-direction: row;
      flex-wrap: nowrap;
      align-content: center;
      justify-content: center;
      align-items: center;
    }

    .calendar-container {
      margin-left: 4rem !important;
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
    }
  </style>

</head>

<body onload="initLocalClocks()">
  <?php
  include('./assets/nav.php')
  ?>

  <div class="event-hero">
    <div class="big-img">
      <img src="./img/spoiler_event.jpg" alt="Spoiler de l'événement" data-aos-duration="1700" data-aos="zoom-in-up">
    </div>
    <h1 class="event-title" data-aos-duration="1300" data-aos="zoom-in-down">Pro. Sous tous les angles.</h1>
    <p class="event-subtitle" data-aos-duration="1100" data-aos="zoom-in-down">Rejoignez-nous pour cet événement spécial sur les futures nouveautés d'Intranet et des Dashboards. </p>
  </div>
  <div class="event-details">
    <!-- Date -->
    <div class="details-container">
      <div class="details-txt" data-aos-duration="1700" data-aos="fade-right">
        <h2 class="time">Le 8 Septembre 2022</h2>
        <p style="margin-left:4rem; margin-top:0">C'est la rentrée et pour fêter ça, on vous a réservé des nouveautés époustouflantes. La présentation se passera pendant la réunion du matin. Un diaporama pour illustrer sera de la partie, c'est mieux en image !</p>
      </div>
      <div class="details-illustration">
        <img src="./img/Calendar.svg" alt="" data-aos-duration="1700" data-aos="fade-left">
      </div>
    </div>
    <!-- Heure -->
    <div class="details-container-invert">
      <div class="details-txt" data-aos-duration="1700" data-aos="fade-left">
        <h2 class="time">À 9h30 pétante !</h2>
        <p style="margin-left:4rem; margin-top:0">Quoi de mieux que de commencer la journée avec des annonces de nouveautés ? La présentation sera dense alors veillez à être à l'heure sinon vous raterez des annonces.</p>
      </div>
      <div class="details-illustration" data-aos-duration="1700" data-aos="fade-right" style="height: 287px;">
        <article class="clock">
          <div class="hours-container">
            <div class="hours" style="transform: rotateZ(535deg);"></div>
          </div>
          <div class="minutes-container" data-second-angle="126">
            <div class="minutes" style="transform: rotateZ(300deg);"></div>
          </div>
          <div class="seconds-container">
            <div class="seconds" style="transform: rotateZ(126deg);"></div>
          </div>
        </article>
      </div>
    </div>
    <!-- Calendar -->
    <div class="details-container">
      <div class="details-txt" data-aos-duration="1700" data-aos="fade-up">
        <h2 class="time" style="line-height: 0.8">Ajoutez-le à votre calendrier.</h2>
        <p style="margin-left:4rem; margin-top:0">Vous avez la possibilité de télécharger un fichier correspondant à votre App Calendrier (iOS, Google Agenda, Outlook ou encore Proton Calendar). Téléchargez le fichier correspondant ci dessous, ouvrez-le, vous avez un fichier texte explicatif à côté pour vous en servir.</p>
        <div class="calendar-container">
          <a href="./img/ics/event.ics" class="link link-secondary-hero" style="display:flex;width:fit-content" data-aos-duration="1700" data-aos-delay="1700" data-aos="fade-up">
            <img src="./img/svg/apple-logo.svg" style="height:20px; margin-right:3px;"> Calendar</a>
          <a href="./img/ics/event.ics" class="link link-secondary-hero" id="calendarbtn" data-aos-duration="1700" data-aos-delay="2100" data-aos="fade-up">
            <img src="./img/svg/google-logo.svg" style="height:20px; margin-right:3px;" alt=""> Agenda</a>
          <a href="./img/ics/event.ics" class="link link-secondary-hero" id="calendarbtn" data-aos-duration="1700" data-aos-delay="2400" data-aos="fade-up">
            <img src="./img/svg/Microsoft_Office_Outlook_(2018–present).svg.png" style="height:20px; margin-right:3px;" alt=""> | Microsoft Outlook</a>
        </div>
      </div>
      <div class="details-illustration">
        <img src="./img/calendar-upload.jpg" style="width: 100%" data-aos-duration="1700" data-aos="fade-down">
      </div>
    </div>
  </div>
  </div>

  <!-- Footer -->
  <?php
  include('./assets/footer.php')
  ?>
  <script>

  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>