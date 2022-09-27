<?php

require "db.php";
$db = ConnexionBase();

$id = $_GET["id"];

$requete1 = $db -> prepare("SELECT * FROM disc JOIN artist ON artist.artist_id = disc.artist_id where disc_id = :id");
$requete1 -> bindValue(":id", $id, PDO::PARAM_STR);
$requete1 -> execute();
$myArtist = $requete1 -> fetch(PDO::FETCH_OBJ);
$requete1 -> closeCursor();

//var_dump($myArtist);
//die;

$requete2 = $db -> prepare("SELECT * FROM artist WHERE artist_id=?");
$requete2 -> execute([$id]);
//$myArtist = $requete2 -> fetch(PDO::FETCH_OBJ);
$requete2 -> closeCursor();

$requete3 = $db -> prepare("SELECT * FROM disc WHERE disc_id=?");
$requete3 -> execute([$id]);
//$myArtist = $requete3 -> fetch(PDO::FETCH_OBJ);
$requete3 -> closeCursor();

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Détail</title>

</head>

<body>

    <table border=2>

        <tr>
            <td>Title : <br><?php echo $myArtist -> disc_title ?><br><br></td>
            <td>Artist : <br><?= $myArtist -> artist_name ?><br><br></td>
            <td>Year : <br><?= $myArtist -> disc_year ?><br><br></td>
            <td>Genre : <br><?= $myArtist -> disc_genre ?><br><br></td>
            <td>Label : <br><?= $myArtist -> disc_label ?><br><br></td>
            <td>Price : <br><?= $myArtist -> disc_price ?><br><br></td>
            <td>Picture : <br><?= $myArtist -> disc_picture ?><br><br></td>

            <td><a href="disc_modif.php?id=<?= $myArtist -> disc_id ?>">Modifier</a></td>
            <td><a href="script_disc_delete.php?id=<?= $myArtist -> disc_id ?>">Supprimer</a></td>
        </tr>

</table>
</body>

</html>