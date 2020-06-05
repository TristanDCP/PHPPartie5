<?php
   $regions = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 10 PHP</title>
</head>
<body>

<h1>Exercice 10</h1>

<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département</p>
    
<?php 
   foreach ($regions as $value => $element){
    ?>
    <p><?='Le département ' . $element . ' a le numéro ' . $value?></p>
    <?php
}
?>

</body>
</html>