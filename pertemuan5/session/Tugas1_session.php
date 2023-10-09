<?php
session_start();

// Daftar pengguna dan kata sandi yang valid
$users = array(
    "Ali" => "password1",
    "Bona" => "password2",
    "Charlie" => "password3",
    "Dede" => "password4",
    "Emon" => "password5"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        header("location: home.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
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
    ?>
</body>
</html>
