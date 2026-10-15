<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 08 - TP 02 PHP</title>
</head>
<body>
    <h1>Exercice 8 : Boucles et Contrôle des Itérations</h1>

    <section>
        <h2>1. Nombres pairs de 0 à 20</h2>
        <?php
        $i = 0;
        while ($i <= 20) {
            if ($i == 10) {
                echo "<strong>$i</strong> ";
            } else {
                echo "$i ";
            }
            $i += 2;
        }
        ?>
    </section>

    <section>
        <h2>2. Comparaison While et Do-While (compteur à 5)</h2>
        <?php
        $compteurWhile = 5;
        $execWhile = 0;
        while ($compteurWhile < 5) {
            $execWhile++;
            $compteurWhile++;
        }
        echo "<p>Exécutions du body avec while : $execWhile</p>";

        $compteurDo = 5;
        $execDo = 0;
        do {
            $execDo++;
            $compteurDo++;
        } while ($compteurDo < 5);
        echo "<p>Exécutions du body avec do-while : $execDo</p>";
        ?>
    </section>

    <section>
        <h2>3. Entiers de 1 à 20 (continue et break)</h2>
        <?php
        for ($n = 1; $n <= 20; $n++) {
            if ($n % 3 == 0) {
                continue;
            }
            if ($n >= 16) {
                break;
            }
            echo "$n ";
        }
        ?>
    </section>
</body>
</html>