<?php
$hitungan = 0;
for ($i = 3; $i <= 127; $i++) {
    if ($i % 6 == 0) {
        $hitungan++;
    }
}

echo "Banyaknya bilangan kelipatan 6 dari 3 sampai 127 adalah: " . $hitungan;
?>