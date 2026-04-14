<?php 
session_start();
include '../config/koneksi.php'; 

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
    <title>Data Berita - News Admin</title>
    <style>
        /* Reset & Base Style */
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

        /* Konten Utama */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        h2 { font-size: 28px; font-weight: 900; text-transform: uppercase; }

        /* Tombol Tambah */
        .btn-tambah {
            background-color: #cc0000;
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            font-weight: bold;
            font-size: 14px;
            border-radius: 4px;
            text-transform: uppercase;
        }
        .btn-tambah:hover { background-color: #000; }

        /* Styling Tabel Modern */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th {
            background-color: #f4f4f4;
            text-align: left;
            padding: 15px;
            border-bottom: 2px solid #000;
            font-size: 14px;
            text-transform: uppercase;
        }

        table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            font-size: 15px;
            vertical-align: middle;
        }

        table tr:hover { background-color: #fafafa; }

        /* Badge Kategori */
        .badge-kat {
            background-color: #eee;
            padding: 4px 8px;
            font-size: 12px;
            font-weight: bold;
            border-radius: 3px;
            color: #444;
        }

        /* Tombol Aksi */
        .btn-action {
            text-decoration: none;
            font-weight: bold;
            font-size: 13px;
            margin-right: 10px;
        }
        .edit { color: #003366; }
        .hapus { color: #cc0000; }
        .btn-action:hover { text-decoration: underline; }

    </style>
</head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <a href="dashboard.php" class="logo">NEWS<span>ADMIN</span></a>
        <div class="nav-menu">
            <a href="berita.php" style="color: #cc0000;">Berita</a>
            <a href="kategori.php">Kategori</a>
            <a href="../index.php" target="_blank">Lihat Web</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="header-flex">
        <h2>Data Berita</h2>
        <a href="tambah_berita.php" class="btn-tambah">+ Tambah Berita</a>
    </div>

    <table>
        <thead>
            <tr>
                <th width="50">No</th>
                <th>Judul Berita</th>
                <th>Kategori</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT berita.*, kategori.nama_kategori 
                FROM berita 
                JOIN kategori ON berita.kategori_id = kategori.id 
                ORDER BY berita.id DESC");

            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><strong><?= $row['judul'] ?></strong></td>
                <td><span class="badge-kat"><?= $row['nama_kategori'] ?></span></td>
                <td>
                    <a href="edit_berita.php?id=<?= $row['id'] ?>" class="btn-action edit">Edit</a>
                    <a href="hapus_berita.php?id=<?= $row['id'] ?>" class="btn-action hapus" onclick="return confirm('Yakin hapus berita ini?')">Hapus</a>
                </td>
            </tr>
            <?php 
                } 
            } else {
                echo "<tr><td colspan='4' style='text-align:center;'>Belum ada data berita.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>