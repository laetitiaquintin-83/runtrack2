<?php
// Vérifier si les arguments GET sont définis avec isset
if (isset($_GET['nom']) || isset($_GET['prenom']) || isset($_GET['ville'])) {
    // Compter le nombre d'arguments GET définis
    $nombre_arguments = 0;
    if (isset($_GET['nom'])) $nombre_arguments++;
    if (isset($_GET['prenom'])) $nombre_arguments++;
    if (isset($_GET['ville'])) $nombre_arguments++;
    
    // Afficher le résultat
    echo "Le nombre d’arguments GET définis (avec isset) est : " . $nombre_arguments;
} else {
    // Si aucun argument n'est défini
    echo "Aucun argument GET n'a été défini.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test du formulaire GET</title>
</head>
<body>

    <h2>Formulaire de test GET</h2>
    <form action="" method="get">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="ville">Ville :</label><br>
        <input type="text" id="ville" name="ville"><br><br>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>