<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" cotent="width=device-with,initial-scale=1.0">
    <title>Formateur</title>
    <link rel="stylesheet" type="text/css" href="./style6.css">
</head>
<body>
<form method="post" action="connection.php">
    <div class="Formateur-form">
        <h1>Formateur</h1>
        <p>Nom:</p>
        <input type="text" name="Nom" placeholder="Nom" required>
        <p>Prénom:</p>
        <input type="text" name="Prénom" placeholder="Prénom" required>
        <p>Spécialité:</p>
        <input type="text" name="Spécialité" placeholder="Spécialité" required>
        <p>Directeur:</p>
        <input type="text" name="Directeur" placeholder="Directeur" required>
        <br>
        <br>
        <button type="submit">Valider</button>
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