<?php
session_start();
$myDate = new DateTime();
$_SESSION['visites']['altere'] =$myDate->getTimestamp();

?>



<h1>Altères</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>