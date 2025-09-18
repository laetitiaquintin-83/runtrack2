<?php

for ($i = 0; $i <= 1337; $i++) {
    // On vérifie si le nombre n'est PAS un des nombres interdits
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111) {
        // Si la condition est vraie (le nombre est autorisé), on l'affiche
        echo $i . "<br />";
    }
}
?>
