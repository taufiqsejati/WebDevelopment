<?php
include "atas.php";
include "koneksi.php";
echo "
<h2>Master Data Mata Pelajaran</h2>
<table border=1 width=100%>
<tr>
<th>No</th>
<th>Kode Mata Pelajaran</th>
<th>Nama Mata Pelajaran</th>
</tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM mapel");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "
<tr>
<td>$no</td>
<td>$r[kd_mapel]</td>
<td>$r[nama_mapel] </td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>