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

?>