<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO spesialis (kd_spesialis, nama_spesialis)
VALUES ('$_POST[kd_spesialis]',
				'$_POST[nama_spesialis]')");
echo"<a href='spesialis.php'> Data Sudah Masuk..!</a>";
?>


