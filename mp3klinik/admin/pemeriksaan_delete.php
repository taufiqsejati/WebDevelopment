<?php
include "koneksi.php";
mysqli_query($koneksi,"DELETE FROM pemeriksaaan WHERE id_pemeriksaan='$_GET[id]'");
echo "<a href='pemeriksaan.php'>Data Sudah Dihapus Bro...!</a>";
?>