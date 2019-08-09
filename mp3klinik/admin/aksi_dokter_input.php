<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO dokter(kd_dokter,nama_dokter,jk,agama,alamat,kota,telp,foto,kd_spesialis)
VALUES ('$_POST[kd_dokter]',
				'$_POST[nama_dokter]',
				'$_POST[jk]',
				'$_POST[agama]',
				'$_POST[alamat]',
				'$_POST[kota]',
				'$_POST[telp]',
				'$_POST[foto]',
				'$_POST[kd_spesialis]')");
echo "<a href='dokter.php'> Data Sudah Masuk..!</a>";
?>
