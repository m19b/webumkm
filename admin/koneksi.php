<?php
try{
    $kon = mysqli_connect("localhost","root","","tugaskelompok");
echo "berhasil";
}catch(Exception $e){
    echo "Gagal Konek " . $e->getMessage();
    exit();
    header ("location:../index.php");
}




?>