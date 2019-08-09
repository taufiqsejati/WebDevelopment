<?php
include "koneksi.php";
mysqli_query($koneksi," DELETE FROM guru WHERE nip='$_GET[id]'");
echo "<a href='guru.php'>Data Sudah Dihapus Bro...!</a>";
?>