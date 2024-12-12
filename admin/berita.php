<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?=$_GET['page'] ?><?=$_SESSION[$_GET['page']]; ?></h3>
                <br />
            </div>



        </div>

        <div class="clearfix"></div>

        <div class="row">



            <?=$_SESSION['berita'] ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Berita </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="?page=berita_add" class="close-link"> <button type="button"
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
                                                <th>Penulis</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                            $query = mysqli_query($kon,"Select *from berita");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            ?>

                                        <tbody>
                                            <?php foreach($tampung as $index => $tampil): ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><img height="50" width="50"
                                                        src="isi/images/berita/<?=$tampil['gambar']?>" alt="">
                                                </td>
                                                <td><?=$tampil['judul'] ;?></td>
                                                <td><?=$tampil['penulis'] ;?></td>
                                                <td><?=$tampil['kategori']?></td>
                                                <td><?=$tampil['status']?></td>
                                                <td><a href="?page=berita_add&id=<?=$tampil['id'] ;?>"
                                                        class="fa fa-pencil"></a> | <a
                                                        href="?page=berita_delete&id=<?=$tampil['id'] ;?>"
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