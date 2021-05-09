<html>
<head>
<title>Master Penjualan</title>
<link rel="stylesheet" href="css/style_master_penjualan.css"/>
</head>

<body>
<center> <h2> MASTER PENJUALAN </h2> 
<p>

<div class="sidebar">
  <a href="tambah_barang.php" class="option">Tambah Barang </a>
  <a href="barang.php" class="option"> Daftar Harga Barang</a>
  <a href="penjualan.php" class="option"> Jual Barang </a>
  <a href="master_penjualan.php" class="option2"> Master Penjualan </a>
</div>

<center><table border="1">
<thead>
	<tr>
		<th>No.</th>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Harga Jual (Rp)</th>
		<th>Jumlah</th>
		<th>Total</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody> <?php
include "koneksi.php"; 
$i = "SELECT a.* , b.nama_barang, b.harga_jual FROM penjualan a 
	 left join barang b on b.kode_barang=a.kd_barang"; 
$h = mysqli_query($konek,$i); $no=1;
while($tr=mysqli_fetch_array($h))
{ ?> <tr> <td><?php echo $no; ?></td>		
			<td><?php echo $tr['kd_barang']; ?> </td>
			<td><?php echo $tr['nama_barang']; ?> </td>
			<td><?php echo $tr['harga_jual']; ?> </td>	
			<td><?php echo $tr['jumlah']; ?> </td>
			<td><?php echo $tr['harga_jual'] * $tr['jumlah']; ?> </td>
			<td><?php echo $tr['tanggal']; ?> </td>
			<td><a href="edit_penjualan.php?id=<?php echo $tr[0];?>">Edit</a> | <a href="hapus_penjualan.php?id=<?php echo $tr[0];?>">Hapus</a> </td>
	 </tr> <?php $no++; } ?>
</tbody>
</table> </center>
</html>