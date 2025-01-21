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

        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team



                </h2>
                <p>Team Pengelola Website UMKM Desa Kami</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member align-items-start">

                            <form action="">



                                <div class="col-md-12">

                                    <label for="subject-field" class="pb-6">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field"
                                        required="">
                                </div>
                                <br>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Nomor Telpon</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field"
                                        required="">
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Email</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field"
                                        required="">
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Alamat</label>
                                    <textarea class="form-control" name="message" rows="3" id="message-field"
                                        required=""></textarea>
                                </div>
                                <br><br>
                                <div class="absolute">

                                    <a href=""> <button type="button" class="btn btn-outline-success"><i
                                                class="bi bi-bag-check"></i> Proses Pesaanan Anda </button></a>


                                </div>
                            </form>

                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">



                        <div class="team-member d-flex align-items-start">
                            <table id="datatable-keytable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Posisi</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                            $query = mysqli_query($kon,"Select *from team");
                                            $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                            ?>

                                <tbody>
                                    <?php foreach($tampung as $index => $tampil): ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><img height="50" width="50" src="isi/images/team/<?=$tampil['foto']?>"
                                                alt="">
                                        </td>

                                        <td><?=$tampil['nama'] ;?></td>
                                        <td><?=$tampil['posisi'] ;?></td>
                                        <td><?=$tampil['email'] ;?></td>
                                        <td><a href="?page=tim_edit&id=<?=$tampil['id'] ;?>"><button type="button"
                                                    class="btn btn-warning fa fa-pencil">
                                                    Edit</button></a> | <a
                                                href="?page=tim_delete&id=<?=$tampil['id'] ;?>"><button type="button"
                                                    class="btn btn-danger fa fa-trash">
                                                    Hapus</button></a></td>

                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>




                    </div>






                </div><!-- End Team Member -->
            </div>
            </div>




        </section><!-- /About Section -->





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