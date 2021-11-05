<!-- Job 06

Créez une chaîne de caractères str qui contient “Les choses que l'on
possede finissent par nous posseder.”. Créez un algorithme qui parcourt et
écrit cette chaine à l’envers. -->


<?php

$str = "Les choses que l'on possede finissent par nous posseder.";

for($i = -1; isset($str[$i]) == true; $i--){
echo $str[$i];

for($x = -1; isset($str[$x]) == false; $x++){
    echo $str[$x];
}

}