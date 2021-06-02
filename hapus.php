<?php 
 	include "connect.php";
 	$nama = $_GET['kode'];
 	$sql = mysqli_query($conn, "DELETE FROM produk WHERE nama_produk='$nama'");
 	if ($sql) {
 		# code...
 		header("location:index.php");
 	}else{
 		echo "Delete Data Gagal!";
 	}

 ?>
