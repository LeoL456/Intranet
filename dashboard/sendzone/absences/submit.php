<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication...</title>
    <link rel="stylesheet" href="https://onyos.fr/css/newcss.css">
</head>

<body style="margin-top:2rem;">

    <?php

    /* Variables */
    $date = date("d/m/Y-H:i:s:ms");
    $date2 = date('d/m/y');
    $idperson = $_POST['absent'] . '@cuisinella78-orgeval.com';
    $file_name = 'relance' . '.json';

    /* Variables E-Mail */
    $test = "00";
    $to = 'leolesimple@icloud.com';
    $subject = 'Absences - Cuisinella Villennes';
    $message = "
    <!DOCTYPE html>
    <html lang='fr'>
    <head>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Absences</title>
    <meta charset='UTF-8'>
    </head>
    <body style=\"font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;\">
    <p style='font-size: 16px;font-weight: 500;'>
    Bonjour, [CECI EST UN TEST !!!!!]<br>
    Nous constatons depuis le " . $_POST['debutabs'] . " que vous êtes absent de votre travail .<br>
    Nous vous remercions de nous faire parvenir un justificatif !<br>
    Merci de votre compréhension.
    </p>
    </body>
    </html>";
    $headers .= 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html [RFC2854]; charset=utf-8' . "\n"; // l'en-tete Content-type pour le format HTML
    $headers .= "From : noreply@onyos.fr";

    if ($test == "00") {
        mail($to, $subject, $message, $headers);
    } else{
        header('../../absence.php');
    }

    /* Attribution pour JSON */
    $str = file_get_contents('relance.json');
    $arr = json_decode($str, true);
    $arrne['id'] = $_POST['absent'];
    $arrne['debutabs'] = $_POST['debutabs'];
    $arrne['commentaires'] = $_POST['commentaires'];
    $arrne['date'] = $date;
    $arrne['date2'] = $date2;
    array_push($arr['historique'], $arrne);
    $str = json_encode($arr);
    if (json_decode($str) != null) {
        $file = fopen('relance.json', 'w');
        fwrite($file, $str);
        fclose($file);
        echo "<div class=\"success-forms\">
                        <h1>🛫 Pfiou !</h1>
                        <p>
                            Votre demande à été prise en charge. <br>
                            Le système se charge de publier ceci à son destinataire au plus vite !
                        </p>
                        </div>";
    } else {
        echo "<div class=\"error-forms\">
                        <h1>😬 Oups...</h1>
                        <p>
                            Votre demande n’a pas abouti ! <br>
                            Un souci dans l’envoi des données a fait que votre demande a été rejetée. <br>
                            Veuillez réessayer !  
                        </p>
                        </div>";
    }

    echo $to;
    ?>


</body>

</html>