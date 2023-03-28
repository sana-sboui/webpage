<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verifier la connection</title>
</head>
<body>
	<?php
		
		$ndu = $_POST['ndu'];
		$mdp = $_POST['mdp'];

		$connec = mysqli_connect("localhost", "root", "","formulaire");
		$sql = "SELECT * FROM signup WHERE ndu='$ndu' and mdp='$mdp'";
		$requete = mysqli_query($connec, $sql);

		if( $result = mysqli_fetch_object( $requete) ){
				header("Location:welcomepage.php");
		}else{
				echo("Nom de l'utilisateur ou mot de passe incorrect");
		}
	?>
</body>
</html>