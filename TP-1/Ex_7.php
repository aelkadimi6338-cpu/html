<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Calcul du total</title>
</head>
<body>
    <?php
        $prixUnitaire = 15;
        $quantite = 4;
        $total = $prixUnitaire * $quantite;

        echo "$quantite cahiers à $prixUnitaire DH : total = $total DH<br>";

        // On change la quantité : le total est recalculé
        $quantite = 7;
        $total = $prixUnitaire * $quantite;

        echo "$quantite cahiers à $prixUnitaire DH : total = $total DH<br>";
    ?>
</body>
</html>