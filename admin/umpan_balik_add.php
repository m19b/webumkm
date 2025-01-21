<?php


// Periksa koneksi
if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}

// Mengecek apakah ada ID yang dikirimkan untuk edit
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Proses penyimpanan atau update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $produk_layanan = $_POST['produk_layanan'];
    $rating = $_POST['rating'];
    $tindak_lanjut = $_POST['tindak_lanjut'];
    $tanggal_umpan_balik = $_POST['tanggal_umpan_balik'];

    if ($id) {
        // Query untuk update data
        $sql = "UPDATE umpan_balik SET nama=?, produk_layanan=?, rating=?, tindak_lanjut=?, tanggal_umpan_balik=? WHERE id=?";
        $stmt = $kon->prepare($sql);
        $stmt->bind_param("ssisss", $nama, $produk_layanan, $rating, $tindak_lanjut, $tanggal_umpan_balik, $id);
    } else {
        // Query untuk menyimpan data baru
        $sql = "INSERT INTO umpan_balik (nama, produk_layanan, rating, tindak_lanjut, tanggal_umpan_balik) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $kon->prepare($sql);
        $stmt->bind_param("ssiss", $nama, $produk_layanan, $rating, $tindak_lanjut, $tanggal_umpan_balik);
    }

    if ($stmt->execute()) {
        echo "<script>
                alert('Data berhasil disimpan');
                window.location.href = '?page=umpan_balik';
              </script>";
    } else {
        echo "<script>alert('Gagal menyimpan data');</script>";
    }

    $stmt->close();
    $kon->close();
    exit;
}

// Jika ID ada, ambil data untuk form edit
if ($id) {
    $sql = "SELECT * FROM umpan_balik WHERE id=?";
    $stmt = $kon->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}
?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo $id ? "Edit Umpan Balik" : "Tambah Umpan Balik"; ?></h3>
                <br />
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Umpan Balik</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="?page=umpan_balik" class="close-link">
                                    <button type="button" class="btn btn-primary">Kembali</button>
                                </a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <!-- Nama -->
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" id="nama" name="nama" class="form-control"
                                            value="<?php echo isset($data['nama']) ? $data['nama'] : ''; ?>" required>
                                    </div>

                                    <!-- Produk Layanan -->
                                    <div class="form-group">
                                        <label for="produk_layanan">Produk Layanan:</label>
                                        <input type="text" id="produk_layanan" name="produk_layanan"
                                            class="form-control"
                                            value="<?php echo isset($data['produk_layanan']) ? $data['produk_layanan'] : ''; ?>"
                                            required>
                                    </div>

                                    <!-- Rating -->
                                    <div class="form-group">
                                        <label for="rating">Rating (1-5):</label>
                                        <input type="number" id="rating" name="rating" class="form-control" min="1"
                                            max="5" value="<?php echo isset($data['rating']) ? $data['rating'] : ''; ?>"
                                            required>
                                    </div>

                                    <!-- Tindak Lanjut -->
                                    <div class="form-group">
                                        <label for="tindak_lanjut">Tindak Lanjut:</label>
                                        <textarea id="tindak_lanjut" name="tindak_lanjut" class="form-control" rows="4"
                                            required><?php echo isset($data['tindak_lanjut']) ? $data['tindak_lanjut'] : ''; ?></textarea>
                                    </div>

                                    <!-- Tanggal Umpan Balik -->
                                    <div class="form-group">
                                        <label for="tanggal_umpan_balik">Tanggal Umpan Balik:</label>
                                        <input type="date" id="tanggal_umpan_balik" name="tanggal_umpan_balik"
                                            class="form-control"
                                            value="<?php echo isset($data['tanggal_umpan_balik']) ? $data['tanggal_umpan_balik'] : ''; ?>"
                                            required>
                                    </div>

                                    <!-- Tombol Simpan -->
                                    <button type="submit"
                                        class="btn btn-success"><?php echo $id ? "Update" : "Simpan"; ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Menutup koneksi database
$kon->close();
?>