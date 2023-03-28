<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Participant Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style8.css">
</head>
<body style="margin: 50px;"> 
	<div class="participant-form">
		<h1 style="text-align:center;">Participant Data:</h1>
	 	<br>
	 	<table class="table">
	 		<thead>
	 			<tr>
	 			 	<th>ID</th>
	 				<th>Nom</th>
	 				<th>Prénom</th>
	 				<th>N°CIN</th>
	 				<th>Direction/service</th>
	 				<th>Entreprise</th>
	 				<th>Mise à jour</th>
	 				<th>Supprimer</th>
	 			</tr>
	 		</thead>
	    	<tbody>
	 			<?php
	 				$connc = mysqli_connect("localhost", "root", "", "formulaire"); 
	 				$sql = "SELECT * FROM participant ORDER BY ID";
	 				$requete = mysqli_query($connc, $sql);
	 				//read data of each row
	 				while ($result =mysqli_fetch_object($requete)){
	 					echo("<tr><td>".$result->ID."</td>
	 						<td>".$result->Nom."</td>
	 						<td>".$result->Prénom."</td>
	 						<td>".$result->NCIN."</td>
	 						<td>".$result->Directionservice."</td>
	 						<td>".$result->Entreprise."</td>
	 						<td>"."<a href=\"update1.php?ID=".$result->ID."\">Mise_à_jour</a></td>
	 						<td>"."<a href=\"delete1.php?ID=".$result->ID."\">Supprimer</a></td></tr>\n");
	 				}
	 			?>
	 		</tbody>
	 	<a href="welcomepage.php">Retour à l'accueil</a>
	 	</table>
 	</div>		
</body>
</html>			