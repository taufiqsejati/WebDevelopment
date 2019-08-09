<?php
include "atas.php";
include "koneksi.php";
echo "
<h2>Master Data Guru</h2>
<table border=1 width=100%>
<tr>
	<th>No</th>
	<th>NIP</th>
	<th>Nama Guru</th>
	<th>Mata Pelajaran</th>
</tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM guru");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
$tampil2=mysqli_query($koneksi,"SELECT * FROM mapel WHERE kd_mapel='$r[kd_mapel]'");
$r2= mysqli_fetch_array($tampil2);
echo "
<tr>
<td>$no</td>
<td><a href=guru_detail.php?id=$r[nip]>$r[nip]</a></td>
<td>$r[nama] </td>
<td>$r[kd_mapel] | $r2[nama_mapel] </td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>