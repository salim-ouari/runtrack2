<?php

$str = 'Tous ces instants seront
perdus dans le temps comme les larmes sous la pluie';

/*incrémentation $x= $x+2 donc 1 index sur 2 jaffiche*/
for($x = 0; isset($str[$x]); $x= $x+2){ 

  
        echo $str[$x];
    
}