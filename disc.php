<?php
include "db.php";

$db = ConnexionBase();
$requete = $db -> query ("SELECT * FROM artist JOIN disc ON  artist.artist_id = disc.artist_id");

$tableau = $requete -> fetchall (PDO::FETCH_OBJ);
$requete -> closeCursor();
?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>

<body>

<h1>Liste des disques</h1>

<table>
    <?php foreach ($tableau as $disc): ?>
        <tr>
            <td><img src="jaquettes/<?= $disc->disc_picture ?>" width="150px"></td>
            <td><b><?= $disc->disc_title ?></b>
            <br>
            <b><?= $disc->artist_name ?></b>
            <b>Label : </b><?= $disc->disc_label ?>
            <br>
            <b>Year : </b><?= $disc->disc_year ?>
            <br>
            <b>Genre : </b><?= $disc->disc_genre ?>
            <br>
            <a href="disc_detail.php?id=<?= $disc->disc_id ?>"><button type="button" class="btn btn-outline-primary">Détails</button></a></td><br><br>
            
        </tr>
    

    <?php endforeach; ?>
</table>

</body>

</html>