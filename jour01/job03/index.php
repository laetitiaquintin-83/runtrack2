<?php
$nom = "LaPlateforme";
$nombre = 10;
$prix = 10.5;
$estVrai = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03 - Tableau de variables</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Tableau des variables</h1>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>string</td>
            <td>$nom</td>
            <td><?php echo $nom; ?></td>
        </tr>
        <tr>
            <td>integer</td>
            <td>$nombre</td>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>$prix</td>
            <td><?php echo $prix; ?></td>
        </tr>
        <tr>
            <td>boolean</td>
            <td>$estVrai</td>
            <td><?php echo $estVrai ? 'true' : 'false'; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
