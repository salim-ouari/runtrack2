<!-- En utilisant php, connectez-vous à la base de données “jour08”. A l’aide
d’une requête SQL, sélectionnez dans une colonne nommée
“capacite_totale” la somme des capacités des salles. Affichez le résultat de
cette requête dans un tableau html. La première ligne de votre tableau html
doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->

<?php

$bdd = mysqli_connect('localhost','root', "","jour08");

mysqli_set_charset( $bdd , 'utf8');

$requete = mysqli_query ($bdd,"SELECT SUM(capacite) FROM `salles`");
 
$salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <title>bddjour08</title>
</head>
<body>

<table>

<thead>
    <tr>
        <th>superficie_totale</th>
       
    </tr>
</thead>

<tbody>
    <?php 
    foreach($salles as $salle){

        echo '<tr><td>'. $salle['SUM(capacite)'].'</td>';
       
    }
    ?>
</tbody>
</table>
    
</body>
</html>