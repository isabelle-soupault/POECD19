<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 1</title>
</head>
<body>
<div class="container">
    <h1>Exercice 1</h1>
    <p text-center>Créer une variable name et l'initialiser avec la valeur de votre choix.  Afficher son contenu.</p>
</div>
<div class="container text-center mt-4">
    <?php
    $name='Iza'
    ?>
    <p>
    <?php echo $name ?>
    </p>
</div>
<div class="container text-center mt-4">    
    <p class="fw-bold">Code utilisé :</p>
    <pre>
    $name='Iza';
    echo $name;
    </pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--
Toutes les variables commencent par un $
On doit mettre des simples quotes car c'est plus simple pour la rapidité d'exécution. Pour les bonnes pratiques il est important de PROSCRIRE les doubles quotes.

l'écriture 
echo '<p>' .$name. '</p>' 
est complêtement à proscrire !!!

On va commencer de mettre en haut de page, avant le doctype
<\? php $name = 'Hulk'; ?>

ensuite, on construit ce qu'on veut faire apparaître

<p> <\?php echo $name; ?> </p>

Néanmois, si c'est la seule instruction on peu simplifier en écrivant :

<p> <\?= $name ?> </p>

 -->