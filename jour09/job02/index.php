<!-- En utilisant php et mysqli, connectez-vous à la
base de données “jour08”. A l’aide d’une requête
SQL, récupérez le nom et la capacite de chacune des
salles. Affichez le résultat de cette requête dans 
un tableau html. Lapremière ligne de votre tableau
html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre
base de données. -->

<?php

$bdd = mysqli_connect('localhost','root',"","jour08");

mysqli_set_charset( $bdd , 'utf8');

$requete = mysqli_query ($bdd,"SELECT nom,capacite FROM salles");

$salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($salles);


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
        
        <th>Nom</th>
        <th>capacite</th>
       
    </tr>
</thead>

<tbody>
    <?php 
    foreach($salles as $salle){

        echo '<tr><td>'. $salle ['nom'].'</td>';
        echo '<td>'. $salle ['capacite']. '</td></tr>';
      
    }
    ?>
</tbody>
</table>
    
</body>
</html>