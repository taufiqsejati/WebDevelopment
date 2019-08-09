<?php
include "atas.php";
include "koneksi.php";
echo "
<h2>Master Data Mata Pelajaran</h2>
<a href='mapel_input.php'>Input Mata Pelajaran</a>
<table border=1 width=100%>
<tr>
<th>No</th>
<th>Kode Mata Pelajaran</th>
<th>Nama Mata Pelajaran</th>
<th>Aksi</th>
</tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM mapel");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "
<tr>
<td>$no</td>
<td>$r[kd_mapel]</td>
<td>$r[nama_mapel] </td>
<td><a href='mapel_delete.php?id=$r[kd_mapel]'>Del</a> |
<a href='mapel_edit.php?id=$r[kd_mapel]'>Edit</a></td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>