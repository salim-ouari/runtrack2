<!-- En utilisant php, connectez-vous à la base de données “jour08”. A l’aide
d’une requête SQL, sélectionnez le prenom, le nom et la date de naissance
des étudiants qui sont nés entre 1998 et 2018. Affichez le résultat de cette
requête dans un tableau html. La première ligne de votre tableau html doit
contenir le nom des champs. Les suivantes doivent contenir les données
présentes dans votre base de données. -->

<?php

$bdd = mysqli_connect('localhost','root',"","jour08");

mysqli_set_charset( $bdd , 'utf8');

$requete = mysqli_query ($bdd,"SELECT nom ,prenom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31' ");

$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);

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
        
        <th>Prenom</th>
        <th>Nom</th>
        <th>Naissance</th>
       
    </tr>
</thead>

<tbody>
    <?php 
    foreach($etudiants as $etudiant){

        echo '<tr><td>'. $etudiant ['prenom'].'</td>';
        echo '<td>'. $etudiant ['nom'].'</td>';
        echo '<td>'. $etudiant ['naissance']. '</td></tr>';
      
    }
    ?>
</tbody>
</table>
    
</body>
</html>