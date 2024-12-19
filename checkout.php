<?php include "Admin/koneksi/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portfolio Details - Arsha Bootstrap Template</title>
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

<body class="portfolio-details-page">

    <?php include "a_header.php";?>


    <main class="main">
        <br><br><br>
        <!-- Page Title -->
        <!-- <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <div class="btn-group" role="group" aria-label="First group">
                        <a href="index.php#hero" type="button" class="btn btn-secondary">Home</a>
                        <button type="button" class="btn btn-secondary">Isi Berita</button>
                    </div>
                </nav>

            </div>
        </div>End Page Title -->

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">



                    <div class="col-lg-8">
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                            <h3>Kategori</h3>
                            <div class="form-group row">
                                <div class="col-sm-2"><img src="Admin/isi/images/team/ikbal.jpg" class="img-fluid"
                                        alt="" style="float:left;width:50px;height:50px;">
                                </div>


                                <label for="staticEmail" class="col-sm-6 col-form-label">Usaha</label>

                                <div class="col-sm-1">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="1">

                                </div>

                                <div class="col-sm-1">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value=" Buah">
                                </div>

                                <div class="col-sm-2 btn-group btn-sm" role="group" aria-label="Basic example">
                                    <a href="keranjang.php" type="button" class="btn btn-info">
                                        <i class="bi bi-pencil-square"></i> </a>
                                    <a href="keranjang.php" type="button" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i></a>

                                </div>
                            </div>

                        </div>
                        <br>

                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                            <h3>Kategori</h3>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Usaha</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="produk">
                                </div>
                            </div>

                        </div>
                        <br>

                    </div>




                </div>

            </div>

        </section><!-- /Portfolio Details Section -->

    </main>

    <?php include "a_footer.php";?>

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