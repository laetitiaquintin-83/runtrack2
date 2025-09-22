<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>

    <h2>Formulaire de test POST</h2>
    <form action="traitement_post.php" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="email">E-mail :</label><br>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
<?php
// Vérifier si la requête est de type POST et qu'elle contient des données
if (!empty($_POST)) {
    // Compter le nombre d'arguments dans le tableau $_POST
    $nombre_arguments = count($_POST);

    // Afficher le résultat
    echo "Le nombre d’arguments POST envoyés est : " . $nombre_arguments;
} else {
    // Si aucun argument POST n'a été envoyé
    echo "Aucun argument POST n'a été envoyé.";
}
?>