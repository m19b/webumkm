<?php include "admin/koneksi/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Starter Page - Arsha Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

    <?php include "a_header.php"; ?>

    <main class="main">
        <br><br><br>
        <!-- Page Title -->


        <!-- Starter Section Section -->
        <section id="pricing" class="pricing section light-background">

            <div class="container">
                <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <a href="index.php#hero" type="button" class="btn btn-secondary">Home</a>
                        <button type="button" class="btn btn-secondary">Produk</button>
                    </div>
                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Cari Berita"
                            aria-label="Input group example" aria-describedby="btnGroupAddon2">

                        <button type="button" class="btn btn-secondary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Produk UMKM</h2>
                    <p>Semua Produk UMKM Mataram - NTB</p>
                </div><!-- End Section Title -->

                <div class="row gy-4">
                    <?php
                    $query = mysqli_query($kon, "SELECT
	pengusaha.nama_usaha,
	pengusaha.jenis_umkm,
	produk.id,
	produk.nama_produk,
	produk.deskripsi,
	produk.harga,
	produk.satuan,
	produk.stok,
	produk.kategori,
	produk.gambar,
	users.nama_lengkap 
FROM
	produk
	INNER JOIN pengusaha ON produk.pengusaha_id = pengusaha.id
	INNER JOIN users ON pengusaha.user_id = users.id where produk.status = 'aktif' ORDER BY id Desc ");
                    $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    foreach($tampung as $tampil7):
                        ?>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">



                        <div class="pricing-item">
                            <!-- featured -->
                            <div class="absolute-top">
                                <h3><?=$tampil7['nama_produk']?></h3>
                            </div>


                            <ul>




                                <div class="pic"><img src="Admin/isi/images/produk/<?=$tampil7['gambar']?>" heig
                                        class="img-fluid" alt="" style="float:right;width:600px;height:250px;">
                                </div>

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Pengusaha</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="<?=$tampil7['nama_lengkap']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Usaha</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="<?=$tampil7['nama_usaha']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="<?=$tampil7['kategori']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Stok</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="<?=$tampil7['stok']?> ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <h5><?=$tampil7['harga']?> /<span><?=$tampil7['satuan']?></span></h5>
                                    </div>
                                </div>

                                <br>
                                <label for="staticEmail" class="col-sm-12 col-form-label">Deskripsi : </label>
                                <span><?=$tampil7['deskripsi']?></span>

                            </ul>
                            <div class="absolute">
                                <a href=""> <button type="button" class="btn btn-outline-primary"><i
                                            class="bi bi-cart4"></i> Keranjang</button></a> &nbsp | &nbsp
                                <a href=""> <button type="button" class="btn btn-outline-success"><i
                                            class="bi bi-bag-check"></i> Beli Langsung</button></a>


                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <?php endforeach; ?>



                </div>

            </div>
            <div class="absolut">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section><!-- /Blog Posts Section -->
    </main>

    <?php include "a_footer.php"; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>