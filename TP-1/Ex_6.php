<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Types de variables</title>
</head>
<body>
    <?php
        $produit = "Clavier";
        $quantite = 3;
        $prix = 120.50;
        $disponible = true;

        echo "Produit : $produit<br>";
        echo "Quantité : $quantite<br>";
        echo "Prix : $prix<br>";
        echo "Disponible : $disponible<br>";

        echo "<h2>Résultat de var_dump()</h2>";
        echo "<pre>";
        var_dump($produit);
        var_dump($quantite);
        var_dump($prix);
        var_dump($disponible);
        echo "</pre>";
    ?>
</body>
</html>