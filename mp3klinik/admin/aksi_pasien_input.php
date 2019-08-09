<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO pasien(kd_pasien, nama_pasien,jk,tgl_lahir,agama,alamat,telp)
VALUES ('$_POST[kd_pasien]',
				'$_POST[nama_pasien]',
				'$_POST[jk]',
				'$_POST[tgl_lahir]',
				'$_POST[agama]',
				'$_POST[alamat]',
				'$_POST[telp]')");
echo"<a href='pasien.php'> Data Sudah Masuk..!</a>";
?>


