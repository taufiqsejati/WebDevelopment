<?php
include "atas.php";
include "koneksi.php";
echo "
<h2>Master Data Nilai</h2>
<a href='nilai_input.php'>Input Nilai</a>
<table border=1 width=100%>
<tr>
<th>No</th>
<th>ID Nilai</th>
<th>NIS</th>
<th>Kode Mata Pelajaran</th>
<th>Aksi</th>
</tr>";
//$rata2 = (nilai_harian+nilai_uts+nilai_uas)/3;
$tampil=mysqli_query($koneksi,"SELECT * FROM nilai");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
	$tampil2=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$r[nis]'");
$r2= mysqli_fetch_array($tampil2);
$tampil3=mysqli_query($koneksi,"SELECT * FROM mapel WHERE kd_mapel='$r[kd_mapel]'");
$r3= mysqli_fetch_array($tampil3);
echo "
<tr>
<td>$no</td>
<td>$r[id_nilai]</td>
<td>$r[nis] | $r2[nama]</td>
<td>$r[kd_mapel] | $r3[nama_mapel]</td>
<td><a href='nilai_delete.php?id=$r[id_nilai]'>Del</a> |
<a href='nilai_edit.php?id=$r[id_nilai]'>Edit</a> | 
		<a href='nilai_detail.php?id=$r[id_nilai]'>Detail</a></td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>