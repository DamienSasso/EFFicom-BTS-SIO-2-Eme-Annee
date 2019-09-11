<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Créer une variable random entre 0 et 1000, afficher le nombre de tirage pour trouver le bon nombre -->
    <?php
    $y = rand(0, 1000);
    $x = 0;
    ?>
    <p>
    <?php
    echo "Votre nombre est ".$y;
    ?></p>
    <p><?php
    $z = 0;
    while ($x !== $y) {
        $z++;
        $x = rand(0, 1000);
    }

    echo "Vous avez mis ".$z." essai pour trouver le bon nombre";
    ?></p>
</body>
</html>