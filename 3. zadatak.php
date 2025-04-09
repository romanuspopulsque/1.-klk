<?php

include 'ff_2025-02-19.php';

function import() {
    global $FranzFerdinand;
    return $FranzFerdinand; // Vraća cijeli niz koji je potreban za ispis
}

// Funkcija za ispis pjesama u numeriranoj listi
function listSongs($albums) {
    echo "<ol>"; // Otvori numeriranu listu samo jednom
    foreach ($albums as $album) {
        $year = date("Y", strtotime($album['datum_izdanja'])); // Izdvajanje godine izdanja
        foreach ($album['pjesme_albuma'] as $song => $duration) {
            echo "<li>$song ({$album['album_naslov']}, $year) - $duration</li>";
        }
    }
    echo "</ol>"; // Zatvori listu
}

// Poziv funkcije import za dobivanje podataka
$albums = import(); // Dohvati sve albume

// Poziv funkcije listSongs za ispis pjesama
listSongs($albums); // Ispis pjesama u numeriranoj listi

?>
