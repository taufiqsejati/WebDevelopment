<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE mapel SET nama_mapel = '$_POST[nama_mapel]'										
									WHERE kd_mapel='$_POST[kd_mapel]'");														
echo "<a href='mapel.php'>Data Sudah Di Edit...!</a>";
?>