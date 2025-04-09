// Varijanta 1
<?php
include 'ff_2025-02-19.php';

foreach ($FranzFerdinand as $album) {
    echo $album['album_naslov'] . "<br>";
}
?>

//Varijanta 2
<?php
include 'ff_2025-02-19.php';

foreach ($FranzFerdinand as $album) {
    $godina = date("Y", strtotime($album['datum_izdanja']));
    $broj_pjesama = count($album['pjesme_albuma']);
    echo $album['album_naslov'] . " ($godina) ($broj_pjesama)<br>";
}
?>

// Varijanta 3: Ispisujemo samo albume koji imaju barem 15 pjesama
<?php
include 'ff_2025-02-19.php';

foreach ($FranzFerdinand as $album) {
    $broj_pjesama = count($album['pjesme_albuma']);
    if ($broj_pjesama >= 15) {
        $godina = date("Y", strtotime($album['datum_izdanja']));
        echo $album['album_naslov'] . " ($godina) ($broj_pjesama)<br>";
    }
}
?>
