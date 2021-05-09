<html>
<head>
<title>Data Barang</title>
<link rel="stylesheet" href="css/style_barang.css"/>
</head>

<body>
<center> <h2> DATA HARGA BARANG </h2> 
<p>

<div class="sidebar">
  <a href="tambah_barang.php" class="option">Tambah Barang </a>
  <a href="barang.php" class="option2"> Daftar Harga Barang</a>
  <a href="penjualan.php" class="option"> Jual Barang </a>
  <a href="master_penjualan.php" class="option"> Master Penjualan </a>
</div>


<center><table border="4">
<thead>
	<tr>
		<th> No. </th>
		<th> Kode Barang </th>
		<th> Nama Barang </th>
		<th> Harga Beli (Rp) </th>
		<th> Harga Jual (Rp) </th>
		<th> Stok </th>
		<th> Aksi </th>

	</tr>
</thead>
<tbody> <?php
include "koneksi.php"; 
$i = "select * from barang"; 
$h = mysqli_query($konek,$i); $no=1;
while($tr=mysqli_fetch_array($h))
{ ?> <tr> <td><?php echo $no; ?></td>		
		  <td><?php echo $tr[0]; ?> </td>
		  <td><?php echo $tr[1]; ?> </td>
		  <td><?php echo $tr[2]; ?> </td>	
		  <td><?php echo $tr[3]; ?> </td>
		  <td><?php echo $tr[4]; ?> </td>
		  <td><a href="edit_barang.php?id=<?php echo $tr[0];?>">Edit</a> | <a href="hapus_barang.php?id=<?php echo $tr[0];?>">Hapus</a> </td>
	 </tr> <?php $no++; } ?>
</tbody>
</table></center>

</body>
<p>

</html>