<?php
include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Mata Pelajaran</h2>
<form method='POST' action='aksi_mapel_input.php'>
	<table border='0' width='100%'>
	<tr><td>Nomor Induk Siswa</td><td><input type=text name='kd_mapel' size='10'></td></tr>
	
	<tr><td>Nama Siswa</td><td><input type=text name='nama_mapel' size='50'></td></tr>
	
	<tr><td>Proses</td><td><input type='submit' value='Simpan'></td></tr>
	</table>
</form>";
include "bawah.php"
?>