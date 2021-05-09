<?php
include 'koneksi.php';

$id=$_GET['id'];
$qinput="delete from penjualan where id='$id'";

$input=mysqli_query($konek,$qinput);
if ($input) {
			echo "<script>alert('Data penjualan berhasil dihapus..'); 
			location.href='master_penjualan.php' </script>";
	}else{
			echo "<script>alert('Data penjualan gagal dihapus..'); 
			location.href='master_penjualan.php' </script>";
			}
?>