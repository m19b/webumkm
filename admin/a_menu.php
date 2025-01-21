<div class="col-md-3 left_col">
    <div class="left_col scroll-view">


        <div class="clearfix"></div>


        <br />
        <?php
 
  ?>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

                <!-- <ul class="nav side-menu">
                </ul> -->
                <ul class="nav side-menu">
                    <?php 
                   $query = mysqli_query($kon,"select *from menu where posisi = 'bawah' and status_aktif = 'Y' order by urut");
                   $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                  
                  foreach($tampung as $tampil): 
                   $_SESSION[$tampil['link']] = $tampil['nama'].' | <small>'.$tampil['uraian_nama'].'</small>' ;
                    ?>

                    <li><a href="?page=<?=$tampil['link']; ?>"><i class="fa fa-<?php echo $tampil['ikon']; ?>"></i>
                            <?=$tampil['nama']; ?> <span
                                class="fa fa-<?=($_GET['page'] <> $tampil['link']) ? "" : "play" ?><?=($_GET['page'] <> $tampil['link']."_tampil") ? "" : "play" ?><?=($_GET['page'] <> $tampil['link']."_edit") ? "" : "play" ?><?=($_GET['page'] <> $tampil['link']."_add") ? "" : "play" ?> "></span>
                        </a> </li>

                    <?php endforeach; ?>


                </ul>

            </div>




            <!--  -->


        </div>
        <!-- /sidebar menu -->



        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" href="#">
                <span class="glyphicon  " aria-hidden="true"></span>
            </a>
            <script>
            function toggleFullscreen() {
                if (!document.fullscreenElement) {
                    document.documentElement.requestFullscreen();

                } else {
                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if (document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();

                    }
                }
            }
            </script>
            <a onclick="toggleFullscreen()" data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>

            <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>

            <a data-toggle="tooltip" data-placement="top" href="#">
                <span class="glyphicon " aria-hidden="true"></span>
            </a>



        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>


            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>



            <ul class="nav navbar-nav navbar-left">
                <li class="">

                    <a href="media.php?page=home" class="user-profile dropdown-toggle" aria-expanded="false">
                        <img src="isi/images/logo.png" alt=""> <b>WEB UMKM</b>

                    </a>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">




                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false">
                        <img src="isi/images/fp/<?php echo $_SESSION['email']; ?>.jpg"
                            alt=""><?php echo $_SESSION['nama']; ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>

                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->