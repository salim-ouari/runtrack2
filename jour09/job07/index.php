<!-- En utilisant php, connectez-vous à la base de données
“jour08”. A l’aide d’une requête SQL, récupérez la
superficie totale des étages dans une colonne nommée
“superficie_totale”. Affichez le résultat de cette
requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs.
Les suivantes doivent contenir les données présentes
dans votre base de données. -->

<?php


$bdd = mysqli_connect('localhost','root', "","jour08");

mysqli_set_charset( $bdd , 'utf8');

$requete = mysqli_query ($bdd,"SELECT SUM(superficie) FROM etage");
 
$etages = mysqli_fetch_all($requete,MYSQLI_ASSOC);


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
    foreach($etages as $etage){

        echo '<tr><td>'. $etage['SUM(superficie)'].'</td>';
       
    }
    ?>
</tbody>
</table>
    
</body>
</html>