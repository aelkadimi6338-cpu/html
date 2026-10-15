<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02 - TP 02 PHP</title>
</head>
<body>
    <h1>Exercice 2 : Variables et Concaténation</h1>

    <?php
    // 1. Déclaration des variables avec des données fictives
    $nom = "Elkadimi";
    $prenom = "Anas";
    $age = 19;
    $formation = "Informatique Appliquée";

    // 2. Construction de la phrase de présentation avec la concaténation (.)
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ".";
    echo "<p>" . $phrase . "</p>";

    // 3. Compléter cette phrase avec .= pour ajouter " J'apprends PHP"
    $phrase .= " J'apprends PHP.";
    echo "<p>" . $phrase . "</p>";

    // 4. Déclarer $note = 12 et $Note = 16, puis afficher les deux valeurs
    $note = 12;
    $Note = 16;
    echo "<p>La valeur de la variable \$note est : " . $note . "</p>";
    echo "<p>La valeur de la variable \$Note est : " . $Note . "</p>";
    ?>
</body>
</html>