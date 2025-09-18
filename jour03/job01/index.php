<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice PHP</title>
</head>
<body>

    <?php
        // 1. Déclaration du tableau de nombres
        $nombres = [200, 204, 173, 98, 171, 404, 459];
        
        // 2. Boucle pour parcourir chaque nombre
        foreach ($nombres as $nombre) {
            // 3. Condition pour vérifier la parité
            if ($nombre % 2 == 0) {
                echo $nombre . " est pair<br />";
            } else {
                echo $nombre . " est impaire<br />";
            }
        }
    ?>

</body>
</html>