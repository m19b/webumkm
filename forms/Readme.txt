<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                    <li><a href="media.php"><i class="fa fa-home"></i> Home <span class="fa fa-ellipsis-v"></span></a>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <?php 
                   $query = mysqli_query($kon,"select *from menu where posisi = 'atas' and status_aktif = 'Y' order by urut");
                   $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                  
                  foreach($tampung as $tat): 
                   $cgroup = $tat['groupp']; 
?>

                    <li><a><i class="<?=$tat['ikon']; ?>"></i> <?=$tat['ikon']; ?> <span
                                class="<?=$tat['ikon_kanan']; ?>"></span></a>

                        <ul class="nav child_menu">
                            <?php 
                   $query = mysqli_query($kon,"select *from menu where posisi = 'bawah' and groupp = '$cgroup' and status_aktif = 'Y' order by urut");
                   $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                  
                  foreach($tampung as $tampil): 
                   $_SESSION[$tampil['link']] = $tampil['nama'].' | <small>'.$tampil['uraian_nama'].'</small>' ;
                    ?>

                            <li><a href="<?=$tampil['link']; ?>"><i class="<?php echo $tampil['ikon']; ?>"></i>
                                    <?=$tampil['nama']; ?> <span class="fa fa-<?=$tampil['nama']; ?>"></span></a> </li>

                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>




        </div>