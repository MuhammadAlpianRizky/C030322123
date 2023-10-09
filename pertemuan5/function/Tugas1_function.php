<?php
// Function untuk mengecek apakah suatu bilangan ganjil
function isOdd($number) {
    return $number % 2 != 0;
}

// Inisialisasi variabel jumlah ganjil
$jumlahGanjil = 0;

// Rentang angka dari 10 sampai 123456
for ($i = 10; $i <= 123456; $i++) {
    // Jika bilangan ini ganjil, tambahkan ke jumlah ganjil
    if (isOdd($i)) {
        $jumlahGanjil++;
    }
}

// Tampilkan jumlah bilangan ganjil
echo "Jumlah bilangan ganjil antara 10 dan 123456 adalah: " . $jumlahGanjil;
?>
