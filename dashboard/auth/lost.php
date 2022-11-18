<head>
    <!--
    Formulaires de Cuisinella Villennes
    HTML 5.1 
    Version 1.4
    © Léo LESIMPLE
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Privé">
    <meta name="author" content="Léo LESIMPLE">
    <title>Récupération de compte</title>
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <div id="overlay"></div>
    <header class="dashboard-header">
        <h1>Cuisinella Villennes</h1>
    </header>
    <div class="login">
        <form action="" method="post" name="Lost_Form">
            <?php if (isset($msg)) { ?>
                <?php echo $msg; ?>
            <?php } ?>
            <h1 class='header-login d-none'>Mot de Passe oublié</h1>
            <h4 class="label-input">Sélectionnez votre identifiant.</h4>
            <small style="margin: 0; font-family:sans-serif !important;">Ce n'est <strong>pas</strong> la peine de choisir vos collègues, le système ne permet pas de détourner un mail pour avoir les identifiants de ceux-ci ! <b>En cas de <a href="https://fr.wikipedia.org/wiki/Attaque_par_force_brute" target="_blank" rel="noopener noreferrer">brute force</a>, des sanctions pourront être appliquées.</b></small>
            <select name="id" id="select_id">
                <option selected>Choisissez...</option>
                <option value="karine.lesimple">karine.lesimple</option>
                <option value="johan.coudert">johan.coudert</option>
                <option value="regis.retif">regis.retif</option>
            </select>
            <div class="btn-group">
                <input name="Submit" type="submit" value="Envoyer  >" class="btn-submit">
                <a href="./login.php" class="mdp-lost">
                    < Retour</a>
            </div>
        </form>
    </div>
    <?php
    $id = $_POST['id'];

    $karinelesimple = 'karine.lesimple@cuisinella78-orgeval.com';
    $johancoudert = 'johan.coudert@cuisinella78-orgeval.com';
    $regisretif = 'regis.retif@cuisinella78-orgeval.com';

    $subject = 'Voici vos identifiants !';

    $message1 = '
    <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de Passe oublié</title>
</head>

<body style="background-color: #1a1a1a;">
    <nav style="padding: 20px;">
        <div style="background:none;width:70px; height:70px !important;margin: auto;">
            <img src="https://onyos.fr/img/logo-cuisinella-site.png" alt="Logo" style="width:70px">
        </div>
        <div
            style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
            <h1 style="text-align:start; font-size: 30px;">Vous avez demandé une récuperation de compte !</h1>
            <p>
                Bonjour, <br>

                Voici vos identifiants pour le Dashboard Manager,<br><br>
                Identifiants : <strong>karine.lesimple</strong><br>
                Mot de Passe : <strong>mVyM!!18t-Y6</strong><br><br>

                Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                Pour rappel, les attaques par "brute force" sont sanctionnés. Les sanctions pouvant aller d\'un simple rappel à l\'ordre oral à une action en justice (ne sera pas utilisée dans le cadre de l\'utilisation d\'Intranet). 
            </p>
        </div>
    </nav>
</body>

</html>
    ';
    $message2 = '
    <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de Passe oublié</title>
</head>

<body style="background-color: #1a1a1a;">
    <nav style="padding: 20px;">
        <div style="background:none;width:70px; height:70px !important;margin: auto;">
            <img src="https://onyos.fr/img/logo-cuisinella-site.png" alt="Logo" style="width:70px">
        </div>
        <div
            style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
            <h1 style="text-align:start; font-size: 30px;">Vous avez demandé une récuperation de compte !</h1>
            <p>
                Bonjour, <br>

                Voici vos identifiants pour le Dashboard Manager,<br><br>
                Identifiants : <strong>johan.coudert</strong><br>
                Mot de Passe : <strong>x1CqIC24!d!!</strong><br><br>

                Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                Pour rappel, les attaques par "brute force" sont sanctionnés. Les sanctions pouvant aller d\'un simple rappel à l\'ordre oral à une action en justice (ne sera pas utilisée dans le cadre de l\'utilisation d\'Intranet). 
            </p>
        </div>
    </nav>
</body>

</html>';
    $message3 = '
    <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de Passe oublié</title>
</head>

<body style="background-color: #1a1a1a;">
    <nav style="padding: 20px;">
        <div style="background:none;width:70px; height:70px !important;margin: auto;">
            <img src="https://onyos.fr/img/logo-cuisinella-site.png" alt="Logo" style="width:70px">
        </div>
        <div
            style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
            <h1 style="text-align:start; font-size: 30px;">Vous avez demandé une récuperation de compte !</h1>
            <p>
                Bonjour, <br>

                Voici vos identifiants pour le Dashboard Manager,<br><br>
                Identifiants : <strong>regis.retif</strong><br>
                Mot de Passe : <strong>MI09Kpakdf!$</strong><br><br>

                Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                Pour rappel, les attaques par "brute force" sont sanctionnés. Les sanctions pouvant aller d\'un simple rappel à l\'ordre oral à une action en justice (ne sera pas utilisée dans le cadre de l\'utilisation d\'Intranet). 
            </p>
        </div>
    </nav>
</body>

</html>';

    if ($id == 'karine.lesimple') {
        mail($karinelesimple, $subject, $message1, $headers);
    }
    if ($id == 'johan.coudert') {
        mail($karinelesimple, $subject, $message2, $headers);
    }
    if ($id == 'regis.retif') {
        mail($karinelesimple, $subject, $message3, $headers);
    }
    ?>

</body>

</html>