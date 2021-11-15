<!-- Créez un formulaire de connexion qui contient un input de type de text
nommé “prenom” et un bouton submit nommé “connexion”. Lorsque l’on
valide le formulaire, le prénom est ajouté dans un cookie.

<?php


// Si un utilisateur a
// déjà entré son prénom n'affichez plus le formulaire de connexion.
// A laplace, écrivez “Bonjour prenom !” et ajouter un bouton “Déconnexion”
// nommé “deco”.


// Lorsque l’utilisateur se déconnecte, il faut à nouveau
// afficher le formulaire de connexion. -->


?>

<!DOCTYPE html>
<html>
    
<form action="./index.php" method="post">

            <label for="last-name">prénom </label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" value="connexion">

            <input type="submit" name="Deconnexion" value="Deco">
    </form>