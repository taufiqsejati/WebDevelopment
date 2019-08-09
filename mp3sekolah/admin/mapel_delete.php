<?php
include "koneksi.php";
mysqli_query($koneksi," DELETE FROM mapel WHERE kd_mapel='$_GET[id]'");
echo "<a href='mapel.php'>Data Sudah Dihapus Bro...!</a>";
?>