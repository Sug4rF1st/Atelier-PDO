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
        <label for="Title">Title</label><br>
        <input type="text" name="Title" id="Title" placeholder="Enter title">
        <br><br>

        <label for="Artist">Artist</label><br>
        <span id="Artist"></span>
        <select name="Artist" id="Artist">
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

        <label for="Year">Year</label><br>
        <input type="text" name="Year" id="Year" placeholder="Enter year"><br>
        <br><br>

        <label for="Genre">Genre</label><br>
        <input type="text" name="Genre" id="Genre" placeholder="Enter genre (Rock, Pop, Prog...)">
        <br><br>

        <label for="Label">Label</label><br>
        <input type="text" name="Label" id="Label" placeholder="Enter label (EMI, Warner, PolyGram, Univers sale...)">
        <br><br>

        <label for="Price">Price</label><br>
        <input type="text" name="Price" id="Price" placeholder="">
        <br><br>

        <label for="Picture">Picture</label><br>
        <input type="file" name="Picture" id="Picture">
        <br><br>
        <input type="submit" value="Ajouter">

        <a href="disc.php"><button>Retour</button></a>
    </form>


</body>

</html>