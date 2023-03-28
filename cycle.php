<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" cotent="width=device-with,initial-scale=1.0">
    <title>Cycle</title>
    <link rel="stylesheet" type="text/css" href="./style4.css">
</head>
<body>
  
    <form method="post" action="connect.php">
        <div class="cycle-form">
            <h1>Cycle</h1>
            <div class="part-1">
            <div class="fields">
                <div class="input-field">
                    <p>Entreprise:</p>
                    <input type="text" name="Entreprise" placeholder="Nom de l'entreprise" required>
                </div>
                <div class="input-field">
                    <p>N°Salle:</p>
                    <input type="text" name="NSalle" placeholder="N°Salle" required>
                </div>
                <div class="input-field">
                    <p>N°Action:</p>
                    <input type="text" name="NAction" placeholder="N°Action" required>
                </div>
                <div class="input-field">
                    <p>Théme de formation:</p>
                    <input type="text" name="Themedeformation" placeholder="Théme de formation" required>
                </div>
                <div class="input-field">
                    <p>Mode de formation:</p>
                    <input type="text" name="Modedeformation" placeholder="Mode de formation" required>
                </div>
                <div class="input-field">
                    <p>Lieu de déroulement:</p>
                    <input type="text" name="Lieudederoulement" placeholder="Lieu de déroulement" required>
                </div>
            </div>
            <div class="part-2">
                <div class="input-field">
                    <p>Gouvernorat:</p>
                    <input type="text" name="Gouvernorat" placeholder="Gouvernorat" required>
                </div>        
                <div class="input-field">
                    <p>Période: du:</p>
                    <input type="date" name="Periodedu" placeholder="Période" required>
                </div>
            
                <div class="input-field">
                    <p> au:</p>
                    <input type="date" name="Periodeau" placeholder="Période" required>
                </div>
                <div class="input-field">
                    <p>Horaire: de:</p>
                    <input type="text" name="Horairede" placeholder="Horaire" required>
                </div>
                <div class="input-field">
                    <p> à:</p>
                    <input type="text" name="Horairea" placeholder="Horaire" required>
                </div>
                <div class="input-field">
                    <p>Pause: de:</p>
                    <input type="text" name="Pausede" placeholder="Pause" required>
                </div>
                <div class="input-field">
                    <p> à:</p>
                    <input type="text" name="Pausea" placeholder="Pause" required>
                </div>
            </div>
            <br>
            <br>
            <button type="submit">Valider</button>
        </div>
        </div>
    </form>
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