<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO siswa (nis, nama, tempat_lahir, tanggal_lahir, jk, agama, alamat, telp, nip, tahun_masuk)
												
												VALUES('$_POST[nis]',
															'$_POST[nama]',
															'$_POST[tempat_lahir]',
															'$_POST[tanggal_lahir]',
															'$_POST[jk]',
															'$_POST[agama]',
															'$_POST[alamat]',
															'$_POST[telp]',
															'$_POST[nip]',
															'$_POST[tahun_masuk]')");
															
echo "<a href='siswa.php'>Data Sudah Masuk...!</a>";
?>