<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO mapel (kd_mapel, nama_mapel)
												
												VALUES('$_POST[kd_mapel]',
															'$_POST[nama_mapel]')");
															
echo "<a href='mapel.php'>Data Sudah Masuk...!</a>";
?>