<?php
    $months = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8 PHP</title>
</head>
<body>

<h1>Exercice 8</h1>

<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
    
    <?php foreach ($months as $value){
    ?>
    <p><?=$value?></p>
    <?php
}
?>
</body>
</html>