<?php
// Cek jika ada ID untuk dihapus
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($kon, "SELECT * FROM galeri WHERE id = '$id'");
    $data = mysqli_fetch_assoc($query);
}

// Proses hapus data
if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    // Hapus data dari database
    $query = "DELETE FROM galeri WHERE id = '$id'";
    if (mysqli_query($kon, $query)) {
        // Setelah data berhasil dihapus, redirect ke halaman galeri
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = '?page=galeri';
              </script>";
        exit; // Pastikan tidak ada kode yang dieksekusi setelah redirect
    } else {
        echo "Error: " . mysqli_error($kon);
    }
}
?>

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Konfirmasi Penghapusan Galeri</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Galeri</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" required
                                value="<?= isset($data['judul']) ? $data['judul'] : '' ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" id="kategori" class="form-control" required
                                value="<?= isset($data['kategori']) ? $data['kategori'] : '' ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required
                                disabled>
                                <?= isset($data['deskripsi']) ? $data['deskripsi'] : '' ?>
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label><br>
                            <?php if (isset($data['gambar'])): ?>
                                <img src="isi/images/galeri/<?= $data['gambar'] ?>" height="100" width="100" alt="">
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <a href="?page=galeri" class="btn btn-danger">Batal</a>
                            <!-- Tombol untuk membuka modal konfirmasi hapus -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <!-- Form untuk menghapus data jika tombol "Ya" dipilih -->
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="hapus" class="btn btn-danger">Ya, Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan tombol Kembali ke Galeri -->
<a href="?page=galeri" class="btn btn-primary">Kembali ke Galeri</a>

