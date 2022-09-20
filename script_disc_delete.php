<?php
if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0) GOTO TrtRedirection;

require "db.php";

$db = ConnexionBase();

try{
    $requete1 = $db -> prepare("SELECT * FROM disc JOIN artist ON artist.artist_id = disc.artist_id");
    $requete1 -> execute();
    $myArtist = $requete1 -> fetch(PDO::FETCH_OBJ);
    $requete1 -> closeCursor();


    $requete2 = $db -> prepare("DELETE FROM artist WHERE artist_id = ?");
    $requete2 -> execute(array($_GET["id"]));
    $requete2 -> execute();
    $requete2 -> closeCursor();
    


}


catch (Exception $e) {
    echo "Erreur : " . $requete1 -> errorInfo()[2] . "<br>";
    die("fin du script (script_artist_modif.php)");

}

TrtRedirection:
header("Location: disc.php");
exit;