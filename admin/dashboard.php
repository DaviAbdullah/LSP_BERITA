<?php
session_start();
// Proteksi halaman
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - News Portal</title>
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
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo { font-size: 24px; font-weight: 900; text-decoration: none; color: #fff; letter-spacing: -1px; }
        .logo span { color: #cc0000; }
        
        .nav-menu a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            margin-left: 20px;
        }
        .nav-menu a:hover { color: #cc0000; }

        /* Konten Utama */
        .main-content {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        h1 { font-size: 32px; font-weight: 900; margin-bottom: 30px; letter-spacing: -1px; }

        /* Profil Card (Sesuai Gambar Anda) */
        .profile-card {
            background-color: #f6f6f6;
            max-width: 450px;
            padding: 30px;
            border-radius: 12px;
            border-left: 6px solid #cc0000;
            margin-bottom: 30px;
        }
        .profile-card h2 { font-size: 20px; margin-bottom: 20px; }
        .info-row { margin-bottom: 12px; font-size: 16px; }
        .info-row span { font-weight: bold; }
        
        .line { height: 1px; background-color: #ddd; margin: 20px 0; }
        
        .logout-link { color: #cc0000; text-decoration: none; font-weight: bold; }
        .logout-link:hover { text-decoration: underline; }

        /* Navigasi List */
        .admin-nav { list-style: none; margin-top: 20px; }
        .admin-nav li { margin-bottom: 12px; padding-left: 20px; position: relative; }
        .admin-nav li::before { content: "•"; position: absolute; left: 0; font-weight: bold; }
        .admin-nav a { text-decoration: none; color: #003366; font-size: 16px; font-weight: 500; }
        .admin-nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <a href="dashboard.php" class="logo">NEWS<span>ADMIN</span></a>
        <div class="nav-menu">
            <a href="berita.php">Berita</a>
            <a href="kategori.php">Kategori</a>
            <a href="../index.php" target="_blank">Lihat Web</a>
        </div>
    </div>
</nav>

<div class="main-content">
    <h1>Selamat Datang di Panel Admin</h1>

    <div class="profile-card">
        <h2>Profil Pengguna</h2>
        
        <div class="info-row">
            <span>Username:</span> <?= $_SESSION['username']; ?>
        </div>
        
        <div class="info-row">
            <span>Nama:</span> <?= isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : '-'; ?>
        </div>

        <div class="line"></div>

        <a href="../auth/logout.php" class="logout-link" onclick="return confirm('Yakin ingin keluar?')">Logout</a>
    </div>

    
</div>

</body>
</html>