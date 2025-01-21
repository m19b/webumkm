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
    <?php include "a_header.php"; ?>

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
                            <a href="#pricing" class="btn-get-started">BELANJA SEKARANG</a>
                            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section>

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
                                        <a href="https://fb.com/<?=$tampil6['facebook']?>" target="_blank"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="https://instagram.com/<?=$tampil6['instagram']?>" target="_blank"><i
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
                            <img src="Admin/isi/images/galeri/<?=$tampil5['gambar']?>" class="img-fluid" alt=""
                                style="float:right;width:600px;height:250px;">
                            <div class="portfolio-info">
                                <h4><?=$tampil5['judul']?></h4>
                                <p><?=$tampil5['deskripsi']?></p>

                                <a href="Admin/isi/images/galeri/<?=$tampil5['gambar']?>"
                                    title="<h4><?=$tampil5['judul'] ?> </h4> <?=$tampil5['deskripsi']?>"
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

        <section id="pricing" class="pricing section light-background">

            <div class="container">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Produk UMKM</h2>
                    <p> Produk Terlaris UMKM Mataram - NTB</p>
                </div><!-- End Section Title -->

                <div class="row gy-4">
                    <?php
                    $query = mysqli_query($kon, "SELECT
                                pengusaha.nama_usaha,
                             
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
                                INNER JOIN users ON pengusaha.user_id = users.id where produk.status = 'aktif' ORDER BY id Desc LIMIT 3");
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


                                <a href="proses.php" target="_self"> <button type="button"
                                        class="btn btn-outline-primary"><i class="bi bi-cart4"></i>
                                        Keranjang</button></a> &nbsp | &nbsp

                                <a href=""> <button type="button" class="btn btn-outline-success"><i
                                            class="bi bi-bag-check"></i> Beli Langsung</button></a>


                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <?php endforeach; ?>



                </div>

            </div>
            <div class="col-md-12 text-center">
                <br>
                <a href="produk.php" class="btn btn-dark btn-lg"><i class="bi bi-journals"></i> Semua
                    Produk</a>


            </div>
        </section><!-- /Blog Posts Section -->

        <!-- Pricing Section -->

        <!-- Testimonials Section -->
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
                                $query = mysqli_query($kon,"SELECT *FROM umpan_balik ");
                                $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                foreach ($tampung as $t1):
                                    $no = $t1['rating'];
                                    ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="Admin/isi/images/testimonials/<?=$t1['foto']?>" class="testimonial-img"
                                        alt="">
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

        </section><!-- /Why Us Section -->




        <section id="berita" class="pricing section light-background">

            <div class="container">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Postingan Terbaru</h2>
                    <p>Berita Terbaru Tentang UMKM Mataram - NTB</p>
                </div><!-- End Section Title -->
                <div class="row gy-4">
                    <?php
                  $query = mysqli_query($kon, "SELECT
	berita.id, 
    berita.judul, 
		SUBSTRING(konten, 1, 100) konten,
	users.nama_lengkap, 
	kategori.nama penulis, 
	berita.statusp, 
	berita.gambar,
	kategori.nama kategori,
	berita.created_at
FROM
	berita
	INNER JOIN
	users
	ON 
		berita.user_id = users.id
	INNER JOIN
	kategori
	ON 
		berita.kategori_id = kategori.id ORDER BY berita.created_at DESC LIMIT 3;");
                  $tampung = mysqli_fetch_all($query,MYSQLI_ASSOC);
                  foreach($tampung as $t3):
                    $tgl = date_create($t3['created_at']);

                  
                  ?>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <article>

                                <div class="post-img">

                                    <img src="Admin/isi/images/berita/<?=$t3['gambar']; ?>" alt="" class="img-fluid"
                                        style="float:right;width:400px;height:200px;">
                                </div>


                                <h2 class="title">
                                    <a href="detail_berita.php?id=<?=$t3['id'];?>"><?=$t3['judul'];?></a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author"><?=$t3['konten']?>... <a
                                                href="detail_berita.php?id=<?=$t3['id'];?>">Selengkapnya</a></p>
                                        <p class=" post-date">
                                        <div class="absolute">


                                            <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success btn-sm" disabled><i
                                                        class="bi bi-calendar3"></i>
                                                    <?=date_format($tgl, "d M Y")?></button>
                                                <button type="button" class="btn btn-secondary btn-sm"><i
                                                        class="bi bi-person-check"></i>
                                                    <?=$t3['penulis'];?></button>
                                                <button type="button" class="btn btn-info btn-sm"><i
                                                        class="bi bi-bookmarks"></i> <?=$t3['kategori'];?></button>
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
                <div class="col-md-12 text-center">
                    <br>
                    <a href="berita.php" class="btn btn-dark btn-lg"><i class="bi bi-journals"></i> Semua
                        Berita</a>


                </div>
            </div>

        </section><!-- /Blog Posts Section -->

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
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
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