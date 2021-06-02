<!DOCTYPE html>
<html lang="en">
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
	<form action="proses_tambah.php" method="post">
	<center>
		<h1>Tambah Data</h1>
		<table>
			<tr>
				<td><label for="nama_produk">Nama Produk</label></td>
				<td><input type="text" name="nama_produk" id="nama_produk"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>			
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>				
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah Data"></td>
			</tr>
		</table>
	</center>	
	</form>
</body>
</html>