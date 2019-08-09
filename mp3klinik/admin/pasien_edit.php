<?php
include "atas.php";
include "koneksi.php";
$tampil= mysqli_query($koneksi, "SELECT * FROM pasien WHERE kd_pasien='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
echo"
<h2>Edit Data Pasien</h2>
<form method='POST' action='aksi_pasien_edit.php'>
	<table border='0' width='100%'>

	<tr>
	<td>Kode Pasien</td>
	<td><input type=text name='kd_pasien' size='50' 
	value='$r[kd_pasien]'></td>
	</tr>
	
	<tr>
	<td>Nama Pasien</td>
	<td><input type=text name='nama_pasien' size='50' 
	value='$r[nama_pasien]'></td>
	</tr>
	
	<tr>
	<td>Jenis Kelamin</td>
	<td><input type=text name='jk' size='50' 
	value='$r[jk]'></td>
	</tr>

	<tr>
	<td>Tanggal Lahir</td>
	<td><input type=date name='tgl_lahir' size='50' 
	value='$r[tgl_lahir]'></td>
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
	<td>Telepon</td>
	<td><input type=text name='telp' size='50' 
	value='$r[telp]'></td>
	</tr>
	
	<tr>
	<td>Proses</td>
	<td><input type='submit' value='Perbaharui'></td>
	</tr>
	</table>
</form>";
include "bawah.php"
?>