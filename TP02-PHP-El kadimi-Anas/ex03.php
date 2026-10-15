<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03 - TP 02 PHP</title>
</head>
<body>
    <h1>Exercice 3 : Constantes et Calculs</h1>

    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixHT = 60;
    $quantite = 3;

    $totalHT = $prixHT * $quantite;
    $montantTVA = $totalHT * (TAUX_TVA / 100);
    $totalTTC = $totalHT + $montantTVA;

    $totalTTC += 15;

    $tauxExiste = defined("TAUX_TVA") ? "Oui" : "Non";
    ?>

    <h2>Récapitulatif</h2>
    <p>Total HT : <?= $totalHT ?> <?= DEVISE ?></p>
    <p>Montant TVA : <?= $montantTVA ?> <?= DEVISE ?></p>
    <p>Total TTC (avec frais de livraison) : <?= $totalTTC ?> <?= DEVISE ?></p>
    <p>La constante TAUX_TVA existe : <?= $tauxExiste ?></p>
</body>
</html>