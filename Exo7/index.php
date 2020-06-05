<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7 PHP</title>
</head>
<body>

<h1>Exercice 7</h1>

<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
    
    <?php
$regions = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
$regions[51] = 'Reims';
echo $regions[51];
print_r($regions)
    ?>
</body>
</html>