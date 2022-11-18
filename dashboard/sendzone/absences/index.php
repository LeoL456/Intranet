<?php
$var = 0;
$to = 'leolesimple@icloud.com';
$subject = '[TEST] - Cuisinella Villennes';
$message = "Pourquoi ça marche pas !!!!!!!!!!!!!!!!!!";
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html [RFC2854]; charset=utf-8' . "\n"; // l'en-tete Content-type pour le format HTML
$headers = "From : noreply@onyos.fr";

if ($message == "Pourquoi ça marche pas !!!!!!!!!!!!!!!!!!") {
    mail($to, $subject, $message, $headers);
    echo 'Mail parti à' . $to;
} else{
    echo "Mail pas parti";
}
