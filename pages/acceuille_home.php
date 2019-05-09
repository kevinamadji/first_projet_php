<!DOCTYPE html>
<html>
<head> 
	<title>accueil</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Styles/style2.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include("entete.php");?>
	<div class="igg">
		<div class="container">
			<div class="row ">
				<div class="col-lg-offset-3 col-lg-6 slogan">
					<span>Mon site responsive</span><br>
					<a class="btn btn-info btn-lg" href="">CLIQUER ICI</a>
				</div>

			</div>

		</div>
	</div>
	<div class="gl">
		<div class="container hidden-xs"> <!--Permet de cacher l'element sur un tout petit ecran (telephone) -->
			<div class="row">
				<div class="col-lg-3"><span class="glyphicon glyphicon-tint" ></span></div>
				<div class="col-lg-3"><span class="glyphicon glyphicon-camera"></span></div>
				<div class="col-lg-3"><span class="glyphicon glyphicon-cloud"></span></div>
				<div class="col-lg-3"><span class="glyphicon glyphicon-euro"></span></div>
			</div>
		</div>
	</div><br><br>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<img src="../image/img1.jpg" class="img img-circle" width="350"><br>
				<p>
					Paysage photographique aux multiples couleurs de la Serranía de Hornocal, massif montagneux situé près de la ville d'Humahuaca, province de Jujuy, Argentine.
					Paysage photographique brumeux près d'Arnhem, aux Pays-Bas. Les étendues naturelles sont protégées par décret mais des capteurs de vérification du niveau des eaux ont été installés.
				</p>
			</div>
			<div class="col-lg-4">
				<img src="../image/img2.jpg" class="img img-circle" width="350"><br>
				<p>Paysage photographique aux multiples couleurs de la Serranía de Hornocal, massif montagneux situé près de la ville d'Humahuaca, province de Jujuy, Argentine.
				Paysage photographique brumeux près d'Arnhem, aux Pays-Bas. Les étendues naturelles sont protégées par décret mais des capteurs de vérification du niveau des eaux ont été installés.</p>
			</div>
			<div class="col-lg-4">
				<img src="../image/img3.jpg" class="img img-circle" width="350"><br>
				<p>Paysage photographique aux multiples couleurs de la Serranía de Hornocal, massif montagneux situé près de la ville d'Humahuaca, province de Jujuy, Argentine.
				Paysage photographique brumeux près d'Arnhem, aux Pays-Bas. Les étendues naturelles sont protégées par décret mais des capteurs de vérification du niveau des eaux ont été installés.</p>
			</div>
		</div>
	</div>
	<footer>
			<?php include("pied.php");?>

	</footer>
</body>
</html> 