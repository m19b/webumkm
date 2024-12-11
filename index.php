<?php include "admin/koneksi/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>UMKM DESA Kami</title>
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

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#hero" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">UMKM</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Galeri</a></li>
                    <li><a href="#pricing">Produk</a></li>
                    <li><a href="#umpan">Umpan Balik</a></li>
                    <li><a href="#why-us">Sering ditanya</a></li>

                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#berita">Berita</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- <a class="btn-getstarted" href="#pricing">Belanja Sekarang</a> -->

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Selamat Datang di UMKM Desa Kami, <h3>Temukan Keunikan Produk Asli Desa Kami</h3>
                        </h1>

                        <p>Produk berkualitas dari tangan kreatif masyarakat desa, menghadirkan cita rasa dan keindahan
                            tradisional dengan sentuhan modern.</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">BELANJA SEKARANG</a>
                            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <!-- <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section>/Clients Section -->

        <section id="about" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <?php
                $query = mysqli_query($kon, "SELECT *FROM tentang_kami WHERE level = 'judul' LIMIT 1");
                $tampil= mysqli_fetch_assoc($query);
                ?>
                <h2><?=$tampil['judul']?> </h2>
                <p><?=$tampil['uraian']?></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <?php
                            $query = mysqli_query($kon,"SELECT *FROM tentang_kami WHERE level <> 'judul'");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            foreach($tampung as $tampil2):
                            ?>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-<?=$tampil['ikon']?>"></i></div>
                            <h4><a href="" class="stretched-link"><?=$tampil2['judul']?></a></h4>
                            <p><?=$tampil2['uraian']?></p>
                        </div>
                    </div><!-- End Service Item -->
                    <?php endforeach; ?>
                </div>

            </div>



            <!-- /Call To Action Section -->


            <!-- About Section -->
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Mengapa Memilih Kami?</h2>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <?php
                            $query = mysqli_query($kon,"SELECT *FROM layanan WHERE status = 'aktif'");
                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            foreach($tampung as $tampil3):
                            ?>

                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">

                            <h5><?=$tampil3['judul']?></h5>
                            <p><?=$tampil3['deskripsi']?></p>



                        </div>
                        <?php endforeach; ?>
                        <!-- 
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h5>
                            🚚 Pengiriman Aman
                        </h5>
                        <p>Dikemas dengan aman dan teliti, didukung layanan pengiriman terpercaya ke seluruh Indonesia.
                        </p>
                        <h5>
                            💳 Pembayaran Mudah
                        </h5>
                        <p>Berbagai metode pembayaran tersedia untuk kenyamanan Anda, dari transfer bank hingga
                            e-wallet.</p>
                    </div> -->

                    </div>

                </div>

            </section><!-- /About Section -->

            <!-- Team Section -->
            <section id="team" class="team section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Team



                    </h2>
                    <p>Team Pengelola Website UMKM Desa Kami</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">
                        <?php 
                    $query = mysqli_query($kon,"SELECT *FROM team");
                    $tampung = mysqli_fetch_all($query,MYSQLI_ASSOC);
                    foreach ($query as $tampil6):
                        ?>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="team-member d-flex align-items-start">
                                <div class="pic"><img src="Admin/isi/images/team/<?=$tampil6['foto']?>"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4><?=$tampil6['nama']?></h4>
                                    <span><?=$tampil6['posisi']?></span>
                                    <p><?=$tampil6['deskripsi']?></p>
                                    <div class="social">
                                        <a href="https://instagram.com/<?=$tampil6['facebook']?>" target="_blank"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="https://fb.com/<?=$tampil6['instagram']?>" target="_blank"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://gmail.com/<?=$tampil6['email']?>" target="_blank"><i
                                                class="bi bi-envelope-paper"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                        <?php endforeach; ?>




            </section><!-- /About Section -->




            </div>

            </div>





        </section><!-- /Team Section -->
        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Galeri</h2>
                <p>Dokumentasi Kegiatan & Produk UMKM</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php 
                        $query = mysqli_query($kon,"SELECT kategori FROM galeri GROUP BY kategori");
                        $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                        foreach ($tampung as $tampil4):
                            ?>
                        <li data-filter=".filter-<?=$tampil4['kategori']?>"><?=$tampil4['kategori']?></li>
                        <?php endforeach; ?>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <?php 
                        $query = mysqli_query($kon,"SELECT *FROM galeri");
                        $tampung = mysqli_fetch_all($query,MYSQLI_ASSOC);
                        foreach ($tampung as $tampil5):
                            ?>

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?=$tampil5['kategori']?>">
                            <img src="Admin/isi/images/galeri/<?=$tampil5['gambar']?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?=$tampil5['judul']?></h4>
                                <p><?=$tampil5['deskripsi']?></p>

                                <a href="Admin/isi/images/galeri/<?=$tampil5['gambar']?>" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a> -->
                            </div>
                        </div><!-- End Portfolio Item -->

                        <?php endforeach; ?>
                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->



        <!-- Pricing Section -->
        <section id="pricing" class="pricing section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Katalog Produk UMKM Desa Kami</h2>
                <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <?php
                    $query = mysqli_query($kon, "SELECT *FROM produk WHERE status = 'aktif'");
                    $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    foreach($tampung as $tampil7):
                        ?>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <!-- featured -->
                            <h3><?=$tampil7['nama_produk']?></h3>
                            <h4><sup>Rp.</sup><?=$tampil7['harga']?> <span>(1 <?=$tampil7['satuan']?>) </span></h4>
                            <ul>


                                <li><i class="bi bi-check"></i> <span><?=$tampil7['deskripsi']?></span></li>
                                <li><i class="bi bi-check"></i> <span>Kategori : <?=$tampil7['kategori']?></span></li>

                                <div class="pic"><img src="Admin/isi/images/produk/<?=$tampil7['gambar']?>"
                                        class="img-fluid" alt=""></div>

                            </ul>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->
                    <?php endforeach; ?>
                </div>

            </div>

        </section><!-- /Pricing Section -->
        < <!-- Testimonials Section -->
            <section id="umpan" class="umpan section">
                <section id="testimonials" class="testimonials section">

                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Umpan Balik Pelanggan</h2>
                        <p></p>
                    </div><!-- End Section Title -->

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                }
                            }
                            </script>
                            <div class="swiper-wrapper">
                                <?php 
                                $query = mysqli_query($kon,"SELECT *FROM umpan_balik");
                                $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                foreach ($tampung as $t1):
                                    $no = $t1['rating'];
                                    ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="Admin/isi/images/testimonials/<?=$t1['foto']?>"
                                            class="testimonial-img" alt="">
                                        <h3><?=$t1['nama']?></h3>
                                        <h4></h4>
                                        <div class="stars">
                                            <?php    for ($i = 1; $i <= $no; $i++) { ?>
                                            <i class="bi bi-star-fill"></i>
                                            <?php } ?>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span><?=$t1['komentar']?></span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <p>Tgl : <?=$t1['tanggal_umpan_balik']?> | Produk : <?=$t1['produk_layanan']?>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </section><!-- /Testimonials Section -->

                <section id="why-us" class="section why-us light-background" data-builder="section">

                    <div class="container-fluid">

                        <div class="row gy-4">

                            <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3><span>Pertanyaan yang Sering Diajukan</strong></h3>

                                </div>

                                <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                                    <?php 
                                    $query = mysqli_query($kon,"SELECT *FROM faq");
                                    $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                    foreach ($tampung as $nmr => $t2):
                                        ?>
                                    <div class="faq-item faq-active">

                                        <h3><span><?=$nmr+1?>.</span> <?=$t2['pertanyaan']?></h3>
                                        <div class="faq-content">
                                            <p><?=$t2['jawaban']?></p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                                    </div><!-- End Faq item-->
                                    <?php endforeach; ?>
                                </div>

                            </div>

                            <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                                <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                                    data-aos-delay="100">
                            </div>
                        </div>

                    </div>

                </section><!-- /Why Us Section -->
            </section><!-- /Why Us Section -->

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>HUBUNGI KAMI</h2>
                    <p>Kami siap membantu Anda! Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu
                        untuk
                        menghubungi kami melalui salah satu cara di bawah ini.</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-5">

                            <div class="info-wrap">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Address</h3>
                                        <p>M. Ikbal, Lombok-NTB</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Hubungi kami</h3>
                                        <p>+6281234567890</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email kami</h3>
                                        <p>umkmdesakami@gmail.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <iframe src="" frameborder="0" style="border:0; width: 100%; height: 270px;"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Nama anda</label>
                                        <input type="text" name="name" id="name-field" class="form-control" required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Email anda</label>
                                        <input type="email" class="form-control" name="email" id="email-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2"></label>
                                        <input type="text" class="form-control" name="subject" id="subject-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Pesan</label>
                                        <textarea class="form-control" name="message" rows="10" id="message-field"
                                            required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>

                                        <button type="submit">Kirim pesan</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>

            </section><!-- /Contact Section -->



            <section id="berita" class="pricing section light-background">

                <div class="container">
                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Postingan Terbaru</h2>
                        <p>Berita Terbaru Tentang UMKM Mataram - NTB</p>
                    </div><!-- End Section Title -->
                    <div class="row gy-4">
                        <?php
                  $query = mysqli_query($kon, "SELECT *FROM berita ");
                  $tampung = mysqli_fetch_all($query,MYSQLI_ASSOC);
                  foreach($tampung as $t3):

                  
                  ?>
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pricing-item">
                                <article>

                                    <div class="post-img">
                                        <img src="Admin/isi/images/berita/<?=$t3['gambar']; ?>" alt=""
                                            class="img-fluid">
                                    </div>

                                    <p class="post-category"><?=$t3['kategori'];?></p>

                                    <h2 class="title">
                                        <a href="blog-details.php?id=<?=$t3['id'];?>"><?=$t3['judul'];?></a>
                                    </h2>

                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/blog/<?=$t3['penulis']?>.jpg" alt=""
                                            class="img-fluid post-author-img flex-shrink-0">
                                        <div class="post-meta">
                                            <p class="post-author"><?=$t3['konten']?></p>
                                            <p class="post-author"><?=$t3['penulis']?></p>
                                            <p class=" post-date">
                                            <p><?= $t3['created_at']?></p>
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

    <footer id="footer" class="footer">


        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">BootstrapMade</strong> <span>Semua Hak Cipta
                    Dilindungi</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="#">Kelompok 7</a>
            </div>
        </div>

    </footer>

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