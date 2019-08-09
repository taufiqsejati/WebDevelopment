<?php
include "atas.php";
include "koneksi.php";
echo"
<h1>Master Data Spesialis</h1>
<table border=1 width=100%>
<tr>
	<th>No</th>
	<th>Kode Spesialis</th>
	<th>Nama spesialis_input</th>
	</tr>";
	$tampil=mysqli_query($koneksi, "SELECT * FROM spesialis");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
		echo"
		<tr>
		<td>$no</td>
		<td>$r[kd_spesialis]</td>
		<td>$r[nama_spesialis]</td>
		</tr>";
		$no++;
	}
	echo"
	</table>";
	include "bawah.php";
	?>