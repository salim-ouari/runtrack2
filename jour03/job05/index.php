<?php

// Créez une string nommée str et affectez y “On n est pas le meilleur quand
// on le croit mais quand on le sait”. Créez un dictionnaire nommé dic qui a
// comme keys “consonnes” et “voyelles”. Créez un algorithme qui parcourt,
// compte et stocke le nombre d'occurrences de consonnes et de voyelles de
// str. Affichez ces résultats dans un tableau html qui a comme thead
// “Voyelles” et “Consonnes”.

$str= "On n est pas le meilleur quand
on le croit mais quand on le sait.";
var_dump($str);

// Mon dic est un tableau qui contient 2 keys:(cons=>sa valeur) et (voy=>sa valeur)
$dic=["cons"=> "zrtpqsdfghjklmwxcvbn",
"voy"=> "aeiouyO"];

// compteur tableau 1 (cons) et tableau 2 (voy)
$con=0;
$voy=0;

// tableau 
for ($x=0; isset($str[$x]); $x++) {
// sous tableau dic keys 1 'cons'
      for ($i=0; isset($dic["cons"][$i]); $i++) {

         if ($str[$x] == $dic["cons"][$i])

         {$con++;}
}

// sous tableau dic keys 2 'voy'
      for ($v=0; isset($dic["voy"][$v]); $v++) {

         if ($str[$x]== $dic["voy"][$v])

         {$voy++;}
}

}
?>


<table>
    <thead>
        <tr>
            <th>Voyelle</th>
            <th>Consonne<th/>
        </tr>

    </thead>
    <tbody>
        <tr>
            <td><?php echo $voy; ?></td>
            <td><?php echo $con; ?></td>
        </tr>
    </tbody>
</table>