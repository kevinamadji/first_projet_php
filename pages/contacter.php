<!DOCTYPE html>
<html>
<head>
	<title>Gestion de contact </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<?php
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=projet_perso;charset=utf8', 'root', '', array(PDO:: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));

	}
	catch(Exception $e){
		die('Erreur :'. $e->getMessage());
	}
	$reponse = $bdd->query('SELECT * FROM contacter  ');

	if (isset($_POST['mdp']) AND $_POST['mdp'] == 'successbts2019' ) {
		?>
		<p>
			<strong>Bonjour </strong> Monsieur <strong><?php echo $_POST['nom'];  ?></strong>.<br>
			
			
		</p>
		<p>Voici les messages laissés par nos visiteurs...</p>

		<table border class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nom</th>
					<th scope="col">Prenom</th>
					<th scope="col">Telephone</th>
					<th scope="col">Objet</th>
					<th scope="col">Message</th>
				</tr>
			</thead>

				<tbody>
					<?php
					while ($donnees = $reponse->fetch()) {
						?>
						<tr>
							<td><?php echo htmlspecialchars($donnees['nom']) ?></td>
							<td><?php echo htmlspecialchars($donnees['prenom']) ?></td>
							<td><?php echo htmlspecialchars($donnees['telephone']) ?></td>
							<td><?php echo htmlspecialchars($donnees['objet']) ?></td>
							<td><?php echo htmlspecialchars($donnees['msg']) ?></td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
			<?php		
		}
		else{
			echo "Votre mot de passe est incorrect, vous ne pouvez par avoir acces à l'espace administrateur ";
		}
		$reponse->CloseCursor();
		?>

	</body>
	</html>