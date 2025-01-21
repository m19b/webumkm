<div class="right_col" role="main">
    <!-- id, urut, link, ikon, nama, status_aktif, uraian_nama -->
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
                        <h2>Data Tentang Kami </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="?page=menu_add" class="close-link"> <button type="button"
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
                                                <th>Urut</th>
                                                <th>Link</th>
                                                <th>Menu</th>
                                                <th>Uraian Menu</th>
                                                <th>Ikon</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                            $query = mysqli_query($kon,"Select *from menu where posisi='bawah'");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            ?>

                                        <tbody>
                                            <?php foreach($tampung as $tampil): ?>
                                            <tr>
                                                <td><?php echo $tampil['urut'] ;?></td>
                                                <td><?php echo $tampil['link'] ;?></td>
                                                <td><?php echo $tampil['nama'];?></td>
                                                <td><?php echo $tampil['uraian_nama'] ;?></td>
                                                <td><?php echo $tampil['ikon'] ;?></td>
                                                <td><?php echo $tampil['status_aktif'] ;?></td>
                                                <td><a href="?page=menu_edit&id=<?=$tampil['id'] ;?>"><button
                                                            type="button" class="btn btn-warning fa fa-pencil">
                                                            Edit</button></a> <a
                                                        href="?page=menu_delete&id=<?=$tampil['id'] ;?>"><button
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