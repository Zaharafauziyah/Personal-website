-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 10:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaharafauziyah_d1a240012`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(11) NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(1, 'perkenalkan nama saya zahara fauziyah tapi bisa di panggil zahra, saya anak ke 2 dari 2 bersaudara yang kata orang si anak bungsu yaaâ€¦ aku memiliki hobi dari dulu aku suka main basket sampe aku punya bola basket banyak saking suka basket tapi aku sekarang males semenjak sakit sakitan, sekarang hobi aku main game apalagi kalao ada temen yang sama sama suka main game bisa seharian main game, emang yaa kecanduaan itu ga baik tapi menurut aku dunia temen virtual seasik ituu apalagi kan wakyu itu pandemi kan jadi gaboleh keluar nah aku main game terus punya banyak temen di sana, nah dari itu kenapa aku masuk jurusan ini karna pengen bikin Aplikasi yang di kenal banyak orang,emang aga sulit tapi kan berawal dari mimpi dulu kan... ><\r\nsaya asal sekolah SD Sukahayu, SMP Negeri 1 Jalanacagak,  SMA Negeri 1 Jalancagak. dari awal sekolah ku semuanyaa deketan ga jauh jauh dari rumah. dan saya sekarang mahasiswa universitas subang dengan jurusan sistem informasi. saya banyak belajar tentang programan di semester ini dan saya sedang belajar php dan juga data base, menurut saya belajar di semester sekarang lumayan sulit dan juga membuat bingung tapi seiring berjalanya waktu saya bisa sedikit sedikit paham apaÂ ituÂ programing ><');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi_artikel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`, `foto`) VALUES
(2, 'makanan sehat', 'Makanan adalah sumber energi utama bagi tubuh. Apa yang kita makan setiap hari sangat memengaruhi kesehatan, semangat, dan bahkan suasana hati kita. Oleh karena itu, memilih makanan yang sehat menjadi hal yang penting.\r\n\r\nMakanan sehat adalah makanan yang mengandung gizi seimbang, seperti karbohidrat, protein, lemak baik, vitamin, dan mineral. Contohnya seperti sayur-sayuran, buah-buahan, ikan, telur, dan kacang-kacangan. Mengurangi makanan instan dan tinggi gula juga sangat dianjurkan agar tubuh tetap fit dan tidak mudah sakit.\r\n\r\nSelain sehat, makanan juga bisa menjadi sumber kebahagiaan. Mencicipi makanan khas daerah atau memasak bersama keluarga bisa jadi momen yang menyenangkan. Tapi ingat, tetap jaga porsi dan pilih bahan makanan yang baik untuk tubuh.\r\n\r\nDengan memilih makanan yang sehat dan bergizi, kita sedang berinvestasi untuk masa depan yang lebih baik. Tubuh jadi lebih kuat, pikiran lebih fokus, dan kita bisa menjalani aktivitas sehari-hari dengan lebih semangat', '31943-kreasi-baru-menu-salad-suaracomvessy.jpg'),
(3, 'Stop Bullying', 'Bullying adalah tindakan menyakiti orang lain secara fisik, verbal, atau lewat media sosial. Walau sering dianggap bercanda, dampaknya bisa sangat menyakitkan bagi korban. Mereka bisa merasa sedih, takut, bahkan trauma. Kita semua punya peran untuk mencegahnya. Jangan ikut-ikutan membully, berani membela teman yang dibully, dan laporkan jika melihat kejadian bullying. Yuk, ciptakan lingkungan yang aman dan saling menghargai. Satu kebaikan bisa menyelamatkan hati orang lain.', 'Cara-Mengatasi-Bullying-1.png'),
(4, 'lingkungan bersih', 'Lingkungan umum seperti taman, jalan, pasar, dan tempat ibadah adalah milik bersama. Menjaga kebersihannya adalah tanggung jawab kita semua. Jangan membuang sampah sembarangan, gunakan tempat sampah yang tersedia, dan hindari mencoret-coret fasilitas umum.\r\n\r\nLingkungan yang bersih membuat suasana lebih nyaman, indah, dan sehat. Ayo, mulai dari diri sendiri! Tindakan kecil seperti tidak membuang sampah sembarangan bisa memberi dampak besar bagi kebersihan lingkungan.', 'FOTO-FEBRI-DWIKI-WIJAYA-28.webp'),
(5, 'Bahaya Konsumsi Antibiotik Tanpa Resep Dokter', 'Antibiotik merupakan jenis obat yang sering digunakan untuk mengatasi berbagai penyakit yang disebabkan karena infeksi bakteri. Biasanya, jika infeksi yang terjadi masih dalam kategori ringan, dokter tidak perlu meresepkan obat antibiotik. \r\n\r\nSementara untuk kasus infeksi bakteri yang sudah parah, dokter baru akan meresepkan penggunaan obat antibiotik. Kondisi lain yang membutuhkan obat antibiotik, yaitu orang-orang dengan kondisi imun tubuh yang lemah, contohnya seperti pengidap HIV atau kanker. \r\n\r\nHal yang perlu ditegaskan, antibiotik harus dikonsumsi berdasarkan resep dan anjuran dokter. Sebab, obat ini bisa menimbulkan berbagai efek samping bila digunakan secara sembarangan', 'menjaga-kesehatan-saat-sibuk-kuliah-online.webp'),
(6, 'manfaat buah naga ', 'Buah naga bukan hanya unik bentuk dan warnanya, tapi juga kaya manfaat. Buah ini mengandung vitamin C, serat, dan antioksidan yang baik untuk tubuh. Salah satu manfaat utamanya adalah membantu meningkatkan daya tahan tubuh dan melancarkan pencernaan.\r\n\r\nSelain itu, buah naga juga dapat membantu menjaga kesehatan kulit, menurunkan kadar gula darah, dan mencegah radikal bebas yang bisa merusak sel-sel tubuh. Rasanya yang segar menjadikan buah naga pilihan sehat untuk dikonsumsi setiap hari.', 'images.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(1, 'alloww ', 'IMG-20250611-WA0021.jpg'),
(2, 'pinkyy ><', 'WhatsApp Image 2025-01-04 at 16.43.55 (1).jpeg'),
(3, '<3', 'WhatsApp Image 2025-06-22 at 12.28.43_c2371c27.jpg'),
(4, ':)', 'IMG-20250611-WA0039.jpg'),
(5, 'apa lagi ya?', 'IMG-20250611-WA0024.jpg'),
(6, 'bukan dino kuning lagi tapi dino ijo ><', 'IMG-20250619-WA0029.jpg'),
(7, 'cisss', 'IMG-20250614-WA0027.jpg'),
(8, 'hai aku dino', 'l.jpg'),
(9, 'dino lagi', 'IMG-20250614-WA0026.jpg'),
(10, 'first flower :)', 'poto 71.jpeg'),
(11, '><', 'IMG-20250611-WA0037.jpg'),
(12, '<3', 'IMG-20250611-WA0019.jpg'),
(13, 'tebak abis apa pake almet ?', 'IMG-20250619-WA0032.jpg'),
(14, 'aku abis wawancara', 'IMG-20250619-WA0026.jpg'),
(15, 'hehehee', 'WhatsApp Image 2025-06-22 at 12.26.59_f204f109.jpg'),
(16, 'hari guru, pliss kangen banget gangguin wali kelas ini hahhaaa', 'poto 82.jpeg'),
(17, 'waktu wisuda', 'poto 76.jpeg'),
(18, 'di bagi ijazah', 'poto 84.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_artikel` int(5) NOT NULL,
  `nama_pengirim` text NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_general_ci;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_artikel`, `nama_pengirim`, `isi_komentar`) VALUES
(1, 0, 'hallo', 'hallo'),
(2, 0, 'hallo', 'hallo'),
(3, 0, '', ''),
(4, 0, 'hallo', 'hallo'),
(5, 0, 'hallo', 'hallo'),
(6, 0, 'hallo', 'hallo'),
(7, 0, 'hallo', 'hallo'),
(8, 0, 'zahara', 'hallo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('zahara', 'zahara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
