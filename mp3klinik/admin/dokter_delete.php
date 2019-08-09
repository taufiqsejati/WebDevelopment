<?php
include "koneksi.php";
mysqli_query($koneksi,"DELETE FROM dokter WHERE kd_dokter='$_GET[id]'");
echo "<a href='dokter.php'>Data Sudah Dihapus Bro...!</a>";
?>