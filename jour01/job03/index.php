<?php
$bool= true;
$CR= 7;
$myName= "salim";
$virgule= 7.2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>

<style>
table {
    width : 50%;
    text-align: center;
    border-cosllapse: collapse;
   
    
}
th, td{
    border: 1px solid black;
  
}

    
</style>
<body>
    



<table>
  <tr>
    <th>Type</th>
    <th>NOM</th>
    <th>Valeur</th>
    
  </tr>
  <tr>
    <td>Booléen</td>
    <td>bool</td>
    <td><?php echo $bool ?></td>
    
  </tr>
  <tr>
    <td>Entier</td>
    <td>CR</td>
    <td><?php echo $CR ?></td>
    
  </tr>
  <tr>
    <td>ChaineDeCaractere</td>
    <td>myName</td>
    <td><?php echo $myName ?></td>
    
  </tr>
  <tr>
    <td>Flottant</td>
    <td>virgule</td>
    <td><?php echo $virgule ?></td>
    
  </tr>
</table>


</body>
</html>