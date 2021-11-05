<?php
//  Créez une string nommée str et affectez y “Dans l'espace, personne ne
// vous entend crier”. Créez un algorithme qui parcourt, compte et affiche le
// nombre de caractères présents dans cette chaîne.

$str = "Dans l'espace, personne ne
vous entend crier.";

// ici je parcours ma chaine de caractere et je la compte avec lindex $x
// le {} me permet seulement dafficher le nbre dernier de la chaine cad 46
// sinon echo affichera chaque numéro d'index

for ($x=0; isset($str[$x] ); $x++){}

echo $x .'<br>';

$i=0;

// avec le while 

while(isset($str[$i])){
    $i=$i+ 1;
}
echo $i;
