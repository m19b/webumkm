<?php

// Periksa koneksi
if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}

// Variabel untuk menampung data form
$pertanyaan = $jawaban = $kategori = $tanggal_ditambahkan = "";

// Cek apakah ada parameter id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM faq WHERE id = ?";
    $stmt = $kon->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $pertanyaan = $data['pertanyaan'];
        $jawaban = $data['jawaban'];
        $kategori = $data['kategori'];
        $tanggal_ditambahkan = $data['tanggal_ditambahkan'];
    }
    $stmt->close();
} 

// Proses simpan data baru atau edit data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pertanyaan = $_POST['pertanyaan'];
    $jawaban = $_POST['jawaban'];
    $kategori = $_POST['kategori'];
    $tanggal_ditambahkan = $_POST['tanggal_ditambahkan'];

    if (isset($_GET['id'])) {  // Edit data
        $sql = "UPDATE faq SET pertanyaan = ?, jawaban = ?, kategori = ?, tanggal_ditambahkan = ? WHERE id = ?";
        $stmt = $kon->prepare($sql);
        $stmt->bind_param("ssssi", $pertanyaan, $jawaban, $kategori, $tanggal_ditambahkan, $id);
        $stmt->execute();
        $stmt->close();
    } else {  // Tambah data baru
        $sql = "INSERT INTO faq (pertanyaan, jawaban, kategori, tanggal_ditambahkan) VALUES (?, ?, ?, ?)";
        $stmt = $kon->prepare($sql);
        $stmt->bind_param("ssss", $pertanyaan, $jawaban, $kategori, $tanggal_ditambahkan);
        $stmt->execute();
        $stmt->close();
    }

    // Redirect ke halaman daftar FAQ setelah proses selesai
    echo "<script>
            alert('Data berhasil disimpan');
            window.location.href = '?page=faq';
          </script>";
    exit();
}

$kon->close();
?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo isset($_GET['id']) ? 'Edit FAQ' : 'Tambah FAQ'; ?></h3>
                <br />
            </div>
        </div>
        <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pertanyaan">Pertanyaan <span
                            class="required">:</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="pertanyaan" name="pertanyaan" value="<?= $pertanyaan; ?>"
                            required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jawaban">Jawaban <span
                            class="required">:</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="jawaban" name="jawaban" value="<?= $jawaban; ?>" required="required"
                            class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">Kategori <span
                            class="required">:</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kategori" name="kategori" value="<?= $kategori; ?>" required="required"
                            class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_ditambahkan">Tanggal
                        Ditambahkan <span class="required">:</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" id="tanggal_ditambahkan" name="tanggal_ditambahkan"
                            value="<?= $tanggal_ditambahkan; ?>" required="required"
                            class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                        <button type="submit"
                            class="btn btn-success"><?= isset($_GET['id']) ? 'Update' : 'Simpan'; ?></button>
                        <a href="?page=faq"><button type="button" class="btn btn-primary">Kembali</button></a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>