<?php
echo"laetitia";
echo "49";
?>
<br>
<?php
echo"bonjour le monde!";
echo'je suis devellopeur php.';
?>
<br>
<?php
$message = "apprendre le php c'est facile.";
$annee = 2024;
echo $message;
echo"l'annee actuelle est".$annee;?>
<?php
// Création d'une variable de type string pour la ville
$ville = "Toulon";

// Création d'une variable de type integer pour la population
$population = 176192;

// Affichage d'une phrase complète en utilisant les variables
echo "La ville de " . $ville . " a une population de " . $population . " habitants.";

// Affichage du type de chaque variable
echo "<br>"; // Ajout d'un saut de ligne pour une meilleure lisibilité
echo "Le type de la variable \$ville est : " . gettype($ville) . "<br>";
echo "Le type de la variable \$population est : " . gettype($population) . "<br>";
?>
<br>
<?php
// Création d'un tableau en utilisant la méthode "array()"
$tableau = array("valeur 1", "valeur 2", "valeur 3");

// Saut de ligne HTML pour la clarté
echo "<br>";

// Création d'un tableau en utilisant la syntaxe courte
$fruits = ["pomme", "banane", "orange"];

// Affichage du deuxième élément du tableau $fruits
echo "Mon fruit préféré est : " . $fruits[1];
?>
<br>
<?php
// Création d'un tableau de langages
$langages = ["HTML", "CSS", "PHP", "JavaScript"];

// Affichage du deuxième élément (index 1)
echo "Le deuxième langage est : " . $langages[1] . "<br>";

// Calcul et affichage du dernier élément
$dernier_element_index = count($langages) - 1;
echo "Le dernier langage est : " . $langages[$dernier_element_index];
?>