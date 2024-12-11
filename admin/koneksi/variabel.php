<?php
    $namadb = "tugaskelompok7";
    $cek = "dev";

    $isitb = "/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306_1
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : tugaskelompok

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 12/12/2024 01:40:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `konten` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penulis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('draft','publikasi') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (1, 'Kebangkitan UMKM di Era Digital', 'Artikel tentang perkembangan UMKM dalam menghadapi transformasi digital', 'Admin Platform', 'visa.png', 'Teknologi', 'publikasi', '2024-12-11 12:22:18');
INSERT INTO `berita` VALUES (2, 'Strategi Pemasaran UMKM Modern', 'Tips dan trik pemasaran untuk pelaku UMKM di era sekarang', 'Redaksi', 'visa.png', 'Bisnis', 'publikasi', '2024-12-11 12:22:18');
INSERT INTO `berita` VALUES (3, 'Kebangkitan UMKM di Era Digital', 'Artikel tentang perkembangan UMKM dalam menghadapi transformasi digital', 'Admin Platform', 'umkm_digital.jpg', 'Teknologi', 'publikasi', '2024-12-11 04:22:18');
INSERT INTO `berita` VALUES (4, 'Strategi Pemasaran UMKM Modern', 'Tips dan trik pemasaran untuk pelaku UMKM di era sekarang', 'Redaksi', 'pemasaran_umkm.jpg', 'Bisnis', 'publikasi', '2024-12-11 04:22:18');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('baru','dibaca','ditanggapi') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'baru',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, 'M.ikbal', 'ikbal@gmail.com', '085678901234', 'Tertarik dengan layanan platform UMKM', 'baru', '2024-12-11 04:22:18');

