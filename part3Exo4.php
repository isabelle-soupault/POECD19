<?php
$a=1
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 3 - Exercice 4</title>
</head>
<body>
<div class="container">
    <h1>Exercice 4</h1>

    <p text-center> Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur</p>

</div>
<div class="container text-center mt-4">

    <?php
    for ($a=1; $a < 10 ; $a+=$a/2) { 
        ?> <p><?= $a ?> </p> <?php ;
        ;
    }
    ?>

<hr>
    <?php for $a=1; $a < 10 ; $a+=$a/2) : ?>
        <p><?= $a ?></p>
    <?php endfor ?>    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
