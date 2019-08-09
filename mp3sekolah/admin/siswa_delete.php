<?php
include "koneksi.php";
mysqli_query($koneksi," DELETE FROM siswa WHERE nis='$_GET[id]'");
echo "<a href='siswa.php'>Data Sudah Dihapus Bro...!</a>";
?>