<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dessiner une maison</title>
</head>
<body>
    <form method="get" action="">
        <label for="largeur">Largeur :</label>
        <input type="text" name="largeur" id="largeur">
        <label for="hauteur">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur">
        <input type="submit" value="Dessiner">
    </form>

    <pre>
<?php
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = (int) $_GET['largeur'];
    $hauteur = (int) $_GET['hauteur'];

    if ($largeur > 1 && $hauteur > 1) {
        // ----- TOIT -----
        for ($i = 0; $i < $hauteur; $i++) {
            echo str_repeat(" ", $hauteur - $i - 1);
            echo "/";
            echo str_repeat(" ", $i * 2);
            echo "\\";
            echo "\n";
        }

        // ----- CORPS -----
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|";
            echo str_repeat(" ", $largeur - 2);
            echo "|";
            echo "\n";
        }

        // ----- BASE -----
        echo "+".str_repeat("-", $largeur - 2)."+\n";
    } else {
        echo "Veuillez entrer des valeurs supérieures à 1.";
    }
}
?>
    </pre>
</body>
</html>
