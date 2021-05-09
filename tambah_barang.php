<html>
<head>
<title>Tambah Barang</title>
<link rel="stylesheet" href="css/style_tambah_barang.css"/>
</head>

<?php
include 'koneksi.php';
if(isset($_POST['tambah_barang'])) {
$qinput="INSERT INTO barang (kode_barang,nama_barang,harga_beli,harga_jual,stok)
values ('$_POST[kode]','$_POST[nama]','$_POST[beli]','$_POST[jual]','$_POST[stok]')"; 
	
$input = mysqli_query($konek,$qinput);
if ($input) {
		echo "<script>alert('Data barang berhasil ditambah..'); location.href='barang.php' </script>";
}else{
		echo "<script>alert('Data barang gagal ditambah..'); location.href='tambah_barang.php' </script>";
		}
}	
?>

<html>
<body>
<center> <h2> TAMBAH BARANG </h2> </center>

<p>
<div class="container">
<form role="form" method="post" enctype="multipart/form-data" action="tambah_barang.php">
<center> <table 	border="0">
<tr> <td width="200"> <label> Kode Barang		</label></td> <td> <input name="kode" type="text"> </td> </tr>
<tr> <td width="200"> <label> Nama Barang 		</label></td> <td> <input name="nama" type="text"> </td> </tr>
<tr> <td width="200"> <label> Harga Beli (Rp) 	</label></td> <td> <input name="beli" type="text"> </td> </tr>
<tr> <td width="200"> <label> Harga Jual (Rp)	</label></td> <td> <input name="jual" type="text"> </td> </tr>
<tr> <td width="200"> <label> Stok				</label></td> <td> <input name="stok" type="text"> </td> </tr>
</table>
<p>
<center> <button type="submit" name="tambah_barang"> Simpan </button> 
		 <button type="batalkan" name="batalkan" action="tambah_barang.php"> Batalkan </button> </center>
<p>

<center> <a href="barang.php"> ***Lihat Data Barang*** </a> </center>
</div>
</form>
</body>
</html>