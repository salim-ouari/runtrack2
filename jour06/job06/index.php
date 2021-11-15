<!-- Créez un formulaire qui contient une liste
déroulante nommé “style” et un bouton submit.
La liste déroulante doit proposer au moins “style1”,
“style2” et “style3. Créez 3 fichiers css nommés
“style1.css”,“style2.css” et “style3.css”. Chaque
style doit avoir des effets surle design du formulaire,
la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style
sélectionné doit être incluet donc changer le visuel. -->

<?php
$cssLink = '<link rel="stylesheet" href="style1.css">';
// SI variable est déclaré et pas NULL (isset)
// && que $getstyle = style1
if (isset($_GET["submit"]) && $_GET['styles'] == "style1") {
    $cssLink = '<link rel="stylesheet" href="style1.css">';

}
if (isset($_GET["submit"]) && $_GET['styles'] == "style2") {
    $cssLink = '<link rel="stylesheet" href="style2.css">';
    
}

elseif (isset($_GET["submit"]) && $_GET['styles'] == "style3") {
    $cssLink = '<link rel="stylesheet" href="style3.css">';

}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- affiche -->
    <?php echo $cssLink; ?>
    
</head>
<body>
    


<form action= "index.php" method="get">
    <select name="styles" type="text">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
        <option value="style3">style3</option>
    </select>

<input type="submit" name='submit' value="Submit" class="button">
</form>
</body>
</html>