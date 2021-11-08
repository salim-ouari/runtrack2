<!-- Créez une fonction nommée “occurrences”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str” et un caractère nommé
“char”. Elle doit retourner le nombre d'occurrences du caractère “char” dans
“str”. -->


<?php
$phrase= "combien de lettre e dans ma chaine de caractere";
$lettre= 'e';
function occurrences ($str,$char) 
{
$compteur=0;

    for ($i=0; isset($str[$i]); $i++)
    {
        if ($str[$i] ==$char)
        {
            $compteur++;
        }

    } 

    return($compteur);
}

echo occurrences($phrase,$lettre);

