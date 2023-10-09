<?php
// Membuat array asosiatif
$student_scores = array(
    "Alice" => 90,
    "Bob" => 85,
    "Charlie" => 78,
    "David" => 92,
    "Eve" => 88
);

// Menampilkan array sebelum pengurutan
echo "Array sebelum pengurutan:<br>";
print_r($student_scores);

// Pengurutan berdasarkan nilai (ascending)
asort($student_scores);
echo "<br>Array setelah pengurutan ascending berdasarkan nilai (asort):<br>";
print_r($student_scores);

// Pengurutan berdasarkan nama (ascending)
ksort($student_scores);
echo "<br>Array setelah pengurutan ascending berdasarkan nama (ksort):<br>";
print_r($student_scores);

// Pengurutan berdasarkan nilai (descending)
rsort($student_scores);
echo "<br>Array setelah pengurutan descending berdasarkan nilai (rsort):<br>";
print_r($student_scores);

// Pengurutan berdasarkan nilai (descending) menggunakan arsort
arsort($student_scores);
echo "<br>Array setelah pengurutan descending berdasarkan nilai (arsort):<br>";
print_r($student_scores);

// Pengurutan berdasarkan nama (descending) menggunakan krsort
krsort($student_scores);
echo "<br>Array setelah pengurutan descending berdasarkan nama (krsort):<br>";
print_r($student_scores);
?>