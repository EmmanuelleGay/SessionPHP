<?php
session_start();
$myDate = new DateTime();
//$_SESSION['visites'] = ['robot'];
$_SESSION['visites']['robot']=$myDate->getTimestamp();

?>

<h1>Robot</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>