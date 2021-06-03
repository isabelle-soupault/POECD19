<?php 
    $lastname ='DS';
    $firstname = 'Iza';
    $age = 35;
    ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 2</title>
</head>
<body>
<div class="container">
<h1>Exercice 2</h1>

<p text-center> Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  Afficher leur contenu.</p>

</div>
<div class="container text-center mt-4">

    <p>Mon nom est :
    <?php echo $lastname; ?>
    </p>

    <p>Mon prénom est :
    <?php echo $firstname; ?>
    </p>
    <p>Je suis agée de :
    <?php echo $age; ?> ans
    </p>
<hr>
    <p> Mon nom est <?= $lastname ?></p>
    <p> Mon prénom est <?= $firstname ?></p>
    <p> Mon age est de <?= $age ?> ans</p>


    <p class="fw-bold">Code utilisé :</p>

    <pre class="border border-dark col-3 offset-5 ">
    $lastname = 'DS' ;
    $firstname = 'Iza';
    $age = 35;

    echo $lastname;
    echo $firstname;
    echo $age;
----------
Modifications 
----------
<\p> Mon nom est <\?= $lastname ?></\p>
<\p> Mon prénom est <\?= $firstname ?></\p>
<\p> Mon age est <\?= $age ?> ans</\p>
    </pre>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Déplacement de la déclaration des variables avant le doctype.


->