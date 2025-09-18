
<?php
// On démarre une boucle qui va de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    
    // On vérifie si le nombre actuel est 42
    if ($i == 42) {
        // Si c'est le cas, on l'affiche en gras et souligné
        echo "<b><u>" . $i . "</b></u><br />";
    } else {
        // Sinon, on affiche le nombre normalement
        echo $i . "<br />";
    }
}
?>
