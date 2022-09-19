<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        <label for="artist">Artist</label><br>
        <span id="artist"></span>
        <select name="artist" id="artist">
            <option value="" selected>Veuillez selectionner un Artist</option>
            <option value="Neil Young">Neil Young</option>
            <option value="YES">YES</option>
            <option value="Rolling Stones">Rolling Stones</option>
            <option value="Queens of the Stone Age">Queens od the Stone Age</option>
            <option value="Serge Gainsbourg">Serge Gainsbourg</option>
            <option value="AC/DC">AC/DC</option>
            <option value="Marillion">Marillion</option>
            <option value="Bob Dylan">Bob Dylan</option>
            <option value="Fleshtones">Fleshtones</option>
            <option value="The Clash">The Clash</option>
        </select>
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


</body>

</html>