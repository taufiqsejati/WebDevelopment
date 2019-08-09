<?php
include "atas.php";
include "koneksi.php";
$tampil= mysqli_query($koneksi, "SELECT * FROM dokter WHERE kd_dokter='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
echo"
<h2>Edit Data Dokter</h2>
<form method='POST' action='aksi_dokter_edit.php'>
	<table border='0' width='100%'>

	<tr>
	<td>Kode Dokter</td>
	<td><input type=text name='kd_dokter' size='50' 
	value='$r[kd_dokter]'></td>
	</tr>
	
	<tr>
	<td>Nama Dokter</td>
	<td><input type=text name='nama_dokter' size='50' 
	value='$r[nama_dokter]'></td>
	</tr>
	
	<tr>
	<td>Jenis Kelamin</td>
	<td><input type=text name='jk' size='50' 
	value='$r[jk]'></td>
	</tr>

	<tr>
	<td>Agama</td>
	<td><input type=text name='agama' size='50' 
	value='$r[agama]'></td>
	</tr>

	<tr>
	<td>Alamat</td>
	<td><input type=text name='alamat' size='50' 
	value='$r[alamat]'></td>
	</tr>

	<tr>
	<td>Kota</td>
	<td><input type=text name='kota' size='50' 
	value='$r[kota]'></td>
	</tr>

	<tr>
	<td>Telepon</td>
	<td><input type=text name='telp' size='50' 
	value='$r[telp]'></td>
	</tr>

	<tr>
	<td>Foto</td>
	<td><input type=text name='foto' size='50' 
	value='$r[foto]'><img src</td>
	</tr>

	<tr>
	<td>Kode Spesialis</td>
	<td><input type=text name='kd_spesialis' size='50' 
	value='$r[kd_spesialis]'></td>
	</tr>
	
	<tr>
	<td>Proses</td>
	<td><input type='submit' value='Perbaharui'></td>
	</tr>
	</table>
</form>";
include "bawah.php"
?>