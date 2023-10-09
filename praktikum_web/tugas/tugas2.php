<?php

// Mengecek apakah ada input dari pengguna
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = floatval($_POST["radius"]);
    $tinggi = floatval($_POST["tinggi"]);

    // Menghitung luas alas dan luas permukaan kerucut
    $luas_alas = M_PI * $radius ** 2;
    $slant_height = sqrt($radius ** 2 + $tinggi ** 2);
    $luas_permukaan = M_PI * $radius * ($radius + $slant_height);

    // Menampilkan hasil
    echo "Luas alas kerucut: " . number_format($luas_alas, 2) . " satuan persegi<br>";
    echo "Luas permukaan kerucut: " . number_format($luas_permukaan, 2) . " satuan persegi";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2</title>
</head>
<body>
    <h1>Menghitung Luas Alas dan Luas Permukaan Kerucut</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Jari-Jari Alas Kerucut: <input type="text" name="radius"><br>
        Tinggi Kerucut: <input type="text" name="tinggi"><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>