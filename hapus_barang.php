<?php
include 'koneksi.php';

$id=$_GET['id'];
$qinput="delete from barang where kode_barang='$id'";

$input=mysqli_query($konek,$qinput);
if ($input) {
			echo "<script>alert('Data barang berhasil dihapus..'); 
			location.href='barang.php' </script>";
	}else{
			echo "<script>alert('Data barang gagal dihapus..'); 
			location.href='barang.php' </script>";
			}
?>