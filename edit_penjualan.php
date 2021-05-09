<html>
<head>
<title>EDIT PENJUALAN</title>
<link rel="stylesheet" href="css/style_penjualan.css"/>
</head>

<?php
date_default_timezone_set('Asia/Jakarta');
include 'koneksi.php';
if(isset($_POST['edit_penjualan'])) {
	$kode= $_POST['kd_barang'];
	$jumlah= $_POST['jumlah'];
	$tanggal= date('Y-m-d H:i:s');

$qinput="update penjualan	 set 	kd_barang= '$_POST[kode]' ,
									jumlah= '$_POST[jumlah]',
									tanggal= '$_POST[tanggal]'
									where id= '$_POST[id]'
								";	

$input= mysqli_query($konek,$qinput);
if($input){
			echo "<script>alert('Data Penjualan Berhasil Ditambah...');location.href='master_penjualan.php'</script>";
		}else{
			echo "<script>alert('Data Penjualan Gagal Ditambah...');location.href='master_penjualan.php'</script>";
		}
}
?>

<?php
$id = $_GET['id'];
$i = "select * from penjualan where id=$id"; 
$h = mysqli_query($konek,$i);
while($tr=mysqli_fetch_array($h))
{
	$kd_barang=$tr[1]; $jumlah=$tr[2]; $tanggal=$tr[3];
}
?>


<html>
<body>
<center><h1> Form Penjualan </h1>
<form role="form" method="post" name="form1" id="form1" enctype="multipart/form-data" action="penjualan.php">
<table border="0">
<td width="200"> <label> Nama Barang </label></td> <td>
		<select name="kd_barang" id="kd_barang">
			<option value="0" selected>--Pilih--</option>
			<?php $i = "select * from barang";
				$h =mysqli_query($konek,$i); $no=1;
				while ($tr=mysqli_fetch_array($h)) { ?>
					<option value="<?php echo $tr[0];?>"><?php echo $tr[1];?></option>
				<?php } ?>
		</select>
</td>

<tr><td width="200"> <label>Jumlah </label></td><td><input value= "<?php echo $jumlah;?>" name="jumlah" type="text"></td></tr>
</table>
<p>
<button type="submit" id="penjualan" name="penjualan"> Jual Barang </button>
</form></center>


</body>
</html>