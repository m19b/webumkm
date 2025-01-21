<div class="right_col" role="main">
    <!-- id, urut, link, ikon, nama, status_aktif, uraian_nama -->
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Menu <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="nama" placeholder="contoh : Umpan Balik"
                                    required="required" type="text">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Deskripsi <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="uraian_nama"
                                    placeholder="contoh : Untuk mengatur Unpat balik" required="required" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ikon <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="ikon" placeholder="contoh : shopping-cart"
                                    required="required" type="text">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Link <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="link" placeholder="contoh : umpan_balik"
                                    required="required" type="text">
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">urut <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="email" name="urut" required="required"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>

                                    <input type="radio" class="flat" name="status_aktif" id="genderM" value="Y"
                                        checked="" required />
                                    Aktif
                                    <input type="radio" class="flat" name="status_aktif" id="genderF" value="T" />
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
                          

                        $id = $_POST['id'];
                        $urut = $_POST['urut'];
                        $link = $_POST['link'];
                        $ikon = $_POST['ikon'];
                        $nama = $_POST['nama'];
                        $status_aktif = $_POST['status_aktif'];
                        $uraian_nama = $_POST['uraian_nama'];
                        
                        $query2 = $kon->prepare("INSERT INTO menu SET urut = ?,link = ?,ikon = ?,nama = ?,status_aktif = ?,uraian_nama = ?");
                        $query2->bind_param("isssss",$urut,$link,$ikon,$nama,$status_aktif,$uraian_nama);

 

                             if ($query2->execute()) {
                                echo "<script>
                                alert('Data berhasil disimpan!');
                                window.location.href = '?page=menu';
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