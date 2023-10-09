<?php
session_start();
include_once 'header_lagu.php';
?>

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
        padding: 0px;
    }

    .content {
        text-align: left;
        margin-top: 15px;
        padding: 0px;
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

    /* Styling for song list */
    .song-list {
        margin-top: 20px;
    }

    .song-item {
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

    <div class="content">
        <!-- Daftar lagu -->
        <h3>Daftar Lagu</h3>
        <ul class="song-list">
            <li class="song-item">Bukti - Virgoun</li>
            <li class="song-item">Karna Sa Su Sayang - Jihanuja</li>
            <li class="song-item">Surat Cinta Untuk Starla - Virgoun</li>
        </ul>
    </div>
</div>

<?php
include_once 'footer.php';
?>

</body>
</html>
