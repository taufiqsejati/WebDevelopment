<?php
include "atas.php";
include "koneksi.php";
echo"
<h1>Master Data Pasien</h1>
<a href='pasien_input.php'>Input Data Pasien</a>
<table border=1 width=100%>
<tr>
	<th>No</th>
	<th>Kode Pasien</th>
	<th>Nama Pasien</th>
	<th>Jenis Kelamin</th>
	<th>Tanggal Lahir</th>
	<th>Agama</th>
	<th>Alamat</th>
	<th>Telepon</th>
	<th>Aksi</th>
	</tr>";
	$tampil=mysqli_query($koneksi, "SELECT * FROM pasien");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
		echo"
		<tr>
		<td>$no</td>
		<td>$r[kd_pasien]</td>
		<td>$r[nama_pasien]</td>
		<td>$r[jk] </td>
		<td>$r[tgl_lahir] </td>
		<td>$r[agama] </td>
		<td>$r[alamat] </td>
		<td>$r[telp] </td>
		<td><a href='pasien_delete.php?id=$r[kd_pasien]'>Del</a>  | 
		<a href='pasien_edit.php?id=$r[kd_pasien]'>Edit</a> |
		<a href='view_pasien.php?id=$r[kd_pasien]'>View</a> </td>
		</tr>";
		$no++;
	}
	echo"
	</table>";
	include "bawah.php";
	?>