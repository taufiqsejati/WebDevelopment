<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE nilai SET nis = '$_POST[nis]',
											kd_mapel = '$_POST[kd_mapel]',
											nilai_harian = '$_POST[nilai_harian]',
											nilai_uts = '$_POST[nilai_uts]',
											nilai_uas = '$_POST[nilai_uas]'											
									WHERE id_nilai='$_POST[id_nilai]'");														
echo "<a href='nilai.php'>Data Sudah Di Edit...!</a>";
?>