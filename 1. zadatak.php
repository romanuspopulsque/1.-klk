<?php
// Funkcija za ispisivanje zvjezdica za sve tri varijante
function printStars($max_number, $variant) {
    if ($variant == 1) {
        // Varijanta 1: Od 1 do max_number
        for ($i = 1; $i <= $max_number; $i++) {
            echo str_repeat('*', $i) . '<br>';
        }
    } elseif ($variant == 2) {
        // Varijanta 2: Od max_number do 1
        for ($i = $max_number; $i >= 1; $i--) {
            echo str_repeat('*', $i) . '<br>';
        }
    } elseif ($variant == 3) {
        // Varijanta 3: Od max_number do 1, pa ponovno od 1 do max_number
        for ($i = $max_number; $i >= 1; $i--) {
            echo str_repeat('*', $i) . '<br>';
        }
        for ($i = 2; $i <= $max_number; $i++) {
            echo str_repeat('*', $i) . '<br>';
        }
    }
}

// Provjera da li je forma poslata
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $max_number = (int)$_POST['max_number'];
    $variant = (int)$_POST['variant'];
    printStars($max_number, $variant);
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Zadatak</title>
</head>
<body>
    <h1>Odaberite varijantu i broj za ispisivanje zvjezdica</h1>

    <!-- Forma za unos broja i odabir varijante -->
    <form method="POST" action="">
        <label for="max_number">Unesite broj (npr. 5):</label>
        <input type="number" id="max_number" name="max_number" value="5" min="1" required>
        <br><br>

        <button type="submit" name="variant" value="1">Varijanta 1 (Od 1 do max_number)</button>
        <button type="submit" name="variant" value="2">Varijanta 2 (Od max_number do 1)</button>
        <button type="submit" name="variant" value="3">Varijanta 3 (Od max_number do 1 i opet do max_number)</button>
    </form>
</body>
</html>