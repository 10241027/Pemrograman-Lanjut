<!DOCTYPE html>
<html>
<head>
    <title>Dealer Motor - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            height: 100vh;
            margin: 0;
            background: url('motorbg.png') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        .navbar {
            background-color: #007BFF;
            overflow: hidden;
            padding: 12px 0;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            position: relative;
            z-index: 2;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            font-weight: bold;
            transition: 0.3s;
        }

        .navbar a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.55);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1;
        }

        h1 {
            color: #ffffff;
            font-size: 42px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.8);
            margin-bottom: 10px;
        }

        p {
            font-size: 20px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">🏍️ Home</a>
        <a href="?c=motor&a=index">🧾 Daftar Motor</a>
        <a href="?c=merk&a=index">🏷️ Daftar Merk</a>
    </div>

    <div class="overlay">
        <h1>🏍️ Selamat Datang di Dealer Motor</h1>
        <p>Temukan motor impian Anda dengan harga terbaik dan diskon menarik!</p>
    </div>
</body>
</html>
