<?php include 'config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BasuyNews</title>
    <style>
        /* Reset Dasar */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background-color: #ffffff; color: #222; line-height: 1.6; }

        /* Header / Navigasi ala CNN */
        header { background-color: #000; color: #fff; padding: 15px 0; border-bottom: 4px solid #cc0000; position: sticky; top: 0; z-index: 1000; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        .logo { font-size: 28px; font-weight: 900; text-decoration: none; color: #fff; letter-spacing: -1px; }
        .logo span { color: #cc0000; }

        /* Layout Grid */
        .main-wrapper { display: flex; gap: 40px; margin-top: 30px; }
        .content { flex: 2; }
        .sidebar { flex: 1; border-left: 1px solid #eee; padding-left: 20px; }

        /* Gaya Berita */
        h1.section-title { font-size: 24px; margin-bottom: 20px; border-bottom: 2px solid #222; display: inline-block; }
        .news-item { margin-bottom: 30px; border-bottom: 1px solid #eee; padding-bottom: 20px; }
        .news-item h3 { margin-bottom: 10px; }
        .news-item h3 a { text-decoration: none; color: #000; font-size: 22px; font-weight: bold; transition: 0.2s; }
        .news-item h3 a:hover { color: #cc0000; }
        .news-item p { color: #555; font-size: 15px; margin-bottom: 15px; }
        .btn-baca { color: #cc0000; text-decoration: none; font-weight: bold; font-size: 13px; text-transform: uppercase; }

        /* Sidebar Item */
        .sidebar-title { font-weight: bold; font-size: 18px; margin-bottom: 15px; text-transform: uppercase; }
        .trending-item { margin-bottom: 15px; display: flex; align-items: flex-start; }
        .trending-num { color: #ccc; font-size: 24px; font-weight: bold; margin-right: 15px; line-height: 1; }
        .trending-text { text-decoration: none; color: #333; font-weight: bold; font-size: 14px; }
        .trending-text:hover { text-decoration: underline; }

        /* Responsive */
        @media (max-width: 768px) {
            .main-wrapper { flex-direction: column; }
            .sidebar { border-left: none; padding-left: 0; margin-top: 30px; }
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <a href="index.php" class="logo">BASUY<span>NEWS</span></a>
    </div>
</header>

<div class="container">
    <div class="main-wrapper">
        
        <main class="content">
            <h1 class="section-title">Berita Terbaru</h1>

            <?php
            $query = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <article class="news-item">
                    <h3><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['judul'] ?></a></h3>
                    <p><?= substr(strip_tags($row['isi']), 0, 150) ?>...</p>
                    <a href="detail.php?id=<?= $row['id'] ?>" class="btn-baca">Baca Selengkapnya &raquo;</a>
                </article>
            <?php } ?>
        </main>

        <aside class="sidebar">
            <div class="sidebar-title">Trending Sekarang</div>
            
            <div class="trending-item">
                <div class="trending-num">01</div>
                <a href="#" class="trending-text">Tersebar Isi Grup Chat Mahasiswa Universitas Indonesia Fakultas Hukum</a>
            </div>

            <div class="trending-item">
                <div class="trending-num">02</div>
                <a href="#" class="trending-text">Teknologi AI Terbaru Membantu Petani Meningkatkan Hasil Panen</a>
            </div>

            <div class="trending-item">
                <div class="trending-num">03</div>
                <a href="#" class="trending-text">Cuaca Ekstrim Diprediksi Melanda Wilayah Pesisir Pekan Depan</a>
            </div>
        </aside>

    </div>
</div>

<footer style="text-align: center; padding: 40px 0; color: #888; border-top: 1px solid #eee; margin-top: 50px;">
    <div class="container">
        &copy; <?= date('Y') ?> News Portal. Seluruh hak Cipta dilindungi
    </div>
</footer>

</body>
</html>
