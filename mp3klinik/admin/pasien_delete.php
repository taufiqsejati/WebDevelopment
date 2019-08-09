<?php
include "koneksi.php";
mysqli_query($koneksi,"DELETE FROM pasien WHERE kd_pasien='$_GET[id]'");
echo "<a href='pasien.php'>Data Sudah Dihapus Bro...!</a>";
?>