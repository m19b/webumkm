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

                    <form method="POST" action="" enctype="multipart/form-data" name="fberita" id="demo-form2"
                        data-parsley-validate class="form-horizontal form-label-left">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="nama" placeholder="contoh : Jon Doe"
                                    required="required" type="text">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Posisi <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="posisi" placeholder="contoh : Programmer"
                                    required="required" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pilih Foto <span
                                    class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" type="file" id="formFile" name="gambar">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Deskripsi <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="deskripsi"
                                    placeholder="contoh : Founder platform UMKM Desa" required="required" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">No. HP <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="number" name="nohp" required="required"
                                    data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" required="required"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">facebook <span
                                    class="required"></span>
                            </label>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                for="email">https://www.facebook.com/</label>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input type="text" id="email" name="fb" placeholder="mik.bse"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Instagram <span
                                    class="required"></span>
                            </label>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                for="email">https://www.instagram.com/</label>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input type="text" id="email" name="instagram" placeholder="mik.bse"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>




                        <div class="ln_solid"></div>
                        <br />


                        <div class="form-group" align="right">
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <a href="?page=tim" class="btn btn-primary" type="button">Kembali</a>
                                <!-- <button class="btn btn-danger" type="reset">Reset</button> -->
                                <button type="submit" class="btn btn-success" name="simpantim">Simpan</button>
                            </div>
                        </div>

                    </form>

                    <?php
                        if(isset($_POST['simpantim'])){
                          
                                $nama=$_POST['nama'];
                                $posisi=$_POST['posisi'];
                                $deskripsi=$_POST['deskripsi'];
                                $gambar=$_FILES['gambar']['name'];
                                $temp = $_FILES['gambar']['tmp_name'];
                                $nohp=$_POST['nohp'];
                                $email=$_POST['email'];
                                $fb=$_POST['fb'];
                                $instagram=$_POST['instagram'];

                                $query2 = $kon->prepare("INSERT INTO team (nama,posisi,deskripsi,foto,email,facebook,instagram,no_hp) VALUE(?,?,?,?,?,?,?,?)");

                            // Binding parameter. "ssssssi" berarti 6 string dan 1 integer
                            $query2->bind_param("ssssssss", $nama, $posisi, $deskripsi, $gambar, $email, $fb, $instagram, $nohp);


                             if ($query2->execute()) {
                                echo "<script>
                                alert('Data berhasil disimpan!');
                                window.location.href = '?page=tim';
                                </script>";
                                move_uploaded_file($temp,"isi/images/team/$gambar");

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