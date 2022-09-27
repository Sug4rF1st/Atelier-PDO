<?php

require "db.php";
$db = ConnexionBase();

$requete2 = $db -> prepare("SELECT * FROM disc JOIN artist ON artist.artist_id = disc.artist_id WHERE disc_id = :id");
$requete2 -> bindValue(":id", $_GET["id"], PDO::PARAM_STR);
$requete2 -> execute();
$myArtist = $requete2 -> fetch(PDO::FETCH_OBJ);
$requete2 -> closeCursor();

$requete = $db -> prepare("SELECT * FROM artist WHERE artist_id=?");
$requete -> execute(array($_GET["id"]));
$requete -> closeCursor();

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Modification de disc</title>

</head>

<body>

<h1>Artist n°<?= $myArtist -> artist_id; ?></h1>

<a href="disc.php">Retour à la liste des disc</a>

<br>
<br>

<form action="script_disc_modif.php" method="post">

<input type="hidden" name="id" value="<?= $myArtist -> artist_id ?>">

<label for="artist_name2">Nom de de l'artiste : </label><br>
<input type="text" name="artist_name2" id="artist_name2" value="<?= $myArtist -> artist_url ?>">
<br><br>

<input type="hidden" name="title" value="<?= $myArtist -> disc_title ?>">

<label for="disc_title2">Title : </label><br>
<input type="text" name="disc_title2" id="disc_tilte2" value="<?= $myArtist -> disc_title ?>">
<br><br>

<input type="hidden" name="Year" value="<?= $myArtist -> disc_year ?>">

<label for="disc_year2">Year : </label><br>
<input type="text" name="dsic_year2" id="disc_year2" value="<?= $myArtist -> disc_year ?>">
<br><br>

<input type="hidden" name="disc_genre2" value="<?= $myArtist -> disc_genre ?>">

<label for="disc_genre2">Genre : </label><br>
<input type="text" name="disc_genre2" id="disc_genre2" value="<?= $myArtist -> disc_genre ?>">
<br><br>

<input type="hidden" name="disc_label2" value="<?= $myArtist -> disc_label?>">

<label for="disc_label2">Label : </label><br>
<input type="text" name="disc_label2" id="disc_label2" value="<?= $myArtist -> disc_label ?>"></input>
<br><br>

<input type="hidden" name="disc_price2" value="<?= $myArtist -> disc_price ?>">

<label for="disc_price">Price : </label><br>
<input type="text" name="disc_price2" id="disc_price2" value="<?= $myArtist -> disc_price?>">
<br><br>

<input type="reset" value="Annuler">
<input type="submit" value="Modifier">

</form>

</body>

</html>