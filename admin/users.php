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
                        <h2>Data Pengguna </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="?page=users_add" class="close-link"> <button type="button"
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
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>No Hp</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                            $query = mysqli_query($kon,"Select *from users");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            ?>

                                        <tbody>
                                            <?php foreach($tampung as $index => $tampil): ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><img height="50" width="50"
                                                        src="isi/images/fp/<?=$tampil['foto_profil']?>" alt="">
                                                </td>

                                                <td><?=$tampil['nama_lengkap'] ;?></td>
                                                <td><?=$tampil['email'] ;?></td>
                                                <td><?=$tampil['urole'] ;?></td>
                                                <td><?=$tampil['no_telp'] ;?></td>
                                                <td><?=$tampil['status']?></td>
                                                <td><a href="?page=users_edit&id=<?=$tampil['id'] ;?>"
                                                        class="fa fa-pencil"></a> | <a
                                                        href="?page=users_delete&id=<?=$tampil['id'] ;?>"
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