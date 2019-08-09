<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE guru SET nama = '$_POST[nama]',
											kd_mapel = '$_POST[kd_mapel]',
											tanggal_lahir = '$_POST[tanggal_lahir]',
											jk = '$_POST[jk]',
											agama = '$_POST[agama]',
											telp = '$_POST[telp]',											
											tahun_mengajar = '$_POST[tahun_mengajar]',
											alamat = '$_POST[alamat]'
									WHERE nip='$_POST[nip]'");														
echo "<a href='guru.php'>Data Sudah Di Edit...!</a>";
?>