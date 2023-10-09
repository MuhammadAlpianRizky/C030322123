<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-menu Makanan</title>
    <style>
        /* CSS styling untuk tampilan halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: orange;
            text-align: center;
            padding: 10px 0;
        }

        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Web Muhammad Alpian Rizky</h1>
    </header>



    <div class="container">
        <h2>Selamat datang di aplikasi saya!</h2>
        <p>Ini adalah halaman konten aplikasi Muhammad Alpian Rizky.</p>
        <p>Silakan login terlebih dahulu</p>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Muhammad Alpian Rizky
    </footer>
</body>
</html>
