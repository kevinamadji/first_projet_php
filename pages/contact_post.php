<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_perso;charset=utf8', 'root', '', array(PDO:: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
}
catch(Exception $msg){
	die('Erreur: '.$msg->getMessage());
}

$req = $bdd->prepare('INSERT INTO contacter (nom, prenom, telephone, objet, msg) VALUES (?, ?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['telephone'], $_POST['objet'], $_POST['message']));

header('Location: acceuille_home.php');
?>