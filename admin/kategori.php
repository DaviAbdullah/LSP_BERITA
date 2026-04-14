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
    <title>Manajemen Kategori - News Admin</title>
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

        /* Styling Tabel */
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
            font-size: 16px;
        }

        table tr:hover { background-color: #fafafa; }

        /* Tombol Hapus */
        .btn-hapus {
            color: #cc0000;
            text-decoration: none;
            font-weight: bold;
            font-size: 13px;
            text-transform: uppercase;
        }
        .btn-hapus:hover { text-decoration: underline; }

    </style>
</head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <a href="dashboard.php" class="logo">NEWS<span>ADMIN</span></a>
        <div class="nav-menu">
            <a href="berita.php">Berita</a>
            <a href="kategori.php" style="color: #cc0000;">Kategori</a>
            <a href="../index.php" target="_blank">Lihat Web</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="header-flex">
        <h2>Kategori Berita</h2>
        <a href="tambah_kategori.php" class="btn-tambah">+ Tambah Kategori</a>
    </div>

    <table>
        <thead>
            <tr>
                <th width="80">No</th>
                <th>Nama Kategori</th>
                <th width="120">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM kategori");
            while ($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><strong><?= $row['nama_kategori'] ?></strong></td>
                <td>
                    <a href="hapus_kategori.php?id=<?= $row['id'] ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>