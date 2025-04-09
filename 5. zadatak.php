<?php

function sl_datum($pocetak, $kraj) {
    // Pretvori datume u UNIX timestamp
    $start = strtotime($pocetak);
    $end = strtotime($kraj);

    // Generiraj slučajni timestamp između početka i kraja
    $randomTimestamp = rand($start, $end);

    // Vrati datum u formatu d.m.Y.
    return date("j.n.Y.", $randomTimestamp);
}

// Primjer poziva
echo sl_datum("2023-06-01", "2024-06-26");

?>
