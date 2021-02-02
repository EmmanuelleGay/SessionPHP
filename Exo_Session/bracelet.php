<?php
session_start();
$myDate = new DateTime();
$_SESSION['visites']['bracelet'] =$myDate->getTimestamp();

?>


<h1>Bracelet</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>