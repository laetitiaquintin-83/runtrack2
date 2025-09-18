<?php
// Définition de la hauteur du triangle
$hauteur = 5;

// Boucle principale pour les lignes (hauteur)
for ($i = 0; $i < $hauteur; $i++) {
    
    // Boucle secondaire pour les colonnes (largeur)
    // Elle s'exécute $i + 1 fois, ce qui fait une étoile de plus par ligne
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }

    // Ajoute un retour à la ligne après chaque ligne
    echo "<br />";
}
?>