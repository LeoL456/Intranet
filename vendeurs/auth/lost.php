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
            <h4 class="label-input" id="dynamictxt">Sélectionnez votre identifiant.</h4>
            <select name="id" id="select_id">
                <option selected>Choisir...</option>
                <option value="johan.coudert">johan.coudert</option>
                <option value="tom.coudert">tom.coudert</option>
                <option value="dinis.ferreira">dinis.ferreira</option>
                <option value="khaoula.hammami">khaoula.hammami</option>
                <option value="jessy.laram">jessy.laram</option>
                <option value="karine.lesimple">karine.lesimple</option>
                <option value="regis.retif">regis.retif</option>
                <option value="johan.sacilotto">johan.sacilotto</option>
                <option value="kaled.salhi">kaled.salhi</option>
                <option value="audrey.tichit">audrey.tichit</option>
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

    $email = $id . '@cuisinella78-orgeval.com';

    $subject = 'Voici vos identifiants !';

    $message = '';

    $lesimple = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>karine.lesimple</strong><br>
                        Mot de Passe : <strong>mVyM!!18t-Y6</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>
        ';
    $johancoudert = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>johan.coudert</strong><br>
                        Mot de Passe : <strong>x1CqIC24!d!!</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $retif = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>regis.retif</strong><br>
                        Mot de Passe : <strong>MI09Kpakdf!$</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $tomcoudert = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>tom.coudert</strong><br>
                        Mot de Passe : <strong>Xn?Z655c!y</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $ferreira = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>dinis.ferreira</strong><br>
                        Mot de Passe : <strong>C84Hv-a8-g</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $hammami = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>khaoula.hammami</strong><br>
                        Mot de Passe : <strong>4!Lv8K5ri!</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $laram = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>jessy.laram</strong><br>
                        Mot de Passe : <strong>eWQv_82-e7</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $sacilotto = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>johan.sacilotto</strong><br>
                        Mot de Passe : <strong>N-L6z5f!3z</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $salhi = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>kaled.salhi</strong><br>
                        Mot de Passe : <strong>NC!7d?7bz5</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';
    $tichit = '
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
                </div>
                <div
                    style="color: white; font-family:-apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; max-width:700px !important; margin-left:auto; margin-right:auto;line-height: 1.52;">
                    <h1 style="text-align:start; font-size: 30px;">Voici vos identifiants !</h1>
                    <p>
                        Bonjour, <br>

                        Voici vos identifiants pour le Dashboard Vendeurs,<br><br>
                        Identifiants : <strong>audrey.tichit</strong><br>
                        Mot de Passe : <strong>6Lm?q82kZ_</strong><br><br>

                        Vous n\'avez pas demandé de récupération de comptes ? Signalez-le au Webmaster immédiatement. <br><br>
                    </p>
                </div>
            </nav>
        </body>

        </html>';

    /* Défnition du message */
    if ($id == 'karine.lesimple') {
        $message = $lesimple;
    }

    if ($id == 'johan.coudert') {
        $message = $johancoudert;
    }

    if ($id == 'regis.retif') {
        $message = $retif;
    }

    if ($id == 'tom.coudert') {
        $message = $coudert;
    }

    if ($id == 'dinis.ferreira') {
        $message = $ferreira;
    }

    if ($id == 'khaoula.hammami') {
        $message = $hammami;
    }

    if ($id == 'jessy.laram') {
        $message = $laram;
    }

    if ($id == 'johan.sacilotto') {
        $message = $sacilotto;
    }

    if ($id == 'kaled.salhi') {
        $message = $salhi;
    }

    if ($id == 'audrey.tichit') {
        $message = $tichit;
    }

    /* Déclaration des headers */
    $headers  .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html [RFC2854]; charset=utf-8' . "\n";
    $headers .= "From : noreply@onyos.fr" . "\n";

    /* Envoi du mail */
    mail($email, $subject, $message, $headers);

    ?>

</body>

</html>