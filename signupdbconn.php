<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$connc = mysqli_connect('localhost', 'root', '', 'formulaire');
		$ndu = $_POST['ndu'];
		$mdp = $_POST['mdp'];
		
		//Création de la requete SQL:

		$sql = "INSERT INTO signup (ndu, mdp) VALUES ('$ndu', '$mdp')";

		//Exécution de la requete SQL:

		$req = mysqli_query($connc, $sql) or die(mysqli_error());

		//affichage des résultats pour savoir si l'insertion a marché:

		if ($req){
			header("Location:login.php");
		} else{
			echo("L'insertion a échoué");
		}
	?>
</body>