<?php
include "db.php";
$db = ConnexionBase();
$requete4 = $db -> query ("SELECT artist_name FROM artist");
$tableau4 = $requete4 -> fetchall(PDO::FETCH_OBJ);
$requete4 -> closeCursor();

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ajout</title>

</head>

<body>

    <h1>Ajouter un vinyle</h1>

    

    <br>
    <br>

    <form action="script_disc_ajout.php" method="post">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" placeholder="Enter title">
        <br><br>

    <div class="defliant">
        <label for="artist">Artist</label><br>
        <select class="artist2" id="artist2">
            <?php foreach($tableau4 as $artist4): ?>
            <option><?= $artist4->artist_name; ?></option>
            <?php endforeach;?>
        </select>
    </div>
        <br><br>

        <label for="year">Year</label><br>
        <input type="text" name="year" id="year" placeholder="Enter year"><br>
        <br><br>

        <label for="genre">Genre</label><br>
        <input type="text" name="genre" id="genre" placeholder="Enter genre (Rock, Pop, Prog...)">
        <br><br>

        <label for="label">Label</label><br>
        <input type="text" name="label" id="label" placeholder="Enter label (EMI, Warner, PolyGram, Univers sale...)">
        <br><br>

        <label for="price">Price</label><br>
        <input type="text" name="price" id="price" placeholder="">
        <br><br>

        <label for="picture">Picture</label><br>
        <input type="file" name="picture" id="picture">
        <br><br>
        <input type="submit" value="Ajouter">

        <a href="disc.php"><button>Retour</button></a>
    </form>

    <?php

    ?>
</body>

</html>