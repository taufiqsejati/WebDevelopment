<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE dokter SET 

				nama_dokter ='$_POST[nama_dokter]',
				jk='$_POST[jk]',
				agama='$_POST[agama]',
				alamat='$_POST[alamat]',
				kota='$_POST[kota]',
				telp='$_POST[telp]',
				foto='$_POST[foto]',
				kd_spesialis ='$_POST[kd_spesialis]'
				WHERE kd_dokter='$_POST[kd_dokter]'");
echo "<a href='dokter.php'> Data Sudah Masuk..!</a>";
?>
