<?php
// 4. ZADATAK: HTML forma za odabir albuma i prikaz pjesama

include 'ff_2025-02-19.php';

function import() {
    global $FranzFerdinand;
    return $FranzFerdinand; // Vraća cijeli niz koji je potreban za ispis
}

// Funkcija za ispis pjesama u numeriranoj listi
function listSongs($albums, $albumId) {
    echo "<ol>";
    $counter = 1; // Brojač za numeriranje
    foreach ($albums[$albumId]['pjesme_albuma'] as $song => $duration) {
        echo "<li>$counter. $song - $duration</li>";
        $counter++; // Povećaj brojač
    }
    echo "</ol>";
}

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franz Ferdinand - Pjesme albuma</title>
</head>
<body>

<h2>Odaberite album i prikažite pjesme</h2>

<!-- HTML Forma za odabir albuma -->
<form method="POST">
    <label for="album">Odaberite album:</label>
    <select name="album_id" id="album">
        <?php
        // Generiraj opcije u selectu za svaki album
        $albums = import();
        foreach ($albums as $id => $album) {
            echo "<option value='$id'>{$album['album_naslov']} ({$album['datum_izdanja']})</option>";
        }
        ?>
    </select>
    <button type="submit" name="prikazi">Prikaži</button>
</form>

<?php
// Provjera je li korisnik odabrao album i kliknuo "Prikaži"
if (isset($_POST['prikazi'])) {
    $albumId = $_POST['album_id']; // Dohvati ID odabranog albuma
    echo "<h3>Pjesme albuma: {$albums[$albumId]['album_naslov']}</h3>";
    // Pozivanje funkcije koja prikazuje pjesme
    listSongs($albums, $albumId);
}
?>

</body>
</html>