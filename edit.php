<?php 
	include "connect.php";
	$nama = $_GET['kode'];
	$sql = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk='$nama'");
	foreach ($sql as $data) {
		$nama_produk = $data['nama_produk'];
		$keterangan = $data['keterangan'];
		$harga = $data['harga'];
		$jumlah = $data['jumlah'];
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CRUD</title>
	 
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
 </head>
 <body>
 	<form action="proses_edit.php" method="post">
		 <center>
			 <h1>Edit Data</h1>
 		<table>
 			<tr>
 				<td><label>Nama Produk : </label></td>
 				<td><input type="text" name="nama_produk" value="<?=$nama_produk?>"></td>
 			</tr>
 			<tr>
 				<td><label>Keterangan : </label></td>
 				<td><input type="text" name="keterangan" value="<?=$keterangan?>"></td>
			</tr>
 			<tr>
 				<td><label>Harga : </label></td>
 				<td><input type="text" name="harga" value="<?=$harga?>"></td>
 			</tr>
 			<tr>
 				<td><label>Jumlah : </label></td>
 				<td><input type="text" name="jumlah" value="<?=$jumlah?>"></td>
 			</tr>
 				<td></td>
 				<td><input type="submit" name="edit" value="Edit Data"></td>
 			</tr>
 		</table>		 
		 </center>
 	</form>
 </body>
 </html>