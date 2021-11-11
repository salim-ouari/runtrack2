<!-- Créez une fonction nommée “leetspeak”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str”. Elle doit retourner la
chaine de caractères “str” convertie en leet speak. Cela signifie qu’elle doit
la modifier de sorte à ce que : les “A” deviennent des “4”, les “B” des “8”,
les “E” des “3”, les “G” des “6”, les “L” des “1”, les “S” des “5” et les “T” des
“7”. Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php

function leetspeak($str){
    
    for($i=0;isset($str[$i]);$i++){
   
        switch ($str[$i]) {
            case $str[$i] == 'a' or $str[$i] == 'A':
                $str[$i] = '4';
                break;
            case $str[$i] == 'b' or $str[$i] == 'B':
                $str[$i] = '8';
                break;
            case $str[$i] == 'e' or $str[$i] == 'E':
                $str[$i] = '3';
                break;
            case $str[$i] == 'g' or $str[$i] == 'G':
                $str[$i] = '6';
                break;
            case $str[$i] == 'l' or $str[$i] == 'L':
                $str[$i] = '1';
                break;
            case $str[$i] == 's' or $str[$i] == 'S':
                $str[$i] = '5'; 
                break;
            case $str[$i] == 't' or $str[$i] == 'T':
                $str[$i] = '7';
                break;
            default:
                $str[$i]  = $str[$i];
                break;
        }

    }

return $str;
}
echo leetspeak('BeBew gg pour Les Travaux');