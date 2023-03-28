<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formateur Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<h1 style= text-align:center;>Participant Data:</h1>
	<br>
	<table class='table'>
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Spécialité</th>
				<th>Directeur</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$connec = mysqli_connect('localhost','root', '', 'formulaire');
				$sql = "SELECT * FROM Formateur ORDER BY Nom";
				$requete = mysqli_query($connec, $sql);
				while ($row = mysqli_fetch_assoc($requete)){
					echo("<tr>
							<td>".$row["Nom"]."</td>
							<td>".$row["Prénom"]."</td>
							<td>".$row["Spécialité"]."</td>
							<td>".$row["Directeur"]."</td>
							<td>
								<a class='btn btn-primary btn-sm' herf='update'>Update</a>
								<a class='btn btn-danger btn-sm' herf='delete'>Delete</a>
							</td>
						</tr>");	
				}
			?>
		</tbody>
	</table>
</body>
</html>