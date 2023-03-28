<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cycle Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style7.css">
</head>
<body style="margin: 50px;"> 
	<div class="cycle-form">
		<h1 style="text-align:center;">Cycle Data:</h1>
	 	<br>
	 	<table class="table">
	 		<thead>
	 			<tr>
	 				<th>ID</th>
	 				<th>Entreprise</th>
	 				<th>N°Salle</th>
	 				<th>N°Action</th>
	 				<th>Théme de formation</th>
	 				<th>Mode de formation</th>
	 				<th>Lieu de déroulement</th>
	 				<th>Gouvernorat</th>
	 				<th>Période du</th>
	 				<th>Période au</th>
	 				<th>Horaire de</th>
	 				<th>Horaire à</th>
	 				<th>Pause de</th>
	 				<th>Pause à</th>
	 				<th>Mise à jour</th>
	 				<th>supprimer</th>
	 			</tr>
	 		</thead>
	    	<tbody>
	 			<?php
	 				$connc = mysqli_connect("localhost", "root", "", "formulaire"); 
	 				$sql = "SELECT * FROM cycle ORDER BY ID";
	 				$requete = mysqli_query($connc, $sql);
	 				//read data of each row
	 				while ($result = mysqli_fetch_object($requete)){
	 					echo("<tr><td>".$result->ID."</td>
	 						<td>".$result->Entreprise."</td>
	 						<td>".$result->NSalle."</td>
	 						<td>".$result->NAction."</td>
	 						<td>".$result->Themedeformation."</td>
	 						<td>".$result->Modedeformation."</td>
	 						<td>".$result->Lieudederoulement."</td>
	 						<td>".$result->Gouvernorat."</td>
	 						<td>".$result->Periodedu."</td>
	 						<td>".$result->Periodeau."</td>
	 						<td>".$result->Horairede."</td>
	 						<td>".$result->Horairea."</td>
	 						<td>".$result->Pausede."</td>
	 						<td>".$result->Pausea."</td>
	 						<td>"."<a href=\"update.php?ID=".$result->ID."\">Mise_à_jour</a></td>
	 						<td>"."<a href=\"delete.php?ID=".$result->ID."\">supprimer</a></td></tr>\n");	
	 				}
	 			?>
	 		</tbody>
	 	<a href="welcomepage.php">Retour à l'accueil</a>
	 	</table>
 	</div>
</body>
</html>