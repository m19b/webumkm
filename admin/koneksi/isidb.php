<?php
   include "variabel.php";
    try{
        if ($cek == "dev"){  
            if (is_dir("../../mysql/data")) {
                if (!is_dir("../../mysql/data/$namadb")) {
                    mkdir("../../mysql/data/$namadb");
                }
            } else if (is_dir("../../../mysql/data")) {
                if (!is_dir("../../../mysql/data/$namadb")) {    
                mkdir("../../../mysql/data/$namadb");
                }
            }
            $kon = mysqli_connect("localhost","root","","$namadb");
            mysqli_multi_query($kon, $isitb);
            header("location:index.php");
        }
    }catch(Exception $e){
    echo "Gagal buat : " . $e->getMessage() ;
    exit();
    };
?>