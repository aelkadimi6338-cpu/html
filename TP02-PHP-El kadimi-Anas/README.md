# TP 02 - PHP et GitHub

- **Nom :** Elkadimi
- **Prénom :** Anas
- **Groupe :** G3
- **Module :** Programmation Web 2 (2026/2027)

## Liste des exercices
- ex01.php : Balises, affichage et commentaires
- ex02.php : Variables, casse et concaténation
- ex03.php : Constantes et calculs
- ex04.php : Types et conversions
- ex05.php : Conditions (if/elseif/else)
- ex06.php : Switch et dates
- ex07.php : Boucles for et pyramide
- ex08.php : Boucles while, do-while, break, continue
- ex09.php : Tableaux associatifs et foreach
- ex10_get.html / ex10_get.php : Formulaire GET
- ex10_post.html / ex10_post.php : Formulaire POST

## Réponses aux questions (Exercice 2)
- **Pourquoi $note et $Note sont différentes :** PHP est sensible à la casse (case-sensitive) pour les noms de variables. Par conséquent, `$note` et `$Note` sont considérées comme deux variables totalement distinctes.
- **Noms de variables valides parmi la liste :**
  - `$a` : Valide
  - `$_a` : Valide
  - `$a_a` : Valide
  - `$AAA` : Valide
  - `$a!` : Invalide (contient un caractère spécial)
  - `$1a` : Invalide (ne peut pas commencer par un chiffre)
  - `$a1` : Valide

## Réponses aux questions (Exercice 4)
- **Différence d'affichage de false entre echo et var_dump() :** 
  `echo` convertit `false` en une chaîne vide, donc rien ne s'affiche à l'écran. En revanche, `var_dump()` affiche les informations détaillées sur le type et la valeur exacte (ex: `bool(false)`).

## Réponses aux questions (Exercice 5)
- **Valeurs testées et résultats obtenus :**
  - `-1` : Note invalide
  - `9` : Non validé
  - `10` : Passable
  - `12` : Assez bien
  - `14` : Bien
  - `16` : Très bien
  - `21` : Note invalide

## Réponses aux questions (Exercice 10)
- **Observation de l'URL avec GET :** 
  Après la soumission du formulaire GET, les valeurs saisies apparaissent directement dans l'URL du navigateur (dans la chaîne de requête après le point d'interrogation `?`, sous la forme de paires clé-valeur).