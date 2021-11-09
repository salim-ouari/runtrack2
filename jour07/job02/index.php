<!-- Créez un cookie nommée “nbvisites”. A chaque fois que la page est visitée,
ajoutez 1. Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->


<?php

$value=1;

setcookie("nbvisites", $value, time()+5);

// si on appuie sur reset 
if (isset($_POST['reset'])) {
// affiche moi 0
    echo "0";
// et efface le cookie "nbvisites 
    unset($_COOKIE["nbvisites"]);
    
}
// si mon $cookie existe
if (isset($_COOKIE["nbvisites"])){
// rajoute 1 a la valeur $cookie
    setcookie("nbvisites",$_COOKIE["nbvisites"]+1);
// et affiche le
    echo ($_COOKIE["nbvisites"]);
}

?>

    <form action="" method="post">
    <input type="submit" name="reset" value="reset">
</form>