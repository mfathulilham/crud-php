<?php 
	include "connect.php";
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];
	$tambah = $_POST['tambah'];
	if ($tambah) {
		# code...
		$sql = mysqli_query($conn, "INSERT INTO produk values('$nama_produk', '$keterangan', '$harga', '$jumlah')");
		if ($sql) { ?>
			# code...
			<script>
				alert('Tambah data sukses!');
				window.location.href="index.php";
			</script>
		<?php 
		}else{
			echo "Tambah data gagal!";
		}
	}

 ?>