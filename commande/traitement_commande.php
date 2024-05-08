<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement de la Commande</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Assurez-vous d'ajuster le chemin du fichier CSS si nécessaire -->
</head>
<body>
    <h1>Traitement de la Commande</h1>

    <?php
    // Vérifier si des données ont été envoyées via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $taille = $_POST["taille"];
        $telephone = $_POST["telephone"];

        // Afficher les données récupérées
        echo "<p>Nom: $nom</p>";
        echo "<p>Prénom: $prenom</p>";
        echo "<p>Adresse: $adresse</p>";
        echo "<p>Taille: $taille</p>";
        echo "<p>Téléphone: $telephone</p>";
    } else {
        // Si aucune donnée n'a été envoyée via POST, afficher un message d'erreur
        echo "<p>Aucune donnée de formulaire n'a été reçue.</p>";
    }
    ?>
</body>
</html>
