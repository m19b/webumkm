<?php
if(isset($_GET['page'])){
    $page=$_GET['page'];
    if(file_exists("$page.php")){
        include "$page.php";
     }else{
        echo "
    <div class='right_col' role='main'>
          <div class=''>
            <div class='page-title'>
              <div class='title_left'>
                <h3>Halaman Tidak ditemukan</h3>
              </div>
            </div>  
        </div>
    </div>
        ";

     }

}else{
    include "home.php";
}

?>


