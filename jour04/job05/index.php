
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	if ($username === 'John' && $password === 'Rambo') {
		echo "C’est pas ma guerre";
	} else {
		echo "Votre pire cauchemar";
	}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire de connexion</title>
</head>
<body>
	<h2>Connexion</h2>
	<form action="index.php" method="post">
		<label for="username">Nom d'utilisateur :</label><br>
		<input type="text" id="username" name="username"><br><br>

		<label for="password">Mot de passe :</label><br>
		<input type="password" id="password" name="password"><br><br>

		<input type="submit" value="Se connecter">
	</form>
</body>
</html>
