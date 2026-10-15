<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 09 - TP 02 PHP</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-bottom: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Exercice 9 : Tableaux Associatifs et Statistiques</h1>

    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nombreEtudiants = count($notes);
    $etudiantsValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";

    foreach ($notes as $etudiant => $note) {
        $somme += $note;
        if ($note >= 10) {
            $etudiantsValides++;
        }
        if ($note > $meilleureNote) {
            $meilleureNote = $note;
            $meilleurEtudiant = $etudiant;
        }
    }

    $moyenne = $somme / $nombreEtudiants;
    ?>

    <table>
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Statut</th>
        </tr>
        <?php foreach ($notes as $etudiant => $note): ?>
            <tr>
                <td><?= $etudiant ?></td>
                <td><?= $note ?></td>
                <td><?= ($note >= 10) ? "Validé" : "Non validé" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Moyenne de la classe : <?= $moyenne ?>[cite: 5]</p>
    <p>Nombre d'étudiants ayant validé : <?= $etudiantsValides ?>[cite: 5]</p>
    <p>Meilleure note : <?= $meilleureNote ?> (obtenue par <?= $meilleurEtudiant ?>)[cite: 5]</p>
</body>
</html>