<?php
$bln = date("M");
switch ($bln) {
    case "Jan":
        $namaBln = "Januari";
        $jumlahHari = 31;
        break;
    case "Feb":
        $namaBln = "Februari";
            $jumlahHari = 28;
        break;
    case "Mar":
        $namaBln = "Maret";
        $jumlahHari = 31;
        break;
    case "Apr":
        $namaBln = "April";
        $jumlahHari = 30;
        break;
    case "May":
        $namaBln = "Mei";
        $jumlahHari = 31;
        break;
     case "Jun":
        $namaBln = "Juni";
        $jumlahHari = 30;
        break;
    case "Jul":
        $namaBln = "Juli";
        $jumlahHari = 31;
        break;
    case "Aug":
        $namaBln = "Agustus";
        $jumlahHari = 31;
        break;
     case "Sep":
        $namaBln = "September";
        $jumlahHari = 30;
        break;
    case "Oct":
        $namaBln = "Oktober";
        $jumlahHari = 31;
        break;
     case "Nov":
        $namaBln = "November";
        $jumlahHari = 30;
        break;
    case "Dec":
        $namaBln = "Desember";
        $jumlahHari = 31;
        break;
    default:
        $namaBln = "Bulan tidak valid";
        $jumlahHari = 0;
}

echo "Nama bulan sekarang adalah : " . $namaBln . "<br>";
echo "Jumlah hari dalam bulan " . $namaBln . " adalah : " .$jumlahHari;
?>