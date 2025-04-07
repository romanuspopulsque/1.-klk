// 2. ZADATAK: Ispis albuma iz niza $FranzFerdinand
<?php

include 'ff_2025-02-19.php'; // Uključujemo datoteku s nizom

// Prolazimo kroz niz i ispisujemo naslove albuma s godinom izdanja i brojem pjesama
foreach ($FranzFerdinand as $album) {
    $naslov = $album["album_naslov"];
    $godina = substr($album["datum_izdanja"], 0, 4); // Izvlačimo samo godinu
    $broj_pjesama = count($album["pjesme_albuma"]);
    
    echo "$naslov ($godina) ($broj_pjesama)<br>";
}

// Varijanta 3: Ispisujemo samo albume koji imaju barem 15 pjesama
echo "<br><strong>Albumi s najmanje 15 pjesama:</strong><br>";
foreach ($FranzFerdinand as $album) {
    $naslov = $album["album_naslov"];
    $godina = substr($album["datum_izdanja"], 0, 4);
    $broj_pjesama = count($album["pjesme_albuma"]);
    
    if ($broj_pjesama >= 15) {
        echo "$naslov ($godina) ($broj_pjesama)<br>";
    }
}

?>