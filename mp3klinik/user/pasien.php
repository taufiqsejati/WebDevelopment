<?php
include "atas.php";
include "koneksi.php";
echo"
<h1>Master Data Pasien</h1>
<table border=1 width=100%>
<tr>
	<th>No</th>
	<th>Kode Pasien</th>
	<th>Nama Pasien</th>
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
		<td>
		<a href='view_pasien.php?id=$r[kd_pasien]'>View</a> </td>
		</tr>";
		$no++;
	}
	echo"
	</table>";
	include "bawah.php";
	?>