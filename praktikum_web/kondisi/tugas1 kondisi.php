<?php
// Jumlah lembar fotokopi yang akan dibuat
$jumlah_fotokopi = 158;

// Menggunakan kondisi If-Else untuk menentukan harga per lembar
if ($jumlah_fotokopi < 100) {
    $harga_per_lembar = 150;
} elseif ($jumlah_fotokopi >= 100 && $jumlah_fotokopi <= 200) {
    $harga_per_lembar = 100;
} else {
    $harga_per_lembar = 80;
}

// Menghitung total biaya
$total_biaya = $jumlah_fotokopi * $harga_per_lembar;
// Menampilkan hasil
echo "Jumlah Fotokopi : $jumlah_fotokopi lembar<br>";
echo "Harga per Lembar : Rp. $harga_per_lembar<br>";
echo "Total Biaya yang harus dibayar sebesar Rp.".number_format($total_biaya).".-";
?>