<?php
include "atas.php";
include "koneksi.php";
$tampil= mysqli_query($koneksi, "SELECT * FROM mapel WHERE kd_mapel='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
echo"
<h2>Edit Data Mata Pelajaran</h2>
<form method='POST' action='aksi_mapel_edit.php'>
	<table border='0' width='100%'>
	<tr><td>Nomor Induk Siswa</td><td><input type=text name='kd_mapel' size='10' value='$r[kd_mapel]'></td></tr>
	
	<tr><td>Nama Siswa</td><td><input type=text name='nama_mapel' size='50' value='$r[nama_mapel]'></td></tr>
	
	<tr><td>Proses</td><td><input type='submit' value='Perbaharui'></td></tr>
	</table>
</form>";
include "bawah.php"
?>