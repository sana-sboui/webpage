<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="./style4.css">
</head>
<body>
    <?php
        $cnx = mysqli_connect("localhost", "root", "", "formulaire");

        //recuperation de la variable d'URL
        //qui va nous permettre de savoir quel enregistrement a modifier

        $ID = $_GET["ID"];
        $sql = "SELECT * FROM cycle WHERE ID = ".$ID;
        $requete = mysqli_query($cnx, $sql);

        //affichage des données:

        if( $result = mysqli_fetch_object( $requete ) )
        {
        ?>
<form name="showdb" action="modification.php" method="POST">
    <input type="hidden" name="ID" value="<?php echo($ID);?>">
                <div class="cycle-form">
            <h1>Cycle</h1>
            <div class="part-1">
            <div class="fields">
                <div class="input-field">
                    <p>Entreprise:</p>
                    <input type="text" name="Entreprise" value="<?php echo($result->Entreprise);?>">
                </div>
                <div class="input-field">
                    <p>N°Salle:</p>
                    <input type="text" name="NSalle" value="<?php echo($result->NSalle);?>">
                </div>
                <div class="input-field">
                    <p>N°Action:</p>
                    <input type="text" name="NAction" value="<?php echo($result->NAction);?>">
                </div>
                <div class="input-field">
                    <p>Théme de formation:</p>
                    <input type="text" name="Themedeformation" value="<?php echo($result->Themedeformation);?>">
                </div>
                <div class="input-field">
                    <p>Mode de formation:</p>
                    <input type="text" name="Modedeformation" value="<?php echo($result->Modedeformation);?>">
                </div>
                <div class="input-field">
                    <p>Lieu de déroulement:</p>
                    <input type="text" name="Lieudederoulement" value="<?php echo($result->Lieudederoulement);?>">
                </div>
            </div>
            <div class="part-2">
                <div class="input-field">
                    <p>Gouvernorat:</p>
                    <input type="text" name="Gouvernorat" value="<?php echo($result->Gouvernorat);?>">
                </div>        
                <div class="input-field">
                    <p>Période: du:</p>
                    <input type="date" name="Periodedu" value="<?php echo($result->Periodedu);?>">
                </div>
            
                <div class="input-field">
                    <p> au:</p>
                    <input type="date" name="Periodeau" value="<?php echo($result->Periodeau);?>">
                </div>
                <div class="input-field">
                    <p>Horaire: de:</p>
                    <input type="text" name="Horairede" value="<?php echo($result->Horairede);?>">
                </div>
                <div class="input-field">
                    <p> à:</p>
                    <input type="text" name="Horairea" value="<?php echo($result->Horairea);?>">
                </div>
                <div class="input-field">
                    <p>Pause: de:</p>
                    <input type="text" name="Pausede" value="<?php echo($result->Pausede);?>">
                </div>
                <div class="input-field">
                    <p> à:</p>
                    <input type="text" name="Pausea" required>
                </div>
            </div>
            <br>
            <br>
            <button type="submit">Valider</button>
        </div>
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