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
                            <li><a href="?page=umpan_balik_add" class="close-link"> <button type="button"
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
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Produk</th>
                                                <th>Rating</th>
                                                <th>Tindak Lanjut</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                            $query = mysqli_query($kon,"Select *from umpan_balik");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            ?>

                                        <tbody>
                                            <?php foreach($tampung as $index => $tampil): ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><?=$tampil['nama'] ;?></td>
                                                <td><?=$tampil['tanggal_umpan_balik'] ;?></td>
                                                <td><?=$tampil['produk_layanan'] ;?></td>
                                                <td><?=$tampil['rating']?></td>
                                                <td><?=$tampil['tindak_lanjut']?></td>
                                                <td><a href="?page=umpan_balik_add&id=<?=$tampil['id'] ;?>"
                                                        class="fa fa-pencil"></a> | <a
                                                        href="?page=umpan_balik_delete&id=<?=$tampil['id'] ;?>"
                                                        class="fa fa-trash"></a></td>

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