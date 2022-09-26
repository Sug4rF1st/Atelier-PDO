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
    
    <title>Note 2 Music</title>

</head>

<div>
    <div>
        <h1 id="titre">Note 2 Music</h1>
    </div>

    <div id=note_de_music>
        <img src="/src/image/note_de_musique.jpeg" alt="logo" id="Logo">
    </div>
</div>


<div class="colonne4" id="entete">
    <nav>
        <ul class="Page">
            <a href="disc.php" title="Accueil">Accueil</a>
            <a href="disc_new.php" tilte="Ajout_de_disc">Ajout de disc</a>
            <a href="artist_new.php" title="Ajout_d'artiste">Ajout d'Artiste</a>
        </ul>
    </nav>
</div>

<body>

<h1>Liste des disques</h1>

<div class="container-fluid" id="disc7">
    <table>
        <?php foreach ($tableau as $disc): ?>
            <tr>
                <td><img src="jaquettes/<?= $disc->disc_picture ?>" width="100px"></td>
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
</div>


<div class="colonne5" id="pieddepage">
    <nav>
        <ul class="Page">
            <a href="disc.php" tilte="Accueil">Accueil</a>
            <a href="disc_new.php" title="Ajout_de_Disc">Ajout de disc</a>
            <a href="ajout_artist" tilte="Ajout_d'artiste">Ajout d'Artiste</a>
        </ul>
    </nav>
</div>

</body>

</html>