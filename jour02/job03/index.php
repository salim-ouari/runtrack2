<?php

// intialisation de la variable
$var=0;

// tant que
while ($var<=100)
	{
        // conditions de la variable
		if ($var<=20){

        echo "<i> $var </i><br>";}

        elseif ($var==42){ 

        echo "La Plateforme_<br>"; }

        elseif (($var>=25) && ($var<=50)){

        echo "<u> $var </u><br>";}

        else {echo "$var <br>";}
        
// incrémentation de la variable
        $var++;

       
    }

    // le else if la plateforme passe en premier car
    // plus exceptionnel par rapport à l'autre