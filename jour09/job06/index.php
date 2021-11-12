<!-- En utilisant php, connectez-vous à la base de données “jour08”. A l’aide
d’une requête SQL, récupérez le nombre total d’étudiants dans une
colonne nommée “nb_etudiants”. Affichez le résultat de cette requête dans
un tableau html. La première ligne de votre tableau html doit contenir le
nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->

<?php

$bdd = mysqli_connect('localhost','root', "","jour08");

mysqli_set_charset( $bdd , 'utf8');

$requete = mysqli_query ($bdd,"SELECT COUNT(*) AS nb_etudiants FROM etudiants");
 
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);


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
        <th>nb_etudiants</th>
       
    </tr>
</thead>

<tbody>
    <?php 
    foreach($etudiants as $etudiant){

        echo '<tr><td>'. $etudiant['nb_etudiants'].'</td>';
       
    }
    ?>
</tbody>
</table>
    
</body>
</html>