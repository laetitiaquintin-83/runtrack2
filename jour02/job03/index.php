<?php
// Boucle qui parcourt les nombres de 0 à 100
for ($i = 0; $i <= 100; $i++) {

    // Condition pour le nombre 42
    if ($i == 42) {
        echo "La Plateforme_<br />";
    }
    // Condition pour les nombres de 0 à 20
    elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    }
    // Condition pour les nombres de 25 à 50
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    }
    // Condition par défaut pour les autres nombres
    else {
        echo "$i<br />";
    }
}
?>