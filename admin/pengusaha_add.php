<div class="right_col" role="main">



    <div class="">
        <!--user_id,nama_usaha,deskripsi_usaha,alamat_usaha,no_telp,email,status -->
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

                    <form method="POST" action="" enctype="multipart/form-data" name="fberita" id="demo-form2"
                        data-parsley-validate class="form-horizontal form-label-left">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Usaha <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="nama_usaha" placeholder="ex : Snack Mataram"
                                    required="required" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pemilik<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <select id="heard" class="form-control" required name="user_id">
                                    <option selected disabled>-Pilih Nama Pemilik-</option>
                                    <?php 
                                       
                                           $query = mysqli_query($kon, "SELECT id, nama_lengkap FROM users WHERE status = 'aktif'");
                                           while($data = mysqli_fetch_array ($query)){ ?>

                                    <option value="<?=$data['id']?>"><?=$data['nama_lengkap']?>
                                    </option>

                                    <?php } ?>
                                </select>


                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Deskripsi <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="deskripsi_usaha"
                                    placeholder="ex : Produsen camilan dan snack lokal" required="required" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat Usaha <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="ikon" placeholder="ex : Jl. Snack No. 7, Mataram"
                                    required="required" type="text">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">no_telpn <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="no_telp" placeholder="ex : 082xxxxxxxxx"
                                    required="required" type="number">
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" required="required"
                                    class="form-control col-md-7 col-xs-12" placeholder="ex : contoh@gmail.com">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>

                                    <input type="radio" class="flat" name="status" id="genderM" value="terverifikasi"
                                        checked="" required />
                                    Terverifikasi
                                    <input type="radio" class="flat" name="status" id="genderF" value="menunggu" />
                                    Menunggu
                                    <input type="radio" class="flat" name="status" id="genderF" value="ditolak" />
                                    Ditolak

                                </p>
                            </div>
                        </div>






                        <div class="ln_solid"></div>
                        <br />


                        <div class="form-group" align="right">
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <a href="?page=pengusaha" class="btn btn-primary" type="button">Kembali</a>
                                <!-- <button class="btn btn-danger" type="reset">Reset</button> -->
                                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                            </div>
                        </div>

                    </form>

                    <?php
                        if(isset($_POST['simpan'])){
                          

                        $user_id = $_POST['user_id'];
                        $nama_usaha = $_POST['nama_usaha'];
                        $deskripsi_usaha = $_POST['deskripsi_usaha'];
                        $alamat_usaha = $_POST['alamat_usaha'];
                        $no_telp = $_POST['no_telp'];
                        $email = $_POST['email'];
                        $status = $_POST['status'];

                        $query2 = $kon->prepare("INSERT INTO pengusaha SET user_id = ?, nama_usaha = ?, deskripsi_usaha = ?, alamat_usaha = ?, no_telp = ?, email = ?, status = ?");
                        $query2->bind_param("issssss",$user_id,$nama_usaha,$deskripsi_usaha,$alamat_usaha,$no_telp,$email,$status);

 

                             if ($query2->execute()) {
                                echo "<script>
                                alert('Data berhasil disimpan!');
                                window.location.href = '?page=pengusaha';
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