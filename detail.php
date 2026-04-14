<?php 
include 'config/koneksi.php'; 
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Ambil data berita gabung dengan kategori
$query = mysqli_query($conn, "SELECT berita.*, kategori.nama_kategori 
                              FROM berita 
                              JOIN kategori ON berita.kategori_id = kategori.id 
                              WHERE berita.id = '$id'");
$data = mysqli_fetch_assoc($query);

// Jika berita tidak ditemukan
if (!$data) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?> - News Portal</title>
    <style>
        /* Reset Dasar */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #fff; color: #222; line-height: 1.8; }

        /* Navbar ala CNN */
        header { background-color: #000; border-bottom: 4px solid #cc0000; padding: 15px 0; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 20px; }
        .logo { font-size: 24px; font-weight: 900; color: #fff; text-decoration: none; letter-spacing: -1px; }
        .logo span { color: #cc0000; }

        /* Konten Artikel */
        article { margin-top: 40px; margin-bottom: 60px; }
        .category { color: #cc0000; font-weight: bold; text-transform: uppercase; font-size: 14px; display: block; margin-bottom: 10px; }
        h1 { font-size: 36px; font-weight: 800; line-height: 1.2; margin-bottom: 20px; letter-spacing: -0.5px; }
        .meta { color: #888; font-size: 14px; margin-bottom: 30px; border-bottom: 1px solid #eee; padding-bottom: 20px; }

        /* Gambar Berita */
        .featured-image { width: 100%; border-radius: 4px; margin-bottom: 30px; display: block; }

        /* Isi Berita */
        .content-text { font-size: 18px; color: #333; text-align: justify; white-space: pre-line; }

        /* Navigasi Bawah */
        .back-link { display: inline-block; margin-top: 40px; color: #cc0000; text-decoration: none; font-weight: bold; }
        .back-link:hover { text-decoration: underline; }

        footer { text-align: center; padding: 40px 0; border-top: 1px solid #eee; color: #888; font-size: 14px; }
    </style>
</head>
<body>

<header>
    <div class="container">
        <a href="index.php" class="logo">BASUY<span>NEWS</span></a>
    </div>
</header>

<div class="container">
    <article>
        <span class="category"><?= $data['nama_kategori'] ?></span>
        <h1><?= $data['judul'] ?></h1>
        
        <div class="meta">
            Dipublikasikan pada: <strong><?= date('d M Y', strtotime($data['tanggal'])) ?></strong>
        </div>

        <?php if (!empty($data['gambar'])): ?>
            <img src="assets/img/<?= $data['gambar'] ?>" alt="<?= $data['judul'] ?>" class="featured-image">
        <?php endif; ?>

        <div class="content-text">
            <?= $data['isi'] ?>
        </div>

        <a href="index.php" class="back-link">&larr; Kembali ke Beranda</a>
    </article>
</div>

<footer>
    &copy; <?= date('Y') ?> News Portal. Seluruh hak cipta dilindungi.
</footer>

</body>
</html>
