
<?php
// Affichage du tableau si des arguments GET sont présents
if (!empty($_GET)) {
	echo '<table border="1">';
	echo '<tr><th>Argument</th><th>Valeur</th></tr>';
	foreach ($_GET as $argument => $valeur) {
		echo '<tr><td>' . htmlspecialchars($argument) . '</td><td>' . htmlspecialchars($valeur) . '</td></tr>';
	}
	echo '</table>';
} else {
	echo 'Aucun argument GET n\'a été envoyé.';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Tableau des arguments GET</title>
</head>
<body>
	<h2>Formulaire de test GET</h2>
	<form action="index.php" method="get">
		<label for="nom">Nom :</label><br>
		<input type="text" id="nom" name="nom"><br><br>

		<label for="prenom">Prénom :</label><br>
		<input type="text" id="prenom" name="prenom"><br><br>

		<label for="ville">Ville :</label><br>
		<input type="text" id="ville" name="ville"><br><br>

		<input type="submit" value="Envoyer">
	</form>
</body>
</html>
