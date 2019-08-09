<?php
include "atas.php";
include "koneksi.php";
echo "
<h2>Master Data Siswa</h2>
<table border=1 width=100%>
<tr>
<th>No</th>
<th>NIS</th>
<th>Nama Siswa</th>
</tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM siswa");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
$tampil2=mysqli_query($koneksi,"SELECT * FROM guru WHERE nip='$r[nip]'");
$r2= mysqli_fetch_array($tampil2);
echo "
<tr>
<td>$no</td>
<td><a href=siswa_detail.php?id=$r[nis]>$r[nis]</a></td>
<td>$r[nama] </td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>