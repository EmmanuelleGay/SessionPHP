<?php
session_start();
$myDate = new DateTime();
$_SESSION['visites']['chaussure'] =$myDate->getTimestamp();

?>

<h1>Chaussure</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>