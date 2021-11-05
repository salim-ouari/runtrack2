
<!-- ***********WHILE**************-->
<?php

$voy = "aeIiouy";

$str = "Im sorry Dave I'm afraid I can't
do that"; 

$i=0;

while (isset ($str[$i])) {

    $x=0;
    
while (isset($voy[$x])) {
       
    if ($str[$i] == $voy[$x]) 

        echo $voy[$x];

        $x++;
    }

$i++;
}
?>


<!-- ***************FOR************** -->
<?php

$voy = "aeIiouy";

$str = "Im sorry Dave I'm afraid I can't
do that"; 

for ($i=0; isset($str[$i]); $i++){

    for($x=0; isset($voy[$x]); $x++)

    if($str[$i]== $voy[$x])

    echo $voy[$x];
}

