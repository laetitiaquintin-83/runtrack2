<?php
if (!empty($_POST)) {
    echo "<h2>Arguments POST</h2>";
    echo "<table border='1'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    // Parcourir le tableau $_POST
    foreach ($_POST as $cle => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($cle) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucun argument POST n'a été envoyé.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>

    <h2>Entrez vos informations</h2>
    <form action="traitement_post.php" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="ville">Ville :</label><br>
        <input type="text" id="ville" name="ville"><br><br>

        <input type="submit" value="Afficher le tableau">
    </form>

</body>
</html>