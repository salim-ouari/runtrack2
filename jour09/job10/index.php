<!-- En utilisant php, connectez-vous à la base de données “jour08”. A l’aide
d’une requête SQL, sélectionnez l’ensemble des informations des salles en
les triant par capacite croissant. Affichez le résultat de cette requête dans
un tableau html. La première ligne de votre tableau html doit contenir le
nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->

<?php

$bdd = mysqli_connect('localhost','root', "","jour08");

mysqli_set_charset( $bdd , 'utf8');

$requete = mysqli_query ($bdd,"SELECT * FROM salles ORDER BY capacite ASC");
 
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
        <th>ID</th>
        <th>NOM</th>
        <th>ID_ETAGE</th>
        <th>CAPACITE</th>
       
    </tr>
</thead>

<tbody>
    <?php 
    var_dump($salles);
    foreach($salles as $salle){

        echo '<tr><td>'. $salle['capacite'].'</td>';
        echo '<td>'. $salle['capacite'].'</td>';
        echo '<td>'. $salle['capacite'].'</td>';
        echo '<td>'. $salle['capacite'].'</td></tr>';
       
    }
    ?>
</tbody>
</table>
    
</body>
</html>