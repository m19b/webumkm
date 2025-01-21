<?php
// Koneksi ke database


// Periksa koneksi
if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}

// Inisialisasi pesan
$success = $error = "";
$id_produk = null;
$jenis_umkm = $nama_produk = $harga = $stok = $status = "";

// Proses simpan data atau update data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jenis_umkm = $_POST['jenis_umkm'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $status = $_POST['status'];

    // Validasi input
    if (empty($jenis_umkm) || empty($nama_produk) || empty($harga) || empty($stok) || empty($status)) {
        $error = "Semua field harus diisi!";
    } else {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Update data produk
            $id_produk = $_POST['id'];
            $stmt = $kon->prepare("UPDATE produk SET pengusaha_id=?, nama_produk=?, harga=?, stok=?, status=? WHERE id=?");
            $stmt->bind_param("isdisi", $jenis_umkm, $nama_produk, $harga, $stok, $status, $id_produk);
        } else {
            // Insert data produk
            $stmt = $kon->prepare("INSERT INTO produk (pengusaha_id, nama_produk, harga, stok, status) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("isdis", $jenis_umkm, $nama_produk, $harga, $stok, $status);
        }

        if ($stmt->execute()) {
            $success = "Produk berhasil disimpan!";
            // Redirect ke halaman produk setelah proses selesai
            echo "<script>
                    alert('Produk berhasil disimpan');
                    window.location.href = '?page=produk';
                  </script>";
            exit(); // Menghentikan eksekusi lebih lanjut
        } else {
            $error = "Gagal menyimpan data: " . $kon->error;
        }
        $stmt->close();
    }
}

// Jika ada parameter id untuk edit, ambil data produk
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_produk = $_GET['id'];
    $query = $kon->query("SELECT * FROM produk WHERE id = $id_produk");
    if ($query->num_rows > 0) {
        $data = $query->fetch_assoc();
        $jenis_umkm = $data['pengusaha_id'];
        $nama_produk = $data['nama_produk'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $status = $data['status'];
    }
}

// Menampilkan produk yang ada
$query_produk = $kon->query("SELECT p.id, p.nama_produk, p.harga, p.stok, p.status, u.jenis_umkm FROM produk p JOIN pengusaha u ON p.pengusaha_id = u.id");
?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?=$_GET['page']; ?></h3>
                <br />
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $id_produk ? "Edit Produk" : "Tambah Produk" ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php if ($success): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                        <?php endif; ?>
                        <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>

                        <!-- Form Tambah atau Edit Produk -->
                        <form method="POST" action="">
                            <input type="hidden" name="id" value="<?= $id_produk ?>">

                            <div class="form-group">
                                <label for="jenis_umkm">Jenis UMKM</label>
                                <select name="jenis_umkm" id="jenis_umkm" class="form-control" required>
                                    <option value="">-- Pilih Jenis UMKM --</option>
                                    <?php
                                    // Koneksi ulang untuk mengambil data UMKM
                                    $query_umkm = $kon->query("SELECT id, jenis_umkm FROM pengusaha");
                                    while ($umkm = $query_umkm->fetch_assoc()) {
                                        $selected = ($umkm['id'] == $jenis_umkm) ? 'selected' : '';
                                        echo "<option value='{$umkm['id']}' {$selected}>{$umkm['jenis_umkm']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                    value="<?= $nama_produk ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" id="harga" class="form-control" value="<?= $harga ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" name="stok" id="stok" class="form-control" value="<?= $stok ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="Aktif" <?= ($status == 'Aktif') ? 'selected' : '' ?>>Aktif</option>
                                    <option value="Tidak Aktif" <?= ($status == 'Tidak Aktif') ? 'selected' : '' ?>>
                                        Tidak Aktif</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="btn btn-primary"><?= $id_produk ? "Update" : "Simpan" ?></button>
                            <a href="?page=produk" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menampilkan Daftar Produk -->
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Produk</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($query_produk->num_rows > 0) {
                                    while ($produk = $query_produk->fetch_assoc()) {
                                        echo "<tr>
                                                <td>{$produk['id']}</td>
                                          
                                                <td>{$produk['nama_produk']}</td>
                                                <td>{$produk['harga']}</td>
                                                <td>{$produk['stok']}</td>
                                                <td>{$produk['status']}</td>
                                                <td><a href='?page=produk&id={$produk['id']}'>Edit</a></td>
                                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7'>Tidak ada produk yang tersedia.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$kon->close();
?>