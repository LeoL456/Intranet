<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <!-- 
        Steve
        Script d'envoi de données
        © Léo LESIMPLE 
        Version 1.3
     -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/newcss.css">
</head>

<body style="margin-top:2rem;">
    <?php
    $date = date('d-m-y-h-i-s-ms');
    $date2 = date('d-m-y');
    $file_name = 'forms-result' . '.json';
    $inputtext = $_POST['ARnumber'];
    $vendeurnom = $_POST['vendeur'];
    $to = 'karine.lesimple@cuisinella78-orgeval.com';
    $subject = $vendeurnom . ' a fait une demande de SAV';
    $message = $vendeurnom . ' vient d\'envoyer une nouvelle demande de SAV via le formuaire <br> Lien direct vers le tableau : <a href="https://onyos.fr/dashboard/index.php">ici</a>.';

    $str = file_get_contents('./forms-result.json');
    $arr = json_decode($str, true);
    $arrne['vendeur'] = $_POST['vendeur'];
    $arrne['Nom'] = $_POST['poseurs'];
    $arrne['Duree'] = $_POST['duree'];
    $arrne['Poseurs'] = $_POST['nbposeurs'];
    $arrne['poseursdemande'] = $_POST['poseursdemande'];
    $arrne['customer'] = $_POST['customer'];
    $arrne['ARnumber'] = $_POST['ARnumber'];
    $arrne['comments'] = $_POST['comments'];
    $arrne['date'] = $date;
    $arrne['date2'] = $date2;
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers = "From : noreply@onyos.fr" . "\n";
    $headers .= 'Content-type: text/html [RFC2854]; charset=utf-8' . "\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'Reply-To: ' . $expediteur . "\n"; // Mail de reponse
    mail($to, $subject, $message, $headers);
    array_push($arr['employees'], $arrne);
    $str = json_encode($arr);

    if (json_decode($str) != null) {
        $file = fopen('./forms-result.json', 'w');
        fwrite($file, $str);
        fclose($file);
        echo "
        <div class=\"success-forms\">
        <h1>🛫 Pfiou !</h1>
        <p>
            Votre demande à été prise en charge. <br>
            Je me charge d’envoyer ceci à son destinataire au plus vite ! <br>
        </p>
        </div>
        ";
    } else {
        echo "
        <div class=\"error-forms\">
            <h1>😬 Oups...</h1>
            <p>
                Votre demande n’a pas abouti ! <br>
                Un souci dans l’envoi des données a fait que votre demande a été rejetée. <br>
                Veuillez réessayer !  <br>
        </p>
        </div>";
    }

    if($retour == 'Johan Coudert'){
        $retour = 'johan.coudert@cuisinella78-orgeval.com';
        }
    if($retour == 'Audrey Tichit'){
        $retour = 'audrey.tichit@cuisinella78-orgeval.com';
    }
    if($retour == 'Khaoula Hammami'){
        $retour = 'khaoula.hammami@cuisinella78-orgeval.com';
    }
    if($retour == 'Regis Retif'){
        $retour = 'regis.retif@cuisinella78-orgeval.com';
    }
    if($retour == 'Kaled Salhi'){
        $retour = 'kaled.salhi@cuisinella78-orgeval.com';
    }
    if($retour == 'Tom Coudert'){
        $retour = 'tom.coudert@cuisinella78-orgeval.com';
    }
    if($retour == 'Dinis Ferreira'){
        $retour = 'dinis.ferreira@cuisinella78-orgeval.com';
    }
    if($retour == 'Johan Sacilotto'){
        $retour = 'johan.sacilotto@cuisinella78-orgeval.com';
    }

    $subjectr = 'Votre demande de SAV a bien été prise en compte !';
    $messager = '
    <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d\'envoi !</title>
</head>

<body style="background-color: #1a1a1a;">
    <nav style="padding: 20px;">
        <div style="background:none;width:70px; height:70px !important;margin: auto;">
            <img src="https://onyos.fr/img/logo-cuisinella-site.png" alt="Logo" style="width:70px">
        </div>
        <div
            style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto; line-height: 1.52;">
            <h1 style="text-align:start; font-size: 30px;">Votre demande a bien été prise en charge !</h1>
            <p>
                Bonjour\' . $POST[\'vendeur\'] . \', <br>
                Je suis Steve, le bot qui va se charger de votre demande ! J\'ai bien reçu votre demande, je la transfère
                au plus vite à la base de données, vous pourrez d\'ici quelques minutes, vérifier sur le <a
                    style="text-decoration: none; color:rgb(255, 68, 68);" href="https://vendeur.onyos.fr">Dashboard
                    Vendeurs</a> la bonne réception de votre demande ! <br><br>
                Dans l\'objectif du programme 100% secret*, je m\'engages à traîter votre demande contenant, au regard de
                la loi, des informations sensibles (nom du client) le plus confidentiellement possible. <br> Pour plus
                d\'informations concernant la confidentialité, veuillez contacter Léo, par <a
                    style="text-decoration: none; color:rgb(255, 70, 70);" href="mailto:leolesimple@onyos.fr">mail</a>
                <br>
                <i><small>(Si le lien ne fonctionne pas, copier-coller, l\'adresse suivante :
                        leolesimple@onyos.fr)</small></i><br>
                <i><small>*100% secret est un programme lancé en avril 2022, par Léo pour retirer l\'entiereté des
                        cookies de ses sites, pour une confidentialité plus forte que jamais 😉 !</small></i>
            </p>
        </div>
    </nav>
</body>

</html>
    ';
    mail($retour,$subjectr,$messager, $headers);
    ?>
</body>

</html>