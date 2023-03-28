<?php
	if ( isset($_GET['ID']) ){
		$ID = $_GET['ID'];

		$cnx = mysqli_connect("localhost", "root", "", "formulaire");
		$sql = "DELETE FROM formateur WHERE ID = $ID";

		$requete = mysqli_query($cnx, $sql);
	}
		header("location:showdb2.php");
?>