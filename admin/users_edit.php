<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Team</h3>
                <br />
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form <small>Tambah Team</small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                      $id=$_GET['id'];
                      $query = mysqli_query($kon, "select *from users where id='$id' LIMIT 1");
                       $ed = mysqli_fetch_array ($query,MYSQLI_ASSOC)
                    ?>

                    <form method="POST" action="" enctype="multipart/form-data" name="fberita" id="demo-form2"
                        data-parsley-validate class="form-horizontal form-label-left">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="username" placeholder="contoh : mik.bse"
                                    required="required" type="text" value="<?=$ed['username']?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="nama" placeholder="contoh : Jon Doe"
                                    required="required" type="text" value="<?=$ed['nama_lengkap']?>">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">No. HP <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="nohp" placeholder="contoh : 082340xxxxxx"
                                    required="required" type="text" value="<?=$ed['no_telp']?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="alamat"
                                    placeholder="contoh : Founder platform UMKM Desa" required="required" type="text"
                                    value="<?=$ed['alamat']?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pilih Foto <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input class="form-control" type="file" id="formFile" name="gambar">
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <img width="100%" src="isi/images/fp/<?=$ed['foto_profil']?>" alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Role<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>

                                    <input type="radio" class="flat" name="urole" id="genderM" value="admin"
                                        <?php if($ed['urole']=="admin"){echo "checked";} ?> />
                                    Admin
                                    <input type="radio" class="flat" name="urole" id="genderF" value="pengusaha"
                                        <?php if($ed['urole']=="pengusaha"){echo "checked";} ?> />
                                    Pengusaha
                                    <input type="radio" class="flat" name="urole" id="genderF" value="member"
                                        <?php if($ed['urole']=="member"){echo "checked";} ?> />
                                    Member
                                </p>
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" required="required"
                                    class="form-control col-md-7 col-xs-12" value="<?=$ed['email']?>">
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Password <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="pass" required="required" type="password">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>

                                    <input type="radio" class="flat" name="statuss" id="genderM" value="aktif"
                                        <?php if($ed['status']=="aktif"){echo "checked";} ?> />
                                    Aktif
                                    <input type="radio" class="flat" name="statuss" id="genderF" value="nonaktif"
                                        <?php if($ed['status']=="nonaktif"){echo "checked";} ?> />
                                    Non Aktif

                                </p>
                            </div>
                        </div>






                        <div class="ln_solid"></div>
                        <br />


                        <div class="form-group" align="right">
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <a href="?page=tim" class="btn btn-primary" type="button">Kembali</a>
                                <!-- <button class="btn btn-danger" type="reset">Reset</button> -->
                                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                            </div>
                        </div>

                    </form>

                    <?php
                        if(isset($_POST['simpan'])){
                          


                                $username = $_POST['username'];
                                $nama = $_POST['nama'];
                                $nohp = $_POST['nohp'];
                                $alamat = $_POST['alamat'];
                                $gambar=$_FILES['gambar']['name'];
                                $temp = $_FILES['gambar']['tmp_name'];
                                $urole = $_POST['urole'];
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                                $statuss = $_POST['statuss'];
                                    $id = $_GET['id'];



                                $query2 = $kon->prepare("UPDATE users SET username = ?,nama_lengkap = ?,no_telp = ?,alamat = ?,foto_profil = ?,urole = ?,email = ?,password = ?,status = ? WHERE id = ?");

                            // Binding parameter. "ssssssi" berarti 6 string dan 1 integer
                            $query2->bind_param("sssssssssi",$username,$nama,$nohp,$alamat,$gambar,$urole,$email,$pass,$statuss,$id);


                             if ($query2->execute()) {
                                echo "<script>
                                alert('Data berhasil disimpan!');
                                window.location.href = '?page=users';
                                </script>";
                                move_uploaded_file($temp,"isi/images/fp/$gambar");

                                } else {
                                echo "Error: " . $query2->error; // Tampilkan pesan error untuk debugging
                                }

                                $query2->close();


                        }
                        ?>


                </div>
            </div>
        </div>
    </div>
</div>