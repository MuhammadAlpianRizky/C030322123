<?php
session_start();
include_once 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simpan username dan password yang valid dalam sebuah array
    $valid_users = array(
        "Username" => "Password",
        "Irna" => "qwerty",
        "Bona" => "password2",
        // Tambahkan pengguna lain di sini
    );

    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        header("location: home.php");
        exit;
    } else {
        $error = "Password yang dimasukkan salah atau username tidak terdaftar.";
    }
}
?>

<h2>Silakan Login</h2>
<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

<?php
if (isset($error)) {
    echo "<p>$error</p>";
}
include_once 'footer.php';
?>
