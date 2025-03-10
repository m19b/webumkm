<?php
// session_start();
// include "koneksi/koneksi.php";
?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Berita</h3>

                <br />
            </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form<small>Tambah Berita</small></h2>

                    <div class="clearfix"></div>
                </div>
                <form method="POST" action="" enctype="multipart/form-data" name="fberita" id="demo-form2"
                    data-parsley-validate class="form-horizontal form-label-left">
                    <div class="x_content">
                        <br />


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Berita <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" required="required" name="judul"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>




                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pilih Gambar <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" type="file" id="formFile" name="gambar">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <select id="heard" class="form-control" required name="kategori">
                                    <option selected disabled>-Pilih Kategori-</option>
                                    <?php 
                                       
                                           $query = mysqli_query($kon, "Select *from kategori");
                                           while($data = mysqli_fetch_array ($query)){ ?>

                                    <option value="<?=$data['id']?>"><?=$data['nama']?>
                                    </option>

                                    <?php } ?>
                                </select>


                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Posting <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>

                                    <input type="radio" class="flat" name="statusp" id="genderM" value="draft"
                                        checked="" required />
                                    Draft
                                    <input type="radio" class="flat" name="statusp" id="genderF" value="publikasi" />
                                    Publikasi
                                </p>
                            </div>
                        </div>



                    </div>


                    <div class="x_content">
                        <div id="alerts"></div>
                        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i
                                        class="fa fa-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                </ul>
                            </div>

                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                        class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a data-edit="fontSize 5">
                                            <p style="font-size:17px">Huge</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-edit="fontSize 3">
                                            <p style="font-size:14px">Normal</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-edit="fontSize 1">
                                            <p style="font-size:11px">Small</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i
                                        class="fa fa-italic"></i></a>
                                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                        class="fa fa-strikethrough"></i></a>
                                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                        class="fa fa-underline"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i
                                        class="fa fa-list-ul"></i></a>
                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                        class="fa fa-list-ol"></i></a>
                                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                        class="fa fa-dedent"></i></a>
                                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                        class="fa fa-align-left"></i></a>
                                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                        class="fa fa-align-center"></i></a>
                                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                        class="fa fa-align-right"></i></a>
                                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                        class="fa fa-align-justify"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                        class="fa fa-link"></i></a>
                                <div class="dropdown-menu input-append">
                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                    <button class="btn" type="button">Add</button>
                                </div>
                                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i
                                        class="fa fa-repeat"></i></a>
                            </div>
                        </div>


                        <div id="editor-one" class="editor-wrapper"></div>

                        <input type="hidden" name="isiberita" id="inputHidden" value="">

                        <br />


                        <div class="form-group" align="right">
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <a href="?page=berita" class="btn btn-primary" type="button">Kembali</a>
                                <!-- <button class="btn btn-danger" type="reset">Reset</button> -->
                                <button type="submit" class="btn btn-success" name="simpanberita">Simpan</button>
                            </div>
                        </div>




                    </div>
                </form>
                <script>
                const divCoba = document.getElementById("editor-one");
                const inputIsi = document.getElementById("inputHidden");
                const form = document.querySelector('form'); // Pilih form
                form.addEventListener('submit', function(event) {
                    inputIsi.value = divCoba.textContent;
                });
                </script>


                <?php
                        if(isset($_POST['simpanberita'])){
                          

                        $judul = $_POST['judul'];
                        $konten = $_POST['isiberita'];
                        $penulis = $_SESSION['iduser'];
                      
                        $gambar=$judul.$_FILES['gambar']['name'];
                        $temp = $_FILES['gambar']['tmp_name'];

                        $kategori = $_POST['kategori'];
                        $statusp = $_POST['statusp'];





                      
                        $query2 = mysqli_query($kon, "INSERT INTO berita (judul, konten, user_id,gambar,kategori_id, statusp)VALUES 
                                                                            ('$judul','$konten','$penulis','$gambar','$kategori','$statusp') ");
                        move_uploaded_file($temp,"isi/images/berita/$gambar");
                        if($query2){
                          
                           echo "<script>alert('Data berhasil disimpan!'); window.location.href='?page=berita';</script>";


                        }else{
                          echo "data Gagal berhasil di simpan";
                        
                        }


                        }
                        ?>


            </div>
        </div>

    </div>
</div>