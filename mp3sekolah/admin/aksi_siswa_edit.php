<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE siswa SET nama = '$_POST[nama]',
											tempat_lahir = '$_POST[tempat_lahir]',
											tanggal_lahir = '$_POST[tanggal_lahir]',
											jk = '$_POST[jk]',
											agama = '$_POST[agama]',
											alamat = '$_POST[alamat]',
											telp = '$_POST[telp]',
											nip = '$_POST[nip]',
											tahun_masuk = '$_POST[tahun_masuk]'
									WHERE nis='$_POST[nis]'");														
echo "<a href='siswa.php'>Data Sudah Di Edit...!</a>";
?>