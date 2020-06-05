<?php
   $regions = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
   ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 9 PHP</title>
</head>
<body>

<h1>Exercice 9</h1>

<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
   <?php 
   foreach ($regions as $value){
    ?>
    <p><?=$value?></p>
    <?php
}
?>
</body>
</body>
</html>