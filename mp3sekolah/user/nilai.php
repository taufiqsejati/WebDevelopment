<?php
include "atas.php";
include "koneksi.php";
echo "
<h2>Master Data Nilai</h2>
<table border=1 width=100%>
<tr>
<th>No</th>
<th>ID Nilai</th>
<th>NIS</th>
<th>Kode Mata Pelajaran</th>
</tr>";
//$rata2 = (nilai_harian+nilai_uts+nilai_uas)/3;
$tampil=mysqli_query($koneksi,"SELECT * FROM nilai");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
	$tampil2=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$r[nis]'");
$r2= mysqli_fetch_array($tampil2);
	$rata2 = ($r['nilai_harian']+$r['nilai_uts']+$r['nilai_uas'])/3;
	if ($rata2 >50){
		$ket = 'Anda Lulus';
	}else {
		$ket = 'Anda Tidak Lulus';
	}
echo "
<tr>
<td>$no</td>
<td><a href=nilai_detail.php?id=$r[id_nilai]>$r[id_nilai]</a></td>
<td>$r[nis] | $r2[nama] </td>
<td>$r[kd_mapel] </td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>