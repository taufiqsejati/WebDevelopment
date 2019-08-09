<?php
include "atas.php";
include "koneksi.php";
// document.write("<p>"+ nama +"</p>");
echo"
<h1>Master Data Spesialis</h1>
<a href='spesialis_input.php'>Input Data Spesialis</a>
<table border=1 width=100%>
<tr>
	<th>No</th>
	<th>Kode Spesialis</th>
	<th>Nama spesialis</th>
	<th>Aksi</th>
	</tr>";
	$tampil=mysqli_query($koneksi, "SELECT * FROM spesialis");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
		echo"
		<tr>
		<td>$no</td>
		<td>$r[kd_spesialis]</td>
		<td>$r[nama_spesialis]</td>
		<td><a href='spesialis_delete.php?id=$r[kd_spesialis]'>Del</a>  | 
		<a href='spesialis_edit.php?id=$r[kd_spesialis]'>Edit</a></td></td> 
		</tr>";
		$no++;
	}
	echo"
	</table>";
	include "bawah.php";
	?>