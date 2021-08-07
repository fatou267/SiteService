<?php 
session_start();
$connexion = new PDO('mysql:host=fdb28.awardspace.net;dbname=3548671_bambasocio;', '3548671_bambasocio',')WH9Ninh8p.CIjZU');

if (isset($_GET['idUti']) && !empty($_GET['idUti'])) {
	$id = $_GET['idUti'];
	
	$sql = "DELETE  FROM Utilisateur WHERE idUti = ?";
	$result = $connexion->prepare($sql);



	 $result->execute(array($id));
	 
	 	header("Location: utilisateur.php");
	 
}
else
{
	echo("Utilisateur introuvable");
}


 ?>