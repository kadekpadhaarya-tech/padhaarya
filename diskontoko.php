<?php

$totalAwal = 890000;

if ($totalAwal >= 500000) {
    $persenDiskon = 30;
} elseif ($totalAwal >= 200000) {
    $persenDiskon = 10;
} else {
    $persenDiskon = 0;
}

$besarDiskon = $totalAwal * $persenDiskon / 100;
$totalBayar = $totalAwal - $besarDiskon;

echo "Diskon Toko <br><br>";
echo "Total Awal: Rp " . number_format($totalAwal, 0, ',', '.') . "<br>";
echo "Diskon: $persenDiskon% <br>";
echo "Besar Diskon: Rp " . number_format($besarDiskon, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.');