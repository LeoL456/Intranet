<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Remise à zéro de la base de données</title>
	<style>
		@import url(https://onyos.fr/css/newcss.css);

		body {
			background: #eaeef6;
			padding: 1rem;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			text-align: center;
		}

		.plug-in-info {
			position: absolute;
			bottom: 0 !important;
			right: 0 !important;
			padding: .5rem;
		}
	</style>
</head>

<body>
	<?php

	// input data
	$array = array(
		"navette" => array()
	);

	// encode json
	$json = json_encode($array);

	//generate json
	file_put_contents("navette-result.json", $json);

	?>
	<h1 class="db-title">Votre base de données a bien été remise à zéro.</h1>
	<p class="db-p"><b>Attention ! Cette opération est irrévocable ! Si vous avez réinitialisé cette base de données par erreur, adressez vous au Développeur pour récupérer les données perdues !</b></p>
	<a href="https://dashboard.onyos.fr/navette.php" class="link link-principal">Revenir au Dashboard</a>
	<div class="plug-in-info">
		Erase'it by Léo Lesimple /
		Version 1.0 <br>
	</div>
</body>

</html>