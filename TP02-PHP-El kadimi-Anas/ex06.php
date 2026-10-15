<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 06 - TP 02 PHP</title>
</head>
<body>
    <h1>Exercice 6 : Switch et Date</h1>

    <?php
    $numeroMois = 3;
    $nomMois = "";

    switch ($numeroMois) {
        case 1:
            $nomMois = "Janvier";
            break;
        case 2:
            $nomMois = "Février";
            break;
        case 3:
            $nomMois = "Mars";
            break;
        case 4:
            $nomMois = "Avril";
            break;
        case 5:
            $nomMois = "Mai";
            break;
        case 6:
            $nomMois = "Juin";
            break;
        case 7:
            $nomMois = "Juillet";
            break;
        case 8:
            $nomMois = "Août";
            break;
        case 9:
            $nomMois = "Septembre";
            break;
        case 10:
            $nomMois = "Octobre";
            break;
        case 11:
            $nomMois = "Novembre";
            break;
        case 12:
            $nomMois = "Décembre";
            break;
        default:
            $nomMois = "Numéro de mois invalide";
            break;
    }

    $moisCourantNum = (int) date("m");
    $nomMoisCourant = "";

    switch ($moisCourantNum) {
        case 1: $nomMoisCourant = "Janvier"; break;
        case 2: $nomMoisCourant = "Février"; break;
        case 3: $nomMoisCourant = "Mars"; break;
        case 4: $nomMoisCourant = "Avril"; break;
        case 5: $nomMoisCourant = "Mai"; break;
        case 6: $nomMoisCourant = "Juin"; break;
        case 7: $nomMoisCourant = "Juillet"; break;
        case 8: $nomMoisCourant = "Août"; break;
        case 9: $nomMoisCourant = "Septembre"; break;
        case 10: $nomMoisCourant = "Octobre"; break;
        case 11: $nomMoisCourant = "Novembre"; break;
        case 12: $nomMoisCourant = "Décembre"; break;
        default: $nomMoisCourant = "Inconnu"; break;
    }
    ?>

    <p>Le mois correspondant au numéro 3 est : <strong><?= $nomMois ?></strong>[cite: 4]</p>
    <p>Le mois courant du serveur est : <strong><?= $nomMoisCourant ?></strong> (Mois n°<?= $moisCourantNum ?>)</p>
</body>
</html>