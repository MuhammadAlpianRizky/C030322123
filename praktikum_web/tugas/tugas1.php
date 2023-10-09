<?php
    $saldoAwal = 2000000;
    $bunga = 0.03;
    $bulan = 11;
    $saldoAkhir = ($saldoAwal*$bunga*$bulan)+$saldoAwal;
    // lengkapi pada perhitungan $saldo akhir
    echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. 
    ".number_format($saldoAkhir).",-";
    ?>