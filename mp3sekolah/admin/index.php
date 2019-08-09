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
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
<th>Alamat</th>
<th>Telpon</th>
<th>NIP Guru Wali</th>
<th>Tahun Masuk</th>
<th>Aksi</th>
</tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM siswa");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
$tampil2=mysqli_query($koneksi,"SELECT * FROM guru WHERE nip='$r[nip]'");
$r2= mysqli_fetch_array($tampil2);
echo "
<tr>
<td>$no</td>
<td>$r[nis]</td>
<td>$r[nama] </td>
<td>$r[tempat_lahir] </td>
<td>$r[tanggal_lahir] </td>
<td>$r[jk] </td>
<td>$r[agama] </td>
<td>$r[alamat] </td>
<td>$r[telp] </td>
<td>$r[nip] | $r2[nama]</td>
<td>$r[tahun_masuk] </td>
<td><a href='siswa_delete.php?id=$r[nis]'>Del</a> | 
		<a href='siswa_edit.php?id=$r[nis]'>Edit</a> </td>
</tr>";
$no=$no+1;
}
echo "
</table>";
include "bawah.php";
?>