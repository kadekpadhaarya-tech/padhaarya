<?php

$berat = 100;
$tinggi = 1.90;

$bmi = $berat / ($tinggi * $tinggi);

if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi < 25) {
    $kategori = "Normal";
} elseif ($bmi < 30) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}

echo "Indeks Massa Tubuh (BMI) <br><br>";
echo "Berat Badan: $berat kg <br>";
echo "Tinggi Badan: $tinggi meter <br>";
echo "BMI: " . number_format($bmi, 1, ',', '.') . "<br>";
echo "Kategori: $kategori";