<?php
include "atas.php";
include "koneksi.php";
echo "
<h2>Master Data Siswa</h2>
<a href='siswa_input.php'>Input Siswa</a>
<table border=1 width=100%>
<tr>
<th>No</th>
<th>NIS</th>
<th>Nama Siswa</th>
<th>Aksi</th>
</tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM siswa");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "
<tr>
<td>$no</td>
<td>$r[nis]</td>
<td>$r[nama] </td>
<td><a href='siswa_delete.php?id=$r[nis]'>Del</a> | 
		<a href='siswa_edit.php?id=$r[nis]'>Edit</a> | 
		<a href='siswa_detail.php?id=$r[nis]'>Detail</a> </td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>