<?php 
session_start();
include '../config/koneksi.php'; 

// Proteksi halaman
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

// Proses Simpan
if (isset($_POST['simpan'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    // Menggunakan NULL untuk ID (Auto Increment)
    $query = mysqli_query($conn, "INSERT INTO kategori VALUES(NULL, '$nama')");

    if ($query) {
        header("Location: kategori.php");
        exit;
    } else {
        echo "<script>alert('Gagal menambah kategori: " . mysqli_error($conn) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori - News Admin</title>
    <style>
        /* Reset Dasar */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background-color: #fff; color: #000; }

        /* Navbar ala CNN */
        .navbar {
            background-color: #000;
            padding: 15px 0;
            border-bottom: 4px solid #cc0000;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo { font-size: 24px; font-weight: 900; text-decoration: none; color: #fff; letter-spacing: -1px; }
        .logo span { color: #cc0000; }

        /* Form Container */
        .container {
            max-width: 600px;
            margin: 60px auto;
            padding: 0 20px;
        }
        
        .header-box {
            border-bottom: 2px solid #000;
            margin-bottom: 30px;
            padding-bottom: 10px;
        }

        h2 { font-size: 24px; font-weight: 900; text-transform: uppercase; }

        /* Form Styling */
        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="text"]:focus {
            border-color: #cc0000;
            outline: none;
        }

        /* Button Styling */
        .btn-simpan {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 12px 25px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            border-radius: 4px;
            transition: 0.3s;
        }

        .btn-simpan:hover {
            background-color: #cc0000;
        }

        .btn-batal {
            text-decoration: none;
            color: #888;
            font-size: 14px;
            margin-left: 15px;
        }
        .btn-batal:hover { color: #000; }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <a href="dashboard.php" class="logo">NEWS<span>ADMIN</span></a>
    </div>
</nav>

<div class="container">
    <div class="header-box">
        <h2>Tambah Kategori</h2>
    </div>

    <form method="POST">
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" placeholder="Contoh: Politik, Olahraga, Tekno" required autofocus>
        </div>

        <button type="submit" name="simpan" class="btn-simpan">Simpan Kategori</button>
        <a href="kategori.php" class="btn-batal">Batal</a>
    </form>
</div>

</body>
</html>