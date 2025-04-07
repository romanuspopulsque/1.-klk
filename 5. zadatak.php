<?php
function sl_datum($startDate, $endDate) {
    // Pretvori početni i krajnji datum u timestamp
    $startTimestamp = strtotime($startDate);
    $endTimestamp = strtotime($endDate);

    // Generiraj slučajan timestamp između startTimestamp i endTimestamp
    $randomTimestamp = rand($startTimestamp, $endTimestamp);

    // Pretvori random timestamp u datum u željenom formatu
    return date('j.n.Y', $randomTimestamp); // Format d.m.G
}

// Primjer upotrebe:
echo sl_datum("2023-06-01", "2024-06-26");
?>