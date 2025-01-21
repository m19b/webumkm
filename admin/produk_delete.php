<?php
include "koneksi/koneksi.php";

if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$query=mysqli_query($kon,"delete from produk where id='$id'");
	if($query){
		echo "<script language='javascript'>
alert('Pengguna berhasil dihapus!');
document.location='media.php?page=produk';
</script>";
	}else{
		echo "Pengguna gagal dihapus";
	}
}
?>