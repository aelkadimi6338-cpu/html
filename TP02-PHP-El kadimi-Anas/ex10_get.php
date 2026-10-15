<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
    <h1>Résultat du traitement GET</h1>
    <?php
    if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
        $nom = trim($_GET['nom']);
        $prenom = trim($_GET['prenom']);
        $groupe = trim($_GET['groupe']);

        if ($nom !== "" && $prenom !== "" && $groupe !== "") {
            $nomSec = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenomSec = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupeSec = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
            echo "<p>Bienvenue $prenomSec $nomSec, vous êtes dans le groupe $groupeSec.</p>";
        } else {
            echo "<p>Erreur : Les champs ne doivent pas être vides.</p>";
        }
    } else {
        echo "<p>Veuillez soumettre le formulaire.</p>";
    }
    ?>
    <br>
    <a href="ex10_get.html">Retour au formulaire</a>
</body>
</html>