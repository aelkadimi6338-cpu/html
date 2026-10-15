<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 04 - TP 02 PHP</title>
</head>
<body>
    <h1>Exercice 4 : Types, Valeurs et Conversions</h1>

    <?php
    $v1 = 42;
    $v2 = "42";
    $v3 = 15.8;
    $v4 = true;
    $v5 = false;
    $v6 = null;

    $c1 = (int) "42";
    $c2 = (int) 15.8;
    $c3 = (string) 42;

    $b0 = (bool) 0;
    $bStr = (bool) "0";
    $bText = (bool) "PHP";
    $bArr = (bool) [];
    ?>

    <h2>1. Examen des types et valeurs avec var_dump()</h2>
    <pre>
    <?php
    var_dump($v1);
    var_dump($v2);
    var_dump($v3);
    var_dump($v4);
    var_dump($v5);
    var_dump($v6);
    ?>
    </pre>

    <h2>2. Conversions</h2>
    <p>Conversion de "42" en entier : <?php var_dump($c1); ?></p>
    <p>Conversion de 15.8 en entier : <?php var_dump($c2); ?> (donne 15)</p>
    <p>Conversion de 42 en chaîne : <?php var_dump($c3); ?></p>

    <h2>3. Affichage des booléens true et false</h2>
    <p>Avec echo -> true : <?= $v4 ?> | false : <?= $v5 ?></p>
    <pre>
    Avec var_dump -> true : <?php var_dump($v4); ?> | false : <?php var_dump($v5); ?>
    </pre>

    <h2>4. Conversions en booléens</h2>
    <p>(bool) 0 : <?php var_dump($b0); ?></p>
    <p>(bool) "0" : <?php var_dump($bStr); ?></p>
    <p>(bool) "PHP" : <?php var_dump($bText); ?></p>
    <p>(bool) [] (tableau vide) : <?php var_dump($bArr); ?></p>
</body>
</html>