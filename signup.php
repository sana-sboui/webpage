<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="./style1.css">
</head>
<body>
	<form action="signupdbconn.php" method="POST">
		<div class="singup-form">
		<h1>forum d'inscription</h1>
			<p>Nom de l'utilisateur:</p>
			<input type="text" name="ndu" placeholder="Nom de l'utilisateur" required>
			<p>Mot de passe:</p>
			<input type="password" name="mdp" placeholder="Mot de passe" required>
			<br>
			<br>
			<button type="submit">S'inscrire</button>
		</div>
	</form>
</body>
</html>