<?php
// Boucle qui parcourt les nombres de 0 à 100
for ($i = 0; $i <= 100; $i++) {

    // Condition pour le nombre 42
    if ($i == 42) {
        echo "La Plateforme_<br />";
    }
    // Condition pour les nombres de 0 à 20 (fond jaune, texte noir)
    elseif ($i >= 0 && $i <= 20) {
        echo "<span style='background-color: yellow; color: black;'>$i</span><br />";
    }
    // Condition pour les nombres de 25 à 50 (fond bleu, texte blanc)
    elseif ($i >= 25 && $i <= 50) {
        echo "<span style='background-color: blue; color: white;'>$i</span><br />";
    }
    // Condition par défaut pour les autres nombres
    else {
        echo "$i<br />";
    }
}
?>