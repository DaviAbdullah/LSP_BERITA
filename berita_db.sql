-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2026 at 07:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `kategori_id` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `kategori_id`, `tanggal`) VALUES
(6, 'Tim Basket Indonesia Berhasil Menjuarai Kompetisi Sea Games 2026', 'Kemenangan Tim Basket Indonesia dengan MVP Yudha Pratama', 9, '2026-04-14'),
(8, '16 Pelaku Grup Chat Mesum FHUI Dikumpulkan di Forum, Minta Maaf ke Korban', 'Jakarta - Para pelaku dugaan pelecehan seks di grup chat mahasiswa Fakultas Hukum Universitas Indonesia (FHUI) meminta maaf. Para pelaku meminta maaf langsung di hadapan para korban.\r\nKetua BEM FH UI Anandaku Dimas Rumi Chattaristo mengatakan para pelaku dikumpulkan dalam sebuah forum yang digelar di Auditorium DH UI, semalam. Dimas mengatakan forum ini digelar untuk mewadahi korban yang ingin mendapatkan permohonan maaf langsung dari para pelaku.\r\n\r\n\"Tadi malam memang sudah dilaksanakan forum di Auditorium DH UI yang bertujuan untuk mewadahi para korban yang ingin mendapatkan permohonan maaf secara langsung dari para pelaku,\" kata Dimas kepada wartawan, Selasa (14/4/2026).', 4, '2026-04-14'),
(9, 'Babak Baru AS dan Iran di Perkara Blokade Selat Hormuz', 'Jakarta - Amerika Serikat (AS) dan Iran masih memanas di tengah kesepakatan gencatan senjata. Babak baru ketegangan AS Vs Iran kini perkara Selat Hormuz.\r\nPanasnya konflik dua negara ini setelah perundingan di Pakistan gagal. Presiden Amerika Serikat (AS) Donald Trump mengatakan negosiasi maraton di Pakistan berjalan baik dan sebagian besar poin telah disepakati.\r\n\r\nNamun, Trump mengatakan Teheran menolak untuk mengalah dalam masalah program nuklirnya. Trump pun langsung memerintahkan Angkatan Laut AS memblokade Selat Hormuz.\r\n', 6, '2026-04-14'),
(11, 'ERAA Catat Lonjakan Kinerja, ARNA Siapkan Dividen Besar di Tengah Penguatan IHSG ', 'Jakarta -\r\nMarket Overview\r\nIndeks Harga Saham Gabungan (IHSG) mengakhiri perdagangan Senin (13/04) di zona positif dengan kenaikan 0,56% ke posisi 7.500,19.\r\nPenguatan ini ditopang oleh kenaikan signifikan saham-saham seperti BRPT yang melonjak 14,36%, BREN naik 4,74%, serta TPIA menguat 6,58%. Di sisi lain, sejumlah saham justru menahan laju indeks, di antaranya BBCA yang turun 1,87%, SMMA melemah 6,12%, dan BMRI terkoreksi 1,50%.\r\n\r\nAksi beli investor asing masih terlihat di pasar, dengan nilai pembelian bersih mencapai Rp626,14 miliar di pasar reguler.\r\n', 7, '2026-04-14'),
(13, 'Lemdiklat Polri Buka Workshop AI, Tingkatkan Kualitas SDM Polri  ', 'Jakarta - Lemdiklat Polri resmi membuka workshop Artificial Intelligence (AI). Workshop ini untuk meningkatkan kualitas sumber daya manusia Polri berbasis teknologi dan informasi.\r\nWorkshop dibuka pada Senin (13/4/2026) di Jakarta oleh Plt Kalemdiklat Polri, Irjen Andi Rian R. Djajadi. Kegiatan ini dilaksanakan secara hybrid yakni tatap muka oleh para peserta dari lingkungan Lemdiklat Polri dan melalui platform dalam jaringan (Zoom).\r\n\r\nKegiatan ini dapat diikuti secara luas oleh peserta dari berbagai daerah serta terbuka untuk umum. Narasumber yang dihadirkan berasal dari PT Nusantara Compnet Integrator.\r\n\r\n\"Pemanfaatan teknologi AI merupakan langkah strategis dalam meningkatkan kualitas sumber daya manusia Polri, sejalan dengan transformasi menuju Polri yang Presisi, adaptif, dan profesional\" ujar Andi Rian.\r\n\r\nAndi Rian menegaskan sumber daya manusia adalah faktor utama peningkatan kualitas. Untuk meningkatkan itu salah satunya dengan pemanfaatan AI.\r\n\r\nPemanfaatan AI dalam pelaksanaan tugas sehari-hari khususnya para personel lemdiklat yang juga sebagian besar berperan sebagai tenaga pendidik di satuan pendidikan polri di seluruh Indonesia. Sehingga, kata Andi Rian, mampu menunjang proses pembelajaran dengan afektif dan efisien, berbasis teknologi informasi.\r\n\r\nAndi Rian juga berpesan kepada seluruh peserta pelatihan agar serius dalam mengikuti pelatihan. Dia juga berharap peserta memanfaatkan kesempatan pelatihan ini untuk memperdalam pemahaman dan keterampilan di bidang kecerdasan artifisial.\r\n\r\nAndi Rian juga berharap workshop ini menjadi wadah untuk bertukar pengalaman, memperkuat sinergi, dan mendorong inovasi guna mendukung kinerja Polri yang modern dan terpercaya.\r\n\r\n', 8, '2026-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(4, 'Nasional'),
(5, 'Internasional'),
(6, 'Politik'),
(7, 'Ekonomi'),
(8, 'Teknologi'),
(9, 'Olahraga'),
(10, 'Hiburan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
