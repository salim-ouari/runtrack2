<!-- En utilisant php, connectez-vous à la base de données “jour08”. A l’aide
d’une requête SQL, sélectionnez récupérer le nom des salles et le nom de
leur étage. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les
suivantes doivent contenir les données présentes dans votre base de
données. -->

<?php

$bdd = mysqli_connect('localhost','root', "","jour08");

mysqli_set_charset( $bdd , 'utf8');
$requete = mysqli_query ($bdd,"SELECT salles.nom AS nomsalles , etage.nom AS nometages  FROM salles 
INNER JOIN etage ON etage.id = salles.id_etage");
 
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
        <th>salles</th>
        <th>etages</th>
    
       
    </tr>
</thead>

<tbody>
    <?php 
    
    foreach($salles as $salle){

        echo '<tr><td>'. $salle['nomsalles'].'</td>';
        echo '<td>'. $salle['nometages'].'</td></tr>';
        
        
       
    }
    ?>
</tbody>
</table>
    
</body>
</html>

