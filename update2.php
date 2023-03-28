<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="./style6.css">
</head>
<body>
    <?php
        $cnx = mysqli_connect("localhost", "root", "", "formulaire");

        //recuperation de la variable d'URL
        //qui va nous permettre de savoir quel enregistrement a modifier

        $ID = $_GET["ID"];
        $sql = "SELECT * FROM formateur WHERE ID = ".$ID;
        $requete = mysqli_query($cnx, $sql);

        //affichage des données:

        if( $result = mysqli_fetch_object( $requete ) )
        {
        ?>
<form name="showdb2" action="modification2.php" method="POST">
    <input type="hidden" name="ID" value="<?php echo($ID);?>">
    <div class="Formateur-form">
        <h1>Formateur</h1>
        <p>Nom:</p>
        <input type="text" name="Nom" value="<?php echo($result->Nom);?>">
        <p>Prénom:</p>
        <input type="text" name="Prénom" value="<?php echo($result->Prénom);?>">
        <p>Spécialité:</p>
        <input type="text" name="Spécialité" value="<?php echo($result->Spécialité);?>">
        <p>Directeur:</p>
        <input type="text" name="Directeur" value="<?php echo($result->Directeur);?>">
        <br>
        <br>
        <button type="submit">Valider</button>
    </div>
</form>
    <?php
    }
    ?> 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome page</title>
    <link rel="stylesheet" type="text/css" href="./style2.css">
</head>
<body>
    <form action="#" method="POST">
        <div class = "menu-bar">
        <ul>
            <img src="logocni.jpg" alt="logo cni" width="130" height="60">
            <li><a href="welcomepage.php"></i>Accueil</a></li>
            <li class = "active"><a href="#">Menu</a>
                <div class="sub-menu-1">
                    <ul>
                        <li class="hover-me"><a href="#">Admin</a>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="cycle.php">Cycle</a></li>
                                    <li><a href="formateur.php">Formateur</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="participant.php">Participant</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Liste</a>
                <div class="sub-menu-1">
                    <ul>
                        <li class="hover-me"><a href="#">Admin</a>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="showdb.php">Cycle</a></li>
                                    <li><a href="showdb2.php">Formateur</a></li>
                                </ul>   
                            </div>
                        </li>
                        <li><a href="showdb1.php">Participant</a></li>  
                    </ul>
                </div>
            </li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
        </div>
    </form>
</body>
</html>