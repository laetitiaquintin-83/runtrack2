<?php

// 1. Initialisation des variables
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
$consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];

// Création du dictionnaire pour stocker les résultats
$dic = [
    'voyelles' => 0,
    'consonnes' => 0,
];

// 2. Préparation de la chaîne pour le comptage
// On convertit la chaîne en minuscules et on supprime tout ce qui n'est pas une lettre
$str_nettoyee = mb_strtolower($str, 'UTF-8'); // Gère les caractères accentués
$str_nettoyee = preg_replace('/[^a-z]/', '', $str_nettoyee);

// 3. Parcours de la chaîne et 4. Comptage
for ($i = 0; $i < mb_strlen($str_nettoyee, 'UTF-8'); $i++) {
    $caractere = $str_nettoyee[$i];

    if (in_array($caractere, $voyelles)) {
        $dic['voyelles']++;
    } elseif (in_array($caractere, $consonnes)) {
        $dic['consonnes']++;
    }
}

// 5. Affichage des résultats dans un tableau HTML
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comptage des voyelles et consonnes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Analyse de la phrase</h2>
    <p>"<?= $str ?>"</p>

    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $dic['voyelles'] ?></td>
                <td><?= $dic['consonnes'] ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>