<?php

// Menentukan jenis kendaraan dan lama parkir
$jenis = "Mobil";
$lamaJam = 10;

// Menghitung tarif parkir
if ($jenis == "Motor") {
    if ($lamaJam <= 12) {
        $tarif = 2000;
    } else {
        $tarif = 2000 + (($lamaJam - 2) * 1000);
    }
} elseif ($jenis == "Mobil") {
    if ($lamaJam <= 2) {
        $tarif = 5000;
    } else {
        $tarif = 5000 + (($lamaJam - 2) * 3000);
    }
} else {
    $tarif = 0;
}

// Format tarif ke Rupiah
$tarifRupiah = "Rp " . number_format($tarif, 0, ',', '.');

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gio Store - Tarif Parkir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">

        <div class="text-center mb-6">
            <p class="text-sm font-bold uppercase tracking-widest text-indigo-600 mb-2">
                Gio Store
            </p>

            <h1 class="text-2xl font-bold text-gray-800">
                TARIF PARKIR
            </h1>

            <p class="text-gray-500 mt-2">
                Sistem Pembayaran Parkir
            </p>
        </div>

        <div class="border-t border-dashed border-gray-300 mb-6"></div>

        <div class="bg-indigo-50 rounded-xl p-5 mb-4">
            <p class="text-gray-500 text-sm">Jenis Kendaraan</p>
            <p class="text-xl font-semibold text-indigo-700">
                <?php echo htmlspecialchars($jenis); ?>
            </p>
        </div>

        <div class="bg-gray-50 rounded-xl p-5 mb-4">
            <p class="text-gray-500 text-sm">Lama Parkir</p>
            <p class="text-xl font-semibold text-gray-800">
                <?php echo $lamaJam; ?> Jam
            </p>
        </div>

        <div class="bg-green-50 rounded-xl p-5">
            <p class="text-gray-500 text-sm">Total Bayar</p>
            <p class="text-3xl font-bold text-green-700">
                <?php echo $tarifRupiah; ?>
            </p>
        </div>

        <div class="text-center mt-8 pt-5 border-t border-dashed border-gray-300">
            <p class="text-gray-500">
                Terima kasih telah menggunakan layanan parkir kami!
            </p>
        </div>

    </div>

</body>
</html>