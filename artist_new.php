<?php
include "db.php"
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ajout d'artiste</title>

</head>

<body>

    <h1>Saisie d'un nouvel artiste</h1>

    <a href="disc.php"><button>Retour à la liste des disc</button></a>

    <br>
    <br>

    <div>
        <form action="script_artist_ajout.php" method="post">
            <label for="artist_name">Nom de l'artiste : </label><br>
            <input type="text" name="artist_name" id="artist_name">
            <br><br>

            <label for="artist_url">Adresse site internet : </label><br>
            <input type="text" name="artist_url" id="artist_url">
            <br><br>

            <input type="submit" value="Ajouter">
            <a href="disc.php"><button>Retour</button></a>

        </form>
    </div>

</body>

</html>