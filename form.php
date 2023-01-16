<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/


if (isset($_GET['random']) && isset($_GET['random2'])) {
    $x = intval($_GET['random']);
    $y = intval($_GET['random2']);

    $z = rand($y, $x);
    echo $z;
}
