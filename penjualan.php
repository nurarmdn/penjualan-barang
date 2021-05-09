<html>
<head>
<title>PENJUALAN</title>
<link rel="stylesheet" href="css/style_penjualan.css"/>
</head>

<?php
date_default_timezone_set('Asia/Jakarta');
include 'koneksi.php';
if(isset($_POST['penjualan'])) {
	$kode= $_POST['kd_barang'];
	$jumlah= $_POST['jumlah'];
	$tanggal= date('Y-m-d H:i:s');
$qinput= "INSERT INTO penjualan (kd_barang, jumlah, tanggal) values ('$kode','$jumlah','$tanggal')";
$input= mysqli_query($konek,$qinput);

$qinput= "update barang set stok=stok-".$jumlah." where kode_barang='".$kode."'";
$input= mysqli_query($konek,$qinput);

if($input){
			echo "<script>alert('Data Penjualan Berhasil Ditambah...');location.href='master_penjualan.php'</script>";
		}else{
			echo "<script>alert('Data Penjualan Gagal Ditambah...');location.href='penjualan.php'</script>";
		}
}
?>


<html>
<body>
<center><h1> Form Penjualan </h1>
<form role="form" method="post" name="form1" id="form1" enctype="multipart/form-data" action="penjualan.php">
<table border="0">
<td width="200"> <label> Nama Barang </label> </td> <td>
		<select name="kd_barang" id="kd_barang">
			<option value="0" selected>--Pilih--</option>
			<?php $i = "select * from barang";
				$h =mysqli_query($konek,$i); $no=1;
				while ($tr=mysqli_fetch_array($h)) { ?>
					<option value="<?php echo $tr[0];?>"><?php echo $tr[1];?></option>
				<?php } ?>
		</select>
</td>

<tr><td width="200"> <label> Jumlah </label></td><td><input name="jumlah" type="text"></td></tr>
</table>
<p>
<button type="submit" id="penjualan" name="penjualan"> Jual Barang </button>
</form></center>


</body>
</html>