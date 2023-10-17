<!DOCTYPE html>
<html>
<head>
    <title>Login Siswa</title>
</head>
<body>
    <h2>Login Siswa</h2>
    <form action="proses_login.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
