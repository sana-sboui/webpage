<?php
	if ( isset($_GET['ID']) ){
		$ID = $_GET['ID'];

		$connec = mysqli_connect("localhost", "root", "", "formulaire");
		$sql = "DELETE FROM participant WHERE ID = $ID";

		$requete = mysqli_query($connec, $sql);
	}

	header("Location:showdb1.php");
?>