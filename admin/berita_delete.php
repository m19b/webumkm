<?php
include "koneksi/koneksi.php";

if(isset($_GET['id'])){
	$nim=$_GET['id'];
	
	$query=mysqli_query($kon,"delete from berita where id='$nim'");
	if($query){
		echo "<script language='javascript'>
alert('Berita berhasil dihapus!');
document.location='media.php?page=berita';
</script>";
	}else{
		echo "Berita gagal dihapus";
	}
}
?>