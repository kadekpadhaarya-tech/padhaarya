<?php

$namaBarang = "baju bola";
$harga = 950000;
$jumlah = 5;

$totalHarga = $harga * $jumlah;

echo "Kalkulator Belanja <br><br>";
echo "Nama Barang: $namaBarang <br>";
echo "Harga Barang: Rp " . number_format($harga, 0, ',', '.') . "<br>";
echo "Jumlah Barang: $jumlah <br>";
echo "Total Harga: Rp " . number_format($totalHarga, 0, ',', '.');