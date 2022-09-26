<?php

if(isset($_POST['artist_name']) && $_POST['artist_name'] != "") {
    $nom = $_POST['artist_name'];
}

else {
    $nom = Null;
}

$url = (isset($_POST['artist_url']) && $_POST['artist_url'] != "") ? $_POST['artist_url'] : Null;

if($nom == Null || $url == Null) {
    header("Location : disc_new.php");
    //exit;
}

require "db.php";
$db = ConnexionBase();

try {
    $requete10 = $db -> prepare("INSERT INTO artist (artist_name, artist_url) VALUE (:artist_name, :artist_url)");

    $requete10 -> bindValue(":artist_url", $url, PDO::PARAM_STR);
    $requete10 -> bindValue(":artist_name", $nom, PDO::PARAM_STR);

    $requete10 -> execute();

    $requete10 -> closeCursor();
}



catch(Exception $e) {
    var_dump($requete10 -> queryString);
    var_dump($requete10 -> errorInfo());

    echo "Erreur : " . $requete10 -> errorInfo()[2] . "<br>";
    echo "Erreur 2 : " . $e -> getMessage();
    //die("Fin du script (script_artist_ajout.php)");
}
//var_dump($requete10);

//header("Location : disc.php");
//exit;

?>