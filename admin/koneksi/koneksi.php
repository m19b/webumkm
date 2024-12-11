<?php
include "variabel.php";
try{
    $kon = mysqli_connect("localhost","root","","$namadb");

}catch(Exception $e){
    
    echo "Gagal Konek : " . $e->getMessage();
    exit();
    
}
?>