-- ----------------------------
-- Table structure for faq
-- ----------------------------
DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jawaban` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_ditambahkan` date NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faq
-- ----------------------------
INSERT INTO `faq` VALUES (1, 'Apakah ada biaya pengiriman?', 'Biaya pengiriman akan ditampilkan pada halaman checkout.', 'pengiriman', '2024-12-11');
INSERT INTO `faq` VALUES (2, 'Bagaimana cara melacak pesanan?', 'Anda dapat melacak pesanan melalui akun Anda.', 'pesanan', '2024-12-11');
INSERT INTO `faq` VALUES (3, 'Bagaimana cara membuat akun?', 'Untuk membuat akun, silakan klik tombol \"Daftar\" di halaman utama dan isi formulir pendaftaran.', 'akun', '2024-12-11');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES (1, 'Produk Pertanian', 'Hasil pertanian unggulan desa', 'pertanian.jpg', 'Produk', '2024-12-11 12:22:18');
INSERT INTO `galeri` VALUES (2, 'Workshop UMKM', 'Kegiatan pelatihan pengembangan UMKM', 'WorkshopUMKM.jpg', 'Kegiatan', '2024-12-11 12:22:18');
INSERT INTO `galeri` VALUES (3, 'Pakaian lombok mataram', 'Pakaian UMKM di Lombok Mataram umumnya mencakup berbagai produk busana lokal yang dibuat oleh usaha mikro, kecil, dan menengah (UMKM) setempat.', 'pakaian1.jpeg', 'pakaian', '2024-12-11 05:59:32');
INSERT INTO `galeri` VALUES (4, 'Dodol Nangka', 'Dodol Nangka Khas Lombok. Oleh oleh Lombok yang sejak dulu sudah dikenal banyak orang. Terbuat dari buah Nangka pilihan, dikemas (bungkus bagian dalam) menggunakan kulit jagung agar terjaga rasa dan aromanya. Tanpa bahan pengawet dan dijamin halal.', 'DodolNangka.jpg', 'produk', '2024-12-11 06:01:52');
INSERT INTO `galeri` VALUES (5, 'Kopi sajan', 'Kopi Sajan adalah kopi khas dari Lombok yang terkenal dengan rasa yang kuat dan aroma yang khas. Kopi ini biasanya disajikan dengan cara tradisional, menggunakan biji kopi lokal yang dipanggang dan digiling secara manual. Kopi Sajan banyak dinikmati sebagai minuman sehari-hari di Lombok.', 'kopi2.jpg', 'produk', '2024-12-11 06:01:52');
INSERT INTO `galeri` VALUES (6, 'Pakaian', 'Pakaian UMKM di Lombok Mataram umumnya mencakup berbagai produk busana lokal yang dibuat oleh usaha mikro, kecil, dan menengah (UMKM) setempat.', 'pakaian.jpg', 'pakaian', '2024-12-11 06:03:54');
INSERT INTO `galeri` VALUES (7, 'Keciput', 'Keciput Lombok adalah camilan tradisional khas Lombok, terbuat dari tepung beras dan kelapa, kemudian digoreng hingga renyah. Biasanya berbentuk bulat kecil dan berwarna cokelat keemasan, keciput memiliki rasa manis gurih yang khas. Camilan ini populer sebagai oleh-oleh khas Lombok.', 'Keciput.jpg', 'produk', '2024-12-11 06:03:54');
INSERT INTO `galeri` VALUES (8, 'Kopi Rakyat', 'rasa dan kuliatas nya mantapp', 'kopirakyat.jpg', 'produk', '2024-12-11 06:06:05');
INSERT INTO `galeri` VALUES (9, 'Pakaian lombok mataram', 'Pakaian UMKM di Lombok Mataram umumnya mencakup berbagai produk busana lokal yang dibuat oleh usaha mikro, kecil, dan menengah (UMKM) setempat. ', 'pakaian4.jpg', 'pakaian', '2024-12-11 06:06:05');
INSERT INTO `galeri` VALUES (10, 'Potatos chips', ' Potato chips Mataram, Lombok, adalah camilan khas yang terbuat dari kentang segar lokal. Dikenal dengan rasa gurih dan renyah, produk ini memiliki berbagai varian rasa seperti original, keju, dan pedas. Potato chips ini sering dijadikan oleh-oleh bagi wisatawan yang berkunjung ke Lombok dan semakin populer di pasar lokal maupun internasional.', 'potato.jpg', 'Produk', '2024-12-11 04:22:18');
INSERT INTO `galeri` VALUES (11, 'Kopi sembalun', 'Kopi Sembalun adalah kopi khas dari daerah Sembalun di Lombok, yang dikenal dengan cita rasa uniknya. Kopi ini ditanam di dataran tinggi, dengan tanah vulkanik yang kaya akan nutrisi. Proses pengolahan biji kopinya dilakukan secara tradisional, sehingga menghasilkan kopi dengan rasa yang khas, nikmat, dan memiliki aroma yang kuat. Kopi Sembalun sering dinikmati sebagai minuman pagi atau oleh-oleh khas Lombok.', 'kopisembalun.jpg', 'produk', '2024-12-11 04:22:18');

