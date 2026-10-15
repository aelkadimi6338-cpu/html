<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 - Serveur ou navigateur ?</title>
</head>
<body>
    <h1>Exercice 1 : Où s'exécute chaque élément ?</h1>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>Élément</th>
                <th>Exécution</th>
                <th>Explication</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PHP</td>
                <td>Sur le serveur</td>
                <td>Le serveur exécute le script PHP et envoie uniquement le résultat au navigateur.</td>
            </tr>
            <tr>
                <td>HTML</td>
                <td>Dans le navigateur</td>
                <td>Le navigateur interprète les balises reçues pour construire la page.</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>Dans le navigateur</td>
                <td>Le navigateur applique les styles pour mettre en forme la page.</td>
            </tr>
            <tr>
                <td>JavaScript</td>
                <td>Dans le navigateur</td>
                <td>Le navigateur exécute le code JavaScript côté client.</td>
            </tr>
        </tbody>
    </table>

    <h2>Pourquoi faut-il passer par localhost ?</h2>
    <p>
        PHP est un langage côté serveur : il doit être exécuté par un serveur web
        (Apache, démarré avec XAMPP). Si on ouvre le fichier directement dans le
        navigateur (protocole file://), le code PHP n'est pas exécuté et s'affiche
        tel quel. avec http://localhost/, c'est Apache qui reçoit la requête,
        exécute le script sur notre machine et renvoie au navigateur la page HTML générée.
    </p>
</body>
</html>