<?php
include "atas.php";
include "koneksi.php";
echo"
<h1>Master Data Pemeriksaan</h1>
<table border=1 width=100%>
<tr>
	<th>No</th>
	<th>Id Pemeriksaan</th>
	<th>Tanggal Pemeriksaan</th>
	<th>Kode Pasien</th>
	<th>Aksi</th>
	</tr>";
	$tampil=mysqli_query($koneksi, "SELECT * FROM pemeriksaaan");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
		$tampil2=mysqli_query($koneksi,"SELECT * FROM pasien WHERE kd_pasien='$r[kd_pasien]'");
$r2= mysqli_fetch_array($tampil2);
		echo"
		<tr>
		<td>$no</td>
		<td>$r[id_pemeriksaan]</td>
		<td>$r[tgl_pemeriksaan]</td>
		<td>$r[kd_pasien] | $r2[nama_pasien] </td>
		<td>
		<a href='view_pemeriksaan.php?id=$r[id_pemeriksaan]'>View</a> </td>
		</tr>";
		$no++;
	}
	echo"
	</table>";
	include "bawah.php";
	?>