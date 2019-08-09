<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO guru (nip, nama, kd_mapel, tanggal_lahir, jk, agama, telp, tahun_mengajar, alamat)
												
												VALUES('$_POST[nip]',
															'$_POST[nama]',
															'$_POST[kd_mapel]',
															'$_POST[tanggal_lahir]',
															'$_POST[jk]',
															'$_POST[agama]',
															'$_POST[telp]',
															'$_POST[tahun_mengajar]',
															'$_POST[alamat]')");
															
echo "<a href='guru.php'>Data Sudah Masuk...!</a>";
?>