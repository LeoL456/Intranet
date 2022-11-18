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
    <title>Connectez-vous</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <div id="overlay"></div>
    <header class="dashboard-header">
        <h1>Cuisinella Villennes</h1>
    </header>
    <div class="login">
        <form action="" method="post" name="Login_Form">
            <?php if (isset($msg)) { ?>
                <?php echo $msg; ?>
            <?php } ?>
            <h1 class='header-login d-none'>Connexion</h1>
            <div>
                <div class="username">
                    <h4 class='label-input'>Utilisateur</h4>
                    <input type="text" class="login-input" name="Username" placeholder="Nom d'utilisateur" aria-label="Username" aria-describedby="basic-addon1" autocomplete="on" required autofocus>
                </div>
                <div class="password">
                    <h4 class='label-input'>Mot de Passe</h4>
                    <input type="password" class="login-input" name="Password" placeholder="Mot de Passe" aria-label="Username" aria-describedby="basic-addon1" autocomplete="on" required>
                </div>
                <div class="btn-group">
                    <input name="Submit" type="submit" value="Connexion  >" class="btn-submit">
                    <a href="./lost.php" class="mdp-lost">ID/Mot de Passe oublié</a>
                </div>
        </form>
    </div>
    <?php session_start();

    if (isset($_POST['Submit'])) {

        $logins = array('karine.lesimple' => 'mVyM!!18t-Y6', 'johan.coudert' => 'x1CqIC24!d!!', 'regis.retif' => 'MI09Kpakdf!$', 'audrey.tichit' => '6Lm?q82kZ_', 'khaoula.hammami' => '4!Lv8K5ri!', 'tom.coudert' => 'Xn?Z655c!y', 'kaled.salhi' => 'NC!7d?7bz5', 'johan.sacilotto' => "N-L6z5f!3z", "dinis.ferreira" => "C84Hv-a8-g", 'jessy.laram' => 'eWQv_82-e7', 'dev.admin' => 'iOSBootstrap01?', 'vendeurs' => 'ewC9Sx2A63uG');

        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

        if (isset($logins[$Username]) && $logins[$Username] == $Password) {
            $_SESSION['UserData']['Username'] = $logins[$Username];
            header("location:../index.php");
            exit;
        } else {
            echo "<p class='p-incorrect'>ID ou Mot de Passe incorrects.</p>";
        }
    }
    ?>

</body>

</html>