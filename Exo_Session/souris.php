<?php
session_start();
$myDate = new DateTime();
//$_SESSION['souris']=[];

$myDate->getTimestamp();
$_SESSION['visites']['souris']=$myDate->getTimestamp();

/*foreach($_SESSION['souris'] as $key => $values) {
    echo "$key = $values\n";
}
*/

?>



<h1>Souris</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>