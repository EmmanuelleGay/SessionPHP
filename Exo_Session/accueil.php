<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'FormatUtil.php';

session_start();

//unset($_SESSION['visites']);

if (!isset($_SESSION['visites'])){
    $_SESSION['visites'] = [];
}



//$_SESSION['visites']= array('souris' => $_SESSION['souris'], 'robot' =>  $_SESSION['robot']);

//echo $_SESSION['visites'][0];

rsort($_SESSION['visites']);

FormatUtil::dump($_SESSION['visites']);
/*foreach($_SESSION['visites'] as $key => $values) {
    echo "$key = $values\n";
}*/


/*

$_SESSION['test'] = array(
    'souris', 'robot', 'altere', 'bracelet', 'casque', 'chaussure', 'montre'
);*/ 


//echo $_SESSION['visites'][1];

/*
foreach ($_SESSION['visites'] as $values) {
    echo $values . '<br />';
}*/

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Session</title>

    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <title>Accueil</title>
    </head>

<body>
    <ul>
        <li><a href="souris.php">Souris</a></li>
        <li><a href="robot.php">Robot</a></li>
        <li><a href="altere.php">Altères</a></li>
        <li><a href="casque.php">Casque</a></li>
        <li><a href="chaussure.php">Chaussures</a></li>
        <li><a href="bracelet.php">Bracelet</a></li>
        <li><a href="montre.php">Montre</a></li>
    </ul>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>coucou</p>

</body>

</html>