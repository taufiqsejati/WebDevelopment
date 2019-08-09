<?php
include "koneksi.php";
mysqli_query($koneksi,"DELETE FROM spesialis WHERE kd_spesialis='$_GET[id]'");
echo "<a href='spesialis.php'>Data Sudah Dihapus Bro...!</a>";
?>