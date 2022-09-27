<?php
if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0) GOTO TrtRedirection;

require "db.php";

$db = ConnexionBase();

try{
    $requete2 = $db -> prepare("DELETE FROM disc WHERE disc_id = ?");
    $requete2 -> execute(array($_GET["id"]));
    $requete2 -> execute();
    $requete2 -> closeCursor();
}


catch (Exception $e) {
    echo "Erreur : " . $requete2 -> errorInfo()[2] . "<br>";
    die("fin du script (script_artist_modif.php)");
}

TrtRedirection:
header("Location: disc.php");
exit;
?>