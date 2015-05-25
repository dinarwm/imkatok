-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 01:47 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthymommy`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `umur_kehamilan` int(11) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `nama`, `password`, `umur_kehamilan`, `jabatan`) VALUES
('admin@gmail.com', 'Administrator', 'admin', NULL, 'administrator'),
('dinar@gmail.com', 'Dinar Winia M', 'dinar', 3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` longtext,
  `foto_berita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `foto_berita`) VALUES
(1, 'Pengertian Kehamilan Ektopik Terganggu dan Pembahasan Lengkap\r\n\r\nSumber: http://www.ibu-hamil.web.id/2015/02/kehamilan-ektopik-terganggu-pdf.html\r\nDisalin dari Ibu-Hamil.web.id, Blog Ibu Hamil Indonesia.', 'Banyak wanita yang masih belum begitu memahami apa sebetulnya kehamilan ektopik. Padahal risiko penyakit mematikan ini bisa mengancam mereka dengen gejala yang tanpa di duga-duga. Data Kementerian Kesehatan Amerika Serikat misalnya, menunjukan jika 1 dari 50 wanita bisa mengidap kelainan kehamilan yang satu ini. tentu persentase yang cukup besar bukan? Nah, menyadari hal tersebut, ibu-hamil.web.id berinisiatif untuk membuat pembahasan lengkap seputar pengertian, gejala, penyebab, cara mengobati, dan hal penting lainnya yang terkait dengan kehamilan ektopik. Silakan kunjungi masing-masing link di atas untuk informasi lebih lanjut.', 'images/berita/kehamilan ektopik terganggu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL,
  `trisemester` int(11) DEFAULT NULL,
  `judul_forum` varchar(255) DEFAULT NULL,
  `isi_forum` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `judul_foto` varchar(100) DEFAULT NULL,
  `caption` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_foto`, `foto`, `judul_foto`, `caption`) VALUES
(1, 'images/galeri/trimester-kehamilan.png', 'Anda termasuk yang mana?', 'Kenali usia kehamilan anda'),
(2, 'images/galeri/makanan-baik-untuk-ibu-hamil.jpg', 'Masakan baik untuk ibu hamil', 'Selalu perhatikan gizi yang anda konsumsi untuk kebaikan Anda dan janin Anda');

-- --------------------------------------------------------

--
-- Table structure for table `infografik`
--

