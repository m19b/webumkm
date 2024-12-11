<?php
    $namadb = "dbweb";
    $cek = "dev";

    $isitb = "
    CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    role ENUM('admin', 'pengusaha', 'member') DEFAULT 'member',
    no_telp VARCHAR(15),
    alamat TEXT,
    foto_profil VARCHAR(255),
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tentang_kami (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(100),
    deskripsi TEXT,
    visi TEXT,
    misi TEXT,
    gambar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE layanan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    icon VARCHAR(50),
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif'
);
CREATE TABLE galeri (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(100),
    deskripsi TEXT,
    gambar VARCHAR(255) NOT NULL,
    kategori VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE team (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    posisi VARCHAR(100),
    deskripsi TEXT,
    foto VARCHAR(255),
    email VARCHAR(100),
    linkedin VARCHAR(255),
    instagram VARCHAR(255)
);

CREATE TABLE pengusaha (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    nama_usaha VARCHAR(100) NOT NULL,
    jenis_umkm VARCHAR(50),
    deskripsi_usaha TEXT,
    alamat_usaha TEXT,
    no_telp VARCHAR(15),
    email VARCHAR(100),
    logo_usaha VARCHAR(255),
    status ENUM('terverifikasi', 'menunggu', 'ditolak') DEFAULT 'menunggu',
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE produk (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pengusaha_id INT,
    nama_produk VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(10,2),
    stok INT,
    kategori VARCHAR(50),
    gambar VARCHAR(255),
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (pengusaha_id) REFERENCES pengusaha(id)
);

CREATE TABLE contact (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    no_telp VARCHAR(15),
    pesan TEXT NOT NULL,
    status ENUM('baru', 'dibaca', 'ditanggapi') DEFAULT 'baru',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE berita (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(255) NOT NULL,
    konten TEXT NOT NULL,
    penulis VARCHAR(100),
    gambar VARCHAR(255),
    kategori VARCHAR(50),
    status ENUM('draft', 'publikasi') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO users (username, email, password, nama_lengkap, role, no_telp, alamat) VALUES
('Ikbal', 'ikbal@gmail.com', '202cb962ac59075b964b07152d234b70', 'M. Ikbal', 'admin', '081234567890', 'Kantor Platform UMKM'),
('Nia', 'nia@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nia', 'pengusaha', '082345678901', 'Desa Sejahtera, Lombok'),
('Laela', 'laela@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laela', 'pengusaha', '083456789012', 'Desa Kreatif, Mataram');

INSERT INTO tentang_kami (judul, deskripsi, visi, misi) VALUES
('Platform UMKM Desa', 'Platform digital untuk mendukung dan mempromosikan UMKM di desa-desa', 
'Menjadi platform terdepan dalam memberdayakan UMKM pedesaan', 
'1. Membantu UMKM memasarkan produk\n2. Memberikan akses pasar yang lebih luas\n3. Mendukung ekonomi lokal');

INSERT INTO layanan (judul, deskripsi, icon) VALUES
('Promosi Produk', 'Membantu UMKM mempromosikan produk secara online', 'megaphone'),
('Konsultasi Bisnis', 'Layanan konsultasi pengembangan bisnis UMKM', 'support'),
('Pelatihan Digital', 'Pelatihan pemasaran digital untuk pelaku UMKM', 'laptop');

INSERT INTO galeri (judul, deskripsi, gambar, kategori) VALUES
('Produk Pertanian', 'Hasil pertanian unggulan desa', 'pertanian.jpg', 'Produk'),
('Workshop UMKM', 'Kegiatan pelatihan pengembangan UMKM', 'workshop.jpg', 'Kegiatan');

INSERT INTO team (nama, posisi, deskripsi, foto, email, linkedin, instagram) VALUES
('Muhammad Rizki', 'Founder', 'Founder platform UMKM Desa', 'rizki.jpg', 'rizki@platformumkm.com', 'linkedin/rizki', '@rizki_umkm'),
('Siti Aminah', 'Co-Founder', 'Ahli pengembangan UMKM', 'aminah.jpg', 'aminah@platformumkm.com', 'linkedin/aminah', '@aminah_umkm');

INSERT INTO pengusaha (user_id, nama_usaha, jenis_umkm, deskripsi_usaha, alamat_usaha, no_telp, email) VALUES
(2, 'Pertanian Organik Budi', 'Pertanian', 'Produk pertanian organik berkualitas', 'Desa Sejahtera, Lombok', '082345678901', 'budi.petani@gmail.com'),
(3, 'Kerajinan Tangan Ani', 'Kerajinan', 'Penghasil kerajinan tangan tradisional', 'Desa Kreatif, Mataram', '083456789012', 'ani.kerajinan@gmail.com');

INSERT INTO produk (pengusaha_id, nama_produk, deskripsi, harga, stok, kategori, gambar) VALUES
(1, 'Sayur Organik Segar', 'Sayuran segar hasil pertanian organik', 25000.00, 100, 'Pertanian', 'sayur_organik.jpg'),
(2, 'Tas Anyam Tradisional', 'Tas anyaman berkualitas tinggi', 150000.00, 50, 'Kerajinan', 'tas_anyam.jpg');

INSERT INTO contact (nama, email, no_telp, pesan) VALUES
('Dewi Lestari', 'dewi@gmail.com', '085678901234', 'Tertarik dengan layanan platform UMKM');

INSERT INTO berita (judul, konten, penulis, gambar, kategori, status) VALUES
('Kebangkitan UMKM di Era Digital', 'Artikel tentang perkembangan UMKM dalam menghadapi transformasi digital', 'Admin Platform', 'umkm_digital.jpg', 'Teknologi', 'publikasi'),
('Strategi Pemasaran UMKM Modern', 'Tips dan trik pemasaran untuk pelaku UMKM di era sekarang', 'Redaksi', 'pemasaran_umkm.jpg', 'Bisnis', 'publikasi');


    "

?>