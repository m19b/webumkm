<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo $_SESSION[$_GET['page']]; ?></h3>
                <br />
            </div>



        </div>

        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Service </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="?page=galeri_add" class="close-link"> <button type="button"
                                        class="btn btn-success">Tambah</button></a>
                            </li>




                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable-keytable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                            $query = mysqli_query($kon,"Select gambar,id,judul,kategori,SUBSTRING(deskripsi, 1, 30) deskripsi from galeri");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            ?>

                                        <tbody>
                                            <?php foreach($tampung as $index => $tampil): ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><img height="50" width="50"
                                                        src="isi/images/galeri/<?=$tampil['gambar']?>" alt="">
                                                </td>
                                                <td><?=$tampil['judul']?></td>
                                                <td><?=$tampil['kategori'] ;?></td>
                                                <td><?=$tampil['deskripsi'] ;?>...</td>
                                                <td><a href="?page=galeri_add&id=<?=$tampil['id'] ;?>"><button
                                                            type="button" class="btn btn-warning fa fa-trash">
                                                            Edit</button></a> <a
                                                        href="?page=galeri_delete&id=<?=$tampil['id'] ;?>"><button
                                                            type="button" class="btn btn-danger fa fa-trash">
                                                            Hapus</button></a></td>

                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>