<?php
session_start();
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Muhammad Alpian</title>
    <link rel="stylesheet" href="style.css"> <!-- Anda dapat menambahkan file CSS eksternal jika diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .menu {
            margin-bottom: 20px;
        }

        .message {
            font-weight: bold;
            color: green;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .content {
            text-align: left;
            margin-top: 20px;
            padding: 20px;
        }

        /* Styling for links */
        .link-container {
            margin-top: 10px;
        }

        .link-container a {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }

        .link-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<div class="container">
    <div class="menu">
        <a href="link1.php">Link 1</a> | 
        <a href="link2.php">Link 2</a> | 
        <a href="link3.php">Link 3</a> | 
        <a href="logout.php">Logout</a>
    </div>
    
    <h2>Username: <?= $username ?></h2>
    <p class="message">Anda telah berhasil login</p>

    <div class="content">
        <!-- Konten tambahan dapat ditambahkan di sini -->
        <h3>Selamat datang di Web Muhammad Alpian Rizky</h3>
        <p>Selamat datang di halaman web pribadi Muhammad Alpian Rizky. Ini adalah contoh halaman yang dapat Anda gunakan sebagai dasar untuk mengembangkan lebih lanjut.</p>
    </div>
</div>

<?php
include_once 'footer.php';
?>

</body>
</html>
