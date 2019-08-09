<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE pasien SET 

				nama_pasien ='$_POST[nama_pasien]',
				jk='$_POST[jk]',
				tgl_lahir='$_POST[tgl_lahir]',
				agama='$_POST[agama]',
				alamat='$_POST[alamat]',
				telp='$_POST[telp]'
				WHERE kd_pasien='$_POST[kd_pasien]'");
echo "<a href='pasien.php'> Data Sudah Masuk..!</a>";
?>
