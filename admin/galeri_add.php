<?php

// Cek koneksi
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mulai output buffering
ob_start();

// Cek jika ada ID untuk edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($kon, "SELECT * FROM galeri WHERE id = '$id'");
    $data = mysqli_fetch_assoc($query);
}

// Proses tambah atau edit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    // Proses upload gambar
    $gambar = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $gambar = $_FILES['gambar']['name'];
        $target_dir = "isi/images/galeri/";
        $target_file = $target_dir . basename($gambar);

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            // Berhasil upload gambar
        }
    } else if (isset($data['gambar'])) {
        $gambar = $data['gambar'];  // Jika edit, biarkan gambar lama
    }

    // Jika ada ID, berarti edit data
    if (isset($id)) {
        $query = "UPDATE galeri SET judul = '$judul', kategori = '$kategori', deskripsi = '$deskripsi', gambar = '$gambar' WHERE id = '$id'";
    } else {  // Jika tidak ada ID, berarti tambah data baru
        $query = "INSERT INTO galeri (judul, kategori, deskripsi, gambar) VALUES ('$judul', '$kategori', '$deskripsi', '$gambar')";
    }

    if (mysqli_query($kon, $query)) {
        // Redirect setelah berhasil simpan atau update
        echo "<script>
                alert('Data berhasil disimpan!');
                window.location.href = '?page=galeri';  // Redirect ke halaman galeri
              </script>";
        exit();  // Menghentikan eksekusi lebih lanjut setelah redirect
    } else {
        echo "Error: " . mysqli_error($kon);
    }
}

// Akhiri output buffering dan kirimkan output ke browser
ob_end_flush();
?>

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah / Edit Galeri</h3>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" required
                                value="<?= isset($data['judul']) ? $data['judul'] : '' ?>">
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" id="kategori" class="form-control" required
                                value="<?= isset($data['kategori']) ? $data['kategori'] : '' ?>">
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>
                                <?= isset($data['deskripsi']) ? $data['deskripsi'] : '' ?>
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control">
                            <?php if (isset($data['gambar'])): ?>
                            <br><img src="isi/images/galeri/<?= $data['gambar'] ?>" height="100" width="100" alt="">
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="?page=galeri" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>