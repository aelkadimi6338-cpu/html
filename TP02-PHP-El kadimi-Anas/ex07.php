<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 07 - TP 02 PHP</title>
</head>
<body>
    <h1>Exercice 7 : Boucles For et Boucles Imbriquées</h1>

    <section>
        <h2>Table de multiplication de 7</h2>
        <?php
        $nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "<p>$nombre $\times$ $i = $resultat</p>";
        }
        ?>
    </section>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "\n";
        }
        ?>
        </pre>
    </section>
</body>
</html>