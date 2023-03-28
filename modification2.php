<?php
	$cnx = mysqli_connect("localhost", "root", "", "formulaire");
	$Nom = $_POST['Nom'];
	$Prénom = $_POST['Prénom'];
	$Spécialité = $_POST['Spécialité'];
	$Directeur = $_POST['Directeur'];
	$ID = $_POST['ID'];

	$sql = "UPDATE formateur SET 	Nom = '$Nom',
								Prénom = '$Prénom',
								Spécialité = '$Spécialité',
								Directeur = '$Directeur'
							 WHERE ID = '$ID'";
	$requete = mysqli_query($cnx, $sql) or die( mysql_error() );

	if($requete){
		header("Location:showdb2.php");
	}else{
		echo("la modification a échoué");
	}
?>

