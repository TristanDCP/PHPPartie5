<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6 PHP</title>
</head>
<body>

<h1>Exercice 6</h1>

<p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
    
    <?php
$regions = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
print_r($regions[59]);
    ?>
</body>
</html>