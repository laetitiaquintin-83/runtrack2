<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifier pair /impair </title>
</head>
<body>
    <form method="get" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Vérifier">
    </form>
    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "<p>Le nombre $nombre est pair.</p>";
            } else {
                echo "<p>Le nombre $nombre est impair.</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>