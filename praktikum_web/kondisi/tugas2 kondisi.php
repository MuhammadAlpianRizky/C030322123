<?php
$nilai = 70;

if ($nilai >= 0 && $nilai <= 100) {
    echo "Nilai : $nilai  <br>";

    switch (true) {
        case $nilai >= 90 && $nilai <= 100:
            echo "Huruf : A <br>";
            echo "Keterangan: Sangat Baik";
            break;
        case $nilai >= 76 && $nilai <= 89:
            echo "Huruf : B <br>";
            echo "Keterangan: Baik";
            break;
        case $nilai >= 60 && $nilai <= 75:
            echo "Huruf : C <br>";
            echo "Keterangan: Cukup";
            break;
        case $nilai >= 50 && $nilai <= 59:
            echo "Huruf : D <br>";
            echo "Keterangan: Kurang";
            break;
        case $nilai >= 0 && $nilai <= 49:
            echo "Huruf : E <br>";
            echo "Keterangan: Sangat Kurang";
            break;
        default:
            echo "Nilai tidak valid";
    }
} else {
    echo "Nilai tidak valid";
}
?>