<!-- La principale différence entre les cookies et les sessions réside dans 
le fait que les informations stockées dans un cookie sont stockées
 dans le navigateur du visiteur,contrairement aux informations stockées
  dans une session. Elles sont stockées sur le serveur Web. -->


<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la
page est visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

// Initialisation et restauration d'une session
session_start();

echo $_SESSION ['nbvisites']= $_SESSION['nbvisites']+1;

if (isset($_POST['reset'])) 

// reinitialisé la session sans la supprimé
{
    session_unset() ;

}
    

?>

    <form action="" method="post">
    <input type="submit" name="reset" value="reset">
</form>

