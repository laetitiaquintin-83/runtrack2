<?php
// Boucle principale pour parcourir les nombres de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {

    // On suppose que le nombre est premier au début de chaque itération
    $estPremier = true;

    // Deuxième boucle pour tester les diviseurs
    for ($j = 2; $j < $i; $j++) {

        // On utilise l'opérateur modulo (%) pour vérifier la divisibilité
        if ($i % $j == 0) {
            // Si on trouve un diviseur, le nombre n'est pas premier
            $estPremier = false;
            // On peut s'arrêter de chercher des diviseurs pour ce nombre
            break;
        }
    }

    // Si le drapeau est toujours vrai (aucun diviseur n'a été trouvé)
    if ($estPremier) {
        // On affiche le nombre
        echo "$i<br />";
    }
}
?>