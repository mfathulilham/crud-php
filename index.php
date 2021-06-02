<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
        td {
            
        }
    </style>
</head>
<body>
    <center>
        <h1>CRUD Using PHP</h1>
        <a href="tambah.php">Tambah Data</a>
    <table border="2" width="700">
        <tr style="text-align:center">
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "connect.php";
            $sql = mysqli_query($conn, "SELECT * FROM produk");
            if (mysqli_num_rows($sql)) {
                # code...
                foreach($sql as $data){ ?>
                    <tr style="text.align: center">
                        <td><?= $data['nama_produk']?></td>
                        <td><?= $data['keterangan']?></td>
                        <td><?= $data['harga']?></td>
                        <td><?= $data['jumlah']?></td>
                        <td>
                            <a href="hapus.php?kode=<?=$data['nama_produk']?>">Hapus</a>
                            <a href="edit.php?kode=<?=$data['nama_produk']?>">Edit</a>
                        </td>
                    </tr>
                <?php    
                }
            }
        ?>
        </center>
</body>
</html>