CREATE TABLE IF NOT EXISTS `infografik` (
  `id_info` int(11) NOT NULL,
  `umur` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `keterangan` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infografik`
--

INSERT INTO `infografik` (`id_info`, `umur`, `gambar`, `keterangan`) VALUES
(1, 1, 'images/infografik/bulan 1.jpg', '<p>BULAN KE - 1</p>\r\n\r\n<hr />\r\n<p>Pada bulan pertama, kantung ketuban akan terbentuk di sekitar ovum yang telah dibuahi. Kantung inilah yang akan melindungi embrio dalam perkembangannya selama masa kehamilan. Plasenta juga akan berkembang pada tahap ini, sebagai saluran transfer nutrisi dari ibu ke bayi, dan juga transfer limbah dari bayi.</p>\r\n\r\n<p>Wajah belum terbentuk sama sekali, baru berupa lingkaran hitam besar yang nantinya akan menjadi mata. Mulut, rahang bawah, dan tenggorokan juga mulai berkembang pada tahap ini. Sel-sel darah mulai terbentuk, kemudian sirkulasi peredaran darah akan dimulai setelah tahap tersebut. Pada akhir bulan pertama kehamilan, bayi Anda baru sepanjang 6-7 mm (1/4 inchi) atau seukuran sebutir beras!</p>\r\n\r\n<p>Perubahan yang terjadi :</p>\r\n\r\n<ul>\r\n	<li>Anda akan merasa sedikit kembung, dan pinggang mulai terasa pegal</li>\r\n	<li>Payudara Anda mulai bertambah besar</li>\r\n	<li>Anda mungkin mulai merasa cepat lelah, pusing bahkan pingsan</li>\r\n	<li>Cairan vagina meningkat, sama seperti saat Anda memasuki pre-menstruasi</li>\r\n</ul>\r\n\r\n<p>Tips untuk kehamilan bulan pertama :</p>\r\n\r\n<ul>\r\n	<li>Jika Anda mengkonsumsi minuman keras dan merokok, mulailah berhenti dari sekarang</li>\r\n	<li>Mintalah kepada dokter untuk diberi multivitamin yang dikonsumsi setiap pagi. Yang paling penting, pastikan anda mengonsumsi 0,4 miligram asam folat setiap hari untuk mencegah cacat lahir pada bayi.</li>\r\n</ul>\r\n'),
(2, 2, 'images/infografik/bulan 2.jpg', '<p>BULAN KE - 2</p>\r\n\r\n<hr />\r\n<p>Pada bulan kedua, embrio mulai memanjang dan ekor embrio telah hilang. Wajah mulai memiliki hidung dan rahang, serta terdapat calon gigi dan gusi. Pita suara mulai terbentuk dan belahan otak kiri dan kanan sudah sepenuhnya terbentuk. Tulang lunak mulai berkembang, dan hati mulai memproduksi sel-sel darah merah. Embrio telah memiliki kepala dan berubah dari seukuran beras menjadi sebesar buah raspberry.</p>\r\n\r\n<p>Perubahan yang terjadi :</p>\r\n\r\n<ul>\r\n	<li>Sering buang air kecil</li>\r\n	<li>Terkadang pusing sesekali atau pingsan</li>\r\n	<li>Gangguan pencernaan atau gas</li>\r\n	<li>Hidung tersumbat dan / atau pilek</li>\r\n	<li>Peningkatan air liur</li>\r\n</ul>\r\n\r\n<p>Tips untuk kehamilan bulan kedua :</p>\r\n\r\n<ul>\r\n	<li>Jangan biarkan perut anda kosong, selalu beri asupan makanan untuk mengurangi rasa mual.</li>\r\n	<li>Makan makanan ringan lebih sering daripada makanan berat</li>\r\n	<li>Untuk mencegah penurunan gula darah, makan beberapa protein, seperti menambahkan keju untuk kerupuk.</li>\r\n</ul>\r\n'),
(3, 3, 'images/infografik/bulan 3.jpg', '<p>BULAN KE - 3</p>\r\n\r\n<hr />\r\n<p>Pada bulan ketiga, bayi Anda sepenuhnya terbentuk. Bayi Anda memiliki lengan, tangan, jari, kaki, dan jari kaki dan dapat membuka dan menutup kepalan tangan dan mulut. Kuku dan kuku kaki mulai mengembangkan dan telinga eksternal terbentuk. Organ reproduksi bayi Anda juga mulai berkembang, namun jenis kelamin bayi sulit untuk dibedakan pada USG. Sistem peredaran darah dan urin bekerja dan hati menghasilkan empedu. Pada akhir bulan ketiga, bayi Anda berukuran sekitar 7,6 cm -10 (3-4 inci).</p>\r\n\r\n<p>Perubahan yang terjadi :</p>\r\n\r\n<ul>\r\n	<li>Kelelahan</li>\r\n	<li>Sering buang air kecil</li>\r\n	<li>Sakit kepala</li>\r\n	<li>Mual</li>\r\n</ul>\r\n\r\n<p>Tips :</p>\r\n\r\n<ul>\r\n	<li>Mintalah untuk melihat bayi anda dengan USG saat pemeriksaan</li>\r\n	<li>Hindari bepergian yang terlalu jauh / lama di perjalanan</li>\r\n	<li>Minum air mineral yang banyak dan hanya makan masakan yang pasti matang</li>\r\n	<li>Pakailah pakaian longgar yang mempersempit pada bagian kaik dan tangan dan jangan berjalan tanpa alas kaki</li>\r\n</ul>\r\n'),
(4, 4, 'images/infografik/bulan 4.jpg', '<p>BULAN KE - 4</p>\r\n\r\n<hr />\r\n<p>Selamat datang di trisemester kedua! Pada bulan ini, jari tangan dan kaki bayi Anda telah berkembang dengan baik, Kelopak mata, alis, bulu mata, kuku dan rambut telah terbentuk serta gigi dan tulang menjadi lebih padat. Sistem syaraf juga sudah mulai berfungsi, dan detak jantung mungkin sudah mulai bekerja. Pada akhir bulan keempat, bayi anda berukuran sekitar 6 inci dan berat sekitar 4 ons.</p>\r\n\r\n<p><strong>Perubahan yang terjadi :</strong></p>\r\n\r\n<ul>\r\n	<li>Sering buang air besar</li>\r\n	<li>Merasa mual dan kelelahan</li>\r\n	<li>Mungkin mengalami gusi berdarah</li>\r\n	<li>Lendir berlebih dan air liur</li>\r\n	<li>Sesak napas ringan</li>\r\n	<li>Merasa hangat atau panas dengan mudah</li>\r\n</ul>\r\n\r\n<p><strong>Tips :</strong></p>\r\n\r\n<ul>\r\n	<li>Mulailah menjaga pola dan gizi makanan.</li>\r\n	<li>Buat latihan rutin prenatal.</li>\r\n</ul>\r\n'),
(5, 5, 'images/infografik/bulan 5.jpg', '<p>BULAN KE - 5</p>\r\n\r\n<hr />\r\n<p>Bahu dan punggung mulai terbentuk dengan jelas, dan kulit bayi Anda mulai tertutup lapisan keputihan (vernix caseosa) yang akan melindungi bayi dari tumpahan air ketuban saat kelahiran. Pada tahap ini, Anda mulai merasakan gerakan bayi Anda, karena ia sedang mengembangkan ototnya. Pada akhir bulan kelima, bayi Anda berukuran sekitar 10 inci.</p>\r\n\r\n<p>Kemungkinan perubahan yang terjadi :</p>\r\n\r\n<ul>\r\n	<li>Sering demam</li>\r\n	<li>Terkadang muntah</li>\r\n	<li>Pendarahan vagina</li>\r\n	<li>Kaki mati rasa</li>\r\n</ul>\r\n\r\n<p>Tips :</p>\r\n\r\n<ul>\r\n	<li>Mulai mencari tempat / rumah sakit persalinan</li>\r\n	<li>Mulailah menentukan cara / proses kelahiran (caesar / biasa)</li>\r\n	<li>Sering konsultasi ke dokter / bidan</li>\r\n</ul>\r\n'),
(6, 6, 'images/infografik/bulan 6.jpg', '<p>BULAN KE - 6</p>\r\n\r\n<hr />\r\n<p>Pada bulan keenam, bayi anda telah berukuran sekitar 12 inci. Kulitnya mulai berwarna kemerahan, keriput, dan vena mulai tembus dan terlihat pada kulit. Kelopak mata mulai terpisah sehingga mata bisa terbuka. Bayi Anda mulai menanggapi suara dan denyut nadinya meningkat. Jika bayi Anda lahir premature, bayi Anda dapat bertahan hidup setelah minggu ke-23 kehamilan dengan perawatan intensif</p>\r\n\r\n<p>Kemungkinan perubahan yang terjadi :</p>\r\n\r\n<ul>\r\n	<li>Tekanan darah tinggi</li>\r\n	<li>Sakit kepala</li>\r\n	<li>Gangguan visual</li>\r\n	<li>Berat badan yang berlebihan secara tiba-tiba</li>\r\n</ul>\r\n\r\n<p>Tips :</p>\r\n\r\n<ul>\r\n	<li>Jika anda bekerja, ambillah hari libur dan manjakan diri.</li>\r\n	<li>Mulai menyusun rencana kelahiran Anda.</li>\r\n	<li>Pikirkan tentang yang Anda inginkan dalam ruang bersalin.</li>\r\n	<li>Mulailah mencari nama untuk bayi Anda</li>\r\n</ul>\r\n'),
(7, 7, 'images/infografik/bulan 7.jpg', '<p>BULAN KE - 7</p>\r\n\r\n<hr />\r\n<p>Pada bulan ketujuh, lemak mulai disimpan pada bayi Anda. Kini panjang bayi Anda sekitar 36 cm (14 inci). Pendengaran bayi Anda sepenuhnya berkembang dan ia sering berubah posisi dan merespon rangsangan, termasuk suara, rasa sakit, dan cahaya. Jika lahir premature, bayi Anda akan bertahan hidup setelah bulan ke tujuh kehamilan.</p>\r\n\r\n<p>Perubahan yang terjadi :</p>\r\n\r\n<ul>\r\n	<li>Mudah lupa</li>\r\n</ul>\r\n\r\n<p>Tips :</p>\r\n\r\n<ul>\r\n	<li>Konsultasi dengan dokter anak</li>\r\n	<li>Buatlah janji dengan rumah sakit untuk membahas rencana persalinan Anda</li>\r\n</ul>\r\n'),
(8, 8, 'images/infografik/bulan 8.jpg', '<p>BULAN KE - 8</p>\r\n\r\n<hr />\r\n<p>Pada bulan kedelapan, bayi anda telah berukuran 48 cm (18 inci). Bayi anda semakin berkembang dan bertambah gemuk. Anda akan mulai menyadari bahwa bayi Anda mulai lebih sering menendang-nendang. Otak bayi berkembang sangat pesat, dan ia mungkin sudah bisa mendengar. Semua sistem dalam tubuh telah berkembang dengan baik, kecuali paru-paru yang masih belum sempurna.</p>\r\n\r\n<p>Tips :</p>\r\n\r\n<ul>\r\n	<li>Mulailah ambilcuti jika Anda bekerja</li>\r\n	<li>Mulailah mendaftarkan waktu persalinan di rumah sakit pilihan Anda</li>\r\n</ul>\r\n'),
(9, 9, 'images/infografik/bulan 9.jpg', '<p>BULAN KE - 9</p>\r\n\r\n<hr />\r\n<p>Selamat Anda memasuki bulan terakhir kehamilan Anda! Mendekati akhir bulan kesembilan, bayi Anda terus tumbuh dan berkembang. Paru-parunya hampir berkembang sempurna, bahkan ia pun mulai bisa berkedip, menganggukkan kepala, dan merespon rangsangan suara, sentuhan serta cahaya. Posisi bayi Anda mulai berubah menjadi terbalik dari posisi semula, mengarah ke bawah dan bersiap untuk menyambut dunia nyata.</p>\r\n\r\n<p>Perubahan yang terjadi :</p>\r\n\r\n<ul>\r\n	<li>Serviks perlahan mulai membuka</li>\r\n	<li>Merasakan suatu gelombang kejutan pada panggul Anda saat bayi Anda merebahkan posisinya lebih ke bawah</li>\r\n</ul>\r\n\r\n<p>Tips :</p>\r\n\r\n<ul>\r\n	<li>Siapkan tas yang berisi kebutuhan saat persalinan</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Susun daftar panggilan agar tidak bingung jika kelahiran tiba-tiba terjadi begitu saja</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `isi_komentar` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `infografik`
--
ALTER TABLE `infografik`
 ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komentar`), ADD KEY `FK_komentar_user` (`email`), ADD KEY `FK_komentar_forum` (`id_forum`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
ADD CONSTRAINT `FK_komentar_forum` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_komentar_user` FOREIGN KEY (`email`) REFERENCES `akun` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
