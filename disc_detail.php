<?php

require "db.php";
$db = ConnexionBase();

$id = $_GET["id"];

$requete = $db -> prepare("SELECT * FROM artist JOIN disc ON artist.artist_id = disc_artist_id");

$requete = $db -> prepare("SELECT * FROM artist WHERE artist_id=?");
$requete = $db -> prepare("SELECT * FROM disc WHERE disc_id=?");

$requete -> execute(array($id));

$myArtist = $requete -> fetch(PDO::FETCH_OBJ);

$requete -> closeCursor();

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PDO - Détail</title>

</head>

<body>

    Title : <br><?php echo $myArtist -> disc_title ?><br><br>
    Artist : <br><?= $myArtist -> artist_name ?><br><br>
    Year : <br><?= $myArtist -> disc_year ?><br><br>
    Genre : <br><?= $myArtist -> disc_genre ?><br><br>
    Label : <br><?= $myArtist -> disc_label ?><br><br>
    Price : <br><?= $myArtist -> disc_price ?><br><br>


<a href="artist_form.php?id=<?= $myArtist -> artist_id ?>">Modifier</a>
<a href="script_artist_delete.php?id=<?= $myArtist -> artist_id ?>">Supprimer</a>

<!--
<?php
    var_dump($_get[15]);
?>
-->

</body>

</html>