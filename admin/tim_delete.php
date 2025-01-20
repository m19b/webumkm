<?php
include "koneksi/koneksi.php";

if(isset($_GET['id'])){
	$idtim=$_GET['id'];
	
	$query=mysqli_query($kon,"delete from team where id='$idtim'");
	if($query){
		echo "<script language='javascript'>
alert('Team berhasil dihapus!');
document.location='media.php?page=tim';
</script>";
	}else{
		echo "Team gagal dihapus";
	}
}
?>