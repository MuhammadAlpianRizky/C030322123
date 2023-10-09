<?php
// Membuat array asosiatif
$tinggi_badan = array(
    "Alpi" => 189,
    "Bima" => 185,
    "Irna" => 178,
    "Haekal" => 192,
    "Rikuni" => 188
);

// Menampilkan array sebelum pengurutan
echo "Array sebelum pengurutan:<br>";
foreach ($tinggi_badan as $name => $score) {
    echo "$name => $score<br>";
}

// Pengurutan berdasarkan nilai (ascending)
asort($tinggi_badan);
echo "<br>Array setelah pengurutan ascending berdasarkan nilai (asort):<br>";
foreach ($tinggi_badan as $name => $score) {
    echo "$name => $score<br>";
}

// Pengurutan berdasarkan nama (ascending)
ksort($tinggi_badan);
echo "<br>Array setelah pengurutan ascending berdasarkan nama (ksort):<br>";
foreach ($tinggi_badan as $name => $score) {
    echo "$name => $score<br>";
}

// Pengurutan berdasarkan nilai (descending) menggunakan arsort
arsort($tinggi_badan);
echo "<br>Array setelah pengurutan descending berdasarkan nilai (arsort):<br>";
foreach ($tinggi_badan as $name => $score) {
    echo "$name => $score<br>";
}

// Pengurutan berdasarkan nama (descending) menggunakan krsort
krsort($tinggi_badan);
echo "<br>Array setelah pengurutan descending berdasarkan nama (krsort):<br>";
foreach ($tinggi_badan as $name => $score) {
    echo "$name => $score<br>";
}

// Pengurutan berdasarkan nilai (descending)
rsort($tinggi_badan);
echo "<br>Array setelah pengurutan descending berdasarkan nilai (rsort):<br>";
foreach ($tinggi_badan as $name => $score) {
    echo "$name => $score<br>";
}

// Memeriksa apakah array kosong
$is_empty = empty($tinggi_badan);
echo "<br>Apakah array kosong? " . ($is_empty ? "Ya" : "Tidak");

// Menghitung jumlah semua elemen dalam array
$total_score = array_sum($tinggi_badan);
echo "<br>Total tinggi badan: $total_score";

// Menghitung hasil perkalian semua elemen dalam array
$product_score = array_product($tinggi_badan);
echo "<br>Hasil perkalian tinggi badan: $product_score";

// Mengembalikan elemen-elemen yang memenuhi kondisi tertentu
function isTinggi($value) {
    return $value >= 185;
}
$tinggi = array_filter($tinggi_badan, "isTinggi");
echo "<br>Array setelah filter tinggi badan di atas 185:<br>";
foreach ($tinggi as $name => $score) {
    echo "$name => $score<br>";
}

// Membalik urutan elemen dalam array
$reversed_array = array_reverse($tinggi_badan, true); // Mempertahankan keterkaitan antara kunci dan nilai
echo "<br>Array setelah dibalik:<br>";
foreach ($reversed_array as $name => $score) {
    echo "$name => $score<br>";
}
?>