<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice String</title>
</head>
<body>

    <?php
        $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
        
        $longueur = strlen($str);
        
        for ($i = 0; $i < $longueur; $i += 2) {
            echo $str[$i];
        }
    ?>

</body>
</html>