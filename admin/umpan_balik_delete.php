<?php
include "koneksi/koneksi.php";

if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$query=mysqli_query($kon,"delete from umpan_balik where id='$id'");
	if($query){
		echo "<script language='javascript'>
alert('Pengguna berhasil dihapus!');
document.location='media.php?page=umpan_balik';
</script>";
	}else{
		echo "Pengguna gagal dihapus";
	}
}
?>