<?php
session_start();
include_once 'header_makanan.php';
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        text-align: center;
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

    .menu-list {
        text-align: left;
        margin-top: 20px;
    }

    .menu-item {
        margin: 10px 0;
    }
</style>

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

    <div class="menu-list">
        <h3>Menu Makanan</h3>
        <div class="menu-item">
            <strong>Nasi Goreng</strong> - Nasi goreng dengan telur, ayam, dan sayuran.
        </div>
        <div class="menu-item">
            <strong>Mie Ayam</strong> - Mie dengan potongan ayam dan pangsit.
        </div>
        <div class="menu-item">
            <strong>Nasi Padang</strong> - Nasi dengan berbagai hidangan Padang.
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>
