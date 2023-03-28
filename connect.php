<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<?php
	$cnx = mysqli_connect('localhost','root','','formulaire');
	$Entreprise = $_POST['Entreprise'];
	$NSalle = $_POST['NSalle'];
	$NAction = $_POST['NAction'];
	$Themedeformation = $_POST['Themedeformation'];
	$Modedeformation = $_POST['Modedeformation'];
	$Lieudederoulement = $_POST['Lieudederoulement'];
	$Gouvernorat = $_POST['Gouvernorat'];
	$Periodedu = $_POST['Periodedu'];
	$Periodeau = $_POST['Periodeau'];
	$Horairede = $_POST['Horairede'];
	$Horairea = $_POST['Horairea'];
	$Pausede = $_POST['Pausede'];
	$Pausea = $_POST['Pausea'];
    
	//création de la requete SQL:

	$sql = "INSERT INTO cycle (Entreprise, NSalle, NAction, Themedeformation, Modedeformation, Lieudederoulement, Gouvernorat, Periodedu, Periodeau, Horairede, Horairea, Pausede, Pausea) VALUES('$Entreprise', '$NSalle', '$NAction', '$Themedeformation', '$Modedeformation' , '$Lieudederoulement', '$Gouvernorat', '$Periodedu', '$Periodeau', '$Horairede', '$Horairea', '$Pausede', '$Pausea')";
	
	//Exécution de la requete SQL:

	$requete = mysqli_query($cnx, $sql) or die ( mysqli_error());

	//affichage des résultats pour savoir si l'insertion a marché:
	if ($requete){
		header("Location:cycle.php");
	} else{
		echo("L'insertion a échouée");
	}
?>
</html>