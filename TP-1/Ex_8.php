<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
</head>
<body>
    <h1>Fiche étudiant</h1>
    <?php
        $nom = "Benali";
        $prenom = "Ahmed";
        $filiere = "Génie Informatique";
        $annee = "2ème année";
        $age = 20;
    ?>
    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Filière : <?php echo $filiere; ?></li>
        <li>Année : <?php echo $annee; ?></li>
    </ul>
    <p>
        <?php echo "$prenom $nom a $age ans et étudie en $filiere ($annee)."; ?>
    </p>
</body>
</html>