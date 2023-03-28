<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$connc = mysqli_connect('localhost', 'root', '', 'formulaire');
		$Nom = $_POST['Nom'];
		$Prénom = $_POST['Prénom'];
		$Spécialité = $_POST['Spécialité'];
		$Directeur = $_POST['Directeur'];

		//Création de la requete SQL:

		$sql = "INSERT INTO formateur (Nom, Prénom, Spécialité, Directeur) VALUES ('$Nom', '$Prénom', '$Spécialité', '$Directeur')";

		//Exécution de la requete SQL:

		$req = mysqli_query($connc, $sql) or die(mysqli_error());

		//affichage des résultats pour savoir si l'insertion a marché:

		if ($req){
			header("Location:formateur.php");
		} else{
			echo("L'insertion a échouée");
		}
	?>
</body>