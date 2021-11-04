<?php

$array =[200, 204, 173, 98, 171, 404, 459];
/*isset = verifie si variable est true ou false. si false alors arrêt*/
for($x = 0; isset($array[$x]); $x++){ 

/*si $array est égal à 0 cad pas de reste de la division*/
/*affiche paire*/
if   ($array[$x]%2 == 0){
    
    echo $array[$x].' est paire' .'<br/>';
}
/*sinon si $array est '!=' différent de 0*/
 /*affiche impaire*/
 elseif ($array[$x]%2 != 0){
   
    echo $array[$x].' est impaire' .'<br/>';
}
/* autrement si les 2 conditions ne sont pas réuni affiche $array normalement*/
else{echo $array[$x].'<br>';

}

}