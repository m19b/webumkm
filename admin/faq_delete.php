<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?=$_GET['page']; ?></h3>
                <br />
            </div>
        </div>
        <?php


        // Periksa koneksi
        if ($kon->connect_error) {
            die("Koneksi gagal: " . $kon->connect_error);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
            // Hapus data berdasarkan ID
            $delete_id = $_POST['delete_id'];
            $sql = "DELETE FROM faq WHERE id = ?";

            $stmt = $kon->prepare($sql);
            $stmt->bind_param("i", $delete_id);

            if ($stmt->execute()) {
                echo "<script>
                        alert('Data berhasil dihapus.');
                        window.location.href = '?page=faq';
                      </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $kon->error;
            }

            $stmt->close();
        }

        // Menampilkan data dari tabel
        $sql = "SELECT * FROM faq";
        $result = $kon->query($sql);

        $kon->close();
        ?>

        <div class="x_content" style="max-width: 800px; margin: auto;">
            <table class="table table-bordered table-sm">
                <thead class="thead-light">
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 25%;">Pertanyaan</th>
                        <th style="width: 30%;">Jawaban</th>
                        <th style="width: 15%;">Kategori</th>
                        <th style="width: 15%;">Tanggal</th>
                        <th style="width: 10%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                    <?php $no = 1; ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['pertanyaan']); ?></td>
                        <td><?= htmlspecialchars($row['jawaban']); ?></td>
                        <td><?= htmlspecialchars($row['kategori']); ?></td>
                        <td><?= $row['tanggal_ditambahkan']; ?></td>
                        <td>
                            <form method="POST" style="display:inline-block;">
                                <input type="hidden" name="delete_id" value="<?= $row['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>