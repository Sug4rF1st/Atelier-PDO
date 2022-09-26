<?php

include "db.php";
$db = ConnexionBase();

$requete = $db -> prepare("SELECT * FROM artist WHERE artist_id=?");
$requete -> execute(array($_GET["id"]));

$myArtist = $requete -> fetch(PDO::FETCH_OBJ);
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

<form action="script_disc_modif.php" method="POST">

<input type="hidden" name="id" value="<?= $myArtist -> artist_id ?>">

<label for="artist_name2">Nom de de l'artiste : </label><br>
<input type="text" name="artist_name2" id="artist_name2" value="<?= $myArtist -> artist_url ?>">
<br><br>

<input type="reset" value="Annuler">
<input type="submit" value="Modifier">

</form>

</body>

</html>