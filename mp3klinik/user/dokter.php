<?php
include "atas.php";
include "koneksi.php";
echo"
<h1>Master Data Dokter</h1>
<table border=1 width=100%>
<tr>
	<th>No</th>
	<th>Kode Dokter</th>
	<th>Nama Dokter</th>
	<th>Foto</th>
	<th>Aksi</th>
	</tr>";
	$tampil=mysqli_query($koneksi, "SELECT * FROM dokter");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
				$tampil2=mysqli_query($koneksi,"SELECT * FROM spesialis WHERE kd_spesialis='$r[kd_spesialis]'");
$r2= mysqli_fetch_array($tampil2);
		echo"
		<tr>
		<td>$no</td>
		<td>$r[kd_dokter]</td>
		<td>$r[nama_dokter]</td>
		<td><img src='foto/".$r['foto']."'width='100' height='100'></td>
		<td> 
		<a href='view_dokter.php?id=$r[kd_dokter]'>View</a> </td></td> 
		</tr>";
		$no++;
	}
	echo"
	</table>";
	include "bawah.php";
	?>