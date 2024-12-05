<?php
try{
    $kon = mysqli_connect("localhost","root","","tugaskelompok");

}catch(Exception $e){
    
    echo "Gagal Konek : " . $e->getMessage();
    exit();
    
}
?>
