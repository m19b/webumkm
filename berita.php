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
        <section id="berita" class="pricing section light-background">

            <div class="container">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Postingan Terbaru</h2>
                    <p>Berita Terbaru Tentang UMKM Mataram - NTB</p>
                </div><!-- End Section Title -->
                <div class="row gy-4">
                    <?php
                  $query = mysqli_query($kon, "SELECT SUBSTRING(konten, 1, 100) konten, penulis, judul, kategori, gambar, id,created_at FROM berita ORDER BY created_at DESC LIMIT 3");

                  $tampung = mysqli_fetch_all($query,MYSQLI_ASSOC);
                  foreach($tampung as $t3):
   $tgl = date_create($t3['created_at']);
                  
                  ?>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <article>

                                <div class="post-img">
                                    <img src="Admin/isi/images/berita/<?=$t3['gambar']; ?>" alt="" class="img-fluid">
                                </div>

                                <p class="post-category"><?=$t3['kategori'];?></p>

                                <h2 class="title">
                                    <a href="detail_berita.php?id=<?=$t3['id'];?>"><?=$t3['judul'];?></a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/<?=$t3['penulis']?>.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author"><?=$t3['konten']?>... <a
                                                href="detail_berita.php?id=<?=$t3['id'];?>">Selengkapnya</a></p>
                                        <p class=" post-date">
                                        <div class="absolute">


                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success"
                                                    disabled><?=date_format($tgl, "d M Y")?></button>
                                                <button type="button"
                                                    class="btn btn-secondary"><?=$t3['penulis'];?></button>
                                                <button type="button"
                                                    class="btn btn-secondary"><?=$t3['kategori'];?></button>
                                            </div>
                                            <!-- echo date_format($date,"Y/m/d H:i:s"); -->
                                        </div>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    </div><!-- End post list item -->

                    <?php endforeach; ?>


                </div>

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