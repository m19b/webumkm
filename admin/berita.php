<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?=$_SESSION[$_GET['page']]; ?></h3>
                <br />
            </div>



        </div>

        <div class="clearfix"></div>

        <div class="row">




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

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">

                                    <div class="x_content">

                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive nowrap"
                                            cellspacing="0" width="100%">
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
                            $query = mysqli_query($kon,"SELECT
	berita.id, 
    berita.judul, 
	users.nama_lengkap, 
	kategori.nama, 
	berita.statusp, 
	berita.gambar
FROM
	berita
	INNER JOIN
	users
	ON 
		berita.user_id = users.id
	INNER JOIN
	kategori
	ON 
		berita.kategori_id = kategori.id");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            ?>
                                            <tbody>
                                                <?php foreach($tampung as $index => $tampil): ?>
                                                <tr>
                                                    <td><?= $index + 1 ?></td>
                                                    <td><img height="50" width="50"
                                                            src="isi/images/berita/<?=$tampil['gambar']?>" alt="">
                                                    </td>
                                                    <td> <?=$tampil['judul'] ;?></td>
                                                    <td><?=$tampil['nama_lengkap'] ;?></td>
                                                    <td><?=$tampil['nama']?></td>
                                                    <td><?=$tampil['statusp']?></td>
                                                    <td>
                                                        <a href="?page=berita_edit&id=<?=$tampil['id'] ;?>"><button
                                                                type="button" class="btn btn-warning fa fa-pencil">
                                                                Edit</button></a> <a
                                                            href="?page=berita_delete&id=<?=$tampil['id'] ;?>"
                                                            onclick="return confirm('Yakin Akan Menghpus berita <?=$data['judul']?> ?')"><button
                                                                type="button" class="btn btn-danger fa fa-trash">
                                                                Hapus</button></a>




                                                    </td>

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
</div>