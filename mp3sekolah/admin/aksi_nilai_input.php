<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO nilai (
id_nilai, 
nis,
kd_mapel,
nilai_harian,
nilai_uts,
nilai_uas)
												
												VALUES('$_POST[id_nilai]',
															'$_POST[nis]',
															'$_POST[kd_mapel]',
															'$_POST[nilai_harian]',
															'$_POST[nilai_uts]',
															'$_POST[nilai_uas]')");
															
echo "<a href='nilai.php'>Data Sudah Masuk...!</a>";
?>