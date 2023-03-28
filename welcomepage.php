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
            <li class = "active"><a href="welcomepage.php"></i>Accueil</a></li>
            <li><a href="#">Menu</a>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style3.css">
</head>
<body>
	<form action="#" method="POST">
		<div class="wlc">
			<h1 style="font-size:300%;">Bienvenu</h1>
			<p style="font-size:200%;">Qui sommes-nous?</p>
			<p>ce site est du type CRUD (création, lecture, mise à jour, suppression). Ce site contient deux types de formulaires, l'un géré par l'administrateur et l'autre par le participant. Dans la partie admin il y a deux formulaires à remplir un est appelé cycle et l'autre formateur. La section de liste fait référence à la base de données elle affiche les renseignements insérer de chaque formulaire. 
		    J'espère que ce site vous sera utile et je vous en remercie.</p>
		    <p>Pour en savoir plus, vous pouvez nous contacter sur ce courriel sbouisana1234@gmails.com</p>
	    </div>
	</form>
</body>
</html>