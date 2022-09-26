<?php
$id2 = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
$nom2 = (isset($_POST['artist_name']) && $_POST['artist_name'] != "") ? $_POST['artist_name'] : Null;
$url2 = (isset($_POST['artist_url']) && $_POST['artist_url'] != "") ? $_POST['artist_url'] : Null;

if ($id2 == Null) {
    header("Location: disc.php");
}

elseif ($nom2 == Null || $url2 == Null) {
    header("Location: disc_detail.phpid?=".$id2);
    exit;
}

require "db.php";
$db = ConnexionBase();

try {
    $requete2 = $db -> prepare("UPDATE artist SET artist_name = :nom, artist_url = :url WHERE artist_id = :id;");
    $requete2 -> bindValue(":id", $id2, PDO::PARAM_INT);
    $requete2 -> bindValue(":nom", $nom2, PDO::PARAM_STR);
    $requete2 -> bindValue(":url", $url2, PDO::PARAM_STR);

    $requete2 -> execute();
    $requete2 -> closeCursor();
}

catch (Exception $e) {
    echo "Erreur : " . $requete2 -> errorInfo()[2] . "<br>";
    die("Fin du script (script_disc_modif.php)");
}

header("Location: disc_detail.php?id=" . $id2);
exit;
?>