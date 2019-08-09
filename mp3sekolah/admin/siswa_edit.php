<?php
include "atas.php";
include "koneksi.php";
$tampil= mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
echo"
<h2>Edit Data Siswa</h2>
<form method='POST' action='aksi_siswa_edit.php'>
	<table border='0' width='100%'>
	<tr><td>Nomor Induk Siswa</td><td><input type=text name='nis' size='10' value='$r[nis]'></td></tr>
	
	<tr><td>Nama Siswa</td><td><input type=text name='nama' size='50' value='$r[nama]'></td></tr>
	
		<tr><td>Tempat Lahir</td><td><input type=text name='tempat_lahir' size='50' value='$r[tempat_lahir]'></td></tr>
	<tr><td>Tanggal Lahir</td><td><input type=date name='tanggal_lahir' size='50' value='$r[tanggal_lahir]'></td></tr>
	<tr><td>Jenis Kelamin</td><td><input type=text name='jk' size='50' value='$r[jk]'></td></tr>
	<tr><td>Agama</td><td><input type=text name='agama' size='50' value='$r[agama]'></td></tr>
	<tr><td>Alamat</td><td><input type=text name='alamat' size='50' value='$r[alamat]'></td></tr>
	<tr><td>Telepon</td><td><input type=text name='telp' size='50' value='$r[telp]'></td></tr>
	
	<tr><td>Nomor Induk Pengajar</td><td><input type=text name='nip' size='10' value='$r[nip]'></td></tr>
	<tr><td>Tahun Masuk</td><td><input type=text name='tahun_masuk' size='50' value='$r[tahun_masuk]'></td></tr>
	
	<tr><td>Proses</td><td><input type='submit' value='Perbaharui'></td></tr>
	</table>
</form>";
include "bawah.php"
?>