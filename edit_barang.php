<html>
<head>
<title>Edit Barang</title>
<link rel="stylesheet" href="css/style_tambah_barang.css"/>
</head>

<?php
include 'koneksi.php';
if(isset($_POST['edit_barang'])) {	
$qinput="update barang	 set 	nama_barang= '$_POST[nama]' ,
								harga_beli= '$_POST[beli]',
								harga_jual= '$_POST[jual]',
								stok= '$_POST[stok]'
								where kode_barang= '$_POST[kode]'
								";	
								
$input = mysqli_query($konek,$qinput);
if ($input) {
		echo "<script>alert('Data barang berhasil ditambah..'); location.href='barang.php' </script>";
}else{
		echo "<script>alert('Data barang gagal ditambah..'); location.href='barang.php' </script>";
		}
}
?>

<?php
$id = $_GET['id'];
$i = "select * from barang where kode_barang=$id"; 
$h = mysqli_query($konek,$i);
while($tr=mysqli_fetch_array($h))
{
	$nama_barang=$tr[1]; $harga_beli=$tr[2]; $harga_jual=$tr[3]; $stok=$tr[4];
}
?>

<html>
<body>
<center> <h2> Edit Data Barang "<?php echo $id;?>" </h2> </center>
<p>
<form role="form" method="post" enctype="multipart/form-data" action="edit_barang.php">
<center> <table 	border="0">
<tr> <td width="200"> Kode Barang			</td> <td> <input value= "<?php echo $id;?>" name="kode" type="text"> </td> </tr>
<tr> <td width="200"> Nama Barang 			</td> <td> <input value= "<?php echo $nama_barang;?>" name="nama" type="text"> </td> </tr>
<tr> <td width="200"> Harga Beli (Rp) 		</td> <td> <input value= "<?php echo $harga_beli;?>" name="beli" type="text"> </td> </tr>
<tr> <td width="200"> Harga Jual (Rp) 		</td> <td> <input value= "<?php echo $harga_jual;?>" name="jual" type="text"> </td> </tr>
<tr> <td width="200"> Stok				 	</td> <td> <input value= "<?php echo $stok;?>" name="stok" type="text"> </td> </tr>
</table> </center>
<p>
<center> <button type="submit" name="edit_barang"> Simpan Perubahan </button> 

</form>
</body>
</html>