-- ----------------------------
-- Table structure for layanan
-- ----------------------------
DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'aktif',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan
-- ----------------------------
INSERT INTO `layanan` VALUES (1, '💝 100% Produk Asli Desa ', 'Membantu UMKM mempromosikan produk secara online', 'megaphone', 'aktif');
INSERT INTO `layanan` VALUES (2, '🚚 Pengiriman Aman ', 'Dikemas dengan aman dan teliti, didukung layanan pengiriman terpercaya ke seluruh Indonesia. ', 'support', 'aktif');
INSERT INTO `layanan` VALUES (3, '🌟 Kualitas Terjamin ', 'Proses produksi diawasi ketat dengan standar mutu tinggi, menggunakan bahan-bahan pilihan berkualitas.', 'laptop', 'aktif');
INSERT INTO `layanan` VALUES (4, '💳 Pembayaran Mudah ', 'Berbagai metode pembayaran tersedia untuk kenyamanan Anda, dari transfer bank hingga e-wallet.', 'laptop', 'aktif');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `urut` int NOT NULL DEFAULT 99,
  `link` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ikon` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'fa fa-home',
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_aktif` enum('Y','T') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'T',
  `uraian_nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 1, 'tentangkami', 'fa fa-info', 'Tentang Kami', 'Y', 'ini contoh tetang kami');
INSERT INTO `menu` VALUES (2, 2, 'servis', 'fa fa-gift', 'Layanan', 'Y', NULL);
INSERT INTO `menu` VALUES (3, 3, 'galeri', 'fa fa-image', 'Galeri', 'Y', NULL);
INSERT INTO `menu` VALUES (4, 4, 'tim', 'fa fa-github', 'Team', 'Y', NULL);
INSERT INTO `menu` VALUES (5, 5, 'produk', 'fa fa-shopping-cart', 'Produk', 'Y', NULL);
INSERT INTO `menu` VALUES (7, 7, 'users', 'fa fa-users', 'Pengguna', 'Y', NULL);
INSERT INTO `menu` VALUES (8, 99, 'menu', 'fa fa-tasks', 'Menu', 'Y', 'Untuk mengatur Menu');
INSERT INTO `menu` VALUES (9, 8, 'berita', 'fa fa-list-alt', 'Berita', 'Y', 'Untuk Berita');
INSERT INTO `menu` VALUES (10, 9, 'faq', 'fa fa-spinner', 'Faq', 'Y', 'Sering di Tanyakan');
INSERT INTO `menu` VALUES (11, 10, 'pengusaha', 'fa fa-pie-chart', 'Pengusaha', 'Y', 'Daftar Usaha');
INSERT INTO `menu` VALUES (12, 11, 'umpan_balik', 'fa fa-backward', 'Umpan Balik', 'Y', 'Masukan Pengguna');

-- ----------------------------
-- Table structure for pengusaha
-- ----------------------------
DROP TABLE IF EXISTS `pengusaha`;
CREATE TABLE `pengusaha`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `nama_usaha` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_umkm` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi_usaha` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `alamat_usaha` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `no_telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logo_usaha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('terverifikasi','menunggu','ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'menunggu',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id` ASC) USING BTREE,
  CONSTRAINT `pengusaha_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengusaha
-- ----------------------------
INSERT INTO `pengusaha` VALUES (1, 1, 'Produk Pertanian Desa', 'micro', 'Hasil pertanian unggulan desa', 'Desa Sejahtera, Lombok', '081234567890', 'pertanian.desa@gmail.com', 'logo_pertanian.jpg', '');
INSERT INTO `pengusaha` VALUES (2, 2, 'Workshop UMKM Lombok', 'small', 'Kegiatan pelatihan pengembangan UMKM', 'Mataram, Lombok', '087654321098', 'workshop.umkm@gmail.com', 'logo_workshop.jpg', '');
INSERT INTO `pengusaha` VALUES (3, 3, 'Busana Lombok Mataram', 'medium', 'Produsen pakaian lokal khas Lombok', 'Jl. Pakaian No. 15, Mataram', '082345678901', 'busana.lombok@gmail.com', 'logo_busana.jpg', '');
INSERT INTO `pengusaha` VALUES (4, 1, 'Oleh-oleh Lombok Rasa', 'micro', 'Produsen makanan khas Lombok', 'Desa Kuliner, Lombok', '085678901234', 'oleholeh.lombok@gmail.com', 'logo_oleholeh.jpg', '');
INSERT INTO `pengusaha` VALUES (5, 2, 'Kopi Lombok Sejati', 'small', 'Produsen kopi khas Lombok', 'Kecamatan Sembalun, Lombok', '089012345678', 'kopi.lombok@gmail.com', 'logo_kopi.jpg', '');
INSERT INTO `pengusaha` VALUES (6, 3, 'Camilan Lombok Tradisional', 'micro', 'Produsen camilan khas Lombok', 'Desa Camilan, Lombok', '083456789012', 'camilan.lombok@gmail.com', 'logo_camilan.jpg', '');
INSERT INTO `pengusaha` VALUES (7, 1, 'Snack Mataram', 'small', 'Produsen camilan dan snack lokal', 'Jl. Snack No. 7, Mataram', '086789012345', 'snack.mataram@gmail.com', 'logo_snack.jpg', '');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pengusaha_id` int NULL DEFAULT NULL,
  `nama_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `harga` decimal(10, 0) NULL DEFAULT NULL,
  `satuan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stok` int NULL DEFAULT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pengusaha_id`(`pengusaha_id` ASC) USING BTREE,
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`pengusaha_id`) REFERENCES `pengusaha` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (1, 1, 'Hasil Panen Padi', 'Beras berkualitas tinggi dari pertanian desa', 50000, 'Kg', 100, 'Pertanian', 'foto1.jpeg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (2, 2, 'Kopi Hitam', 'Kopi Hitam Nikmat Rasanya', 500000, 'Kg', 20, 'Jasa', 'foto13.jpeg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (3, 3, 'Kebaya Lombok Tradisional', 'Pakaian adat wanita khas Lombok', 350000, 'Pcs', 50, 'Pakaian', 'pakaian1.jpeg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (4, 3, 'Sarung Tenun Lombok', 'Sarung tradisional berkualitas tinggi', 250000, 'Pcs', 75, 'Pakaian', 'pakaian2.jpeg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (5, 4, 'Dodol Nangka Asli', 'Dodol nangka khas Lombok tanpa pengawet', 35000, 'Kg', 200, 'Makanan', 'dodol.jpeg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (6, 5, 'Kopi Sajan Premium', 'Kopi tradisional dengan rasa khas Lombok', 75000, 'Kg', 150, 'Minuman', 'kopi1.jpeg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (7, 6, 'Keciput Renyah', 'Camilan tradisional khas Lombok', 15000, 'Kg', 300, 'Camilan', 'keciput.jpg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (8, 5, 'Kopi Sembalun Halus', 'Kopi pilihan dari dataran tinggi Sembalun', 85000, 'Kg', 100, 'Minuman', 'kopi3.jpeg', 'aktif', '2024-12-12 00:10:32');
INSERT INTO `produk` VALUES (9, 7, 'Potato Chips Mataram', 'Camilan kentang renyah dengan berbagai varian rasa', 25000, 'Bks', 250, 'Camilan', 'potato_chips.jpeg', 'aktif', '2024-12-12 00:10:32');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `posisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES (1, 'M. Ikbal', 'Programmer', 'Founder platform UMKM Desa', 'ikbal.jpg', 'ikbal@gmail.com', 'mik.bse', 'mik.bse');
INSERT INTO `team` VALUES (2, 'Tania', 'Databases', 'Ahli pengembangan UMKM', 'tania.jpg', 'tania@gmail.com', 'mik.bse', 'mik.bse');
INSERT INTO `team` VALUES (3, 'Laela', 'Desain Layot', 'Ahli pengembangan UMKM', 'laela.jpg', 'laela@gmail.com', 'mik.bse', 'mik.bse');

-- ----------------------------
-- Table structure for tentang_kami
-- ----------------------------
DROP TABLE IF EXISTS `tentang_kami`;
CREATE TABLE `tentang_kami`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `level` enum('judul','list') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uraian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `status_aktif` enum('T','Y') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ikon` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tentang_kami
-- ----------------------------
INSERT INTO `tentang_kami` VALUES (1, 'judul', 'Tentang UMKM Desa Sejahtera', 'Berawal dari semangat gotong royong masyarakat Desa Sejahtera pada tahun 2018, kami memulai perjalanan untuk mengangkat potensi desa melalui pemberdayaan UMKM. Bermula dari 5 pengrajin dengan produk sederhana, kini kami telah berkembang menjadi wadah bagi 50+ pelaku UMKM desa yang menghasilkan berbagai produk berkualitas.', 'Y', 'activity icon');
INSERT INTO `tentang_kami` VALUES (2, '', 'Visi', 'Menjadi pusat UMKM desa terkemuka yang menghadirkan produk berkualitas dan berkelanjutan, sekaligus meningkatkan kesejahteraan masyarakat desa melalui pemberdayaan ekonomi kreatif.', 'Y', 'activity icon');
INSERT INTO `tentang_kami` VALUES (3, '', 'misi', 'Mengembangkan produk-produk unggulan desa dengan standar kualitas terbaik, Memberdayakan masyarakat desa melalui pelatihan dan pendampingan usaha, Melestarikan kearifan lokal melalui produk kreatif dan inovatif', 'Y', 'bounding-box-circles icon');
INSERT INTO `tentang_kami` VALUES (4, '', 'Lokasi Strategis', 'Desa Sejahtera terletak di kaki gunung dengan ketinggian 500 mdpl, menciptakan iklim yang ideal untuk pertanian dan pengolahan hasil bumi.', 'Y', 'calendar4-week icon');
INSERT INTO `tentang_kami` VALUES (5, '', 'Potensi Unggulan', 'Hasil pertanian organik,Kerajinan bambu dan rotan, Batik motif khas desa, Makanan olahan tradisional', 'Y', 'broadcast icon');

-- ----------------------------
-- Table structure for umpan_balik
-- ----------------------------
DROP TABLE IF EXISTS `umpan_balik`;
CREATE TABLE `umpan_balik`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_umpan_balik` date NOT NULL,
  `produk_layanan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rating` int NULL DEFAULT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tindak_lanjut` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of umpan_balik
-- ----------------------------
INSERT INTO `umpan_balik` VALUES (1, 'Saul Goodman', 'saul@gmail.com', 'testimonials-1.jpg', '2023-11-25', 'Produk A', 3, 'Saya sangat puas dengan produk yang saya beli. Kualitasnya luar biasa dan sesuai dengan deskripsi yang diberikan. Pengirimannya juga cepat dan kemasan sangat rapi. Terima kasih banyak, pasti akan membeli lagi!.', NULL);
INSERT INTO `umpan_balik` VALUES (2, 'Sara Wilsson', 'sara@gmail.com', 'testimonials-2.jpg', '2023-11-24', 'Produk B', 5, 'Produk yang saya beli sangat nyaman digunakan, dan hasilnya sesuai ekspektasi. Terima kasih atas layanan yang luar biasa. Saya pasti kembali untuk berbelanja lagi!.', NULL);
INSERT INTO `umpan_balik` VALUES (3, 'Jena Karlis', 'jena@gmail.com', 'testimonials-3.jpg', '2023-11-26', 'Produk A', 5, 'Layanan yang luar biasa! Produk sangat bagus dan pengiriman tepat waktu. Saya akan terus berbelanja di sini karena kualitas dan pelayanan yang sangat memuaskan.', NULL);
INSERT INTO `umpan_balik` VALUES (4, 'Matt Brandon', 'matt@gmail.com', 'testimonials-4.jpg', '2024-12-03', 'produk c', 5, 'Produk yang saya beli sangat memenuhi harapan! Kualitasnya sangat baik dan pengiriman sangat cepat. Saya pasti akan membeli lagi di sini.', NULL);
INSERT INTO `umpan_balik` VALUES (5, 'John Larson', 'john@gmail.com', 'testimonials-5.jpg', '2024-12-01', 'produk C', 5, 'Luar biasa! Ini pertama kali saya membeli di sini, dan saya sangat terkesan. Produk datang tepat waktu dan kualitasnya sangat bagus. Pasti akan belanja lagi!.', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','pengusaha','member') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'member',
  `no_telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto_profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Ikbal', 'ikbal@gmail.com', '202cb962ac59075b964b07152d234b70', 'M. Ikbal', 'admin', '081234567890', 'Kantor Platform UMKM', 'ikbal.jpg', 'aktif', '2024-12-11 12:22:18');
INSERT INTO `users` VALUES (2, 'Nia', 'nurwatania007@gmail.com', '202cb962ac59075b964b07152d234b70', 'St.Nurwataniah', 'pengusaha', '082345678901', 'Desa Sejahtera, Lombok', 'img.jpg', 'aktif', '2024-12-11 12:22:18');
INSERT INTO `users` VALUES (3, 'Laela', 'laela@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laela', 'pengusaha', '083456789012', 'Desa Kreatif, Mataram', 'prod-5.jpg', 'aktif', '2024-12-11 12:22:18');

SET FOREIGN_KEY_CHECKS = 1;


    "

?>