<?php
include "atas.php";
include "koneksi.php";
$tampil= mysqli_query($koneksi, "SELECT * FROM spesialis WHERE kd_spesialis='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
echo"
<h2>Edit Data Spesialis</h2>
<form method='POST' action='aksi_spesialis_edit.php'>
	<table border='0' width='100%'>

	<tr>
	<td>Kode Pasien</td>
	<td><input type=text name='kd_spesialis' size='50' 
	value='$r[kd_spesialis]'></td>
	</tr>
	
	<tr>
	<td>Nama Pasien</td>
	<td><input type=text name='nama_spesialis' size='50' 
	value='$r[nama_spesialis]'></td>
	</tr>
	
	<tr>
	<td>Proses</td>
	<td><input type='submit' value='Perbaharui'></td>
	</tr>
	</table>
</form>";
include "bawah.php"
?>