<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
</head>
<body>
	<?php
		$conn = mysqli_connect('localhost', 'root', '', 'formulaire');
		$Nom = $_POST['Nom'];
		$Prénom = $_POST['Prénom'];
		$NCIN = $_POST['NCIN'];
		$Directionservice = $_POST['Directionservice'];
		$Entreprise = $_POST['Entreprise'];
	 
	 	//Création de la requete SQL:

	 	$stmt = "INSERT INTO participant (Nom, Prénom, NCIN, Directionservice, Entreprise) VALUES('$Nom', '$Prénom', '$NCIN', '$Directionservice', '$Entreprise')";

	 	//Exécution de la requete SQL:

	 	$requete = mysqli_query($conn, $stmt) or die(mysqli_error());

	 	//affichage des résultats pour savoir si l'insertion a marché:

	 	if ($requete){
			header("Location:participant.php");		
	 	} else{
	 		echo("L'insertion a échoué");
	 	}
	 ?>
</body>
 </html>