<!DOCTYPE html>
<html>
<head>
	<title>Mon second formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Styles/style2.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-image: url('../image/img5.jpg')">
	<header>
		<?php include("entete.php");?>
	</header>
	<div class="cont">
		<h3>Contact</h3>
		<div class="container formulaire">
			<div class="row">
				<form action="contact_post.php" method="POST">
					<p><div class="row">
						<div class="col-lg-5"><input type="text" name="nom" placeholder="Nom" class="form-control"></div>
						<div class="col-lg-offset-1 col-lg-5"><input type="text" name="prenom" placeholder="Prenom" class="form-control"></div>
					</div></p>
					<p><div class="row">
						<div class="col-lg-5"><input type="telephone" name="telephone" placeholder="Telephone" class="form-control"><br></div>
						<div class=" col-lg-offset-1 col-lg-5"><input type="text" name="objet" placeholder="Objet" class="form-control"><br></div>
					</div></p>
					<p><div class="row">
						<div class="col-lg-11 mess">
							<textarea name="message" id="Message" rows="10" cols="" placeholder="Messsage" class="form-control"></textarea>
						</div>
					</div>	</p>
					<p><div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-offset-2  col-lg-1"><button type="submit" class="btn btn-success "  style="width: 250px;">Envoyer</button></div>
								<div class="col-lg-offset-2  col-lg-1"><button type="reset" class="btn btn-danger " style="width: 250px;">Annuler</button></div>
							</div>
							
						</div>

					</div></p>

				</form>
				<p><div class="row">
					<div class="col-lg-offset-4 col-lg-4"><a class="btn btn-warning" style="width: 250px;" href="administrateur.php">Espace Admin</a></div>
					
				</div>
					
				</p>
			</div>
			

		</div>
	</div>

	<footer>
			<?php include("pied.php");?>

	</footer>
	<?php
		try{
			$bdd = new PDO('mysql;host=localhost;dbname=projet_perso', 'root', '');
		}
		catch(Exception $msg){
			die('Erreur: '.$msg->getMessage());
		}
	?>


	<?php include("pied.php");?>


</body>
</html>