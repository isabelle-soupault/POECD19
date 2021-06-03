<?php
$i = 0;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 3 - Exercice 8</title>
</head>
<body>
<div class="container">
    <h1>Exercice 8</h1>

    <p text-center> En allant de 0 à 100 avec un pas de 1, afficher tous ceux qui ne sont pas multiple de 3. </p>

</div>
<div class="container text-center mt-4">
<?php 
for ($i=0; $i <100 ; $i++) { 
    if ($i % 3 !== 0){
        ?> <p> <?= $i ?></p> <?php ;
    }
}
?> 

<hr>

<?php for ($i=0; $i <100 ; $i++): ?>
    <?php  if ($i % 3 != 0): ?>
        <p><p> <?= $i ?></p>
    <?php endif ?>
<?php endfor ?>       


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
