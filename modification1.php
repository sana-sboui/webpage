<?php 
	$cnx = mysqli_connect("localhost", "root", "", "formulaire");
	$Nom = $_POST["Nom"];
	$Prénom = $_POST["Prénom"];
	$NCIN = $_POST["NCIN"];
	$Directionservice = $_POST["Directionservice"];
	$Entreprise = $_POST["Entreprise"];
	$ID = $_POST["ID"];
	
	//creation de la requete

	$sql = "UPDATE participant SET    Nom = '$Nom',
				                Prénom = '$Prénom',
				                NCIN = '$NCIN',
				                Directionservice = '$Directionservice',
				                Entreprise = '$Entreprise'
			   	         WHERE ID = '$ID' ";
    $requete = mysqli_query($cnx, $sql) or die( mysqli_error() );

    //affichage des résultats pour savoir si l'insertion a marché:
    if($requete){
    	header("Location:showdb1.php");
    }else{
    	echo("La modification a échoué");
    }
?>