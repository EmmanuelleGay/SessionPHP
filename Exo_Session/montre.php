<?php
session_start();
$myDate = new DateTime();
$_SESSION['visites']['montre'] =$myDate->getTimestamp();

?>

<h1>Montre</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>