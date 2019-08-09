<?php
include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Guru</h2>
<form method='POST' action='aksi_guru_input.php'>
	<table border='0' width='100%'>
	<tr><td>Nomor Induk Pengajar</td><td><input type=text name='nip' size='10'></td></tr>
	
	<tr><td>Nama Guru</td><td><input type=text name='nama' size='50'></td></tr>
	<tr><td>Kode Mata Pelajaran</td><td><input type=text name='kd_mapel' size='50'></td></tr>	
	<tr><td>Tanggal Lahir</td><td><input type=date name='tanggal_lahir' size='50'></td></tr>
	<tr><td>Jenis Kelamin</td><td><input type=text name='jk' size='50'></td></tr>
	<tr><td>Agama</td><td><input type=text name='agama' size='50'></td></tr>
	<tr><td>Telepon</td><td><input type=text name='telp' size='50'></td></tr>
	<tr><td>Tahun Mengajar</td><td><input type=text name='tahun_mengajar' size='50'></td></tr>
	
	<tr><td>Alamat</td><td><input type=text name='alamat' size='10'></td></tr>
	
	<tr><td>Proses</td><td><input type='submit' value='Simpan'></td></tr>
	</table>
</form>";
include "bawah.php"
?>