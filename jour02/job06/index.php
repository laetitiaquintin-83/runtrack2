<?php
// Définition des dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Boucle principale pour la hauteur (les lignes)
for ($i = 0; $i < $hauteur; $i++) {

    // Boucle secondaire pour la largeur (les colonnes)
    for ($j = 0; $j < $largeur; $j++) {
        // Affiche un caractère pour chaque "case" du rectangle
        echo "*";
    }

    // Ajoute un retour à la ligne après chaque ligne complète
    echo "<br />";
}
?>