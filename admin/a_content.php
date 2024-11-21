<?php
  $cekaktif = "";

if (isset ($_GET['page'])){
    $page=$_GET ['page'];
    if(file_exists("$page.php")){
        include "$page.php";

        $cekaktif = $page;

    }else{
        echo "
            <div class='container-xxl flex-grow-1 container-p-y'>
            <h3>Halaman Tidak Ditemukan</h3>
            </div>
        "
        
        ;
    }
}else{
    include "home.php";
    $cekaktif = "home";
}
?>

          