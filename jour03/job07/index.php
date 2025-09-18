<?php

// 1. Déclaration de la variable
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// 2. Sauvegarde du premier caractère
$premier_caractere = $str[0];

// 3. Extraction de la sous-chaîne (du 2e caractère à la fin)
$reste_de_la_chaine = substr($str, 1);

// 4. Reconstruction de la chaîne en ajoutant le premier caractère à la fin
$str_modifiee = $reste_de_la_chaine . $premier_caractere;

// 5. Affichage du résultat
echo $str_modifiee;

?>