<?php
include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Siswa</h2>
<form method='POST' action='aksi_siswa_input.php'>
	<table border='0' width='100%'>
	<tr><td>Nomor Induk Siswa</td><td><input type=text name='nis' size='10'></td></tr>
	
	<tr><td>Nama Siswa</td><td><input type=text name='nama' size='50'></td></tr>
	
	<tr><td>Tempat Lahir</td><td><input type=text name='tempat_lahir' size='50'></td></tr>
	<tr><td>Tanggal Lahir</td><td><input type=date name='tanggal_lahir' size='50'></td></tr>
	<tr><td>Jenis Kelamin</td><td><input type=text name='jk' size='50'></td></tr>
	<tr><td>Agama</td><td><input type=text name='agama' size='50'></td></tr>
	<tr><td>Alamat</td><td><input type=text name='alamat' size='50'></td></tr>
	<tr><td>Telepon</td><td><input type=text name='telp' size='50'></td></tr>
	
	<tr><td>Nomor Induk Pengajar</td><td><input type=text name='nip' size='10'></td></tr>
	<tr><td>Tahun Masuk</td><td><input type=text name='tahun_masuk' size='50'></td></tr>
	
	<tr><td>Proses</td><td><input type='submit' value='Simpan'></td></tr>
	</table>
</form>";
include "bawah.php"
?>