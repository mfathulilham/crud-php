<?php 
	include "connect.php";

	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];
	$edit = $_POST['edit'];

	if ($edit) {
		# code...
		$sql = mysqli_query($conn, "UPDATE produk set nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah'");
		if ($sql) {?>
			# code...
			<script>
				alert('Update data sukses!');
				window.location.href="index.php";
			</script>
		<?php 
		}else{
			echo "Update data gagal!";
		}	}

 ?>