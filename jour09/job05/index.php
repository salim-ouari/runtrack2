<!-- En utilisant php, connectez-vous à la base de données
“jour08”. A l’aide d’une requête SQL, récupérez
l’ensemble des informations des étudiants qui ont
moins de 18 ans. Affichez le résultat de cette
requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs.
Les suivantes doivent contenir les données présentes
dans votre base de données. -->

<?php


// déclarer une variable
$bdd = mysqli_connect('localhost','root', "","jour08");

// encodage  
mysqli_set_charset( $bdd , 'utf8');

// recupérer une requete
$requete = mysqli_query ($bdd,"SELECT * FROM `etudiants` WHERE DATEDIFF(CURRENT_DATE,`naissance`)<= 365*18 ");

// afficher nom des tables de la requete 
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
        <th>id</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>email</th>
    </tr>
</thead>

<tbody>
    <?php 
    foreach($etudiants as $etudiant){

        echo '<tr><td>'. $etudiant['id'].'</td>';
        echo '<td>'. $etudiant ['prenom'].'</td>';
        echo '<td>'. $etudiant ['nom']. '</td>';
        echo '<td>'. $etudiant ['naissance']. '</td>';
        echo '<td>'. $etudiant ['sexe']. '</td>';
        echo '<td>'. $etudiant ['email']. '</tr></td>';
    }

    ?>
</tbody>
</table>
    
</body>
</html>
