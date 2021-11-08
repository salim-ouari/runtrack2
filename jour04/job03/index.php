<!-- Développez un algorithme qui affiche le nombre d’arguments POST.
Tips : Pour tester, créez un formulaire html de type POST avec différents
input. -->

<?php
var_dump($_POST);

$i = 0;
foreach($_POST as $val)
{
    $i++;
}
echo(" \$_POST a ".$i." arguments");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<html>
<head>
    <body>
        <form action="./index.php" method="get">
            <label for="fname">first name </label>
            <input type="text" id="fname" name="fname">
            <label for="lname">last name </label>
            <input type="text" id="lname" name="lname">
            <input type="submit" value="envoyer">
    </form>
    </body>
</head>

</html>