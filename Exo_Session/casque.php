<?php
session_start();
$myDate = new DateTime();
$_SESSION['visites']['casque'] =$myDate->getTimestamp();

?>


<h1>Casque</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>