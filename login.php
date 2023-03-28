<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<form action="verif.php" method="POST">
		<div class="login-form">
		<h1>Binvenu</h1>
		<h2>Forum d'identification</h2>
			<p>Nom de l'utilisateur:</p>
			<input type="text" name="ndu" placeholder="Nom de l'utilisateur">
			<p>Mot de passe:</p>
			<input type="password" name="mdp" placeholder="Mot de passe">
			<br>
			<br>
			<button type="submit">S'identifier</button>
			<p>Vous n'êtes pas inscrit? <a style="color: #fff;" href="signup.php">inscrivez-vous</a></p>
		</div>
	</form>
</body>
</html>