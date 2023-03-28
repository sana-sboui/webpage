<?php 
	$cnx = mysqli_connect("localhost", "root", "", "formulaire");
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
	$ID = $_POST['ID'];

	//creation de la requete

	$sql = "UPDATE cycle SET    Entreprise = '$Entreprise',
				                NSalle = '$NSalle',
				                NAction = '$NAction',
				                Themedeformation = '$Themedeformation',
				                Modedeformation = '$Modedeformation',
				            	Lieudederoulement = '$Lieudederoulement',
				            	Gouvernorat = '$Gouvernorat',
					            Periodedu = '$Periodedu',
					            Periodeau = '$Periodeau',
					            Horairede = '$Horairede',
					            Horairea = '$Horairea',
					            Pausede = '$Pausede',
				    	        Pausea = '$Pausea'
			   	         WHERE ID = '$ID' ";
    $requete = mysqli_query($cnx, $sql) or die( mysqli_error() );

    //affichage des résultats pour savoir si l'insertion a marché:
    if($requete){
    	header("Location:showdb.php");
    }else{
    	echo("La modification a échoué");
    }
?>